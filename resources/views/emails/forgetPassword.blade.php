<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 120px;
            height: auto;
        }
        h2 {
            color: #333333;
            font-weight: bold;
        }
        p {
            color: #555555;
            font-size: 16px;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            {{-- <img src="https://example.com/logo.png" alt="Logo"> --}}
        </div>
        <h2>Password Reset Request</h2>
        <p>You are receiving this email because we received a password reset request for your account.</p>
        <p>
            Please click on the link below to reset your password:
        </p>
        <p>
            <a class="btn" href="{{ url('reset-password/'.$token) }}">Reset Password</a>
        </p>
        <p>If you did not request a password reset, no further action is required.</p>
        <div class="footer">
            <p>Regards,<br>HAB</p>
        </div>
    </div>
</body>
</html>
