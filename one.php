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

echo "<hr />";
function getExt($url){

   $arr = parse_url($url);
//var_dump($arr);
    $file = basename($arr['path']);
  //  var_dump($file);

    $ext = explode(“.”,$file);
    //var_dump($ext);

    return $ext[0];

}
$url='http://www.sina.com.cn/abc/de/fg.php?id=1';
echo (getExt($url));

?>