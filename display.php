<form>
<?php
   extract($_REQUEST);
   //showButtons();

   // note I don't have to check $button for NULL or "clear" in this example 
   //if ($button == "begin") 
      
   
   if ($button=="begin")
      showButtons($name);
   elseif ($button=="show random die"){
      showButtons($name);
      showDie();
   }
   elseif ($button=="show all dice"){
      showButtons($name);
      showAllDice();
   }

   if ($button==NULL)
      namePage();

// FUNCTIONS

function showButtons(&$name)
{
   echo <<< HERE
      <h1>Welcome $name. Lets begin</h1>
      <h2>Make a selection</h2>
      <input type="submit" name="button" value="??">
      <input type="submit" name="button" value="??">
      <input type="submit" name="button" value="show random die">
      <input type="submit" name="button" value="show all dice">
      <input type="submit" name="button" value="clear">
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

?>
</form>