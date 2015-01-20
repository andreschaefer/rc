<?php
	date_default_timezone_set('Europe/Zurich');
	/**
	* Helper function to recusively get all files in a directory
	*
	* @param string $directory start directory
	* @param string $ext optional limit to file extensions
	* @return array the matched files
	*/
	function get_files($directory, $ext = '')
	{
		$array_items = array();
		if($handle = opendir($directory)){
			while(false !== ($file = readdir($handle))){
				if(preg_match("/^(^\.)/", $file) === 0){
					if(!is_dir($directory. "/" . $file)){
						$file = $directory . "/" . $file;
						if(!$ext || strstr($file, $ext)) $array_items[] = preg_replace("/\/\//si", "/", $file);
					}
				}
			}
			closedir($handle);
		}
		return $array_items;
	}
?>