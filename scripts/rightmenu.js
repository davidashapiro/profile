var rightmenuurls = ['', 'skills.html', 'exp.html', 'edu.html' ];
var rightmenulabels = ['', 'Skills', 'Expirience', 'Education' ];

document.write("<table cellpadding='0' cellspacing='0' border='0' width='100%' style='border-collapse:collapse;'>");
	document.write("<tr>");
		for (i = 0; i < rightmenuurls.length; i++)
		{
			if (i == rightmenu && i != 0)
			{
				document.write("<tr>");
					document.write("<td class='second-gborder'>");
						document.write("<table cellpadding='0' cellspacing='0' border='0' width='100%' class='secondmenuitemactive'>");
							document.write("<tr>");
								document.write("<td class='secondmenuitemactive'>"+rightmenulabels[i]+"</td>");
								document.write("<td>");
									document.write("<img src='images/2ndmenu_mark_active.gif' width='14' height='14' border='0' alt='' class='secondmenumark'>");
								document.write("</td>");
							document.write("</tr>");
						document.write("</table>");
					document.write("</td>");
				document.write("</tr>");
			}
			else if (i != 0)
			{
				document.write("<tr>");
					document.write("<td class='second-gborder'>");
						document.write("<table cellpadding='0' cellspacing='0' border='0' width='100%' class='secondmenuitem'>");
							document.write("<tr>");
								document.write("<td class='secondmenuitem'><a href='"+rightmenuurls[i]+"'>"+rightmenulabels[i]+"</a></td>");
								document.write("<td>");
									document.write("<a href='"+rightmenuurls[i]+"'>");
										document.write("<img src='images/2ndmenu_mark.gif' width='14' height='14' border='0' alt='' class='secondmenumark'>");
									document.write("</a>");
								document.write("</td>");
							document.write("</tr>");
						document.write("</table>");
					document.write("</td>");
				document.write("</tr>");
			}
		}
	document.write("</tr>");
document.write("</table>");
