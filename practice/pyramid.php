<!-- *
**
***
****
***** -->

<!-- <?php
for($i=0;$i<=5;$i++){        
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
?> -->



<!-- *  
      *  *  
    *  *  *  
  *  *  *  *  
*  *  *  *  *   -->

<!-- <?php
//Star Pyramid Size
$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?> -->





<!-- 1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5 -->


<!-- <?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br/>";
}
?> -->



<!-- 
******
*****
****
***
**
* -->

<!-- 
<?php
for($i=0;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "*";
    }
echo "<br>";
}
?> -->