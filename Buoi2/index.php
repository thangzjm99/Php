<?php 
$arr1=['itlpus','php'];
$arr2=[6,8,9];
$arr3=['Tung','khactung7gmail',9];

echo $arr1[1];

 echo '<pre>';
 print_r($arr3);
 echo '</pre>';
 for($i=0;$i<count($arr2);$i++)
 {
     echo $arr2[$i];
 }

 //Mang ket hop
 $arr_multi = [
     'name' => 'trinh khac tung',
     'age' => 28,
     'phone' => 1231232,
 ];

 print_r($arr_multi);
 echo $arr_multi['age'];
 foreach($arr_multi as $key=>$value)
 {
     echo $key ."=>".$value;
 };

 #mang nhieu chieu
 $arrs=[
     array('iphoe6',700000),
     array('ihone5',500000),
     array('ihpne8',180000),
 ];


 for($i = 0;$i<count($arrs);$i++)
 {
   for($j=0;$j<count($arrs[$i]);$j++)
   {
       echo $arrs[$i][$j];
       echo ',';

   }  
 }

 $khoahoc=[
     
     'PHP' => array(
        'name' => 'Hoc lap trinh php',
        'price'=> 600000,
     ),
     'IOS' => array(
        'name' => 'Hoc lap trinh ios',
        'price'=> 600000,
     ),
     'Android' => array(
        'name' => 'Hoc lap trinh android',
        'price'=> 600000,
     ),
    ];
echo '<br>';
 foreach($khoahoc as $key1=>$value1)
 {
     echo $key1.'<br>';
     foreach($khoahoc[$key1] as $key2=>$value2)
     {
        echo '<br>'.$key2.'=>'.$value2.'<br>';
     };
 };


 echo '<br>';

 $itplus=[
     'giaoVien'=>array(
         'gv01' => array(
             'name'=>'Name1',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'gv02' => array(
             'name'=>'Name2',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'gv03' => array(
             'name'=>'Name3',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'gv04' => array(
             'name'=>'Name4',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
        ),
     'hocSinh'=>array(
         'hs01' => array(
             'name'=>'Name1',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'hs02' => array(
             'name'=>'Name2',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'hs03' => array(
             'name'=>'Name3',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
         'hs04' => array(
             'name'=>'Name4',
             'phone'=>123234123,
             'email'=>'thang2313@mila.com',
         ),
        ),

    
    ];

    echo '<pre>';
    foreach($itplus as $key1=>$value1)
    {
        
       
        if($key1=='giaoVien')
        {
            echo $key1;
            echo '<br>';
            foreach($value1 as $key2=>$value2)
            {
                echo $key2;
                echo '<br>';
                foreach($value2 as $key3=>$value3)
                {
                    echo $key3.'=>.'.$value3;
                    echo '<br>';
                }
            }
        }
       
    }
    
$empty=array();
array_push($empty,'Tung');
echo '<br>';
echo $empty[0];
array_push($empty,'Nam');
echo $empty[1];
unset($empty[1]); #khong ra vi da bi unset
    $string = "xin*chao*cac*ban";
    $rs = explode("*",$string);
    print_r($rs);
?>

