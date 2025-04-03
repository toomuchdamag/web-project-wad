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
			
			$desiredId = 2; // Replace with the ID you want to check for

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
			
			$desiredId = 2;

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
				  <p>As technology and computer systems become more intertwined with our daily lives, ensuring the security of the data and information they hold is essential. Many organizations and businesses now view the protection of online data as a vital concern, leading to a heightened focus on and demand for cyber security roles. The specialized skills offered in this course will equip you for a career in an expanding industry that is currently experiencing a skills shortage. </p>
                  <h3>Key Features</h3>
                  <ul>
                      <li>DMU Leicester has received the prestigious designation of a gold standard ‘Academic Centre of Excellence in Cyber Security Education’ from the National Cyber Security Centre (NCSC), the primary authority on cyber security in the UK, which operates under GCHQ. This makes DMU the first university in the East Midlands to attain this honor.</li>
                      <li>Students will delve into subjects such as cryptography, penetration testing, and professionalism in forensics and security. They will also gain valuable experience through internships and networking opportunities with top cybersecurity firms. Furthermore, students can engage in pioneering research projects with respected academics. This thorough curriculum and practical experience prepare graduates to effectively address the dynamic challenges in cybersecurity and make meaningful contributions to the field.</li>
                      <li>The program leaders are seasoned professionals committed to providing a quality education for students. They are always available to assist with any questions or concerns students may have about the accreditation process or the course material.</li>
                      <li>Students at DMU Dubai can now take advantage of the Industry Advisory Board, made up of leading experts and professionals from the enterprise sector. This board offers valuable insights and advice to ensure that the curriculum stays aligned with current industry trends and needs.</li>
                      <li>Students will benefit from labs equipped with customized PCs that have multiple operating systems, virtualization capabilities, and removable hard drives.</li>
                      <li>Additionally, the program features block teaching, which utilizes a simplified timetable allowing students to focus on one subject at a time. This approach provides more opportunities for engagement, quicker feedback, and a better balance between studying and personal life.</li>
                  </ul>
				  <br>
				  <br>
                  <h3>Course Modules</h3>
				  <button class="collapsible"><strong>First Year</strong></button>
                <div class="content">
                <?php
                // Loop through all the courses and display them dynamically
                
               
                $desiredId = 2; // Replace with the ID you want to check for
                
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
                // Loop through all the courses and display them dynamically
                
               
                $desiredId = 2; // Replace with the ID you want to check for
                
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
                // Loop through all the courses and display them dynamically
                
               
                $desiredId = 2; // Replace with the ID you want to check for
                
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
				<p>You can expect to learn through a mix of lectures, tutorials, seminars, group activities, laboratory work, hands-on sessions, and independent study. The methods of assessment and their respective weightings differ across modules. Our assessment practices align with the best teaching methods employed by faculty members each year. The indicative assessment weightings and types for each module are provided in the module information, though these are based on the current academic session and may be subject to change.</p>
				<br>
                <h3>Teaching Contact Hours</h3>
                <p>This is a full-time course. Each module is worth 30 credits. Outside of your normal timetabled hours you will be expected to conduct independent study each week to complete preparation tasks, assessments and research.</p>
                <br>
                <h3>Self-directed Study</h3>
                <p>In order to prepare for, and assimilate, the work in lectures and seminars you will be expected to use our on-line resources, participate in flipped or virtual classroom discussions on our virtual learning environment (VLE) and engage in personal study and revision for approximately 25 hours per week.</p>
            
                <h3>Graduate Careers</h3>
                <p>This program has been designed to equip students with the necessary skills for careers in the cybersecurity field. Graduates will be well-prepared for roles such as security analyst, penetration tester, forensic investigator, or cybersecurity engineer.</p>

		
				<a href="Course.html" class="hero-btn red-btn">Explore Other Courses</a>
				<a href="Apply.html" class="hero-btn red-btn">Apply Now</a>
			</div>
				<div class="about-col">
				   <img src="images/cbspic.avif" alt="">
				   
				</div>
			</div>
			<!-- Professors Section Start -->
			<section class="professors">
				<h3>Meet Our Professors</h3>
				<div class="professor-row">
					<div class="professor-box">
						<img src="images/bubby.jpg" alt="Professor 1" class="professor-img">
						<h4>Dr. Bubby McLovin</h4>
						<p>Specializes in Malware and Computer Security</p>
					</div>
					<div class="professor-box">
						<img src="images/cera.jpg" alt="Professor 2" class="professor-img">
						<h4>Dr. Michael Cera</h4>
						<p>Focused on the ethical and legal implications of AI and Cybersecurity.</p>
					</div>
					<div class="professor-box">
						<img src="images/hill.webp" alt="Professor 3" class="professor-img">
						<h4>Dr. Jonah Hill</h4>
						<p>Expert in Risk Management and Information Security.</p>
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