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
			<h1 style="text-align: center;">Data Analytics MSc</h1>
		</section>
		<!-- header section end -->
		<!-- about us content strt -->
		<section class="about-us">
			<div class="row">
				<div class="about-col">
				  <h1 style="text-align: center;">Data Analytics</h1>
				  <h3>Key Details</h3>
				  <p><strong>Award:</strong> MSc<br> <strong>Duration:</strong> One year full-time, two years part-time <br> <strong>Location:</strong> DMU Dubai campus</p>
				  <h3>Course overview</h3>
				  <p>Professionals with the ability to interrogate datasets by applying analytical techniques to describe and predict business performance are in high demand worldwide.<br><br>The first semester modules focus on core topic areas such as business intelligence and analytics, data warehouse design, and big data applications, enabling you to gain insights into large multivariate datasets and apply your problem-solving abilities to explore business opportunities and challenges data scientists face when using business intelligence systems.<br><br>In the second semester, you will apply your technical knowledge and further progress your analytical expertise by focusing on specific data science subject areas such as data mining techniques and methods. You will also be encouraged to demonstrate your technical and analytical abilities in response to real-world problems during your final-semester individual project.<br><br>Our graduates will leave with sought-after skills for business intelligence and data mining roles within any field of data science. Opportunities also exist for further academic study towards a doctorate and a research career.</p>
                  <h3>Key Features</h3>
                  <ul>
                  <li>Designed to equip you with the technical expertise needed for a career in industry, this course will hone you for roles suited in the field of analytics and business intelligence. </li>
                  <li>Students will gain insight into real-world issues and solutions through research groups. You will have the opportunity to attend guest lectures and seminars. The curriculum features Apache Spark and the Hadoop Distributed File System to demonstrate data mining and machine learning algorithms.</li>
                  <li>Our dedicated computing laboratories fully equipped with HP dual-boot, all-in-one computers and a high-performance file server./li>
                  <li>The university's commitment to staying at the forefront of technological advancements is evident in its partnerships with industry, which provide students with valuable networking opportunities and enterprise connections.</li>
                  <li>Students on the Dubai campus will benefit from the same high-quality education and industry-relevant curriculum. Additionally, students will have access to state-of-the-art facilities and resources, ensuring they are well-equipped to excel in their studies and future careers in data science.  </li>
                  <li>DMU Dubai students can now benefit from the Industry Advisory Board, which comprises leading experts and professionals at the enterprise level. The board provides valuable insights and guidance to ensure the curriculum remains relevant and current with industry trends and demands.</li>
                  <li>Benefit from Block teaching, where a simplified ‘block learning’ timetable means you will study one subject at a time and have more time to engage with your learning, receive faster feedback and enjoy a better study-life balance</li>
                </ul>
				  <br>
				  <br>
                  <h3>Entry Criteria</h3>
                  <ul>
                    <li>Applicants will typically hold an undergraduate degree with a minimum pass of 2:2 or equivalent overseas qualification. </li>
                    <li>Professional qualifications deemed to be of equivalent standing will be considered on an individual basis. </li>
                    <li>Work experience is not a requirement. However, applications from those without formal qualifications but with significant professional experience in the relevant field will be considered individually.</li>
                  </ul>
                  <br>
                  <h3>International Students</h3>
                  <p>If English language was not the medium of instruction in your previous academic qualification, an IELTS score of 6.0 or equivalent when you start the course is essential. Students with other qualifications may also be considered.</p>
                  <br>
                  <h3>Course Modules</h3>
                  <ul>
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
							echo '<p><strong>Block 3:</strong> ' . htmlspecialchars($course['year1block3']) . '<br></p>';                   
                            echo '<p><strong>Block 4:</strong> ' . htmlspecialchars($course['year1block5']) . '</p>';
                        }
                    }
                }
                
                
        ?>
                </ul>
               <p>All modules are indicative and based on the current academic session. Course information is correct at the time of publication and is subject to review. Exact modules may, therefore, vary for your intake in order to keep content current. If there are changes to your course we will, where reasonable, take steps to inform you as appropriate.</p>
                <h3>Teaching and Assessment</h3>
                  <p>Teaching will normally be delivered through formal lectures, informal seminars, tutorials, workshops, discussions and e-learning packages. Assessment will usually be carried out through a combination of individual and group work, presentations, reports, projects and exams.<br><br>First semester modules introduces business intelligence, analytics and data infrastructure as well as big data applications so that you can gain insights and practice of using business intelligence systems and analytics programming to exploit multidimensional data sets.<br><br>In the second semester you are exposed to a variety of data mining techniques and methods available and interpreting the statistical results in relevant problem domains. A further module prepares students to undertake an individual research project. This project module allows you to undertake extensive research into an aspect of big data, and/or provides an opportunity to develop and demonstrate your analytical and processing abilities in response to a given practical problem.</p>
                  <br>
				<h3>Contact and Learning Hours</h3>
                <p>Students will normally attend around 12 hours of timetabled taught sessions each week, and can expect to undertake around 24 further hours of self-directed independent study and research to support your assignments and dissertation per week.</p>
                <br>
                <h3>Graduate Careers</h3>
                <p>This course prepares graduates for business intelligence and data mining roles within any target industry. There is a very high market demand for SAS expertise, and our graduates will be able to take up such opportunities. You will advance your chances to take up more general management and business development roles within industry, and to undertake academic research in this field.</p>
				<br>
                <h3>Professional Accreditations</h3>
                <p>DMU Leicester this programme is accredited by the below-mentioned bodies. Students starting at DMU Dubai then transferring to DMU Leicester to complete their studies may be eligible to achieve the UK professional accreditations associated with this programme: contact us to find out more.</p>
                <br>
                <h3>Industry Association</h3>
                <p>The Data Analytics MSc was developed and is run in conjunction with SAS. SAS is the world's largest independent business analytics company. It provides an integrated set of software products and services to more than 45,000 customer sites in 118 counties. Across the globe, both the public and private sector use SAS software to assist in their efforts to compete and excel in a climate of unprecedented economic uncertainty and globalisation.</p>
                
                <a href="Course.html" class="hero-btn red-btn">Explore Other Courses</a>
				<a href="Apply.html" class="hero-btn red-btn">Apply Now</a>
			</div>
				<div class="about-col">
				   <img src="images/dappic.jpg" alt="">
				   
				</div>
			</div>
			<!-- Professors Section Start -->
			<section class="professors">
				<h3>Meet Our Professors</h3>
				<div class="professor-row">
					<div class="professor-box">
						<img src="images/chan.avif" alt="Professor 1" class="professor-img">
						<h4>Dr. Jackie Chan</h4>
						<p>Specializes in Data Visualization and Statistical Computing.</p>
					</div>
					<div class="professor-box">
						<img src="images/keke.jpg" alt="Professor 2" class="professor-img">
						<h4>Dr. Keke Palmer</h4>
						<p>Specializes in Machine Learning and Data Mining</p>
					</div>
					<div class="professor-box">
						<img src="images/jk.jpg" alt="Professor 3" class="professor-img">
						<h4>Dr. J.K Simmons</h4>
						<p>Expert in Data Ethics and Algorithmic Accountability.</p>
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