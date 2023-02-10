<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BKash Payment</title>
</head>
<body>
        <h2>Hello {{$customerInfo->customer->name}} ,</h2>

        <p>Your payment {{$bkas->tottalPrice}} has received successfully!</p>
        <p>Thank you!</p>
        <p style="text-decoration: underline">sincerely</p>
        <span>Admin</span>
</body>
</html>


