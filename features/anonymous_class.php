<?php

interface Name{
	public function name(string $name);
} 

class AppName {

	private $name;

	public function  setName(Name $name) {
		$this->name= $name;
	}

	public function getName():Name {
		return $this->name;
	}

}

$appname = new AppName;
$appname->setName(new class implements Name{
	public function name(string $name) {
		echo "$name";
	}

});

echo $appname->getName()->name('mehrdad');	

?>