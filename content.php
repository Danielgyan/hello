
<?php
$name = ["Tika","Daniel"]
?>

<h1>content</h1>

<ul>
  <?php 
     
     for ($i = 0; $i < count($name); $i++) {
         echo "<li> $name[$i] </li>";
     }
    
    ?> 
</ul>