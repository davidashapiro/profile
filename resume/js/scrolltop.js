			$(window).scroll(function() {
				var height = $(window).scrollTop();
				if (height > 100) {
					$('#back2Top').fadeIn();
				} else {
					$('#back2Top').fadeOut();
				}
			});
			$(document).ready(function() {
				$("#back2Top").click(function(event) {
					event.preventDefault();
					$("html, body").animate({ scrollTop: 0 }, "slow");
					return false;
				});
			});
			/*Scroll to top when arrow up clicked END*/
			$(document).ready(function(){
				$(".emailme").click(function(){
					$(".panel").toggle("fast");
					$(this).toggleClass("active");
					return false;
				});
			});
		function includeHTML() 
		{
			var z, i, elmnt, file, xhttp;
			/*loop through a collection of all HTML elements:*/
			z = document.getElementsByTagName("*");
			for (i = 0; i < z.length; i++) 
			{
				elmnt = z[i];
				/*search for elements with a certain atrribute:*/
				file = elmnt.getAttribute("w3-include-html");
				if (file) {
 					/*make an HTTP request using the attribute value as the file name:*/
					xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4) 
						{
							if (this.status == 200) {
								elmnt.innerHTML = this.responseText;
							}
							if (this.status == 404) {
								elmnt.innerHTML = "Page not found.";
							}
							/*remove the attribute, and call this function once more:*/
							elmnt.removeAttribute("w3-include-html");
							includeHTML();
						}
					}      
					xhttp.open("GET", file, true);
					xhttp.send();
					/*exit the function:*/
					return;
				}
			}
		};
		
		document.onreadystatechange = function () 
		{
            if (document.readyState === "complete") 
            {
                //document.getElementById("PreLoaderBar").style.display = "none";
                document.getElementById("loader").style.display = "none";
            }
        }
        /* <![CDATA[ */
		$(document).ready(function(){ // sends the data filled in the contact form to the php file and shows a message
			$("#contact-form").submit(function(){
				var str = $(this).serialize();
				$.ajax({
				   type: "POST",
				   url: "send.php",
				   data: str,
				   success: function(msg)
				   {
						$("#formstatus").ajaxComplete(function(event, request, settings){
							if(msg == 'OK'){ // Message Sent? Show the 'Thank You' message and hide the form
								result = '<div class="formstatusok">Your message has been sent. Thank you!</div>';
								$("#fields").hide();
							}
							else{
								result = msg;
							}
							$(this).html(result);
						});
					}
				 });
				return false;
			});
		});
	/* ]]> */	