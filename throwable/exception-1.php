<?php
/**
* Test if exception
*/
class HugeClass
{
	
	public function FileLoop( $path ) {

		$ret_is = null;


		try {

			$ne_class = new NotExistsClass();

			for ($i=0; $i < 20; $i++) { 
			
				/**
			 	* mysql query or othe command
			 	*/

				$file_name = "$path/{$i}.txt";
				$data = "i={$i}:" . time(). $ne_class->CallNotMethod() . "\n";
				file_put_contents( $file_name , $data );

				$ret_is += $i;

				}

			// } catch (Exception $e) {
			} catch (Error $e) {

				echo $e->getMessage();
				
			}
		

		return $ret_is;
	}
}


/**
 * uses of class
 */
$test_huge_class = new HugeClass();

echo $test_huge_class->FileLoop('/tmp/notfolder');



?>