<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Luxury Resort - Hotel Details | Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        
        /* Prevent headings from being centered */
        h1, h2, h3, h4, h5, h6,
        .hotel-name,
        .section-title,
        .gallery-title,
        .review-form-title,
        .reviewer-details h4,
        .similar-hotel-name {
            text-align: left !important;
        }
        
        /* Hotel Details Hero */
        .hotel-hero {
            padding: 60px 0 50px;
            margin-top: 100px;
            background: linear-gradient(180deg, #ffffff 0%, var(--light-bg) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hotel-header {
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
        }
        
        .hotel-breadcrumb {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
            font-size: 14px;
            color: var(--text-light);
            flex-wrap: wrap;
        }
        
        .hotel-breadcrumb a {
            color: var(--blue);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 4px 8px;
            border-radius: 6px;
        }
        
        .hotel-breadcrumb a:hover {
            background: rgba(0, 102, 204, 0.1);
            transform: translateX(2px);
        }
        
        .hotel-breadcrumb i {
            font-size: 12px;
            color: var(--text-light);
            opacity: 0.6;
        }
        
        .hotel-breadcrumb span {
            color: var(--dark-color);
            font-weight: 600;
        }
        
        .hotel-title-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 50px;
            margin-bottom: 40px;
            background: white;
            padding: 48px 56px;
            border-radius: 20px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.06);
            border: none;
        }
        
        .hotel-name-wrapper {
            flex: 1;
            min-width: 300px;
        }
        
        .hotel-name {
            font-family: "Quattrocento", serif;
            font-size: 48px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 16px;
            letter-spacing: -0.5px;
            line-height: 1.2;
            text-align: left;
        }
        
        .hotel-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-light);
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 20px;
            padding: 0;
            background: none;
            border: none;
            width: fit-content;
        }
        
        .hotel-location i {
            color: var(--text-light);
            font-size: 16px;
            flex-shrink: 0;
            opacity: 0.7;
        }
        
        .hotel-location span {
            color: var(--text-light);
        }
        
        .hotel-stars {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 24px;
            padding: 0;
        }
        
        .hotel-stars i {
            font-size: 18px;
            color: #ffc107;
        }
        
        .hotel-stars-label {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
            margin-left: 8px;
        }
        
        .hotel-rating-section {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 16px;
            min-width: 180px;
        }
        
        .hotel-rating {
            display: flex;
            align-items: center;
            gap: 16px;
            background: white;
            padding: 20px 24px;
            border-radius: 16px;
            font-weight: 700;
            font-size: 36px;
            color: var(--dark-color);
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            width: 100%;
            min-width: 180px;
        }
        
        .hotel-rating-value {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 4px;
            flex: 1;
        }
        
        .hotel-rating-number {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark-color);
            line-height: 1;
        }
        
        .hotel-rating i {
            color: #ffc107;
            font-size: 32px;
            flex-shrink: 0;
        }
        
        .hotel-rating-label {
            font-size: 14px;
            font-weight: 500;
            color: var(--text-light);
            text-transform: none;
            letter-spacing: 0;
        }
        
        .hotel-reviews {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 24px;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            cursor: pointer;
            width: 100%;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }
        
        .hotel-reviews:hover {
            border-color: var(--blue);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.1);
        }
        
        .hotel-reviews-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 4px;
            flex: 1;
        }
        
        .hotel-reviews-count {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark-color);
            line-height: 1;
        }
        
        .hotel-reviews-count i {
            color: var(--blue);
            font-size: 32px;
            flex-shrink: 0;
        }
        
        .hotel-reviews-label {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
            text-transform: none;
            letter-spacing: 0;
        }
        
        .hotel-badges {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 0;
        }
        
        .hotel-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            background: var(--light-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-color);
            transition: all 0.2s ease;
        }
        
        .hotel-badge:hover {
            background: var(--border-color);
            border-color: var(--blue);
            color: var(--blue);
        }
        
        .hotel-badge i {
            font-size: 12px;
            color: var(--blue);
        }
        
        /* Image Gallery */
        .hotel-gallery {
            margin-bottom: 50px;
            position: relative;
        }
        
        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .gallery-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 10px;
            text-align: left;
        }
        
        .gallery-title i {
            color: var(--blue);
            font-size: 26px;
        }
        
        .gallery-count {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 600;
            background: var(--light-bg);
            padding: 8px 16px;
            border-radius: 20px;
        }
        
        .gallery-main {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 550px;
            margin-bottom: 16px;
            cursor: pointer;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.15);
            border: 2px solid var(--border-color);
            background: var(--light-bg);
        }
        
        .gallery-main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, transparent 0%, transparent 70%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-main:hover::before {
            opacity: 1;
        }
        
        .gallery-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
        }
        
        .gallery-main:hover img {
            transform: scale(1.08);
        }
        
        .gallery-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 2;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-main:hover .gallery-controls {
            opacity: 1;
        }
        
        .gallery-nav-btn {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-nav-btn:hover {
            background: var(--blue);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 6px 24px rgba(0, 102, 204, 0.4);
        }
        
        .gallery-main-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 24px;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            color: white;
            z-index: 2;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-main:hover .gallery-main-info {
            opacity: 1;
        }
        
        .gallery-image-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        
        .gallery-image-counter {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 500;
        }
        
        .gallery-fullscreen-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            opacity: 0;
        }
        
        .gallery-main:hover .gallery-fullscreen-btn {
            opacity: 1;
        }
        
        .gallery-fullscreen-btn:hover {
            background: var(--blue);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 6px 24px rgba(0, 102, 204, 0.4);
        }
        
        .gallery-thumbnails {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
        
        .gallery-thumb {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            height: 140px;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background: var(--light-bg);
        }
        
        .gallery-thumb::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
        .gallery-thumb:hover::before {
            opacity: 1;
        }
        
        .gallery-thumb:hover {
            border-color: var(--blue);
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.25);
        }
        
        .gallery-thumb.active {
            border-color: var(--blue);
            box-shadow: 0 0 0 2px rgba(0, 102, 204, 0.2), 0 8px 24px rgba(0, 102, 204, 0.25);
        }
        
        .gallery-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .gallery-thumb:hover img {
            transform: scale(1.15);
        }
        
        .gallery-thumb.active img {
            transform: scale(1.05);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 15px;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
        }
        
        .gallery-thumb:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay-content {
            text-align: center;
            padding: 12px;
        }
        
        .gallery-overlay-icon {
            font-size: 24px;
            margin-bottom: 6px;
            display: block;
        }
        
        .gallery-thumb-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.8) 100%);
            color: white;
            font-size: 12px;
            font-weight: 700;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
        }
        
        .gallery-thumb:hover .gallery-thumb-label {
            opacity: 1;
        }
        
        /* Hotel Info Cards */
        .hotel-info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .info-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-color: var(--blue);
        }
        
        .info-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1) 0%, rgba(0, 82, 163, 0.1) 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 28px;
            color: var(--blue);
            transition: all 0.3s ease;
        }
        
        .info-card:hover .info-card-icon {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            transform: scale(1.1);
        }
        
        .info-card-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 6px;
        }
        
        .info-card-text {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        /* Content Sections */
        .content-section {
            margin-top: 40px;
            margin-bottom: 60px;
        }
        
        .section-title {
            font-family: "Quattrocento", serif;
            font-size: 36px;
            font-weight: 900;
            color: var(--dark-color);
            margin-bottom: 32px;
            letter-spacing: -1px;
            position: relative;
            padding-bottom: 16px;
            text-align: left;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--blue), var(--blue-dark));
            border-radius: 2px;
        }
        
        .section-content {
            font-size: 17px;
            color: var(--text-color);
            line-height: 1.9;
        }
        
        .section-content p {
            margin-bottom: 20px;
        }
        
        .about-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 32px;
        }
        
        .about-highlight-card {
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.05) 0%, rgba(0, 82, 163, 0.05) 100%);
            border: 2px solid rgba(0, 102, 204, 0.1);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .about-highlight-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--blue), var(--blue-dark));
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .about-highlight-card:hover::before {
            transform: scaleY(1);
        }
        
        .about-highlight-card:hover {
            border-color: var(--blue);
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.15);
        }
        
        .highlight-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.25);
        }
        
        .highlight-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 10px;
            letter-spacing: -0.3px;
        }
        
        .highlight-text {
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
            font-weight: 500;
        }
        
        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 40px;
            padding: 32px;
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 20px;
        }
        
        .about-stat {
            text-align: center;
            padding: 20px;
            background: var(--light-bg);
            border-radius: 14px;
            transition: all 0.3s ease;
        }
        
        .about-stat:hover {
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1) 0%, rgba(0, 82, 163, 0.1) 100%);
            transform: translateY(-4px);
        }
        
        .stat-number {
            font-size: 36px;
            font-weight: 900;
            color: var(--blue);
            line-height: 1;
            margin-bottom: 8px;
            letter-spacing: -1px;
        }
        
        .stat-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--text-color);
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        
        /* Amenities Grid */
        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .amenity-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 24px;
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        
        .amenity-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 102, 204, 0.05), transparent);
            transition: left 0.6s ease;
        }
        
        .amenity-item:hover::before {
            left: 100%;
        }
        
        .amenity-item:hover {
            border-color: var(--blue);
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.15);
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.02) 0%, rgba(0, 82, 163, 0.02) 100%);
        }
        
        .amenity-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1) 0%, rgba(0, 82, 163, 0.1) 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 24px;
            flex-shrink: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
            border: 2px solid transparent;
        }
        
        .amenity-item:hover .amenity-icon {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.3);
            border-color: rgba(0, 102, 204, 0.2);
        }
        
        .amenity-icon::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, var(--blue), var(--blue-dark));
            border-radius: 14px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .amenity-item:hover .amenity-icon::after {
            opacity: 0.2;
        }
        
        .amenity-content {
            flex: 1;
            position: relative;
            z-index: 1;
        }
        
        .amenity-name {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }
        
        .amenity-item:hover .amenity-name {
            color: var(--blue);
        }
        
        .amenity-description {
            font-size: 13px;
            color: var(--text-light);
            font-weight: 500;
            line-height: 1.4;
        }
        
        .amenity-check {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 24px;
            height: 24px;
            background: var(--success-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2;
        }
        
        .amenity-item:hover .amenity-check {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Booking Card Container - Ensure sticky works on desktop */
        @media (min-width: 992px) {
            .row .col-lg-4 {
                display: flex;
                flex-direction: column;
            }
        }
        
        /* Booking Card */
        .booking-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 24px;
            padding: 0;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            position: -webkit-sticky;
            position: sticky;
            top: 100px;
            margin-top: 40px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            align-self: flex-start;
            z-index: 10;
            width: 100%;
            height: fit-content;
        }
        
        @media (max-width: 991px) {
            .booking-card {
                position: relative;
                top: 0;
                align-self: stretch;
            }
        }
        
        .booking-card:hover {
            box-shadow: 0 12px 32px rgba(0, 102, 204, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .booking-card-header {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            padding: 20px 24px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .booking-card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .booking-card-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 8px;
            letter-spacing: -0.3px;
            position: relative;
            z-index: 1;
        }
        
        .booking-price-wrapper {
            position: relative;
            z-index: 1;
        }
        
        .booking-price {
            display: flex;
            align-items: baseline;
            gap: 6px;
            margin-bottom: 6px;
        }
        
        .price-amount {
            font-size: 42px;
            font-weight: 900;
            color: white;
            line-height: 1;
            letter-spacing: -2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .price-label {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
        }
        
        .price-original {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: line-through;
            margin-left: 10px;
        }
        
        .price-discount {
            display: inline-block;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 800;
            margin-top: 6px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .booking-card-body {
            padding: 24px;
        }
        
        .booking-form {
            margin-bottom: 16px;
        }
        
        .form-group {
            margin-bottom: 16px;
            position: relative;
        }
        
        .form-label {
            font-size: 12px;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-label i {
            color: var(--blue);
            font-size: 16px;
            width: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-control {
            border: 2px solid var(--border-color);
            border-radius: 14px;
            padding: 12px 16px;
            font-size: 14px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: white;
            font-weight: 600;
            color: var(--text-color);
            width: 100%;
        }
        
        .form-control:hover {
            border-color: var(--blue);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(0, 102, 204, 0.1);
            background: white;
        }
        
        /* Guests Dropdown Styles */
        .guests-dropdown-wrapper {
            position: relative;
            width: 100%;
        }
        
        .guests-input {
            cursor: pointer;
        }
        
        .guests-dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            right: 0;
            background: #ffffff;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            padding: 20px;
            display: none;
            z-index: 10000;
            min-width: 320px;
        }
        
        .form-group {
            overflow: visible;
        }
        
        .booking-form {
            overflow: visible;
        }
        
        .guests-dropdown-wrapper.active .guests-dropdown-menu {
            display: block;
        }
        
        .guests-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        .guests-option:last-of-type {
            margin-bottom: 0;
        }
        
        .guests-option-label {
            display: flex;
            flex-direction: column;
        }
        
        .guests-option-label strong {
            font-size: 15px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 4px;
        }
        
        .guests-subtitle {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 400;
        }
        
        .guests-counter {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 4px;
        }
        
        .guests-btn-minus,
        .guests-btn-plus {
            width: 32px;
            height: 32px;
            border: none;
            background: #ffffff;
            border-radius: 6px;
            font-size: 18px;
            font-weight: 600;
            color: var(--text-color);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .guests-btn-minus:hover,
        .guests-btn-plus:hover {
            background: var(--blue);
            color: #ffffff;
            transform: scale(1.05);
        }
        
        .guests-btn-minus:active,
        .guests-btn-plus:active {
            transform: scale(0.95);
        }
        
        .guests-value {
            min-width: 30px;
            text-align: center;
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .guests-message {
            font-size: 12px;
            color: var(--text-light);
            margin-top: 16px;
            margin-bottom: 16px;
            line-height: 1.5;
        }
        
        .guests-apply-btn {
            width: 100%;
            padding: 12px 24px;
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: #ffffff;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 8px;
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.25);
        }
        
        .guests-apply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.3);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .guests-apply-btn:active {
            transform: translateY(0);
        }
        
        .book-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 14px;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 16px rgba(175, 135, 0, 0.3);
            position: relative;
            overflow: hidden;
            margin-top: 6px;
        }
        
        .book-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .book-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .book-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(175, 135, 0, 0.4);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .book-btn span {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .book-btn i {
            font-size: 18px;
        }
        
        .booking-features {
            margin-top: 28px;
            padding-top: 28px;
            border-top: 2px solid var(--light-bg);
        }
        
        .booking-features-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .booking-features-title i {
            color: var(--success-color);
            font-size: 18px;
        }
        
        .booking-feature {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 14px;
            padding: 12px;
            background: var(--light-bg);
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .booking-feature:hover {
            background: rgba(0, 102, 204, 0.05);
            transform: translateX(4px);
        }
        
        .booking-feature i {
            color: var(--success-color);
            font-size: 20px;
            margin-top: 2px;
            flex-shrink: 0;
        }
        
        .booking-feature span {
            font-size: 14px;
            color: var(--text-color);
            font-weight: 600;
            line-height: 1.5;
        }
        
        .booking-trust-badges {
            display: flex;
            gap: 12px;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 2px solid var(--light-bg);
            flex-wrap: wrap;
        }
        
        .trust-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            background: rgba(0, 102, 204, 0.05);
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            color: var(--blue);
            flex: 1;
            min-width: calc(50% - 6px);
        }
        
        .trust-badge i {
            font-size: 16px;
        }
        
        /* Reviews Section */
        /* Review Form */
        .review-form-container {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 20px;
            padding: 32px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .review-form-container:hover {
            box-shadow: 0 12px 32px rgba(0, 102, 204, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .review-form-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }
        
        .review-form-header i {
            font-size: 28px;
            color: var(--blue);
        }
        
        .review-form-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark-color);
            margin: 0;
            text-align: left;
        }
        
        .review-form-subtitle {
            font-size: 14px;
            color: var(--text-light);
            margin-top: 4px;
        }
        
        .review-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        
        .review-form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .review-form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .review-form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .review-form-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .review-form-label i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .review-form-label .required {
            color: #e74c3c;
            margin-left: 4px;
        }
        
        .review-form-input,
        .review-form-textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 15px;
            font-family: inherit;
            color: var(--text-color);
            background: white;
            transition: all 0.3s ease;
        }
        
        .review-form-input:focus,
        .review-form-textarea:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(0, 102, 204, 0.1);
        }
        
        .review-form-textarea {
            min-height: 120px;
            resize: vertical;
            line-height: 1.6;
        }
        
        .star-rating-input {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .star-rating-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .star-rating-stars {
            display: flex;
            gap: 8px;
            align-items: center;
        }
        
        .star-rating-stars i {
            font-size: 32px;
            color: #e0e0e0;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .star-rating-stars i:hover,
        .star-rating-stars i.active {
            color: #ffc107;
            transform: scale(1.1);
            filter: drop-shadow(0 2px 4px rgba(255, 193, 7, 0.4));
        }
        
        .star-rating-text {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 600;
            margin-left: 12px;
        }
        
        .review-form-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 8px;
        }
        
        .review-form-btn {
            padding: 14px 32px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }
        
        .review-form-btn.submit {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.3);
        }
        
        .review-form-btn.submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(175, 135, 0, 0.4);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .review-form-btn.submit:active {
            transform: translateY(0);
        }
        
        .review-form-btn.cancel {
            background: white;
            color: var(--text-color);
            border: 2px solid var(--border-color);
        }
        
        .review-form-btn.cancel:hover {
            border-color: var(--text-light);
            background: var(--light-bg);
        }
        
        .review-form-btn i {
            font-size: 18px;
        }
        
        .review-form-help {
            font-size: 13px;
            color: var(--text-light);
            margin-top: -8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .review-form-help i {
            color: var(--blue);
            font-size: 14px;
        }
        
        .review-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .review-card:hover {
            box-shadow: 0 12px 32px rgba(0, 102, 204, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }
        
        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .reviewer-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
        }
        
        .reviewer-details h4 {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 4px;
            text-align: left;
        }
        
        .reviewer-details p {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .review-rating {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #ffc107;
            font-size: 16px;
            font-weight: 700;
        }
        
        .review-text {
            font-size: 15px;
            color: var(--text-color);
            line-height: 1.7;
        }
        
        /* Similar Hotels */
        .similar-hotels-wrapper {
            position: relative;
        }
        
        .similar-hotel-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
        }
        
        .similar-hotel-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.02) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }
        
        .similar-hotel-card:hover::before {
            opacity: 1;
        }
        
        .similar-hotel-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.15);
            border-color: var(--blue);
        }
        
        .similar-hotel-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 240px;
        }
        
        .similar-hotel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .similar-hotel-card:hover .similar-hotel-image {
            transform: scale(1.15);
        }
        
        .similar-hotel-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            z-index: 2;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(0, 102, 204, 0.1);
        }
        
        .similar-hotel-rating {
            position: absolute;
            top: 16px;
            left: 16px;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(15px);
            padding: 8px 14px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 6px;
            color: white;
            font-size: 14px;
            font-weight: 700;
            z-index: 2;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }
        
        .similar-hotel-rating i {
            color: #ffc107;
            font-size: 16px;
        }
        
        .similar-hotel-content {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }
        
        .similar-hotel-header {
            margin-bottom: 16px;
        }
        
        .similar-hotel-name {
            font-size: 22px;
            font-weight: 900;
            color: var(--dark-color);
            margin-bottom: 10px;
            letter-spacing: -0.5px;
            line-height: 1.3;
            text-align: left;
        }
        
        .similar-hotel-location {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .similar-hotel-location i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .similar-hotel-features {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .similar-hotel-feature {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            background: rgba(0, 102, 204, 0.05);
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-color);
        }
        
        .similar-hotel-feature i {
            color: var(--blue);
            font-size: 14px;
        }
        
        .similar-hotel-footer {
            margin-top: auto;
            padding-top: 20px;
            border-top: 2px solid var(--light-bg);
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        
        .similar-hotel-price-wrapper {
            display: flex;
            flex-direction: column;
        }
        
        .similar-hotel-price-label {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .similar-hotel-price {
            font-size: 28px;
            font-weight: 900;
            color: var(--blue);
            line-height: 1;
            letter-spacing: -1px;
        }
        
        .similar-hotel-view-btn {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .similar-hotel-view-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .similar-hotel-view-btn:hover::before {
            width: 200px;
            height: 200px;
        }
        
        .similar-hotel-view-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(175, 135, 0, 0.4);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .similar-hotel-view-btn span {
            position: relative;
            z-index: 1;
        }
        
        /* WhatsApp Fixed Button */
        .whatsapp-fixed-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
            z-index: 999;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            animation: whatsappPulse 2s ease-in-out infinite;
        }
        
        .whatsapp-fixed-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 32px rgba(37, 211, 102, 0.5);
        }
        
        .whatsapp-fixed-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .whatsapp-fixed-icon i {
            font-size: 32px;
        }
        
        @keyframes whatsappPulse {
            0%, 100% {
                box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
            }
            50% {
                box-shadow: 0 8px 24px rgba(37, 211, 102, 0.6), 0 0 0 10px rgba(37, 211, 102, 0.1);
            }
        }
        
        @media (max-width: 991px) {
            
            .hotel-hero {
                padding: 40px 0 30px;
                margin-top: 80px;
            }
            
            .hotel-title-section {
                flex-direction: column;
                padding: 28px;
                gap: 28px;
            }
            
            .hotel-name-wrapper {
                width: 100%;
            }
            
            .hotel-name {
                font-size: 34px;
                margin-bottom: 14px;
            }
            
            .hotel-location {
                font-size: 15px;
                margin-bottom: 16px;
            }
            
            .hotel-stars {
                margin-bottom: 18px;
            }
            
            .hotel-stars i {
                font-size: 18px;
            }
            
            .hotel-badges {
                gap: 8px;
                margin-top: 0;
            }
            
            .hotel-badge {
                padding: 6px 12px;
                font-size: 11px;
            }
            
            .hotel-rating-section {
                width: 100%;
                flex-direction: row;
                align-items: stretch;
                justify-content: space-between;
                gap: 12px;
            }
            
            .hotel-rating {
                flex: 1;
                padding: 18px 20px;
                gap: 14px;
                min-width: 0;
            }
            
            .hotel-rating-number {
                font-size: 30px;
            }
            
            .hotel-rating i {
                font-size: 26px;
                flex-shrink: 0;
            }
            
            .hotel-rating-label {
                font-size: 13px;
            }
            
            .hotel-reviews {
                flex: 1;
                padding: 18px 20px;
                gap: 14px;
                min-width: 0;
            }
            
            .hotel-reviews-count {
                font-size: 30px;
            }
            
            .hotel-reviews-count i {
                font-size: 26px;
                flex-shrink: 0;
            }
            
            .hotel-reviews-label {
                font-size: 13px;
            }
            
            .gallery-main {
                height: 350px;
            }
            
            .gallery-controls {
                opacity: 1;
            }
            
            .gallery-nav-btn {
                width: 44px;
                height: 44px;
                font-size: 18px;
            }
            
            .gallery-fullscreen-btn {
                opacity: 1;
                width: 44px;
                height: 44px;
            }
            
            .gallery-main-info {
                opacity: 1;
            }
            
            .gallery-thumbnails {
                display: flex;
                flex-direction: row;
                gap: 12px;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                padding-bottom: 4px;
            }
            
            .gallery-thumbnails::-webkit-scrollbar {
                height: 4px;
            }
            
            .gallery-thumbnails::-webkit-scrollbar-track {
                background: var(--light-bg);
                border-radius: 2px;
            }
            
            .gallery-thumbnails::-webkit-scrollbar-thumb {
                background: var(--border-color);
                border-radius: 2px;
            }
            
            .gallery-thumbnails::-webkit-scrollbar-thumb:hover {
                background: var(--blue);
            }
            
            .gallery-thumb {
                height: 100px;
                min-width: 100px;
                flex-shrink: 0;
                scroll-snap-align: start;
            }
            
            .gallery-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
            
            .booking-card {
                position: relative;
                top: 0;
                margin-top: 40px;
            }
            
            .amenities-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                gap: 16px;
            }
            
            .amenity-item {
                padding: 18px 20px;
            }
            
            .amenity-icon {
                width: 48px;
                height: 48px;
                font-size: 22px;
            }
            
            .amenity-name {
                font-size: 15px;
            }
            
            .amenity-description {
                font-size: 12px;
            }
            
            .review-form-container {
                padding: 24px;
            }
            
            .review-form-row {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            
            .review-form-title {
                font-size: 20px;
            }
            
            .star-rating-stars i {
                font-size: 28px;
            }
            
            .review-form-actions {
                flex-direction: column;
            }
            
            .review-form-btn {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .hotel-hero {
                margin-top: 70px;
                padding: 30px 0 25px;
            }
            
            .amenities-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }
            
            .amenity-item {
                padding: 16px 18px;
                gap: 14px;
            }
            
            .amenity-icon {
                width: 44px;
                height: 44px;
                font-size: 20px;
            }
            
            .amenity-name {
                font-size: 14px;
            }
            
            .amenity-description {
                font-size: 11px;
            }
            
            .hotel-name {
                font-size: 28px;
                margin-bottom: 10px;
            }
            
            .hotel-title-section {
                padding: 24px;
                gap: 24px;
            }
            
            .hotel-location {
                font-size: 14px;
                margin-bottom: 14px;
            }
            
            .hotel-stars {
                margin-bottom: 18px;
            }
            
            .hotel-badges {
                gap: 6px;
            }
            
            .hotel-badge {
                padding: 5px 10px;
                font-size: 11px;
            }
            
            .hotel-title-section {
                padding: 20px;
                gap: 20px;
            }
            
            .hotel-name {
                font-size: 26px;
                margin-bottom: 12px;
            }
            
            .hotel-location {
                font-size: 14px;
                margin-bottom: 12px;
            }
            
            .hotel-stars {
                margin-bottom: 16px;
            }
            
            .hotel-stars i {
                font-size: 16px;
            }
            
            .hotel-badges {
                gap: 6px;
                margin-bottom: 20px;
            }
            
            .hotel-badge {
                padding: 5px 10px;
                font-size: 10px;
            }
            
            .hotel-rating-section {
                flex-direction: column;
                gap: 12px;
                width: 100%;
            }
            
            .hotel-rating {
                width: 100%;
                padding: 16px;
                gap: 12px;
            }
            
            .hotel-rating-value {
                min-width: 0;
                flex: 1;
            }
            
            .hotel-rating-number {
                font-size: 28px;
                word-break: break-word;
            }
            
            .hotel-rating i {
                font-size: 24px;
                flex-shrink: 0;
            }
            
            .hotel-rating-label {
                font-size: 13px;
            }
            
            .hotel-reviews {
                width: 100%;
                padding: 16px;
                gap: 12px;
            }
            
            .hotel-reviews-content {
                min-width: 0;
                flex: 1;
            }
            
            .hotel-reviews-count {
                font-size: 28px;
                word-break: break-word;
            }
            
            .hotel-reviews-count i {
                font-size: 24px;
                flex-shrink: 0;
            }
            
            .hotel-reviews-label {
                font-size: 13px;
            }
            
            
            .gallery-thumbnails {
                gap: 10px;
            }
            
            .gallery-thumb {
                height: 90px;
                min-width: 90px;
            }
            
            .review-form-container {
                padding: 20px;
            }
            
            .review-form-title {
                font-size: 18px;
            }
            
            .review-form-header i {
                font-size: 24px;
            }
            
            .star-rating-stars i {
                font-size: 24px;
            }
            
            .review-form-input,
            .review-form-textarea {
                padding: 12px 16px;
                font-size: 14px;
            }
        }
        
        /* Sticky Mobile Booking Bar */
        .mobile-booking-bar {
            display: none;
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            background: white;
            border-bottom: 2px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            z-index: 999;
            padding: 12px 16px;
            align-items: center;
            gap: 12px;
            transition: transform 0.3s ease;
        }
        
        .mobile-booking-bar.hidden {
            transform: translateY(-100%);
        }
        
        .mobile-booking-bar.visible {
            transform: translateY(0);
        }
        
        .mobile-booking-price {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .mobile-price-row {
            display: flex;
            align-items: baseline;
            gap: 8px;
        }
        
        .mobile-price-amount {
            font-size: 20px;
            font-weight: 800;
            color: var(--blue);
            line-height: 1;
        }
        
        .mobile-price-label {
            font-size: 11px;
            color: var(--text-light);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .mobile-price-original {
            font-size: 14px;
            color: var(--text-light);
            text-decoration: line-through;
            font-weight: 600;
        }
        
        .mobile-price-discount {
            font-size: 10px;
            color: var(--success-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .mobile-book-btn {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.3);
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }
        
        .mobile-book-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        
        .mobile-book-btn:hover::before,
        .mobile-book-btn:active::before {
            width: 300px;
            height: 300px;
        }
        
        .mobile-book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(175, 135, 0, 0.4);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .mobile-book-btn:active {
            transform: translateY(0);
        }
        
        .mobile-book-btn i {
            font-size: 16px;
        }
        
        .mobile-book-btn span {
            position: relative;
            z-index: 1;
        }
        
        @media (max-width: 991px) {
            .mobile-booking-bar {
                display: flex;
            }
            
            .mobile-booking-bar.visible {
                transform: translateY(0);
            }
            
            body {
                padding-top: 0;
            }
            
            .hotel-hero {
                margin-top: 0;
            }
        }
        
        @media (max-width: 768px) {
            .mobile-booking-bar {
                top: 70px;
            }
        }
        
        @media (max-width: 576px) {
            .mobile-booking-bar {
                padding: 10px 14px;
                gap: 10px;
            }
            
            .mobile-price-amount {
                font-size: 18px;
            }
            
            .mobile-price-label {
                font-size: 10px;
            }
            
            .mobile-price-original {
                font-size: 12px;
            }
            
            .mobile-book-btn {
                padding: 12px 20px;
                font-size: 14px;
            }
            
            .mobile-book-btn i {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <!-- Mobile Sticky Booking Bar -->
    <div class="mobile-booking-bar hidden" id="mobileBookingBar">
        <div class="mobile-booking-price">
            <div class="mobile-price-row">
                <span class="mobile-price-amount">₹4,500</span>
                <span class="mobile-price-label">per night</span>
                <span class="mobile-price-original">₹6,000</span>
            </div>
            <div class="mobile-price-discount">Save 25% Today</div>
        </div>
        <button class="mobile-book-btn" id="mobileBookBtn">
            <span>
                <i class="bi bi-calendar-check"></i>
                Book Now
            </span>
        </button>
    </div>

    <!-- Hotel Hero Section -->
    <div class="hotel-hero">
        <div class="container">
            <div class="hotel-header">
                <div class="hotel-breadcrumb">
                    <a href="index.html">Home</a>
                    <i class="bi bi-chevron-right"></i>
                    <a href="hotel-search-results.html">Hotels</a>
                    <i class="bi bi-chevron-right"></i>
                    <span>Grand Luxury Resort</span>
                </div>
                
                <div class="hotel-title-section">
                    <div class="hotel-name-wrapper">
                        <h1 class="hotel-name">Grand Luxury Resort</h1>
                        <div class="hotel-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Mumbai, Maharashtra, India</span>
                        </div>
                        <div class="hotel-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span class="hotel-stars-label">5 Star Hotel</span>
                        </div>
                        <div class="hotel-badges">
                            <div class="hotel-badge">
                                <i class="bi bi-award-fill"></i>
                                <span>Best Seller</span>
                            </div>
                            <div class="hotel-badge">
                                <i class="bi bi-shield-check-fill"></i>
                                <span>Verified</span>
                            </div>
                            <div class="hotel-badge">
                                <i class="bi bi-heart-fill"></i>
                                <span>Guest Favorite</span>
                            </div>
                        </div>
                    </div>
                    <div class="hotel-rating-section">
                        <div class="hotel-rating">
                                <i class="bi bi-star-fill"></i>
                            <div class="hotel-rating-value">
                                <div class="hotel-rating-number">4.8</div>
                            <div class="hotel-rating-label">Excellent</div>
                            </div>
                        </div>
                        <div class="hotel-reviews">
                                <i class="bi bi-chat-dots-fill"></i>
                            <div class="hotel-reviews-content">
                                <div class="hotel-reviews-count">1,245</div>
                            <div class="hotel-reviews-label">Guest Reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Gallery -->
            <div class="hotel-gallery">
                <div class="gallery-header">
                    <div class="gallery-title">
                        <i class="bi bi-images"></i>
                        <span>Photo Gallery</span>
                    </div>
                    <div class="gallery-count">16 Photos</div>
                </div>
                
                <div class="gallery-main">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200" alt="Grand Luxury Resort" id="mainImage">
                    <button class="gallery-fullscreen-btn" onclick="openFullscreen()" title="View Fullscreen">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </button>
                    <div class="gallery-controls">
                        <button class="gallery-nav-btn" onclick="previousImage()" title="Previous">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="gallery-nav-btn" onclick="nextImage()" title="Next">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                    <div class="gallery-main-info">
                        <div class="gallery-image-title" id="imageTitle">Luxury Suite Room</div>
                        <div class="gallery-image-counter" id="imageCounter">1 / 16</div>
                    </div>
                </div>
                
                <div class="gallery-thumbnails">
                    <div class="gallery-thumb active" onclick="changeMainImage('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200', 'Luxury Suite Room', 1)">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400" alt="Hotel Room">
                        <div class="gallery-thumb-label">Luxury Suite</div>
                    </div>
                    <div class="gallery-thumb" onclick="changeMainImage('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=1200', 'Grand Lobby', 2)">
                        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=400" alt="Hotel Lobby">
                        <div class="gallery-thumb-label">Grand Lobby</div>
                    </div>
                    <div class="gallery-thumb" onclick="changeMainImage('https://images.unsplash.com/photo-1590490360182-c33d57733427?w=1200', 'Swimming Pool', 3)">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400" alt="Hotel Pool">
                        <div class="gallery-thumb-label">Swimming Pool</div>
                    </div>
                    <div class="gallery-thumb" onclick="changeMainImage('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=1200', 'Fine Dining Restaurant', 4)">
                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=400" alt="Hotel Restaurant">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <i class="bi bi-images gallery-overlay-icon"></i>
                                <div>+12 More Photos</div>
                            </div>
                        </div>
                        <div class="gallery-thumb-label">Restaurant</div>
                    </div>
                </div>
            </div>

            <!-- Hotel Info Cards -->
            <div class="hotel-info-cards">
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <div class="info-card-title">Free WiFi</div>
                    <div class="info-card-text">High-speed internet</div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-cup-straw"></i>
                    </div>
                    <div class="info-card-title">Breakfast</div>
                    <div class="info-card-text">Complimentary</div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-parking"></i>
                    </div>
                    <div class="info-card-title">Parking</div>
                    <div class="info-card-text">Free parking</div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-water"></i>
                    </div>
                    <div class="info-card-title">Swimming Pool</div>
                    <div class="info-card-text">Outdoor pool</div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="bi bi-dumbbell"></i>
                    </div>
                    <div class="info-card-title">Fitness Center</div>
                    <div class="info-card-text">24/7 gym access</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Left Content -->
            <div class="col-lg-8">
                <!-- Description -->
                <div class="content-section">
                    <h2 class="section-title">About This Hotel</h2>
                    <div class="section-content">
                        <p>Grand Luxury Resort is a premium 5-star hotel located in the heart of Mumbai, offering world-class amenities and exceptional service. Our elegantly designed rooms provide the perfect blend of comfort and luxury, ensuring a memorable stay for all our guests.</p>
                        <p>Experience unparalleled hospitality with our dedicated staff, state-of-the-art facilities, and breathtaking views of the city. Whether you're traveling for business or leisure, our resort offers everything you need for a perfect stay.</p>
                        <p>Our prime location provides easy access to major business districts, shopping centers, and tourist attractions. With multiple dining options, a world-class spa, and extensive recreational facilities, Grand Luxury Resort is your ideal destination in Mumbai.</p>
                    </div>
                    
                    <div class="about-highlights">
                        <div class="about-highlight-card">
                            <div class="highlight-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="highlight-title">Prime Location</div>
                            <div class="highlight-text">Located in the heart of Mumbai with easy access to business districts, shopping malls, and major tourist attractions. Just 15 minutes from the airport.</div>
                        </div>
                        <div class="about-highlight-card">
                            <div class="highlight-icon">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="highlight-title">5-Star Experience</div>
                            <div class="highlight-text">Award-winning hospitality with luxurious accommodations, world-class dining, and exceptional service that exceeds expectations.</div>
                        </div>
                        <div class="about-highlight-card">
                            <div class="highlight-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <div class="highlight-title">Exceptional Service</div>
                            <div class="highlight-text">Our dedicated team of professionals is committed to providing personalized service and ensuring your comfort throughout your stay.</div>
                        </div>
                    </div>
                    
                    <div class="about-stats">
                        <div class="about-stat">
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Guest Rating</div>
                        </div>
                        <div class="about-stat">
                            <div class="stat-number">1,245</div>
                            <div class="stat-label">Reviews</div>
                        </div>
                        <div class="about-stat">
                            <div class="stat-number">5★</div>
                            <div class="stat-label">Star Rating</div>
                        </div>
                        <div class="about-stat">
                            <div class="stat-number">15</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Amenities -->
                <div class="content-section">
                    <h2 class="section-title">Amenities & Services</h2>
                    <div class="amenities-grid">
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Free High-Speed WiFi</div>
                                <div class="amenity-description">Unlimited internet access throughout the hotel</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-cup-straw"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Complimentary Breakfast</div>
                                <div class="amenity-description">Daily buffet breakfast included</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-parking"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Free Parking</div>
                                <div class="amenity-description">Secure parking available 24/7</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-water"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Swimming Pool</div>
                                <div class="amenity-description">Outdoor pool with sun deck</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-dumbbell"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Fitness Center</div>
                                <div class="amenity-description">24/7 gym with modern equipment</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-air-conditioner"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Air Conditioning</div>
                                <div class="amenity-description">Climate control in all rooms</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-tv"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Flat-Screen TV</div>
                                <div class="amenity-description">Smart TV with streaming services</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">24/7 Security</div>
                                <div class="amenity-description">Round-the-clock security service</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-bag-check"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Concierge Service</div>
                                <div class="amenity-description">Personalized assistance available</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Room Service</div>
                                <div class="amenity-description">24-hour in-room dining service</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-currency-exchange"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Currency Exchange</div>
                                <div class="amenity-description">Foreign currency exchange desk</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                        <div class="amenity-item">
                            <div class="amenity-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <div class="amenity-content">
                                <div class="amenity-name">Business Center</div>
                                <div class="amenity-description">Fully equipped meeting facilities</div>
                            </div>
                            <div class="amenity-check">
                                <i class="bi bi-check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="content-section">
                    <h2 class="section-title">Guest Reviews</h2>
                    
                    <!-- Review Form -->
                    <div class="review-form-container">
                        <div class="review-form-header">
                            <i class="bi bi-pencil-square"></i>
                            <div>
                                <h3 class="review-form-title">Write a Review</h3>
                                <p class="review-form-subtitle">Share your experience with other travelers</p>
                            </div>
                        </div>
                        
                        <form class="review-form" id="reviewForm">
                            <div class="review-form-row">
                                <div class="review-form-group">
                                    <label class="review-form-label">
                                        <i class="bi bi-person-fill"></i>
                                        Your Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" class="review-form-input" placeholder="Enter your full name" required>
                                </div>
                                
                                <div class="review-form-group">
                                    <label class="review-form-label">
                                        <i class="bi bi-envelope-fill"></i>
                                        Email Address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" class="review-form-input" placeholder="your.email@example.com" required>
                                </div>
                            </div>
                            
                            <div class="review-form-group full-width">
                                <label class="review-form-label">
                                    <i class="bi bi-star-fill"></i>
                                    Overall Rating
                                    <span class="required">*</span>
                                </label>
                                <div class="star-rating-input">
                                    <div class="star-rating-stars" id="starRating">
                                        <i class="bi bi-star" data-rating="1"></i>
                                        <i class="bi bi-star" data-rating="2"></i>
                                        <i class="bi bi-star" data-rating="3"></i>
                                        <i class="bi bi-star" data-rating="4"></i>
                                        <i class="bi bi-star" data-rating="5"></i>
                                    </div>
                                    <span class="star-rating-text" id="ratingText">Click to rate</span>
                                </div>
                            </div>
                            
                            <div class="review-form-group full-width">
                                <label class="review-form-label">
                                    <i class="bi bi-chat-left-text-fill"></i>
                                    Your Review
                                    <span class="required">*</span>
                                </label>
                                <textarea class="review-form-textarea" placeholder="Tell us about your experience at this hotel. What did you like? What could be improved?" required></textarea>
                                <div class="review-form-help">
                                    <i class="bi bi-info-circle"></i>
                                    <span>Minimum 50 characters. Be specific and helpful to other travelers.</span>
                                </div>
                            </div>
                            
                            <div class="review-form-row">
                                <div class="review-form-group">
                                    <label class="review-form-label">
                                        <i class="bi bi-calendar-check-fill"></i>
                                        Stay Date
                                    </label>
                                    <input type="date" class="review-form-input">
                                </div>
                                
                                <div class="review-form-group">
                                    <label class="review-form-label">
                                        <i class="bi bi-tag-fill"></i>
                                        Travel Type
                                    </label>
                                    <select class="review-form-input">
                                        <option value="">Select travel type</option>
                                        <option value="business">Business</option>
                                        <option value="leisure">Leisure</option>
                                        <option value="family">Family</option>
                                        <option value="couple">Couple</option>
                                        <option value="solo">Solo</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="review-form-actions">
                                <button type="submit" class="review-form-btn submit">
                                    <i class="bi bi-check-circle"></i>
                                    Submit Review
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">JD</div>
                                <div class="reviewer-details">
                                    <h4>John Doe</h4>
                                    <p>Verified Guest • 2 weeks ago</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <div class="review-text">
                            Excellent hotel with outstanding service! The rooms are spacious and well-maintained. The staff was very helpful and the location is perfect for both business and leisure travelers. Highly recommended!
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">SM</div>
                                <div class="reviewer-details">
                                    <h4>Sarah Miller</h4>
                                    <p>Verified Guest • 1 month ago</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>4.5</span>
                            </div>
                        </div>
                        <div class="review-text">
                            Beautiful property with great amenities. The pool area is fantastic and the breakfast buffet has a great variety. The only minor issue was the WiFi speed in the room, but overall a wonderful stay.
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">RK</div>
                                <div class="reviewer-details">
                                    <h4>Rajesh Kumar</h4>
                                    <p>Verified Guest • 3 weeks ago</p>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <div class="review-text">
                            Perfect stay! The hotel exceeded all our expectations. Clean rooms, friendly staff, and excellent location. The gym facilities are top-notch. Will definitely stay here again on my next visit to Mumbai.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Booking Card -->
            <div class="col-lg-4">
                <div class="booking-card">
                    <div class="booking-card-header">
                        <div class="booking-card-title">Book Your Stay</div>
                        <div class="booking-price-wrapper">
                            <div class="booking-price">
                                <span class="price-amount">₹4,500</span>
                                <span class="price-label">per night</span>
                                <span class="price-original">₹6,000</span>
                            </div>
                            <div class="price-discount">Save 25% Today</div>
                        </div>
                    </div>
                    
                    <div class="booking-card-body">
                        <form class="booking-form">
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-calendar-check-fill"></i>
                                    Check-in
                                </label>
                                <input type="text" id="checkinDate" class="form-control" placeholder="Select check-in date" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-calendar-x-fill"></i>
                                    Check-out
                                </label>
                                <input type="text" id="checkoutDate" class="form-control" placeholder="Select check-out date" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-people-fill"></i>
                                    Guests
                                </label>
                                <div class="guests-dropdown-wrapper">
                                    <input type="text" class="form-control guests-input" id="guestsInputDetails" placeholder="Select guests" readonly>
                                    <div class="guests-dropdown-menu" id="guestsDropdownDetails">
                                        <div class="guests-option">
                                            <div class="guests-option-label">
                                                <strong>Room</strong>
                                            </div>
                                            <div class="guests-counter">
                                                <button type="button" class="guests-btn-minus" data-type="room">-</button>
                                                <span class="guests-value" data-type="room">1</span>
                                                <button type="button" class="guests-btn-plus" data-type="room">+</button>
                                            </div>
                                        </div>
                                        <div class="guests-option">
                                            <div class="guests-option-label">
                                                <strong>Adults</strong>
                                            </div>
                                            <div class="guests-counter">
                                                <button type="button" class="guests-btn-minus" data-type="adults">-</button>
                                                <span class="guests-value" data-type="adults">2</span>
                                                <button type="button" class="guests-btn-plus" data-type="adults">+</button>
                                            </div>
                                        </div>
                                        <div class="guests-option">
                                            <div class="guests-option-label">
                                                <strong>Children</strong>
                                                <span class="guests-subtitle">0 - 17 Years Old</span>
                                            </div>
                                            <div class="guests-counter">
                                                <button type="button" class="guests-btn-minus" data-type="children">-</button>
                                                <span class="guests-value" data-type="children">0</span>
                                                <button type="button" class="guests-btn-plus" data-type="children">+</button>
                                            </div>
                                        </div>
                                        <div class="guests-message">
                                            Please provide right number of children along with their right age for best options and prices.
                                        </div>
                                        <button type="button" class="guests-apply-btn">APPLY</button>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="book-btn">
                                <span>
                                    <i class="bi bi-calendar-check"></i>
                                    Book Now
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Hotels -->
        <div class="content-section">
            <h2 class="section-title">Similar Hotels</h2>
            <div class="similar-hotels-wrapper">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="similar-hotel-card">
                            <div class="similar-hotel-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800" alt="Ocean View Hotel" class="similar-hotel-image">
                                <div class="similar-hotel-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <span>4.9</span>
                                </div>
                                <div class="similar-hotel-badge">Best Seller</div>
                            </div>
                            <div class="similar-hotel-content">
                                <div class="similar-hotel-header">
                                    <div class="similar-hotel-name">Ocean View Hotel</div>
                                    <div class="similar-hotel-location">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span>Mumbai, Maharashtra, India</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-features">
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-wifi"></i>
                                        <span>WiFi</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-water"></i>
                                        <span>Pool</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-cup-straw"></i>
                                        <span>Breakfast</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-footer">
                                    <div class="similar-hotel-price-wrapper">
                                        <div class="similar-hotel-price-label">Starting from</div>
                                        <div class="similar-hotel-price">₹6,200</div>
                                    </div>
                                    <button class="similar-hotel-view-btn">
                                        <span>View Details</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="similar-hotel-card">
                            <div class="similar-hotel-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800" alt="City Center Hotel" class="similar-hotel-image">
                                <div class="similar-hotel-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="similar-hotel-badge">Great Value</div>
                            </div>
                            <div class="similar-hotel-content">
                                <div class="similar-hotel-header">
                                    <div class="similar-hotel-name">City Center Hotel</div>
                                    <div class="similar-hotel-location">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span>Mumbai, Maharashtra, India</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-features">
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-wifi"></i>
                                        <span>WiFi</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-parking"></i>
                                        <span>Parking</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-cup-straw"></i>
                                        <span>Breakfast</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-footer">
                                    <div class="similar-hotel-price-wrapper">
                                        <div class="similar-hotel-price-label">Starting from</div>
                                        <div class="similar-hotel-price">₹3,800</div>
                                    </div>
                                    <button class="similar-hotel-view-btn">
                                        <span>View Details</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="similar-hotel-card">
                            <div class="similar-hotel-image-wrapper">
                                <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800" alt="Beachside Resort" class="similar-hotel-image">
                                <div class="similar-hotel-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="similar-hotel-badge">Trending</div>
                            </div>
                            <div class="similar-hotel-content">
                                <div class="similar-hotel-header">
                                    <div class="similar-hotel-name">Beachside Resort</div>
                                    <div class="similar-hotel-location">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span>Mumbai, Maharashtra, India</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-features">
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-wifi"></i>
                                        <span>WiFi</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-water"></i>
                                        <span>Pool</span>
                                    </div>
                                    <div class="similar-hotel-feature">
                                        <i class="bi bi-dumbbell"></i>
                                        <span>Gym</span>
                                    </div>
                                </div>
                                <div class="similar-hotel-footer">
                                    <div class="similar-hotel-price-wrapper">
                                        <div class="similar-hotel-price-label">Starting from</div>
                                        <div class="similar-hotel-price">₹5,500</div>
                                    </div>
                                    <button class="similar-hotel-view-btn">
                                        <span>View Details</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include __DIR__ . '/components/footer.php'; ?>
                    </div>

    <!-- Fixed WhatsApp Button -->
    <a href="https://wa.me/919953888841" target="_blank" class="whatsapp-fixed-btn" title="Chat on WhatsApp">
        <div class="whatsapp-fixed-icon">
            <i class="bi bi-whatsapp"></i>
        </div>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js"></script>
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navMenu = document.getElementById('navMenu');
        if (mobileMenuToggle && navMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                const icon = this.querySelector('i');
                if (icon) {
                    icon.classList.toggle('bi-list');
                    icon.classList.toggle('bi-x');
                }
            });
        }
        
        // Mobile Booking Bar functionality
        const mobileBookingBar = document.getElementById('mobileBookingBar');
        const mobileBookBtn = document.getElementById('mobileBookBtn');
        let lastScrollTop = 0;
        
        if (mobileBookingBar && mobileBookBtn) {
            // Set booking bar position based on navbar height
            function updateBookingBarPosition() {
                if (window.innerWidth <= 991) {
                    const navbar = document.getElementById('navbar');
                    if (navbar) {
                        const navbarHeight = navbar.offsetHeight;
                        mobileBookingBar.style.top = navbarHeight + 'px';
                    }
                }
            }
            
            // Update position on load and resize
            updateBookingBarPosition();
            window.addEventListener('resize', updateBookingBarPosition);
            
            // Show/hide booking bar on scroll
            window.addEventListener('scroll', function() {
                if (window.innerWidth <= 991) {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    // Show bar when scrolled down past navbar
                    if (scrollTop > 100) {
                        if (scrollTop > lastScrollTop && scrollTop > 150) {
                            // Scrolling down - show bar
                            mobileBookingBar.classList.remove('hidden');
                            mobileBookingBar.classList.add('visible');
                        } else if (scrollTop < lastScrollTop) {
                            // Scrolling up - keep bar visible
                            mobileBookingBar.classList.remove('hidden');
                            mobileBookingBar.classList.add('visible');
                        }
                    } else {
                        // At top - hide bar
                        mobileBookingBar.classList.add('hidden');
                        mobileBookingBar.classList.remove('visible');
                    }
                    
                    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
                }
            });
            
            // Scroll to booking form when button is clicked
            mobileBookBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const bookingCard = document.querySelector('.booking-card');
                if (bookingCard) {
                    const navbarHeight = document.getElementById('navbar').offsetHeight;
                    const bookingBarHeight = mobileBookingBar.offsetHeight;
                    const offset = navbarHeight + bookingBarHeight + 20;
                    
                    const elementPosition = bookingCard.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - offset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }
        
        // Gallery functionality
        const galleryImages = [
            { src: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200', title: 'Luxury Suite Room', index: 1 },
            { src: 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=1200', title: 'Grand Lobby', index: 2 },
            { src: 'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=1200', title: 'Swimming Pool', index: 3 },
            { src: 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=1200', title: 'Fine Dining Restaurant', index: 4 }
        ];
        
        let currentImageIndex = 0;
        
        function changeMainImage(src, title, index) {
            const mainImage = document.getElementById('mainImage');
            const imageTitle = document.getElementById('imageTitle');
            const imageCounter = document.getElementById('imageCounter');
            const thumbs = document.querySelectorAll('.gallery-thumb');
            
            // Update main image with fade effect
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = src;
                mainImage.style.opacity = '1';
            }, 200);
            
            // Update title and counter
            if (title) imageTitle.textContent = title;
            if (index) {
                currentImageIndex = index - 1;
                imageCounter.textContent = `${index} / 16`;
            }
            
            // Update active state
            thumbs.forEach((thumb, i) => {
                thumb.classList.remove('active');
                if (i === index - 1) {
                    thumb.classList.add('active');
                }
            });
        }
        
        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
            const img = galleryImages[currentImageIndex];
            changeMainImage(img.src, img.title, img.index);
        }
        
        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
            const img = galleryImages[currentImageIndex];
            changeMainImage(img.src, img.title, img.index);
        }
        
        function openFullscreen() {
            const mainImage = document.getElementById('mainImage');
            if (mainImage.requestFullscreen) {
                mainImage.requestFullscreen();
            } else if (mainImage.webkitRequestFullscreen) {
                mainImage.webkitRequestFullscreen();
            } else if (mainImage.msRequestFullscreen) {
                mainImage.msRequestFullscreen();
            }
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const gallery = document.querySelector('.hotel-gallery');
            if (gallery && document.activeElement !== document.querySelector('input') && document.activeElement !== document.querySelector('select')) {
                if (e.key === 'ArrowLeft') {
                    previousImage();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                }
            }
        });
        
        // Review Form Star Rating
        const starRating = document.getElementById('starRating');
        const ratingText = document.getElementById('ratingText');
        const reviewForm = document.getElementById('reviewForm');
        let selectedRating = 0;
        
        if (starRating && ratingText) {
            const stars = starRating.querySelectorAll('i');
            const ratingLabels = {
                0: 'Click to rate',
                1: 'Poor',
                2: 'Fair',
                3: 'Good',
                4: 'Very Good',
                5: 'Excellent'
            };
            
            stars.forEach((star, index) => {
                star.addEventListener('click', function() {
                    selectedRating = index + 1;
                    updateStarDisplay();
                });
                
                star.addEventListener('mouseenter', function() {
                    highlightStars(index + 1);
                });
            });
            
            starRating.addEventListener('mouseleave', function() {
                updateStarDisplay();
            });
            
            function highlightStars(rating) {
                stars.forEach((star, index) => {
                    if (index < rating) {
                        star.classList.add('bi-star-fill');
                        star.classList.remove('bi-star');
                        star.classList.add('active');
                    } else {
                        star.classList.add('bi-star');
                        star.classList.remove('bi-star-fill');
                        star.classList.remove('active');
                    }
                });
                ratingText.textContent = ratingLabels[rating] || 'Click to rate';
            }
            
            function updateStarDisplay() {
                if (selectedRating > 0) {
                    highlightStars(selectedRating);
                } else {
                    stars.forEach(star => {
                        star.classList.add('bi-star');
                        star.classList.remove('bi-star-fill');
                        star.classList.remove('active');
                    });
                    ratingText.textContent = ratingLabels[0];
                }
            }
        }
        
        // Review Form Submission
        if (reviewForm) {
            reviewForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate rating
                if (selectedRating === 0) {
                    alert('Please select a rating');
                    return;
                }
                
                // Get form data
                const formData = new FormData(reviewForm);
                const name = reviewForm.querySelector('input[type="text"]').value;
                const email = reviewForm.querySelector('input[type="email"]').value;
                const review = reviewForm.querySelector('textarea').value;
                const stayDate = reviewForm.querySelector('input[type="date"]').value;
                const travelType = reviewForm.querySelector('select').value;
                
                // Validate review text length
                if (review.length < 50) {
                    alert('Please write at least 50 characters in your review');
                    return;
                }
                
                // Here you would typically send the data to a server
                console.log('Review submitted:', {
                    name,
                    email,
                    rating: selectedRating,
                    review,
                    stayDate,
                    travelType
                });
                
                // Show success message
                alert('Thank you for your review! Your feedback has been submitted successfully.');
                
                // Reset form
                reviewForm.reset();
                selectedRating = 0;
                if (starRating) {
                    const stars = starRating.querySelectorAll('i');
                    stars.forEach(star => {
                        star.classList.add('bi-star');
                        star.classList.remove('bi-star-fill');
                        star.classList.remove('active');
                    });
                }
                if (ratingText) {
                    ratingText.textContent = 'Click to rate';
                }
            });
        }
        
        // Air Datepicker English Locale
        const englishLocale = {
            days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Today',
            clear: 'Clear',
            dateFormat: 'dd/MM/yyyy',
            timeFormat: 'hh:mm aa',
            firstDay: 0
        };
        
        // Air Datepicker for Check-in
        const checkinInput = document.getElementById('checkinDate');
        const checkoutInput = document.getElementById('checkoutDate');
        
        const checkinDatepicker = new AirDatepicker(checkinInput, {
            minDate: new Date(),
            dateFormat: 'dd/MM/yyyy',
            locale: englishLocale,
            onSelect: function({date}) {
                if (date) {
                    const minCheckout = new Date(date);
                    minCheckout.setDate(minCheckout.getDate() + 1);
                    checkoutDatepicker.update({
                        minDate: minCheckout
                    });
                }
            }
        });
        
        // Air Datepicker for Check-out
        const checkoutDatepicker = new AirDatepicker(checkoutInput, {
            minDate: new Date(new Date().setDate(new Date().getDate() + 1)),
            dateFormat: 'dd/MM/yyyy',
            locale: englishLocale
        });
        
        // Guests Dropdown Functionality
        function initGuestsDropdown(inputId, dropdownId) {
            const input = document.getElementById(inputId);
            const dropdown = document.getElementById(dropdownId);
            const wrapper = input ? input.closest('.guests-dropdown-wrapper') : null;
            
            if (!input || !dropdown || !wrapper) return;
            
            let guestsData = {
                room: 1,
                adults: 2,
                children: 0
            };
            
            function updateInputValue() {
                const total = guestsData.adults + guestsData.children;
                const roomText = guestsData.room > 1 ? `${guestsData.room} Rooms` : '1 Room';
                let guestText = '';
                
                if (guestsData.children > 0) {
                    const adultText = guestsData.adults > 1 ? `${guestsData.adults} Adults` : '1 Adult';
                    const childText = guestsData.children > 1 ? `${guestsData.children} Children` : '1 Child';
                    guestText = `${adultText}, ${childText}`;
                } else {
                    guestText = total > 1 ? `${total} Guests` : '1 Guest';
                }
                
                input.value = `${roomText}, ${guestText}`;
            }
            
            function updateValue(type, delta) {
                if (type === 'room') {
                    guestsData.room = Math.max(1, guestsData.room + delta);
                } else if (type === 'adults') {
                    guestsData.adults = Math.max(1, guestsData.adults + delta);
                } else if (type === 'children') {
                    guestsData.children = Math.max(0, guestsData.children + delta);
                }
                
                const valueElement = dropdown.querySelector(`.guests-value[data-type="${type}"]`);
                if (valueElement) {
                    valueElement.textContent = guestsData[type];
                }
            }
            
            // Toggle dropdown
            input.addEventListener('click', function(e) {
                e.stopPropagation();
                wrapper.classList.toggle('active');
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!wrapper.contains(e.target)) {
                    wrapper.classList.remove('active');
                }
            });
            
            // Handle plus/minus buttons
            dropdown.querySelectorAll('.guests-btn-minus, .guests-btn-plus').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const type = this.dataset.type;
                    const delta = this.classList.contains('guests-btn-plus') ? 1 : -1;
                    updateValue(type, delta);
                });
            });
            
            // Handle apply button
            const applyBtn = dropdown.querySelector('.guests-apply-btn');
            if (applyBtn) {
                applyBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    updateInputValue();
                    wrapper.classList.remove('active');
                    input.dispatchEvent(new Event('change'));
                });
            }
            
            // Initialize input value
            updateInputValue();
        }
        
        // Initialize guests dropdown
        initGuestsDropdown('guestsInputDetails', 'guestsDropdownDetails');
        
        // Sticky Booking Card - Stop at Footer (only handles footer stop, CSS handles sticky)
        (function() {
            const bookingCard = document.querySelector('.booking-card');
            const footer = document.querySelector('.footer');
            const bookingCardParent = bookingCard ? bookingCard.closest('.col-lg-4') : null;
            
            if (!bookingCard || !footer || !bookingCardParent) return;
            
            // Ensure parent has relative positioning for absolute positioning when needed
            const parentStyle = window.getComputedStyle(bookingCardParent);
            if (parentStyle.position === 'static') {
                bookingCardParent.style.position = 'relative';
            }
            
            let isStopped = false;
            
            function updateBookingCardSticky() {
                // Mobile - CSS handles this, no JS needed
                if (window.innerWidth <= 991) {
                    if (isStopped) {
                        bookingCard.style.position = '';
                        bookingCard.style.top = '';
                        bookingCard.style.bottom = '';
                        isStopped = false;
                    }
                    return;
                }
                
                const padding = 20;
                
                // Get current positions
                const bookingCardRect = bookingCard.getBoundingClientRect();
                const footerRect = footer.getBoundingClientRect();
                const parentRect = bookingCardParent.getBoundingClientRect();
                
                // Calculate if footer is approaching and card would overlap
                const cardBottom = bookingCardRect.bottom;
                const footerTop = footerRect.top;
                const spaceBetween = footerTop - cardBottom;
                
                // If footer is in viewport and card would overlap (with padding)
                if (footerTop < window.innerHeight && spaceBetween < padding) {
                    if (!isStopped) {
                        // Switch to absolute positioning to stop before footer
                        const parentBottom = parentRect.bottom;
                        const bottomValue = parentBottom - footerTop + padding;
                        
                        bookingCard.style.position = 'absolute';
                        bookingCard.style.top = 'auto';
                        bookingCard.style.bottom = Math.max(0, bottomValue) + 'px';
                        isStopped = true;
                    } else {
                        // Update bottom position if already stopped
                        const parentBottom = parentRect.bottom;
                        const bottomValue = parentBottom - footerTop + padding;
                        bookingCard.style.bottom = Math.max(0, bottomValue) + 'px';
                    }
                } else {
                    // Let CSS sticky handle it - remove any inline styles
                    if (isStopped) {
                        bookingCard.style.position = '';
                        bookingCard.style.top = '';
                        bookingCard.style.bottom = '';
                        isStopped = false;
                    }
                }
            }
            
            // Wait for page to load
            function initSticky() {
                // CSS handles sticky, JS only handles footer stop
                setTimeout(updateBookingCardSticky, 100);
            }
            
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initSticky);
            } else {
                initSticky();
            }
            
            // Update on scroll
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        updateBookingCardSticky();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Update on resize
            window.addEventListener('resize', function() {
                isStopped = false;
                initSticky();
            });
        })();
    </script>
</body>
</html>

