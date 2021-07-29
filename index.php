<?php

echo "data type :" . "<br>";
function Type($a)
{
    echo ' ' . gettype($a);
}

Type(2);

echo " " . "<br>";
function letter($c)
{
    if (is_string($c)) {
        echo "Letter in fun b: " . substr_count($c, 'b');
    }else
    {
        echo 'Letter in fun: false'. "<br>";
    }
}
letter(1488);
letter('boo');
echo " ". "<br>";
$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];

function sumArr($arr) {
    $sum = 0;
    foreach($arr as $v) {
        if (is_array($v)) {
            $sum += sumArr($v);
        } else {
            $sum += $v;
        }
    }
    return $sum;
}

echo "Sum arr = ". sumArr($firstArr). "<br>";

function square($y,$x):float
{
    $y=$y*$y;
  $x=$x*$x;
  if($y>$x){
      $res=$y/$x;
  }else {
      $res=$x/$y;
  }
  return $res;
}
echo "square " . square(2,3);
