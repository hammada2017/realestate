$(function () {
    // $('.order').click(function (e) {
    //     e.preventDefault();
    //     $('#modal-order').modal('show')
    //         .find('#modalContent')
    //         .load($(this).attr('href'));
    // });

    // $('#modalButtonHide').click(function () {
    //     $('#modal-order').modal('hide');
    // });

    $('#orders-amount').change(function () {
        var amount = $(this).val();
        var catPrice = $('#cat-price').val();
        $('#orders-value').val(amount * catPrice);
        
    });

    $('#btn-print').click(function(){
        $('.main-sidebar, .main-footer').css({"display": "none"});
    });

    $('.has-treeview .nav-link').click(function(){
        $(this).css({ "background-color": "#9e410c"});
    });
});