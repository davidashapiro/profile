<html>
	<head>
		<title>David Shapiro - Gallery</title>
		<?php 
   			include 'header0.php'; 
			$topmenu = 3;
			$rightmenu = 3;
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
						<li class="previous"><a href="gallery2.php">Previous</a></li>
						<li class="next"><a href="gallery1.php">Next</a></li>
					</ul>
					<h4>This is me before Tara In 2011. </h4><br/>
					
					<a data-fancybox="gallery" href="gallery/O1.jpg">
						<img width="140" height="100" src="gallery/O1.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O2.jpg">
						<img width="140" height="100" src="gallery/O2.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O3.jpg">
						<img width="140" height="100" src="gallery/O3.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O12.jpg">
						<img width="80" height="100" src="gallery/O12.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O4.jpg">
						<img width="140" height="100" src="gallery/O4.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O5.jpg">
						<img width="140" height="100" src="gallery/O5.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O6.jpg">
						<img width="140" height="100" src="gallery/O6.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O7.jpg">
						<img width="100" height="100" src="gallery/O7.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O8.jpg">
						<img width="140" height="100" src="gallery/O8.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O9.jpg">
						<img width="110" height="100" src="gallery/O9.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O10.jpg">
						<img width="80" height="100" src="gallery/O10.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O11.jpg">
						<img width="140" height="100" src="gallery/O11.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O13.jpg">
						<img width="150" height="100" src="gallery/O13.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O14.jpg">
						<img width="140" height="100" src="gallery/O14.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O15.jpg">
						<img width="140" height="100" src="gallery/O15.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O16.jpg">
						<img width="80" height="100" src="gallery/O16.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O17.jpg">
						<img width="80" height="100" src="gallery/O17.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O18.jpg">
						<img width="80" height="100" src="gallery/O18.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O19.jpg">
						<img width="80" height="100" src="gallery/O19.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O20.jpg">
						<img width="140" height="100" src="gallery/O20.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O21.jpg">
						<img width="120" height="100" src="gallery/O21.jpg">
					</a>
					<a data-fancybox="gallery" href="gallery/O22.jpg">
						<img width="160" height="100" src="gallery/O22.jpg">
					</a>
		</span>
		<?php 
			include 'footer.php';
			include 'counter.php'; 
		?>
	</body>
</html>