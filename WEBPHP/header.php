<link href="style.css" rel="stylesheet" type="text/css">

<?php

class header{

	private $texto;
	
	public function __construct($titulo){
	
		$this ->texto=$titulo;	
	}
	
	public function header(){
?>


<h1><?php echo $this ->texto;?></h1>
<?php
	}

}