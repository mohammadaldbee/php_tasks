<?php 
echo "we love php <br>";
echo "we don't";
ECHO "we love";
print "hello";
?>
<?php 
echo "we love php <br>";
echo "we don't";
ECHO "we love";
PRINT "hello";
?>
<?php
//single line comment
echo "<br>test" /*use it here */;
# single line comment
/* 
============================
========my comment==========
============================
*/
print "<br><b>test</b>";
?>
<?php //1
$str1 = 'the Color of the sky is blue.';
echo strtoupper("<br>".$str1 );
echo strtolower("<br>".$str1."<br>" );

echo ucfirst($str1."<br>");
 echo ucwords($str1."<br>");
?> 
<?php //2
$input = '085119';
$date = strtotime($input);
echo date('h:i:s', $date);
?>
<?php //3
$myString = 'i am a full stack develper at orange coding academy';

if ( strstr( $myString, 'coding' ) ) {
  echo "<br>word found";
} else {
  echo "<br>word not found";
}
?> 
<?php //4
  $url = 'www.orange.com/index.php';
  $name = basename($url); // to get file name
  echo ("<br>".$name);
  ?>
  
  <?php //5
  $email= 'info@orange.com';
  $username=strstr($email,'@',true);
  echo "<br>".$username."<br>";
  ?>
<?php //6
$str1 = 'info@orange.com';
echo substr("<br>".$str1, -3)."<br>";
?>
<?php //7
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."<br>";
?>

<?php //8
$str = 'That quick brown fox jumps over the lazy dog.';
echo preg_replace('/That/', 'the', $str, 1)."<br>"; 
?>
<?php //8
$str = 'That quick brown fox jumps over the lazy dog.';
echo str_replace('That', 'the', $str)."<br>"; 
?>
<?php //9
$string1='dragonball';
$string2='dragonboll';
$position = strspn($string1 ^ $string2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $position, $string1[$position], $string2[$position]
);
?>

<?php //10
echo "<br>";
$first = array("Twinkle", "twinkle", "twinkle", "litlestar");  
var_dump($first); 
?>

<?php //11
$str = 'a';
echo "<br>";
echo ++$str;
$str = 'y';
echo "<br>";
echo ++$str;
?>

<?php //12
$sentence = 'the brown box ';
$x= substr_replace( $sentence, 'quick ' ,4 , 0 );
echo "<br>";
echo $x;
?>

<?php //13
echo '<br>';
$x = '0000657022.24';
echo str_replace('0','', $x);
?>
<?php //14
$my_str = 'The quick brown fox jumps over the lazy dog';
echo "<br>";
echo str_replace("fox", "", $my_str)."<br>";
?>
<?php //15
echo '<br>';
$x1 = 'moh---ammad---';
$str2 = str_replace("-", "", $x1)."<br>";
echo $str2."<br>";
?>
<?php //16
  function RemoveSpecialChar($str) {
 
 $res = str_replace( array( '\'', '"',
 ',' , ';', '<', '>', '*','/' ), ' ', $str);


    return $res;
}
  $str = "/2828*/47/<47>,17,7";
  $str1 = RemoveSpecialChar($str);
  echo $str1;
?>
<?php //17
echo '<br>';
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."<br>";
?>
<?php //18
echo '<br>';
$x2 = '2,543.45';
$str3 = str_replace(",", "", $x2)."<br>";
echo $str3."<br>";
?>
<?php //19
foreach(range('a', 'z') as $outer) {
    
      print($outer." ");
    
  }
  ?>
  <?php
  echo "<br>";
echo 5 + (int)6.3;
echo "<br>";
?>
<?php //20
$text = "the?quick#brown?fox+jumps@over;the*lazy=dog";
$x = ["#", "'", ";", "/", ":", "+", "=", "*", "?", ",","@"];
$x1 = str_replace($x, ' ', $text);
echo '<br>';
echo implode(' ',array_slice(explode(' ',$x1), 0, 5));
?>