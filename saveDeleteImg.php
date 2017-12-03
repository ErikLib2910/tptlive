<?php
// ------- скачивает картинку ----------
$url = $img;
$path = './images/logo.png';
file_put_contents($path, file_get_contents($url));


/*удаление файла + проверка*/
//$img = dirname(__FILE__).'/file/f/mini_newspaper.png';
/*$img = './images/logo.png';

function delete($img)
{
    if(file_exists($img)) unlink($img); 
    if(file_exists($img) == FALSE) echo $img." файл удален";  
}
delete($img);
?>
