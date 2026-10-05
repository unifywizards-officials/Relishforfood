<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        /* Add your email-specific CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .logo {
            max-width: 100px;
            height: auto;
            margin: 0 auto;
        }
        .message {
            text-align: center;
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <img class="logo" src="{{ asset('path/to/your/logo.png') }}" alt="Your Logo"> -->
            <img class="logo" src="logo" alt="Your Logo">
        </div>
        <div class="message">
            <p>Hi, {{$mailData->full_name}}</p>
            <p>We've received your request, and we will get back to you as soon as possible.</p>
            <p>Thanks</p>
            <p>Unify Medicraft</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Unify Medicraft. All rights reserved.
        </div>
    </div>
</body>
</html>
