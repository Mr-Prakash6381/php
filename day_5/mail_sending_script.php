
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail sending script php</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            height: 400px;
            width: 300px;
            border: 1px solid red;
            display: flex;
            flex-direction: column;
            padding: 15px;
            overflow: hidden;
        }
        input,textarea{
            margin: 10px;
            font-size: 20px;
        }
        button{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <form method="post" action="mail_sending_script_2.php">
        <input type="text" name="name"  placeholder="Name :">
        <input type="email" name="email" placeholder="Email :">
        <input type="text" name="Subject" placeholder="Enter Subject :">
        <textarea name="message" id="#" cols="10" rows="10" placeholder="Enter the message"></textarea>
        <input type="submit" value="send" name="submit">
    </form>
</body>
</html>