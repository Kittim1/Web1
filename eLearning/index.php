<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>WELCOME  || E-LEARNING EXAM </title>
 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>     
 <link rel="stylesheet" href="css/systems.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {
    var y = document.forms["form"]["name"].value;
    var letters = /^[A-Za-z]+$/;
    if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
    }

    var z = document.forms["form"]["college"].value;
    if (z == null || z == "") {
        alert("College must be filled out.");
        return false;
    }

    var x = document.forms["form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
    }

    var a = document.forms["form"]["password"].value;
    if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
    }

    if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
    }

    var b = document.forms["form"]["cpassword"].value;
    if (a != b) {
        alert("Passwords must match.");
        return false;
    }
}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">

 <img src="image/logoo.png" alt="LOGOS" class="logo">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#login" style="font-family: Times Roman;  font-size: 20px ">ADMIN LOGIN</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>



<div class="col-md-2 col-md-offset-4">






<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyph icon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Sign-in</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:black">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>




<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Sign-Up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->








  

<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">About</p></center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>This year Gclassroom is the fundamental source classroom for students that is very useful to submit online activities and also projects and also todays relevant Elearning is part for this generation for students </p>
		<div class="smbox">
		<span><center><div class="data">100K</div><div class="det">Enrolled Students</div></center></span>
		<span><center><div class="data">10</div><div class="det">Total Departments</div></center></span>
		<span><center><div class="data">50</div><div class="det">Placed Students every Rooms</div></center></span>
		<span><center><div class="data">00</div><div class="det">Incoming Enrolled</div></center></span>
		</div>
	</div>


<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="image/banban.jpg"></center>
				<center><div class="card-title">VAN MORRE A.GUANGCO</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
				
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="image/marco.jpg"></center>
				<center><div class="card-title"> ROLLAN MARCO </div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>

				
				</div>
				</center>
			</div>


			<div class="card">
				<center><img src="image/eroc.jpg"></center>
				<center><div class="card-title">JUSTIN EROC</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>

				
				</div>
				</center>
			</div>




			<div class="card">
				<center><img src="image/namocot.jpg"></center>
				<center><div class="card-title">KITTIME IGNALIG</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>

					
				</div>
				</center>
			</div>

		</div>
	</div>









<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="computer_courses.php"><div class="s-card"><img src="image/computer-courses.png"><p>Free Online Computer Courses</p></div></a>	
		<a href="computer_courses.php"><div class="s-card"><img src="image/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		<a href="computer_courses.php"><div class="s-card"><img src="image/papers.jpg"><p>Sample Papers of Various Different Languages</p></div></a>
		<!-- <a href="computer_courses.php"><div class="s-card"><img src="image/p3.png"><p>Performance and Ranking Report</p></div></a> -->
		<a href="computer_courses.php"><div class="s-card"><img src="image/discussion.png"><p>Discussion with Tutors & Mentors</p></div></a>
		<a href="computer_courses.php"><div class="s-card"><img src="image/q1.png"><p>Daily Brain Teasing of Programs to Improve IQ</p></div></a>
		<a href="computer_courses.php"><div class="s-card"><img src="image/help.png"><p>24x7 Online Support</p></div></a>
	</div>









    
<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="image/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="image/chan.jpg"><p>Chan Clarino</p>
				<h6>Java</h6>
				<div class="rating"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="image/krystyll.jpg"><p>Krystyll Plaza</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="image/melanie.jpg"><p>Melanie Abalde</p>
				<h6>Javascript</h6>
				<div class="rating"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					Elearning was an amazing experience for me. I belong to IT department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="image/Patty.jpg"><p>Patty Aspiras</p>
				<h6>Python</h6>
				<div class="rating"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"><img src="image/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>











<!--Footer start-->
<!-- <div class="row footer"> -->
<!-- <div class="col-md-3 box">
<a href="aboutus.php" target="_blank">About us</a>
</div>
 -->



<!-- <div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div> -->
<!-- <div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div> -->



<!-- <div class="col-md-3 box"> -->
<!-- <a href="feedback.php" target="_blank">Feedback</a></div></div> -->
<!-- Modal For Developers-->







<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/banban.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">VAN MORRE A.GUANGCO</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">9972664749</h4>
		<h4 style="font-family:'typo' ">VAAC.GUANGCO.COC@PHINMAED.COM</h4>
		<h4 style="font-family:'typo' ">COLLEGE OF INFORMATION TECHNOLOGY EDUCATION</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">




<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->




















	

</body>
</html>
