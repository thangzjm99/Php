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
    <form action="" method="GET">

        <table class="table" border="1px solid" style="width : 400px; margin : 0px auto;">
            <tbody>
                <tr>
                    <td colspan="2">Thực hành toán tử</td>
                </tr>
                <tr>
                    <td>Nhập số thứ nhất</td>
                    <td><input type="number" id="num1" name="num1"></td>
                </tr>
                <tr>
                    <td>Số thứ hai</td>
                    <td><input type="number" id="num2" name="num2"></td>
                </tr>
                <tr>
                    <td>Toán tử</td>
                    <td>
                        <ul>
                            <li><input type="radio" name="calculate" id="cong" value="cong">+</li>
                            <li><input type="radio" name="calculate" id="tru" value="tru">-</li>
                            <li><input type="radio" name="calculate" id="nhan" value="nhan">*</li>
                            <li><input type="radio" name="calculate" id="chia" value="chia">/</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit_form">Tính</button></td>
                    <td><input type="text" readonly></td>
                </tr>
            </tbody>
        </table>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<?php 
    if(isset($_REQUEST['submit_form']))
    {
        
    }

?>