<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calcForm.class.php';
require_once $conf->root_path.'/app/calcResult.class.php';

class calcCtrl {

	private $msgs;
	private $form;
	private $result;

	public function __construct(){
		$this->msgs = new Messages();
	$this->form = new calcForm();
		$this->result = new calcResult();
	}
	
	public function getValues(){
		$this->form->a = isset($_REQUEST ['a']) ? $_REQUEST ['a'] : null;
		$this->form->b = isset($_REQUEST ['b']) ? $_REQUEST ['b'] : null;
		$this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;
	}
	
	public function isAllRight() {
		if (!(isset ( $this->form->a) && isset ($this->form->b) && isset ($this->form->op))) {
			return false;
		}
		
		if ($this->form->a == "") {
			$this->msgs->addErr('Nie podano pierwszej liczby');
		}
		if ($this->form->b == "") {
			$this->msgs->addErr('Nie podano liczby 2');
		}
		
		if (! $this->msgs->isErr()) {
			
			if (!is_numeric ($this->form->a)) {
				$this->msgs->addErr('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (!is_numeric ( $this->form->b)) {
				$this->msgs->addErr('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return !$this->msgs->isErr();
	}
	
	public function operation(){

		$this->getValues();
		
		if ($this->isAllRight()) {
				
			$this->form->a = intval($this->form->a);
			$this->form->b = intval($this->form->b);
				
			switch ($this->form->op) {
				case 'div' :
					$this->result->result = $this->form->a / $this->form->b;
					$this->result->op_name = '/';
					break;
				case 'times' :
					$this->result->result = $this->form->a * $this->form->b;
					$this->result->op_name = '*';
					break;
				case 'minus' :
					$this->result->result = $this->form->a - $this->form->b;
					$this->result->op_name = '-';
					break;
				default :
					$this->result->result = $this->form->a + $this->form->b;
					$this->result->op_name = '+';
					break;
			}
		}
		
		$this->generateView();
	}
		
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator');
		$smarty->assign('page_description','Kalkulator oparty na bibliotece Smarty');
		$smarty->assign('page_header','Szablony Smarty');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calcView.html');
	}
}