<!DOCTYPE html>
<html>
<body>
<a href="http://puff.mnstate.edu/~nd0821wj/private/"> Home </a> <br>
======= <br>
<a href="http://puff.mnstate.edu/~jn6160mv/private/"> Dahga's Home </a> <br>

<style>
mark{
    background-color:pink;
    color: white;}
body {
    font-family: 'Courier New', monospace;
    background-image: url('https://mocah.org/thumbs/1104173-sports-illustration-purple-dice-brand-EA-DICE-magenta-shape-number-recreation-games-font-indoor-games-and-sports-diagram-board-game-dice-game-tabletop-game.jpg');
    }
</style>


<form>
<?php
   extract($_REQUEST);
   
   if ($button=="begin")
      showButtons($name);
   /*   
   elseif ($button=="Roll One"){
      showButtons($name);
      showDie();
   }
   */
   //elseif ($button=="show all dice"){
     // showButtons($name);
    //  showAllDice();
  // }
   elseif ($button=="Roll All Three"){
      showButtons($name);
      //threeDie();
      //twoDie();
      //showDie();
      $a;
      $b;
      $c;
   }
   
   /*
   elseif ($button=="Roll Two"){
      showButtons($name);
      twoDie();
   }
   */
   if ($button==NULL or $button=="Start Over")
      namePage();


$a = threeDie(); 
$b = twoDie();
$c = showDie(); 
//$total  = $a + $b + $c;
//echo $total;


// FUNCTIONS

function showButtons(&$name)
{
   echo <<< HERE
      <h1>Welcome $name! Lets get Rollin</h1>
      <h2>Roll all three die first.</h2>
      <input type="submit" name="button" value="Roll All Three">
      <input type="submit" name="button" value="Start Over">
      <input type="hidden" name="name" value="$name">
      
HERE;
}

function namePage()
{
   echo <<< HERE
   <h1 style="text-align:center;">Are you ready to Go to Boston??</h1>
   <h2 style="text-align:center;"> <i> Well lets get started! </i></h2>
   <h3><mark> Here are some basic rules for the game before we get started!</mark></h3>
   <a href= "rules.html"><h3>rules</h3></a>
   <h1>Enter Your Name</h1>
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
HERE;
}

function threeDie() 
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   $die2 = rand(1,6);
   echo "<img src=\"die$die2.jpg\">";
   $die3 = rand(1,6);
   echo "<img src=\"die$die3.jpg\">";
   echo "<h1>the largest is " . biggestForThree($die1, $die2, $die3) . "</h1>";
   //$three = biggestForThree($die1, $die2, $die3);
   //return $three; 
}

function biggestForThree($num1,$num2,$num3)
{
    if ($num1 > $num2)
        if ($num1 > $num3)
            $largest = $num1;
        else
            $largest = $num3;
    else
        if ($num2 > $num3)
            $largest = $num2;
        else
            $largest = $num3;
    //table($largest, $array);
    //return $array;
    //print_r($array);
    return $largest; 
}

function twoDie() 
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   $die2 = rand(1,6);
   echo "<img src=\"die$die2.jpg\">";
   echo "<h1>the largest is " . biggestForTwo($die1, $die2) . "</h1>";
   //$two = biggestForThree($die1, $die2);
   //return $two;
   
}

function biggestForTwo($num1,$num2)
{
    if ($num1 > $num2)
        $largest = $num1;
    else
        $largest = $num2;
    //table($largest, $largest);
    return $largest;
}

function showDie()
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   echo "<h1>the largest is " . $die1 . "</h1>";
   //return $die1;
}

/*
function table($die1, $die2, $die3){
    $a = $die1;
    $b = $die2;
    $c = $die3; 

    $result = $a+$b+$c; 

    echo <<< HERE
    <table border="4">
        <tr>
            <td>$a</td>
            <td>+</td>
            <td>$b</td>
            <td>+</td>
            <td>$c</td>
            <td>=</td>
            <td>$result</td>
        </tr>
    </table> 
HERE;
}
*/
?>
</form>
</body>
</html>
