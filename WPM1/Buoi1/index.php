<?php
// echo "Xin chafo <br>";
// echo 100;
// $name = "<br> hello";
// echo $name;
// $x = 'y';
// $$x = 'z';
// echo gettype($$x);
// $num = '10abc';
// echo $num;
// $num2 = (int)$num;
// echo $num2;
// echo '<br>';
// $str = "Noi dung van ban";
// unset($str);
// echo $str;
// echo isset($num);
// if (isset($num)) {
//     echo 1;
// } else {
//     echo 0;
// }
// echo '<br>';
// echo "abc" . 'xyz' . 'asdsad';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// // echo __FILE__;
// // echo __LINE__;

// $a = 10;
// $b = 5;
// $c = 15;
// $max = ($a > $b) ? $a : $b;
// $max = ($max > $c) ? $max : $c;
// echo "Max = " . $max;
// echo '<br>';
// $thuNgay = 2;

// switch ($thuNgay) {
//     case '2':
//         echo 'hom nay la thu 2';
//         # code...
//         break;
//     case '3':
//         echo 'hnay la thu 3';
//     default:
//         echo 'gia tri khong hop le';
//         break;
//     }

// $day = rand(2,8);

// switch ($day) {
//     case '2':
//         # code...
//         echo "Hom nay la thu 2";
//         break;
//     case '3':
//         # code...
//         echo "Hom nay la thu 3";
//         break;
//     case '4':
//         # code...
//         echo "Hom nay la thu 4";
//         break;
//     case '5':
//         # code...
//         echo "Hom nay la thu 5";
//         break;
//     case '6':
//         # code...
//         echo "Hom nay la thu 6";
//         break;
//     case '7':
//         # code...
//         echo "Hom nay la thu 7";
//         break;
//     case '8':
//         # code...
//         echo "Hom nay la thu 8";
//         break;
    
//     default:
//         # code...
//         break;
// };

echo '<br>';
$electric = rand(100,1000);
$price = 0;
if($electric<=300)
{
    echo 'So dien dung la :'.$electric;
    $price = $electric * 2000;
    echo 'Gia dien la : '.$price.'VND';

}
else if($electric<=500)
{
    echo 'So dien dung la :'.$electric;
    $price = ($electric % 300) * 3000 + 300*2000;
    echo 'Gia dien la : '.$price.'VND';
}
else if($electric<=600)
{
    echo 'So dien dung la :'.$electric;
    $price = ($electric % 500) * 4000 + 200 * 3000 + 300 * 2000;
    echo 'Gia dien la : '.$price.'VND';
}
else{
    $price = ($electric % 600) * 5000 + 100*4000 + 200 * 3000 + 300 * 2000;
    echo 'So dien dung la :'.$electric;
    echo 'Gia dien la : '.number_format($price).'VND';
}
    
for ($i=0; $i < 10; $i++) {
    echo $i; 
    # code...
    
}
?>