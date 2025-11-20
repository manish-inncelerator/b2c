<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Search Results - Fayyaz Travels</title>
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
        
        /* Search Results Header */
        .search-results-header {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 30%, var(--blue-darker) 70%, #002d5c 100%);
            margin-top: 120px;
            padding: 50px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .search-results-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .search-results-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        }
        
        .search-results-header .container {
            position: relative;
            z-index: 1;
        }
        
        .search-info {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }
        
        .search-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .search-info-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .search-info-item:hover::before {
            left: 100%;
        }
        
        .search-info-item:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        .search-info-item i {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
        }
        
        .search-info-item span {
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        
        .search-header-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .results-count-wrapper {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        
        .results-count-label {
            font-size: 13px;
            font-weight: 500;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        
        .results-count {
            font-family: "Quattrocento", serif;
            font-size: 32px;
            font-weight: 900;
            margin: 0;
            line-height: 1.2;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #ffffff 0%, rgba(255, 255, 255, 0.9) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .modify-search-btn {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 14px 28px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            position: relative;
            overflow: hidden;
        }
        
        .modify-search-btn::before {
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
        
        .modify-search-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .modify-search-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            color: white;
        }
        
        .modify-search-btn i {
            font-size: 16px;
            position: relative;
            z-index: 1;
        }
        
        .modify-search-btn span {
            position: relative;
            z-index: 1;
        }
        
        @media (max-width: 768px) {
            .search-results-header {
                margin-top: 76px;
                padding: 24px 0;
            }
            
            .search-results-header .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .search-info {
                gap: 10px;
                margin-bottom: 20px;
                flex-direction: row;
                justify-content: flex-start;
            }
            
            .search-info-item {
                padding: 8px 12px;
                font-size: 12px;
                flex: 1 1 calc(50% - 5px);
                min-width: calc(50% - 5px);
                max-width: calc(50% - 5px);
            }
            
            .search-info-item i {
                font-size: 14px;
                width: 18px;
                height: 18px;
            }
            
            .search-info-item span {
                font-size: 11px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .search-header-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .results-count-label {
                font-size: 11px;
            }
            
            .results-count {
                font-size: 22px;
            }
            
            .modify-search-btn {
                width: 100%;
                justify-content: center;
                padding: 12px 20px;
                font-size: 12px;
            }
            
            .modify-search-btn i {
                font-size: 14px;
            }
        }
        
        @media (max-width: 576px) {
            .search-results-header {
                margin-top: 70px;
                padding: 20px 0;
            }
            
            .search-results-header .container {
                padding-left: 12px;
                padding-right: 12px;
            }
            
            .search-info {
                gap: 8px;
                margin-bottom: 16px;
            }
            
            .search-info-item {
                padding: 8px 10px;
                font-size: 11px;
                flex: 1 1 calc(50% - 4px);
                min-width: calc(50% - 4px);
                max-width: calc(50% - 4px);
            }
            
            .search-info-item i {
                font-size: 12px;
                width: 16px;
                height: 16px;
            }
            
            .search-info-item span {
                font-size: 10px;
            }
            
            .results-count-label {
                font-size: 10px;
            }
            
            .results-count {
                font-size: 20px;
            }
            
            .modify-search-btn {
                padding: 10px 16px;
                font-size: 11px;
            }
        }
        
        /* Filters and Results Section */
        .results-section {
            padding: 48px 0;
            background: #fafbfc;
        }
        
        .filters-sidebar {
            background: white;
            border-radius: 20px;
            padding: 0;
            border: 2px solid var(--border-color);
            position: sticky;
            top: 100px;
            max-height: calc(100vh - 120px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .filters-header {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            padding: 24px;
            border-radius: 20px 20px 0 0;
            color: white;
            flex-shrink: 0;
            z-index: 10;
            box-shadow: 0 4px 16px rgba(20, 56, 92, 0.2);
        }
        
        .filters-header-title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.5px;
        }
        
        .filters-header-title i {
            font-size: 24px;
        }
        
        .filters-header-subtitle {
            font-size: 13px;
            opacity: 0.9;
            font-weight: 500;
        }
        
        .filters-content {
            padding: 24px;
            overflow-y: auto;
            overflow-x: hidden;
            flex: 1;
            min-height: 0;
        }
        
        .filters-content::-webkit-scrollbar {
            width: 6px;
        }
        
        .filters-content::-webkit-scrollbar-track {
            background: var(--light-bg);
            border-radius: 10px;
        }
        
        .filters-content::-webkit-scrollbar-thumb {
            background: var(--blue);
            border-radius: 10px;
        }
        
        .filters-content::-webkit-scrollbar-thumb:hover {
            background: var(--blue-dark);
        }
        
        .filter-group {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 2px solid var(--light-bg);
            position: relative;
        }
        
        .filter-group:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .filter-group-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
            cursor: pointer;
            user-select: none;
        }
        
        .filter-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.3px;
        }
        
        .filter-title-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.1) 0%, rgba(12, 44, 68, 0.1) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .filter-group-header:hover .filter-title-icon {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            transform: scale(1.05);
        }
        
        .filter-title-text {
            flex: 1;
        }
        
        .filter-toggle {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            transition: all 0.3s ease;
            font-size: 14px;
        }
        
        .filter-group-header:hover .filter-toggle {
            color: var(--blue);
        }
        
        .filter-group-content {
            padding-left: 46px;
            animation: slideDown 0.3s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .filter-option {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 8px;
            border: 2px solid transparent;
            background: var(--light-bg);
            position: relative;
        }
        
        .filter-option:hover {
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.08) 0%, rgba(12, 44, 68, 0.08) 100%);
            border-color: rgba(20, 56, 92, 0.2);
            transform: translateX(4px);
        }
        
        .filter-option input[type="checkbox"],
        .filter-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: var(--blue);
            margin: 0;
            flex-shrink: 0;
        }
        
        .filter-option label {
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            color: var(--text-color);
            flex: 1;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .filter-option .count {
            font-size: 13px;
            color: var(--text-light);
            font-weight: 700;
            background: rgba(20, 56, 92, 0.1);
            padding: 4px 10px;
            border-radius: 12px;
            margin-left: 8px;
            transition: all 0.3s ease;
        }
        
        .filter-option:hover .count {
            background: rgba(20, 56, 92, 0.2);
            color: var(--blue);
        }
        
        .filter-option input[type="checkbox"]:checked ~ label,
        .filter-option input[type="radio"]:checked ~ label {
            color: var(--blue);
        }
        
        .filter-option input[type="checkbox"]:checked ~ label .count,
        .filter-option input[type="radio"]:checked ~ label .count {
            background: var(--blue);
            color: white;
        }
        
        .filter-group-content.collapsed {
            display: none;
        }
        
        .filter-group-header.active .filter-toggle {
            transform: rotate(-90deg);
        }
        
        .price-range {
            margin-top: 18px;
        }
        
        .price-range-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-light);
        }
        
        .price-inputs {
            display: flex;
            gap: 12px;
            margin-top: 12px;
        }
        
        .price-input-wrapper {
            flex: 1;
            position: relative;
        }
        
        .price-input-wrapper::before {
            content: '₹';
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--blue);
            font-weight: 700;
            font-size: 14px;
            z-index: 1;
        }
        
        .price-input {
            width: 100%;
            padding: 12px 14px 12px 32px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: white;
            color: var(--text-color);
        }
        
        .price-input:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
            background: white;
        }
        
        .price-input:hover {
            border-color: var(--blue);
        }
        
        .filter-actions {
            padding: 20px 24px;
            background: var(--light-bg);
            border-top: 2px solid var(--border-color);
            display: flex;
            gap: 12px;
            flex-shrink: 0;
            border-radius: 0 0 20px 20px;
        }
        
        .apply-filters-btn {
            flex: 1;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .apply-filters-btn::before {
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
        
        .apply-filters-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .apply-filters-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        .apply-filters-btn span {
            position: relative;
            z-index: 1;
        }
        
        .reset-filters-btn {
            padding: 16px 20px;
            background: white;
            color: var(--text-color);
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 50px;
        }
        
        .reset-filters-btn:hover {
            border-color: var(--blue);
            color: var(--blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.15);
        }
        
        .reset-filters-btn i {
            font-size: 18px;
        }
        
        /* Results Area */
        .results-area {
            padding-left: 0;
        }
        
        .results-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        
        /* Hotel Results Container */
        .hotel-results {
            transition: all 0.3s ease;
        }
        
        .hotel-results.list-view {
            display: block;
        }
        
        .hotel-results.list-view .hotel-result-card {
            margin-bottom: 24px;
        }
        
        .hotel-results.grid-view {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        
        .hotel-results.grid-view .hotel-result-card {
            margin-bottom: 0;
        }
        
        @media (max-width: 1200px) {
            .hotel-results.grid-view {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .hotel-results.grid-view {
                grid-template-columns: 1fr;
            }
        }
        
        .sort-dropdown {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .sort-dropdown label {
            font-weight: 600;
            font-size: 15px;
            color: var(--text-color);
        }
        
        .sort-select {
            padding: 10px 16px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            background: white;
            color: var(--text-color);
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 180px;
        }
        
        .sort-select:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
        }
        
        .view-toggle {
            display: flex;
            gap: 8px;
        }
        
        .view-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            background: white;
            color: var(--text-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .view-btn.active {
            background: var(--blue);
            color: white;
            border-color: var(--blue);
        }
        
        .view-btn:hover {
            border-color: var(--blue);
            color: var(--blue);
        }
        
        .view-btn.active:hover {
            color: white;
        }
        
        /* Hotel Result Card - Professional Redesign */
        .hotel-result-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.06);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            margin-bottom: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04), 0 1px 3px rgba(0, 0, 0, 0.06);
            position: relative;
            backdrop-filter: blur(10px);
        }
        
        .hotel-result-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.01) 0%, rgba(0, 102, 204, 0.02) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 0;
            pointer-events: none;
        }
        
        .hotel-result-card:hover::before {
            opacity: 1;
        }
        
        .hotel-result-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(20, 56, 92, 0.12), 0 8px 24px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--blue);
        }
        
        .hotel-result-content {
            display: flex;
            gap: 0;
            margin: 0;
            padding: 0;
            align-items: stretch;
        }
        
        @media (min-width: 992px) {
            .hotel-result-content {
                align-items: stretch;
                min-height: 100%;
            }
            
            .hotel-result-image {
                height: 100%;
                align-self: stretch;
                display: flex;
            }
            
            .hotel-result-details {
                display: flex;
                flex-direction: column;
            }
        }
        
        /* Grid View Card Styles - Professional */
        .grid-view .hotel-result-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .grid-view .hotel-result-content {
            flex-direction: column;
        }
        
        .grid-view .hotel-result-image {
            width: 100%;
            min-width: 100%;
            height: 260px;
            line-height: 0;
        }
        
        @media (max-width: 991px) {
            .grid-view .hotel-result-image {
                height: 200px;
            }
        }
        
        @media (max-width: 576px) {
            .grid-view .hotel-result-image {
                height: 180px;
            }
        }
        
        .grid-view .hotel-result-details {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .grid-view .hotel-result-name {
            font-size: 22px;
            margin-bottom: 8px;
        }
        
        .grid-view .hotel-result-location {
            font-size: 13px;
            margin-bottom: 14px;
        }
        
        .grid-view .hotel-result-header {
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 16px;
        }
        
        .grid-view .hotel-result-rating {
            flex-direction: row;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
            width: 100%;
        }
        
        .grid-view .hotel-result-features {
            margin-bottom: 20px;
            gap: 8px;
        }
        
        .grid-view .hotel-feature-tag {
            font-size: 11px;
            padding: 5px 10px;
        }
        
        .grid-view .hotel-result-footer {
            margin-top: auto;
            padding-top: 20px;
        }
        
        .grid-view .hotel-price {
            font-size: 30px;
        }
        
        .grid-view .book-now-btn {
            padding: 12px 24px;
            font-size: 13px;
            width: 100%;
            justify-content: center;
        }
        
        .hotel-result-image {
            width: 360px;
            min-width: 360px;
            min-height: 300px;
            align-self: stretch;
            position: relative;
            overflow: hidden;
            line-height: 0;
            font-size: 0;
            margin: 0;
            padding: 0;
            flex-shrink: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        }
        
        @media (min-width: 992px) {
            .hotel-result-image {
                height: 100%;
            }
        }
        
        .hotel-result-image img {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            position: relative;
            transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .hotel-result-card:hover .hotel-result-image img {
            transform: scale(1.08);
        }
        
        .hotel-image-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 8px 16px;
            border-radius: 24px;
            font-size: 10px;
            font-weight: 800;
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12), 0 2px 8px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }
        
        .hotel-result-card:hover .hotel-image-badge {
            transform: scale(1.05);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.15);
        }
        
        .hotel-result-details {
            flex: 1;
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            z-index: 1;
            background: #ffffff;
        }
        
        .hotel-result-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            gap: 20px;
        }
        
        .hotel-result-name {
            font-family: "Quattrocento", serif;
            font-size: 26px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
            line-height: 1.3;
            letter-spacing: -0.3px;
        }
        
        .hotel-result-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 16px;
            line-height: 1.5;
        }
        
        .hotel-result-location i {
            color: var(--blue);
            font-size: 15px;
            flex-shrink: 0;
        }
        
        .hotel-result-rating {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 6px;
            flex-shrink: 0;
        }
        
        .rating-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 193, 7, 0.05) 100%);
            padding: 8px 12px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            color: #1a1a1a;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }
        
        .rating-badge i {
            color: #ffc107;
            font-size: 15px;
        }
        
        .review-count {
            font-size: 12px;
            color: #9ca3af;
            font-weight: 500;
            text-align: right;
        }
        
        .hotel-result-features {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        
        .hotel-feature-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            background: #f8f9fa;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            color: #4b5563;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.04);
        }
        
        .hotel-result-card:hover .hotel-feature-tag {
            background: #f1f5f9;
            border-color: rgba(20, 56, 92, 0.1);
            color: #1e293b;
            transform: translateY(-1px);
        }
        
        .hotel-feature-tag i {
            color: var(--blue);
            font-size: 13px;
        }
        
        .hotel-result-footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: auto;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }
        
        .hotel-price-section {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .price-per-night {
            font-size: 12px;
            color: #9ca3af;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .hotel-price {
            font-size: 36px;
            font-weight: 800;
            color: #1a1a1a;
            line-height: 1;
            letter-spacing: -1.5px;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        
        .hotel-price .currency {
            font-size: 20px;
            font-weight: 700;
            color: var(--blue);
            vertical-align: top;
            margin-right: 2px;
        }
        
        .price-tax {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 2px;
            font-weight: 500;
        }
        
        .book-now-btn {
            background: linear-gradient(135deg, var(--golden) 0%, var(--golden-dark) 100%);
            color: #ffffff;
            border: none;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 16px rgba(175, 135, 0, 0.2), 0 2px 8px rgba(175, 135, 0, 0.15);
            position: relative;
            overflow: hidden;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        
        .book-now-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            transform: translate(-50%, -50%);
            transition: width 0.6s cubic-bezier(0.23, 1, 0.32, 1), height 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .book-now-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .book-now-btn:hover {
            background: linear-gradient(135deg, var(--golden-dark) 0%, var(--golden) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(175, 135, 0, 0.3), 0 4px 12px rgba(175, 135, 0, 0.2);
        }
        
        .book-now-btn:active {
            transform: translateY(0);
        }
        
        .book-now-btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Pagination */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
        .pagination {
            display: flex;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .pagination-item {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: white;
            color: var(--text-color);
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .pagination-item:hover {
            border-color: var(--blue);
            color: var(--blue);
            transform: translateY(-2px);
        }
        
        .pagination-item.active {
            background: var(--blue);
            color: white;
            border-color: var(--blue);
        }
        
        .pagination-item.active:hover {
            color: white;
        }
        
        @media (max-width: 768px) {
            .pagination-wrapper {
                margin-top: 30px;
                padding: 0 15px;
            }
            
            .pagination {
                gap: 6px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .pagination-item {
                width: 40px;
                height: 40px;
                font-size: 14px;
                border-radius: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .pagination-wrapper {
                margin-top: 24px;
                padding: 0 10px;
            }
            
            .pagination {
                gap: 4px;
            }
            
            .pagination-item {
                width: 36px;
                height: 36px;
                font-size: 13px;
                border-radius: 8px;
            }
        }
        
        /* Mobile Filter Button */
        .mobile-filter-btn {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 8px 24px rgba(20, 56, 92, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            align-items: center;
            gap: 10px;
            opacity: 1;
            visibility: visible;
        }
        
        .mobile-filter-btn.hidden {
            opacity: 0;
            visibility: hidden;
            transform: translateX(-50%) translateY(100px);
        }
        
        .mobile-filter-btn:hover {
            transform: translateX(-50%) translateY(-2px);
            box-shadow: 0 12px 32px rgba(20, 56, 92, 0.5);
        }
        
        .mobile-filter-btn.hidden:hover {
            transform: translateX(-50%) translateY(100px);
        }
        
        .mobile-filter-btn i {
            font-size: 18px;
        }
        
        .mobile-filter-btn .filter-count {
            background: rgba(255, 255, 255, 0.3);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 800;
            min-width: 24px;
            text-align: center;
        }
        
        /* Fullscreen Filter Modal */
        .filter-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: white;
            z-index: 9999;
            overflow-y: auto;
            flex-direction: column;
        }
        
        .filter-modal.active {
            display: flex;
            animation: slideUp 0.3s ease-out;
        }
        
        .filter-modal.closing {
            display: flex;
            animation: slideDown 0.3s ease-in;
            transform: translateY(100%);
        }
        
        .filter-modal-content,
        .filter-modal-header,
        .filter-modal-footer {
            will-change: auto;
            transform: translateZ(0);
            backface-visibility: hidden;
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(100%);
            }
            to {
                transform: translateY(0);
            }
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(100%);
            }
        }
        
        .filter-modal-header {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
            box-shadow: 0 4px 16px rgba(20, 56, 92, 0.2);
        }
        
        .filter-modal-header h3 {
            font-family: "Quattrocento", serif;
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .filter-modal-close {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            transition: all 0.3s ease;
        }
        
        .filter-modal-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }
        
        .filter-modal-content {
            flex: 1;
            padding: 24px;
            overflow-y: auto;
        }
        
        .filter-modal-footer {
            padding: 20px;
            background: var(--light-bg);
            border-top: 2px solid var(--border-color);
            display: flex;
            gap: 12px;
            position: sticky;
            bottom: 0;
            z-index: 10;
        }
        
        .filter-modal-footer .apply-filters-btn,
        .filter-modal-footer .reset-filters-btn {
            flex: 1;
        }
        
        @media (max-width: 991px) {
            .hotel-result-card {
                margin-bottom: 24px;
                border-radius: 20px;
                box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06), 0 1px 4px rgba(0, 0, 0, 0.04);
            }
            
            .hotel-result-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 40px rgba(20, 56, 92, 0.1), 0 4px 16px rgba(0, 0, 0, 0.06);
            }
            
            .hotel-result-content {
                flex-direction: column;
            }
            
            .hotel-result-image {
                width: 100%;
                min-width: 100%;
                height: 200px;
                line-height: 0;
            }
            
            .hotel-result-details {
                padding: 20px;
            }
            
            .hotel-result-header {
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 14px;
            }
            
            .hotel-result-name {
                font-size: 20px;
                margin-bottom: 8px;
                line-height: 1.3;
            }
            
            .hotel-result-location {
                font-size: 13px;
                margin-bottom: 12px;
            }
            
            .hotel-result-rating {
                flex-direction: row;
                align-items: center;
                gap: 10px;
                margin-top: 8px;
                width: 100%;
                justify-content: flex-start;
            }
            
            .rating-badge {
                font-size: 12px;
                padding: 6px 10px;
            }
            
            .review-count {
                font-size: 11px;
            }
            
            .hotel-result-features {
                gap: 8px;
                margin-bottom: 16px;
            }
            
            .hotel-feature-tag {
                font-size: 11px;
                padding: 5px 10px;
            }
            
            .hotel-result-footer {
                flex-direction: column;
                align-items: stretch;
                gap: 14px;
                margin-top: auto;
                padding-top: 18px;
            }
            
            .hotel-price-section {
                width: 100%;
            }
            
            .hotel-price {
                font-size: 28px;
            }
            
            .book-now-btn {
                width: 100%;
                justify-content: center;
                padding: 14px 24px;
                font-size: 13px;
            }
            
            .filters-sidebar {
                display: none;
            }
            
            .mobile-filter-btn {
                display: flex;
            }
            
            .results-toolbar {
                flex-direction: column;
                align-items: stretch;
            }
        }
        
        @media (max-width: 576px) {
            .hotel-result-card {
                margin-bottom: 20px;
                border-radius: 16px;
            }
            
            .hotel-result-image {
                height: 180px;
            }
            
            .hotel-result-details {
                padding: 18px;
            }
            
            .hotel-result-header {
                margin-bottom: 12px;
            }
            
            .hotel-result-name {
                font-size: 19px;
                margin-bottom: 6px;
            }
            
            .hotel-result-location {
                font-size: 12px;
                margin-bottom: 10px;
            }
            
            .hotel-result-rating {
                gap: 8px;
                margin-top: 6px;
            }
            
            .rating-badge {
                font-size: 11px;
                padding: 5px 9px;
            }
            
            .review-count {
                font-size: 10px;
            }
            
            .hotel-result-features {
                gap: 6px;
                margin-bottom: 14px;
            }
            
            .hotel-feature-tag {
                font-size: 10px;
                padding: 4px 8px;
            }
            
            .hotel-feature-tag i {
                font-size: 11px;
            }
            
            .hotel-result-footer {
                gap: 12px;
                margin-top: auto;
                padding-top: 16px;
            }
            
            .hotel-price {
                font-size: 24px;
            }
            
            .price-per-night {
                font-size: 11px;
            }
            
            .price-tax {
                font-size: 10px;
            }
            
            .book-now-btn {
                padding: 12px 20px;
                font-size: 12px;
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
            font-family: "Quattrocento", serif;
            font-size: 20px;
            font-weight: 700;
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
            background: var(--blue);
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
            background: var(--blue);
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
            background: var(--blue);
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
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <!-- Search Results Header -->
    <div class="search-results-header">
        <div class="container">
            <div class="search-info">
                <div class="search-info-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Mumbai, India</span>
                </div>
                <div class="search-info-item">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>15/01/2025</span>
                </div>
                <div class="search-info-item">
                    <i class="bi bi-calendar-x-fill"></i>
                    <span>18/01/2025</span>
                </div>
                <div class="search-info-item">
                    <i class="bi bi-people-fill"></i>
                    <span>2 Guests</span>
                </div>
            </div>
            <div class="search-header-bottom">
                <div class="results-count-wrapper">
                    <div class="results-count-label">Search Results</div>
                    <h2 class="results-count">245 Hotels Found</h2>
                </div>
                <a href="index.html" class="modify-search-btn">
                    <i class="bi bi-pencil-fill"></i>
                    <span>Modify Search</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Results Section -->
    <div class="results-section">
        <div class="container">
            <div class="row">
                <!-- Filters Sidebar -->
                <div class="col-lg-3">
                    <div class="filters-sidebar">
                        <div class="filters-header">
                            <div class="filters-header-title">
                                <i class="bi bi-funnel-fill"></i>
                                <span>Filters</span>
                            </div>
                            <div class="filters-header-subtitle">Refine your search results</div>
                        </div>
                        
                        <div class="filters-content">
                            <div class="filter-group">
                                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                                    <div class="filter-title">
                                        <div class="filter-title-icon">
                                            <i class="bi bi-currency-rupee"></i>
                                        </div>
                                        <span class="filter-title-text">Price Range</span>
                                    </div>
                                    <i class="bi bi-chevron-down filter-toggle"></i>
                                </div>
                                <div class="filter-group-content">
                                    <div class="price-range-label">
                                        <span>Min Price</span>
                                        <span>Max Price</span>
                                    </div>
                                    <div class="price-range">
                                        <div class="price-inputs">
                                            <div class="price-input-wrapper">
                                                <input type="number" class="price-input" placeholder="1000" value="1000" min="0">
                                            </div>
                                            <div class="price-input-wrapper">
                                                <input type="number" class="price-input" placeholder="10000" value="10000" min="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-group">
                                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                                    <div class="filter-title">
                                        <div class="filter-title-icon">
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="filter-title-text">Star Rating</span>
                                    </div>
                                    <i class="bi bi-chevron-down filter-toggle"></i>
                                </div>
                                <div class="filter-group-content">
                                    <div class="filter-option">
                                        <input type="checkbox" id="star5" checked>
                                        <label for="star5">
                                            <span>5 Stars</span>
                                            <span class="count">45</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="star4" checked>
                                        <label for="star4">
                                            <span>4 Stars</span>
                                            <span class="count">120</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="star3" checked>
                                        <label for="star3">
                                            <span>3 Stars</span>
                                            <span class="count">80</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="star2">
                                        <label for="star2">
                                            <span>2 Stars</span>
                                            <span class="count">45</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="filter-group">
                                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                                    <div class="filter-title">
                                        <div class="filter-title-icon">
                                            <i class="bi bi-check-circle-fill"></i>
                                        </div>
                                        <span class="filter-title-text">Amenities</span>
                                    </div>
                                    <i class="bi bi-chevron-down filter-toggle"></i>
                                </div>
                                <div class="filter-group-content">
                                    <div class="filter-option">
                                        <input type="checkbox" id="wifi" checked>
                                        <label for="wifi">
                                            <span>Free WiFi</span>
                                            <span class="count">200</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="breakfast">
                                        <label for="breakfast">
                                            <span>Breakfast</span>
                                            <span class="count">150</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="pool">
                                        <label for="pool">
                                            <span>Swimming Pool</span>
                                            <span class="count">80</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="parking">
                                        <label for="parking">
                                            <span>Parking</span>
                                            <span class="count">120</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="gym">
                                        <label for="gym">
                                            <span>Gym</span>
                                            <span class="count">90</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="spa">
                                        <label for="spa">
                                            <span>Spa</span>
                                            <span class="count">65</span>
                                        </label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="restaurant">
                                        <label for="restaurant">
                                            <span>Restaurant</span>
                                            <span class="count">180</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="filter-actions">
                            <button class="reset-filters-btn" onclick="resetFilters()" title="Reset Filters">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                            <button class="apply-filters-btn" onclick="applyFilters()">
                                <span>Apply Filters</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Results Area -->
                <div class="col-lg-9">
                    <div class="results-area">
                        <div class="results-toolbar">
                            <div class="sort-dropdown">
                                <label>Sort by:</label>
                                <select class="sort-select">
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Rating: High to Low</option>
                                    <option>Popularity</option>
                                    <option>Distance</option>
                                </select>
                            </div>
                            <div class="view-toggle">
                                <button class="view-btn active" title="List View">
                                    <i class="bi bi-list"></i>
                                </button>
                                <button class="view-btn" title="Grid View">
                                    <i class="bi bi-grid"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Hotel Results -->
                        <div class="hotel-results">
                            <!-- Hotel 1 -->
                            <div class="hotel-result-card">
                                <div class="hotel-result-content">
                                    <div class="hotel-result-image">
                                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800" alt="Grand Luxury Resort" loading="lazy">
                                        <div class="hotel-image-badge">Popular</div>
                                    </div>
                                    <div class="hotel-result-details">
                                        <div>
                                            <div class="hotel-result-header">
                                                <div>
                                                    <div class="hotel-result-name">Grand Luxury Resort</div>
                                                    <div class="hotel-result-location">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <span>Mumbai, Maharashtra, India</span>
                                                    </div>
                                                </div>
                                                <div class="hotel-result-rating">
                                                    <div class="rating-badge">
                                                        <i class="bi bi-star-fill"></i>
                                                        <span>4.8</span>
                                                    </div>
                                                    <div class="review-count">1,245 reviews</div>
                                                </div>
                                            </div>
                                            <div class="hotel-result-features">
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-wifi"></i>
                                                    <span>Free WiFi</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-cup-straw"></i>
                                                    <span>Breakfast</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-parking"></i>
                                                    <span>Parking</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-water"></i>
                                                    <span>Pool</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hotel-result-footer">
                                            <div class="hotel-price-section">
                                                <div class="price-per-night">per night</div>
                                                <div class="hotel-price">₹4,500</div>
                                                <div class="price-tax">+ taxes & fees</div>
                                            </div>
                                            <button class="book-now-btn">
                                                <span>View Details</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hotel 2 -->
                            <div class="hotel-result-card">
                                <div class="hotel-result-content">
                                    <div class="hotel-result-image">
                                        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800" alt="Ocean View Hotel" loading="lazy">
                                        <div class="hotel-image-badge">Best Seller</div>
                                    </div>
                                    <div class="hotel-result-details">
                                        <div>
                                            <div class="hotel-result-header">
                                                <div>
                                                    <div class="hotel-result-name">Ocean View Hotel</div>
                                                    <div class="hotel-result-location">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <span>Mumbai, Maharashtra, India</span>
                                                    </div>
                                                </div>
                                                <div class="hotel-result-rating">
                                                    <div class="rating-badge">
                                                        <i class="bi bi-star-fill"></i>
                                                        <span>4.9</span>
                                                    </div>
                                                    <div class="review-count">892 reviews</div>
                                                </div>
                                            </div>
                                            <div class="hotel-result-features">
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-wifi"></i>
                                                    <span>Free WiFi</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-water"></i>
                                                    <span>Pool</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-cup-straw"></i>
                                                    <span>Breakfast</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-dumbbell"></i>
                                                    <span>Gym</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hotel-result-footer">
                                            <div class="hotel-price-section">
                                                <div class="price-per-night">per night</div>
                                                <div class="hotel-price">₹6,200</div>
                                                <div class="price-tax">+ taxes & fees</div>
                                            </div>
                                            <button class="book-now-btn">
                                                <span>View Details</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hotel 3 -->
                            <div class="hotel-result-card">
                                <div class="hotel-result-content">
                                    <div class="hotel-result-image">
                                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800" alt="City Center Hotel" loading="lazy">
                                        <div class="hotel-image-badge">Great Value</div>
                                    </div>
                                    <div class="hotel-result-details">
                                        <div>
                                            <div class="hotel-result-header">
                                                <div>
                                                    <div class="hotel-result-name">City Center Hotel</div>
                                                    <div class="hotel-result-location">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <span>Mumbai, Maharashtra, India</span>
                                                    </div>
                                                </div>
                                                <div class="hotel-result-rating">
                                                    <div class="rating-badge">
                                                        <i class="bi bi-star-fill"></i>
                                                        <span>4.7</span>
                                                    </div>
                                                    <div class="review-count">1,156 reviews</div>
                                                </div>
                                            </div>
                                            <div class="hotel-result-features">
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-wifi"></i>
                                                    <span>Free WiFi</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-parking"></i>
                                                    <span>Parking</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-cup-straw"></i>
                                                    <span>Breakfast</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hotel-result-footer">
                                            <div class="hotel-price-section">
                                                <div class="price-per-night">per night</div>
                                                <div class="hotel-price">₹3,800</div>
                                                <div class="price-tax">+ taxes & fees</div>
                                            </div>
                                            <button class="book-now-btn">
                                                <span>View Details</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hotel 4 -->
                            <div class="hotel-result-card">
                                <div class="hotel-result-content">
                                    <div class="hotel-result-image">
                                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800" alt="Beachside Resort" loading="lazy">
                                        <div class="hotel-image-badge">Trending</div>
                                    </div>
                                    <div class="hotel-result-details">
                                        <div>
                                            <div class="hotel-result-header">
                                                <div>
                                                    <div class="hotel-result-name">Beachside Resort</div>
                                                    <div class="hotel-result-location">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <span>Mumbai, Maharashtra, India</span>
                                                    </div>
                                                </div>
                                                <div class="hotel-result-rating">
                                                    <div class="rating-badge">
                                                        <i class="bi bi-star-fill"></i>
                                                        <span>4.6</span>
                                                    </div>
                                                    <div class="review-count">678 reviews</div>
                                                </div>
                                            </div>
                                            <div class="hotel-result-features">
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-wifi"></i>
                                                    <span>Free WiFi</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-water"></i>
                                                    <span>Pool</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-cup-straw"></i>
                                                    <span>Breakfast</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-dumbbell"></i>
                                                    <span>Gym</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hotel-result-footer">
                                            <div class="hotel-price-section">
                                                <div class="price-per-night">per night</div>
                                                <div class="hotel-price">₹5,500</div>
                                                <div class="price-tax">+ taxes & fees</div>
                                            </div>
                                            <button class="book-now-btn">
                                                <span>View Details</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hotel 5 -->
                            <div class="hotel-result-card">
                                <div class="hotel-result-content">
                                    <div class="hotel-result-image">
                                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800" alt="Business Hotel" loading="lazy">
                                        <div class="hotel-image-badge">Business</div>
                                    </div>
                                    <div class="hotel-result-details">
                                        <div>
                                            <div class="hotel-result-header">
                                                <div>
                                                    <div class="hotel-result-name">Business Hotel</div>
                                                    <div class="hotel-result-location">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <span>Mumbai, Maharashtra, India</span>
                                                    </div>
                                                </div>
                                                <div class="hotel-result-rating">
                                                    <div class="rating-badge">
                                                        <i class="bi bi-star-fill"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="review-count">934 reviews</div>
                                                </div>
                                            </div>
                                            <div class="hotel-result-features">
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-wifi"></i>
                                                    <span>Free WiFi</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-parking"></i>
                                                    <span>Parking</span>
                                                </span>
                                                <span class="hotel-feature-tag">
                                                    <i class="bi bi-dumbbell"></i>
                                                    <span>Gym</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="hotel-result-footer">
                                            <div class="hotel-price-section">
                                                <div class="price-per-night">per night</div>
                                                <div class="hotel-price">₹4,200</div>
                                                <div class="price-tax">+ taxes & fees</div>
                                            </div>
                                            <button class="book-now-btn">
                                                <span>View Details</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li><a href="#" class="pagination-item"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#" class="pagination-item active">1</a></li>
                                <li><a href="#" class="pagination-item">2</a></li>
                                <li><a href="#" class="pagination-item">3</a></li>
                                <li><a href="#" class="pagination-item">4</a></li>
                                <li><a href="#" class="pagination-item">5</a></li>
                                <li><a href="#" class="pagination-item"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Filter Button -->
    <button class="mobile-filter-btn" onclick="openFilterModal()">
        <i class="bi bi-funnel-fill"></i>
        <span>Filters</span>
        <span class="filter-count" id="filterCount">0</span>
    </button>

    <!-- Fullscreen Filter Modal -->
    <div class="filter-modal" id="filterModal">
        <div class="filter-modal-header">
            <h3>
                <i class="bi bi-funnel-fill"></i>
                <span>Filters</span>
            </h3>
            <button class="filter-modal-close" onclick="closeFilterModal()">
                <i class="bi bi-x-lg"></i>
            </button>
                    </div>
        <div class="filter-modal-content">
            <div class="filter-group">
                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                    <div class="filter-title">
                        <div class="filter-title-icon">
                            <i class="bi bi-currency-rupee"></i>
                </div>
                        <span class="filter-title-text">Price Range</span>
                </div>
                    <i class="bi bi-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-group-content">
                    <div class="price-range-label">
                        <span>Min Price</span>
                        <span>Max Price</span>
                </div>
                    <div class="price-range">
                        <div class="price-inputs">
                            <div class="price-input-wrapper">
                                <input type="number" class="price-input" placeholder="1000" value="1000" min="0">
            </div>
                            <div class="price-input-wrapper">
                                <input type="number" class="price-input" placeholder="10000" value="10000" min="0">
            </div>
        </div>
                    </div>
                </div>
            </div>
            
            <div class="filter-group">
                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                    <div class="filter-title">
                        <div class="filter-title-icon">
                            <i class="bi bi-star-fill"></i>
        </div>
                        <span class="filter-title-text">Star Rating</span>
                    </div>
                    <i class="bi bi-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-group-content">
                    <div class="filter-option">
                        <input type="checkbox" id="modal-star5" checked>
                        <label for="modal-star5">
                            <span>5 Stars</span>
                            <span class="count">45</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-star4" checked>
                        <label for="modal-star4">
                            <span>4 Stars</span>
                            <span class="count">120</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-star3" checked>
                        <label for="modal-star3">
                            <span>3 Stars</span>
                            <span class="count">80</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-star2">
                        <label for="modal-star2">
                            <span>2 Stars</span>
                            <span class="count">45</span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="filter-group">
                <div class="filter-group-header" onclick="toggleFilterGroup(this)">
                    <div class="filter-title">
                        <div class="filter-title-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <span class="filter-title-text">Amenities</span>
                    </div>
                    <i class="bi bi-chevron-down filter-toggle"></i>
                </div>
                <div class="filter-group-content">
                    <div class="filter-option">
                        <input type="checkbox" id="modal-wifi" checked>
                        <label for="modal-wifi">
                            <span>Free WiFi</span>
                            <span class="count">200</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-breakfast">
                        <label for="modal-breakfast">
                            <span>Breakfast</span>
                            <span class="count">150</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-pool">
                        <label for="modal-pool">
                            <span>Swimming Pool</span>
                            <span class="count">80</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-parking">
                        <label for="modal-parking">
                            <span>Parking</span>
                            <span class="count">120</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-gym">
                        <label for="modal-gym">
                            <span>Gym</span>
                            <span class="count">90</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-spa">
                        <label for="modal-spa">
                            <span>Spa</span>
                            <span class="count">65</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="modal-restaurant">
                        <label for="modal-restaurant">
                            <span>Restaurant</span>
                            <span class="count">180</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-modal-footer">
            <button class="reset-filters-btn" onclick="resetModalFilters()" title="Reset Filters">
                <i class="bi bi-arrow-counterclockwise"></i>
            </button>
            <button class="apply-filters-btn" onclick="applyModalFilters()">
                <span>Apply Filters</span>
            </button>
        </div>
    </div>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        // View toggle
        const hotelResults = document.querySelector('.hotel-results');
        const viewButtons = document.querySelectorAll('.view-btn');
        
        // Set initial view to list
        if (hotelResults) {
            hotelResults.classList.add('list-view');
        }
        
        viewButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                viewButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Toggle view classes
                if (hotelResults) {
                    if (this.querySelector('.bi-list')) {
                        // List view clicked
                        hotelResults.classList.remove('grid-view');
                        hotelResults.classList.add('list-view');
                    } else if (this.querySelector('.bi-grid')) {
                        // Grid view clicked
                        hotelResults.classList.remove('list-view');
                        hotelResults.classList.add('grid-view');
                    }
                }
            });
        });
        
        // Filter sidebar scroll
        const filtersSidebar = document.querySelector('.filters-sidebar');
        if (filtersSidebar) {
            window.addEventListener('scroll', function() {
                if (window.innerWidth > 991) {
                    const scrollTop = window.pageYOffset;
                    const headerHeight = document.querySelector('.search-results-header').offsetHeight;
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    
                    if (scrollTop > headerHeight) {
                        filtersSidebar.style.top = '20px';
                    } else {
                        filtersSidebar.style.top = '100px';
                    }
                }
            });
        }
        
        // Toggle filter group
        function toggleFilterGroup(header) {
            const group = header.closest('.filter-group');
            const content = group.querySelector('.filter-group-content');
            
            content.classList.toggle('collapsed');
            header.classList.toggle('active');
        }
        
        // Reset all filters
        function resetFilters() {
            const checkboxes = document.querySelectorAll('.filters-sidebar input[type="checkbox"]');
            const priceInputs = document.querySelectorAll('.price-input');
            
            checkboxes.forEach(cb => cb.checked = false);
            priceInputs[0].value = '';
            priceInputs[1].value = '';
            
            // Show notification
            const btn = event.target.closest('.reset-filters-btn');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check"></i>';
            btn.style.background = 'var(--success-color)';
            btn.style.borderColor = 'var(--success-color)';
            btn.style.color = 'white';
            
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.style.background = '';
                btn.style.borderColor = '';
                btn.style.color = '';
            }, 1500);
        }
        
        // Apply filters
        function applyFilters() {
            const btn = event.target.closest('.apply-filters-btn');
            const originalHTML = btn.innerHTML;
            
            btn.innerHTML = '<span><i class="bi bi-hourglass-split"></i> Applying...</span>';
            btn.disabled = true;
            
            // Simulate filter application
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.disabled = false;
                
                // Show success feedback
                btn.style.background = 'var(--success-color)';
                setTimeout(() => {
                    btn.style.background = '';
                }, 1000);
            }, 1500);
        }
        
        // Mobile Filter Modal Functions
        function openFilterModal() {
            const modal = document.getElementById('filterModal');
            if (modal) {
                // Remove closing class if present
                modal.classList.remove('closing');
                // Ensure modal is displayed
                modal.style.display = 'flex';
                // Small delay to ensure display is set before animation
                setTimeout(() => {
                    modal.classList.add('active');
                }, 10);
                document.body.style.overflow = 'hidden';
                updateFilterCount();
            }
        }
        
        function closeFilterModal() {
            const modal = document.getElementById('filterModal');
            if (modal && modal.classList.contains('active')) {
                // Ensure modal maintains display during closing animation
                modal.style.display = 'flex';
                
                // Remove active class and add closing class to trigger slide-down animation
                modal.classList.remove('active');
                modal.classList.add('closing');
                
                // Wait for animation to complete, then hide modal and restore scroll
                setTimeout(() => {
                    modal.classList.remove('closing');
                    modal.style.display = 'none';
                    document.body.style.overflow = '';
                }, 300); // Match animation duration
            }
        }
        
        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            const modal = document.getElementById('filterModal');
            if (modal && modal.classList.contains('active')) {
                if (e.target === modal) {
                    closeFilterModal();
                }
            }
        });
        
        // Update filter count badge
        function updateFilterCount() {
            const modalCheckboxes = document.querySelectorAll('#filterModal input[type="checkbox"]:checked');
            const count = modalCheckboxes.length;
            const countBadge = document.getElementById('filterCount');
            if (countBadge) {
                countBadge.textContent = count;
                countBadge.style.display = count > 0 ? 'inline-block' : 'none';
            }
        }
        
        // Sync filter changes
        document.addEventListener('DOMContentLoaded', function() {
            const modalCheckboxes = document.querySelectorAll('#filterModal input[type="checkbox"]');
            modalCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateFilterCount);
            });
            updateFilterCount();
        });
        
        // Reset modal filters
        function resetModalFilters() {
            const checkboxes = document.querySelectorAll('#filterModal input[type="checkbox"]');
            const priceInputs = document.querySelectorAll('#filterModal .price-input');
            
            checkboxes.forEach(cb => cb.checked = false);
            priceInputs[0].value = '';
            priceInputs[1].value = '';
            
            updateFilterCount();
            
            // Show notification
            const btn = event.target.closest('.reset-filters-btn');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check"></i>';
            btn.style.background = 'var(--success-color)';
            btn.style.borderColor = 'var(--success-color)';
            btn.style.color = 'white';
            
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.style.background = '';
                btn.style.borderColor = '';
                btn.style.color = '';
            }, 1500);
        }
        
        // Apply modal filters
        function applyModalFilters() {
            const btn = event.target.closest('.apply-filters-btn');
            const originalHTML = btn.innerHTML;
            
            btn.innerHTML = '<span><i class="bi bi-hourglass-split"></i> Applying...</span>';
            btn.disabled = true;
            
            // Simulate filter application
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.disabled = false;
                
                // Show success feedback
                btn.style.background = 'var(--success-color)';
                setTimeout(() => {
                    btn.style.background = '';
                    closeFilterModal();
                }, 1000);
            }, 1500);
        }
        
        // Hide filter button when near footer
        function handleFilterButtonVisibility() {
            const filterBtn = document.querySelector('.mobile-filter-btn');
            const footer = document.querySelector('.footer');
            
            if (!filterBtn || !footer) return;
            
            // Only run on mobile screens
            if (window.innerWidth > 991) return;
            
            const footerTop = footer.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            const threshold = 150; // Hide button when footer is 150px from bottom
            
            if (footerTop < windowHeight - threshold) {
                filterBtn.classList.add('hidden');
            } else {
                filterBtn.classList.remove('hidden');
            }
        }
        
        // Run on scroll and resize
        window.addEventListener('scroll', handleFilterButtonVisibility);
        window.addEventListener('resize', handleFilterButtonVisibility);
        
        // Run on page load
        document.addEventListener('DOMContentLoaded', function() {
            handleFilterButtonVisibility();
        });
    </script>
</body>
</html>

