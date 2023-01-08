import $ from 'jquery';

export function buttonDelete(name, callback) {
    $(document).on('click', 'button[name="' + name + '"]', function (e) {
        e.preventDefault();
        let id = $(this).attr('data');
        let link = $(this).attr('data1');
        $('.class-progres-view').show();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: link,
            type: 'delete',
            data: {
                'id': id
            },
            success: function (data) {
                $('.class-progres-view').hide();
                if (callback && typeof(callback) === "function") {
                    callback();
                } else {
                    $('.content-load').load(link);
                }
            }
        });
    });
}
