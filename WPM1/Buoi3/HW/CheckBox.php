<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="like[]" <?php checkVal('bongban'); ?> id="bongban" value="bongban">
                Bóng bàn
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="like[]" <?php checkVal('bongda'); ?> id="bongda" value="bongda">
                Bóng đá
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="like[]" <?php checkVal('caulong'); ?> id="caulong" value="caulong">
                Cầu lông
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="like[]" <?php checkVal('boiloi'); ?> id="boiloi" value="boiloi">
                Bơi lội
            </label>
        </div>

        <button class="btn btn-primary" name="submit_form" type="submit">Gửi</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php
$like = array();
if (isset($_REQUEST['submit_form'])) {
    $like = $_POST['like'];
    $result = '';
    foreach ($like as $key => $value) {
        $result .= $value;
    }
    echo $result;
}


function checkVal($val)
{
    global $like;
    foreach($like as $key => $value) {
        if ($value == $val) {
            echo 'checked';
        }
    };
}
?>


</html>