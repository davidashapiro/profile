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
					<h4>This is me in 2016 - 2018 after Tara was gone.</h4><br/>
					
					<a data-fancybox="gallery" href="gallery/D1.jpg">
						<img width="80" height="100" src="gallery/D1.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D2.jpg">
						<img width="80" height="100" src="gallery/D2.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D3.jpg">
						<img width="80" height="100" src="gallery/D3.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D4.jpg">
						<img width="80" height="100" src="gallery/D4.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D5.jpg">
						<img width="90" height="100" src="gallery/D5.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D6.jpg">
						<img width="140" height="100" src="gallery/D6.jpg">
					</a>
					<!--<a data-fancybox="gallery" href="gallery/D7.jpg">
						<img width="100" height="100" src="gallery/D7.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D8.jpg">
						<img width="90" height="100" src="gallery/D8.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/D9.jpg">
						<img width="90" height="100" src="gallery/D9.jpg">
					</a>-->
		</span>
		<?php 
			include 'footer.php';
			include 'counter.php'; 
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