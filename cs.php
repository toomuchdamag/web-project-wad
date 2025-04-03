<?php
require 'DConnect.php';

// Fetch courses from the database
$sql = "SELECT * FROM `ugprogrammedata`";
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

		<style>
			body {
				color: black; /* Sets all text color to black */
			}
		</style>

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
			<?php
			
			$desiredId = 1;

			if ($courses) {
                    foreach ($courses as $course) {
                        // Check if the current course's ID matches the desired ID
                        if ($course['id'] == $desiredId) { 
							echo '<h1 style="text-align: center;">' . htmlspecialchars($course['UGPName']) . '</h1>';
						}
					}
					
				}
				?>
		</section>
		<!-- header section end -->
		<!-- about us content strt -->
		<section class="about-us">
			<div class="row">
				<div class="about-col">
				<?php
			
			$desiredId = 1;

			if ($courses) {
                    foreach ($courses as $course) {
                        // Check if the current course's ID matches the desired ID
                        if ($course['id'] == $desiredId) { 
							echo '<h1 style="text-align: center;">' . htmlspecialchars($course['UGPName']) . '</h1>';
						}
					}
					
				}
				?>
				 
				  <h3>Key Details</h3>
				  <p><strong>Award:</strong> Undergraduate BSc (Hons)<br> <strong>Duration:</strong> Three years full-time <br> <strong>Location:</strong> DMU Dubai campus</p>
				  <h3>Course overview</h3>
				  <p>As the digital landscape continues to evolve at a rapid pace, the significance of computing and its effects on our daily lives becomes increasingly crucial. Innovative technologies are regularly introduced, making the roles of software engineers, systems developers, programmers, and analysts essential in their development and creation.<br><br> Our Computer Science program emphasizes contemporary methods for software systems development, enabling you to delve into both the theoretical foundations and practical skills necessary to grasp programming language principles, software design techniques, secure web systems, computer architecture, and networking.<br><br> This course equips you for a variety of career paths, ranging from programming and development positions to software engineering, as computer technology is deeply intertwined with numerous sectors, including healthcare, education, entertainment, security, and architecture. </p>
                  <h3>Key Features</h3>
                  <ul>
                      <li>The curriculum is designed to provide newcomers to a discipline with a solid foundation, enabling them to develop essential skills and create a portfolio that supports their successful transition into their chosen undergraduate program.</li>
                      <li>For those who already possess some experience in their selected field, the curriculum will strengthen and expand their existing knowledge and capabilities.</li>
                      <li>These programs feature innovative teaching and learning strategies, offering specialized pathways across various subject areas.</li>
                      <li>The English for Academic Purposes (EAP) curriculum emphasizes the development of language skills and discipline-specific expertise.</li>
                      <li>Its unique design aligns with the UN Sustainable Development Goals (SDGs), making De Montfort University the only higher education institution in the UK designated as a global hub for one of the SDGs—specifically SDG 16, which aims to promote peace, justice, and strong institutions.</li>
                      <li>Teaching staff in specialized areas are also involved in the degree programs, ensuring that IYZ students have a strong connection to their future departments and the campus.</li>
                      <li>Program leaders, who are highly experienced professionals, are dedicated to delivering quality education and are available to address any questions or concerns regarding the accreditation process or course content.</li>
                      <li>The program's diverse student body creates valuable opportunities for networking and gaining broader cultural insights.</li>
                      <li>This program includes a four-year option that integrates the International Year Zero for applicants with non-standard entry qualifications.</li>
                  </ul>
				  <br>
				  <br>
                  <h3>Course Modules</h3>
				  <button class="collapsible"><strong>First Year</strong></button>
                <div class="content">
                   <?php
                // Loop through all the courses and display them dynamically
                
               
                $desiredId = 1; // Replace with the ID you want to check for
                
                    if ($courses) {
                    foreach ($courses as $course) {
                        // Check if the current course's ID matches the desired ID
                        if ($course['id'] == $desiredId) { // Adjust 'id' to the actual column name for course IDs
                            echo '<p><strong>Block 1:</strong> ' . htmlspecialchars($course['year1block1']) . '<br></p>';
                            echo '<p><strong>Block 2:</strong> ' . htmlspecialchars($course['year1block2']) . '<br></p>';
                            echo '<p><strong>Block 3:</strong> ' . htmlspecialchars($course['year1block3']) . '<br></p>';                     
                            echo '<p><strong>Block 4:</strong> ' . htmlspecialchars($course['year1block4']) . '</p>';
                        }
                    }
                }
                
                
        ?>
                </div>
				<button class="collapsible"><strong>Second Year</strong></button>
                <div class="content">
                <?php
               $desiredId = 1; // Replace with the ID you want to check for
                
               if ($courses) {
               foreach ($courses as $course) {
                   // Check if the current course's ID matches the desired ID
                   if ($course['id'] == $desiredId) { // Adjust 'id' to the actual column name for course IDs
                       echo '<p><strong>Block 1:</strong> ' . htmlspecialchars($course['year2block1']) . '<br></p>';
                       echo '<p><strong>Block 2:</strong> ' . htmlspecialchars($course['year2block2']) . '<br></p>';
                       echo '<p><strong>Block 3:</strong> ' . htmlspecialchars($course['year2block3']) . '<br></p>';                     
                       echo '<p><strong>Block 4:</strong> ' . htmlspecialchars($course['year2block4']) . '</p>';
                   }
               }
           }
        ?>
                </div>
				<button class="collapsible"><strong>Third Year</strong></button>
                <div class="content">
                <?php
               $desiredId = 1; // Replace with the ID you want to check for
                
               if ($courses) {
               foreach ($courses as $course) {
                   // Check if the current course's ID matches the desired ID
                   if ($course['id'] == $desiredId) { // Adjust 'id' to the actual column name for course IDs
                       echo '<p><strong>Block 1:</strong> ' . htmlspecialchars($course['year3block1']) . '<br></p>';
                       echo '<p><strong>Block 2:</strong> ' . htmlspecialchars($course['year3block2']) . '<br></p>';
                       echo '<p><strong>Block 3:</strong> ' . htmlspecialchars($course['year3block3']) . '<br></p>';                     
                       echo '<p><strong>Block 4:</strong> ' . htmlspecialchars($course['year3block4']) . '</p>';
                   }
               }
           }
        ?>
                </div>
				<br>
                <br>
				<h3>Teaching and Assessments</h3>
				<p>In this program, you will experience Education 2030, DMU’s innovative approach to course delivery. This model emphasizes block teaching, allowing you to concentrate on one subject at a time rather than juggling multiple topics simultaneously.<br><br>The course employs various teaching methods, including lectures, tutorials, and laboratory sessions led by instructors. Additionally, it incorporates student-centered learning activities, such as resource-based assignments (including online materials), collaborative group projects, independent study, and individual research or literature reviews.<br><br>Assessment will be conducted through various formats, including timed phase tests, work portfolios, programming tasks, laboratory exercises, examinations, project assignments, and both individual and group activities.</p>
				<br>
                <h3>Graduate Careers</h3>
                <p>As a graduate in Computer Science, you will have a diverse array of career opportunities at your disposal. Whether you decide to enter the workforce or continue your education, your expertise in computer science can lead to roles such as software engineer, computer engineer, systems engineer, database manager, software developer, or web developer with various multinational corporations. Additionally, you have the option to advance your academic journey through postgraduate studies in either research or taught programs, allowing you to specialize further and build upon your existing skill set.</p>

		
				<a href="Course.html" class="hero-btn red-btn">Explore Other Courses</a>
				<a href="Apply.html" class="hero-btn red-btn">Apply Now</a>
			</div>
				<div class="about-col">
				   <img src="images/cspic.png" alt="">
				   
				</div>
			</div>
			<!-- Professors Section Start -->
			<section class="professors">
				<h3>Meet Our Professors</h3>
				<div class="professor-row">
					<div class="professor-box">
						<img src="images/bea.webp" alt="Professor 1" class="professor-img">
						<h4>Dr. Bea Kristi Laus</h4>
						<p>Specializes in Machine Learning and Artificial Intelligence</p>
					</div>
					<div class="professor-box">
						<img src="images/kean.jpg" alt="Professor 2" class="professor-img">
						<h4>Dr. Keanu Reeves</h4>
						<p>Expert in Distributed Systems and Cloud Computing.</p>
					</div>
					<div class="professor-box">
						<img src="images/chad.png" alt="Professor 3" class="professor-img">
						<h4>Dr. Chadwick Boeman</h4>
						<p>Expert in Computer Architecture and RISC Design</p>
					</div>
				</div>
			</section>
			<!-- Professors Section End -->
			
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

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

        // Collapsible content script
        var coll = document.getElementsByClassName("collapsible");
        for (let i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>
		</script>
	</body>
</html>