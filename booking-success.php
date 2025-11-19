<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed - Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #0066cc;
            --primary-dark: #0052a3;
            --secondary-color: #20c997;
            --accent-color: #ff6b35;
            --success-color: #28a745;
            --dark-color: #1a1a1a;
            --text-color: #2c3e50;
            --text-light: #6c757d;
            --light-bg: #f8f9fa;
            --border-color: #e0e0e0;
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.12);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        /* Top Strip */
        .top-strip {
            background: linear-gradient(90deg, #c9a568 0%, #d4a574 50%, #c9a568 100%);
            height: 3px;
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        /* Navbar */
        .navbar {
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            padding: 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 50px;
        }
        
        .navbar-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 0;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .logo-section:hover {
            transform: translateY(-2px);
        }
        
        .logo-image {
            height: 44px;
            width: auto;
            object-fit: contain;
        }
        
        /* Success Page */
        .success-page {
            padding: 80px 20px;
            min-height: calc(100vh - 200px);
        }
        
        .success-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .success-card {
            background: white;
            border-radius: 24px;
            padding: 60px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            border: 2px solid var(--border-color);
            text-align: center;
        }
        
        .success-icon-wrapper {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--success-color) 0%, #20c997 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 32px;
            animation: successPulse 2s ease-in-out infinite;
            box-shadow: 0 8px 32px rgba(40, 167, 69, 0.3);
            position: relative;
        }
        
        .success-icon-wrapper::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(40, 167, 69, 0.2);
            animation: ripple 2s ease-out infinite;
        }
        
        @keyframes successPulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }
        
        .success-icon {
            font-size: 60px;
            color: white;
            position: relative;
            z-index: 1;
        }
        
        .success-title {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 16px;
            letter-spacing: -1px;
        }
        
        .success-message {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .booking-details {
            background: var(--light-bg);
            border-radius: 20px;
            padding: 32px;
            margin-bottom: 32px;
            text-align: left;
        }
        
        .booking-details-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 24px;
            text-align: center;
            padding-bottom: 16px;
            border-bottom: 2px solid var(--border-color);
        }
        
        .booking-info-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 16px 0;
            border-bottom: 1px solid var(--border-color);
        }
        
        .booking-info-row:last-child {
            border-bottom: none;
        }
        
        .booking-info-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .booking-info-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark-color);
            text-align: right;
        }
        
        .booking-reference {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .action-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 32px;
        }
        
        .action-btn {
            padding: 14px 32px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 2px solid transparent;
        }
        
        .action-btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
        }
        
        .action-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.4);
            color: white;
        }
        
        .action-btn-secondary {
            background: white;
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .action-btn-secondary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        .email-notice {
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.05) 0%, rgba(0, 82, 163, 0.05) 100%);
            border: 2px solid rgba(0, 102, 204, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-top: 32px;
        }
        
        .email-notice-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin: 0 auto 16px;
        }
        
        .email-notice-text {
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            color: white;
            padding: 40px 0 0;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 30px;
            padding: 20px 0;
            text-align: center;
            color: #999;
            background: rgba(0, 0, 0, 0.3);
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .navbar-container {
                padding: 0 20px;
            }
            
            .success-page {
                padding: 40px 20px;
            }
            
            .success-card {
                padding: 40px 24px;
                border-radius: 20px;
            }
            
            .success-title {
                font-size: 32px;
            }
            
            .success-message {
                font-size: 16px;
            }
            
            .booking-details {
                padding: 24px;
            }
            
            .booking-info-row {
                flex-direction: column;
                gap: 8px;
            }
            
            .booking-info-value {
                text-align: left;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="top-strip"></div>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <a href="index.html" class="logo-section">
                    <img src="https://fayyaztravels.com/visa/admin/assets/img/main-logo.png" alt="Fayyaz Travels Logo" class="logo-image">
                </a>
            </div>
        </div>
    </nav>

    <section class="success-page">
        <div class="success-container">
            <div class="success-card">
                <div class="success-icon-wrapper">
                    <i class="bi bi-check-circle-fill success-icon"></i>
                </div>
                
                <h1 class="success-title">Booking Confirmed!</h1>
                <p class="success-message">Your booking has been successfully confirmed. We've sent a confirmation email with all the details.</p>
                
                <div class="booking-details">
                    <h2 class="booking-details-title">Booking Details</h2>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Booking Reference</div>
                        <div class="booking-info-value">
                            <span class="booking-reference" id="bookingReference">VMS-2024-001234</span>
                        </div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Hotel Name</div>
                        <div class="booking-info-value" id="hotelName">Grand Luxury Resort</div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Location</div>
                        <div class="booking-info-value" id="hotelLocation">Mumbai, India</div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Check-in</div>
                        <div class="booking-info-value" id="checkIn">27/08/2024</div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Check-out</div>
                        <div class="booking-info-value" id="checkOut">29/08/2024</div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Guests</div>
                        <div class="booking-info-value" id="guests">2 Adults</div>
                    </div>
                    
                    <div class="booking-info-row">
                        <div class="booking-info-label">Total Amount</div>
                        <div class="booking-info-value" id="totalAmount" style="font-size: 24px; font-weight: 800; color: var(--primary-color);">₹9,000</div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="profile.html" class="action-btn action-btn-primary">
                        <i class="bi bi-person-fill"></i>
                        <span>View My Bookings</span>
                    </a>
                    <a href="#" class="action-btn action-btn-secondary" id="downloadInvoice">
                        <i class="bi bi-download"></i>
                        <span>Download Invoice</span>
                    </a>
                    <a href="index.html" class="action-btn action-btn-secondary">
                        <i class="bi bi-house-fill"></i>
                        <span>Back to Home</span>
                    </a>
                </div>
                
                <div class="email-notice">
                    <div class="email-notice-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <p class="email-notice-text">
                        A confirmation email has been sent to <strong id="guestEmail">guest@example.com</strong> with your booking details and invoice. 
                        Please check your email inbox and spam folder.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2024 Fayyaz Travels. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Get booking details from URL parameters or localStorage
        const urlParams = new URLSearchParams(window.location.search);
        const bookingId = urlParams.get('booking_id') || localStorage.getItem('lastBookingId');
        
        // Load booking details if booking ID is available
        if (bookingId) {
            loadBookingDetails(bookingId);
        }
        
        // Function to load booking details from database/API
        async function loadBookingDetails(id) {
            try {
                // Replace this URL with your actual API endpoint
                const apiUrl = `/api/booking/${id}`;
                
                // For demo purposes, we'll use mock data
                // In production, replace this with actual API call
                const response = await fetch(apiUrl).catch(() => {
                    // Fallback to mock data if API fails
                    return {
                        ok: true,
                        json: async () => getMockBookingData(id)
                    };
                });
                
                if (response.ok) {
                    const data = await response.json();
                    updateBookingDetails(data);
                } else {
                    // Use mock data on error
                    const mockData = getMockBookingData(id);
                    updateBookingDetails(mockData);
                }
            } catch (error) {
                console.error('Error loading booking details:', error);
                // Use mock data on error
                const mockData = getMockBookingData(id);
                updateBookingDetails(mockData);
            }
        }
        
        // Function to update booking details in the UI
        function updateBookingDetails(data) {
            if (data.reference) {
                document.getElementById('bookingReference').textContent = data.reference;
            }
            if (data.hotel_name) {
                document.getElementById('hotelName').textContent = data.hotel_name;
            }
            if (data.hotel_location) {
                document.getElementById('hotelLocation').textContent = data.hotel_location;
            }
            if (data.check_in) {
                document.getElementById('checkIn').textContent = formatDate(data.check_in);
            }
            if (data.check_out) {
                document.getElementById('checkOut').textContent = formatDate(data.check_out);
            }
            if (data.guests) {
                document.getElementById('guests').textContent = data.guests;
            }
            if (data.total_amount) {
                document.getElementById('totalAmount').textContent = `₹${parseInt(data.total_amount).toLocaleString('en-IN')}`;
            }
            if (data.guest_email) {
                document.getElementById('guestEmail').textContent = data.guest_email;
            }
            if (data.invoice_url) {
                document.getElementById('downloadInvoice').href = data.invoice_url;
            }
        }
        
        // Mock booking data function (replace with actual API calls)
        function getMockBookingData(id) {
            return {
                reference: id || 'VMS-2024-001234',
                hotel_name: 'Grand Luxury Resort',
                hotel_location: 'Mumbai, India',
                check_in: '2024-08-27',
                check_out: '2024-08-29',
                guests: '2 Adults',
                total_amount: 9000,
                guest_email: 'guest@example.com',
                invoice_url: '#'
            };
        }
        
        // Format date function
        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-GB', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
        }
    </script>
</body>
</html>

