<html>
	<head>
		<title>David Shapiro - Contact</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    	<link href='css/styles.css' rel='stylesheet' type='text/css'>
		<!-- //////// Favicon ////////  -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<script language='Javascript' type='text/javascript'>
			var topmenu = 4;
			var rightmenu = 0;
		</script>
		<style>
			form input[type=text]{
				background-color: #eaeaea;
				margin-bottom: 10px;
				height: 30px;
				border: none;
				width:60%;
			}
			form textarea{
				background-color: #eaeaea;
				border: none;
				width:100%;
			}
			form input[type=button], input[type=submit], input[type=reset] {
    				background-color: #4CAF50;
    				border: none;
    				color: white;
    				padding: 16px 32px;
    				text-decoration: none;
    				margin: 4px 2px;
    				cursor: pointer;
			}
			.button {
    				background-color: #eaeaea;
    				border: none;
    				color: white;
    				padding: 15px 32px;
    				text-align: center;
    				text-decoration: none;
    				display: inline-block;
    				font-size: 16px;
    				margin: 4px 2px;
    				cursor: pointer;
    				-webkit-transition-duration: 0.4s; /* Safari */
    				transition-duration: 0.4s;
			}

			.buttonShadow{
    				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}
			.buttonShadow:active {
  				background-color: #3e8e41;
  				box-shadow: 0 5px #666;
  				transform: translateY(4px);
			}
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<script language='JavaScript' type='text/javascript' src='scripts/header_part1.js'></script>
		<script language='JavaScript' type='text/javascript' src='scripts/topmenu.js'></script>
		<script language='JavaScript' type='text/javascript' src='scripts/header_part2.js'></script>
		<script language='JavaScript' type='text/javascript' src='scripts/header_part3.js'></script>
		<span>
<?php
	// define variables and set to empty values
	$nameErr = $emailErr = "";
	$name = $email = $comment = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
  		if (empty($_POST["name"])) {
    			$nameErr = "Name is required";
  		} else {
    			$name = test_input($_POST["name"]);
    			// check if name only contains letters and whitespace
    			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      				$nameErr = "Only letters and white space allowed"; 
    			}
  		}
  
  		if (empty($_POST["email"])) {
    			$emailErr = "Email is required";
  		} else {
    			$email = test_input($_POST["email"]);
    			// check if e-mail address is well-formed
    			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      				$emailErr = "Invalid email format"; 
    			}
  		}

  		if (empty($_POST["comment"])) {
    			$comment = "";
  		} else {
    			$comment = test_input($_POST["comment"]);
  		}
  		if ($email != "" && $name != "") {
  			$subject = "message from " . $name;
  			$headers = "From: " . $email;
  			mail("d321973@gmail.com",$subject,$comment,$headers);
  		}
	}

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>
			<table style="font-weight: bold; font-size: 12pt; width: 100%">
            	<tr>
            		<td valign="top">
            			<div id="contact">
							<ul id="profileContact">
								<li>
        							<i class="fa fa-envelope-o"></i>
        							<a href="mailto:d321973@mail.com">d321973@mail.com</a>
      							</li>
								<li>
        							<i class="fa fa-phone"></i> +1 949-444-2260
      							</li>
      							<li>
      								<i class="fa fa-bank"></i>
      								<a href="http://maps.google.com/maps?q=60090">Wheeling, IL, 60090</a>
      							</li>
      							<li>
      								<i class="fa fa-male"></i>
      								<a href="http://davidshapiro.x10host.com/resume/">My Online Resume</a>
      							</li>
							</ul>
						</div>
					</td>
					<td>
						<div class="map">
							<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=230+old+oak+dr+Buffalo+Grove+60089&amp;output=embed">
							</iframe>
						</div>
					</td>
            	</tr>
            	<tr>
            		<td colspan="2">
						<form method="post" id="contactmeform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
							<fieldset>
								<legend>Contact me</legend>
								<hr class="colorgraph">
                        		<input type="text" name="name" id="name" placeholder="* First and Last Name">
                        		<span class="error">* <?php echo $nameErr;?>
								<input type="text" name="email" id="email" placeholder="* Email">
								<span class="error">* <?php echo $emailErr;?>
								<textarea rows="8" name="comment" id="comment" placeholder="* Your comment here"></textarea>
								<hr class="colorgraph">
								<div style="width: 30%; "><a href="#" class="button" onclick="document.getElementById('contactmeform').submit();">Send Message</a></div>
							</fieldset>
						</form>
            		</td>
            	</tr>
            </table>
		</span>
		<script language='JavaScript' type='text/javascript' src='scripts/footer.js'></script>
	</body>
</html>