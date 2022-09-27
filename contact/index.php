<?php $title="Contact Us";
include ($_SERVER['DOCUMENT_ROOT'] . '/_assets/template/head.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/_assets/template/header.html'); ?>

    <div id="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Contact Us</h3>
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-md-8">
                    <p>Selling gold or silver? Looking for the right present for that perfect someone? Do you have any question or concerns? If you do please talk to us and we can assist you!</p>
            <form action="/contact/process.php" enctype="multipart/form-data" method="POST" name="contact" id="contact" class="ucf">
			<div class="message"></div>
			<fieldset>
				<p class="field-wrapper">
					<label for="name" accesskey="U">
						<span class="required">Your Name</span>
						<input class="field" type="text" name="name" id="name" size="30" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="email" accesskey="E">
						<span class="required">Email</span>
						<input class="field" type="email" name="email" id="email" size="30" placeholder="you@youremail.com" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="phone" accesskey="P">
						<span class="required">Phone</span>
						<input class="field" type="tel" name="phone" id="phone" size="30" required>
					</label>
				</p>

				<p class="field-wrapper">
					<label for="message" accesskey="M">
						<span class="required">Message</span>
						<textarea class="field" name="message" id="message" cols="40" rows="3" required></textarea>
					</label>
				</p>

				<!-- Google reCAPTCHA -->
				<!-- change YOUR_SITE_KEY with your google recaptcha key -->
				<!-- https://developers.google.com/recaptcha/docs/start -->
				<div class="g-recaptcha" data-sitekey="6LfMoRATAAAAAJFTy8Hdq1QfIXklqFhykKU4aHM-"></div>
				<noscript>
					<div style="width: 302px; height: 352px;margin-bottom:20px;margin-left:100px;">
						<div style="width: 302px; height: 352px; position: relative;">
							<div style="width: 302px; height: 352px; position: absolute;">
								<!-- change YOUR_SITE_KEY with your google recaptcha key -->
								<iframe src="https://www.google.com/recaptcha/api/fallback?k=6LfMoRATAAAAAJFTy8Hdq1QfIXklqFhykKU4aHM-" frameborder="0" scrolling="no" style="width: 302px; height:352px; border-style: none;">
								</iframe>
							</div>
							<div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
								<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;" value=""></textarea>
							</div>
						</div>
					</div>
				</noscript>

				<!-- honeypot -->
				<p class="field-wrapper hey-honey">
					<label for="honey">
						Please leave this field empty - we're using it to stop robots submitting the form<br>
						<input class="field" type="text" name="honey" id="honey">
					</label>
				</p>

				<button type="submit" class="button primary">Send details</button>

			</fieldset>
		</form>
                                        <p style="margin-top: 20px;"><a href="tel:9204659829">(920) 465-9829</a><br/>
                        <a href="mailto:scanlanjewelers1903@gmail.com">scanlanjewelers1903@gmail.com</a></p>
                    
                </div>
                <div class="col-md-4">

                            <h4>Green Bay</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2841.262364931952!2d-88.0734340488724!3d44.591658978997806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8802e4512acf7295%3A0x19b6dd0dcc748394!2sScanlan+Jewelers+Inc!5e0!3m2!1sen!2sus!4v1517773527985" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <p>2304 Lineville Road 109<br/>
                            Suamico, WI 54313<br />
                            <a href="tel:19204659829">920.465.9829</a><br />
                            <a href="mailto:scanlanjewelers1903@gmail.com">scanlanjewelers1903@gmail.com</a><br/>
                            <a href="https://www.facebook.comjewelerswi/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Connect with Us!</a></p>
                            <table class="hours">
                                <tr><td>MON</td><td>10 am - 5 pm</td></tr>
                                <tr><td>TUE</td><td>10 am - 6 pm</td></tr>
                                <tr><td>WED</td><td>10 am - 6 pm</td></tr>
                                <tr><td>THU</td><td>10 am - 6 pm</td></tr>
                                <tr><td>FRI</td><td>10 am - 5 pm</td></tr>
                                <tr><td>SAT</td><td>10 am - 4 pm</td></tr>
                                <tr><td>SUN</td><td>closed</td></tr>
                            </table>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact-form-->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/_assets/template/footer.html'); ?>