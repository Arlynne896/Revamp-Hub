<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Revamp Hub</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="x-icon" href="Logo.png">
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 0px;
				background-color: #B0BEC5;
			}
			.sidenav {
			  height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: #2D2D2D;
			  overflow-x: hidden;
			  transition: 0.5s;
			  padding-top: 60px;
			}

			.sidenav a {
			  padding: 8px 8px 8px 32px;
			  text-decoration: none;
			  font-size: 25px;
			  color: #818181;
			  display: block;
			  transition: 0.3s;
			}

			.sidenav a:hover {
			  color: #FFFFFF;
			}

			.sidenav .closebtn {
			  position: absolute;
			  top: 0;
			  right: 25px;
			  font-size: 36px;
			  margin-left: 50px;
			}

			#main {
			  transition: margin-left .5s;
			  padding: 16px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
			.container {
			  border: 8px solid #523D35;
			  background-color: #BBA58F;
			  margin: 1rem;
			  padding: 2rem;
			  text-align: center;
			  border-radius: 30px;
			}

			.box {
			  display: inline-block;
			  border: 5px solid #523D35;
			  padding: 1rem;
			  vertical-align: middle;
			  border-radius: 20px;
			  margin: 10px;
			}

			.member {
			  position: relative;
			  width: 100%;
			  max-width: 300px;
			}

			img {
			  display: block;
			  width: 100%;
			  height: auto;
			  border-radius: 20px;
			}
			.overlay_ko {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  background: rgba(0, 0, 0, 0.6);
			  opacity: 0;
			  width: 100%;
			  height: 100%;
			  transition: opacity 0.5s;
			  color: #EFEFE9;
			  font-family: garamond;
			  display: flex;
			  flex-direction: column;
			  align-items: center;
			  justify-content: center;
			  border-radius: 20px;
			}

			.overlay_ko a {
			  display: inline-block;
			  color: #EFEFE9;
			  margin: 0 10px;
			  font-size: 24px;
			  text-decoration: none; 
			}

			.icon-container {
			  display: flex; 
			  justify-content: center;
			  margin-top: 10px;
			  background: transparent;
			}

			.overlay_ko:hover > * {
			  transform: translateY(20px);
			  transition: 0.5s;
			}

			.member:hover .overlay_ko {
			  opacity: 1;
			}

			.title {
			  font-size: 24px;
			  font-weight: bold;
			}

			.text {
			  font-size: 16px;
			  margin-top: 0.25em;
			}

			a.fa {
			  color: #E8D9CD;
			  text-decoration: none; 
			}

			a.fa:visited {
			  color: #E8D9CD; 
			}

			a.fa:hover {
			  color: #A6B37D; 
			}
		</style>
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="NF.php">Home</a>
			<a href="about.php">About</a>
			<a href="#">Feedback</a>
			<a href="#">Artisans</a>
			<a href="#">Contact</a>
		</div>
			<div id="main">
				<span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776; Menu</span>
				
				<div class="header">
					<h1>About Us</h1>
				</div>
				
				<h1>Who Are We?</h1>
				<p>Revamp Hub is a <b>digital platform</b> that connects clients with skilled professionals. Our clients, who have broken or unusable items with significant sentimental value, can provide these materials to us. 
				Our team of experts will restore or transform them into upcycled, meaningful products. We are dedicated to breathing new life into your preloved items and promoting sustainable, eco-friendly solutions.</p>

				<h1>What Do We Plan to Do</h1>
				<p>We aim to connect clients with skilled professionals who specialize in recycling, upgrading, and transforming materials into valuable, eco-friendly products. Through our platform, we make it easier for employees 
				and individuals to collaborate on sustainable projects. Our business also ensures that both artisans and clients are vetted to prevent any cases of fraud or exploitation.</p>
				
				<dl>
					<dt>Mission:</dt>
					<dd>
					Revamp Hub offers services for our clients and workers through a seamless platform that connects customers with skilled artisans to produce customized products using recycled materials provided by the clients. 
					Our mission is to create a space where both clients and makers can collaborate and contribute to a sustainable future.
					</dd>
					<dt>Vision:</dt>
					<dd>
					We aim to continuously improve and expand our offerings, providing high-quality services to clients, skilled artisans, and workers who value our dedication to sustainability and craftsmanship.
					</dd>
					<dt>Value Proposition:</dt>
					<dd>
					We offer a platform that allows material providers and skilled makers to collaborate efficiently, promoting sustainability  and reducing waste, while offering personalized services that cater to individual 
					client needs.
					</dd>
				</dl>
				
				<div class="container">
					<div class="box">
						<div class="member">
							<img src="images of team/arlynne.jpg" alt="arlynne.">
							<div class="overlay_ko">
								<div class="title">Arlynne T. Abalain <br> Role: Founder/CEO </div>
								<p class="text">Oversees the company’s strategy and operations</p>
								<div class="icon-container">
									<a class="fa fa-facebook" href="https://www.facebook.com/" target="_blank"></a>
									<a class="fa fa-twitter" href="https://twitter.com/"target="_blank"></a>
									<a class="fa fa-telegram" href="https://web.telegram.org/a/"target="_blank"></a>
									<a class="fa fa-instagram" href="https://www.instagram.com/"target="_blank"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="member">
							<img src="images of team/abar.jpg" alt="tristan">
							<div class="overlay_ko">
								<div class="title">Tristan Joed Abar<br> Role: Customer Success Manager</div>
								<p class="text">Ensures that both material providers and skilled makers have a smooth experience using the platform</p>
								<div class="icon-container">
									<a class="fa fa-facebook" href="https://www.facebook.com/" target="_blank"></a>
									<a class="fa fa-twitter" href="https://twitter.com/" target="_blank"></a>
									<a class="fa fa-telegram" href="https://web.telegram.org/a/" target="_blank"></a>
									<a class="fa fa-instagram" href="https://www.instagram.com/"target="_blank"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="member">
							<img src="images of team/angel.jpg" alt="angelica">
							<div class="overlay_ko">
								<div class="title">Angelica D. Almaida <br> Role: Operations Manager</div>
								<p class="text">Manages daily business activities and ensures smooth platform functionality</p>
								<div class="icon-container">
									<a class="fa fa-facebook" href="https://www.facebook.com/" target="_blank"></a>
									<a class="fa fa-twitter" href="https://twitter.com/"target="_blank"></a>
									<a class="fa fa-telegram" href="https://web.telegram.org/a/"target="_blank"></a>
									<a class="fa fa-instagram" href="https://www.instagram.com/"target="_blank"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="member">
							<img src="images of team/kier.jpg" alt="kier">
							<div class="overlay_ko">
								<div class="title">Kier Brinner Alvarez<br> Role: Platform Developer</div>
								<p class="text">Responsible for maintaining and improving the website’s functionality</p>
								<div class="icon-container">
									<a class="fa fa-facebook" href="https://www.facebook.com/" target="_blank"></a>
									<a class="fa fa-twitter" href="https://twitter.com/" target="_blank"></a>
									<a class="fa fa-telegram" href="https://web.telegram.org/a/" target="_blank"></a>
									<a class="fa fa-instagram" href="https://www.instagram.com/" target="_blank"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="member">
							<img src="images of team/arbolado.jpg" alt="sofia">
							<div class="overlay_ko">
								<div class="title">Sofia Jorien Arbolado <br> Role: Marketing Lead</div>
								<p class="text">Builds brand awareness and attracts new users to the platform</p>
								<div class="icon-container">
									<a class="fa fa-facebook"href="https://www.facebook.com/" target="_blank"></a>
									<a class="fa fa-twitter" href="https://twitter.com/"target="_blank"></a>
									<a class="fa fa-telegram" href="https://web.telegram.org/a/"target="_blank"></a>
									<a class="fa fa-instagram" href="https://www.instagram.com/"target="_blank"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<hr>
				<footer>
					<p><small>Made by Abalain, Abar, Almaida, Alvarez & Arbolado 2024 © Copyright Intended</small></p>
				</footer>
			</div>
	<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
	</body>
</html>