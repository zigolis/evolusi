<?php echo doctype('xhtml1-trans')?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Evolusi - Cursos de Web Standards, Web Design Porto Alegre, Florianópolis, Curitiba, Front-End Developer, jQuery Mobile, HTML5, CSS3 - (51) 3276-8867</title>
		
		<?php 
		$meta = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Cursos e consultoria para web e mobile'),
			array('name' => 'keywords', 'content' => 'Evolusi, Cursos jQuery Mobile, Web, HTML5, CSS3'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);		
		
		echo meta($meta);
		echo link_tag('resources/img/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('resources/css/evolusi.css');
		?>
	</head>
	
	<body>
		<h1><strong>Evolusi</strong></h1>
		<h2>Menos código<br /> mais resultados.</h2>
	</body>
</html>