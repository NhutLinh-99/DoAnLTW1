$(document).ready(function(){
    $('.thongbao').hide();
    $('.mua').click(function(){
        var quantity = $('.quantity').text();
        quantity++;
        $('.quantity').text(quantity);
        $('.thongbao').fadeIn().slideUp(2000);
    })
})

