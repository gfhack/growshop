$( "#search" ).click(function() {
  event.preventDefault();
  var name = $('#param').val();
  $.ajax({
    url: 'search',
    type: 'get',
    data: {param: name},
    dataType: 'json',
    success: function (resp) {
      $('#products').fadeOut(200);

      if(resp.length == 0) {
        $('#param').parent().addClass('has-error');
        $('#products').fadeIn(200);
      } else {
        $('#param').parent().removeClass('has-error');
        $('#products').empty();
        $.each(resp, function (key, value) {
          var table = '<tr>';
          table+='<td>'+value.name+'</td>';
          table+='<td>'+value.price+'</td>';
          table+='<td>'+value.image+'</td>';
          table+='</tr>'
          $('#products').append(table);
        })
      }

      $('#products').fadeIn(200);
    }
  });
});
