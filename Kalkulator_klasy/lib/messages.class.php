<?php
class messages {
	private $err = array();
	private $infos = array();
	private $num = 0;

	public function addErr($message) {
		$this->err[] = $message;
		$this->num++;
	}

	public function addInf($message) {
		$this->infos[] = $message;
		$this->num ++;
	}

	public function isNull() {
		return $this->num == 0;
	}
	
	public function isErr() {
		return count ( $this->err ) > 0;
	}
	
	public function isInf() {
		return count ( $this->infos ) > 0;
	}
	
	public function getErr() {
		return $this->err;
	}
	
	public function getInf() {
		return $this->infos;
	}
	
	public function clr() {
		$this->err = array ();
		$this->infos = array ();
		$this->num = 0;
	}
}
