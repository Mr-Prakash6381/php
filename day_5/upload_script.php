<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload script file php</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" id="frm">
        <h2>Upload file using PHP</h2>
        <lable>Select file to upload</lable>
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="submit">
        <p><strong>Note:</strong>Only .pdf, .docx formats.</p>
    </form>
    
<?php
$uploadertempfile =$_FILES['file']['tmp_name']; 
$filename=$_FILES['file']['name'];
$destfile= UPLOAD_DIRECTORY . $filename;
move_uploaded_file($uploadertempfile,$destfile);
?>
</body>
</html>