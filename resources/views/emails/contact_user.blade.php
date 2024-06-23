<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h1>Thank You for Contacting Us, {{ $contactData['name'] }}</h1>
    <p>We have received your message and will get back to you shortly.</p>
    <p><strong>Message:</strong> {{ $contactData['message'] }}</p>
</body>
</html>
