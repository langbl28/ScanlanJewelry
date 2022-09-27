<?php $title="Contact Us";
include ($_SERVER['DOCUMENT_ROOT'] . '/assets/template/head.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/assets/template/header.html'); ?>

<style>
    @media (max-width: 767px) {
        .bio{ text-align: center;}
        h3{text-align:center;}
    }
</style>

    <div id="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Meet Our Family</h3>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="bio">
                            <div class="col-md-4">
                                <img href="assets/img/judy.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Judy Scanlan</h5>
                                <h6>Founder</h6>
                                <p>Judy has had a deep passion for fine jewelry from the start! She has been a part of the family business for over 40 years. The stores were passed down to her from her father, like they were passed down to him. When it comes to expertise and knowledge within this field, Judy has it all. Nothing brings her more joy than to build lasting relationships with her customers and to be there for all their special occasions!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bio">
                            <div class="col-md-4">
                                <img href="assets/img/diane.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Diana Menne</h5>
                                <p>Diana has been working side by side with Judy for over 21 years. Diana has an amazing eye for detail. It is her goal to make sure every customer leaves satisfied. Her dedication and long standing relationship with Scanlan Jewelers has made her part of the family! She truly cares and her knowledge for fine jewelry is impeccable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bio">
                            <div class="col-md-4">
                                <img href="assets/img/wendy.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Wendy Knight</h5>
                                <h6>Daughter</h6>
                                <p>Wendy has been working at the store since she was 15 years old. She now assists in running the stores with Judy and is exceedingly passionate and honored to be apart of the 4th generation of the family. She is working hard to continuing the Scanlan family business and their love for jewelry. She prides her work ethic on going above and beyond to make sure customers are satisfied. She is diligently working at continuing the Scanlan family traditions by building positive relationships and making Scanlan Jewelers your trusted family jeweler for many more generations to come.</p>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-12">
                        <div class="bio">
                            <div class="col-md-4">
                                <img href="assets/img/jamie.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Jamie Knight </h5>
                                <h6>Daughter</h6>
                                <p>Jamie was raised the Scanlan way. Jewelry is, and always has been, a big part of her life. Over the years, Judy has shown her the family tradition of dealing in fine jewelry with integrity and honorability. She has taught her to treat each customer as family. She started working in the stores at the age of 16 and is eager to carry on the family legacy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bio">
                            <div class="col-md-4">
                                <img href="assets/img/probts.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Rollie Probts</h5>
                                <p>Raleigh has been with the family for over 12 years. He has extensive knowledge in gemology. His enthusiasm is unmistakable. If you are looking for someone who listens and engages with you more than ever, Raleigh is the one for you. He is extremely helpful in finding the right fit for you. Or, if you would like to repair the former glory of a loved piece, he will make sure your vision becomes a reality. </p>
                            </div>
                        </div>
                    </div>               
                </div>
                <div class="col-md-4">
                <div class="nineteen">
                        <h5>Where it All Started</h5>
                        <img style="border-radius: 0; max-width: 100%;"href="assets/img/scanlan-1903.jpg">
                        <p>First founded in 1903, we, the Scanlan family, have nurtured and grown the business from on the road watch repairs in a horse and buggy, to the fine establishment it is today.</P>
                    </div>
                    <h4>Contact Us</h4>
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
                                        <p style="margin-top: 20px;"><a href="tel:9204659829">920.465.9829</a><br/>
                        <a href="mailto:scanlanjewelers1903@gmail.com">scanlanjewelers1903@gmail.com</a></p>
                    
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact-form-->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/assets/template/footer.html'); ?>