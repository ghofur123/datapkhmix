import $ from 'jquery';

export function submitFormPut(name, linkPut) {
    $(document).on('submit', 'form[name="' + name + '"]', function (e) {
        e.preventDefault();
        $('.class-progres-view').show();
        $('.alert-message').hide();

        $.ajax({
            url: linkPut,
            type: 'PUT',
            data: $(this).serialize(),
            success: function (data) {
                $('.alert-message').show();
                if (data.success == true) {
                    $('.alert-message').html(data.message);
                } else {
                    $('.alert-message').html(data.message);
                }
                $('.class-progres-view').hide();
            }
        });
        return false;
    });
}
