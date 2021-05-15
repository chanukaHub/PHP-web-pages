<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/myaccount.css">
	
	<script src ="js/contact_us.js"></script>


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
            <a href="contact_us.php">Contact Us</a>
            <a class="active" href="#">My Account</a>


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
			<div class="top_center">
				
				<h1 class ="topic">My Account</h1>
						
				<div class="profilephoto">
					<img src="images/myaccountprofile.png" alt="profile Image" width="250px" height="250px" >
				</div>
				
			</div>
			
			<div class="inner_box">
			
			<?php
				
					//$sql = "SELECT * FROM account where username = '$_SESSION[login_user]';";
					$sql = "SELECT * FROM account where username = 1";
					$q = mysql_query($conn,$sql);
					
					$row = mysqli_fetch_assoc($q);
						
			?>

				
				<form action = "updateAccount.php" method="post">
				<div class="box">

					<br>
					<div class="formtext">Full Name</div>
					<input type="text" id ="fname" name ="fname" value= "<?php echo $row[fullname]; ?>" required><br/><br>
					<div class="formtext">Email</div>
					<input type="email" id ="email1" name ="uemail" value= "<?php echo $row[email]; ?>" required><br/><br>
					<div class="formtext">Phone number</div>
					<input type="tel" id ="phone" name ="pnumber" value= "<?php echo $row[phone]; ?>" required><br/><br>
					<div class="formtext">Address 1</div>
					<input type="text" id ="address1" name ="address1" value= "<?php echo $row[address1]; ?>" required><br/><br>
					<div class="formtext">City/Town</div>
					<input type="text" id ="address2" name ="address2" value= "<?php echo $row[town]; ?>" required><br/><br><br/><br>
					<div class="formtext">Username</div>
					<input type="text" id ="username" name ="username" value= "<?php echo $row[username]; ?>" disabled><br/>
					<div class="formtext">password</div>
					<input type="password" id ="password" name ="password" value= "<?php echo $row[password]; ?>" required><br/>
						
					
					<input class="submit_button" type="submit" id="submit1" name="submit1" value ="Save Changes">
					<input class="reset_button" type="submit" id="submit2"   name="submit2" value ="Delete Acoount"><br/><br/>

				</div>
				</form>
				
				
				
			</div>
		
	</section>
	
	
	
	
	
	
	
	
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

