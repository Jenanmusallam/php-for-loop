
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
<div class="container bg-info">
<h1>PHP  For  Loop</h1>

    <?php 
//Create a script that displays
// 1-2-3-4-5-6-7-8-9-10 on one line.
// There will be no hyphen(-) at the starting and ending position.
//Expected Output: 1-2-3-4-5-6-7-8-9-10
echo "============ Q 1 ============ <br><br>";

for($i=1;$i<=9;$i++)
{
    echo $i."-";
}
echo "10";

//2. Create a script using a for loop to add all the integers between 0 and 30 and
//display the total.
//Expected Output = total as a number

echo "<br><br> ============ Q 2 ============ <br><br>";
$totul=0;
for($i=0;$i<=30;$i++)
{
    $totul+=$i;
}
echo "Totul = ".$totul;

//3C. Create a script to construct the following pattern, using a nested for loop.


echo "<br><br> ============ Q 3C ============ <br><br>";
for ($row = 1 ; $row <=5 ; $row++ ){
    for($char = "A" ; $char <= "E" ; $char++ ){
        echo str_repeat("A" , 5-$row). str_repeat($char , $row)." <br> ";
        if($row++ > $row){
        break;
        }
    } 
}

//3B. Create a script to construct the following pattern, using a nested for loop.

echo "<br><br> ============ Q 3B ============ <br><br>";

for ($row = 1 ; $row <=5 ; $row++ ){
    for($num = 1 ; $num <= 5 ; $num++ ){
        echo str_repeat(1 , 5-$row). str_repeat($num , $row)." <br> ";
        if($row++ > $row){
        break;
        }
    } 
}

//4. Create a script to construct the following pattern, using a nested for loop.

echo "<br><br> ============ Q 4 ============ <br><br>";
for($i = 5 ; $i>= 1 ; $i--){
    for($num = 1 ; $num <=5 ; $num++){
        echo str_repeat(0 , 5 - $i) . $num . str_repeat(0 , 5 - $num) . "<br>";
        if($i-- < $i){
        break;
        }
    }
}

//5.Write a program to calculate and print the factorial of a number using a for
//loop. The factorial of a number is the product of all integers up to and including
//that number, so the factorial of 5 is 5*4*3*2*1= 120.

echo "<br><br> ============ Q 5 ============ <br><br>";
$factor=1;
for($i = 5 ; $i>= 1 ; $i--){
    $factor*= $i;
}
echo $factor;


echo "<br><br> ============ Q 6 ============ <br><br>";
//6. Write a program to calculate and print the Fibonacci sequence using a for loop.
//Fibonacci is a series of numbers where a number is the sum of previous two
//numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
//so on.
function Fibonacci($num6){ 
      
    if ($num6 == 0) 
        return 0;     
    else if ($num6 == 1) 
        return 1;     
      
    else
        return (Fibonacci($num6-1) +  
                Fibonacci($num6-2)); 
} 
  
$num6 = 9; 
for ($counter = 0; $counter < $num6; $counter++){   
    echo Fibonacci($counter),'  '; 
} 
echo "<br><br> ============ Q 7 ============ <br><br>";
//7. Write a program which will count the "c" characters in the text
//"OrangeAcademy".

$char7 = "OrangeAcademy";
echo substr_count($char7,"c");




echo "<br><br> ============ Q 8 ============ <br><br>";
//8.Write a PHP script that creates the following table using for loops. Add
//cellpadding="3px" and cellspacing="0px" to the table tag
for($i=1;$i<= 6;$i++)
{
for ($j=1;$j<=5;$j++)
  {
  echo " $i * $j = ".$i*$j." || ";
  }
 }

echo "<br><br> ============ Q 9 ============ <br><br>";
//9.Write a PHP script using nested for loop that creates a chess board as shown below.
//Use table width="270px" and take 30px as cell height and width.
echo ' <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
for($row=1;$row<=8;$row++)
{
   echo "<tr>";
      for($col=1;$col<=8;$col++)
		 {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
        }
     echo "</tr>";
}

echo "</table>";

echo "<br><br> ============ Q 10 ============ <br><br>";
//10.Write a PHP script that creates the following table (use for loops).
echo ' <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
for($i=1;$i<= 10;$i++)
{
    $result=1;
     echo "<tr>";
    for ($j=1;$j<=10;$j++)
      {
        $result=$i*$j;
      echo "<td > $result</td>";
      }
      echo "</tr>";
}
echo "</table>";

echo "<br><br> ============ Q 11 ============ <br><br>";
//11.Write a PHP program which iterates the integers from 1 to 50. For multiples of
//three print "Fizz" instead of the number and for the multiples of five print "Buzz".
//For numbers which are multiples of both three and five print "FizzBuzz".

function fizzBuzz(){
for($i=1;$i<= 50;$i++)
{
  if(($i%3 ==0) &&($i%5 ==0))
  echo "FizzBuzz"." ";
  elseif(($i%3 ==0))
  echo "Fizz"." ";
  elseif(($i%5 ==0))
  echo "Buzz"." ";
  else
  echo($i)." ";
 
}

} 
fizzBuzz();



echo "<br><br> ============ Q 12 ============ <br><br>";
//12.Write a PHP program to generate and display the first n lines of a Floyd
//triangle. (use n=5 and n=11 rows).
//According to Wikipedia Floyd's triangle is a right-angled triangular array of natural
//numbers, used in computer science education. It is named after Robert Floyd. It
//is defined by filling the rows of the triangle with consecutive numbers, starting
//with a 1 in the top left corner:
//Sample output for n = 5 :
$n = 5;
$count = 1;
$n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     echo $count . " ";
     $count++;
   } 
	echo "<br>";
   }

echo "<br><br> ============ Q 13 ============ <br><br>";
//13.. Write a PHP program to print alphabet pattern 'A'.
function letterA(){
for($i=0 ; $i<= 9; $i++){
    for($j=0 ; $j<= 8; $j++){  
     if(( ($j==1 || $j==8) && ($i!=0)) || ( ($i==0 || $i==5) && ($j>1 && $j< 8)))   
     echo "*";
     else
     echo "&nbsp;"." ";
    }
    echo "<br>";
  }
}
letterA();

echo "<br><br> ============ Q 14 ============ <br><br>";
//14.. Write a PHP program to print alphabet pattern 'B'.
function letterB(){
    for($i=0 ; $i<= 10; $i++){
        for($j=0 ; $j<= 11; $j++){  
         if( $j==1 ||  (($i ==0 || $i ==5 || $i ==10 ) && ($j<10 && $j>1)) || ($j ==10 && ( $i !=0 &&  $i !=5 &&  $i !=10))) 
         echo "*";
         else
         echo "&nbsp;"." ";
        }
        echo "<br>";
      }
    }
letterB();


echo "<br><br> ============ Q 15 ============ <br><br>";
//15. Write a PHP program to print alphabet pattern 'C'.
function letterC(){
    for($i=0 ; $i< 11; $i++){
        for($j=0 ; $j< 11; $j++){  
         if (($j == 1 && ($i != 0 && $i != 10)) || (($i == 0 || $i == 10) && ($j > 1 && $j < 9)) || ($j == 9 && ($i == 1 or $i == 9)))

         echo "*";
         else
         echo "&nbsp;"." ";
        }
        echo "<br>";
      }
    }
letterC();



echo "<br><br> ============ Q 16 ============ <br><br>";
//16.Write a PHP program to print alphabet pattern.
//Expected Output:
function Alphabet(){
 $alpha = range('A', 'Z');  
  for ($i=1; $i<= 5; $i++) {    
      for($j=5; $j>$i; $j--) {    
        echo '&nbsp;';  
      }  
     
    for ($k=1; $k <= $i; $k++) {    
        echo " ".$alpha[$k-1];   
    }    
     echo "<br>";  
    } 
  for ($i=1; $i<= 5; $i++)
   {    
        for($j=0; $j<=$i; $j++) {    
          echo '&nbsp;';  
        }  
       
      for ($k=1; $k <=5-$i; $k++) {    
          echo " ".$alpha[$k-1];   
      }    
       echo "<br>";  
    }  
}
Alphabet();


?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




