<center>
<h1>    
<div class="text-center" > 
    <br><br>
<?php
     $num1=20;
      $num2=15;
      $num3=22;
    ?>
 <?php   echo " Second Number : $num2"; ?>  &nbsp; |
  <?php   echo " Third Number : $num3";  ?>
 
   </div> <br> 
   largest number of given numbers is :    
  <?php  
   if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }

?>
</center>
</h1>