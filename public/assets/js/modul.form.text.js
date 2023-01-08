import $ from 'jquery';


export function submitFormText(name, linkPost) {
    $(document).on('submit', 'form[name="' + name + '"]', function (e) {
        e.preventDefault();
        let hasBeenProcessed = false;
        $('.class-progres-view').show();
        $('.alert-message').hide();
        $.ajax({
            type: 'POST',
            url: linkPost,
            data: $(this).serialize(),
            beforeSend: function () {
                //
                // memastikan hanya proses 1 x
                if (! hasBeenProcessed) {
                    hasBeenProcessed = true;
                    return true;
                } else {
                    return false;
                }
            },
            success: function (data) {
                $('.alert-message').show();
                if (data.success == true) {
                    $('form input, form textarea, form select').not('[name="_token"]').val('');
                    $('.alert-message').html(data.message);
                } else {
                    $('.alert-message').html(data.message);
                }
                $('.class-progres-view').hide();
            }
        }).done(function () {});
        return false;
    });
}
