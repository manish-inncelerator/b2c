<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        body {
            background: var(--light-bg);
        }
        
        /* Profile Container */
        .profile-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 50px;
            margin-top: 76px;
        }
        
        @media (max-width: 991px) {
            .profile-container {
                margin-top: 76px;
                padding: 30px 20px;
            }
        }
        
        /* Profile Header */
        .profile-header {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 24px;
            padding: 50px 40px;
            margin-top: 40px;
            margin-bottom: 32px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 48px rgba(20, 56, 92, 0.3);
        }
        
        @media (max-width: 991px) {
            .profile-header {
                margin-top: 30px;
                padding: 32px 24px;
            }
        }
        
        .profile-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .profile-header-content {
            display: flex;
            align-items: center;
            gap: 32px;
            position: relative;
            z-index: 1;
        }
        
        .profile-avatar-wrapper {
            position: relative;
        }
        
        .profile-avatar {
            width: 140px;
            height: 140px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 56px;
            font-weight: 800;
            color: var(--blue);
            border: 6px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .profile-avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        
        .avatar-edit-btn {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 44px;
            height: 44px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 18px;
            cursor: pointer;
            border: 3px solid var(--blue);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .avatar-edit-btn:hover {
            transform: scale(1.1);
            background: var(--blue);
            color: white;
        }
        
        .profile-info {
            flex: 1;
        }
        
        .profile-name {
            font-size: 42px;
            font-weight: 900;
            margin-bottom: 8px;
            letter-spacing: -1px;
        }
        
        .profile-email {
            font-size: 18px;
            opacity: 0.95;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .profile-email i {
            font-size: 20px;
        }
        
        .profile-meta {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
        }
        
        .profile-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            opacity: 0.9;
        }
        
        .profile-meta-item i {
            font-size: 18px;
        }
        
        .profile-actions {
            display: flex;
            gap: 12px;
        }
        
        .profile-btn {
            padding: 12px 24px;
            background: white;
            color: var(--blue);
            border: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        
        .profile-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            color: var(--blue);
            text-decoration: none;
        }
        
        .profile-btn.secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .profile-btn.secondary:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        /* Profile Tabs */
        .profile-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 32px;
            background: white;
            padding: 8px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 2px solid var(--border-color);
            overflow-x: auto;
        }
        
        .profile-tab {
            flex: 1;
            padding: 14px 24px;
            background: transparent;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            color: var(--text-color);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            white-space: nowrap;
            position: relative;
        }
        
        .profile-tab:hover {
            background: rgba(20, 56, 92, 0.05);
            color: var(--blue);
        }
        
        .profile-tab.active {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
        }
        
        .profile-tab i {
            font-size: 18px;
        }
        
        /* Profile Content */
        .profile-content {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 32px;
        }
        
        .profile-sidebar {
            position: sticky;
            top: 100px;
            height: fit-content;
        }
        
        .sidebar-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .sidebar-card:hover {
            box-shadow: 0 12px 32px rgba(20, 56, 92, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .sidebar-card-title {
            font-size: 18px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 16px;
            border-bottom: 2px solid var(--border-color);
        }
        
        .sidebar-card-title i {
            color: var(--blue);
        }
        
        .stat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid var(--border-color);
        }
        
        .stat-item:last-child {
            border-bottom: none;
        }
        
        .stat-label {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 600;
        }
        
        .stat-value {
            font-size: 20px;
            font-weight: 800;
            color: var(--blue);
        }
        
        /* Profile Main Content */
        .profile-main {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }
        
        .content-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .content-card:hover {
            box-shadow: 0 12px 32px rgba(20, 56, 92, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .card-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .card-title i {
            color: var(--blue);
            font-size: 26px;
        }
        
        /* Form Styles */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .form-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-label i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .form-control {
            padding: 14px 18px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 15px;
            font-family: inherit;
            color: var(--text-color);
            background: white;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
        }
        
        .form-control:disabled {
            background: var(--light-bg);
            color: var(--text-light);
            cursor: not-allowed;
        }
        
        .save-btn {
            padding: 14px 32px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        /* Booking History */
        .booking-item {
            padding: 24px;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .booking-item:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            border-color: var(--blue);
            transform: translateY(-2px);
        }
        
        .booking-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }
        
        .booking-hotel {
            flex: 1;
        }
        
        .booking-hotel-name {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 6px;
        }
        
        .booking-hotel-location {
            font-size: 14px;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .booking-hotel-location i {
            color: var(--blue);
        }
        
        .booking-status {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .booking-status.confirmed {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1) 0%, rgba(40, 167, 69, 0.1) 100%);
            color: var(--success-color);
            border: 1px solid rgba(40, 167, 69, 0.2);
        }
        
        .booking-status.pending {
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 193, 7, 0.1) 100%);
            color: #f39c12;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }
        
        .booking-details {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 20px;
            padding: 20px;
            background: var(--light-bg);
            border-radius: 12px;
        }
        
        .booking-detail {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        
        .booking-detail-label {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .booking-detail-value {
            font-size: 15px;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .booking-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid var(--border-color);
        }
        
        .booking-price {
            display: flex;
            flex-direction: column;
        }
        
        .booking-price-label {
            font-size: 12px;
            color: var(--text-light);
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .booking-price-value {
            font-size: 24px;
            font-weight: 900;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .booking-actions {
            display: flex;
            gap: 12px;
        }
        
        .booking-btn {
            padding: 10px 20px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
            color: var(--text-color);
        }
        
        .booking-btn:hover {
            border-color: var(--blue);
            color: var(--blue);
            transform: translateY(-2px);
        }
        
        .booking-btn.primary {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border-color: transparent;
        }
        
        .booking-btn.primary:hover {
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
        }
        
        /* Preferences */
        .preference-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border: 2px solid var(--border-color);
            border-radius: 14px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }
        
        .preference-item:hover {
            border-color: var(--blue);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.1);
        }
        
        .preference-info {
            flex: 1;
        }
        
        .preference-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .preference-title i {
            color: var(--blue);
            font-size: 18px;
        }
        
        .preference-desc {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .toggle-switch {
            position: relative;
            width: 56px;
            height: 30px;
        }
        
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--border-color);
            transition: 0.4s;
            border-radius: 30px;
        }
        
        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        input:checked + .toggle-slider {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        input:checked + .toggle-slider:before {
            transform: translateX(26px);
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            
            .profile-container {
                padding: 30px 20px;
            }
            
            .profile-content {
                grid-template-columns: 1fr;
            }
            
            .profile-sidebar {
                position: relative;
                top: 0;
            }
            
            .profile-header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-meta {
                justify-content: center;
            }
            
            .profile-actions {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .booking-details {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .profile-header {
                padding: 32px 24px;
            }
            
            .profile-name {
                font-size: 32px;
            }
            
            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 40px;
            }
            
            .booking-details {
                grid-template-columns: 1fr;
            }
            
            .booking-footer {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }
            
            .booking-actions {
                width: 100%;
                flex-direction: column;
            }
            
            .booking-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <div class="profile-container">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="profile-header-content">
                <div class="profile-avatar-wrapper">
                    <div class="profile-avatar">JD</div>
                    <div class="avatar-edit-btn" onclick="document.getElementById('avatarInput').click()">
                        <i class="bi bi-camera-fill"></i>
                    </div>
                    <input type="file" id="avatarInput" accept="image/*" style="display: none;">
                </div>
                <div class="profile-info">
                    <h1 class="profile-name">John Doe</h1>
                    <div class="profile-email">
                        <i class="bi bi-envelope-fill"></i>
                        <span>john.doe@example.com</span>
                    </div>
                    <div class="profile-meta">
                        <div class="profile-meta-item">
                            <i class="bi bi-telephone-fill"></i>
                            <span>+91 9876543210</span>
                        </div>
                        <div class="profile-meta-item">
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>Member since Dec 2023</span>
                        </div>
                        <div class="profile-meta-item">
                            <i class="bi bi-shield-check-fill"></i>
                            <span>Verified Account</span>
                        </div>
                    </div>
                </div>
                <div class="profile-actions">
                    <a href="edit-profile.html" class="profile-btn">
                        <i class="bi bi-pencil-fill"></i>
                        <span>Edit Profile</span>
                    </a>
                    <button class="profile-btn secondary">
                        <i class="bi bi-share-fill"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Profile Tabs -->
        <div class="profile-tabs">
            <button class="profile-tab active" data-tab="personal">
                <i class="bi bi-person-fill"></i>
                <span>Personal Info</span>
            </button>
            <button class="profile-tab" data-tab="bookings">
                <i class="bi bi-calendar-check-fill"></i>
                <span>My Bookings</span>
            </button>
            <button class="profile-tab" data-tab="settings">
                <i class="bi bi-gear-fill"></i>
                <span>Settings</span>
            </button>
            <button class="profile-tab" data-tab="security">
                <i class="bi bi-shield-lock-fill"></i>
                <span>Security</span>
            </button>
        </div>

        <div class="profile-content">
            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="sidebar-card">
                    <h3 class="sidebar-card-title">
                        <i class="bi bi-bar-chart-fill"></i>
                        Statistics
                    </h3>
                    <div class="stat-item">
                        <span class="stat-label">Total Bookings</span>
                        <span class="stat-value">12</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Upcoming</span>
                        <span class="stat-value">3</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Completed</span>
                        <span class="stat-value">8</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Cancelled</span>
                        <span class="stat-value">1</span>
                    </div>
                </div>
                
                <div class="sidebar-card">
                    <h3 class="sidebar-card-title">
                        <i class="bi bi-wallet-fill"></i>
                        Wallet
                    </h3>
                    <div class="stat-item">
                        <span class="stat-label">Balance</span>
                        <span class="stat-value">₹2,500</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Rewards</span>
                        <span class="stat-value">1,200 pts</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="profile-main">
                <!-- Personal Info Tab -->
                <div class="tab-content" id="personalTab">
                    <div class="content-card">
                        <h2 class="card-title">
                            <i class="bi bi-person-fill"></i>
                            Personal Information
                        </h2>
                        <form class="profile-form">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-person"></i>
                                        First Name
                                    </label>
                                    <input type="text" class="form-control" value="John" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-person"></i>
                                        Last Name
                                    </label>
                                    <input type="text" class="form-control" value="Doe" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-envelope-fill"></i>
                                        Email Address
                                    </label>
                                    <input type="email" class="form-control" value="john.doe@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-telephone-fill"></i>
                                        Phone Number
                                    </label>
                                    <input type="tel" class="form-control" value="+91 9876543210" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-calendar-fill"></i>
                                        Date of Birth
                                    </label>
                                    <input type="date" class="form-control" value="1990-05-15">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-gender-ambiguous"></i>
                                        Gender
                                    </label>
                                    <select class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label class="form-label">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        Address
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Enter your address">123 Main Street, Mumbai, Maharashtra, India</textarea>
                                </div>
                            </div>
                            <div style="margin-top: 24px;">
                                <button type="submit" class="save-btn">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bookings Tab -->
                <div class="tab-content" id="bookingsTab" style="display: none;">
                    <div class="content-card">
                        <h2 class="card-title">
                            <i class="bi bi-calendar-check-fill"></i>
                            Booking History
                        </h2>
                        
                        <div class="booking-item">
                            <div class="booking-header">
                                <div class="booking-hotel">
                                    <h3 class="booking-hotel-name">Grand Luxury Resort</h3>
                                    <div class="booking-hotel-location">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span>Mumbai, Maharashtra, India</span>
                                    </div>
                                </div>
                                <div class="booking-status confirmed">Confirmed</div>
                            </div>
                            <div class="booking-details">
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Check-in</span>
                                    <span class="booking-detail-value">15 Dec 2024</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Check-out</span>
                                    <span class="booking-detail-value">18 Dec 2024</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Guests</span>
                                    <span class="booking-detail-value">2 Adults</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Booking ID</span>
                                    <span class="booking-detail-value">#BK123456</span>
                                </div>
                            </div>
                            <div class="booking-footer">
                                <div class="booking-price">
                                    <span class="booking-price-label">Total Amount</span>
                                    <span class="booking-price-value">₹13,500</span>
                                </div>
                                <div class="booking-actions">
                                    <button class="booking-btn">View Details</button>
                                    <button class="booking-btn primary">Download Invoice</button>
                                </div>
                            </div>
                        </div>

                        <div class="booking-item">
                            <div class="booking-header">
                                <div class="booking-hotel">
                                    <h3 class="booking-hotel-name">Ocean View Hotel</h3>
                                    <div class="booking-hotel-location">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <span>Goa, India</span>
                                    </div>
                                </div>
                                <div class="booking-status pending">Pending</div>
                            </div>
                            <div class="booking-details">
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Check-in</span>
                                    <span class="booking-detail-value">20 Dec 2024</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Check-out</span>
                                    <span class="booking-detail-value">23 Dec 2024</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Guests</span>
                                    <span class="booking-detail-value">2 Adults</span>
                                </div>
                                <div class="booking-detail">
                                    <span class="booking-detail-label">Booking ID</span>
                                    <span class="booking-detail-value">#BK123457</span>
                                </div>
                            </div>
                            <div class="booking-footer">
                                <div class="booking-price">
                                    <span class="booking-price-label">Total Amount</span>
                                    <span class="booking-price-value">₹18,600</span>
                                </div>
                                <div class="booking-actions">
                                    <button class="booking-btn">Cancel Booking</button>
                                    <button class="booking-btn primary">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div class="tab-content" id="settingsTab" style="display: none;">
                    <div class="content-card">
                        <h2 class="card-title">
                            <i class="bi bi-gear-fill"></i>
                            Preferences & Settings
                        </h2>
                        
                        <div class="preference-item">
                            <div class="preference-info">
                                <div class="preference-title">
                                    <i class="bi bi-bell-fill"></i>
                                    Email Notifications
                                </div>
                                <div class="preference-desc">Receive emails about bookings, promotions, and updates</div>
                            </div>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="preference-item">
                            <div class="preference-info">
                                <div class="preference-title">
                                    <i class="bi bi-phone-fill"></i>
                                    SMS Notifications
                                </div>
                                <div class="preference-desc">Get booking confirmations and updates via SMS</div>
                            </div>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="preference-item">
                            <div class="preference-info">
                                <div class="preference-title">
                                    <i class="bi bi-envelope-heart-fill"></i>
                                    Newsletter
                                </div>
                                <div class="preference-desc">Subscribe to our newsletter for travel deals and tips</div>
                            </div>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="preference-item">
                            <div class="preference-info">
                                <div class="preference-title">
                                    <i class="bi bi-eye-fill"></i>
                                    Public Profile
                                </div>
                                <div class="preference-desc">Allow others to see your reviews and ratings</div>
                            </div>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="preference-item">
                            <div class="preference-info">
                                <div class="preference-title">
                                    <i class="bi bi-language"></i>
                                    Language
                                </div>
                                <div class="preference-desc">Select your preferred language</div>
                            </div>
                            <select class="form-control" style="width: 200px;">
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Marathi</option>
                                <option>Gujarati</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Security Tab -->
                <div class="tab-content" id="securityTab" style="display: none;">
                    <div class="content-card">
                        <h2 class="card-title">
                            <i class="bi bi-shield-lock-fill"></i>
                            Change Password
                        </h2>
                        <form class="profile-form">
                            <div class="form-grid">
                                <div class="form-group full-width">
                                    <label class="form-label">
                                        <i class="bi bi-lock-fill"></i>
                                        Current Password
                                    </label>
                                    <input type="password" class="form-control" placeholder="Enter current password" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-key-fill"></i>
                                        New Password
                                    </label>
                                    <input type="password" class="form-control" placeholder="Enter new password" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="bi bi-key-fill"></i>
                                        Confirm New Password
                                    </label>
                                    <input type="password" class="form-control" placeholder="Confirm new password" required>
                                </div>
                            </div>
                            <div style="margin-top: 24px;">
                                <button type="submit" class="save-btn">
                                    <i class="bi bi-shield-check-fill"></i>
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="content-card" style="margin-top: 32px;">
                        <h2 class="card-title">
                            <i class="bi bi-device-hdd-fill"></i>
                            Active Sessions
                        </h2>
                        <div class="booking-item">
                            <div class="booking-header">
                                <div>
                                    <div style="font-size: 16px; font-weight: 700; color: var(--dark-color); margin-bottom: 6px;">Chrome - Windows</div>
                                    <div style="font-size: 13px; color: var(--text-light);">Mumbai, India • Last active: 2 hours ago</div>
                                </div>
                                <div class="booking-status confirmed">Current</div>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-header">
                                <div>
                                    <div style="font-size: 16px; font-weight: 700; color: var(--dark-color); margin-bottom: 6px;">Safari - iPhone</div>
                                    <div style="font-size: 13px; color: var(--text-light);">Mumbai, India • Last active: 5 days ago</div>
                                </div>
                                <button class="booking-btn">Revoke</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tab switching
        document.querySelectorAll('.profile-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabName = this.getAttribute('data-tab');
                
                // Hide all tabs
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.style.display = 'none';
                });
                
                // Remove active class from all tabs
                document.querySelectorAll('.profile-tab').forEach(t => {
                    t.classList.remove('active');
                });
                
                // Show selected tab
                document.getElementById(tabName + 'Tab').style.display = 'block';
                
                // Add active class to clicked tab
                this.classList.add('active');
            });
        });
        
        // Avatar upload
        const avatarInput = document.getElementById('avatarInput');
        if (avatarInput) {
            avatarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const avatar = document.querySelector('.profile-avatar');
                        if (avatar) {
                            avatar.innerHTML = `<img src="${e.target.result}" class="profile-avatar-img" alt="Profile">`;
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
        
        // Form submission
        document.querySelectorAll('.profile-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Changes saved successfully!');
            });
        });
    </script>
</body>
</html>

