import $ from 'jquery';

export function submitUploadFile(name, linkPost, callback) {
    $(document).on('submit', 'form[name="' + name + '"]', function (e) {
        e.preventDefault();
        let hasBeenProcessed = false;
        let formData = new FormData(this);
        $('.class-progres-view').show();
        $('.alert-message').hide();
        $.ajax({
            url: linkPost,
            type: 'POST',
            data: formData,
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
                    $('.alert-message').html(data.message);
                    $('#file').val('');
                    if (callback && typeof(callback) === "function") {
                        callback();
                    }
                } else {
                    $('.alert-message').html('data gagal di upload');
                }
                $('.class-progres-view').hide();
            },
            error: function (xhr, status, error) {
                console.error(error);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
}
