$(function () {

    $('.ajaxform').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            dataType: 'json',
            data    : $(this).serialize(),
            success : function( data ) {
                // loop to set the result(value)
                // in required div(key)
                for(var id in data) {
                    $('#' + id).html( data[id] );
                }
            }
        });

        return false;
    });


    var timer, delay = 3000;

    timer = setInterval(function(){
        $.ajax({
            type    : 'POST',
            url     : 'index.php',
            dataType: 'json',
            data    : $('.ajaxform').serialize(),
            success : function(data){
                for(var id in data) {
                    $('#' + id).html( data[id] );
                }
            }
        });
    }, delay);


    //clearInterval( timer );


});


