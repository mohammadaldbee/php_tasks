<?php
function addNumbers( $a, $b) {
  return $a + $b;
}
echo addNumbers(5, 8);
?>
<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: '."<br>" . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.'."<br>" . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: '."<br>" . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Output: 'Foo: baz'
$foo->printPHP();       // Output: 'PHP is great' 
$bar->printItem('baz'); // Output: 'Bar: baz'
$bar->printPHP();       // Output: 'PHP is great'

?>

<?php //1
function number($Num) {
  $n = 0;

  for($i = 2; $i < ($Num/2+1); $i++) {
    if($Num % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $Num." is a prime number.";
  } else {
    echo $Num." is not a prime number.";
  }
}

number(9);
?>
<?php //2
function string($o){     
    return strrev($o);
    }
echo "<br>";
echo string("mohammad");
?>
<?php //3
function checkLowerCase($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (substr($str, $i, 1) !== strtolower(substr($str, $i, 1))) {
            return "your string is not ok";
        }
    }
    return "your string is ok";
}
echo "<br>";
echo checkLowerCase("mohammad");
?>

<?php //4 //5
function swap($a,$b){
    echo "a=".$a.","."b=".$b;
    echo "<br>";
    $c = 0;
    $c = $a;
    $a = $b;
    $b = $c;
    return "a=".$a.","."b=".$b;
}
echo "<br>";
echo swap(5,10);
?>
<?php //6
function first($a){
    $sum=0;
    
    for ($i = 0; $i < strlen($a); $i++){
        
        $sum+=substr($a, $i, 1)**3;
}
if($sum == $a){
    return 'ok' ;
}
else{
    return 'no';
}
}
echo "<br>";
echo first(153);
?>

<?php //7
function isPalindrome($str){
    $st=strtolower( str_replace(array( "+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^",
    "~", "*", "?", ":","\"","/","\\",","),"", $str));
    $after=explode(' ', $st);
$finalst="";
    for($i=0;$i<count($after);$i++){
        $finalst.=$after[$i];
      }
      $Rst=strrev($finalst);
    
    if($Rst==$finalst){
      echo  "this string is palindrome";
    }
    else{
       echo "this string is not palindrome";
    }
}
isPalindrome("Eva, can I see bees in a cave?");
?> 
<?php //8
function removeDoubl(array $arr){
    echo "<br>";
    echo print_r(array_unique($arr));
    }
    
    removeDoubl([1,3,4,2,1,4,5,4,5]);
    ?>

<?php //1

function checkLeapYear($year) {
    return checkdate(2, 29, $year);
}
echo '<br/>';
echo checkLeapYear(2020) ? " is a leap year." :" is not a leap year. ";
echo '<br/>';
echo checkLeapYear(2017) ? " is a leap year." : " is not a leap year. ";
?>
<?php //2
function season($a){
    if($a>20){
        echo "it is summertime ";
    }else{
        echo "it is winter ";
    }
}
echo '<br/>';
season(25);
?>
<?php //3
function sum($num1,$num2){
    if($num1 === $num2){
        $sum = ($num1 + $num2)*3 ;
        echo '<br/>';
        echo $sum;
    }
    else{
        echo '<br/>';
        echo "no";
    }
}
sum(18,18);
?>
<?php //4
function sum2($num1,$num2){
    $sum = $num1 +$num2;
    if( $sum == 30){
       
        echo '<br/>';
        echo 30;
    }
    else{
        echo '<br/>';
        echo "false";
    }
}
sum2(15,15);
sum2(14,15);
?>
<?php //5
function mulit($a){
    if($a%3 == 0){
        echo "number is ".$a; 
    }else{
        echo "number is not ".$a;
    }
}
echo '<br/>';
mulit(21);
echo '<br/>';
mulit(20);
?>

<?php //6
function checkOfInt($a){
    if($a>=20 && $a<=50){
        echo "number is ok ".$a;
    }else{
        echo "number is not ok ".$a;
    }
}
echo '<br/>';
checkOfInt(49);
echo '<br/>';
checkOfInt(100);
echo '<br/>';
checkOfInt(50);
echo '<br/>';
checkOfInt(21);
?>
<?php //7
function largest($a,$b,$c){
    if($a>$b && $a>$c){
        echo "largest is ".$a;
    }elseif ($b>$a && $b>$c){
        echo "largest is ".$b;
    }else {
        echo "largest is ".$c;
    }
}
echo '<br/>';
largest(4,10,1);
echo '<br/>';
largest(70,50,69);
?>
<?php //8
function elec($a){
    if($a<=50){
        echo $a*2.5;
    }
   elseif($a>50 && $a<=100){
        echo $a*5;
    }
    elseif($a>100 && $a<=250){
        echo $a*6.2;
    }else{
        echo $a*7.5;
    }
}
echo "<br>";
elec(45);
echo "<br>";
elec(90);
echo "<br>";
elec(300);
?>
<?php //9
function calc($n1,$n2,$operation){
    if($operation=='+'){echo "The sum =  ". $n1+$n2;}
    else if($operation=='-'){echo "The sub =  ". $n1-$n2;}
    else if($operation=='*'){echo "The mult =  ". $n1*$n2;}      
    else {echo "The mult =  ". $n1/$n2;} 
}
echo "<br>";
calc(1,2,'/');
?>
<?php //10
function input($a){
    if($a<18){
        echo "is on eligible to vote";
    } else 
    echo "ok";
}
echo "<br>";
input(17);
echo "<br>";
input(19);
?>
<?php //11
function CheckNumber($x) {
  if ($x > 0)
    {echo "Positive number";}
  elseif ($x == 0)
    {echo "Zero";}
  else
    {echo "Negative number";}
 
}
echo "<br>";
CheckNumber(5.5);
echo "<br>";
CheckNumber(-10.8);
?>
<?php //12

    function avg(array $values) {
        $sum = array_sum($values);
        $count = count($values);
        $x= $sum / $count;
        echo $x;
        if($x<=60){
            echo "F";
        }
        elseif($x>60 && $x<=70){
            echo "<br>";
            echo "D";
        }
        elseif($x>70 && $x<=80){
            echo "<br>";
            echo "C";
        }
        elseif($x>80 && $x<=90){
            echo "<br>";
            echo "B";
        }
        else{
            echo "<br>";
            echo "A";
        }
    }
    echo "<br>";
    avg([60, 86, 95, 63]);
    echo "<br>";
    avg([90, 86, 75, 83]);

