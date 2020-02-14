<?php 

class Calc {
	protected $fir;
	protected $sec;
	protected $cac;

	public function __construct($fir, $sec, $cac){
		$this->fir = $fir;
		$this->sec = $sec;
		$this->cac = $cac;

	}

	public function calcMethod(){
		switch ($this->cac) {
			case '+':
				$result = $this->fir + $this->sec;
				break;

				case '-':
				$result = $this->fir - $this->sec;
				break;

				case '*':
				$result = $this->fir * $this->sec;
				break;

				case '/':
				$result = $this->fir / $this->sec;
				break;
			
			default:
				$result = "Error";
				break;
		}
		return "$this->fir $this->cac $this->sec = $result";
	}

	
}

 ?>