 <?php 
 require 'phpqrcode/qrlib.php';
 
 $dir = 'temp/';

 if(!file_exists($dir)) mkdir($dir);

 $filename = $dir.'test.png';

 $size = 10;
 $level = 'H';
 $frameSize = 3;
 $contenido = 'https://music.youtube.com/';

 QRcode::png($contenido,$filename,$level,$size,$frameSize);
echo '<img src="'.$filename.'" >';
?>

