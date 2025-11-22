<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Fayyaz Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/telegraf" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <style>
        
        /* Signup Container */
        .signup-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            min-height: calc(100vh - 80px);
        }
        
        .signup-wrapper {
            width: 100%;
            max-width: 520px;
        }
        
        .signup-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            border: 1px solid var(--border-color);
            position: relative;
        }
        
        .signup-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--blue) 0%, var(--blue-dark) 100%);
        }
        
        .signup-header {
            padding: 40px 40px 30px;
            text-align: center;
            background: linear-gradient(135deg, rgba(20, 56, 92, 0.02) 0%, rgba(15, 42, 70, 0.02) 100%);
        }
        
        .signup-icon {
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
        
        .signup-title {
            font-family: 'Telegraf', sans-serif;
            font-size: 32px;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        
        .signup-subtitle {
            font-size: 15px;
            color: var(--text-light);
            font-weight: 500;
        }
        
        .signup-body {
            padding: 40px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
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
        
        .form-label .required {
            color: #e74c3c;
            margin-left: 4px;
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
        
        .password-strength {
            margin-top: 8px;
            font-size: 12px;
            color: var(--text-light);
        }
        
        .password-strength-bar {
            height: 4px;
            background: var(--border-color);
            border-radius: 2px;
            margin-top: 6px;
            overflow: hidden;
        }
        
        .password-strength-fill {
            height: 100%;
            width: 0%;
            background: var(--success-color);
            transition: all 0.3s ease;
        }
        
        .password-strength-fill.weak {
            background: #e74c3c;
            width: 33%;
        }
        
        .password-strength-fill.medium {
            background: #f39c12;
            width: 66%;
        }
        
        .password-strength-fill.strong {
            background: var(--success-color);
            width: 100%;
        }
        
        .form-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 24px;
        }
        
        .form-check-input {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--blue);
            margin-top: 2px;
            flex-shrink: 0;
        }
        
        .form-check-label {
            font-size: 13px;
            color: var(--text-color);
            cursor: pointer;
            font-weight: 500;
            line-height: 1.5;
        }
        
        .form-check-label a {
            color: var(--blue);
            text-decoration: none;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        .signup-btn {
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
        
        .signup-btn::before {
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
        
        .signup-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .signup-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 56, 92, 0.4);
        }
        
        .signup-btn:active {
            transform: translateY(0);
        }
        
        .signup-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        
        .signup-btn i {
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
        
        .social-signup {
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
        
        .login-link {
            text-align: center;
            padding: 24px;
            background: var(--light-bg);
            border-top: 1px solid var(--border-color);
        }
        
        .login-link-text {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 8px;
        }
        
        .login-link a {
            color: var(--blue);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        
        .login-link a:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }
        
        /* Footer */
        /* Signup Container Spacing */
        .signup-container {
            margin-top: 76px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .signup-container {
                margin-top: 76px;
            }
            
            .signup-container {
                padding: 40px 20px;
            }
            
            .signup-header {
                padding: 32px 24px 24px;
            }
            
            .signup-body {
                padding: 32px 24px;
            }
            
            .signup-title {
                font-size: 28px;
            }
            
            .signup-icon {
                width: 70px;
                height: 70px;
                font-size: 32px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .social-signup {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/components/header.php'; ?>
    <?php include __DIR__ . '/components/navbar.php'; ?>

    <div class="signup-container">
        <div class="signup-wrapper">
            <div class="signup-card">
                <div class="signup-header">
                    <div class="signup-icon">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <h1 class="signup-title">Create Account</h1>
                    <p class="signup-subtitle">Join us and start your travel journey</p>
                </div>
                
                <div class="signup-body">
                    <form id="signupForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-person-fill"></i>
                                    First Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="John" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">
                                    <i class="bi bi-person-fill"></i>
                                    Last Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <label class="form-label">
                                <i class="bi bi-envelope-fill"></i>
                                Email Address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-control" placeholder="john.doe@example.com" required>
                        </div>
                        
                        <div class="form-group full-width">
                            <label class="form-label">
                                <i class="bi bi-telephone-fill"></i>
                                Phone Number
                                <span class="required">*</span>
                            </label>
                            <input type="tel" class="form-control" placeholder="+91 9876543210" required>
                        </div>
                        
                        <div class="form-group full-width">
                            <label class="form-label">
                                <i class="bi bi-lock-fill"></i>
                                Password
                                <span class="required">*</span>
                            </label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="passwordInput" placeholder="Create a strong password" required>
                                <i class="bi bi-eye input-icon" id="togglePassword"></i>
                            </div>
                            <div class="password-strength">
                                <span id="passwordStrengthText">Password strength</span>
                                <div class="password-strength-bar">
                                    <div class="password-strength-fill" id="passwordStrengthFill"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <label class="form-label">
                                <i class="bi bi-lock-fill"></i>
                                Confirm Password
                                <span class="required">*</span>
                            </label>
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Confirm your password" required>
                                <i class="bi bi-eye input-icon" id="toggleConfirmPassword"></i>
                            </div>
                            <div id="passwordMatch" style="margin-top: 8px; font-size: 12px; display: none;"></div>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                            <label class="form-check-label" for="agreeTerms">
                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                <span class="required">*</span>
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label" for="newsletter">
                                Subscribe to our newsletter for travel deals and updates
                            </label>
                        </div>
                        
                        <button type="submit" class="signup-btn" id="signupBtn">
                            <i class="bi bi-person-check-fill"></i>
                            <span>Create Account</span>
                        </button>
                    </form>
                    
                    <div class="divider">Or sign up with</div>
                    
                    <div class="social-signup">
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
                
                <div class="login-link">
                    <p class="login-link-text">Already have an account?</p>
                    <a href="login.html">Sign in here</a>
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
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const passwordInput = document.getElementById('passwordInput');
        const confirmPasswordInput = document.getElementById('confirmPasswordInput');
        
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        }
        
        if (toggleConfirmPassword && confirmPasswordInput) {
            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPasswordInput.setAttribute('type', type);
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        }
        
        // Password strength checker
        const passwordStrengthFill = document.getElementById('passwordStrengthFill');
        const passwordStrengthText = document.getElementById('passwordStrengthText');
        
        if (passwordInput && passwordStrengthFill && passwordStrengthText) {
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let strengthText = 'Password strength';
                
                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/\d/)) strength++;
                if (password.match(/[^a-zA-Z\d]/)) strength++;
                
                passwordStrengthFill.classList.remove('weak', 'medium', 'strong');
                
                if (password.length === 0) {
                    strengthText = 'Password strength';
                } else if (strength <= 2) {
                    passwordStrengthFill.classList.add('weak');
                    strengthText = 'Weak password';
                } else if (strength === 3) {
                    passwordStrengthFill.classList.add('medium');
                    strengthText = 'Medium password';
                } else {
                    passwordStrengthFill.classList.add('strong');
                    strengthText = 'Strong password';
                }
                
                passwordStrengthText.textContent = strengthText;
            });
        }
        
        // Password match checker
        const passwordMatch = document.getElementById('passwordMatch');
        
        if (passwordInput && confirmPasswordInput && passwordMatch) {
            function checkPasswordMatch() {
                if (confirmPasswordInput.value.length === 0) {
                    passwordMatch.style.display = 'none';
                    return;
                }
                
                passwordMatch.style.display = 'block';
                
                if (passwordInput.value === confirmPasswordInput.value) {
                    passwordMatch.innerHTML = '<i class="bi bi-check-circle-fill" style="color: var(--success-color);"></i> Passwords match';
                    passwordMatch.style.color = 'var(--success-color)';
                } else {
                    passwordMatch.innerHTML = '<i class="bi bi-x-circle-fill" style="color: #e74c3c;"></i> Passwords do not match';
                    passwordMatch.style.color = '#e74c3c';
                }
            }
            
            passwordInput.addEventListener('input', checkPasswordMatch);
            confirmPasswordInput.addEventListener('input', checkPasswordMatch);
        }
        
        // Form submission
        const signupForm = document.getElementById('signupForm');
        const signupBtn = document.getElementById('signupBtn');
        
        if (signupForm) {
            signupForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = {
                    firstName: this.querySelector('input[type="text"]').value,
                    lastName: this.querySelectorAll('input[type="text"]')[1].value,
                    email: this.querySelector('input[type="email"]').value,
                    phone: this.querySelector('input[type="tel"]').value,
                    password: passwordInput.value,
                    confirmPassword: confirmPasswordInput.value,
                    agreeTerms: this.querySelector('#agreeTerms').checked,
                    newsletter: this.querySelector('#newsletter').checked
                };
                
                // Validate password match
                if (formData.password !== formData.confirmPassword) {
                    alert('Passwords do not match!');
                    return;
                }
                
                // Validate password strength
                if (formData.password.length < 8) {
                    alert('Password must be at least 8 characters long!');
                    return;
                }
                
                // Here you would typically send the data to a server
                console.log('Signup attempt:', formData);
                
                // Disable button during submission
                signupBtn.disabled = true;
                signupBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> <span>Creating Account...</span>';
                
                // Simulate signup success
                setTimeout(() => {
                    alert('Account created successfully! Please check your email to verify your account.');
                    // window.location.href = 'login.html';
                    signupBtn.disabled = false;
                    signupBtn.innerHTML = '<i class="bi bi-person-check-fill"></i> <span>Create Account</span>';
                }, 2000);
            });
        }
        
        // Navbar scroll effect
    </script>
</body>
</html>

