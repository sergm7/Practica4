<link href="style.css" rel="stylesheet" type="text/css">

<?php

	class footer{
		
		private $texto;
		public function __construct($cadena){
			
			$this->texto = $cadena;
		}
	
	public function footer(){
?>



		<?php echo $this->texto;?>
		<?php
	}
}