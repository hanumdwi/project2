<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="asset/login/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="asset/login/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="asset/login/images/admin.png" alt="" class="image-1" width="250px">
				<form class="form-auth" action="postlogin" method="post">
                @csrf
					<h3>Login</h3>
                    <div class="container">
                    <div class="login-top">
						<h4>Not a Member? <a href="register">  Sign Up »</a> </h4>
					</div></div><br><br>
                    
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input name="email" type="email" class="form-control" id="sign-email"  placeholder="Email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input name="password" type="password" class="form-control" id="sign-password"  placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
				</form>
				<img src="asset/login/images/image-2.png" alt="" class="image-2">
			</div>
           
		</div>
		
		<script src="asset/login/js/jquery-3.3.1.min.js"></script>
		<script src="asset/login/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>