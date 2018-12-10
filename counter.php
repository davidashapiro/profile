<script>
	var data = '&r=' + escape(document.referrer) + '&n=' + escape(navigator.userAgent) + '&p=' + escape(navigator.userAgent) + '&g=' + escape(document.location.href);

	if (navigator.userAgent.substring(0,1)>'3')
		data = data + '&sd=' + screen.colorDepth  + '&sw=' + escape(screen.width+'x'+screen.height);

	document.write("<a href='http://www.1freecounter.com/stats.php?i=138315' target='_blank' >");
	document.write("<img alt='Free Counter' border=0 hspace=0 '+'vspace=0 src='http://www.1freecounter.com/counter.php?i=138315' + data + ''>");
	document.write('</a>');
</script>