<?php 
      include 'includes/TopHeader.php';  
      include 'DBValidator/contactUs.php';  
?>
<div></div>
    <section class="contact-area section-padding-100" style="background-color:#21334b;">
        <div class="container">
            <div class="row justify-content-center" >
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8" style="background-color:#fff">
                    <div class="contact-form">
                        <h5>Contact Us</h5>
                        <!-- Contact Form -->
                        <form action="contact.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message"></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit"value="Send Message" class="btn world-btn">
                                </div>
                            </div>
                        </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/GoFooter.php'; ?>