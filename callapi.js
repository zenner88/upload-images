$(document).ready(function () {
    // $("#Save").click(function () {
        $.ajax({
            url: 'http://aimachine.brimob.id:5000/ai/list_haystack',
            type: 'GET',
            dataType: 'json',
            success: function (data, textStatus, xhr) {
                console.log(data);
                var heystack = data;
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log('Error in Operation');
            }
        });
    // });
});