<!-- <?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?> -->

<!-- <?php
function add($a,$b){
    $total = $a + $b;
    echo $total;
}
add(4,6);

?> -->

<?php
$x=50;
$r=10;
function cal($x){
    $result = $x * 0.50;
    echo "this is a 50% of whatyou wrote   ". $result;
}
cal($x);
echo"<br>";
cal($r);
?>

<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>