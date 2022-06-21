<?php
class array_object{
	function arrayKeObject($array)
	{
		$object = new stdClass();
		if (is_array($array))
		{
			foreach ($array as $kolom=>$isi)
			{
				$kolom = strtolower(trim($kolom));
				$object->$kolom = $isi;
			}
		}
		return $object;
	}

	function objectKeArray($object)
	{
		$array = array();
		if (is_object($object)) {
			$array = get_object_vars($object);
		}
		return $array;
	}
}
?>