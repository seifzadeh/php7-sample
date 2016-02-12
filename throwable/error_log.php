<?php

/**
* 
*/
class Log
{
	
	public static $log_path;
	private static $log_fp;

	public function init( $log_path ) {
		self::$log_fp = fopen( $log_path, 'a+');
	}

	public function error($msg) {
		fwrite(self::$log_fp, "$msg\n");
	}

}




/**
* Test of exception
*/
class HugeClass
{
	
	public function FileLoop( $path ) {

		$ret_is = null;
		Log::init('log/php7test.log');


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

				echo 'Failed to data !!!';
				Log::error($e->getMessage());
				
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