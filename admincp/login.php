<?php 
    session_start();
    ob_start();
    include("../config/connectdb.php");
    include("../config/admin.php");
    
    if (isset($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $us=checkuser($user,$pass);
        if(isset($us)&&(is_array($us))&&(count($us)>0)){
            extract($us);
        if($role==1){
            $_SESSION['s_user']=$us;
            header('location:index.php');
        } else {
            $tb="Tài khoản này không có quyên";

        } 

        } else {
            $tb="Tài khoản không tồn tại";
        }
        
      }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Login</title>


    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                

            </div>
            <h3>Đăng nhập</h3>
            
        
            <form class="m-t" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên đăng nhập" name="user" required="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu" name="pass" required="password">
                </div>
                <?php 
                if(isset($tb)&&($tb!="")){
                    echo "<h3 style='color:red'>".$tb."</h3>";
                }
                ?>
                <button type="submit" name="dangnhap" class="btn btn-primary block full-width m-b">Đăng nhập</button>
                <!-- <?php
                if(isset( $txt_erro)&&( $txt_erro!="")){
                    echo "<span style='color: red;'>$txt_erro</span>";
                }
                ?> -->

            </form>
            <p class="m-t"> <small>Trang đăng nhập admin</small> </p>
        </div>
    </div



  

</body>

</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            max-width: 100%;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #5bc0de;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary:hover {
            background-color: #31b0d5;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>