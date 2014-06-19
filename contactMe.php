<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="contactMe.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
<title>Contact me</title>
</head>

<body>
<?php error_reporting(0); ?>
<div id="holder" style="min-width:1000px; margin: 0 auto;">
    <div id="wrapDiv1">
        <div id="headerDiv" style="white-space: nowrap;"><a id="home" href="index.html">Georgia Gkolfinopoulou</a>
            <h3>Computer Engineer</h3>
        </div> <!--end of headerDiv -->
        
        <div id="cornerDiv">
            <a id="cvLink" href="myCV.html">MY CV</a>
            <a id="workSampleLink" href="myWorkSample.html">MY WORK SAMPLE</a>
            <img src="images\cornerImage.png" width="384" height="192" align="right" hspace="80" />	 
        </div> <!--end of cornerDiv -->
    <div> <!--end of wrapDiv1 -->
    

	<?php 
        $result=$name=$mail=$subject=$message="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $message = str_replace("\n.", "\n..", $message);
            $message = wordwrap($message, 70, "\r\n");
            $to="geo1987gr@gmail.com";
            $body="From ".$name." with e-mail: ".$mail." message: ".$message;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            $headers .= "From: sender@sender.com" . "\r\n";
            if (mail ($to, $subject, $body, $headers)) { 
                $result=$result." Thank you for your message. Redirecting at homepage.";
                echo "<div id=\"resultMsg\">".$result."</div>";
                header("refresh:5; url=index.html" );
            }else{ 
                $result=$result." Something went wrong, please try again.";
                echo "<div id=\"resultMsg\">".$result."</div>";
            }
        }
      ?>
      
      <div id="wrapDiv2">
        <div id="formDiv">
            <section id="contactSection">
            <form method="post" name="contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="name" placeholder="Name" size="50"  autocomplete="off" autofocus><br />
            <input type="text" name="mail" placeholder="e-mail" size="50" autocomplete="off" required><br />
            <input type="text" name="subject" placeholder="Subject" size="50" autocomplete="off"><br />
            <textarea  name="message" placeholder="Message" maxlength="1000" cols="43" rows="6" autocomplete="off" required></textarea><br />
            <input type="submit" value="SEND">
            </form>
            </section>
        </div>  <!--end of formDiv -->
    
        <div id="rightDiv">
            <p style="font-size:3.75em; margin-top:0%;">Contact me,<br /><span style="font-size:14px;">&nbsp;&nbsp;
            I am looking forward to hearing from you.</span></p>
        </div> <!--end of rightDiv -->
   
	</div> <!--end of wrapDiv2 -->
     
    <div id="footerDiv">
    	<p align="center" style=" height:4em; line-height:4em;">Add me on <a href="https://github.com/ggkolfin" target="_blank" 
        style="text-decoration:underline; color:#ffffff ">GitHub</a> for code and more!</p>
    </div> <!--end of footerDiv -->

</div> <!--end of holderDiv -->

</body>
</html>

