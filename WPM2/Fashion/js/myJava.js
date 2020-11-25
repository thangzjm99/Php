$(document).on("click", ".del-cart", function(e) {
    e.preventDefault();
    var id = $(this).val();
    var check = confirm("Ban co muon xoa san pham khoi gio hanh?");

    if (check) {
        $.ajax({
            url: "server/del_cart.php",
            type: "post",
            dataType: "html",
            data: { id: id },

            success: function(data) {
                console.log(data);
                $("#table-cart").load(" .data-table");
            },
        });
    }
});


$(document).on('change', '.update-cart', function(e) {
    var qty = $(this).val()
})