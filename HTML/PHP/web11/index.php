
<!DOCTYPE html>
<html lang="zh-Hant-tw">
<head>
    <title>天氣預報站</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>

    .heroImage{
        background-image: url(free2.jpg);
        border-radius: 0;
        height: 100vh;
        margin-bottom: 0;
        background-size: cover;
    }

    .alert{
        display: none;
    }

    </style>
    
</head>

<body>
    <div class="jumbotron heroImage text-center">
        <div class="container">
            <h1 class="desplay-4 text-light mt-5">天氣預報</h1>
            <p class="lead text-light">請在輸入框輸入您要查詢的<strong class="text-warning">城市名稱</strong></p>
            
            <form>
                <div class="from-group col-md-7 mx-auto">
                    <input id="city" type="text" name="city" class="form-control" placeholder="例如. London, paris...">
                </div>
            </form>

            <button id="findMyWeather" type="submit" name="submit" class="btn btn-primary btn-lg mt-3">查 詢</button>

            <div class="col-8 mx-auto mt-3">
                <div id="success" class="alert alert-success">查詢成功</div>
                <div id="fail" class="alert alert-danger">無法找到您查詢的城市!</div>
                <div id="noCity" class="alert alert-danger">請輸入城市名稱!</div>
            </div>

        </div>
        
    </div>

    <script type="text/javascript">

    $("#findMyWeather").click(function(event){
        event.preventDefault;

        $(".alert").hide();

        if($("#city").val() != ""){

            $.get("scraper.php?city="+$("#city").val(), function(data){
                if(data ==""){
                    $("#fail").fadeIn();
                }else{
                    $("#success").html(data).fadeIn();
                }
            });

        }else{
            $("#noCity").fadeIn();
        }
    });
       
    </script>

</body>
</html>
