<?php
require 'DConnect.php';

// Fetch courses from the database
$sql = "SELECT PGPName, link, image FROM pgprogrammedata";
$stmt = $pdo->query($sql);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>University Website Design</title>
		
		<!-- style.css linking here -->
		<link rel="stylesheet" href="css/style.css">
		<!-- font family linking here -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- font-awesome.min.css linking here -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- header section strt -->
		<section class="sub-header">
			<!-- nav strt -->
			<nav>
				<a href="index.html"><img class="logo-img" src="images/logo.png" alt="University Logo"></a>
				<div class="nav-links" id="navLinks">
					<i class="fa fa-times" onclick="hideMenu()"></i>
					<ul>
						<li>
							<a href="index.html">HOME</a>
						</li>
						<li>
							<a href="About.html">ABOUT</a>
						</li>
						<li>
							<a href="Course.html">COURSE</a>
						</li>
						<li>
							<a href="Apply.html">APPLY</a>
						</li>
						<li>
							<a href="Contact.html">CONTACT</a>
						</li>
					</ul>
				</div>
				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>
			<!-- nav end -->
			<h1>Postgradute Courses</h1>
		</section>
		<!-- header section end -->
		<!-- about us content strt -->
		<div class="course-container">
        <?php
        // Loop through all the courses and display them dynamically
        if ($courses) {
            foreach ($courses as $course) {
                echo '<a href="' . $course['link'] . '" class="course-item">';
                echo '<img src="images/' . $course['image'] . '" alt="' . htmlspecialchars($course['PGPName']) . '" class="course-image">';
                echo '<h3 class="course-title">' . htmlspecialchars($course['PGPName']) . '</h3>';
                echo '</a>';
            }
        } else {
            echo '<p>No courses available.</p>';
        }
        ?>
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
