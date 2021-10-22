<?php
    $conn = mysqli_connect('us-cdbr-east-04.cleardb.com','b74b327ca0d25c','84c96737','heroku_9ad0d45b5e31016');
    if(mysqli_connect_errno()){
        echo "Fail";
        }
    if(!$conn){
        echo 'Gagal terhubung';
    }
?>
