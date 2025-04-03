<?php

require_once "configsession.php";
require_once "loginview.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - University</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .admin-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            flex-direction: column;
        }

        .login-container {
            text-align: center;
            background: linear-gradient(135deg,rgb(255, 140, 0), #2575fc);
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            transition: all 0.3s ease;
        }

        .login-container h2 {
            font-size: 24px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .login-container p {
            color: #fff;
            margin-bottom: 20px;
        }

        .login-container input {
            display: block;
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container input:focus {
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .hero-btn {
            width: 100%;
            padding: 12px;
            background-color: #fff;
            color: #2575fc;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .hero-btn:hover {
            background-color: #2575fc;
            color: #fff;
            transform: translateY(-2px);
        }

        .login-container a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .login-container a:hover {
            color: #ffdd57;
        }
        
       

        


    </style>
</head>
<body>
    <!-- Header Section -->
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="Course.html">COURSE</a></li>
                  
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    
    <!-- Admin Login Form -->
    <section class="admin-login">
        <h1>Admin Login</h1>
        <p>Access the university management panel</p>
        <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <button type="submit" class="hero-btn">Login</button>
    </form>
    </div>
    <div>
        
    <?php check_login_errors(); ?> <!-- Display errors here -->
    
    </div>

    </section>
    
   <!-- footer strt -->
		<section class="footer">
			<h4>About Us</h4>
			<p>We invite you to explore and connect with us on our social media platforms below, where you can stay updated on our latest news, events, <br> and insights, and become part of our vibrant community.</p>
			<div class="icons">
				<a href="https://www.facebook.com/dmudubai" target="_blank" aria-label="Facebook">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="https://x.com/DmuDubai" target="_blank" aria-label="Twitter">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="https://www.instagram.com/dmudubai/?hl=en" target="_blank" aria-label="Instagram">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
			<p>Made by Rodolfo and Rivaldo</p>
		</section>
		<!-- footer end -->
		<!-- Javascript for toggle menu -->
		<script>
			var navLinks = document.getElementById("navLinks");
			function showMenu(){
				navLinks.style.right = "0";
			}
			function hideMenu(){
				navLinks.style.right = "-200px";
			}
		</script>
	</body>
</html>