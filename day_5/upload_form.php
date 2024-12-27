<html>
<head>
    <title>Upload form</title>
    <style>
        *{
            padding:0px;
            margin:0px;
        }
        body{
            display:flex;
            justify-content:Center;
            align-items:center;
        }
        form{
            width:400px;
            height:500px;
            border-radius:2px;
            background:red;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        lable,input{
            padding:15px;
        }
    </style>
</head>

<body>
    <form action="classes.php" method="post" enctype="multipart/form-data">
        <lable>Select a file to Upload:</lable>
        <input type="file" name="file" id="file">
        <input type="submit" value="Submit">
    </form>
</body>

</html>