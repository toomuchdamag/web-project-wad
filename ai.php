<?php
require 'DConnect.php';

// Fetch courses from the database
$sql = "SELECT * FROM `pgprogrammedata`";
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
							echo '<h1 style="text-align: center;">' . htmlspecialchars($course['PGPName']) . '</h1>';
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
							echo '<h1 style="text-align: center;">' . htmlspecialchars($course['PGPName']) . '</h1>';
						}
					}
					
				}
				?>
				  <h3>Key Details</h3>
				  <p><strong>Award:</strong> MSc<br> <strong>Duration:</strong> One year full-time, two years part-time <br> <strong>Location:</strong> DMU Dubai campus</p>
				  <h3>Course overview</h3>
				  <p>Artificial Intelligence (AI) refers to the various techniques and methods used to address problems that conventional computing struggles with. Key areas within AI include fuzzy logic, evolutionary computing, neural networks, and natural language processing. Depending on your interests, you can utilize these concepts in fields such as robotics and game development.<br><br> You will engage with topics like neural systems, natural language processing, and research methodologies while honing your skills in our specialized robotics lab, which features a range of mobile robots. The applied computational intelligence module examines knowledge-based systems and explores the historical, philosophical, and future implications of AI, with a focus on current research and practical applications. </p>
                  <h3>Key Features</h3>
                  <ul>
                      <li>The field of artificial intelligence is rapidly expanding worldwide. Students have the opportunity to explore areas such as game development, control systems, software engineering, online businesses, financial services, mobile communications, and programming.</li>
                      <li>This program module is centered around research conducted by our IAI and focuses on applying fuzzy logic, artificial neural networks, evolutionary computing, and mobile robotics, offering theoretically robust solutions to real-world challenges in decision-making and prediction.</li>
                      <li>Students will gain exposure to advanced concepts through AI laboratories equipped with state-of-the-art workstations and technologies, including the Emotiv Flex Gel Sensor Kit and Emotiv PRO, Lynxmotion Hexapod robot, Turtlebots, HTC Vive development kits, a 3D printer, and Lego EV3 Kits.</li>
                      <li>With options for full-time or part-time study, the program is designed to accommodate work and other obligations, making it suitable for both recent graduates and working professionals.</li>
                      <li>The program leaders are experienced experts committed to providing a high-quality educational experience. They are available to address any questions or concerns students may have about the accreditation process or course content.</li>
                      <li>Students at DMU Dubai can also take advantage of the Industry Advisory Board, which includes leading professionals and experts in the field. This board offers valuable insights and guidance to ensure that the curriculum stays aligned with current industry trends and needs.</li>
                      <li>Additionally, the program utilizes block teaching, which simplifies the timetable by allowing students to focus on one subject at a time. This approach enhances learning engagement, facilitates quicker feedback, and provides a better balance between studies and personal life.</li> 
                  </ul>
				  <br>
				  <br>
                  <h3>Entry Criteria</h3>
                  <p>Applicants will normally hold an undergraduate degree in any subject with a minimum pass of 2:2, or equivalent overseas qualification. <br>Professional qualifications deemed to be of equivalent standing will be considered on an individual basis. <br><br>Work experience is not a requirement.</p>
                  <br>
                  <h3>International Students</h3>
                  <p>If English is not your first language an <strong>IELTS score of 6.0</strong> overall with 5.5 in each band, or equivalent when you start the course is essential. English Language tuition, delivered by our British Council-accredited Centre for English Language Learning, is available both before and throughout the course if you need it.</p>
                  <br>
                  <h3>Course Modules</h3>
                  <ul>
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
							echo '<p><strong>Block 4:</strong> ' . htmlspecialchars($course['year1block3']) . '<br></p>';                   
                            echo '<p><strong>Block 5:</strong> ' . htmlspecialchars($course['year1block5']) . '</p>';
                        }
                    }
                }
                
                
        ?>
                </ul>
                <p>Note: All modules are indicative and based on the current academic session. Course information is correct at the time of publication and is subject to review. Exact modules may, therefore, vary for your intake in order to keep content current. If there are changes to your course we will, where reasonable, take steps to inform you as appropriate.</p>
				  <h3>Teaching and Assessment</h3>
                  <p>The course includes an induction unit, four modules, and a personal project. Instruction is mainly provided through lectures, seminars, tutorials, workshops, discussions, and e-learning resources. Assessments are conducted solely through coursework, typically comprising a mix of individual and group assignments, presentations, essays, reports, and projects.</p>
				<br>
				<h3>Contact and Learning Hours</h3>
                <p>Students will normally attend around 12 hours of timetabled taught sessions each week, with approximately 28 additional hours of self-directed independent study and research to support your assignments and dissertation per week.</p>
                <h3>Graduate Careers</h3>
                <p>Graduates in this increasingly sought-after field have a variety of career advancement opportunities. An expanding number of organizations and industries are leveraging AI for various applications, such as automating tasks, enhancing productivity, and improving decision-making through intelligent systems and data analysis. AI can aid in handling customer service questions, processing financial transactions, and deriving valuable insights from large data sets.</p>
		
				<a href="Course.html" class="hero-btn red-btn">Explore Other Courses</a>
				<a href="Apply.html" class="hero-btn red-btn">Apply Now</a>
			</div>
				<div class="about-col">
				   <img src="images/aipic.jpg" alt="">
				   
				</div>
			</div>
			<!-- Professors Section Start -->
			<section class="professors">
				<h3>Meet Our Professors</h3>
				<div class="professor-row">
					<div class="professor-box">
						<img src="images/jesse.jpg" alt="Professor 1" class="professor-img">
						<h4>Dr. Jesse Eisenberg</h4>
						<p>Specializes in Deep Learning and Neural Networks.</p>
					</div>
					<div class="professor-box">
						<img src="images/amanda.jpg" alt="Professor 2" class="professor-img">
						<h4>Dr. Amanda Seyfried</h4>
						<p>Specializes in Machine Learning, Deep Learning, and AI in Education.</p>
					</div>
					<div class="professor-box">
						<img src="images/ryan.jpg" alt="Professor 3" class="professor-img">
						<h4>Dr. Ryan Reynolds</h4>
						<p>Expert in Computer Vision and Cognitive Neuroscience.</p>
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