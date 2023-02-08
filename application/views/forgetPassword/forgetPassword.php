<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <!-- Poppins Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Close Google Fonts -->

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Close Tailwind CDN -->

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="/css/main.css"> -->
    <link rel="stylesheet" href="/css/forgetpass.css">
    
    <!-- Close Style CSS -->

    <title>Reset Password</title>
</head>
<body>

<style>
    *{
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
    }

    body{
        height: 100vh;
        width: 100%;
        background: linear-gradient(90deg, #00DAFD, 10%, white) ;
    }

    .logo {
        position: absolute;
        top: 50%;
        right: 5%;
        transform: translate(-50%, -50%);
        width: 360px;
        padding: 30px;
    }

    .logo .logo-n{
        font-size: 60px;
        font-weight: 700;
        letter-spacing: 5px;
    }

    .logo .ggg-txt{
        font-size: 20px;
        text-align: end;
        font-weight: 100;
    }

    .logo .triangle{
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: -5%;
    }

    .logo .tri-o-r{
        border-bottom: 50px solid red;
        border-right: 25px solid transparent;
        border-left: 25px solid transparent;
        margin: 0 5px;
    }

    .logo .tri-o-g{
        border-top: 50px solid green;
        border-right: 25px solid transparent;
        border-left: 25px solid transparent;
        margin: 0 5px;
    }

    .logo .tri-o-b{
        border-bottom: 50px solid blue;
        border-right: 25px solid transparent;
        border-left: 25px solid transparent;
        margin: 0 5px;
    }


    .content{
        position: absolute;
        top: 50%;
        left: 30%;
        transform: translate(-50%, -50%);
        background: #fff;
        width: 410px;
        padding: 30px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 4);
    }

    .content .text{
        font-size: 35px;
        font-weight: 600;
        text-align: center;
    }

    .content form{
        margin-top: -20px;
    }

    .content form .data{
        height: 45px;
        width: 100%;
        margin: 40px 0;
    }

    form .data input{
        height: 100%;
        width: 100%;
        padding-left: 10px;
        font-size: 18px;
        border: 1px solid lightgray;
        text-align: center;
    }

    form .data input:focus{
        border-color: #3498db;
        border-bottom-width: 2px;
    }

    form .btn{
        margin: 30px 0;
        height: 45px;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    form .btn .inner{
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        z-index: -1;
        transition: all 0.4s;
        border: 1px solid lightcyan;
        background: -webkit-linear-gradient(right, #00DAFD, white, #00DAFD, white);
    }

    form .btn:hover .inner{
        left: 0;
        border: 1px solid lightcyan;
    }

    form .cancel{
        text-align: center;
    }

    form .cancel a{
        text-decoration: none;
        cursor: pointer;
        color: #3498db;
    }
    form .cancel a:hover{
        text-decoration: underline;
        color: #c55ffc;
    }
</style>

    <div class="center">
        <div class="logo">
            <div class="triangle">
                <span class="tri-o-r"></span>
                <span class="tri-o-g"></span>
                <span class="tri-o-b"></span>
            </div>
            <div class="logo-n">
                LEARNITY
            </div>
            <div class="ggg-txt">
                GET GAIN GROW
            </div>
        </div>
        <div class="content">
            <div class="text">Reset Password</div>
            <form action="#" method="$_POST">
                <div class="data">
                    <input type="text" placeholder="Username" class="usname">
                </div>
                <div class="data">
                    <input type="text" placeholder="New Password" class="psword" required>
                </div>
                <div class="data">
                    <input type="text" placeholder="Confirm New Password" class="confirm-psword" required>
                </div>
                <div class="btn">
                    <div class="inner"></div>
                    <button class="btn-sign"
                        style = "
                                    height: 100%;
                                    width: 100%;
                                    background: none;
                                    border: none;
                                    color: #000;
                                    font-size: 20px;
                                    font-weight: 500;
                                    text-transform: uppercase;
                                    letter-spacing: 1px;
                                    cursor: pointer;
                        
                                "
                    >
                        Reset New Password
                    </button>
                </div>
                <div class="cancel">
                    <a href="#">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php 

?>