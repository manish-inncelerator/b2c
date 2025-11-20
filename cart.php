<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Fayyaz Travels</title>
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
        
        /* Cart Container */
        .cart-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 50px;
            margin-top: 76px;
        }
        
        @media (max-width: 991px) {
            .cart-container {
                margin-top: 76px;
                padding: 30px 20px;
            }
        }
        
        .cart-header {
            margin-top: 40px;
            margin-bottom: 32px;
        }
        
        @media (max-width: 991px) {
            .cart-header {
                margin-top: 30px;
            }
        }
        
        .cart-title {
            font-size: 36px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .cart-title i {
            color: var(--blue);
            font-size: 32px;
        }
        
        .cart-subtitle {
            font-size: 15px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        .cart-content {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 32px;
        }
        
        /* Cart Items */
        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .cart-item {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 24px;
            padding: 28px;
            display: flex;
            gap: 24px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
        }
        
        
        .cart-item:hover {
            box-shadow: 0 12px 32px rgba(20, 56, 92, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        .cart-item-image-wrapper {
            position: relative;
            width: 200px;
            height: 160px;
            flex-shrink: 0;
            border-radius: 18px;
            overflow: hidden;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .cart-item:hover .cart-item-image-wrapper {
            border-color: var(--blue);
            box-shadow: 0 8px 24px rgba(20, 56, 92, 0.2);
        }
        
        .cart-item-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .cart-item:hover .cart-item-image {
            transform: scale(1.1);
        }
        
        .cart-item-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
            z-index: 2;
        }
        
        .cart-item-rating {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(10px);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
            z-index: 2;
        }
        
        .cart-item-rating i {
            color: #ffc107;
            font-size: 14px;
        }
        
        .cart-item-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .cart-item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .cart-item-title {
            font-size: 22px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 8px;
            letter-spacing: -0.3px;
            line-height: 1.3;
        }
        
        .cart-item-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-light);
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 12px;
            padding: 8px 14px;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.05) 0%, rgba(0, 82, 163, 0.05) 100%);
            border-radius: 10px;
            width: fit-content;
            border: 1px solid rgba(0, 102, 204, 0.1);
        }
        
        .cart-item-location i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .cart-item-details {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 12px;
        }
        
        .cart-item-detail {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-color);
            font-weight: 600;
            padding: 8px 14px;
            background: var(--light-bg);
            border-radius: 10px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .cart-item-detail:hover {
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.05) 0%, rgba(12, 44, 68, 0.05) 100%);
            border-color: var(--blue);
            transform: translateY(-2px);
        }
        
        .cart-item-detail i {
            color: var(--blue);
            font-size: 15px;
        }
        
        .cart-item-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 24px;
            border-top: 2px solid var(--border-color);
            gap: 20px;
        }
        
        .cart-item-price {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 20px 24px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.08) 0%, rgba(12, 44, 68, 0.06) 100%);
            border-radius: 16px;
            border: 2px solid rgba(20, 56, 92, 0.15);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.08);
            position: relative;
            overflow: hidden;
            flex: 1;
            max-width: 280px;
        }
        
        .cart-item-price::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        .cart-item-price-label {
            font-size: 10px;
            color: var(--text-light);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }
        
        .cart-item-price-amount {
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            letter-spacing: -0.5px;
        }
        
        .cart-item-price-original {
            font-size: 15px;
            color: var(--text-light);
            text-decoration: line-through;
            font-weight: 600;
            opacity: 0.7;
        }
        
        .cart-item-savings {
            font-size: 13px;
            color: var(--success-color);
            font-weight: 800;
            margin-top: 2px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .cart-item-savings::before {
            content: '✓';
            font-size: 14px;
            font-weight: 900;
        }
        
        .cart-item-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 16px;
            background: white;
            padding: 10px 14px;
            border-radius: 14px;
            border: 2px solid var(--border-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        
        .quantity-btn {
            width: 36px;
            height: 36px;
            border: none;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 8px rgba(20, 56, 92, 0.2);
        }
        
        .quantity-btn:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.4);
        }
        
        .quantity-btn:active {
            transform: scale(1.05);
        }
        
        .quantity-value {
            font-size: 18px;
            font-weight: 800;
            color: var(--dark-color);
            min-width: 35px;
            text-align: center;
            padding: 0 8px;
        }
        
        .remove-btn {
            padding: 14px 24px;
            background: linear-gradient(135deg, #ff4444 0%, #ff6b35 50%, #dc3545 100%);
            border: none;
            border-radius: 14px;
            color: white;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4),
                        0 2px 4px rgba(255, 107, 53, 0.3),
                        inset 0 1px 0 rgba(255, 255, 255, 0.2),
                        inset 0 -1px 0 rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.3px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .remove-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.25) 0%, transparent 100%);
            border-radius: 14px 14px 0 0;
            pointer-events: none;
        }
        
        .remove-btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.4s ease, height 0.4s ease;
        }
        
        .remove-btn:hover::after {
            width: 200px;
            height: 200px;
        }
        
        .remove-btn:hover {
            background: linear-gradient(135deg, #ff5555 0%, #ff7b4a 50%, #e63950 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.5),
                        0 3px 8px rgba(255, 107, 53, 0.4),
                        inset 0 1px 0 rgba(255, 255, 255, 0.3),
                        inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        }
        
        .remove-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(220, 53, 69, 0.4),
                        0 1px 3px rgba(255, 107, 53, 0.3),
                        inset 0 2px 4px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, #e63950 0%, #ff5a2d 50%, #c82333 100%);
        }
        
        .remove-btn i {
            position: relative;
            z-index: 1;
            font-size: 16px;
            filter: drop-shadow(0 1px 1px rgba(0, 0, 0, 0.2));
        }
        
        .remove-btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Cart Summary */
        .cart-summary {
            position: sticky;
            top: 100px;
            height: fit-content;
        }
        
        .summary-card {
            background: white;
            border: 2px solid var(--border-color);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .summary-card:hover {
            box-shadow: 0 12px 32px rgba(20, 56, 92, 0.15);
            border-color: var(--blue);
            transform: translateY(-4px);
        }
        
        
        .summary-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 16px;
            border-bottom: 2px solid var(--border-color);
        }
        
        .summary-title i {
            color: var(--blue);
            font-size: 26px;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 16px;
            font-size: 15px;
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-bottom: 8px;
        }
        
        .summary-row:hover {
            background: var(--light-bg);
        }
        
        .summary-row-label {
            color: var(--text-color);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .summary-row-label i {
            color: var(--blue);
            font-size: 14px;
        }
        
        .summary-row-value {
            color: var(--text-color);
            font-weight: 700;
            font-size: 16px;
        }
        
        .summary-row.discount {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.05) 0%, rgba(40, 167, 69, 0.05) 100%);
            border: 1px solid rgba(40, 167, 69, 0.2);
        }
        
        .summary-row.discount .summary-row-value {
            color: var(--success-color);
            font-weight: 800;
        }
        
        .summary-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--border-color), transparent);
            margin: 20px 0;
        }
        
        .summary-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.05) 0%, rgba(12, 44, 68, 0.05) 100%);
            border-radius: 16px;
            margin-top: 12px;
            border: 2px solid rgba(20, 56, 92, 0.1);
        }
        
        .summary-total-label {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark-color);
        }
        
        .summary-total-value {
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .promo-section {
            margin: 28px 0;
            padding: 28px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.06) 0%, rgba(12, 44, 68, 0.08) 50%, rgba(20, 56, 92, 0.06) 100%);
            border-radius: 20px;
            border: 2px solid rgba(20, 56, 92, 0.2);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.12);
            position: relative;
            overflow: visible;
            transition: all 0.3s ease;
        }
        
        
        .promo-section:hover {
            box-shadow: 0 8px 28px rgba(20, 56, 92, 0.18);
            border-color: rgba(20, 56, 92, 0.3);
        }
        
        .promo-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: -0.2px;
        }
        
        .promo-title i {
            color: var(--blue);
            font-size: 20px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.15) 0%, rgba(12, 44, 68, 0.15) 100%);
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }
        
        .promo-input-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            z-index: 2;
        }
        
        .promo-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid rgba(0, 102, 204, 0.2);
            border-radius: 12px;
            font-size: 15px;
            font-family: inherit;
            font-weight: 600;
            transition: all 0.3s ease;
            background: white;
            color: var(--text-color);
            letter-spacing: 0.5px;
        }
        
        .promo-input::placeholder {
            color: var(--text-light);
            font-weight: 500;
            letter-spacing: 0;
        }
        
        .promo-input:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.15);
            background: white;
            transform: translateY(-1px);
        }
        
        .promo-btn {
            width: 100%;
            padding: 16px 28px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px rgba(20, 56, 92, 0.3);
            letter-spacing: 0.3px;
            white-space: nowrap;
            position: relative;
            z-index: 2;
        }
        
        .promo-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(20, 56, 92, 0.4);
        }
        
        .promo-btn:active {
            transform: translateY(0);
        }
        
        @media (max-width: 768px) {
            .promo-section {
                padding: 24px;
            }
        }
        
        .checkout-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .checkout-btn:disabled {
            background: var(--text-light);
            color: white;
            cursor: not-allowed;
            box-shadow: none;
            opacity: 0.6;
        }
        
        .checkout-btn:disabled:hover {
            transform: none;
            box-shadow: none;
        }
        
        .checkout-btn::before {
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
        
        .checkout-btn:hover:not(:disabled)::before {
            width: 300px;
            height: 300px;
        }
        
        .checkout-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        .checkout-btn:active:not(:disabled) {
            transform: translateY(0);
        }
        
        .checkout-btn i {
            font-size: 20px;
        }
        
        .continue-shopping {
            text-align: center;
            margin-top: 16px;
        }
        
        .continue-shopping a {
            color: var(--blue);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .continue-shopping a:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }
        
        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 20px;
            border: 2px solid var(--border-color);
        }
        
        .empty-cart-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.1) 0%, rgba(12, 44, 68, 0.1) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--blue);
            font-size: 60px;
        }
        
        .empty-cart-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 12px;
        }
        
        .empty-cart-text {
            font-size: 16px;
            color: var(--text-light);
            margin-bottom: 32px;
        }
        
        .empty-cart-btn {
            padding: 16px 32px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
        }
        
        .empty-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .cart-container {
                padding: 30px 20px;
            }
            
            .cart-content {
                grid-template-columns: 1fr;
            }
            
            .cart-summary {
                position: relative;
                top: 0;
            }
            
            .cart-item {
                flex-direction: column;
            }
            
            .cart-item-image {
                width: 100%;
                height: 200px;
            }
        }
        
        @media (max-width: 768px) {
            .cart-title {
                font-size: 28px;
            }
            
            .cart-item-footer {
                flex-direction: column;
                align-items: stretch;
                gap: 16px;
            }
            
            .cart-item-price {
                max-width: 100%;
                padding: 18px 20px;
            }
            
            .cart-item-price-amount {
                font-size: 28px;
            }
            
            .cart-item-actions {
                width: 100%;
                justify-content: flex-end;
            }
            
            .remove-btn {
                flex: 1;
                justify-content: center;
                max-width: 200px;
            }
        }
        
        /* Guest Information Section */
        .guest-info-section {
            margin-top: 32px;
        }
        
        .guest-info-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.98) 100%);
            border: 2px solid var(--border-color);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .guest-info-card:hover {
            box-shadow: 0 12px 32px rgba(0, 102, 204, 0.15);
            border-color: var(--primary-color);
            transform: translateY(-4px);
        }
        
        
        .guest-info-header {
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--border-color);
            position: relative;
        }
        
        .guest-info-header::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        .guest-info-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0;
            letter-spacing: -0.3px;
        }
        
        .guest-info-title i {
            color: var(--blue);
            font-size: 24px;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.1) 0%, rgba(12, 44, 68, 0.1) 100%);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }
        
        .guest-info-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .guest-info-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .guest-info-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: -0.2px;
        }
        
        .guest-info-label i {
            color: var(--blue);
            font-size: 16px;
            width: 20px;
            text-align: center;
        }
        
        .guest-info-label .required {
            color: #e74c3c;
            margin-left: 4px;
            font-weight: 800;
        }
        
        .guest-info-control {
            padding: 14px 18px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 15px;
            font-family: inherit;
            color: var(--text-color);
            background: white;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .guest-info-control:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
            background: white;
            transform: translateY(-1px);
        }
        
        .guest-info-control::placeholder {
            color: var(--text-light);
            font-weight: 400;
        }
        
        .guest-info-actions {
            margin-top: 8px;
        }
        
        .guest-info-btn {
            width: 100%;
            padding: 16px 24px;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            letter-spacing: 0.3px;
        }
        
        .guest-info-btn.primary {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            box-shadow: 0 4px 16px rgba(20, 56, 92, 0.3);
        }
        
        .guest-info-btn.primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(20, 56, 92, 0.4);
        }
        
        .guest-info-btn.primary:active {
            transform: translateY(0);
        }
        
        @media (max-width: 768px) {
            .guest-info-card {
                padding: 24px;
            }
            
            .guest-info-title {
                font-size: 18px;
            }
            
            .guest-info-form {
                gap: 18px;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <div class="cart-container">
        <div class="cart-header">
            <h1 class="cart-title">
                <i class="bi bi-cart-fill"></i>
                Shopping Cart
            </h1>
            <p class="cart-subtitle">Review your items before checkout</p>
        </div>

        <div class="cart-content" id="cartContent">
            <!-- Cart Items -->
            <div class="cart-items" id="cartItems">
                <div class="cart-item" data-item-id="1">
                    <div class="cart-item-image-wrapper">
                        <div class="cart-item-badge">Best Seller</div>
                        <div class="cart-item-rating">
                            <i class="bi bi-star-fill"></i>
                            <span>4.8</span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400" alt="Hotel" class="cart-item-image">
                    </div>
                    <div class="cart-item-content">
                        <div class="cart-item-header">
                            <div>
                                <h3 class="cart-item-title">Grand Luxury Resort</h3>
                                <div class="cart-item-location">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span>Mumbai, Maharashtra, India</span>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-details">
                            <div class="cart-item-detail">
                                <i class="bi bi-calendar-check"></i>
                                <span>Check-in: 15 Dec 2024</span>
                            </div>
                            <div class="cart-item-detail">
                                <i class="bi bi-calendar-x"></i>
                                <span>Check-out: 18 Dec 2024</span>
                            </div>
                            <div class="cart-item-detail">
                                <i class="bi bi-people"></i>
                                <span>2 Guests</span>
                            </div>
                            <div class="cart-item-detail">
                                <i class="bi bi-moon-stars"></i>
                                <span>3 Nights</span>
                            </div>
                        </div>
                        <div class="cart-item-footer">
                            <div class="cart-item-price">
                                <span class="cart-item-price-label">Total Price</span>
                                <span class="cart-item-price-amount">₹13,500</span>
                                <span class="cart-item-price-original">₹18,000</span>
                                <span class="cart-item-savings">Save ₹4,500</span>
                            </div>
                            <div class="cart-item-actions">
                                <button class="remove-btn" onclick="removeItem(1)">
                                    <i class="bi bi-trash"></i>
                                    <span>Remove</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guest Information Form -->
                <div class="guest-info-section">
                    <div class="guest-info-card">
                        <div class="guest-info-header">
                            <h3 class="guest-info-title">
                                <i class="bi bi-person-fill"></i>
                                Guest Information
                            </h3>
                        </div>
                        <form class="guest-info-form" id="guestInfoForm" onsubmit="handleGuestInfo(event)">
                            <div class="guest-info-group">
                                <label class="guest-info-label">
                                    <i class="bi bi-person"></i>
                                    Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="guest-info-control" id="guestName" placeholder="Enter your full name" required>
                            </div>
                            <div class="guest-info-group">
                                <label class="guest-info-label">
                                    <i class="bi bi-envelope-fill"></i>
                                    Email Address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="guest-info-control" id="guestEmail" placeholder="Enter your email" required>
                            </div>
                            <div class="guest-info-group">
                                <label class="guest-info-label">
                                    <i class="bi bi-telephone-fill"></i>
                                    Mobile Number
                                    <span class="required">*</span>
                                </label>
                                <input type="tel" class="guest-info-control" id="guestMobile" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="guest-info-actions">
                                <button type="submit" class="guest-info-btn primary">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Continue
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-summary">
                <div class="summary-card">
                    <h2 class="summary-title">
                        <i class="bi bi-receipt"></i>
                        Order Summary
                    </h2>
                    
                    <div class="summary-row">
                        <span class="summary-row-label">
                            <i class="bi bi-cart-check"></i>
                            Subtotal
                        </span>
                        <span class="summary-row-value" id="subtotal">₹13,500</span>
                    </div>
                    
                    <div class="summary-row">
                        <span class="summary-row-label">
                            <i class="bi bi-receipt"></i>
                            Taxes & Fees
                        </span>
                        <span class="summary-row-value" id="taxes">₹1,350</span>
                    </div>
                    
                    <div class="summary-row discount">
                        <span class="summary-row-label">
                            <i class="bi bi-tag-fill"></i>
                            Discount
                        </span>
                        <span class="summary-row-value" id="discount">-₹4,500</span>
                    </div>
                    
                    <div class="summary-divider"></div>
                    
                    <div class="summary-total">
                        <span class="summary-total-label">Total</span>
                        <span class="summary-total-value" id="total">₹10,350</span>
                    </div>
                    
                    <div class="promo-section">
                        <div class="promo-title">
                            <i class="bi bi-tag-fill"></i>
                            Promo Code
                        </div>
                        <div class="promo-input-group">
                            <input type="text" class="promo-input" placeholder="Enter code" id="promoCode">
                            <button class="promo-btn" onclick="applyPromo()">Apply</button>
                        </div>
                    </div>
                    
                    <button class="checkout-btn" id="checkoutBtn" onclick="checkout()" disabled>
                        <i class="bi bi-lock-fill"></i>
                        <span>Proceed to Checkout</span>
                    </button>
                    
                    <div class="continue-shopping">
                        <a href="index.html">
                            <i class="bi bi-arrow-left"></i>
                            Continue Shopping
                        </a>
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
        // Handle Guest Info Form
        function handleGuestInfo(event) {
            event.preventDefault();
            const form = event.target;
            
            if (form.checkValidity()) {
                const name = document.getElementById('guestName').value;
                const email = document.getElementById('guestEmail').value;
                const mobile = document.getElementById('guestMobile').value;
                
                // Store guest info (in a real app, this would be sent to server)
                console.log('Guest information saved:', { name, email, mobile });
                
                // Enable checkout button
                const checkoutBtn = document.getElementById('checkoutBtn');
                if (checkoutBtn) {
                    checkoutBtn.disabled = false;
                }
                
                // Show success message
                alert('Information saved successfully! You can now proceed to checkout.');
            } else {
                form.reportValidity();
            }
        }
        
        // Cart data
        const cartData = {
            1: { price: 13500, originalPrice: 18000, quantity: 1 }
        };
        
        let discount = 4500;
        let promoApplied = false;
        
        // Update quantity
        function updateQuantity(itemId, change) {
            const currentQty = cartData[itemId].quantity;
            const newQty = Math.max(1, currentQty + change);
            cartData[itemId].quantity = newQty;
            
            document.getElementById(`qty-${itemId}`).textContent = newQty;
            updateCartSummary();
        }
        
        // Remove item
        function removeItem(itemId) {
            if (confirm('Are you sure you want to remove this item from your cart?')) {
                const item = document.querySelector(`[data-item-id="${itemId}"]`);
                item.style.transition = 'all 0.3s ease';
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                
                setTimeout(() => {
                    item.remove();
                    delete cartData[itemId];
                    updateCartSummary();
                    checkEmptyCart();
                }, 300);
            }
        }
        
        // Update cart summary
        function updateCartSummary() {
            let subtotal = 0;
            
            Object.keys(cartData).forEach(itemId => {
                const item = cartData[itemId];
                subtotal += item.price * item.quantity;
            });
            
            const taxes = Math.round(subtotal * 0.1);
            const total = subtotal + taxes - discount;
            
            document.getElementById('subtotal').textContent = `₹${subtotal.toLocaleString('en-IN')}`;
            document.getElementById('taxes').textContent = `₹${taxes.toLocaleString('en-IN')}`;
            document.getElementById('total').textContent = `₹${total.toLocaleString('en-IN')}`;
        }
        
        // Apply promo code
        function applyPromo() {
            const promoCode = document.getElementById('promoCode').value.trim().toUpperCase();
            
            if (!promoCode) {
                alert('Please enter a promo code');
                return;
            }
            
            // Simulate promo code validation
            const validCodes = ['SAVE20', 'WELCOME10', 'TRAVEL15'];
            
            if (validCodes.includes(promoCode)) {
                if (!promoApplied) {
                    discount = 4500;
                    promoApplied = true;
                    document.getElementById('discount').textContent = `-₹${discount.toLocaleString('en-IN')}`;
                    updateCartSummary();
                    alert('Promo code applied successfully!');
                } else {
                    alert('Promo code already applied');
                }
            } else {
                alert('Invalid promo code. Please try again.');
            }
        }
        
        // Checkout
        function checkout() {
            const itemCount = Object.keys(cartData).length;
            
            if (itemCount === 0) {
                alert('Your cart is empty!');
                return;
            }
            
            // Here you would typically redirect to checkout page
            alert('Redirecting to checkout...');
            // window.location.href = 'checkout.html';
        }
        
        // Check if cart is empty
        function checkEmptyCart() {
            if (Object.keys(cartData).length === 0) {
                const cartContent = document.getElementById('cartContent');
                cartContent.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">
                            <i class="bi bi-cart-x"></i>
                        </div>
                        <h2 class="empty-cart-title">Your cart is empty</h2>
                        <p class="empty-cart-text">Looks like you haven't added any items to your cart yet.</p>
                        <a href="index.html" class="empty-cart-btn">
                            <i class="bi bi-arrow-left"></i>
                            Start Shopping
                        </a>
                    </div>
                `;
            }
        }
        
        // Initialize
        updateCartSummary();
    </script>
</body>
</html>

