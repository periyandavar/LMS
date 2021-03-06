<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>Library</title>
	    <meta charset="utf-8">
	    <meta name="author" content="periyandavar">
        <meta name="discription" content="library Mangement system">
	    <meta name="keywords" content="Library, LMS">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0">
 	    <link rel="icon" type="image/png" href="<?php echo baseURL()?>/static/img/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="<?php echo baseURL()?>/static/css/form.css">
        <link rel="stylesheet" type="text/css" href="<?php echo baseURL()?>/static/css/core.css">
        <link rel="stylesheet" type="text/css" href="<?php echo baseURL()?>/static/css/icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo baseURL()?>/static/css/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body> 
        <!-- header -->
	    <header>
            <img src="<?php echo baseURL()?>/static/img/lms-logo.png">
            <a href="javascript:dropDownMenuClick('user-drop-down');"><i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <div class="drop-down" id="user-drop-down">
                <ul>
                    <li onclick="openModal('sign-up-modal');dropDownMenuClick('user-drop-down');">Sign up</li>
                    <li onclick="openModal('log-in-modal');dropDownMenuClick('user-drop-down');">Login</li>
                </ul>
            </div>
            <a style="margin-right: 0;" id="searchButton" href="javascript:dropDownMenuClick('searchBar');">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
            <div class="searchBar" id="searchBar">
                <input type="text"  name="search" placeholder="Search...">
                <button>
                    <i class="fa fa-search" aria-hidden="true"></i>
                 </button>
            </div>
	    </header>
        <div class="slider-wrapper">
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/1.jpg">
            </article>
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/2.jpg">
            </article>
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/3.jpg">
            </article>
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/4.jpg">
            </article>
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/5.jpg">
            </article>
            <article class="slide">
                <img src="<?php echo baseURL()?>/static/img/cover/6.jpg">
            </article>
            <!-- <div class="control-arrows">
                <img src="user/img/symbols/prev.png">
            </div>
            <div class="control-arrows next">
                <img src="user/img/symbols/next.png">
            </div> -->
            <div class="dots">
                <div class="dot" onclick="changeSlide(0);"></div>
                <div class="dot" onclick="changeSlide(1);"></div>
                <div class="dot" onclick="changeSlide(2);"></div>
                <div class="dot" onclick="changeSlide(3);"></div>
                <div class="dot" onclick="changeSlide(4);"></div>
                <div class="dot" onclick="changeSlide(5);"></div>
            </div>
        </div>
    
        <!-- article -->
	    <article class="main">
    		<section class="section-card">
                <hr>
                <h1>Mission</h1> 
                <hr>
                    <p>The University Libraries strengthen and enhance the teaching, research and 
                       service of the University at Albany. The Libraries promote intellectual growth and 
                       creativity by developing collections, facilitating access to information resources, 
                       teaching the effective use of information resources and critical evaluation skills and 
                       offering research assistance.</p>
                <hr>
                <h1>Vision</h1>
                <hr>
                    <p>The University Libraries are engaged in learning and discovery as essential participants 
                        in the educational community. We develop, organize, provide access to and preserve materials 
                        to meet the needs of present and future generations of students and scholars. We explore and 
                        implement innovative technologies and services to deliver information and scholarly resources 
                        conveniently to users anytime/anyplace. We also provide well-equipped and functional physical 
                        spaces where students can pursue independent learning and discovery outside the classroom. 
                        The University Libraries support scholarship and research productivity and 
                        foster their vitality.</p>
                <hr>
		    </section>
            <aside>
                <div class="side-bar-right">
                    <h1>About Us</h1>
                    <hr>
                    <p>The University Libraries are engaged in learning and discovery as essential participants 
                       in the educational community. We develop, organize, provide access to and preserve materials 
                       to meet the needs of present and future generations of students and scholars.</p>
                </div>
                <div class="side-bar-right">
                    <h1>Contact Us</h1>
                    <hr>
                    <h2 class="title">Address</h2><address>
                    National Highway, Brgy. <br>
                    2 Poblacion E.B.<br>
                    Magalona., Negros<br>
                    Occidental</address>
                    <h2 class="title">Tel. nos.:</h2>
                    (034) 433-2281 / 435-0535
                    <h2 class="title">Fax:</h2>
                    ***</p>
                </div>
            </aside>
        </article>
        <br><br>
        <div class="modal-shadow" id="sign-up-modal">
            <div class="modal">
                <span class="close-modal" onclick="closeModal('sign-up-modal');">✖</span>
                <h1>User Signup</h1>
                <hr>
                <form action="#" onsubmit="event.preventDefault(); registrationFormValidator(event);" method="POST">
                    <div class="form-input-div">
                        <label>Enter Full Name</label>
                        <input class="form-control" type="text" pattern="^[a-zA-Z ]+$" id="fullname" name="fullanme" autocomplete="off" placeholder="Full Name..." required="">
                    </div>
                    <div class="form-input-div">
                        <label>Select Your Gender</label>
                        <select class="form-control select-input" name="gender" id="gender" placeholder="Full Name..." required="">
                            <option value="" style="display: none;">Select Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                    <div class="form-input-div">
                        <label>Enter Mobile Number </label>
                        <input class="form-control" pattern="^[789]\d{9}$" type="text" id="mobile" name="mobileno" maxlength="10" placeholder="Mobile Number..." autocomplete="off" required="">
                    </div>                                                    
                    <div class="form-input-div">
                        <label>Enter Email</label>
                        <input class="form-control" type="email" name="email" id="emailid" placeholder="Email..." autocomplete="off" required="">  <!--onblur="checkAvailability()"-->
                        <span id="user-availability-status" style="font-size:12px;"></span> 
                    </div>                    
                    <div class="form-input-div">
                        <label>Enter Password</label>
                        <input class="form-control" onkeyup="passStrength()" type="password" id="pass1" name="password" placeholder="Create Password..." autocomplete="off" required="">
                        <meter id="pass1str" min="0" low="40" high="95" max="100" optimum="50" style="display:none" value="0"></meter>
		                <span id="pass1msg" style="display:none"></span>
                    </div>    
                    <div class="form-input-div">
                        <label>Confirm Password </label>
                        <input class="form-control"  onkeyup="confirmPassword()" type="password" id="pass2" name="confirmpassword" placeholder="Confirm Password..." autocomplete="off" required="">
                        <span id="pass2msg" style="color:red"></span>
                    </div>
                    <div class="form-input-div">
                        <label>Verification code : </label>
                        <input type="text" id="vercode" name="vercode" maxlength="5" autocomplete="off" placeholder="Verification Code..." required="" style="width: 150px; height: 25px;">&nbsp;<img src="captcha.php">
                    </div>                                    
                    <div class="form-buttons">
                        <button type="submit" class="button-control positive">Signup</button>
                        <button type="button" onclick="closeModal('sign-up-modal');" class="button-control negative">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-shadow" id="log-in-modal">
            <div class="modal">
                <span class="close-modal" onclick="closeModal('log-in-modal');">✖</span>
                <h1>User Login</h1>
                <hr>
                <form>
                    <div class="form-input-div">
                        <label>Enter Email ID</label>
                        <input class="form-control" type="email" name="email" id="mailid" placeholder="Email..." autocomplete="off" required="">  <!--onblur="checkAvailability()"-->
                        <span id="user-availability-status" style="font-size:12px;"></span> 
                    </div>
                    <div class="form-input-div">
                        <label>Enter Password</label>
                        <input class="form-control" onkeyup="passStrength()" type="password" id="pass" name="password" placeholder="Enter Password..." autocomplete="off" required="">
                        <meter id="pass1str" min="0" low="40" high="95" max="100" optimum="50" style="display:none" value="0"></meter>
		                <span id="pass1msg" style="display:none"></span>
                    </div>
                    <div class="form-input-div">
                        <label>Verification code : </label>
                        <input type="text" name="verfcode" maxlength="5" autocomplete="off" placeholder="Verification Code..." required="" style="width: 150px; height: 25px;">&nbsp;<img src="captcha.php">
                    </div> 
                    <div class="form-buttons">
                        <button type="button" class="button-control positive">Login</button>
                    </div>
                </form>
            </div>
        </div>
	    <!-- footer -->
	    <footer>
    		LMS &#169; 2021
    	</footer>
        <script src="<?php echo baseURL()?>/static/js/core.js"></script>
        <script src="<?php echo baseURL()?>/static/js/form.js"></script>
        <script>slideshow();</script>
    </body>
</html>