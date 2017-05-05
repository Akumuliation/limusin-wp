$(document).ready(function () {

    $('#test').on('click', function () {
        $.ajax({
            url: PJS.ajax_url,
            type: "POST",
            data: {
                action: 'test',
                test: 'pli'
            },
            success: function(data){
                data = JSON.parse(data);
                var a = '';
              for(var i = 0; i < data.length; i++) {
	              a = a + '<a class="greed" href="' + data[i].permalink +'" style="background-image: url('+ data[i].thumbnail_url +');"><h3 class="item__text">' + data[i].title +'<span>' + data[i].excerpt +'</span></h3></a>';
	              console.log(data[i].thumbnail_url);
              }

              $('.helper__content').html(a);
            }
        });
    });
});