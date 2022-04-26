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
   elseif ($button=="Roll Two"){
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

function namePage()
{
   echo <<< HERE
   <h1>Enter Your Name</h1>
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
HERE;
}

function showDie()
{
   $die = rand(1,6);
   echo "<img src=\"die$die.jpg\">";
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
}

function twoDie() 
{
   $die1 = rand(1,6);
   echo "<img src=\"die$die1.jpg\">";
   $die2 = rand(1,6);
   echo "<img src=\"die$die2.jpg\">";
   
}


?>
</form>
