<?php 
	echo "1111111111111";


	function my_scandir($dir){ 
	$files=array(); 
	if($handle=opendir($dir)){ 
		while(($file=readdir($handle))!==false){ 
			if($file!="." && $file !=".."){ 
				if(is_dir($dir."/".$file)){ 
					$files[$file]= scandir($dir."/".$file);
				}else{ 
					$files[]=$dir."/".$file; 
				}
			}
		}
		closedir($handle);
		return $files;
	}
}
var_dump(my_scandir("C:\wamp\www\gc\ms"));
?>