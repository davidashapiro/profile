var topmenuurls = ['index.html', 'resume.html', 'contact.html', 'gallery1.html'];
var topmenulabels = ['Home', 'Resume', 'Contact Information', 'Gallery'];

document.write("<table cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse;'>");
	document.write("<tr>");
		for (i = 0; i < topmenuurls.length; i++)
		{
			if (i == topmenu)
			{
				document.write("<td class='menu-g'>");
					document.write("<table cellpadding='0' cellspacing='0' border='0' class='menuitem3active'>");
						document.write("<tr>");
							document.write("<td class='menuitemactive'>");
								document.write("<a href='"+topmenuurls[i]+"'>"+topmenulabels[i]+"</a>");
							document.write("</td>");
							document.write("<td>");
								document.write("<img src='images/mark_active.gif' width='14' height='14' border='0' alt='' style='margin-right:6px;'>");
							document.write("</td>");
						document.write("</tr>");
					document.write("</table>");
				document.write("</td>");
			}
			else
			{
				document.write("<td class='menu-g'>");
					document.write("<table cellpadding='0' cellspacing='0' border='0' class='menuitem3'>");
						document.write("<tr>");
							document.write("<td class='menuitem'>");
								document.write("<a href='"+topmenuurls[i]+"'>"+topmenulabels[i]+"</a>");
							document.write("</td>");
							document.write("<td>");
								document.write("<a href='"+topmenuurls[i]+"'>");
									document.write("<img src='images/mark.gif' width='14' height='14' border='0' alt='' style='margin-right:6px;'>");
								document.write("</a>");
							document.write("</td>");
						document.write("</tr>");
					document.write("</table>");
				document.write("</td>");
			}
		}
	document.write("</tr>");
document.write("</table>");
