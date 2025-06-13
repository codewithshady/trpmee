<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Modern Auth</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --background-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --card-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            --card-shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-container {
            width: 100%;
            max-width: 450px;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 3rem;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--primary-gradient);
        }

        .auth-card:hover {
            box-shadow: var(--card-shadow-hover);
            transform: translateY(-5px);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .auth-header h2 {
            color: #2d3748;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: #718096;
            font-size: 1rem;
            margin: 0;
        }

        .step-indicator {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2rem;
            gap: 1rem;
        }

        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .step.active {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .step.completed {
            background: var(--success-gradient);
            color: white;
        }

        .step.inactive {
            background: #e2e8f0;
            color: #a0aec0;
        }

        .step-connector {
            width: 50px;
            height: 2px;
            background: #e2e8f0;
            position: relative;
        }

        .step-connector.completed {
            background: var(--success-gradient);
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
        }

        .form-floating > label {
            color: #718096;
            font-weight: 500;
        }

        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            border-radius: 12px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-success {
            background: var(--success-gradient);
            border: none;
            border-radius: 12px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(17, 153, 142, 0.3);
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            color: #065f46;
            border-left: 4px solid #10b981;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            color: #991b1b;
            border-left: 4px solid #ef4444;
        }

        .back-link {
            text-align: center;
            margin-top: 2rem;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .back-link a:hover {
            color: #5a67d8;
            transform: translateX(-3px);
        }

        .email-info {
            background: #f0f9ff;
            border: 1px solid #e0f2fe;
            border-radius: 8px;
            padding: 0.75rem;
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #0369a1;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group-text {
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-right: none;
            color: #718096;
        }

        .input-group .form-control {
            border-left: none;
        }

        .input-group:focus-within .input-group-text {
            border-color: #667eea;
            background: white;
        }

        @media (max-width: 480px) {
            .auth-card {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }
            
            .auth-header h2 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h2 id="auth-title">Forgot Password</h2>
                <p id="auth-subtitle">Enter your email to receive a verification code</p>
            </div>

            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step active" id="step1">1</div>
                <div class="step-connector" id="connector"></div>
                <div class="step inactive" id="step2">2</div>
            </div>

            <!-- Success/Error Messages -->
            <div id="success-alert" class="alert alert-success d-none">
                <i class="bi bi-check-circle me-2"></i>
                <span id="success-message">OTP sent successfully to your email!</span>
            </div>
            
            <div id="error-alert" class="alert alert-danger d-none">
                <i class="bi bi-exclamation-triangle me-2"></i>
                <span id="error-message">Something went wrong. Please try again.</span>
            </div>

            <!-- Email Form -->
            <form id="email-form" class="fade-in">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="Enter your email address" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-send me-2"></i>
                    Send OTP Code
                </button>
            </form>

            <!-- OTP and Password Reset Form -->
            <form id="otp-form" class="d-none fade-in">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-check"></i>
                    </span>
                    <input type="text" class="form-control" id="otp" name="otp" 
                           placeholder="Enter 6-digit code" maxlength="6" required>
                </div>
                <div class="email-info">
                    <i class="bi bi-info-circle me-1"></i>
                    We sent a verification code to <strong id="sent-email">your email</strong>
                </div>
                
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control" id="new_password" name="new_password" 
                           placeholder="Enter new password" required>
                </div>
                
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
                           placeholder="Confirm new password" required>
                </div>
                
                <button type="submit" class="btn btn-success w-100">
                    <i class="bi bi-check-circle me-2"></i>
                    Reset Password
                </button>
            </form>

            <!-- Back Links -->
            <div class="back-link">
                <a href="#" id="back-link">
                    <i class="bi bi-arrow-left"></i>
                    <span id="back-text">Back to Login</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form switching logic
        const emailForm = document.getElementById('email-form');
        const otpForm = document.getElementById('otp-form');
        const authTitle = document.getElementById('auth-title');
        const authSubtitle = document.getElementById('auth-subtitle');
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const connector = document.getElementById('connector');
        const backLink = document.getElementById('back-link');
        const backText = document.getElementById('back-text');
        const successAlert = document.getElementById('success-alert');
        const errorAlert = document.getElementById('error-alert');
        const sentEmail = document.getElementById('sent-email');

        // Handle email form submission
        emailForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            
            // Simulate OTP sending (replace with actual API call)
            setTimeout(() => {
                // Show success message
                successAlert.classList.remove('d-none');
                errorAlert.classList.add('d-none');
                
                // Update UI for OTP step
                authTitle.textContent = 'Reset Password';
                authSubtitle.textContent = 'Enter the verification code and your new password';
                
                // Update steps
                step1.classList.remove('active');
                step1.classList.add('completed');
                step1.innerHTML = '<i class="bi bi-check"></i>';
                step2.classList.remove('inactive');
                step2.classList.add('active');
                connector.classList.add('completed');
                
                // Switch forms
                emailForm.classList.add('d-none');
                otpForm.classList.remove('d-none');
                
                // Update email display
                sentEmail.textContent = email;
                
                // Update back link
                backText.textContent = 'Try with different email';
                
                // Hide success message after 3 seconds
                setTimeout(() => {
                    successAlert.classList.add('d-none');
                }, 3000);
                
            }, 1000);
        });

        // Handle OTP form submission
        otpForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const otp = document.getElementById('otp').value;
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            // Basic validation
            if (newPassword !== confirmPassword) {
                errorAlert.classList.remove('d-none');
                document.getElementById('error-message').textContent = 'Passwords do not match!';
                successAlert.classList.add('d-none');
                return;
            }
            
            if (newPassword.length < 6) {
                errorAlert.classList.remove('d-none');
                document.getElementById('error-message').textContent = 'Password must be at least 6 characters long!';
                successAlert.classList.add('d-none');
                return;
            }
            
            // Simulate password reset (replace with actual API call)
            setTimeout(() => {
                successAlert.classList.remove('d-none');
                document.getElementById('success-message').textContent = 'Password reset successfully! Redirecting to login...';
                errorAlert.classList.add('d-none');
                
                // Simulate redirect after 2 seconds
                setTimeout(() => {
                    // Replace with actual redirect
                    alert('Redirecting to login page...');
                }, 2000);
                
            }, 1000);
        });

        // Handle back link
        backLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (otpForm.classList.contains('d-none')) {
                // Currently on email form, go back to login
                alert('Redirecting to login page...');
            } else {
                // Currently on OTP form, go back to email form
                authTitle.textContent = 'Forgot Password';
                authSubtitle.textContent = 'Enter your email to receive a verification code';
                
                // Reset steps
                step1.classList.remove('completed');
                step1.classList.add('active');
                step1.textContent = '1';
                step2.classList.remove('active');
                step2.classList.add('inactive');
                connector.classList.remove('completed');
                
                // Switch forms
                otpForm.classList.add('d-none');
                emailForm.classList.remove('d-none');
                
                // Reset back link
                backText.textContent = 'Back to Login';
                
                // Hide alerts
                successAlert.classList.add('d-none');
                errorAlert.classList.add('d-none');
            }
        });

        // Auto-focus on OTP input and format
        document.getElementById('otp').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 6) value = value.slice(0, 6);
            e.target.value = value;
        });

        // Real-time password confirmation
        document.getElementById('confirm_password').addEventListener('input', function(e) {
            const password = document.getElementById('new_password').value;
            const confirm = e.target.value;
            
            if (confirm && password !== confirm) {
                e.target.style.borderColor = '#ef4444';
            } else {
                e.target.style.borderColor = '#e2e8f0';
            }
        });
    </script>
</body>
</html>