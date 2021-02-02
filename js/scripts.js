$('#send-form').on('submit', function (e) {

    var form = $(this);
    e.preventDefault();

    $('.spinner').removeClass('none');
    $('.invalid-feedback.name').hide();

    setTimeout(function() {

        var check_name_b = $('#name').val().trim().split(" ");
        if (check_name_b.length < 2) {
            $('.spinner').addClass('none');
            $('.invalid-feedback.name').show();
            return false;
        }

        $.ajax({
            url:"/save_form.php",
            type:"post",
            data: form.serialize(),
            success: function(data){
                $('.spinner').addClass('none');
                $('.alert').removeClass('none');

                setTimeout(function() {
                    $('form').find("input[type=text]").val("");
                    $('.alert').addClass('none');
                }, 3000);
            }
        });
    }, 1000);

});