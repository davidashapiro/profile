<?php
$topmenuurls = array(	'/index.php', 
						'/resume.php', 
						'/interests.php', 
						'/gallery1.php', 
						'/contact.php' );
$topmenulabels = array( 'Home', 
						'Resume', 
						'Interests', 
						'Gallery', 
						'Contact' );
?>

<table cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse;'>
	<tr>
		<?php
		for ($i = 0; $i < count($topmenuurls); $i++) 
		{
			if ($i == $topmenu) 
			{
		?>
				<td class='menu-g'>
					<table cellpadding='0' cellspacing='0' border='0' class='menuitem3active'>
						<tr>
							<td class='menuitemactive'>
							<?php
								echo "<a href='" . $topmenuurls[$i] . "'>" . $topmenulabels[$i] . "</a>";
							?>
							</td>
							<td>
								<img src='images/mark_active.gif' width='14' height='14' border='0' alt='' style='margin-right:6px;'>
							</td>
						</tr>
					</table>
				</td>
			<?php } else { ?>
				<td class='menu-g'>
					<table cellpadding='0' cellspacing='0' border='0' class='menuitem3'>
						<tr>
							<td class='menuitem'>
								<?php
								echo "<a href='" . $topmenuurls[$i] . "'>" . $topmenulabels[$i] . "</a>";
								?>
							</td>
							<td>
								<?php echo "<a href='" . $topmenuurls[$i] . "'>";?>
									<img src='images/mark.gif' width='14' height='14' border='0' alt='' style='margin-right:6px;'>
								</a>
							</td>
						</tr>
					</table>
				</td>
			<?php 
			} 
		} ?>
	</tr>
</table>
