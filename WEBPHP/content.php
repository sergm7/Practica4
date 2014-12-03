<link href="CSS/style.css" rel="stylesheet" type="text/css">

<?php

class content{
	
	private $lineas = array();
	
	public function iniciar_linea($li){
		
		$this->lineas[] = $li;
	}
	
	public function content(){
		
		for ($i=0;$i<sizeof($this->lineas);$i++){
?>

			
			<?php echo $this->lineas[$i];?></p>
			<?php
		}
	}
}