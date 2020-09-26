<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

.wrapper {

    margin: 0px auto;
}
</style>


<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST" name="register" onsubmit="return FormValidate();"
                        enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Họ tên <span style="color: red;" id="errorName">(*)</span></label>
                                <input type="text" name="name" class="form-control" id="name" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="phone">Phone <span style="color: red;" id="erorPhone">(*)</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email">Email <span style="color: red;" id="erorEmail">(*)</span></label>
                                <input type="text" name="email" class="form-control" id="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <input type="file" class="form-control-file" name="image" id="image" placeholder="" required>
                        </div>
                        <button type="submit" name="submit_btn" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
        if(isset($_POST['submit_btn']))
        {
    
            $info_path = 'info.txt';
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $image = $_FILES['image'];
            $image_name = $image['name'] ;
            $image_tmp_name = $image['tmp_name'];
            move_uploaded_file($image_tmp_name,'img/'.$image_name);
            $file_write = fopen($info_path,"a");
            fwrite($file_write,$name."*".$phone."*".$email."*".$image_name."\n");
        

        
           
            $file_read= fopen($info_path,"r");
            $list_info=[];
            while(!feof($file_read)){
                $list_info[] =  explode("*",fgets($file_read));       
                }

                array_pop($list_info);
            foreach($list_info as $value)
            {
              
    
    ?>


                            <tr>
                                <td><img style="width : 100px;height : 100px" src="./img/<?php echo $value[3]; ?>"
                                        alt=""></td>
                                <td><?php echo $value[0]; ?></td>
                                <td><?php echo $value[1]; ?></td>
                                <td><?php echo $value[2]; ?></td>

                            </tr>


                            <?php 
                
            }
            }  
           
        
    ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>



    <!-- Optional JavaScript -->
    <script>
    function FormValidate() {
        var name = document.getElementById('name').value;
        var errorName = document.getElementById('errorName');
        var regexName = /^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/;

        var phone = document.getElementById('phone').value;
        var erorPhone = document.getElementById('erorPhone');
        var regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        var email = document.getElementById('email').value;
        var errorEmail = document.getElementById('erorEmail');
        var reGexEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

        var image = document.getElementById('image').value;
        if (name == '' || name == null) {
            errorName.innerHTML = "Họ tên không được để trống!";
        } else if (!regexName.test(name)) {
            errorName.innerHTML = "Họ tên không hợp lệ!";
        } else {
            errorName.innerHTML = '';
        }

        if (phone == '' || phone == null) {
            erorPhone.innerHTML = "Số điện thoại không được để trống!";
        } else if (!regexPhone.test(phone)) {
            erorPhone.innerHTML = "SĐT không hợp lệ!";
        } else {
            erorPhone.innerHTML = '';
        }

        if (email == '' || email == null) {
            errorEmail.innerHTML = "Email không được để trống!";
        } else if (!reGexEmail.test(email)) {
            errorEmail.innerHTML = "Email không hợp lệ!";
            email = '';
        } else {
            errorEmail.innerHTML = '';
        }

        
        // if(image == '' || image == null)
        // {
        //     image='';
        // }

        if (name && phone && email ) {
            // Người dùng đã nhập đúng thông tin
            return true;
            // return true; thực hiện việc submit form
        } else {

            
        }
        return false;

    }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>