<?php
//namespace App\Classes;

class Util {
	
	/*  positive = true then not allowed for < 1 value */
	static function isInteger($value, $positive = false){
		$result = false;
		if(is_numeric($value)){
			$int = (int)$value;
			if(strlen($int) == strlen($value)){
				if(!$positive){ 
					$result = true;
				} else {
					if($int < 1){
						$result = false;
					} else {
						$result = true;
					}
				}
			}
		}
		
		return $result;
	}
}