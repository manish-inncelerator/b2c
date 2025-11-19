<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayyaz Travels - Travel Booking Platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        /* Logo Icon Styles (page-specific) */
        .logo-icon-wrapper {
            position: relative;
            width: 46px;
            height: 46px;
        }
        
        .logo-icon {
            width: 46px;
            height: 46px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .logo-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg);
            transition: all 0.6s;
        }
        
        .logo-section:hover .logo-icon::before {
            left: 100%;
        }
        
        .logo-section:hover .logo-icon {
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 8px 20px rgba(20, 56, 92, 0.3);
        }
        
        .logo-text {
            font-size: 26px;
            font-weight: 800;
            color: var(--dark-color);
            margin: 0;
            letter-spacing: -0.8px;
            background: linear-gradient(135deg, var(--dark-color) 0%, var(--text-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .logo-text sup {
            font-size: 11px;
            font-weight: 500;
            color: var(--text-light);
            vertical-align: super;
        }
        
        /* Live Assistance Button (page-specific) */
        .live-assistance-btn {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            border-radius: 10px;
            letter-spacing: 0.8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .live-assistance-btn::before {
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
        
        .live-assistance-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .live-assistance-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        }
        
        .live-assistance-btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Hero Section */
        .hero-section {
            background-image: url('assets/images/hotel-room-bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.65);
            pointer-events: none;
            z-index: 1;
        }
        
        .hero-section::after {
            display: none;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 40px 20px;
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
            overflow: visible;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        
        .hero-title {
            font-size: 56px;
            font-weight: 900;
            margin: 0 0 20px 0;
            letter-spacing: -1.5px;
            line-height: 1.15;
            margin-top:100px;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        }
        
        .hero-subtitle {
            font-size: 22px;
            margin-bottom: 20px;
            opacity: 0.95;
            font-weight: 400;
            max-width: auto;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
            text-shadow: 0 1px 10px rgba(0, 0, 0, 0.15);
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 60px;
            margin-top: 50px;
            flex-wrap: wrap;
        }
        
        .hero-stat {
            text-align: center;
            padding: 20px 30px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .hero-stat::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(135deg, transparent 20%, rgba(255, 255, 255, 0.5) 50%, transparent 80%);
            transform: rotate(45deg);
            animation: statShine 3s infinite;
            pointer-events: none;
        }
        
        @keyframes statShine {
            0% {
                transform: translateX(-150%) translateY(-150%) rotate(45deg);
            }
            100% {
                transform: translateX(150%) translateY(150%) rotate(45deg);
            }
        }
        
        .hero-stat:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .hero-stat:hover::before {
            animation-duration: 1.5s;
        }
        
        .hero-stat-number {
            font-size: 40px;
            font-weight: 900;
            display: block;
            margin-bottom: 6px;
            background: linear-gradient(135deg, #ffffff 0%, rgba(255, 255, 255, 0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 1;
        }
        
        .hero-stat-label {
            font-size: 14px;
            opacity: 0.95;
            font-weight: 500;
            letter-spacing: 0.5px;
            position: relative;
            z-index: 1;
        }
        
        /* Search Box */
        .search-box {
            background: #ffffff;
            border-radius: 24px;
            padding: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            backdrop-filter: blur(10px);
            overflow: visible;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        
        @media (min-width: 992px) {
            .search-box {
                min-width: 1200px;
            }
        }
        
        .search-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 24px;
            padding: 1px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1), rgba(0, 82, 163, 0.1));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            pointer-events: none;
        }
        
        .search-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 32px;
            border-bottom: 2px solid var(--light-bg);
            padding-bottom: 4px;
        }
        
        .search-tab {
            padding: 14px 28px;
            background: none;
            border: none;
            font-weight: 600;
            font-size: 15px;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border-radius: 10px 10px 0 0;
        }
        
        .search-tab:hover {
            color: var(--blue);
            background: rgba(20, 56, 92, 0.05);
        }
        
        .search-tab.active {
            color: var(--blue);
            font-weight: 700;
        }
        
        .search-tab.active::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue), var(--blue-dark));
            border-radius: 2px 2px 0 0;
        }
        
        .search-tab.active::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 4px solid var(--blue);
        }
        
        .search-form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr auto;
            gap: 20px;
            align-items: end;
            overflow: visible;
            width: 100%;
            min-width: 100%;
        }
        
        .search-form[data-form="packages"],
        .search-form[data-form="visa"] {
            grid-template-columns: 1fr 1fr 1fr 1fr auto;
        }
        
        .search-form[data-form="packages"] .form-group,
        .search-form[data-form="visa"] .form-group {
            grid-column: 1 / 5;
            width: 100%;
        }
        
        .search-form[data-form="packages"] .form-control,
        .search-form[data-form="visa"] .form-control {
            width: 100%;
        }
        
        
        /* Custom Select Dropdown */
        .custom-select-wrapper {
            position: relative;
            width: 100%;
            z-index: 1;
        }
        
        .custom-select-wrapper.active {
            z-index: 10001;
        }
        
        .custom-select-trigger {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 18px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: #ffffff;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 15px;
            font-weight: 500;
            color: var(--text-color);
            min-height: 50px;
        }
        
        .custom-select-trigger:hover {
            border-color: var(--blue);
        }
        
        .custom-select-wrapper.active .custom-select-trigger {
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
        }
        
        .custom-select-value {
            flex: 1;
            text-align: left;
        }
        
        .custom-select-value.placeholder {
            color: var(--text-light);
        }
        
        .custom-select-arrow {
            font-size: 14px;
            color: var(--text-light);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            margin-left: 12px;
        }
        
        .custom-select-wrapper.active .custom-select-arrow {
            transform: rotate(180deg);
            color: var(--blue);
        }
        
        .custom-select-dropdown {
            position: absolute;
            top: calc(100% + 4px);
            left: 0;
            right: 0;
            background: white;
            border: 2px solid var(--blue);
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            z-index: 10000;
            display: none;
            overflow: hidden;
            max-height: 400px;
            flex-direction: column;
        }
        
        .custom-select-wrapper.active .custom-select-dropdown {
            display: flex;
        }
        
        .custom-select-search {
            position: relative;
            padding: 16px;
            border-bottom: 2px solid var(--light-bg);
            background: white;
        }
        
        .custom-select-search i {
            position: absolute;
            left: 28px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 16px;
            pointer-events: none;
        }
        
        .custom-select-search-input {
            width: 100%;
            padding: 12px 16px 12px 44px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: var(--light-bg);
        }
        
        .custom-select-search-input:focus {
            outline: none;
            border-color: var(--blue);
            background: white;
            box-shadow: 0 0 0 3px rgba(20, 56, 92, 0.1);
        }
        
        .custom-select-search-input::placeholder {
            color: var(--text-light);
            font-weight: 400;
        }
        
        .custom-select-options {
            max-height: 300px;
            overflow-y: auto;
            padding: 8px;
        }
        
        .custom-select-options::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-select-options::-webkit-scrollbar-track {
            background: var(--light-bg);
            border-radius: 10px;
        }
        
        .custom-select-options::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }
        
        .custom-select-options::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
        
        .custom-select-option {
            padding: 14px 16px;
            cursor: pointer;
            border-radius: 10px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 15px;
            font-weight: 500;
            color: var(--text-color);
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .custom-select-option:hover {
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.08) 0%, rgba(12, 44, 68, 0.08) 100%);
            color: var(--blue);
            transform: translateX(4px);
        }
        
        .custom-select-option.selected {
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.1) 0%, rgba(12, 44, 68, 0.1) 100%);
            color: var(--blue);
            font-weight: 600;
        }
        
        .custom-select-option.selected::before {
            content: '✓';
            position: absolute;
            right: 16px;
            color: var(--blue);
            font-weight: 700;
        }
        
        .custom-select-option.hidden {
            display: none;
        }
        
        .custom-select-no-results {
            padding: 20px;
            text-align: center;
            color: var(--text-light);
            font-size: 14px;
            font-weight: 500;
            display: none;
        }
        
        .custom-select-no-results.show {
            display: block;
        }
        
        
        /* Air Datepicker Blue Styling */
        .air-datepicker {
            --adp-color-primary: var(--blue);
            --adp-color-primary-hover: var(--blue-dark);
            --adp-color-current-date: var(--blue);
            --adp-color-selected-date: var(--blue);
            --adp-color-selected-date-background: var(--blue);
            --adp-color-selected-date-hover: var(--blue-dark);
            --adp-color-day-name: var(--blue);
            --adp-color-day-name-hover: var(--blue-dark);
        }
        
        .air-datepicker-nav--title {
            color: var(--blue);
            font-weight: 700;
        }
        
        .air-datepicker-nav--title:hover {
            color: var(--blue-dark);
        }
        
        .air-datepicker-nav--action:hover {
            background: rgba(20, 56, 92, 0.1);
            color: var(--blue);
        }
        
        .air-datepicker-cell.-day-.-selected- {
            background: var(--blue);
            color: white;
        }
        
        .air-datepicker-cell.-day-.-selected-.-current- {
            background: var(--blue-dark);
            color: white;
        }
        
        .air-datepicker-cell.-day-.-range-from-,
        .air-datepicker-cell.-day-.-range-to- {
            background: var(--blue);
            color: white;
        }
        
        .air-datepicker-cell.-day-.-range-from-.-range-to- {
            background: var(--blue);
        }
        
        .air-datepicker-cell.-day-.-in-range- {
            background: rgba(20, 56, 92, 0.1);
            color: var(--blue);
        }
        
        .air-datepicker-cell.-day-:hover {
            background: rgba(20, 56, 92, 0.15);
            color: var(--blue);
        }
        
        .air-datepicker-cell.-day-.-current- {
            color: var(--blue);
            font-weight: 700;
        }
        
        .air-datepicker-cell.-day-.-current-:hover {
            background: rgba(20, 56, 92, 0.15);
        }
        
        .air-datepicker-cell.-day-.-weekend- {
            color: var(--blue);
        }
        
        .air-datepicker-cell.-day-.-weekend-:hover {
            background: rgba(20, 56, 92, 0.15);
        }
        
        .air-datepicker-cell.-day-.-other-month- {
            color: var(--text-light);
        }
        
        .air-datepicker-nav--action svg {
            fill: var(--blue);
        }
        
        .air-datepicker-nav--action:hover svg {
            fill: var(--blue-dark);
        }
        
        .air-datepicker-body--day-names {
            color: var(--blue);
        }
        
        .air-datepicker-body--day-name {
            color: var(--blue);
            font-weight: 700;
        }
        
        .search-btn {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            border: none;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            white-space: nowrap;
            box-shadow: 0 4px 16px rgba(175, 135, 0, 0.3);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .search-btn::before {
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
        
        .search-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .search-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(175, 135, 0, 0.4);
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
        }
        
        .search-btn:active {
            transform: translateY(-1px);
        }
        
        .search-btn i,
        .search-btn span {
            position: relative;
            z-index: 1;
        }
        
        @media (max-width: 991px) {
            .hero-title {
                font-size: 42px;
            }
            
            .hero-subtitle {
                font-size: 18px;
            }
            
            .hero-stats {
                gap: 20px;
            }
            
            .hero-stat {
                padding: 15px 20px;
            }
            
            .hero-stat-number {
                font-size: 32px;
            }
            
            .search-box {
                padding: 30px 24px;
                margin-top: 30px;
            }
            
            .search-form {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            
            .search-tabs {
                gap: 4px;
                overflow-x: auto;
            }
            
            .search-tab {
                padding: 12px 20px;
                font-size: 14px;
                white-space: nowrap;
            }
            
            .custom-select-dropdown {
                max-height: 350px;
            }
            
            .custom-select-search {
                padding: 12px;
            }
            
            .custom-select-options {
                max-height: 250px;
            }
        }
        
        /* Content Section Styling */
        .section h1 {
            font-size: 42px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 24px;
            line-height: 1.3;
        }
        
        .section h2 {
            font-size: 48px;
            font-weight: 700;
            color: var(--dark-color);
            margin-top: 48px;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        
        .section h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--blue);
            margin-top: 32px;
            margin-bottom: 12px;
            line-height: 1.5;
        }
        
        .section p {
            font-size: 16px;
            line-height: 1.8;
            color: var(--text-color);
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .section h1 {
                font-size: 32px;
            }
            
            .section h2 {
                font-size: 26px;
                margin-top: 36px;
            }
            
            .section h3 {
                font-size: 20px;
                margin-top: 24px;
            }
            
            .section p {
                font-size: 15px;
            }
        }
        
        /* Destination Cards */
        .destination-card {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            height: 360px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .destination-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .destination-card:hover::before {
            opacity: 1;
        }
        
        .destination-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-color: var(--blue);
        }
        
        .destination-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .destination-card:hover .destination-image {
            transform: scale(1.15);
        }
        
        .destination-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.6) 50%, transparent 100%);
            padding: 30px;
            color: white;
            z-index: 2;
            transition: all 0.4s ease;
        }
        
        .destination-card:hover .destination-overlay {
            padding-bottom: 35px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.7) 50%, transparent 100%);
        }
        
        .destination-name {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.5px;
        }
        
        .destination-info {
            font-size: 15px;
            opacity: 0.95;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .destination-info i {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .destination-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        .destination-card:hover .destination-badge {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }
        
        /* Hotel Cards */
        .hotel-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
        }
        
        .hotel-card::before {
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
        
        .hotel-card:hover::before {
            opacity: 1;
        }
        
        .hotel-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            border-color: var(--blue);
        }
        
        .hotel-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 240px;
        }
        
        .hotel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hotel-card:hover .hotel-image {
            transform: scale(1.12);
        }
        
        .hotel-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 11px;
            font-weight: 800;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            z-index: 2;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(20, 56, 92, 0.1);
            transition: all 0.3s ease;
        }
        
        .hotel-card:hover .hotel-badge {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        
        .hotel-rating {
            position: absolute;
            top: 16px;
            left: 16px;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(15px);
            padding: 8px 14px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 6px;
            color: white;
            font-size: 14px;
            font-weight: 700;
            z-index: 2;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .hotel-card:hover .hotel-rating {
            background: rgba(0, 0, 0, 0.85);
        }
        
        .hotel-rating i {
            color: #ffc107;
            font-size: 16px;
        }
        
        .hotel-content {
            padding: 28px;
            position: relative;
            z-index: 1;
        }
        
        .hotel-name {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 10px;
            color: var(--dark-color);
            line-height: 1.3;
            letter-spacing: -0.5px;
        }
        
        .hotel-location {
            color: var(--text-light);
            font-size: 15px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }
        
        .hotel-location i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .hotel-features {
            display: flex;
            gap: 14px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .hotel-feature {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            color: var(--text-light);
            font-weight: 600;
            padding: 6px 12px;
            background: rgba(20, 56, 92, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .hotel-card:hover .hotel-feature {
            background: rgba(20, 56, 92, 0.08);
        }
        
        .hotel-feature i {
            color: var(--blue);
            font-size: 15px;
        }
        
        .hotel-price {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 2px solid var(--light-bg);
        }
        
        .price-wrapper {
            display: flex;
            flex-direction: column;
        }
        
        .price {
            font-size: 32px;
            font-weight: 900;
            color: var(--blue);
            line-height: 1;
            letter-spacing: -1px;
        }
        
        .price-label {
            font-size: 13px;
            color: var(--text-light);
            margin-top: 6px;
            font-weight: 500;
        }
        
        .book-btn {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 12px rgba(175, 135, 0, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .book-btn::before {
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
        
        .book-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .book-btn:hover {
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(175, 135, 0, 0.4);
        }
        
        .book-btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Features Section */
        .feature-card {
            text-align: center;
            padding: 40px 28px;
            border-radius: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid var(--border-color);
            background: white;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.03) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .feature-card:hover::before {
            opacity: 1;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            border-color: var(--blue);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 36px;
            color: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 20px rgba(20, 56, 92, 0.25);
            position: relative;
            z-index: 1;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 30px rgba(20, 56, 92, 0.35);
        }
        
        .feature-icon::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, var(--blue), var(--blue-dark));
            border-radius: 20px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .feature-card:hover .feature-icon::before {
            opacity: 0.3;
        }
        
        .feature-title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 12px;
            color: var(--dark-color);
            letter-spacing: -0.3px;
            position: relative;
            z-index: 1;
        }
        
        .feature-text {
            color: var(--text-light);
            font-size: 15px;
            line-height: 1.6;
            font-weight: 400;
            position: relative;
            z-index: 1;
        }
        
        /* Promotional Section - Redesigned */
        .promo-section {
            padding: 140px 0;
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }
        
        .promo-background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 15% 30%, rgba(0, 102, 204, 0.04) 0%, transparent 40%),
                radial-gradient(circle at 85% 70%, rgba(0, 102, 204, 0.04) 0%, transparent 40%);
            pointer-events: none;
        }
        
        .promo-image-container {
            position: relative;
            padding-right: 40px;
        }
        
        .promo-image-wrapper {
            position: relative;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.05);
            background: #f8f9fa;
            transform: perspective(1000px) rotateY(-2deg);
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .promo-image-container:hover .promo-image-wrapper {
            transform: perspective(1000px) rotateY(0deg) scale(1.02);
        }
        
        .promo-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 100%);
            z-index: 1;
            pointer-events: none;
        }
        
        .promo-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
            display: block;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .promo-image-wrapper:hover .promo-image {
            transform: scale(1.1);
        }
        
        .promo-image-shine {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.3) 50%, transparent 70%);
            transform: rotate(45deg);
            animation: shine 3s infinite;
            z-index: 2;
            pointer-events: none;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        .promo-badge {
            position: absolute;
            bottom: 50px;
            right: 50px;
            background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%);
            padding: 0;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(32, 201, 151, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 28px;
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: floatBadge 3s ease-in-out infinite;
        }
        
        @keyframes floatBadge {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .promo-badge-icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            flex-shrink: 0;
        }
        
        .promo-badge-content {
            display: flex;
            flex-direction: column;
        }
        
        .promo-badge-number {
            font-size: 32px;
            font-weight: 900;
            color: white;
            line-height: 1;
            margin-bottom: 4px;
            letter-spacing: -1px;
        }
        
        .promo-badge-text {
            font-size: 12px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            opacity: 0.95;
        }
        
        .promo-image-decoration {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 24px;
            opacity: 0.1;
            z-index: -1;
            transform: rotate(-15deg);
        }
        
        .promo-content-wrapper {
            padding-left: 60px;
        }
        
        .promo-content {
            position: relative;
        }
        
        .promo-label {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1), rgba(0, 82, 163, 0.1));
            border: 1px solid rgba(0, 102, 204, 0.2);
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }
        
        .promo-title {
            margin-bottom: 24px;
            line-height: 1.2;
        }
        
        .promo-title-highlight {
            display: block;
            font-size: 20px;
            font-weight: 600;
            color: var(--blue);
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .promo-title-main {
            display: block;
            font-size: 52px;
            font-weight: 900;
            color: var(--dark-color);
            letter-spacing: -2px;
            line-height: 1.1;
        }
        
        .promo-description {
            font-size: 17px;
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 48px;
            max-width: 540px;
        }
        
        .promo-benefits-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .promo-benefit-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 24px;
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .promo-benefit-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.03), rgba(0, 82, 163, 0.03));
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .promo-benefit-card:hover {
            transform: translateY(-4px);
            border-color: var(--blue);
            box-shadow: 0 12px 30px rgba(0, 102, 204, 0.15);
        }
        
        .promo-benefit-card:hover::before {
            opacity: 1;
        }
        
        .promo-benefit-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.1), rgba(0, 82, 163, 0.1));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: var(--blue);
            flex-shrink: 0;
            transition: all 0.4s ease;
            position: relative;
            z-index: 1;
        }
        
        .promo-benefit-card:hover .promo-benefit-icon {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            transform: scale(1.1) rotate(5deg);
        }
        
        .promo-benefit-content {
            flex: 1;
            position: relative;
            z-index: 1;
        }
        
        .promo-benefit-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 6px;
            line-height: 1.3;
        }
        
        .promo-benefit-desc {
            font-size: 13px;
            color: var(--text-light);
            line-height: 1.5;
        }
        
        @media (max-width: 1199px) {
            .promo-content-wrapper {
                padding-left: 40px;
            }
            
            .promo-title-main {
                font-size: 44px;
            }
        }
        
        @media (max-width: 991px) {
            .promo-section {
                padding: 100px 0;
            }
            
            .promo-image-container {
                padding-right: 0;
                margin-bottom: 60px;
            }
            
            .promo-image-wrapper {
                transform: none;
            }
            
            .promo-image {
                height: 500px;
            }
            
            .promo-badge {
                bottom: 40px;
                right: 40px;
                padding: 16px 24px;
            }
            
            .promo-badge-icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
            
            .promo-badge-number {
                font-size: 28px;
            }
            
            .promo-content-wrapper {
                padding-left: 0;
            }
            
            .promo-title-main {
                font-size: 38px;
            }
            
            .promo-description {
                font-size: 16px;
                margin-bottom: 40px;
            }
            
            .promo-benefits-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            
            .promo-benefit-card {
                padding: 20px;
            }
        }
        
        @media (max-width: 575px) {
            .promo-title-main {
                font-size: 32px;
            }
            
            .promo-title-highlight {
                font-size: 16px;
            }
            
            .promo-badge {
                flex-direction: column;
                gap: 12px;
                padding: 16px 20px;
            }
        }
        
        /* Scrolling Text Banner */
        .scrolling-banner {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            padding: 14px 0;
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .scrolling-text {
            display: flex;
            animation: scroll 15s linear infinite;
            gap: 80px;
        }
        
        .scrolling-text span {
            display: inline-block;
            color: white;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.5px;
            white-space: nowrap;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-20%);
            }
        }
        
        @media (max-width: 768px) {
            .scrolling-banner {
                padding: 12px 0;
            }
            
            .scrolling-text {
                gap: 60px;
                animation-duration: 12s;
            }
            
            .scrolling-text span {
                font-size: 14px;
            }
        }
        
        @media (max-width: 576px) {
            .scrolling-text {
                gap: 50px;
                animation-duration: 10s;
            }
            
            .scrolling-text span {
                font-size: 13px;
            }
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            color: white;
            padding: 40px 0 0;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0, 102, 204, 0.5), transparent);
        }
        
        .footer .container {
            position: relative;
            z-index: 1;
        }
        
        .footer-title {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 24px;
            color: white;
            letter-spacing: -0.3px;
            position: relative;
            padding-bottom: 12px;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--blue), var(--blue-dark));
            border-radius: 2px;
        }
        
        .footer p {
            color: #b0b0b0;
            line-height: 1.7;
            font-size: 15px;
        }
        
        .footer-link {
            color: #b0b0b0;
            text-decoration: none;
            display: block;
            margin-bottom: 14px;
            transition: all 0.3s ease;
            font-size: 15px;
            font-weight: 400;
            position: relative;
            padding-left: 0;
        }
        
        .footer-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .footer-link:hover {
            color: white;
            padding-left: 12px;
        }
        
        .footer-link:hover::before {
            width: 8px;
        }
        
        .footer-social {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }
        
        .footer a[style*="color: white"] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: #b0b0b0 !important;
            font-size: 18px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer a[style*="color: white"]:hover {
            background: var(--primary-color);
            color: white !important;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.3);
            border-color: var(--blue);
        }
        
        .footer p[style*="color: #999"] {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
            color: #b0b0b0;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        
        .footer p[style*="color: #999"]:hover {
            color: white;
        }
        
        .footer p[style*="color: #999"] i {
            color: var(--blue);
            font-size: 16px;
            width: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .footer-seo-section {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 40px;
            padding: 40px 0;
        }
        
        .footer-seo-title {
            font-size: 16px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            letter-spacing: -0.2px;
        }
        
        .footer-seo-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .footer-seo-link {
            color: #b0b0b0;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
            padding-left: 0;
        }
        
        .footer-seo-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .footer-seo-link:hover {
            color: white;
            padding-left: 12px;
        }
        
        .footer-seo-link:hover::before {
            width: 8px;
        }
        
        @media (max-width: 991px) {
            .footer-seo-section {
                padding: 30px 0;
                margin-top: 30px;
            }
            
            .footer-seo-title {
                font-size: 15px;
                margin-bottom: 16px;
            }
            
            .footer-seo-links {
                gap: 8px;
            }
            
            .footer-seo-link {
                font-size: 13px;
            }
        }
        
        @media (max-width: 576px) {
            .footer-seo-section {
                padding: 24px 0;
                margin-top: 24px;
            }
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 30px;
            padding: 20px 0 10px 0;
            text-align: center;
            color: #999;
            background: rgba(0, 0, 0, 0.3);
            font-size: 14px;
        }
        
        @media (max-width: 991px) {
            .nav-menu {
                gap: 4px;
            }
            
            .nav-item {
                padding: 8px 12px;
            }
            
            .right-section {
                gap: 12px;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-subtitle {
                font-size: 18px;
            }
            
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>
    <?php include __DIR__ . '/components/trust-bar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Find Your Perfect Hotel Stay</h1>
                <p class="hero-subtitle">Search from thousands of hotels worldwide. Best prices, instant confirmation, and 24/7 support guaranteed.</p>
                
                <div class="search-box">
                    <div class="search-tabs">
                        <button class="search-tab active" data-tab="hotels">Hotels</button>
                        <button class="search-tab" data-tab="packages">Packages</button>
                        <button class="search-tab" data-tab="visa">Visa</button>
                    </div>
                    
                    <!-- Hotels Form -->
                    <form class="search-form" id="hotelsForm" data-form="hotels">
                        <div class="form-group">
                            <label><i class="bi bi-geo-alt-fill"></i>Destination</label>
                            <input type="text" id="destinationInput" class="form-control" placeholder="Where are you going?" autocomplete="off">
                            <div class="autocomplete-suggestions" id="destinationSuggestions"></div>
                        </div>
                        <div class="form-group">
                            <label><i class="bi bi-calendar-check-fill"></i>Check-in</label>
                            <input type="text" id="checkinInput" class="form-control" placeholder="Select check-in date" readonly>
                        </div>
                        <div class="form-group">
                            <label><i class="bi bi-calendar-x-fill"></i>Check-out</label>
                            <input type="text" id="checkoutInput" class="form-control" placeholder="Select check-out date" readonly>
                        </div>
                        <div class="form-group">
                            <label><i class="bi bi-people-fill"></i>Guests</label>
                            <select class="form-control">
                                <option>1 Guest</option>
                                <option>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4+ Guests</option>
                            </select>
                        </div>
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                            <span>Search</span>
                        </button>
                    </form>
                    
                    <!-- Packages Form -->
                    <form class="search-form" id="packagesForm" data-form="packages" style="display: none;">
                        <div class="form-group">
                            <label><i class="bi bi-geo-alt-fill"></i>Destination</label>
                            <input type="text" id="packagesDestinationInput" class="form-control" placeholder="Where are you going?" autocomplete="off">
                            <div class="autocomplete-suggestions" id="packagesDestinationSuggestions"></div>
                        </div>
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                            <span>Search</span>
                        </button>
                    </form>
                    
                    <!-- Visa Form -->
                    <form class="search-form" id="visaForm" data-form="visa" style="display: none;">
                        <div class="form-group">
                            <label><i class="bi bi-geo-alt-fill"></i>Destination</label>
                            <input type="text" id="visaDestinationInput" class="form-control" placeholder="Where are you going?" autocomplete="off">
                            <div class="autocomplete-suggestions" id="visaDestinationSuggestions"></div>
                        </div>
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Destinations -->
    <section class="section" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Popular Destinations</h2>
            <p class="section-subtitle">Explore the world's most beautiful places</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="destination-card">
                        <div class="destination-badge">Popular</div>
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800" alt="Mountain" class="destination-image">
                        <div class="destination-overlay">
                            <div class="destination-name">Mountain View</div>
                            <div class="destination-info">
                                <i class="bi bi-building-fill"></i>
                                <span>120+ Hotels Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destination-card">
                        <div class="destination-badge">Trending</div>
                        <img src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?w=800" alt="Beach" class="destination-image">
                        <div class="destination-overlay">
                            <div class="destination-name">Beach Paradise</div>
                            <div class="destination-info">
                                <i class="bi bi-building-fill"></i>
                                <span>85+ Hotels Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destination-card">
                        <div class="destination-badge">Best Seller</div>
                        <img src="https://images.unsplash.com/photo-1498307833015-e7b400441eb8?w=800" alt="City" class="destination-image">
                        <div class="destination-overlay">
                            <div class="destination-name">City Lights</div>
                            <div class="destination-info">
                                <i class="bi bi-building-fill"></i>
                                <span>200+ Hotels Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Hotels -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Featured Hotels</h2>
            <p class="section-subtitle">Handpicked accommodations for your comfort</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="hotel-card">
                        <div class="hotel-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800" alt="Hotel" class="hotel-image">
                            <div class="hotel-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>4.8</span>
                            </div>
                            <div class="hotel-badge">Popular</div>
                        </div>
                        <div class="hotel-content">
                            <div class="hotel-name">Grand Luxury Resort</div>
                            <div class="hotel-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Mumbai, India</span>
                            </div>
                            <div class="hotel-features">
                                <span class="hotel-feature">
                                    <i class="bi bi-wifi"></i> Free WiFi
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-cup-straw"></i> Breakfast
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-parking"></i> Parking
                                </span>
                            </div>
                            <div class="hotel-price">
                                <div class="price-wrapper">
                                    <div class="price">₹4,500</div>
                                    <div class="price-label">per night</div>
                                </div>
                                <button class="book-btn"><span>Book Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hotel-card">
                        <div class="hotel-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800" alt="Hotel" class="hotel-image">
                            <div class="hotel-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="hotel-badge">Best Seller</div>
                        </div>
                        <div class="hotel-content">
                            <div class="hotel-name">Ocean View Hotel</div>
                            <div class="hotel-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Goa, India</span>
                            </div>
                            <div class="hotel-features">
                                <span class="hotel-feature">
                                    <i class="bi bi-wifi"></i> Free WiFi
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-water"></i> Pool
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-cup-straw"></i> Breakfast
                                </span>
                            </div>
                            <div class="hotel-price">
                                <div class="price-wrapper">
                                    <div class="price">₹6,200</div>
                                    <div class="price-label">per night</div>
                                </div>
                                <button class="book-btn"><span>Book Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hotel-card">
                        <div class="hotel-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800" alt="Hotel" class="hotel-image">
                            <div class="hotel-rating">
                                <i class="bi bi-star-fill"></i>
                                <span>4.7</span>
                            </div>
                            <div class="hotel-badge">Great Value</div>
                        </div>
                        <div class="hotel-content">
                            <div class="hotel-name">City Center Hotel</div>
                            <div class="hotel-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Delhi, India</span>
                            </div>
                            <div class="hotel-features">
                                <span class="hotel-feature">
                                    <i class="bi bi-wifi"></i> Free WiFi
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-parking"></i> Parking
                                </span>
                                <span class="hotel-feature">
                                    <i class="bi bi-cup-straw"></i> Breakfast
                                </span>
                            </div>
                            <div class="hotel-price">
                                <div class="price-wrapper">
                                    <div class="price">₹3,800</div>
                                    <div class="price-label">per night</div>
                                </div>
                                <button class="book-btn"><span>Book Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section" style="background: var(--light-bg);">
        <div class="container">
            <h2 class="section-title">Why Choose Fayyaz Travels</h2>
            <p class="section-subtitle">Your trusted travel partner</p>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <div class="feature-title">Secure Booking</div>
                        <div class="feature-text">Your data and payments are protected with industry-leading security</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-tag-fill"></i>
                        </div>
                        <div class="feature-title">Best Prices</div>
                        <div class="feature-text">Compare prices and get the best deals on hotels and packages</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-title">24/7 Support</div>
                        <div class="feature-text">Round-the-clock customer support to assist you anytime</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="feature-title">Trusted Partner</div>
                        <div class="feature-text">Trusted by millions of travelers worldwide</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Section -->
    <section class="promo-section">
        <div class="promo-background-pattern"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="promo-image-container">
                        <div class="promo-image-wrapper">
                            <div class="promo-image-overlay"></div>
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800" alt="Luxury Hotel Room" class="promo-image">
                            <div class="promo-image-shine"></div>
                        </div>
                        <div class="promo-badge">
                            <div class="promo-badge-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="promo-badge-content">
                                <div class="promo-badge-number">100k+</div>
                                <div class="promo-badge-text">Happy Customers</div>
                            </div>
                        </div>
                        <div class="promo-image-decoration"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="promo-content-wrapper">
                        <div class="promo-content">
                            <div class="promo-label">Why Choose Us</div>
                            <h2 class="promo-title">
                                <span class="promo-title-highlight">We always provide</span>
                                <span class="promo-title-main">the best for our hotel visitors</span>
                            </h2>
                            <p class="promo-description">We are committed to delivering exceptional service and ensuring your stay exceeds expectations. Experience the difference with our premium offerings.</p>
                            <div class="promo-benefits-grid">
                                <div class="promo-benefit-card">
                                    <div class="promo-benefit-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <div class="promo-benefit-content">
                                        <div class="promo-benefit-title">Best Rate Guaranteed</div>
                                        <div class="promo-benefit-desc">Lowest prices or we match it</div>
                                    </div>
                                </div>
                                <div class="promo-benefit-card">
                                    <div class="promo-benefit-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <div class="promo-benefit-content">
                                        <div class="promo-benefit-title">Payment at Hotel</div>
                                        <div class="promo-benefit-desc">Pay when you check-in</div>
                                    </div>
                                </div>
                                <div class="promo-benefit-card">
                                    <div class="promo-benefit-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <div class="promo-benefit-content">
                                        <div class="promo-benefit-title">Exclusive Rewards</div>
                                        <div class="promo-benefit-desc">Earn points on every booking</div>
                                    </div>
                                </div>
                                <div class="promo-benefit-card">
                                    <div class="promo-benefit-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <div class="promo-benefit-content">
                                        <div class="promo-benefit-title">Free WiFi Access</div>
                                        <div class="promo-benefit-desc">High-speed internet included</div>
                                    </div>
                                </div>
                                <div class="promo-benefit-card">
                                    <div class="promo-benefit-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                    <div class="promo-benefit-content">
                                        <div class="promo-benefit-title">No Hidden Charges</div>
                                        <div class="promo-benefit-desc">Transparent pricing always</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scrolling Text Banner -->
    <div class="scrolling-banner">
        <div class="scrolling-text">
            <span>Best Price Guaranteed &bull; Best Deals on Hotels &bull; #1 Hotel Booking Site in South East Asia</span>
            <span>Best Price Guaranteed &bull; Best Deals on Hotels &bull; #1 Hotel Booking Site in South East Asia</span>
            <span>Best Price Guaranteed &bull; Best Deals on Hotels &bull; #1 Hotel Booking Site in South East Asia</span>
            <span>Best Price Guaranteed &bull; Best Deals on Hotels &bull; #1 Hotel Booking Site in South East Asia</span>
            <span>Best Price Guaranteed &bull; Best Deals on Hotels &bull; #1 Hotel Booking Site in South East Asia</span>
        </div>
    </div>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js"></script>
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;
        
        // Secondary Navbar
        const secondaryNavbar = document.getElementById('secondaryNavbar');
        
        // Calculate and set secondary navbar top position based on navbar height
        function updateSecondaryNavbarPosition() {
            if (navbar && secondaryNavbar) {
                secondaryNavbar.style.top = '150px';
            }
        }
        
        // Update position on load and resize
        updateSecondaryNavbarPosition();
        window.addEventListener('resize', updateSecondaryNavbarPosition);
        
        // Sync values from main form to secondary form (defined early for use in scroll handler)
        function syncToSecondaryForm() {
            const destinationInput = document.getElementById('destinationInput');
            const secondaryDestinationInput = document.getElementById('secondaryDestinationInput');
            const checkinInput = document.getElementById('checkinInput');
            const secondaryCheckinInput = document.getElementById('secondaryCheckinInput');
            const checkoutInput = document.getElementById('checkoutInput');
            const secondaryCheckoutInput = document.getElementById('secondaryCheckoutInput');
            const mainGuestsSelect = document.querySelector('.search-form select');
            const secondaryGuestsSelect = document.getElementById('secondaryGuestsSelect');
            
            if (destinationInput && secondaryDestinationInput) {
                secondaryDestinationInput.value = destinationInput.value;
            }
            if (checkinInput && secondaryCheckinInput) {
                secondaryCheckinInput.value = checkinInput.value;
            }
            if (checkoutInput && secondaryCheckoutInput) {
                secondaryCheckoutInput.value = checkoutInput.value;
            }
            if (mainGuestsSelect && secondaryGuestsSelect) {
                secondaryGuestsSelect.value = mainGuestsSelect.value;
            }
        }
        
        // Get hero section element for calculating when to show secondary navbar
        const heroSection = document.querySelector('.hero-section');
        
        function getHeroSectionEnd() {
            if (heroSection) {
                const heroRect = heroSection.getBoundingClientRect();
                const heroTop = heroRect.top + window.pageYOffset;
                return heroTop + heroSection.offsetHeight;
            }
            return 0;
        }
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            
            if (currentScroll > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Calculate hero section end on each scroll for accuracy
            const heroSectionEnd = getHeroSectionEnd();
            
            // Show/hide secondary navbar only after hero section is crossed
            if (currentScroll > heroSectionEnd && heroSectionEnd > 0) {
                if (!secondaryNavbar.classList.contains('visible')) {
                    syncToSecondaryForm(); // Sync values when showing
                }
                secondaryNavbar.classList.add('visible');
            } else {
                secondaryNavbar.classList.remove('visible');
            }
            
            lastScroll = currentScroll;
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
        
        // Search tab switching
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Get the tab type from data attribute
                const tabType = this.getAttribute('data-tab');
                
                // Hide all forms
                document.querySelectorAll('.search-form').forEach(form => {
                    form.style.display = 'none';
                });
                
                // Show the form corresponding to the active tab
                const targetForm = document.querySelector(`[data-form="${tabType}"]`);
                if (targetForm) {
                    targetForm.style.display = 'flex';
                }
            });
        });
        
        // Custom Select Dropdown Functionality
        function initCustomSelect(selectId) {
            const wrapper = document.getElementById(selectId + 'Wrapper');
            if (!wrapper) return;
            
            const trigger = document.getElementById(selectId + 'Trigger');
            const dropdown = document.getElementById(selectId + 'Dropdown');
            const searchInput = document.getElementById(selectId + 'SearchInput');
            const options = document.getElementById(selectId + 'Options');
            const hiddenInputId = selectId.replace('Select', '') + 'Destination';
            const hiddenInput = document.getElementById(hiddenInputId);
            const valueSpan = trigger.querySelector('.custom-select-value');
            const allOptions = options.querySelectorAll('.custom-select-option');
            
            // Toggle dropdown
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                const isActive = wrapper.classList.contains('active');
                
                // Close all other selects
                document.querySelectorAll('.custom-select-wrapper').forEach(w => {
                    if (w !== wrapper) {
                        w.classList.remove('active');
                    }
                });
                
                wrapper.classList.toggle('active');
                
                // Focus search input when opening
                if (!isActive && searchInput) {
                    setTimeout(() => searchInput.focus(), 100);
                }
            });
            
            // Search functionality
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const searchTerm = e.target.value.toLowerCase().trim();
                    let visibleCount = 0;
                    
                    allOptions.forEach(option => {
                        const text = option.textContent.toLowerCase();
                        if (text.includes(searchTerm)) {
                            option.classList.remove('hidden');
                            visibleCount++;
                        } else {
                            option.classList.add('hidden');
                        }
                    });
                    
                    // Show/hide no results message
                    let noResults = dropdown.querySelector('.custom-select-no-results');
                    if (!noResults) {
                        noResults = document.createElement('div');
                        noResults.className = 'custom-select-no-results';
                        noResults.textContent = 'No destinations found';
                        dropdown.appendChild(noResults);
                    }
                    
                    if (visibleCount === 0 && searchTerm !== '') {
                        noResults.classList.add('show');
                    } else {
                        noResults.classList.remove('show');
                    }
                });
            }
            
            // Option selection
            allOptions.forEach(option => {
                option.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const value = this.getAttribute('data-value');
                    const text = this.textContent;
                    
                    // Update selected state
                    allOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    
                    // Update trigger value
                    valueSpan.textContent = text;
                    valueSpan.classList.remove('placeholder');
                    
                    // Update hidden input
                    if (hiddenInput) {
                        hiddenInput.value = value;
                    }
                    
                    // Close dropdown
                    wrapper.classList.remove('active');
                    
                    // Clear search
                    if (searchInput) {
                        searchInput.value = '';
                        allOptions.forEach(opt => opt.classList.remove('hidden'));
                    }
                });
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!wrapper.contains(e.target)) {
                    wrapper.classList.remove('active');
                }
            });
            
            // Prevent dropdown from closing when clicking inside
            dropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
        
        // Custom selects removed - using text inputs with autocomplete instead
        
        // Nav item active state
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
                this.classList.add('active');
            });
        });
        
        // Destination Autocomplete
        const destinations = [
            { name: 'Mumbai', location: 'Maharashtra, India', icon: 'bi-building' },
            { name: 'Delhi', location: 'Delhi, India', icon: 'bi-building' },
            { name: 'Bangalore', location: 'Karnataka, India', icon: 'bi-building' },
            { name: 'Goa', location: 'Goa, India', icon: 'bi-water' },
            { name: 'Kerala', location: 'Kerala, India', icon: 'bi-tree' },
            { name: 'Rajasthan', location: 'Rajasthan, India', icon: 'bi-castle' },
            { name: 'Pune', location: 'Maharashtra, India', icon: 'bi-building' },
            { name: 'Hyderabad', location: 'Telangana, India', icon: 'bi-building' },
            { name: 'Chennai', location: 'Tamil Nadu, India', icon: 'bi-building' },
            { name: 'Kolkata', location: 'West Bengal, India', icon: 'bi-building' },
            { name: 'Jaipur', location: 'Rajasthan, India', icon: 'bi-castle' },
            { name: 'Udaipur', location: 'Rajasthan, India', icon: 'bi-castle' },
            { name: 'Manali', location: 'Himachal Pradesh, India', icon: 'bi-mountain' },
            { name: 'Shimla', location: 'Himachal Pradesh, India', icon: 'bi-mountain' },
            { name: 'Darjeeling', location: 'West Bengal, India', icon: 'bi-mountain' },
            { name: 'Ooty', location: 'Tamil Nadu, India', icon: 'bi-tree' },
            { name: 'Mysore', location: 'Karnataka, India', icon: 'bi-building' },
            { name: 'Agra', location: 'Uttar Pradesh, India', icon: 'bi-building' },
            { name: 'Varanasi', location: 'Uttar Pradesh, India', icon: 'bi-building' },
            { name: 'Rishikesh', location: 'Uttarakhand, India', icon: 'bi-water' }
        ];
        
        const destinationInput = document.getElementById('destinationInput');
        const destinationSuggestions = document.getElementById('destinationSuggestions');
        let selectedIndex = -1;
        
        destinationInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            selectedIndex = -1;
            
            if (query.length === 0) {
                destinationSuggestions.classList.remove('show');
                return;
            }
            
            const filtered = destinations.filter(dest => 
                dest.name.toLowerCase().includes(query) || 
                dest.location.toLowerCase().includes(query)
            );
            
            if (filtered.length > 0) {
                destinationSuggestions.innerHTML = filtered.map((dest, index) => `
                    <div class="autocomplete-suggestion" data-index="${index}" data-value="${dest.name}">
                        <i class="bi ${dest.icon}"></i>
                        <div>
                            <div class="autocomplete-suggestion-name">${dest.name}</div>
                            <div class="autocomplete-suggestion-location">${dest.location}</div>
                        </div>
                    </div>
                `).join('');
                destinationSuggestions.classList.add('show');
            } else {
                destinationSuggestions.classList.remove('show');
            }
        });
        
        destinationInput.addEventListener('keydown', function(e) {
            const suggestions = destinationSuggestions.querySelectorAll('.autocomplete-suggestion');
            
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                selectedIndex = Math.min(selectedIndex + 1, suggestions.length - 1);
                updateSelection(suggestions);
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                selectedIndex = Math.max(selectedIndex - 1, -1);
                updateSelection(suggestions);
            } else if (e.key === 'Enter' && selectedIndex >= 0) {
                e.preventDefault();
                suggestions[selectedIndex].click();
            } else if (e.key === 'Escape') {
                destinationSuggestions.classList.remove('show');
            }
        });
        
        function updateSelection(suggestions) {
            suggestions.forEach((s, i) => {
                s.classList.toggle('active', i === selectedIndex);
            });
        }
        
        destinationSuggestions.addEventListener('click', function(e) {
            const suggestion = e.target.closest('.autocomplete-suggestion');
            if (suggestion) {
                destinationInput.value = suggestion.dataset.value;
                destinationSuggestions.classList.remove('show');
            }
        });
        
        document.addEventListener('click', function(e) {
            if (!destinationInput.contains(e.target) && !destinationSuggestions.contains(e.target)) {
                destinationSuggestions.classList.remove('show');
            }
        });
        
        // Packages Destination Autocomplete
        const packagesDestinations = [
            { name: 'Mumbai', location: 'Maharashtra, India', icon: 'bi-building' },
            { name: 'Delhi', location: 'Delhi, India', icon: 'bi-building' },
            { name: 'Goa', location: 'Goa, India', icon: 'bi-water' },
            { name: 'Bangalore', location: 'Karnataka, India', icon: 'bi-building' },
            { name: 'Kerala', location: 'Kerala, India', icon: 'bi-tree' },
            { name: 'Dubai', location: 'Dubai, UAE', icon: 'bi-building' },
            { name: 'Singapore', location: 'Singapore', icon: 'bi-building' },
            { name: 'Thailand', location: 'Thailand', icon: 'bi-water' },
            { name: 'Malaysia', location: 'Malaysia', icon: 'bi-tree' },
            { name: 'Bali', location: 'Bali, Indonesia', icon: 'bi-water' },
            { name: 'Paris', location: 'Paris, France', icon: 'bi-building' },
            { name: 'London', location: 'London, UK', icon: 'bi-building' },
            { name: 'New York', location: 'New York, USA', icon: 'bi-building' },
            { name: 'Tokyo', location: 'Tokyo, Japan', icon: 'bi-building' },
            { name: 'Rajasthan', location: 'Rajasthan, India', icon: 'bi-castle' },
            { name: 'Manali', location: 'Himachal Pradesh, India', icon: 'bi-mountain' },
            { name: 'Shimla', location: 'Himachal Pradesh, India', icon: 'bi-mountain' },
            { name: 'Ooty', location: 'Tamil Nadu, India', icon: 'bi-tree' },
            { name: 'Mysore', location: 'Karnataka, India', icon: 'bi-building' },
            { name: 'Agra', location: 'Uttar Pradesh, India', icon: 'bi-building' }
        ];
        
        const packagesDestinationInput = document.getElementById('packagesDestinationInput');
        const packagesDestinationSuggestions = document.getElementById('packagesDestinationSuggestions');
        let packagesSelectedIndex = -1;
        
        if (packagesDestinationInput && packagesDestinationSuggestions) {
            packagesDestinationInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                packagesSelectedIndex = -1;
                
                if (query.length === 0) {
                    packagesDestinationSuggestions.classList.remove('show');
                    return;
                }
                
                const filtered = packagesDestinations.filter(dest => 
                    dest.name.toLowerCase().includes(query) || 
                    dest.location.toLowerCase().includes(query)
                );
                
                if (filtered.length > 0) {
                    packagesDestinationSuggestions.innerHTML = filtered.map((dest, index) => `
                        <div class="autocomplete-suggestion" data-index="${index}" data-value="${dest.name}">
                            <i class="bi ${dest.icon}"></i>
                            <div>
                                <div class="autocomplete-suggestion-name">${dest.name}</div>
                                <div class="autocomplete-suggestion-location">${dest.location}</div>
                            </div>
                        </div>
                    `).join('');
                    packagesDestinationSuggestions.classList.add('show');
                } else {
                    packagesDestinationSuggestions.classList.remove('show');
                }
            });
            
            packagesDestinationInput.addEventListener('keydown', function(e) {
                const suggestions = packagesDestinationSuggestions.querySelectorAll('.autocomplete-suggestion');
                
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    packagesSelectedIndex = Math.min(packagesSelectedIndex + 1, suggestions.length - 1);
                    updatePackagesSelection(suggestions);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    packagesSelectedIndex = Math.max(packagesSelectedIndex - 1, -1);
                    updatePackagesSelection(suggestions);
                } else if (e.key === 'Enter' && packagesSelectedIndex >= 0) {
                    e.preventDefault();
                    suggestions[packagesSelectedIndex].click();
                } else if (e.key === 'Escape') {
                    packagesDestinationSuggestions.classList.remove('show');
                }
            });
            
            function updatePackagesSelection(suggestions) {
                suggestions.forEach((s, i) => {
                    s.classList.toggle('active', i === packagesSelectedIndex);
                });
            }
            
            packagesDestinationSuggestions.addEventListener('click', function(e) {
                const suggestion = e.target.closest('.autocomplete-suggestion');
                if (suggestion) {
                    packagesDestinationInput.value = suggestion.dataset.value;
                    packagesDestinationSuggestions.classList.remove('show');
                }
            });
            
            document.addEventListener('click', function(e) {
                if (!packagesDestinationInput.contains(e.target) && !packagesDestinationSuggestions.contains(e.target)) {
                    packagesDestinationSuggestions.classList.remove('show');
                }
            });
        }
        
        // Visa Destination Autocomplete
        const visaDestinations = [
            { name: 'United States', location: 'USA', icon: 'bi-building' },
            { name: 'United Kingdom', location: 'UK', icon: 'bi-building' },
            { name: 'Canada', location: 'Canada', icon: 'bi-building' },
            { name: 'Australia', location: 'Australia', icon: 'bi-building' },
            { name: 'Germany', location: 'Germany', icon: 'bi-building' },
            { name: 'France', location: 'France', icon: 'bi-building' },
            { name: 'Italy', location: 'Italy', icon: 'bi-building' },
            { name: 'Spain', location: 'Spain', icon: 'bi-building' },
            { name: 'Switzerland', location: 'Switzerland', icon: 'bi-mountain' },
            { name: 'Japan', location: 'Japan', icon: 'bi-building' },
            { name: 'South Korea', location: 'South Korea', icon: 'bi-building' },
            { name: 'Singapore', location: 'Singapore', icon: 'bi-building' },
            { name: 'Malaysia', location: 'Malaysia', icon: 'bi-building' },
            { name: 'Thailand', location: 'Thailand', icon: 'bi-water' },
            { name: 'Dubai', location: 'Dubai, UAE', icon: 'bi-building' },
            { name: 'China', location: 'China', icon: 'bi-building' },
            { name: 'New Zealand', location: 'New Zealand', icon: 'bi-tree' },
            { name: 'Netherlands', location: 'Netherlands', icon: 'bi-building' },
            { name: 'Belgium', location: 'Belgium', icon: 'bi-building' },
            { name: 'Austria', location: 'Austria', icon: 'bi-mountain' }
        ];
        
        const visaDestinationInput = document.getElementById('visaDestinationInput');
        const visaDestinationSuggestions = document.getElementById('visaDestinationSuggestions');
        let visaSelectedIndex = -1;
        
        if (visaDestinationInput && visaDestinationSuggestions) {
            visaDestinationInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                visaSelectedIndex = -1;
                
                if (query.length === 0) {
                    visaDestinationSuggestions.classList.remove('show');
                    return;
                }
                
                const filtered = visaDestinations.filter(dest => 
                    dest.name.toLowerCase().includes(query) || 
                    dest.location.toLowerCase().includes(query)
                );
                
                if (filtered.length > 0) {
                    visaDestinationSuggestions.innerHTML = filtered.map((dest, index) => `
                        <div class="autocomplete-suggestion" data-index="${index}" data-value="${dest.name}">
                            <i class="bi ${dest.icon}"></i>
                            <div>
                                <div class="autocomplete-suggestion-name">${dest.name}</div>
                                <div class="autocomplete-suggestion-location">${dest.location}</div>
                            </div>
                        </div>
                    `).join('');
                    visaDestinationSuggestions.classList.add('show');
                } else {
                    visaDestinationSuggestions.classList.remove('show');
                }
            });
            
            visaDestinationInput.addEventListener('keydown', function(e) {
                const suggestions = visaDestinationSuggestions.querySelectorAll('.autocomplete-suggestion');
                
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    visaSelectedIndex = Math.min(visaSelectedIndex + 1, suggestions.length - 1);
                    updateVisaSelection(suggestions);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    visaSelectedIndex = Math.max(visaSelectedIndex - 1, -1);
                    updateVisaSelection(suggestions);
                } else if (e.key === 'Enter' && visaSelectedIndex >= 0) {
                    e.preventDefault();
                    suggestions[visaSelectedIndex].click();
                } else if (e.key === 'Escape') {
                    visaDestinationSuggestions.classList.remove('show');
                }
            });
            
            function updateVisaSelection(suggestions) {
                suggestions.forEach((s, i) => {
                    s.classList.toggle('active', i === visaSelectedIndex);
                });
            }
            
            visaDestinationSuggestions.addEventListener('click', function(e) {
                const suggestion = e.target.closest('.autocomplete-suggestion');
                if (suggestion) {
                    visaDestinationInput.value = suggestion.dataset.value;
                    visaDestinationSuggestions.classList.remove('show');
                }
            });
            
            document.addEventListener('click', function(e) {
                if (!visaDestinationInput.contains(e.target) && !visaDestinationSuggestions.contains(e.target)) {
                    visaDestinationSuggestions.classList.remove('show');
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
        const checkinInput = document.getElementById('checkinInput');
        const checkoutInput = document.getElementById('checkoutInput');
        
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
        
        // Secondary Navbar Functionality
        const secondaryDestinationInput = document.getElementById('secondaryDestinationInput');
        const secondaryDestinationSuggestions = document.getElementById('secondaryDestinationSuggestions');
        const secondaryCheckinInput = document.getElementById('secondaryCheckinInput');
        const secondaryCheckoutInput = document.getElementById('secondaryCheckoutInput');
        const secondaryGuestsSelect = document.getElementById('secondaryGuestsSelect');
        let secondarySelectedIndex = -1;
        
        // Secondary Destination Autocomplete
        if (secondaryDestinationInput) {
            secondaryDestinationInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                secondarySelectedIndex = -1;
                
                if (query.length === 0) {
                    secondaryDestinationSuggestions.classList.remove('show');
                    return;
                }
                
                const filtered = destinations.filter(dest => 
                    dest.name.toLowerCase().includes(query) || 
                    dest.location.toLowerCase().includes(query)
                );
                
                if (filtered.length > 0) {
                    secondaryDestinationSuggestions.innerHTML = filtered.map((dest, index) => `
                        <div class="autocomplete-suggestion" data-index="${index}" data-value="${dest.name}">
                            <i class="bi ${dest.icon}"></i>
                            <div>
                                <div class="autocomplete-suggestion-name">${dest.name}</div>
                                <div class="autocomplete-suggestion-location">${dest.location}</div>
                            </div>
                        </div>
                    `).join('');
                    secondaryDestinationSuggestions.classList.add('show');
                } else {
                    secondaryDestinationSuggestions.classList.remove('show');
                }
            });
            
            secondaryDestinationInput.addEventListener('keydown', function(e) {
                const suggestions = secondaryDestinationSuggestions.querySelectorAll('.autocomplete-suggestion');
                
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    secondarySelectedIndex = Math.min(secondarySelectedIndex + 1, suggestions.length - 1);
                    updateSecondarySelection(suggestions);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    secondarySelectedIndex = Math.max(secondarySelectedIndex - 1, -1);
                    updateSecondarySelection(suggestions);
                } else if (e.key === 'Enter' && secondarySelectedIndex >= 0) {
                    e.preventDefault();
                    suggestions[secondarySelectedIndex].click();
                } else if (e.key === 'Escape') {
                    secondaryDestinationSuggestions.classList.remove('show');
                }
            });
            
            function updateSecondarySelection(suggestions) {
                suggestions.forEach((s, i) => {
                    s.classList.toggle('active', i === secondarySelectedIndex);
                });
            }
            
            secondaryDestinationSuggestions.addEventListener('click', function(e) {
                const suggestion = e.target.closest('.autocomplete-suggestion');
                if (suggestion) {
                    secondaryDestinationInput.value = suggestion.dataset.value;
                    secondaryDestinationSuggestions.classList.remove('show');
                }
            });
            
            document.addEventListener('click', function(e) {
                if (!secondaryDestinationInput.contains(e.target) && !secondaryDestinationSuggestions.contains(e.target)) {
                    secondaryDestinationSuggestions.classList.remove('show');
                }
            });
        }
        
        // Secondary Datepickers
        let secondaryCheckinDatepicker, secondaryCheckoutDatepicker;
        
        if (secondaryCheckinInput && secondaryCheckoutInput) {
            secondaryCheckinDatepicker = new AirDatepicker(secondaryCheckinInput, {
                minDate: new Date(),
                dateFormat: 'dd/MM/yyyy',
                locale: englishLocale,
                onSelect: function({date}) {
                    if (date) {
                        const minCheckout = new Date(date);
                        minCheckout.setDate(minCheckout.getDate() + 1);
                        secondaryCheckoutDatepicker.update({
                            minDate: minCheckout
                        });
                    }
                }
            });
            
            secondaryCheckoutDatepicker = new AirDatepicker(secondaryCheckoutInput, {
                minDate: new Date(new Date().setDate(new Date().getDate() + 1)),
                dateFormat: 'dd/MM/yyyy',
                locale: englishLocale
            });
        }
        
        // Sync values from secondary form to main form
        function syncToMainForm() {
            const destinationInput = document.getElementById('destinationInput');
            const secondaryDestinationInput = document.getElementById('secondaryDestinationInput');
            const checkinInput = document.getElementById('checkinInput');
            const secondaryCheckinInput = document.getElementById('secondaryCheckinInput');
            const checkoutInput = document.getElementById('checkoutInput');
            const secondaryCheckoutInput = document.getElementById('secondaryCheckoutInput');
            const mainGuestsSelect = document.querySelector('.search-form select');
            const secondaryGuestsSelect = document.getElementById('secondaryGuestsSelect');
            
            if (secondaryDestinationInput && destinationInput) {
                destinationInput.value = secondaryDestinationInput.value;
            }
            if (secondaryCheckinInput && checkinInput) {
                checkinInput.value = secondaryCheckinInput.value;
            }
            if (secondaryCheckoutInput && checkoutInput) {
                checkoutInput.value = secondaryCheckoutInput.value;
            }
            if (secondaryGuestsSelect && mainGuestsSelect) {
                mainGuestsSelect.value = secondaryGuestsSelect.value;
            }
        }
        
        // Sync on main form changes (using already declared variables)
        const mainGuestsSelect = document.querySelector('.search-form select');
        
        if (destinationInput) {
            destinationInput.addEventListener('change', syncToSecondaryForm);
        }
        if (checkinInput) {
            checkinInput.addEventListener('change', syncToSecondaryForm);
        }
        if (checkoutInput) {
            checkoutInput.addEventListener('change', syncToSecondaryForm);
        }
        if (mainGuestsSelect) {
            mainGuestsSelect.addEventListener('change', syncToSecondaryForm);
        }
        
        // Sync on secondary form changes (using already declared variables)
        if (secondaryDestinationInput) {
            secondaryDestinationInput.addEventListener('change', syncToMainForm);
        }
        if (secondaryCheckinInput) {
            secondaryCheckinInput.addEventListener('change', syncToMainForm);
        }
        if (secondaryCheckoutInput) {
            secondaryCheckoutInput.addEventListener('change', syncToMainForm);
        }
        if (secondaryGuestsSelect) {
            secondaryGuestsSelect.addEventListener('change', syncToMainForm);
        }
        
        // Secondary form submission
        const secondarySearchForm = document.getElementById('secondarySearchForm');
        if (secondarySearchForm) {
            secondarySearchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                syncToMainForm();
                // Trigger main form submission
                const mainSearchForm = document.querySelector('.search-form');
                if (mainSearchForm) {
                    mainSearchForm.dispatchEvent(new Event('submit'));
                }
            });
        }
    </script>
</body>
</html>
