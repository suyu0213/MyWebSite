<?php
    mysqli_connect("localhost", "suyu", "02130505", "demo");

    if(mysqli_connect_errno() != ""){
        echo mysqli_connect_errno();
        echo "無法連接數據庫";
    }else{
        echo "連接數據庫";
    }
?>