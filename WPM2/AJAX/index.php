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
<?php 
if(isset($_POST['submit']))
{
    $numberA = (int)$_POST['numberA'];
    $numberB = (int)$_POST['numberB'];
    $result = $numberA + $numberB;   
}
     

?>  


    <form action="" method="post">
        So A
        <input type="number" name="numberA" id="numberA">
        <br>
        So B
        <input type="number" name="numberB" id="numberB">
        <br>
        <input type="number" name="result" readonly="" id="result" value=" <?php if (isset($result)) {
                                                                                echo $result;
                                                                            } ?>">
        <button type="submit" name="submitbtn" id="submitbtn">Pluss</button>



    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#submitbtn').click(function(e){
                e.preventDefault();
                var numberA = $('#numberA').val();
                var numberB = $('#numberB').val();

                $.ajax({
                    url : 'response.php',
                    type : 'POST',
                    dataType : 'html',
                    data : {numberA : numberA,numberB : numberB},

                    success : function(data){
                        $("#result").val(data);
                    },

                    error : function(){
                        console.log('fail');
                    }
                })
            })
            // $('#show').load('AJAX/data.php');

            // var name = 'tungtk';
            // var age = 30;

            // //    $.get('data.php',{name : name,age:age},function(data){
            // //     $('#show').html(data);

            // $.ajax({
            //     url: 'data.php',
            //     type: 'post',
            //     dataType: 'html',
            //     data: {
            //         name: name,
            //         age: age
            //     },

            //     success: function() {
            //         console.log('success');
            //     },

            //     error: function() {
            //         console.log('errror');
            //     }
            // });
            // // .done(function(){
            // //     console.log('done');
            // // })
            // // .fail(function(){
            // //     console.log('fail');
            // // })
            // // .always(function(){
            // //     console.log('always');
            // // });



        });
    </script>

</body>

</html>