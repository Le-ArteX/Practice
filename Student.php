<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal Signup</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #6c9127ff 0%, #25f5fcff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background: #fff;
            padding: 32px 28px 24px 28px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(40, 60, 120, 0.18);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 18px;
            color: #2575fc;
            letter-spacing: 1px;
        }
        label {
            display: block;
            margin-top: 16px;
            font-weight: 500;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: 1px solid #cfd8dc;
            border-radius: 6px;
            font-size: 1em;
            background: #f7fafd;
            transition: border-color 0.2s;
        }
        input:focus {
            border-color: #2575fc;
            outline: none;
        }
        .error {
            color: #e53935;
            font-size: 0.92em;
            margin-top: 3px;
            min-height: 18px;
        }
        .success {
            color: #388e3c;
            font-size: 1.05em;
            margin-top: 16px;
            text-align: center;
        }
        button[type="submit"] {
            width: 100%;
            background: linear-gradient(90deg, #2575fc 0%, #6a11cb 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px 0;
            font-size: 1.08em;
            font-weight: 600;
            margin-top: 22px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Registration</h2>
        <form id="registrationForm" novalidate>
            <label>
                Full Name:
                <input type="text" id="fullName" name="fullName" required>
                <div class="error" id="fullNameError"></div>
            </label>
            <label>
                Email:
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </label>
            <label>
                Password:
                <input type="password" id="password" name="password" required>
                <div class="error" id="passwordError"></div>
            </label>
            <label>
                Confirm Password:
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div class="error" id="confirmPasswordError"></div>
            </label>
            <label>
                Phone Number:
                <input type="text" id="phone" name="phone" required>
                <div class="error" id="phoneError"></div>
            </label>
            <button type="submit">Submit</button>
            <div class="success" id="successMessage"></div>
        </form>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous errors and success message
            document.getElementById('fullNameError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';
            document.getElementById('confirmPasswordError').innerText = '';
            document.getElementById('phoneError').innerText = '';
            document.getElementById('successMessage').innerText = '';

            let isValid = true;

            // Full Name validation
            const fullName = document.getElementById('fullName').value.trim();
            if (fullName === '') {
                document.getElementById('fullNameError').innerText = 'Full Name is required.';
                isValid = false;
            }

            // Email validation
            const email = document.getElementById('email').value.trim();
            if (!email.includes('@') || !email.includes('.')) {
                document.getElementById('emailError').innerText = 'Please enter a valid email address.';
                isValid = false;
            }

            // Password validation
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                document.getElementById('passwordError').innerText = 'Password must be at least 6 characters.';
                isValid = false;
            }

            // Confirm Password validation
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                document.getElementById('confirmPasswordError').innerText = 'Passwords do not match.';
                isValid = false;
            }

            // Phone Number validation
            const phone = document.getElementById('phone').value.trim();
            if (!/^\d+$/.test(phone)) {
                document.getElementById('phoneError').innerText = 'Phone number must contain only digits.';
                isValid = false;
            }

            // Show success message if valid
            if (isValid) {
                document.getElementById('successMessage').innerText = 'Registration Successful!';
                // Optionally, reset the form:
                // document.getElementById('registrationForm').reset();
            }
        });
    </script>
</body>
</html>
