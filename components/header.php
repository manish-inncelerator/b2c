<div class="top-strip"></div>

<!-- Top Navbar -->
<div class="top-navbar top-navbar-desktop">
    <div class="top-navbar-container">
        <div class="top-navbar-content">
            <div class="top-navbar-column notification-column">
                <span class="notification-text">🎉 50% OFF - Limited Time Offer!</span>
            </div>
            <div class="top-navbar-column contact-column">
                <a href="tel:+919953888841" class="contact-item">
                    <i class="bi bi-telephone-fill"></i>
                    <span>+91 9953-888-841</span>
                </a>
                <a href="mailto:info@example.com" class="contact-item">
                    <i class="bi bi-envelope-fill"></i>
                    <span>info@example.com</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Top Navbar Mobile -->
<div class="top-navbar top-navbar-mobile">
    <div class="top-navbar-container">
        <div class="top-navbar-content">
            <div class="top-navbar-column notification-column">
                <span class="notification-text">🎉 50% OFF - Limited Time Offer!</span>
            </div>
            <div class="top-navbar-column contact-column">
                <a href="tel:+919953888841" class="contact-item">
                    <i class="bi bi-telephone-fill"></i>
                    <span>+91 9953-888-841</span>
                </a>
                <a href="mailto:info@example.com" class="contact-item">
                    <i class="bi bi-envelope-fill"></i>
                    <span>info@example.com</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Top Navbar Base Styles */
    .top-navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background: #212529;
        color: #ffffff;
        z-index: 999;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Desktop Navbar */
    .top-navbar-desktop {
        display: block;
    }

    /* Mobile Navbar */
    .top-navbar-mobile {
        display: none;
    }

    .top-navbar-container {
        width: 100%;
        margin: 0 auto;
        padding: 0 15px;
        box-sizing: border-box;
    }

    @media (min-width: 576px) {
        .top-navbar-container {
            max-width: 540px;
            padding: 0 20px;
        }
    }

    @media (min-width: 768px) {
        .top-navbar-container {
            max-width: 720px;
            padding: 0 30px;
        }
    }

    @media (min-width: 992px) {
        .top-navbar-container {
            max-width: 960px;
            padding: 0 40px;
        }
    }

    @media (min-width: 1200px) {
        .top-navbar-container {
            max-width: 1140px;
            padding: 0 50px;
        }
    }

    @media (min-width: 1400px) {
        .top-navbar-container {
            max-width: 1320px;
            padding: 0 50px;
        }
    }

    /* Desktop Content Styles */
    .top-navbar-desktop .top-navbar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 0;
    }

    /* Mobile Content Styles */
    .top-navbar-mobile .top-navbar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 22px 0;
    }

    .top-navbar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .top-navbar-column {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .notification-column {
        flex: 1;
    }

    .notification-text {
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.3px;
        color: #ffffff;
    }

    .contact-column {
        display: flex;
        align-items: center;
        gap: 24px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #ffffff;
        text-decoration: none;
        font-size: 13px;
        font-weight: 400;
        transition: opacity 0.3s ease;
    }

    .contact-item:hover {
        opacity: 0.7;
        color: #ffffff;
    }

    /* Desktop Contact Item Styles */
    .top-navbar-desktop .contact-item i {
        font-size: 14px;
    }

    /* Mobile Contact Item Styles */
    .top-navbar-mobile .contact-item {
        font-size: 12px;
    }

    .top-navbar-mobile .contact-item span {
        display: none;
    }

    .top-navbar-mobile .contact-item i {
        font-size: 16px;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        transition: background 0.3s ease;
    }

    .top-navbar-mobile .contact-item:hover i {
        background: rgba(255, 255, 255, 0.2);
    }

    /* Mobile Notification Text */
    .top-navbar-mobile .notification-text {
        font-size: 12px;
    }

    /* Adjust main navbar position */
    .navbar {
        top: 55px !important;
    }

    /* Responsive - Show/Hide based on screen size */
    @media (max-width: 768px) {
        .top-navbar-desktop {
            display: none;
        }

        .top-navbar-mobile {
            display: block;
        }

        .navbar {
            top: 59px !important;
        }
    }

    @media (min-width: 769px) {
        .top-navbar-desktop {
            display: block;
        }

        .top-navbar-mobile {
            display: none;
        }

        .navbar {
            top: 55px !important;
        }
    }

    @media (max-width: 576px) {
        .contact-column {
            gap: 16px;
        }
    }
</style>

