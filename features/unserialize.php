<?php

class Name
{
	
	private $name;

	public function setName( $name ) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}

$name = new Name;
$name->setName('programming PHP-7');
$save = serialize($name);
echo "serialized name object: $save <br/><br/>";

$ret_saved =  unserialize($save,['allowed_classes'=>['Name']]);
echo "unserialized: ". $ret_saved->getName();

?>