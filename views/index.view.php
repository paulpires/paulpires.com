<div class="container paper paper-curl">	
	<div class="row animated fadeInDown">
		<div class="col-xs-12">
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

				<h1>PaulPires.com<br> got something interesting to talk about? contact me below :-)<span class="font-orange font-semibold"></span></h1>
			</div>
			<div id="double-seperator">
				<hr>
				<hr>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="box animated fadeInDown" style="width: 70%; margin: 0 auto;">
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
		</div>
	</div>
</div>
