<?php 

    $ran_num=rand(1,100);
    $so_le=0;
    $so_nguyen_to=0;
    $sqrt_rand=sqrt($ran_num);
    echo 'Giá trị của số random n là : '.$ran_num.'<br>';
    
    for($i = 1;$i<=$ran_num;$i++)
    {
        if($i%2==1)
        {
            $so_le++;
        }

    }
    echo 'Số lẻ trong khoảng từ 1-'.$ran_num.' là : '.$so_le.'<br>';
    
    function check($ran_num) {
        // so nguyen n < 2 khong phai la so nguyen to
        if ($ran_num < 2) {
            return false;
        }
        // check so nguyen to khi n >= 2
        $squareRoot = sqrt ( $ran_num );
        for($i = 2; $i <= $squareRoot; $i ++) {
            if ($ran_num % $i == 0) {
                return false;
            }
        }
        return true;
    }
     
    echo ("Các số nguyên tố nhỏ hơn ".$ran_num." là: <br>");
    for($i = 0; $i < $ran_num; $i ++) {
        if (check ( $i )) {
            echo ($i . " ");
        }
    }

?>