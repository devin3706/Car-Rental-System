<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo "
    <script type='text/javascript'>
    alert('You are already logged in');
    window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
    </script>";
    die;
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $accType = $_POST['accType'];
    $_SESSION['accType'] = $accType;

    echo "
    <script type='text/javascript'>
        window.location.assign('http://localhost/rentacar.lk/src/customerPortal/customerSignup.php');
    </script>
    ";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk-Login</title>
        <link rel="stylesheet" href="../styles/customerLogin.css">
        <script type="text/javascript" defer src="../js/customerLogin.js"></script>

        <style>

            *{
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            /*header Content*/
            header{
                display: inline-block;
                width: 100%;
                height: 57.917px;
            }

            .logo a img{
                height: 57.917px;
                width: 152.42px;
                padding: 0px;
                margin: 0px;
            }

            .outer-container{

                height: 100%;
                width: 100%;
                margin: 0px;
                padding: 2% 30%;
            }

            .container{
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                border: 1px solid black;
                border-radius: 7px;
                align-items: center;
            }

            .box{
                display: flex;
                margin-top: 10px;
                flex-direction: column;
                flex-wrap: wrap;
                border: 1px solid black;
                border-radius: 7px;
                align-items: center;
            }

            #renterBtn{
                float: right;
                margin: 12px 5px;
                padding: 0px 5px;
                color:white;
                font-size: 16px;
                border-radius: 6px;
                width: fit-content;
                height: 33px;
                text-align: center;
                transition-delay: 0.5s ease;
                background-color: #0094ff;
            }

            #renterBtn:hover{
                background-color: #7bbeee;
            }

            #lessorBtn{
                float: right;
                margin: 12px 5px;
                padding: 0px 5px;
                font-size: 16px;
                border-radius: 6px;
                width: fit-content;
                height: 33px;
                text-align: center;
                background-color: black;
                color: white;
                transition-delay: 0.5s ease;
            }

            #lessorBtn:hover{
                background-color: grey;
            }
        </style>

    </head>
    <body>
        <header>
            <div class="logo">
                <a href="http://localhost/rentacar.lk/src/customerPortal/index.php"><img src="../images/logo.png" alt="logo"></a>
            </div>
        </header>

        <div class="outer-container">
            <div class="container">
                <h3>Choose Account Type</h3><br>
                <form name="accType" action="<?php echo $_SERVER["PHP_SELF"];?>" target="_self" method="post">
                <div class="box">
                    <p>Join Today with a renter account<br>Browse a varity of vehicles avialable</p><br>
                    <input type="submit" id="renterBtn" value="Renter" name="accType">
                </div>
                <div class="box">
                    <p>Join today with a lessor account<br>List your vehicle with few quick steps</p><br>
                    <input type="submit" id="lessorBtn" value="Lessor" name="accType" method="get">
                </div>
                    </form>
            </div>
        </div>

    </body>
</html>