<?php 

$message = '';
	if(!empty($_GET['username'])){
		$username = $_GET['username'];
		$pass = $_GET['pass'];
		if($username == "admin" && $pass=="123456"){
			header("Location: admin.php");
			exit();
		}else if($username == "member" && $pass=="123456"){
			header("Location: member.php");
			exit();
		}else{
			$message =  'Thông tin đăng nhập chưa đúng';
		}
	}

//  print_r($_GET);
	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'html/head.php'; ?>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="GET" action="index.php">
                    <span class="login100-form-title p-b-34">
                        Account Login
                    </span>
					<!-- <?php echo $message ?? ''; ?> -->
					<?= $message; ?>
                    <div class="wrap-input100 rs1-wrap-input100 data-validate=" Type user name">
                        <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 m-b-20" data-validate="Type password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign in
                        </button>
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <span class="txt1">
                            Forgot
                        </span>

                        <a href="#" class="txt2">
                            User name / password?
                        </a>
                    </div>

                    <div class="w-full text-center">
                        <a href="#" class="txt3">
                            Sign Up
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
            </div>
        </div>
    </div>


    <?php require_once 'html/script.php'; ?>
    <div id="dropDownSelect1"></div>



</body>

</html>