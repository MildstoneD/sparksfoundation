$('.block2-btn-addcart').each(function() {
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function() {
        var texter1 = $(this).parent().parent().parent().find('#txter1').val();
        var texter2 = $(this).parent().parent().parent().find('#txter2').val();
        var ptexter1 = "p" + texter1;
        var ntexter1 = "n" + texter1;
        var dataString = 'id=' + texter1 + '&page=' + texter2;
        var spinner = "<img src='pop-up/loadee.gif' alt='loading...' />";
        var id = '#dialog';

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();









        //Set heigth and width to mask to fill up the whole screen
        $('#mask').css({ 'width': maskWidth, 'height': maskHeight });

        //transition effect		
        $('#mask').fadeIn(500);
        $('#mask').fadeTo("slow", 0.9);

        //to set spinner
        $("#san").html(spinner);



        //Set the popup window to center
        $(id).css('top', winH / 2 - $(id).height() / 2);
        $(id).css('left', winW / 2 - $(id).width() / 2);

        //transition effect
        $(id).fadeIn(2000);


        //if mask is clicked
        $('#mask').click(function() {
            $(this).hide();
            $('.window').hide();
        });





        $.ajax({
            type: "GET",
            url: "add-to-cart.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) == "empty") {
                    $(".empty").show();
                    setTimeout(function() {
                        $(".empty").fadeOut();
                    }, 4000);
                } else if ($.trim(data) == "disable") {
                    $(".disable").show();
                    setTimeout(function() {
                        $(".disable").fadeOut();
                    }, 4000);

                } else if ($.trim(data) == "error") {
                    $(".error").show();
                    setTimeout(function() {
                        $(".error").fadeOut();
                    }, 4000);
                } else {
                    //window.location = "exam.php";
                    $('#mask').hide();
                    $('.window').hide();
                    swal(nameProduct, "is added to cart !", "success");

                    $.ajax({
                        type: "GET",
                        url: "check-cart.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) == "negative") {

                                $("." + ntexter1).each(function() {
                                    $(this).show();
                                    $("." + ptexter1).hide();
                                });

                            } else {
                                //window.location = "exam.php";
                                $("." + ptexter1).each(function() {
                                    $(this).show();
                                    $("." + ntexter1).hide();
                                });
                            }
                        }
                    });



                    $.ajax({
                        type: "GET",
                        url: "cart-counter.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-total").empty();
                                $(".header-icons-noti").text(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-total").empty();
                                $(".header-icons-noti").text(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-listing.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".jena").empty();
                                $(".jena").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".jena").empty();
                                $(".jena").html(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-active-listing.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-wrapitem").empty();
                                $(".header-cart-wrapitem").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-wrapitem").empty();
                                $(".header-cart-wrapitem").html(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-total.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-total").empty();
                                $(".header-cart-total").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-total").empty();
                                $(".header-cart-total").html(data);
                            }


                        }
                    });




                }
            }
        });



    });
});










$('.btn-addcart-product-detail').each(function() {
    var nameProductb = $('.product-detail-name').html();
    $(this).on('click', function() {
        var texter1 = $(this).parent().parent().parent().find('#txter1').val();
        var texter2 = $(this).parent().parent().parent().find('#txter2').val();
        var ptexter1 = "p" + texter1;
        var ntexter1 = "n" + texter1;
        var dataString = 'id=' + texter1 + '&page=' + texter2;
        var spinner = "<img src='pop-up/loadee.gif' alt='loading...' />";
        var id = '#dialog';

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();









        //Set heigth and width to mask to fill up the whole screen
        $('#mask').css({ 'width': maskWidth, 'height': maskHeight });

        //transition effect		
        $('#mask').fadeIn(500);
        $('#mask').fadeTo("slow", 0.9);

        //to set spinner
        $("#san").html(spinner);



        //Set the popup window to center
        $(id).css('top', winH / 2 - $(id).height() / 2);
        $(id).css('left', winW / 2 - $(id).width() / 2);

        //transition effect
        $(id).fadeIn(2000);


        //if mask is clicked
        $('#mask').click(function() {
            $(this).hide();
            $('.window').hide();
        });





        $.ajax({
            type: "GET",
            url: "add-to-cart.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) == "empty") {
                    $(".empty").show();
                    setTimeout(function() {
                        $(".empty").fadeOut();
                    }, 4000);
                } else if ($.trim(data) == "disable") {
                    $(".disable").show();
                    setTimeout(function() {
                        $(".disable").fadeOut();
                    }, 4000);

                } else if ($.trim(data) == "error") {
                    $(".error").show();
                    setTimeout(function() {
                        $(".error").fadeOut();
                    }, 4000);
                } else {
                    //window.location = "exam.php";
                    $('#mask').hide();
                    $('.window').hide();
                    swal(nameProductb, "is added to cart !", "success");

                    $.ajax({
                        type: "GET",
                        url: "check-cart.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) == "negative") {

                                $("." + ntexter1).each(function() {
                                    $(this).show();
                                    $("." + ptexter1).hide();
                                });

                            } else {
                                //window.location = "exam.php";
                                $("." + ptexter1).each(function() {
                                    $(this).show();
                                    $("." + ntexter1).hide();
                                });
                            }
                        }
                    });



                    $.ajax({
                        type: "GET",
                        url: "cart-counter.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-total").empty();
                                $(".header-icons-noti").text(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-total").empty();
                                $(".header-icons-noti").text(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-listing.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".jena").empty();
                                $(".jena").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".jena").empty();
                                $(".jena").html(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-active-listing.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-wrapitem").empty();
                                $(".header-cart-wrapitem").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-wrapitem").empty();
                                $(".header-cart-wrapitem").html(data);
                            }


                        }
                    });




                    $.ajax({
                        type: "GET",
                        url: "cart-total.php",
                        data: dataString,
                        success: function(data) {
                            if ($.trim(data) >= 0) {

                                $(".header-cart-total").empty();
                                $(".header-cart-total").html(data);

                            } else {
                                //window.location = "exam.php";
                                $(".header-cart-total").empty();
                                $(".header-cart-total").html(data);
                            }


                        }
                    });




                }
            }
        });



    });
});












$('.block2-btn-addcart').each(function() {
    var texter1 = $(this).parent().parent().parent().find('#txter1').val();
    var texter2 = $(this).parent().parent().parent().find('#txter2').val();
    var ptexter1 = 'p' + texter1;
    var ntexter1 = 'n' + texter1;
    var dataString = 'id=' + texter1 + '&page=' + texter2;
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "check-cart.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) == "negative") {

                    $("." + ntexter1).each(function() {
                        $(this).show();
                        $("." + ptexter1).hide();
                    });

                } else {
                    //window.location = "exam.php";
                    $("." + ptexter1).each(function() {
                        $(this).show();
                        $("." + ntexter1).hide();
                    });
                }
            }
        });


        $.ajax({
            type: "GET",
            url: "cart-counter.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) >= 0) {

                    $(".header-cart-total").empty();
                    $(".header-icons-noti").text(data);

                } else {
                    //window.location = "exam.php";
                    $(".header-cart-total").empty();
                    $(".header-icons-noti").text(data);
                }


            }
        });




        $.ajax({
            type: "GET",
            url: "cart-listing.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) >= 0) {

                    $(".jena").empty();
                    $(".jena").html(data);

                } else {
                    //window.location = "exam.php";
                    $(".jena").empty();
                    $(".jena").html(data);
                }


            }
        });


        $.ajax({
            type: "GET",
            url: "cart-active-listing.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) >= 0) {

                    $(".header-cart-wrapitem").empty();
                    $(".header-cart-wrapitem").html(data);

                } else {
                    //window.location = "exam.php";
                    $(".header-cart-wrapitem").empty();
                    $(".header-cart-wrapitem").html(data);
                }


            }
        });


        $.ajax({
            type: "GET",
            url: "cart-total.php",
            data: dataString,
            success: function(data) {
                if ($.trim(data) >= 0) {

                    $(".header-cart-total").empty();
                    $(".header-cart-total").html(data);

                } else {
                    //window.location = "exam.php";
                    $(".header-cart-total").empty();
                    $(".header-cart-total").html(data);
                }


            }
        });


    });
});





$('.block2-btn-addwishlist').each(function() {
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function() {
        swal(nameProduct, "is added to wishlist !", "success");
    });
});