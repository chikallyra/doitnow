<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Question Received</title>
</head>
<body>
    <h1>New Question Received</h1>
    <p><strong>First Name:</strong> {{ $question['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $question['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $question['email'] }}</p>
    <p><strong>Phone:</strong> {{ $question['phone'] }}</p>
    <p><strong>Message:</strong> {{ $question['message'] }}</p>
</body>
</html>
