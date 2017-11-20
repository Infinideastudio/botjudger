<?php
include './config.php';
file_put_contents("./com.cpp",$_POST['nr']);
system("\"$gccpath\" com.cpp -o com.exe --std=c++11 > out.txt 2>&1");
$gg=file_get_contents("out.txt");
echo $gg;
system("move com.exe ./code/".$_POST['type']."/".$_POST['filename'].".exe >nul");
system("move com.cpp ./source/".$_POST['type']."/".$_POST['filename'].".cpp >nul");
//$fileurl="./code/".$_POST['type']."/".$_POST['filename']."cpp";
//file_put_contents($fileurl, $_POST['nr']);
echo "完成";
?>
