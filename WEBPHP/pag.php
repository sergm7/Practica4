<link href="style.css" rel="stylesheet" type="text/css">

<?php

ini_set('display_errors','on');

require_once("header.php");
require_once("menu.php");
require_once("content.php");
require_once("footer.php");

class pag{
	
	private $header;
	private $menu;
	private $content;
	private $footer;
	public function __construct($texto_header,$texto_footer){
		
		$this->header = new header($texto_header);
		$this->content = new content();
		$this->footer = new footer($texto_footer);
	}
	
	public function iniciar_contenido($texto)
	{
		$this->content->iniciar_linea($texto);
	}
	
	public function view()
	{
		
		echo "<div id=header>"; $this->header->header(); echo "</div>";
		echo "<div id=menu>"; $this->menu = new menu(); echo "</div>";
		echo "<div id=content>"; $this->content->content(); echo "</div>";
		echo "<div id=footer>"; $this->footer->footer(); echo "</div>";
		
	}
}
