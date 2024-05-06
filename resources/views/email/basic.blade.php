<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Email</title>
</head>
<body>
    <h1>Welcome to Our Application!</h1>
    <p>Dear {{ $name }},</p>
    <p>thank you for reaching our contact</p>
    <p>regards,</p>
    <h4>{{env('APP_NAME')}} Team</h4>
</body>
</html>
