<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sign In Page</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <style>
            
        </style>
    </head>
</head>
<body>
    <div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="<?php echo base_url('Auth/auth')?>" method="post">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input name="Email" type="email" placeholder="Email" required/>
				<input name="Password" type="password" placeholder="Password" required/>
				<a href="#">Forgot your password?</a>
				<button type="submit" name="signin">Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>HTML CSS Login Form</h1>
					<p>This login form is created using pure HTML and CSS. For social icons, FontAwesome is used.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>