<table cellpadding='0' cellspacing='0' border='0' width='100%' style='border-collapse:collapse;'>
	<tr>
		<?php for ($i = 0; $i < count($rightmenuurls); $i++)
		{
			if ($i == $rightmenu && $i != 0)
			{
			?>
				<tr>
					<td class='second-gborder'>
						<table cellpadding='0' cellspacing='0' border='0' width='100%' class='secondmenuitemactive'>
							<tr>
								<?php
								echo "<td class='secondmenuitemactive'>" . $rightmenulabels[$i] . "</td>";
								?>
								<td>
									<img src='images/2ndmenu_mark_active.gif' width='14' height='14' border='0' alt='' class='secondmenumark'>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			<?php
			}
			else if ($i != 0)
			{
			?>
				<tr>
					<td class='second-gborder'>
						<table cellpadding='0' cellspacing='0' border='0' width='100%' class='secondmenuitem'>
							<tr>
								<td class='secondmenuitem'>
									<?php
									echo "<a href='" . $rightmenuurls[$i] . "'>" . $rightmenulabels[$i] . "</a>";
									?>
								</td>
								<td>
									<?php echo "<a href='" . $rightmenuurls[$i] . "'>"; ?>
										<img src='images/2ndmenu_mark.gif' width='14' height='14' border='0' alt='' class='secondmenumark'>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			<?php
			}
		}
		?>
	</tr>
</table>
