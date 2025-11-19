<nav class="navbar" id="navbar">
    <div class="navbar-container">
        <div class="navbar-content">
            <a href="#" class="logo-section">
                <img src="https://fayyaztravels.com/visa/admin/assets/img/main-logo.png" alt="Fayyaz Travels Logo" class="logo-image">
            </a>
            
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="bi bi-list"></i>
            </button>
            
            <div class="nav-menu" id="navMenu">
                <a href="#" class="nav-item active">
                    <span class="new-badge">NEW</span>
                    <i class="bi bi-building-fill"></i>
                    <span>Hotel</span>
                </a>
                <a href="#" class="nav-item">
                    <i class="bi bi-briefcase-fill"></i>
                    <span>Corporate</span>
                </a>
            </div>
            
            <div class="right-section">
                <a href="tel:+919953888841" class="phone-toggle">
                    <div class="phone-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                </a>
                <div class="menu-wrapper">
                    <div class="menu-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="menu-icon">
                            <i class="bi bi-list"></i>
                        </div>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>About Us</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-envelope me-2"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="user-profile-wrapper">
                    <div class="user-profile" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus me-2"></i>Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Secondary Navbar (Sticky Search Bar) -->
<div class="secondary-navbar" id="secondaryNavbar">
    <div class="secondary-navbar-container">
        <form class="secondary-search-form" id="secondarySearchForm">
            <div class="secondary-form-group">
                <label><i class="bi bi-geo-alt-fill"></i>Destination</label>
                <input type="text" id="secondaryDestinationInput" class="secondary-form-control" placeholder="Where are you going?" autocomplete="off">
                <div class="secondary-autocomplete-suggestions" id="secondaryDestinationSuggestions"></div>
            </div>
            <div class="secondary-form-group">
                <label><i class="bi bi-calendar-check-fill"></i>Check-in</label>
                <input type="text" id="secondaryCheckinInput" class="secondary-form-control" placeholder="Check-in" readonly>
            </div>
            <div class="secondary-form-group">
                <label><i class="bi bi-calendar-x-fill"></i>Check-out</label>
                <input type="text" id="secondaryCheckoutInput" class="secondary-form-control" placeholder="Check-out" readonly>
            </div>
            <div class="secondary-form-group">
                <label><i class="bi bi-people-fill"></i>Guests</label>
                <select class="secondary-form-control" id="secondaryGuestsSelect">
                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4+ Guests</option>
                </select>
            </div>
            <button type="submit" class="secondary-search-btn">
                <i class="bi bi-search"></i>
                <span>Search</span>
            </button>
        </form>
    </div>
</div>

