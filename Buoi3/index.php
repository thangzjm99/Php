<?php
    function getName(){
        echo 'Xin chao ban </br>';
    }

    getName();

    function getInfo(){
        return 'Thong tin lop hoc';
    }

    echo getInfo();
    
    function getAge($age = 50){
        echo "tuoi cua ban la : ".$age;
    }

    // $a = 'getAge';
    // $a();

    function getFullname($first_name,$last_name)
    {
        return "Ten cua ban la : " .$first_name ." ".$last_name;
    }




    echo getFullname('Dinh','thang');


    function div($a,$b){
        return $a/$b;
    }

    echo div(2,3);


    function show($info){
        echo getInfo().$info;
    }

    $number = 10;
    function getNumber(){
        global $number;
        echo $number;
    }

    getNumber();

    echo date('d-m-Y');
    $date = '2020-09-14 20:00:00';
   
   
    echo strtotime($date);

    $convert_date = date('d-m-Y',strtotime($date));
    echo $convert_date;

    $price = 2342452500;
    echo number_format($price).'vnd';
    $hcn_str = 'hinh chu nhat';
    $hv_str = 'hinh vuong';
    $hcn_lenghth = strlen($hcn_str);
    $hcn_width = strlen($hv_str);

    $m = rand(3,$hcn_lenghth);
    $n = rand(3,$hcn_width);
    if($m %2 == 0 && $n %2 == 0)
    {
        $t = $m + $n;
        $x = 0;
        for($i=0 ;$i<$t;$i++)
        {
            if($i%2==1)
            {
                $x += $i;
            }
            
        }

        echo 'Chieu dai : '.$m;
        echo 'Chieu rong : '.$n;
        echo 'Hinh vuong : '.$x;
        echo 'Chu vi hinh chu nhat : ' .($m+$n)*2;
        echo 'Dien tich hinh chu nhat :' .($m*$n);
        echo 'Chu vi hinh vuong : '.($x*2);
        echo 'Dien tich hinh vuong : '.($x*$x);
    }
    else{
        $t = $m + $n +($m-$n);
        $x = 0;
        for($i=0;$i<$t;$i++)
        {
            if($i%2==1)
            {
                $x += $i;
            }
            
        }

        echo 'Chieu dai : '.$m;
        echo 'Chieu rong : '.$n;
        echo 'Hinh vuong : '.$x;
        echo 'Chu vi hinh chu nhat : ' .($m+$n)*2;
        echo 'Dien tich hinh chu nhat :' .($m*$n);
        echo 'Chu vi hinh vuong : '.($x*2);
        echo 'Dien tich hinh vuong : '.($x*$x);
    }
    
    echo '<hr>';
    function getSum($arr=[]){
        $sum=0;
        for($i =0;$i< count($arr);$i++)
        {
            $sum+=$arr[$i];
    }

    for($i =0;$i< count($arr);$i++)
    {
        $arr[$i] = $sum - $arr[$i];
        echo '[';
        echo $arr[$i].',';
        echo ']';
    }

    
    
}
    getSum($arr3=[1,2,3,4,5]);


?>