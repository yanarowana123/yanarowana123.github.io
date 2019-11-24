

$(document).on('change', '.select', function() {
    let selected = $(this).val();
    let a = '.'+$(this).attr('date');
    let date = $(a).attr('date');
    let user_id = $(this).data('id');


    $.ajax({
        url: 'attendance/upd',
        type: 'POST',
        data: {
            selected:selected,
            user_id:user_id,
            date:date

        },
        success: function(data) {
            console.log(data);
        },
        error: function() {
            alert('Error');
        }
    });
});