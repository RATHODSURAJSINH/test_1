<?php
if(isset($_POST["submit"])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $num3=$_POST["num3"];
      print "<h1>Maximum Number is</h1>";
      
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
  }
?>