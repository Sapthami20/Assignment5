<?php
$file=fopen("file.txt","r");
$count=readfile("file.txt");
echo "<br>";
$str=file_get_contents("file.txt");
$vCount=0;
$cCount=0;
$dCount=0;
$sCount=0;
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++)
{
      if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
        {
	$vCount++;
         }
     elseif($str[$i]>='a' && $str[$i]<='z')
       {
	        $cCount++;
       }
    elseif($str[$i]>='0' && $str[$i]<='9')
       {
	$dCount++;
       }
    else
     {
	$sCount++;
     }
}
$line=count(file("file.txt"));
echo "Number of line :",$line,"<br>";
echo "Number of words :",str_word_count($str),"<br>";
echo "Number of characters :",mb_strlen($str),"<br>";
echo "Number of vowels :",$vCount,"<br>";
echo "Number of consonents:",$cCount,"<br>";
echo "Number of digits :",$dCount,"<br>";
echo "Number of special characters :",$sCount-$dCount-1;
$data=filesize("file.txt");
echo "<br> Size of file is: ",$data;
fclose($file);
?>

