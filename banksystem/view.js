var button = document.querySelector('.view');
var modal = document.querySelector('.modal-content');
var section = document.querySelector('.sect');
var span = document.querySelector('.close');

// display the modal
/*button.addEventListener('click', function() {
    modal.style.display = 'block';
});*/


// close the modal
span.addEventListener('click', function() {
    $(".modal-content").fadeOut(1000);
    $(".sect").fadeOut(1500);
})



$('.view').each(function() {
    $(this).on('click', function() {
        var spain = $(this).attr("id");
        var dataString = 'value=' + spain;
        var spinner = "<img src='./images/spin.gif' alt='loading...' style='margin-left:35%; height:200px; width:200px;'/>";

        $(".sect").fadeIn();
        $(".modal-content").fadeIn();
        $(".modal-content").html(spinner);


        $(".modal-content").load('modal.php?' + dataString);

        //if mask is clicked
        $('.sect').click(function() {
            $(this).hide();
            $('.window').hide();
        });
    });
});