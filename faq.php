<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>David Shapiro - Profile</title>
   		<?php 
   			include 'header0.php'; 
			$topmenu = 10;
			$rightmenu = 0;
		?>
		<script language='Javascript' type='text/javascript'>
			function initAccordion(accordionElem)
			{
				//when panel is clicked, handlePanelClick is called.          
				function handlePanelClick(event){
					showPanel(event.currentTarget);
				}
				//Hide currentPanel and show new panel.  
				function showPanel(panel)
				{
					//Hide current one. First time it will be null. 
					var expandedPanel = accordionElem.querySelector(".active");
					if (expandedPanel){
						expandedPanel.classList.remove("active");
					}
					//Show new one
					panel.classList.add("active");
				}
				var allPanelElems = accordionElem.querySelectorAll(".panel");
				for (var i = 0, len = allPanelElems.length; i < len; i++)
				{
					allPanelElems[i].addEventListener("click", handlePanelClick);
				}
				//By Default Show first panel
				//showPanel(allPanelElems[0])
			}
		</script>
		<style>
			#myportret { 
				padding: 5px; 
				float: left;
				margin-right: 30px;
				margin-left: 20px; 
				margin-bottom: 20px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			#accordion .acc-header {
				color: #00aff0;
			}
			#accordion .acc-body {
   				display : none;
   				color: #dd4b39;
			}
			/** This class will show the body if it has "active" parent class. "active" class will be added to panel div **/
			#accordion .active .acc-body {
   				display : block;
			}
			#accordion .panel {
				font-size: 14px;
				margin:5px;
				padding : 5px;
				border-radius : 2px;
			}
		</style>
	</head>
	<body>
		<?php 
		include 'header1.php';
		include 'topmenu.php';
		include 'header2.php';
		include 'header3.php';
		?>
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>
		<span>
			<a id="back2Top" title="Back to top" href="#">&#10148;</a>
			<div id="accordion">
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">Do you think people who have entered this country illigaly should be deported?<br /></div>
			          <div class="acc-body"><p>Yes. All of them.</p></div>
			     </div>
			     <div class="panel"> <!-- second panel -->
			          <div class="acc-header">Do you think millitary should ban transgender people from service?<br /></div>
			          <div class="acc-body">No</div>
			     </div>
			     <div class="panel"> <!-- third panel -->
			          <div class="acc-header">Should we be fighting to close gender wage gap?<br /></div>
			          <div class="acc-body">Yes, it's rediculous there is a gap.</div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">I would rather vote for candidate whose policies significantly<br /></div>
			          <div class="acc-body"><p>benefit society more than me.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">How often do you take selfies?<br /></div>
			          <div class="acc-body"><p>Rarely.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">Do you like writing lists?<br /></div>
			          <div class="acc-body"><p>No.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">Its your first date. Do you split the bill, pay the whole bill or have them pay the whole bill?<br /></div>
			          <div class="acc-body"><p>Pay the whole bill.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">Are you a coffee snob?<br /></div>
			          <div class="acc-body"><p>No, I'll drink anything.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">Do you prefer your partner votes for the same political party as you do?<br /></div>
			          <div class="acc-body"><p>Yes.</p></div>
			     </div>
			     <div class="panel"> <!-- first panel -->
			          <div class="acc-header">How often do you go to the place of worship?<br /></div>
			          <div class="acc-body"><p>Never.</p></div>
			     </div>
			</div>
			<script type="text/javascript">
				initAccordion(document.getElementById("accordion"));
			</script>
		</span>
		<?php 
			include 'footer.php';
			include 'counter.php'; 
		?>
	</body>
</html>