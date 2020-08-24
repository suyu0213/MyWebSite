<?php
    $connection = mysqli_connect("localhost", "suyu", "02130505", "demo");

    if(mysqli_connect_errno()){
        die("無法連接數據庫"."<br/>");
    }
    // echo "連接數據庫";
    //SQL新增
    // $query = "INSERT INTO users(name, email, password) VALUES ('tony','tony118@gmail.com','password')";

    //SQL修改
    // $query = "update users set email='tomWang@gmail.com' where name='tom'";

    //SQL查詢
    $query = "select * from users where name like '%o%'";

    $result = mysqli_query($connection, $query);

    if($result){
        echo "作業完成"."<br/>";
        while($row = mysqli_fetch_array($result)){
            print_r($row);
        }
        
    }else{
        echo "無法找到內容"."<br/>";
        
    }
    
?>