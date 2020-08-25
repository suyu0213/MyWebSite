<?php
    session_start();

    // $_SESSION["name"] = "suyu";

    // echo $_SESSION;
    // print_r($_SESSION["name"]);
    //=====cookie=====
    // setcookie("id", "test", time() + 60 * 60);

    // // echo $_COOKIE["id"];
    // if(count($_COOKIE) > 0){
    //     echo "Cookies已經設定";
    // }else{
    //     echo "Cookie沒有被設定";
    // }

    //=====safety password=====
    echo md5(md5($row["id"]."password"));
?>