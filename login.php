<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        
        /* Login Container */
        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            min-height: calc(100vh - 80px);
        }
        
        .login-wrapper {
            width: 100%;
            max-width: 480px;
        }
        
        .login-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            border: 1px solid var(--border-color);
            position: relative;
        }
        
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        .login-header {
            padding: 40px 40px 30px;
            text-align: center;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.02) 0%, rgba(15, 42, 70, 0.02) 100%);
        }
        
        .login-icon {
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
        
        .login-title {
            font-size: 32px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        
        .login-subtitle {
            font-size: 15px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        .login-body {
            padding: 40px;
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
        
        .input-wrapper {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .input-icon:hover {
            color: var(--blue);
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
        }
        
        .form-check-input {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--blue);
        }
        
        .form-check-label {
            font-size: 14px;
            color: var(--text-color);
            cursor: pointer;
            font-weight: 500;
        }
        
        .forgot-password {
            color: var(--blue);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }
        
        .login-btn {
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
        }
        
        .login-btn::before {
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
        
        .login-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        .login-btn:active {
            transform: translateY(0);
        }
        
        .login-btn i {
            font-size: 18px;
        }
        
        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 32px 0;
            color: var(--text-light);
            font-size: 14px;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }
        
        .social-login {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 24px;
        }
        
        .social-btn {
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: white;
            color: var(--text-color);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .social-btn:hover {
            border-color: var(--blue);
            background: rgba(20, 56, 92, 0.05);
            transform: translateY(-2px);
        }
        
        .social-btn i {
            font-size: 18px;
        }
        
        .signup-link {
            text-align: center;
            padding: 24px;
            background: var(--light-bg);
            border-top: 1px solid var(--border-color);
        }
        
        .signup-link-text {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 8px;
        }
        
        .signup-link a {
            color: var(--blue);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        
        .signup-link a:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }
        
        /* Login Container Spacing */
        .login-container {
            margin-top: 76px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .login-container {
                margin-top: 76px;
            }
            
            .login-container {
                padding: 40px 20px;
            }
            
            .login-header {
                padding: 32px 24px 24px;
            }
            
            .login-body {
                padding: 32px 24px;
            }
            
            .login-title {
                font-size: 28px;
            }
            
            .login-icon {
                width: 70px;
                height: 70px;
                font-size: 32px;
            }
            
            .social-login {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <div class="login-container">
        <div class="login-wrapper">
            <div class="login-card">
                <div class="login-header">
                    <div class="login-icon">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h1 class="login-title">Welcome Back</h1>
                    <p class="login-subtitle">Sign in to your account to continue</p>
                </div>
                
                <div class="login-body">
                    <form id="loginForm">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="bi bi-envelope-fill"></i>
                                Email Address
                            </label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="bi bi-lock-fill"></i>
                                Password
                            </label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" required>
                                <i class="bi bi-eye input-icon" id="togglePassword"></i>
                            </div>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                            <a href="#" class="forgot-password" style="margin-left: auto;">Forgot Password?</a>
                        </div>
                        
                        <button type="submit" class="login-btn">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Sign In</span>
                        </button>
                    </form>
                    
                    <div class="divider">Or continue with</div>
                    
                    <div class="social-login">
                        <button type="button" class="social-btn">
                            <i class="bi bi-google"></i>
                            <span>Google</span>
                        </button>
                        <button type="button" class="social-btn">
                            <i class="bi bi-facebook"></i>
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>
                
                <div class="signup-link">
                    <p class="signup-link-text">Don't have an account?</p>
                    <a href="signup.html">Create an account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('passwordInput');
        
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        }
        
        // Form submission
        const loginForm = document.getElementById('loginForm');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = this.querySelector('input[type="email"]').value;
                const password = this.querySelector('input[type="password"]').value;
                const rememberMe = this.querySelector('#rememberMe').checked;
                
                // Here you would typically send the data to a server
                console.log('Login attempt:', { email, password, rememberMe });
                
                // Simulate login success
                alert('Login successful! Redirecting...');
                // window.location.href = 'index.html';
            });
        }
    </script>
</body>
</html>

