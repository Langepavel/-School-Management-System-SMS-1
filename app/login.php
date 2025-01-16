<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Welcome Back</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to left, #ff416c, #ff4b2b);
            color: #fff;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            gap: 30px;
            animation: fadeIn 1s ease-in-out;
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
        .welcome-container, .login-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 400px;
            transform: scale(0.95);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .welcome-container:hover, .login-container:hover {
            transform: scale(1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }
        .welcome-container h2 {
            color: #ffdf00;
            font-weight: bold;
            font-size: 2rem;
        }
        .welcome-container p {
            margin-top: 15px;
        }
        .welcome-container a {
            color: #ffdf00;
            text-decoration: none;
        }
        .login-container h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-step {
            display: none;
            animation: slideIn 0.5s ease;
        }
        .form-step.active {
            display: block;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
        }
        .form-control::placeholder {
            color: #ddd;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            border: none;
            outline: none;
        }
        .form-navigation {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background: #ffdf00;
            color: #000;
        }
        .btn-primary:hover {
            background: #ffe680;
        }
        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        .submit-btn {
            width: 100%;
            background: linear-gradient(to right, #ffdf00, #ffd000);
            color: #000;
        }
        .submit-btn:hover {
            background: linear-gradient(to right, #ffd000, #ffdf00);
        }
    </style>
</head>
<body>
    <div class="main-container container">
        <!-- Welcome Section -->
        <div class="welcome-container">
            <h2>Welcome Back!</h2>
            <p>It's great to see you again. Log in to continue exploring the amazing features we offer.</p>
            <p>New here? <a href="signup.php">Create an account</a> and join us today!</p>
        </div>

        <!-- Login Form Section -->
        <div class="login-container">
            <h3>Log In to Your Account</h3>
            <form id="loginForm">
                <!-- Steps -->
                <div class="form-step active">
                    <input type="text" id="username" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-step">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-step">
                    <button type="submit" name="login" class="btn submit-btn">Log in</button>
                </div>
                <!-- Navigation -->
                <div class="form-navigation">
                    <button type="button" class="btn btn-secondary prev-btn me-2" disabled>Back</button>
                    <button type="button" class="btn btn-primary next-btn">Next</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const steps = document.querySelectorAll(".form-step");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        let currentStep = 0;

        function updateStep() {
            steps.forEach((step, index) => {
                step.classList.toggle("active", index === currentStep);
            });
            prevBtn.disabled = currentStep === 0;
            nextBtn.style.display = currentStep === steps.length - 1 ? "none" : "inline-block";
        }

        nextBtn.addEventListener("click", () => {
            if (currentStep < steps.length - 1) currentStep++;
            updateStep();
        });

        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) currentStep--;
            updateStep();
        });

        document.getElementById("loginForm").addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Login Successful!");
        });

        updateStep();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
