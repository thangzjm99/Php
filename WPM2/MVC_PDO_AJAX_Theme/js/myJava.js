getAll();

function getAll() {
    $.get("server/member/list_member.php", function(data) {
        $("#view_data").html(data);
    });
}

$(document).on('click', '.delete-student', function() {

    var id = $(this).val(); //Lay id ra
    var check = confirm('ban co muon xoa khong ??');
    if (check) {
        $.ajax({
            url: 'server/member/delete-student.php',
            type: 'POST',
            dataType: 'html',
            data: { id: id },

            success: function(data) {
                $("#noti").html(data);
                getAll();
            }

        })

    }

});