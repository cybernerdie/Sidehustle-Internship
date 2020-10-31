<?php

    if (isset($_FILES['video'])){

        //Supported File Extensions
        $extensions = array('mp4','avi','3gp');
        $ext = explode('.', basename($_FILES['video']['name']));

        $file_ext = end($ext);
        $imageName = "sidehustle-" . rand(10000,99999) . "." . $file_ext;
        $filesize = 5242880; //5mb = 5 * 1024 * 1024

        //Compares video size and file types
        if (($_FILES['video']['size'] <= $filesize ) && in_array($file_ext, $extensions)){
            
            if (move_uploaded_file($_FILES['video']['tmp_name'],'images/'.$imageName)){
                echo "<h1>Video successfully uploaded</h1>".$_FILES['video']['size'];
            }else{
                echo '<h1>Upload Error</h1>';
            };
        }else{
            echo '<h1>Video format/size not accepted</h1>';
        };


    };



?>

<html>
    <body>
        <br>
        <br>
        <br>
        <form action='' method='POST' enctype='multipart/form-data'>
            <input type='file' name='video' />
            <input type='submit' />
        </form>
    </body>
</html>
