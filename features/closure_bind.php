<?php
/**
* base closure class
*/
class Name
{
	/**
	 * sample 1 for return name
	 */
	private $name = 'PHP-7';

	/**
	 * sample 2 for get argument and return string on the method
	 */
	public function add( $extra ) {
		return  "$extra {$this->name}";
	}
}

echo "<br/> --------- sample 1 call --------- <br/>";
$get_name = function() {
	return $this->name;
};
echo $get_name->call(new Name);


echo "<br/> --------- sample 2 call --------- <br/>";
$add_name = function() {
	return $this->add('programming');
};
echo $add_name->call(new Name);