<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        
        /* Forgot Password Container */
        .forgot-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            min-height: calc(100vh - 80px);
        }
        
        .forgot-wrapper {
            width: 100%;
            max-width: 480px;
            margin-top: 80px;
        }
        
        .forgot-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            border: 1px solid var(--border-color);
            position: relative;
        }
        
        .forgot-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        .forgot-header {
            padding: 40px 40px 30px;
            text-align: center;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.02) 0%, rgba(15, 42, 70, 0.02) 100%);
        }
        
        .forgot-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 36px;
            box-shadow: 0 8px 24px rgba(20, 56, 92, 0.3);
        }
        
        .forgot-title {
            font-size: 32px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        
        .forgot-subtitle {
            font-size: 15px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        .forgot-body {
            padding: 40px;
        }
        
        .forgot-description {
            font-size: 14px;
            color: var(--text-light);
            text-align: center;
            margin-bottom: 28px;
            line-height: 1.6;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 10px;
        }
        
        .form-label i {
            color: var(--blue);
            font-size: 16px;
        }
        
        .form-control {
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
        
        .form-control:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 4px rgba(20, 56, 92, 0.1);
        }
        
        .form-control::placeholder {
            color: var(--text-light);
        }
        
        .reset-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(20, 56, 92, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            margin-bottom: 24px;
        }
        
        .reset-btn::before {
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
        
        .reset-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .reset-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        .reset-btn:active {
            transform: translateY(0);
        }
        
        .reset-btn i {
            font-size: 18px;
        }
        
        .back-to-login {
            text-align: center;
            padding-top: 24px;
            border-top: 2px solid var(--border-color);
        }
        
        .back-to-login a {
            color: var(--blue);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .back-to-login a:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }
        
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            color: white;
            padding: 16px 0;
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
        
        .success-message {
            display: none;
            padding: 20px;
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1) 0%, rgba(40, 167, 69, 0.05) 100%);
            border: 2px solid rgba(40, 167, 69, 0.2);
            border-radius: 12px;
            margin-bottom: 24px;
            text-align: center;
        }
        
        .success-message.show {
            display: block;
        }
        
        .success-message i {
            font-size: 32px;
            color: var(--success-color);
            margin-bottom: 12px;
        }
        
        .success-message h3 {
            font-size: 18px;
            font-weight: 800;
            color: var(--success-color);
            margin-bottom: 8px;
        }
        
        .success-message p {
            font-size: 14px;
            color: var(--text-color);
            margin: 0;
        }
        
        @media (max-width: 768px) {
            .forgot-container {
                padding: 40px 20px;
            }
            
            .forgot-wrapper {
                margin-top: 70px;
            }
            
            .forgot-header {
                padding: 32px 24px 24px;
            }
            
            .forgot-body {
                padding: 32px 24px;
            }
            
            .forgot-title {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <div class="forgot-container">
        <div class="forgot-wrapper">
            <div class="forgot-card">
                <div class="forgot-header">
                    <div class="forgot-icon">
                        <i class="bi bi-key-fill"></i>
                    </div>
                    <h1 class="forgot-title">Forgot Password?</h1>
                    <p class="forgot-subtitle">No worries, we'll help you reset it</p>
                </div>
                
                <div class="forgot-body">
                    <div class="success-message" id="successMessage">
                        <i class="bi bi-check-circle-fill"></i>
                        <h3>Check Your Email</h3>
                        <p>We've sent a password reset link to your email address. Please check your inbox and follow the instructions to reset your password.</p>
                    </div>
                    
                    <form id="forgotPasswordForm" onsubmit="handleForgotPassword(event)">
                        <p class="forgot-description">
                            Enter your email address and we'll send you a link to reset your password.
                        </p>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="bi bi-envelope-fill"></i>
                                Email Address
                            </label>
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        
                        <button type="submit" class="reset-btn">
                            <i class="bi bi-send-fill"></i>
                            <span>Send Reset Link</span>
                        </button>
                    </form>
                    
                    <div class="back-to-login">
                        <a href="login.html">
                            <i class="bi bi-arrow-left"></i>
                            <span>Back to Login</span>
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
        function handleForgotPassword(event) {
            event.preventDefault();
            const form = event.target;
            
            if (form.checkValidity()) {
                const email = form.querySelector('input[type="email"]').value;
                
                // Here you would typically send the reset request to a server
                console.log('Password reset requested for:', email);
                
                // Hide form and show success message
                form.style.display = 'none';
                document.getElementById('successMessage').classList.add('show');
            } else {
                form.reportValidity();
            }
        }
    </script>
</body>
</html>

