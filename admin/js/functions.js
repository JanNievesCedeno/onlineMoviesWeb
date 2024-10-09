
if($('#datatable').length) 
{
 fntmovies();   
}
function fntmovies(){
    const action = 'show';
    const data = '';
    $.ajax({

            url: '.php',
            type: "POST",
            async: true,
            data: {
                action:action
            },
            beforeSend: function(){

            },
            success: function(response)
            {
                if(response == 'notData')
                {
                    data = "No hay datos para mostrar.";

                } else  {
                    var data = JSON.parse(response);
                }
                $('#trows').html(data);
            },
            error: function(error) {

            }
    });
}