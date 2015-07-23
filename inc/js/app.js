$(document).ready(function(){

    $('span.timeago').each(function(){
        var val = $(this).html(),
            timeago = jQuery.timeago(new Date(val));
        $(this).html(timeago);
    });

    $('#submit').submit(function(e){
        if (!$(this).find('input[type=text]').val()) {
            alert("Please enter a title");
        } else {
            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:{ title:$(this).find('input[type=text]').val(), time: new Date() },
                success:function(e){
                    console.log(e);
                }
            });
        }
        e.preventDefault();
    });
});