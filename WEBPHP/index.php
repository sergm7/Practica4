<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina PHP </title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 

	require_once("pag.php");
	
	$pag = new pag("WELCOME!!!","Created by Sergio Lozano Benitez");

	$pag->iniciar_contenido(
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue turpis sapien, in tempus purus cursus elementum. Vivamus eget commodo ante, et fermentum libero. Nam tempus in leo quis finibus. Nunc ante nulla, ullamcorper nec accumsan vel, vehicula id urna. Cras porta sagittis elit, at iaculis arcu. In dictum orci at malesuada pharetra. Nam commodo egestas erat sit amet eleifend. Donec est orci, sollicitudin et felis eu, rutrum efficitur ante. Etiam finibus nisl nunc, vitae imperdiet sapien feugiat vel.

Phasellus ac ultrices elit. Nam fringilla nunc sit amet turpis placerat eleifend. Nulla facilisi. Aenean in ex tellus. Mauris quis leo sit amet ipsum interdum dictum ut sed nulla. Nunc mollis ipsum nec bibendum elementum. Proin ut aliquet justo. Donec nec laoreet sem. Phasellus euismod arcu id est pretium mattis. Aliquam quis turpis ultrices, laoreet ligula quis, gravida lectus. Etiam facilisis velit vel augue aliquam, vitae iaculis dolor sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

Quisque aliquet porta ipsum, non sagittis ante posuere ut. Quisque imperdiet, erat sit amet euismod iaculis, orci neque aliquet enim, sit amet blandit mauris nibh sit amet nunc. Integer id volutpat sem. Fusce in efficitur urna. Vivamus tortor nisi, tempus nec risus nec, gravida dignissim mi. Suspendisse potenti. Proin eget risus aliquam, ornare lectus tincidunt, luctus quam. Ut facilisis nibh ut diam faucibus dictum. Curabitur a aliquet nulla, sit amet gravida neque. Nunc blandit quam lacinia, euismod velit porta, pellentesque felis."
);

	$pag->view();
?>
	
</body>
</html>