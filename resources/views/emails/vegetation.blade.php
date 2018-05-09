<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CNR Request</title>
</head>
<body>
    <p>Customer #: {{ $cust_num }}</p>
    <p>Ticket #: {{ $ticket_num }}</p>
    <p>Service Tech: {{ $service_tech }}</p>
    <p>Ticket Opened: {{ $creation_date }}</p>
    <p>CNR: {{ $reason }}</p>
</body>
</html>