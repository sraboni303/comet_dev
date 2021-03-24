<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Confirmation</title>
    <style>
        .mail-body{
            padding: 50px;
            font-family: Verdana, Geneva, sans-serif;
            background: orangered;
            color: #fff;
        }
        .mail-body h1{
            font-family: impact;
        }
    </style>
</head>
<body>

    <div class="mail-body">
        <h1>{{ $mail_info['name'] }}</h1>
        <h1>{{ $mail_info['phone_number'] }}</h1>
        <h1>{{ $mail_info['username'] }}</h1>
        <h1>{{ $mail_info['email'] }}</h1>
        <a href="">Join Now</a>
    </div>
</body>
</html>
