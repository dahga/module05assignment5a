<form>
<?php
   extract($_REQUEST);
   
   if ($button=="begin")
      showButtons($name);
   elseif ($button=="Roll One"){
      showButtons($name);
      showDie();
   }
   elseif ($button=="show all dice"){
      showButtons($name);
      showAllDice();
   }
   elseif ($button=="Roll All Three"){
      showButtons($name);
      threeDie();
   }
   if ($button=="Roll Two"){
      showButtons($name);
      twoDie();
   }

   if ($button==NULL or $button=="Start Over")
      namePage();

// FUNCTIONS

function showButtons(&$name)
{
   echo <<< HERE
      <h1>Welcome $name! Lets get Rollin</h1>
      <h2>Roll all three die first.</h2>
      <input type="submit" name="button" value="Roll All Three">
      <input type="submit" name="button" value="Roll Two">
      <input type="submit" name="button" value="Roll One"><br>
      <input type="submit" name="button" value="show all dice">
      <input type="submit" name="button" value="Start Over">
      <input type="hidden" name="name" value="$name">
HERE;
}
/*
function db()
{
if (!( $database = mysqli_connect( "localhost", "nadin-qaqos", "??????","nadin-qaqos_dice"))))
      die( "Could not connect to database" );

    $query = "INSERT INTO score(first, second, third, total) VALUES (";
    $query = $query . "'$name','$owner','$species','$sex','$birth','$death')";
   
   
   echo "<h4>query: $query</h4>"; 
   if ( !( $result = mysqli_query( $database,$query ) ) ) {
      echo "Could not execute query! <br />";
      die( mysqli_error() );
   }
   else 
      echo "$name added to pet database.";
   mysqli_close($database);
   echo <<< HERE
   <form method="post" action="example3.php">
   <input type="submit" name="button" value="return">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;

}
*/
function namePage()
{
   echo <<< HERE
   <h1>Enter Your Name</h1>
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
HERE;
}


function showAllDice()
{
   for ($i=1; $i<=6; $i++)
   echo "<img src=\"die$i.jpg\">";
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
    return $largest;
}


function twoDie() 
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   $die2 = rand(1,6);
   echo "<img src=\"die$die2.jpg\">";
   echo "<h1>the largest is " . biggestForTwo($die1, $die2) . "</h1>";
   
}

function biggestForTwo($num1,$num2)
{
    if ($num1 > $num2)
        $largest = $num1;
    else
        $largest = $num2;
    
    return $largest;
}

function showDie()
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   echo "<h1>the largest is " . $die1 . "</h1>";
}

?>
</form>
