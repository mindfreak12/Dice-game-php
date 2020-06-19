<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

     <style media="screen">
     html{
     			background: linear-gradient(150deg,#ec5218,#1665c1);
     		    background-size: 250% 150%;
     		    animation:  BackgroundGradient 15s ease infinite;
        			width: 100%;
     		 	font-family: Arial, Helevtica , sans-serif;
          color: white;

     		}

     		@keyframes BackgroundGradient {
     		    0%{background-position: 0% 50%;}
     		    50%{background-position: 100% 50%;}
     		    100%{background-position: 0% 50%;}
     			}
          .c1{
         justify-content: center;
align-items: center;
text-align: center;
    margin-top: 500px;
    margin-bottom: 500px;
          }

     </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="c1">


    <form  action="test.php" method="post" >
          <strong style="color:white">Please enter a number between(4-24)</strong><br>
      <input type="text" name="n1" value="">

      <button type="submit" name="button">Check</button>

    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number_of_groups = 4;
        $sum_to  =  $_POST['n1'];
        $groups = array();
        $dice=array();

        $index  = 0;

        $counter = $sum_to;
  if (isset($_POST['n1'])) {
    if ($sum_to>=4 && $sum_to<=24) {
     while($sum_to > 0)
       {
         $groups[$index] = mt_rand(1, 6);//$sum_to/mt_rand(1,4));

         $counter -= $groups[$index];
         $index++;

           if ($index==4) {
             if($counter == 0){

               for ($i=0; $i <4; $i++) {
                 echo "<br>";
                  $b=$i+1;
                  //echo "<strong> Dice ".$b." = ".$groups[$i]."</strong> ";
                  $dice[$i]=$groups[$i];

               }
               $sum_to=0;
               break;
             }
             else{
               $counter = $sum_to;
               unset($groups);
               $groups = array();
               $index=0;
             }
           }
       }
   }

   else {
     echo "<br>";
     echo "<br>";
     echo "<strong>Number isnot in range re-enter again</strong>";
   }

   for($i=0; $i <4; $i++)
   {
    if($dice[$i]==1)
    {
      echo '<img src="1.png" height="70px" width="70px" />';
    }
    else if($dice[$i]==2)
    {
      echo '<img src="2.png" height="70px" width="70px" />';
    }
    else if($dice[$i]==3)
    {
      echo '<img src="3.png" height="70px" width="70px" />';
    }
    else if($dice[$i]==4)
    {
      echo '<img src="4.png" height="70px" width="70px" />';
    }
    else if($dice[$i]==5)
    {
      echo '<img src="5.png" height="70px" width="70px" />';
    }
    else if($dice[$i]==6)
    {
      echo '<img src="6.png" height="70px" width="70px" />';
    }
    else
    {
      echo "Wrong enter please follow instruction number must be(4-24)";
    
   }
 }


  }

    }


     ?>
      </div>

  </body>
</html>
