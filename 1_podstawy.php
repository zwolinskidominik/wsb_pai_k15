<?php
  $firstName = "Janusz";
  $lastName = "Nowak";
  echo "Imię i nazwisko: $firstName $lastName<br>";
  echo 'Imię i nazwisko: $firstName $lastName<br>';

  //heredoc
  echo <<< DATA
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName
    <br>
DATA;

  $data = <<< DATA
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName
    <br>
DATA;


$bin = 0b1010;
echo $bin;
echo "<br>";

$oct = 0101;
echo $oct;
echo "<br>";

$hex = 0x1A;
echo $hex;
echo "<br>";

echo PHP_VERSION;

$x=1;
$y=1.0;

echo "<br>";
echo gettype($x);
echo "<br>";
echo gettype($y);
echo "<br>";

if ($x==$y){
    echo "Równe";
}else{
    echo "Różne";
}
echo "<br>";

if ($x===$y){
    echo "Identyczne";
}else{
    echo "Nieidentyczne";
}

?>