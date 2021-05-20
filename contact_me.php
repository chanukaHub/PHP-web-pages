<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/contact_me.css">
	
	<!--JS Linked-->
	<script src ="js/contact_me.js"></script>


</head>

<!--*************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
            <!--*************************************************************************************************-->
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a href="loging.html">Login</a></li>
                <li class="li_left_C"><a href="register.html">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
            <!--*************************************************************************************************-->
        </div>

        <!-- Header Image -->
        <img src="images/finalHead.jpg" alt="Header Image" class="header_image">



        <!--navigation bar start-->
        <div class="SecNavBar">
            <!-- Change the active class according to your web page -->
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="lands.html">Lands</a>
            <a href="houses.html">Houses</a>
            <a href="apartments.html">Apartments</a>
            <a href="postAd.html">Selling</a>
            <a href="payplans.html">Payment Plans</a>
            <a class="active" href="#">Contact Us</a>
            <a href="myaccount.php">My Account</a>


            <!-- Search bar -->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <!--navigation bar end-->
    </header>
    <!--*************************************************************************************************-->
	
	
	
	
	<!--Type Code here-->
	<section id="mainSlider">
		<div class="allDiv">
		
			<!--page background image-->
			<img src='images/contactusbackground.jpg' name="slide" id="slideimg"></a>
			
			<!--Title area-->
			<div class="top_center">
				<div id="mainTitle"> Contact me </div><br>
			</div>
			<!--Title area end-->
			
			<!--start left box-->
			<div class="top_left">
				<!--hard coded details-->
				<img src="images/locationi.png" width="70px" height="70px" id="logo"/>
				<div id="mainHead">Address</div>
				<p id="descriction"><br>New Door(pvt)Ltd,<br>
				No 1060, Kandy Road,<br>
				Malabe, Sri Lanka.<br><br></p>
				
				<img src="images/emaili.png" width="70px" height="70px" id="logo"/>
				<div id="mainHead">Email</div>
				<p id="descriction"><br><br>Info@newdoor.lk<br><br></p>
				
				<img src="images/phonei.png" width="70px" height="70px" id="logo"/>
				<div id="mainHead">Phone</div>
				<p id="descriction"><br><br>General: +94758592566<br>Admin: 0762144644<br>Higher Management: 0773455576<br>Inquiring:0115673466</p>
				
				
			</div>
			<!--end left box-->
			
			<!--start right box-->
			<div class="top_right">
				<!--start form-->
				<form action = "submitContactUs.php" method="post">
					<!--add styles to input fields-->
					<div class="box">
						<h1 class ="topic">Contact me...</h1><hr class="hline2"/>
						
						<!--input fields to get user inputs-->
						<br><input type="text" id ="fname" name ="fname" placeholder="Full name" required><br/><br>
						<input type="email" id ="email1" name ="uemail" placeholder="Email" required><br/><br>
						<input type="tel" id ="phone" name ="pnumber" placeholder="Phone number" required><br/><br>
						<textarea id="message" name="message" rows="4" cols="50" placeholder="Type your Message..."></textarea><br/><br>
						
						<!--buttons-->
						<center><input type="checkbox" id ="check1" onClick="enableButton()" > I'm not a robot<br/><br/></center>
						<center><input class="submit_button" type="submit" id="submit1"  value ="Contact me" disabled>
						<input class="reset_button" type="reset" id="reg_clear" value ="Clear"></center><br/><br/>
					</div>
				</form>
				<!--end form-->
			</div>
			<!--end right box-->
		
		
		</div>
	</section>
	<!--end main body part-->
	
	
	
	
	
	
	
	
	<!--*************************************************************************************************-->

    <hr>

    <footer>
        <div class="footer">
            <table border="0" class="footerTable">
                <tr>
                    <th>About Us</th>
                    <th>Contact Us</th>
                    <th>Quick Links</th>
                    <th>NewsLetter</th>
                </tr>
                <tr>
                    <td>
                        <center>
                            <img class="smallMainLogo" src="images/MainLogo.jpg" width="70"
                                height="70"><br><b>NewDoor</b><br>
                        </center>
                        <p> <b>NewDoor established itself in 2003 in the<br>
                                Real Estate industry. It is dedicated to<br>
                                providing residential and real estate<br>
                                solutions and striving to exceed customer<br>
                                expectations through providing reliable real<br>
                                estate and financial solutions.</b>
                            <hr id="FootLine">
                        </p>

                    </td>
                    <td>
                        <p><img src="images/locationIcon.png" width="30" height="30">
                            &ensp;<b>New Door(pvt)Ltd, <br>
                                &ensp;&emsp;&emsp;No 1060, Kandy Road,<br>
                                &ensp;&emsp;&emsp;Malabe Sri Lanka.</b>
                            <hr id="FootLine">
                            <br>
                        </p>


                        <img src="images/phoneIcon.png" width="30" height="30">
                        <b>&ensp; +945785925
                            <hr id="FootLine">
                            <br>

                            <img src="images/mailIcon.png" width="30" height="30">
                            &ensp;Info@newdoor.lk
                        </b>
                        <hr id="FootLine">
                        <br>

                    </td>
                    <td class="footLinks">
                        <a class="active" href="#">Home</a><br>
                        <hr id="FootLine">
                        <a href="feedback.html">Feedback</a><br>
                        <hr id="FootLine">
                        <a href="aboutUs.html">About Us</a><br>
                        <hr id="FootLine">
                        <a href="houses.php">Houses</a><br>
                        <hr id="FootLine">
                        <a href="aboutUs.html">Lands</a><br>
                        <hr id="FootLine">
                        <a href="aboutUs.html">Apartments</a><br>
                        <hr id="FootLine">
                        <a href="postAd.php">Selling</a><br>
                        <hr id="FootLine">
                        <a href="aboutUs.html">Terms & Condition</a><br>
                        <hr id="FootLine">
                        <a href="aboutUs.html">Contact Us</a><br>
                        <hr id="FootLine">

                    </td>
                    <td>
                        <div>
                            <p><b>Subscribe to our newsletter<br>
                                    For exclusive updates</b></p>
                            <div>
                                <form method="post" action="reg.php"></form>
                                <input type="email" name="email" required placeholder="Email Address">
                                <input type="submit" id="subscribe" value="Subscribe">
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>

            </table>
            <center>
                <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,
                    Design and Development by SLIIT FOC Students.
                </h6>
            </center>
            <br>
        </div>

    </footer>

    <!--*************************************************************************************************-->
</body>

</html>

<?php
	include_once 'config.php'
?>
