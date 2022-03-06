<html>
	<head>
		<title>David Shapiro - Gallery</title>
		<?php 
   			include 'header0.php'; 
			$topmenu = 3;
			$rightmenu = 1;
		?>
		<script type="text/javascript">
			document.onreadystatechange = function () 
			{
				if (document.readyState === "complete") 
				{
					var modal = document.getElementById('myModal');
					document.getElementById("lds-roller").style.display = "none";
					modal.style.display = "none";
				}
			}
		</script>
		<style>
			img {
				margin: 2px;
			}
		</style>
	</head>
	<body>
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
		<?php 
		include 'header1.php';
		include 'topmenu.php';
		include 'header2.php';
		include 'gmenu.php';
		include 'header3.php';
		?>
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>
		<span>
					<ul class="pager">
						<li class="previous"><a href="gallery3.php">Previous</a></li>
						<li class="next"><a href="gallery2.php">Next</a></li>
					</ul>
					<h4>This is me in 2016 - 2022 after Tara was gone.</h4><br/>
					
					<a data-fancybox="gallery" href="gallery/David1.jpg">
						<img width="60" height="100" src="gallery/David1.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David2.jpg">
						<img width="60" height="100" src="gallery/David2.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David3.jpg">
						<img width="80" height="100" src="gallery/David3.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David4.jpg">
						<img width="60" height="100" src="gallery/David4.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David5.jpg">
						<img width="60" height="100" src="gallery/David5.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David6.jpg">
						<img width="60" height="100" src="gallery/David6.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David7.jpg">
						<img width="60" height="100" src="gallery/David7.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David8.jpg">
						<img width="100" height="100" src="gallery/David8.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/David9.jpg">
						<img width="60" height="100" src="gallery/David9.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David10.jpg">
						<img width="60" height="100" src="gallery/David10.jpg">
					</a>
 <a data-fancybox="gallery" href="gallery/David11.jpg">
						<img width="60" height="100" src="gallery/David11.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David12.jpg">
						<img width="60" height="100" src="gallery/David12.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David13.jpg">
						<img width="90" height="100" src="gallery/David13.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David14.jpg">
						<img width="80" height="100" src="gallery/David14.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David16.jpg">
						<img width="60" height="100" src="gallery/David16.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David17.jpg">
						<img width="60" height="100" src="gallery/David17.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David18.jpg">
						<img width="80" height="100" src="gallery/David18.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David20.jpg">
						<img width="80" height="100" src="gallery/David20.jpg">
					</a>
 <a data-fancybox="gallery" href="gallery/David21.jpg">
						<img width="80" height="100" src="gallery/David21.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David23.jpg">
						<img width="100" height="100" src="gallery/David23.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David24.jpg">
						<img width="80" height="100" src="gallery/David24.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David25.jpg">
						<img width="80" height="100" src="gallery/David25.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David26.jpg">
						<img width="60" height="100" src="gallery/David26.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David27.jpg">
						<img width="100" height="100" src="gallery/David27.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David28.jpg">
						<img width="80" height="100" src="gallery/David28.jpg">
					</a>
			<a data-fancybox="gallery" href="gallery/David29.jpg">
						<img width="80" height="100" src="gallery/David29.jpg">
					</a>
		<a data-fancybox="gallery" href="gallery/David30.jpg">
						<img width="80" height="100" src="gallery/David30.jpg">
					</a>
		</span>
		<?php
			include 'footer.php';
		?>
		
		<script type="text/javascript">
			$(document).ready(function () {
				$(".fancybox").fancybox({
					openEffect : 'none',
    				closeEffect	: 'none',
    				helpers : {
    					title : {
    						type : 'outside'
    					}
    				}
				});
			});
		</script>
	</body>
</html>