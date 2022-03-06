<html>
	<head>
		<title>David Shapiro - Contact</title>
		<?php 
   			include 'header0.php'; 
			$topmenu = 6;
			$rightmenu = 0;
		?>
		<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
		<script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
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
		<script type="text/javascript">
			document.onreadystatechange = function () 
			{
				if (document.readyState === "complete") 
				{
					var modal = document.getElementById('myModal');
					//document.getElementById("PreLoaderBar").style.display = "none";
					document.getElementById("lds-roller").style.display = "none";
					modal.style.display = "none";
				}
			}
		</script>
		<style>
			.modal {
			    display: block; 
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: auto; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}
		</style>
	</head>
	<body>
		<<?php 
		include 'header1.php';
		include 'topmenu.php';
		include 'header2.php';
		include 'header3.php';
		?>
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>
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

	function test_input($data) 
	{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>
			<div id="myModal" class="modal"></div>
			<div id="lds-roller" class="lds-roller">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>

			<!--<div class="progress" id="PreLoaderBar">
				<div class="indeterminate"></div>
			</div>-->
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
      								<i class="fa fa-map-marker"></i>
      								<a href="http://maps.google.com/maps?q=60090">Wheeling, IL, 60090</a>
      							</li>
      							<li>
      								<i class="fa fa-male"></i>
      								<a href="/resume/">My Online Resume</a>
      							</li>
							</ul>
						</div>
					</td>
					<td>
						<div class="map">
							<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1602+Newburn+Ct+Wheeling+60090&amp;output=embed">
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
								<?php if (!empty($nameErr)) {
									echo '<span class=\'error\'>'.$nameErr.'</span>';
								} ?>
								<input type="text" name="email" id="email" placeholder="* Email">
								<?php if (!empty($emailErr)) {
									echo '<span class=\'error\'>'.$emailErr.'</span>';
								} ?>
								<textarea rows="8" name="comment" id="comment" placeholder="* Your comment here"></textarea>
								<hr class="colorgraph">
								<div style="width: 30%; "><a href="#" class="btn btn-default btn-lg" onclick="document.getElementById('contactmeform').submit();">Send Message</a></div><br />
								</span>
							</fieldset>
						</form>
            		</td>
            	</tr>
            </table>
		</span>
		<?php 
			include 'footer.php';
		?>
	</body>
</html>