<html>
	<head>
		<title>David Shapiro - Gallery</title>
		<?php 
   			include 'header0.php'; 
			$topmenu = 3;
			$rightmenu = 2;
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
						<li class="previous"><a href="gallery1.php">Previous</a></li>
						<li class="next"><a href="gallery3.php">Next</a></li>
					</ul>
					<h4> This is me as Tara In 2013 - 2015</h4> <br/>
					
					<a data-fancybox="gallery" href="gallery/T1.jpg">
						<img width="80" height="100" src="gallery/T1.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T2.jpg">
						<img width="80" height="100" src="gallery/T2.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T3.jpg">
						<img width="80" height="100" src="gallery/T3.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T4.jpg">
						<img width="80" height="100" src="gallery/T4.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T5.jpg">
						<img width="160" height="100" src="gallery/T5.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T6.jpg">
						<img width="100" height="100" src="gallery/T6.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T7.jpg">
						<img width="160" height="100" src="gallery/T7.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T8.jpg">
						<img width="180" height="100" src="gallery/T8.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T9.jpg">
						<img width="80" height="100" src="gallery/T9.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T10.jpg">
						<img width="80" height="100" src="gallery/T10.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T11.jpg">
						<img width="100" height="100" src="gallery/T11.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T12.jpg">
						<img width="80" height="100" src="gallery/T12.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T13.jpg">
						<img width="110" height="100" src="gallery/T13.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T14.jpg">
						<img width="80" height="100" src="gallery/T14.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/T15.jpg">
						<img width="80" height="100" src="gallery/T15.jpg">
					</a>
		</span>
		<?php 
			include 'footer.php';
			include 'counter.php'; 
		?>
	</body>
</html>