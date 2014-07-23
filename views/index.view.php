<div class="container">
	
	<!-- ===================== Avatar + Welcome ===================== -->
	<div class="row animated fadeInDown">
		<div class="col-xs-12">
			<div id="header" class="text-center">
				<div id="photo" class="animated flipInX">
					<a href="index.php"><img src="images/avatar.png" alt="Paul Avatar" ></a>
				</div>
			</div>

			<div id="text-header" class="text-center font-thin">
				<?php if (isset($thanks)) : ?>
				
					<div id="contactAlert" class="contactMsg alert alert-success animated bounceIn" role="alert">
						<b>Thank you</b> for your message! :-)
					</div>
		
				<?php elseif (isset($error) && $error) : ?>

					<?php if($email_invalid) : ?>
						<div id="" class="contactMsg alert alert-danger animated bounceIn" role="alert">
							<b>Error:</b> Please enter a valid email address!
						</div>
					<?php elseif (isset($mailError)) : ?>
	
						<div id="" class="contactMsg alert alert-danger animated bounceIn" role="alert">
							<b>Error:</b> Oooops. An internal error means your message was not sent. Please try again or contact me at paulpires101@gmail.com
						</div>

					<?php else : ?>
						<div id="" class="contactMsg alert alert-danger animated bounceIn" role="alert">
							<b>Error:</b> Please make sure you fill in all contact details!
						</div>
					<?php endif; ?>

				<?php endif; ?>

				<h1>Hello,<br> my name is <span class="font-orange font-semibold">Paul Pires</span> and this is my resume/cv</h1>

			</div>
			<div id="download-cv">
				<a href="https://www.dropbox.com/s/e5y7hkroij3i9m3/Paul_Pires_resume.pdf" target="_blank">
					<button id="btn-download-cv" class="btn btn-primary">
						<span class="glyphicon glyphicon-cloud-download"></span>
						Download CV - PDF
					</button>
				</a>
			</div>
			<div id="double-seperator">
				<hr>
				<hr>
			</div>
		</div>
	</div>

	<div class="row"><!-- site content row -->
		<!-- LEFT SIDE -->
		<div class="col-xs-12 col-md-7">
			<div class="box animated fadeInLeft">
				<h2>About Me</h2>
				<p>I am a recent Computer Science graduate living in <b>London</b>. I have a particular interest in <b>mobile</b> and <b>web</b> development and am keen to learn more and expand my knowledge within these areas.</p>
			</div>

			<div class="box animated fadeInLeft">
				<h2>Education</h2>
				
				<section id="timeline" class="timeline-container">

					<!-- item 1 -->
					<div class="timeline-block">

						<div class="timeline-year">
							<span class="year">2010</span>
						</div>
						
						<div class="timeline-content">
							<h4>BSc (Hons) Computer Science @ City Universitiy London</h4>
							<h5 class="subtitle">September 2010 - July 2014</h5>
							<p>
								Focuses on functional programming, compilers and theory of computation.<br>
								<i>Overall Classification: <b>Class I</b></i><br><br>
								<b class="font-orange">Awards:</b><br>
								Best Student (technical stream) awarded by City University London<br>
								Worshipful Company of Information Technologists Prize for Best Student in Computer Science
							</p>
							<!-- GRADES collapsable -->
							<div class="collapse" id="grades">

								<!-- Year 3 -->
								<h5 style="color: grey;">Year 4:</h5><!-- <h5 class="subtitle"> 2013-2014</h5> -->
								<table class="table table-striped">
								  <tbody>
							  		<tr>
							  			<td>Individual Project (triple module dissertation)</td><td>86.0%</td>
						  			</tr>
									<tr>
										<td>Advanced Databases</td><td>83.2%</td>
									</tr>
									<tr>
										<td>Electronic Commerce</td><td>82.5%</td>
									</tr>
									<tr>
										<td>Introduction to Data Mining</td><td>89.0%</td>
									</tr>
									<tr>
										<td>Data Visualisation</td><td>86.2%</td>
									</tr>
									<tr>
										<td>Theory of Computation</td><td>76.0%</td>
									</tr>
								  </tbody>
								</table>

								<h5 style="color: grey;">Year 3:</h5><!-- <h5 class="subtitle"> 2013-2014</h5> -->
								<table class="table table-striped">
								  <tbody>
								  		<tr>
								  			<td>Data Stductures and Algorithms</td><td>82.6%</td>
								  		</tr>
										<tr>
											<td>Functional Programming</td><td>93.9%</td>
										</tr>
										<tr>
											<td>Language Processors</td><td>91.6%</td>
										</tr>
										<tr>
											<td>Networks and Operating Systems</td><td>93.8%</td>
										</tr>
										<tr>
											<td>Object-Oriented Analysis and Design</td><td>84.2%</td>
										</tr>
										<tr>
											<td>Professional Development in IT</td><td>75.0%</td>
										</tr>
										<tr>
											<td>Team Project (double module)</td><td>77.0%</td>
										</tr>
								  </tbody>
								</table>


								<h5 style="color: grey;">Year 2 (placement year at Fidessa PLC):</h5>
								<table class="table table-striped">
								  <tbody>
								  	<tr>
								  		<td>Professional Experience - Placement Reports (double module)</td>
								  		<td>72.0%</td>
								  	</tr>
								  </tbody>
								</table>

								<h5 style="color: grey;">Year 1:</h5>
								<table class="table table-striped">
								  <tbody>
								  		<tr>
											<td>Computation and Reasoning</td>
											<td>97.4%</td>
										</tr>
										<tr>
											<td>Mathematics for Computing</td>
											<td>88.6%</td>
										</tr>
										<tr>
											<td>Software Engineering</td>
											<td>89.8%</td>
										</tr>
										<tr>
											<td>Systems Architecture</td>
											<td>83.2%</td>
										</tr>
										<tr>
											<td>Programming in Java</td>
											<td>93.6%</td>
										</tr>
										<tr>
											<td>Business Systems</td>
											<td>85.0%</td>
										</tr>
									</tbody>
								</table>
							</div>
								<button class="btn btn-default cd-read-more" data-toggle="collapse" data-target="#grades" id="readmore-button">Read More <span id="readmore-chevron" class="glyphicon glyphicon-chevron-down" style="top: 3px;"></span></button>
						</div>
					</div>

					<div class="timeline-block">

						<div class="timeline-year">
							<!-- <img src="images/cd-icon-picture.svg" alt="Picture"> -->
							<span class="year">2007</span>
						</div>
						
						<div class="timeline-content">
							<header style="">
								<h4>A Levels @ Sheredes School</h4>
								<h5 class="subtitle">Nov 07 - June 09</h5>
								<!-- <h4 style="float: right; text-align: right;">Sheredes School</h4> -->
								<div class="clearfix"></div>
							</header>							
							<p>Mathematics <b>(A)</b>, Media Studies <b>(B)</b>, ICT <b>(C)</b> - <i>300 UCAS points</i></p>
							<p></p>
						</div>
					</div>

					<div class="timeline-block">

						<div class="timeline-year">
							<!-- <img src="images/cd-icon-picture.svg" alt="Picture"> -->
							<span class="year">2003</span>
						</div>
						
						<div class="timeline-content">
							<header style="">
								<h4>Secondary School @ Escola Básica e Secundaria da Calheta</h4>
								<h5 class="subtitle">Oct 03 - Nov 07</h5>
								<div class="clearfix"></div>
								<p>A small secondary school located in the beautiful island of <a href="https://www.facebook.com/turismodamadeira" target="_blank" style="color: #363636;">Madeira, Portugal</a>.</p>
							</header>
						</div>
					</div>

				</section>
			</div>

			<div class="box animated fadeInLeft">
				<h2>Experience</h2>
				<div class="job">
					<div class="col-xs-3">
						<h5>Fidessa PLC</h5>
						<span class="subtitle">July 2012 - July 2013</span>
					</div>

					<div class="col-xs-9">
						<h5>Implementation Consultant / Analyst Programmer</h5>
						<p>Worked on the Citi Futures and Options (CTFO) project – a new derivatives trading platform for one the world’s largest investment banks. Initial responsibilities included assisting the client in managing the systems data. As my skills developed I was given more responsibility by developing important system maintenance tools. As I gained more confidence and experience I started work on designing and implementing solutions to meet customer requirements.</p>
					</div>
				</div>

				<div class="job">
					<div class="col-xs-3">
						<h5>Crystal Chain</h5>
						<span class="subtitle">June 2009 - October 2009</span>
					</div>

					<div class="col-xs-9">
						<h5>Freelance Web Graphic Designer</h5>
						<p>My main role in this position was to use basic editing skills in Adobe Photoshop to resize and edit photographs/banners for the client company website – <a href="http://www.crystalchain.com" target="_blank">www.crystalchain.com</a>. Other work involved having to update and upload new images to the websites database.</p>
					</div>
				</div>


				<div class="job">
					<div class="col-xs-3">
						<h5>Sheredes School</h5>
						<span class="subtitle">September 2008 - June 2009</span>
					</div>

					<div class="col-xs-9">
						<h5>Teaching Assistant</h5>
						<p>In this position my main role was to help out lower school students in their lessons, more specifically to help improve on their mathematical skills. Other duties involved marking homework and assisting the teacher with photocopying and organizing files/documents.</p>
					</div>
				</div>

			</div>

		</div>

		<!-- ===================== RIGHT SIDE ===================== -->
		<div class="col-xs-12 col-md-5">

			<div class="box animated fadeInRight">
				<h2>IT Skills</h2>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 75%;">
						Java
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 75%;">
						PHP
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 70%;">
						Tcl / Tk
					</div>
				</div>
		    	<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 67%;">
						HTML / HTML 5 / CSS 3
					</div>
		    	</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 65%;">
						Unix
					</div>
				</div>
		    	<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 65%;">
						Relational DB: MySQL / Sybase
					</div>
		    	</div>
		    	<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 55%;">
						Perforce / Git
					</div>
		    	</div>
		    	<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 45%;">
						OO DB: Oracle Sql3
					</div>
		    	</div>
				<div class="progress-meter">
					<!-- from right to left -->
					<div class="meter meter-right" style="width: 25%;"><span class="meter-text">Expert</span></div>
					<div class="meter meter-right" style="width: 25%;"><span class="meter-text">Proficient</span></div>
					<div class="meter meter-right" style="width: 25%;"><span class="meter-text">Comfortable</span></div>
					<div class="meter meter-right" style="width: 25%;"><span class="meter-text">Beginner</span></div>
				</div>
			</div><!-- .box -->

			<div class="box animated fadeInRight">
				<h2>Languages</h2>
				<div class="skill">
					English (native/fluent)
					<div class="stars pull-right">
						<div style="width: 100%; height: 14px;" class="red-stars"></div>
					</div>
				</div>
				<div class="skill">
					Portuguese (working proficiency)
					<div class="stars pull-right">
						<div style="width: 60%; height: 14px;" class="red-stars"></div>
					</div>
				</div>
			</div>

			<div class="box animated fadeInRight">
				<h2>Hobbies</h2>
				<div class="hobby">
					<span class="label label-hobby">Reading about tech news (twit.tv, gizmodo.com, digg.com)</span>
					<span class="label label-hobby">Android</span>
					<span class="label label-hobby">WebDev</span>
					<span class="label label-hobby">Sketching</span>
					<span class="label label-hobby">Fitness/Football</span>
					<span class="label label-hobby">Programming</span>
				</div>
				<hr>
			</div>

			<div class="box animated fadeInRight">
				<h2>Contact</h2>
				<p>
					<img src="images/linkedin_img.png" style="width: 14px; height: 14px;"> Connect with me on <a href="https://www.linkedin.com/pub/paul-pires/42/a0/53a" target="_blank" >LinkedIn</a><br>
					<span class="glyphicon glyphicon-envelope"></span> Email me at <span class="font-orange"><a href="mailto:paulpires101@gmail.com">paulpires101@gmail.com</a></span> or leave me a message below:
				</p>
				<form name="contact" action="contact.php" method="post">
					<div class="row">

						<?php if (isset($error) && $error) : ?>
							<?php if (empty($contact_name)) : ?>
								<div class="form-group col-lg-12 has-error">
									<input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="What's your name?" required>
								</div>
							<?php else : ?>
								<div class="form-group col-lg-12">
									<input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="What's your name" required value=<?php echo "$contact_name" ?>>
								</div>
							<?php endif; ?>
						<?php else : ?>
							<div class="form-group col-lg-12">
								<input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="What's your name?" required>
							</div>
						<?php endif; ?>

						<?php if (isset($error) && $error) : ?>
							<?php if (empty($contact_email) || $email_invalid) : ?>
								<div class="form-group has_error col-lg-12 has-error">
									<div class="input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="Email" required value=<?php echo "$contact_email" ?>>
									</div>
								</div>
							<?php else : ?>
								<div class="form-group has_error col-lg-12">
									<div class="input-group">
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="Email" required value=<?php echo "$contact_email" ?>>
									</div>
								</div>
							<?php endif; ?>
						<?php else : ?>
							<div class="form-group col-lg-12">
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</span>
									<input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="Email" required>
								</div>
							</div>
						<?php endif; ?>

						<?php if (isset($error) && $error) : ?>
							<?php if (empty($contact_message)) : ?>
								<div class="form-group col-lg-12 has-error">
									<textarea name="contact_message" class="form-control" rows="6" id="contact_message" placeHolder="So, whats on your mind?" required></textarea>
								</div>
							<?php else : ?>
								<div class="form-group col-lg-12">
									<textarea name="contact_message" class="form-control" rows="6" id="contact_message" placeHolder="So, whats on your mind?" required><?php echo "$contact_message" ?></textarea>
								</div>
							<?php endif; ?>
						<?php else : ?>
							<div class="form-group col-lg-12">
								<textarea name="contact_message" class="form-control" rows="6" id="contact_message" placeHolder="So, whats on your mind?" required></textarea>
							</div>
						<?php endif; ?>

						<div class="form-group col-lg-12">
							<button type="submit" class="btn btn-default btn-inverse">Send Message</button>
						</div>

					</div>
				</form>
			</div><!-- Contact box -->
		</div><!-- RIGHT SIDE -->
	</div><!-- site content row -->

</div>

