<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Confirmation</title>
</head>
<body>
    <p>Dear {{ $booking['name'] }},</p>
    <p>Thank you for your booking. Here are the details:</p>
    <ul>
        <li>Name: {{ $booking['name'] }}</li>
        <li>Email: {{ $booking['email'] }}</li>
        <li>Phone: {{ $booking['phone'] }}</li>
        <li>Date: {{ $booking['date'] }}</li>
        <li>Rooms: {{ $booking['rooms'] }}</li>
        <li>Visitors: {{ $booking['visitors'] }}</li>
    </ul>
    <p>We look forward to your stay.</p>

</body>
</html>
