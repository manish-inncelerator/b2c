<?php
/**
 * MG Bedbank PROPER Workflow (Search → Recheck → Book)
 */

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/MG/autoload.php";
require_once __DIR__ . "/MG/MG.php";

use MG\MG;
use MG\Core\MGException;

MG::init();

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<head>
<title>MG Workflow</title>
<style>
body {font-family:Arial; max-width:1100px; margin:20px auto; background:#f7f7f9;}
.box {background:#fff; padding:25px; margin:20px 0; border-radius:8px; box-shadow:0 0 5px #ddd;}
.success {background:#d4edda; padding:12px; margin:10px 0;}
.error {background:#f8d7da; padding:12px; margin:10px 0;}
.info {background:#e2e3ff; padding:12px; margin:10px 0;}
pre {background:#fafafa; padding:12px; max-height:500px; overflow:auto;}
.step-title {font-size:20px; margin-bottom:10px;}
</style>
</head>
<body>

<div class="box">
<h1>🏨 MG Bedbank – FULL WORKFLOW</h1>

<?php

try {

/*===========================================================
 STEP 1 — SEARCH
===========================================================*/
echo "<div class='step-title'>Step 1: Search</div>";

$cityCode = "SG-SIN";
$countryCode = explode("-", $cityCode)[0];

$searchParams = [
    "Nationality" => "SG",
    "Country"     => $countryCode,
    "City"        => $cityCode,
    "CheckIn"     => date("Y-m-d", strtotime("+7 days")),
    "CheckOut"    => date("Y-m-d", strtotime("+9 days")),
    "Currency"    => "SGD",
    "Rooms" => [
        "Room" => [
            [
                "RoomNo"     => "1",
                "NoOfAdults" => "2",
                "NoOfChild"  => "1",
                "Child1Age"  => "8",
                "ExtraBed"   => false
            ]
        ]
    ]
];

$result = MG::search()->search($searchParams);

echo "<div class='success'>✔ Search Complete</div>";
echo "<pre>" . print_r($result, true) . "</pre>";

$data      = $result["data"];
$sessionID = $data["sessionID"];
$hotelList = $data["hotels"]["hotel"];

$hotel     = $hotelList[0];
$hotelCode = $hotel["code"];

echo "<div class='info'>Session: $sessionID<br>Hotel: $hotelCode</div>";

$roomDetails = $hotel["roomDetails"][0];
$roomInfo    = $roomDetails["rooms"]["room"][0];

$rateKey = $roomInfo["rateKey"];

echo "<div class='info'>RateKey: $rateKey</div>";


/*===========================================================
 STEP 2 — RECHECK (100% MG FORMAT)
===========================================================*/
echo "<div class='step-title'>Step 2: Recheck</div>";

$recheckParams = [
    "SessionID"   => $sessionID,
    "Nationality" => $searchParams["Nationality"],
    "Country"     => $countryCode,
    "City"        => $cityCode,
    "HotelCode"   => $hotelCode,
    "CheckIn"     => $searchParams["CheckIn"],
    "CheckOut"    => $searchParams["CheckOut"],
    "Currency"    => $searchParams["Currency"],

    "RoomDetails" => [
        "code"                   => $roomDetails["code"],
        "mealPlan"               => $roomDetails["mealPlan"],
        "cancellationPolicyType" => $roomDetails["cancellationPolicyType"],
        "promoCode"              => $roomDetails["promoCode"] ?? "",
        "packageRate"            => $roomDetails["packageRate"] ?? ""
    ],

    "Rooms" => [
        "Room" => [
            [
                "roomNo"     => $roomInfo["roomNo"],
                "rateKey"    => $roomInfo["rateKey"],
                "noOfAdults" => $roomInfo["noOfAdults"],
                "noOfChild"  => $roomInfo["noOfChild"],
                "child1Age"  => $roomInfo["child1Age"],
                "child2Age"  => $roomInfo["child2Age"],
                "extraBed"   => $roomInfo["extraBed"]
            ]
        ]
    ],

    "Language"    => "EN",
    "DetailLevel" => "FULL"
];

$recheck = MG::recheck()->recheck($recheckParams);

echo "<div class='success'>✔ Recheck Complete</div>";
echo "<pre>" . print_r($recheck, true) . "</pre>";

$finalRateKey = $roomInfo["rateKey"];


/*===========================================================
 STEP 3 — BOOK
===========================================================*/
echo "<div class='step-title'>Step 3: Booking</div>";

/* WARNING: Remove this to actually book */
// return;

$agencyID = substr("BK".time(), 0, 15);

$bookParams = [
    "SessionID"       => $sessionID,
    "AgencyBookingID" => $agencyID,
    "Nationality"     => $searchParams["Nationality"],
    "CheckIn"         => $searchParams["CheckIn"],
    "CheckOut"        => $searchParams["CheckOut"],
    "HotelCode"       => $hotelCode,
    "Currency"        => "SGD",

    "Rooms" => [
        "Room" => [
            [
                "RoomNo"     => $roomInfo["roomNo"],
                "NoOfAdults" => $roomInfo["noOfAdults"],
                "NoOfChild"  => $roomInfo["noOfChild"],
                "Child1Age"  => $roomInfo["child1Age"],
                "Child2Age"  => $roomInfo["child2Age"],
                "RateKey"    => $finalRateKey
            ]
        ]
    ],

    "RoomDetails" => [
        "Code"                   => $roomDetails["code"],
        "MealPlan"               => $roomDetails["mealPlan"],
        "CancellationPolicyType" => $roomDetails["cancellationPolicyType"],
        "PackageRate"            => $roomDetails["packageRate"]
    ],

    "PaxDetails" => [
        "Pax" => [
            [
                "Salutation" => "Mr",
                "FirstName"  => "Test",
                "LastName"   => "Customer",
                "Age"        => ""
            ]
        ]
    ],

    "SpecialReq" => "Test Booking",
    "OnHold"     => false,

    "Language"    => "EN",
    "DetailLevel" => "FULL"
];

$booking = MG::book()->book($bookParams);

echo "<div class='success'>✔ Booking Complete</div>";
echo "<pre>" . print_r($booking, true) . "</pre>";


} catch (Exception $e) {
    echo "<div class='error'>".$e->getMessage()."</div>";
}

?>
</div>


</body>
</html>
