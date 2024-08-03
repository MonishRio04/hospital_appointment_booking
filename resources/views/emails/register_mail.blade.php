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
        <h2>Welcome to Our Application!</h2>
        <p>Hi {{ $content['name'] }},</p>
        <p>Thank you for registering with us. We're excited to have you on board!</p>
        <p>
            Please click the link below to verify your email address and complete your registration:
        </p>
        <p>If you did not register for an account, please disregard this email.</p>
    </div>
</body>
</html>
