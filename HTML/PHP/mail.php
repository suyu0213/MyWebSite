<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];
        $message = $_POST["message"];

        $errorEmpty = false;
        $errorEmail = false;
        $errorPass = false;

        if(empty($name) || empty($email) || empty($pass1) || empty($pass2) || empty($message)){
            echo"<span class='form-error'>請輸入完整訊息.</span>";
            $errorEmpty = true;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo"<span class='form-error'>請輸入正鴂格式email.</span>";
            $errorEmail = true;
        }elseif($pass1 != $pass2){
            echo"<span class='form-error'>請確認密碼是否相同.</span>";
            $errorPass = true;
        }else{
            $mailToname = "suyu.com";
            $mailTo = "ivanshih0213@gmail.com";
            $mailFromName = $name;
            $mailFrom = $email;
            $mailSubject = "網站聯繫表單";
            $mailContent = "
            姓名:".$name.
            "訊息內容:
            ".$message;

            if(mail($mailTo, $mailSubject, $mailContent, $mailFrom)){
                echo"<span class='form-success'>郵件發送成功.</span>";
            }else{
                echo"<span class='form-success'>郵件發送失敗.</span>";
            }
            
        }

    }else{
        echo"<span class='form-error'>網絡錯誤,請稍後在試</span>";
    }
?>

<script>
     $("#email-name, #email-address, #pass1, #pass2, #mail-message").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty?>";
    var errorEmail = "<?php echo $errorEmail?>";
    var errorPass = "<?php echo $errorPass?>";

    if(errorEmpty == true){
        $("#email-name, #email-address, #pass1, #pass2, #mail-message").addClass("input-error");
    }

    if(errorEmail == true){
        $("#email-address").addClass("input-error");
    }

    if(errorPass == true){
        $("#pass1, #pass2").addClass("input-error");
    }
</script>