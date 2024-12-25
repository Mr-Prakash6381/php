
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form  handling php</title>
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
        input,button,label{
            margin: 10px;
            font-size: 20px;
        }
        button{
            margin-top: 150px;
        }

    </style>
</head>
<body>
    <form method="post" action="sample.php">
        <label>Enter the name</label>
        <input type="text" name="name" placeholder="Name">
        <label>Enter the passwrod</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit" >Submit</button>
    </form>
    
</body>
</html>