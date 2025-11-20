<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Fayyaz Travels</title>
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
            background-color: #ffffff;
            color: var(--text-color);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
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
            position: sticky;
            top: 0;
            z-index: 1000;
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
        
        /* Content Section */
        .content-page {
            padding: 80px 0;
            background: var(--light-bg);
            min-height: calc(100vh - 200px);
        }
        
        .content-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .content-card {
            background: white;
            border-radius: 24px;
            padding: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--border-color);
        }
        
        .content-header {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 3px solid var(--light-bg);
        }
        
        .content-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            margin-bottom: 24px;
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.3);
        }
        
        .content-title {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 12px;
            letter-spacing: -1px;
            line-height: 1.2;
        }
        
        .content-updated {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        .content-body {
            font-size: 16px;
            line-height: 1.8;
            color: var(--text-color);
        }
        
        .content-body h2 {
            font-size: 28px;
            font-weight: normal;
            color: var(--dark-color);
            margin-top: 40px;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }
        
        .content-body h3 {
            font-size: 22px;
            font-weight: normal;
            color: var(--dark-color);
            margin-top: 32px;
            margin-bottom: 16px;
        }
        
        .content-body p {
            margin-bottom: 20px;
            color: var(--text-color);
        }
        
        .content-body ul,
        .content-body ol {
            margin-left: 24px;
            margin-bottom: 20px;
        }
        
        .content-body li {
            margin-bottom: 12px;
            color: var(--text-color);
        }
        
        .content-body strong {
            color: var(--dark-color);
            font-weight: 700;
        }
        
        .loading-state {
            text-align: center;
            padding: 60px 20px;
        }
        
        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 4px solid var(--light-bg);
            border-top-color: var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 24px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .error-state {
            text-align: center;
            padding: 60px 20px;
        }
        
        .error-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            margin: 0 auto 24px;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 32px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
        }
        
        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.4);
            color: white;
        }
        
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            color: white;
            padding: 40px 0 0;
            position: relative;
            overflow: hidden;
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
            
            .content-page {
                padding: 40px 0;
            }
            
            .content-card {
                padding: 32px 24px;
                border-radius: 20px;
            }
            
            .content-title {
                font-size: 32px;
            }
            
            .content-body h2 {
                font-size: 24px;
            }
            
            .content-body h3 {
                font-size: 20px;
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

    <section class="content-page">
        <div class="content-container">
            <div id="loadingState" class="loading-state">
                <div class="loading-spinner"></div>
                <p style="color: var(--text-light); font-size: 16px;">Loading content...</p>
            </div>
            
            <div id="errorState" class="error-state" style="display: none;">
                <div class="error-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <h2 style="font-size: 24px; font-weight: normal; margin-bottom: 12px; color: var(--dark-color);">Content Not Found</h2>
                <p style="color: var(--text-light); margin-bottom: 24px;">Unable to load the requested content. Please try again later.</p>
                <a href="index.html" class="back-btn">
                    <i class="bi bi-arrow-left"></i>
                    <span>Back to Home</span>
                </a>
            </div>
            
            <div id="contentCard" class="content-card" style="display: none;">
                <div class="content-header">
                    <div class="content-icon" id="contentIcon">
                        <i class="bi bi-file-text-fill"></i>
                    </div>
                    <h1 class="content-title" id="contentTitle">Terms & Conditions</h1>
                    <p class="content-updated" id="contentUpdated">Last updated: <span id="updatedDate">-</span></p>
                </div>
                <div class="content-body" id="contentBody">
                    <!-- Content will be loaded here -->
                </div>
                <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid var(--light-bg); text-align: center;">
                    <a href="index.html" class="back-btn">
                        <i class="bi bi-arrow-left"></i>
                        <span>Back to Home</span>
                    </a>
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
        // Get page type from URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const pageType = urlParams.get('type') || 'terms';
        
        // Map page types to icons and titles
        const pageConfig = {
            'terms': {
                icon: 'bi-file-text-fill',
                title: 'Terms & Conditions',
                defaultTitle: 'Terms & Conditions'
            },
            'privacy': {
                icon: 'bi-shield-lock-fill',
                title: 'Privacy Policy',
                defaultTitle: 'Privacy Policy'
            },
            'cancellation': {
                icon: 'bi-x-circle-fill',
                title: 'Cancellation Policy',
                defaultTitle: 'Cancellation Policy'
            }
        };
        
        const config = pageConfig[pageType] || pageConfig['terms'];
        document.getElementById('contentIcon').innerHTML = `<i class="bi ${config.icon}"></i>`;
        document.getElementById('contentTitle').textContent = config.title;
        document.title = config.title + ' - Fayyaz Travels';
        
        // Function to load content from database
        async function loadContent() {
            try {
                // Replace this URL with your actual API endpoint
                const apiUrl = `/api/static-content?type=${pageType}`;
                
                // For demo purposes, we'll use mock data
                // In production, replace this with actual API call
                const response = await fetch(apiUrl).catch(() => {
                    // Fallback to mock data if API fails
                    return {
                        ok: true,
                        json: async () => getMockContent(pageType)
                    };
                });
                
                if (response.ok) {
                    const data = await response.json();
                    
                    document.getElementById('loadingState').style.display = 'none';
                    document.getElementById('contentCard').style.display = 'block';
                    
                    if (data.title) {
                        document.getElementById('contentTitle').textContent = data.title;
                        document.title = data.title + ' - Fayyaz Travels';
                    }
                    
                    if (data.updated_at) {
                        const date = new Date(data.updated_at);
                        document.getElementById('updatedDate').textContent = date.toLocaleDateString('en-GB', {
                            day: '2-digit',
                            month: 'long',
                            year: 'numeric'
                        });
                    }
                    
                    if (data.content) {
                        document.getElementById('contentBody').innerHTML = data.content;
                    }
                } else {
                    throw new Error('Failed to load content');
                }
            } catch (error) {
                console.error('Error loading content:', error);
                
                // Fallback to mock content
                document.getElementById('loadingState').style.display = 'none';
                document.getElementById('contentCard').style.display = 'block';
                
                const mockContent = getMockContent(pageType);
                document.getElementById('contentTitle').textContent = mockContent.title;
                document.getElementById('updatedDate').textContent = mockContent.updated_at;
                document.getElementById('contentBody').innerHTML = mockContent.content;
                
                // Uncomment to show error state instead
                // document.getElementById('loadingState').style.display = 'none';
                // document.getElementById('errorState').style.display = 'block';
            }
        }
        
        // Mock content function (replace with actual database calls)
        function getMockContent(type) {
            const mockData = {
                terms: {
                    title: 'Terms & Conditions',
                    updated_at: '15 January 2024',
                    content: `
                        <h2>1. Acceptance of Terms</h2>
                        <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>
                        
                        <h2>2. Use License</h2>
                        <p>Permission is granted to temporarily download one copy of the materials on Fayyaz Travels's website for personal, non-commercial transitory viewing only.</p>
                        
                        <h2>3. Booking Terms</h2>
                        <p>All bookings are subject to availability and confirmation. Prices are subject to change without notice until a booking is confirmed.</p>
                        
                        <h3>3.1 Payment</h3>
                        <p>Payment must be made in full at the time of booking unless otherwise specified. We accept major credit cards and other payment methods as displayed on our website.</p>
                        
                        <h3>3.2 Cancellations</h3>
                        <p>Cancellation policies vary by hotel and booking type. Please refer to the specific cancellation policy for your booking.</p>
                        
                        <h2>4. User Accounts</h2>
                        <p>You are responsible for maintaining the confidentiality of your account and password. You agree to accept responsibility for all activities that occur under your account.</p>
                        
                        <h2>5. Limitation of Liability</h2>
                        <p>Fayyaz Travels shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the service.</p>
                        
                        <h2>6. Changes to Terms</h2>
                        <p>Fayyaz Travels reserves the right to modify these terms at any time. Your continued use of the service following any changes constitutes acceptance of those changes.</p>
                    `
                },
                privacy: {
                    title: 'Privacy Policy',
                    updated_at: '10 January 2024',
                    content: `
                        <h2>1. Introduction</h2>
                        <p>Fayyaz Travels is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.</p>
                        
                        <h2>2. Information We Collect</h2>
                        <p>We collect information that you provide directly to us when you:</p>
                        <ul>
                            <li>Create an account</li>
                            <li>Make a booking</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Contact customer support</li>
                        </ul>
                        
                        <h3>2.1 Personal Information</h3>
                        <p>Personal information may include your name, email address, phone number, billing address, and payment information.</p>
                        
                        <h3>2.2 Usage Data</h3>
                        <p>We automatically collect certain information about your device and how you interact with our website, including IP address, browser type, and pages visited.</p>
                        
                        <h2>3. How We Use Your Information</h2>
                        <p>We use the information we collect to:</p>
                        <ul>
                            <li>Process and manage your bookings</li>
                            <li>Send booking confirmations and updates</li>
                            <li>Provide customer support</li>
                            <li>Send promotional communications (with your consent)</li>
                            <li>Improve our services and website</li>
                        </ul>
                        
                        <h2>4. Information Sharing</h2>
                        <p>We do not sell your personal information. We may share your information with:</p>
                        <ul>
                            <li>Hotel partners to fulfill your bookings</li>
                            <li>Payment processors to process transactions</li>
                            <li>Service providers who assist in our operations</li>
                            <li>Legal authorities when required by law</li>
                        </ul>
                        
                        <h2>5. Data Security</h2>
                        <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
                        
                        <h2>6. Your Rights</h2>
                        <p>You have the right to:</p>
                        <ul>
                            <li>Access your personal information</li>
                            <li>Correct inaccurate information</li>
                            <li>Request deletion of your information</li>
                            <li>Opt-out of marketing communications</li>
                        </ul>
                        
                        <h2>7. Cookies</h2>
                        <p>We use cookies and similar technologies to enhance your experience, analyze usage, and assist in our marketing efforts. You can control cookies through your browser settings.</p>
                        
                        <h2>8. Contact Us</h2>
                        <p>If you have questions about this Privacy Policy, please contact us at privacy@fayyaztravels.com</p>
                    `
                },
                cancellation: {
                    title: 'Cancellation Policy',
                    updated_at: '20 January 2024',
                    content: `
                        <h2>1. General Cancellation Policy</h2>
                        <p>All cancellation requests must be made in accordance with the terms of your booking. Cancellation policies vary depending on the hotel, room type, and rate plan selected.</p>
                        
                        <h2>2. Free Cancellation</h2>
                        <p>Bookings marked as "Free Cancellation" can be cancelled without penalty up to the specified deadline, usually 24-48 hours before check-in.</p>
                        
                        <h2>3. Non-Refundable Bookings</h2>
                        <p>Non-refundable bookings cannot be cancelled or modified. These bookings are clearly marked at the time of reservation and typically offer lower rates.</p>
                        
                        <h2>4. Cancellation Fees</h2>
                        <p>If you cancel after the free cancellation period, the following may apply:</p>
                        <ul>
                            <li><strong>24-48 hours before check-in:</strong> First night's room rate</li>
                            <li><strong>Less than 24 hours:</strong> 100% of booking amount</li>
                            <li><strong>No-show:</strong> 100% of booking amount</li>
                        </ul>
                        
                        <h2>5. How to Cancel</h2>
                        <p>You can cancel your booking through:</p>
                        <ul>
                            <li>Your account dashboard on our website</li>
                            <li>Email at support@fayyaztravels.com</li>
                            <li>Phone: +91 9953-888-841</li>
                        </ul>
                        
                        <h3>5.1 Cancellation Confirmation</h3>
                        <p>You will receive an email confirmation when your cancellation is processed. Refunds, if applicable, will be processed within 7-14 business days.</p>
                        
                        <h2>6. Special Circumstances</h2>
                        <p>We understand that unexpected events may occur. In cases of medical emergencies or natural disasters, please contact us to discuss your options.</p>
                        
                        <h2>7. Group Bookings</h2>
                        <p>Cancellation policies for group bookings (5 or more rooms) may differ. Please refer to your group booking agreement for specific terms.</p>
                        
                        <h2>8. Promotional Bookings</h2>
                        <p>Special promotional rates may have unique cancellation terms. These will be clearly displayed at the time of booking.</p>
                        
                        <h2>9. Refund Processing</h2>
                        <p>Refunds will be issued to the original payment method used for the booking. Processing times vary by payment method:</p>
                        <ul>
                            <li>Credit/Debit Cards: 7-10 business days</li>
                            <li>Bank Transfers: 10-14 business days</li>
                            <li>Digital Wallets: 3-5 business days</li>
                        </ul>
                        
                        <h2>10. Contact Support</h2>
                        <p>For assistance with cancellations, please contact our support team at support@fayyaztravels.com or +91 9953-888-841</p>
                    `
                }
            };
            
            return mockData[type] || mockData.terms;
        }
        
        // Load content on page load
        loadContent();
    </script>
</body>
</html>

