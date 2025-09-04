<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>folio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="header" id="header">
	 <div class="overlay"></div>
	<div class="container">
		<nav>
			<h1>H<span>olyman.</span></h1>

			<ul id="sidemenu">

				<li><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
				<i class="fas fa-times" onclick="closemenu()"></i>

			<a href="mycv.pdf" download class="btn btn2" id="navbtn">Download Cv</a>

			</ul>
				 <i class="fas fa-bars" onclick="openmenu()"></i>
		</nav>

			<div class="header-text">
				<p>Web/App Developer</p>
				<h1>Hi, I'm <span>Stephen</span> <br>Michael from Nigeria</h1>
			</div>
	</div>
</div>
<!-- ------------about us-------------------------------------------------------- -->

	<div class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="about-col-1">
					<img src="images/user.jpg">
				</div>

				<div class="about-col-2">
					<h1 class="subtitle">About Me</h1>
					<p>With over 10 years of experience as a web and app developer, I specialize in creating dynamic, user-friendly digital solutions that help businesses and individuals thrive online. My passion for coding and design drives me to stay ahead of the latest trends and technologies, ensuring that every project I undertake is built to the highest standards. I have successfully delivered a wide range of projects, from sleek websites to complex applications, always with a focus on clean code, intuitive user experiences, and robust functionality.</p>
					<p>
						I pride myself on my ability to understand my clients' unique needs and translate their vision into reality. Whether working on the front-end or back-end, I am committed to delivering high-quality results that exceed expectations. Let's collaborate to bring your ideas to life!
					</p>

				<div class="tab-title">
				 <p class="tab-links active-link" onclick="openTab('skills')">Skills</p>
					<p class="tab-links" onclick="openTab('experience')">Experience</p>
					<p class="tab-links" onclick="openTab('education')">Education</p>
				</div>

				<div class="tab-content active-tab" id="skills">
					<ul>
					<li><span>Web Development</span><br>Web App Development</li>
					<li><span>App Development</span><br>Building Andriod/iOS Apps</li>
					<li><span>Digital Marketing</span><br>Digital Marketing Strategies</li>
					<li><span>UI/UX</span><br>Designing Web/App interfaces</li>
					</ul>
				</div>

					<div class="tab-content" id="experience">
					<ul>
						<li><span>Web Development</span><br>Developed and maintained high-quality websites for various clients, ensuring responsive design and seamless functionality.</li>
						<li><span>App Development</span><br>Built Android/iOS apps with a focus on user-friendly interfaces and optimized performance.</li>
						<li><span>Digital Marketing</span><br>Developed and executed digital marketing strategies, including SEO and social media campaigns, to drive engagement and conversions.</li>
						<li><span>UI/UX</span><br>Designed intuitive web and mobile app interfaces, enhancing user experience and satisfaction.</li>
					</ul>
				</div>

				<div class="tab-content" id="education">
					<ul>
						<li><span>Bachelor's Degree in Computer Science</span><br>Ladoke University of Technology, Nigeria<br>Graduated: 2022</li>
						<li><span>Certified Mobile App Developer</span><br>Google Developer Certification<br>Certified: 2015</li>
						<li><span>Certified Web Developer</span><br>W3Schools Certification<br>Certified: 2013</li>
						<li><span>UI/UX Design Course</span><br>Coursera - Interaction Design Specialization<br>Completed: 2017</li>
					</ul>
				</div>



				</div>
			</div>
		</div>
	</div>

<!-- ------------end about us------------------------------------------- -->

<!-- ------------Services------------------------------->

<div class="services" id="services">
	<div class="container">
		<h1 class="subtitle">My Services</h1>
		<div class="services-list">
			<div>
				<i class="fa-solid fa-code"></i>
				<h2>Web Design</h2>
				<p>I create visually appealing and responsive websites that align with your brand identity. By focusing on user experience (UX), I ensure that your website not only looks great but also provides a seamless browsing experience for your visitors.</p>
				<a href="">Learn More</a>
			</div>

			<div>
				<i class="fab fa-app-store"></i>
				<h2>App Development</h2>
				<p>From concept to deployment, I develop robust Android and iOS applications tailored to your needs. My apps are built for performance and scalability, offering users a smooth and intuitive experience across all devices.</p>
				<a href="">Learn More</a>
			</div>

			<div>
				<i class="fas fa-object-group"></i>
				<h2>UI/UX Design</h2>
				<p>With a deep understanding of user behavior, I design interfaces that are not only aesthetically pleasing but also easy to navigate. My UI/UX designs are crafted to enhance user engagement and satisfaction, making your digital products more successful.</p>
				<a href="">Learn More</a>
			</div>

			
		</div>
	</div>
</div>
<!-- ------------end services------------------------------------------- -->


<!-- ------------Portfolio------------------------------------------- -->
<div class="portfolio" id="portfolio">
		<div class="container">
			<h1 class="subtitle">My Work</h1>
			<div class="work-list">

				<div class="work">
					<img src="images/work-1.png">
					<div class="layer">
					<h3>Social Media App</h3>
					<p>The app connect you to the talented people around the world.Download it on playstore</p>
					<a href="#"><i class="fas fa-external-link-alt"></i></a>
					</div>
					
				</div>

				<div class="work">
					<img src="images/work-2.png">
					<div class="layer">
					<h3>Music App</h3>
					<p>The app connect you to the talented people around the world.Download it on playstore</p>
					<a href="#"><i class="fas fa-external-link-alt"></i></a>
					</div>
				</div>

				<div class="work">
					<img src="images/work-3.png">
					<div class="layer">
					<h3>Online Shopping App</h3>
					<p>The app connect you to the talented people around the world.Download it on playstore</p>
					<a href="#"><i class="fas fa-external-link-alt"></i></a>
					</div>
				</div>

			</div>
			<a href="" class="btn">See More</a>
		</div>

</div>

<!-- ------------Contact us--------------------------------- -->
<div class="contact" id="contact">
	
	<div class="container">
		<div class="row">
				<div class="contact-left">
		    <h1 class="subtitle">Contact Me</h1>
		    <p><i class="fas fa-paper-plane"></i>Donholyman@gmail.com</p>
		    <p><i class="fas fa-phone-square-alt"></i>+2348104614322</p>
		    <div class="social-icons">
		        <a href=""><i class="fab fa-facebook"></i></a>
		        <a href=""><i class="fab fa-twitter-square"></i></a>
		        <a href=""><i class="fab fa-instagram"></i></a>
		        <a href=""><i class="fab fa-linkedin"></i></a>
		    </div>
		    <a href="mycv.pdf" download class="btn btn2">Download Cv</a>
		</div>


		<div class="contact-right">
			<form>
				<input type="text" name="Name" placeholder="Your Name" required>
				<input type="email" name="Email" placeholder="Your Email" required>
				<textarea name="message" rows="6" placeholder="Your Message"></textarea>
				<button type="submit" name="submit" class="btn btn2">Submit</button>



			</form>
		</div>

	</div>
	</div>

	<div class="copyright">
		<p>copyright &copy; Holyman Personal Website</p>
	</div>
		
	</div>









<script type="text/javascript">

	const tablinks = document.getElementsByClassName("tab-links");
	const tabcontents = document.getElementsByClassName("tab-content");

	function openTab(tabname){

		for(tablink of tablinks){
			tablink.classList.remove("active-link");
		}

		for(tabcontent of tabcontents){
			tabcontent.classList.remove("active-tab");
		}

		event.currentTarget.classList.add("active-link");
		document.getElementById(tabname).classList.add("active-tab");
	}

</script>


<script type="text/javascript">
	var sidemenu = document.getElementById("sidemenu");


	function openmenu(){
		sidemenu.style.right= "0";

	}

	function closemenu(){
		sidemenu.style.right= "-200px";
		
	}
</script>
</body>
</html>