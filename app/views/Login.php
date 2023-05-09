<?php
  $root_img='http://'.$_SERVER['HTTP_HOST'] . "/public/img/";


	if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	

	$film = "";
// Truy cập giá trị của $_SESSION['film']
  if (isset($_SESSION['film'])) {
    $film = $_SESSION['film'];
    
    // Sử dụng giá trị $film ở đây
  }
  $type = "";
  if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];    
    // Sử dụng giá trị $film ở đây
  }

//   if have login
	if (isset($_SESSION['user'])) 
	{
		$loc = 'Location: ' . HOST. "/views?film=" . $film."&type=".$type;
		header($loc);
		exit();
	}

	
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if (empty($user)) {
            $error = 'Please enter your username';
        }
        else if (empty($pass)) {
            $error = 'Please enter your password';
        }
        else if (strlen($pass) < 6) {
            $error = 'Password must have at least 6 characters';
        }
        else 
        {
            // $data = get_User($user, $pass);
			$data= array('code'=>0 , 'user' => "", 'name'=>"");
        }
        $arr = $data['error'];
        if($data['code'] == 0 )
        {
            $_SESSION['user'] = $arr['username'];
            $_SESSION['name'] = $arr['name'];
           // echo $_SESSION['name'] . " " .  $_SESSION['user'];
			$loc = 'Location: ' . HOST. "/views?film=" . $film."&type=".$type;
			// print_r($loc);
		   	header($loc);
            exit();
        }
        else 
        {
            $error = $data['error'];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		$(() =>{
			$('#form').submit((e)=>{
				const email = $('#email').val().trim();
				const pass = $('#pwd').val().trim();
				if(email.length === 0)
				{
					showError("Please enter your email!" , e);
					$('#email').focus();
				}
				else if(email.length < 6)
				{
					showError("Email must at least 6 characters!", e);
					$('#email').focus();
				}
				else if(!email.includes('@'))
				{
					showError("Email must include '@'", e);
					$('#email').focus();
				}
				else if(pass.length === 0)
				{
					showError("Please enter your password!", e);
					$('#pwd').focus();
				}
				else if(pass.length <6 || pass.length > 20)
				{
					showError("Password must from 6 to 20 characters!", e);
					$('#pwd').focus();
				}
			})


			function checkSession() {
				if (!"<?php echo isset($_SESSION['user']) ? $_SESSION['user'] : ''; ?>") {
					alert("Please Login befor comment!");
				}
				else{
					// post cmt
				}
			}
			
		})

		function showError(message , e)
		{

			$('.errorMessage').html(message);
			$('.errorMessage').show();
			e.preventDefault();
		}
	</script>
</head>

<body>

	<style>
		.errorMessage {
			color: rgb(185, 0, 0);
			font-size: 14px;
		}
	</style>

	<div class="container">
		<h3 class="mt-5 mb-3 text-center text-primary">User Login</h3>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form novalidate id="form" class="border p-3 rounded" action="" method="POST">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password"
							name="password">
					</div>
					<div style="display: none;" class="errorMessage my-3">Please enter your email address.</div>
					<button class="btn btn-primary" type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>