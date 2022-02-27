
<?php 
      include 'includes/TopHeader.php';
      include 'DBValidator/donorRegister.php';
?>
    <section class="contact-area section-padding-100" style="background-color:#21334b;">
        <div class="container">
            <div class="row justify-content-center" >
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8" style="background-color:#ffffff">
                    <div class="contact-form">
                        <h5>Register Here To Donate Blood</h5>
                        <!-- Contact Form -->
                        <form action="donate.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="firstname" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your first name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="lastname" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your last name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="number" name="age" id="age" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your Age</label>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6">
                                <h6 style="font: size 1px;">Gender</h6>
                                    <input type="radio" name="gender" id="male" checked> 
                                    <label for="m">Male</label>
                                    <input type="radio" name="gender" id="female"> 
                                    <label for="f">Female</label>
                                    <input type="radio" name="gender" id="female"> 
                                    <label for="f">Other</label>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="city" id="city" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your current city</label>
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
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="tel" name="mobile" id="mobile" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your phone number</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                             <select class="form-control" name="blood" style="width: 100%;padding: 10px;border: none;border-radius: 10px;background-color: #f1f1f1;color:black;">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
						             </div>
					             </div>

                                <div class="col-12">
                                    <input type="submit" name="donate" class="btn world-btn" value="Register">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/GoFooter.php'; ?>