$('#modal-message').on('shown.bs.modal', function( e ){
  $(e.currentTarget).find('input:first').focus();
});

$('a[name=send]').click(function(){
  var link = $(this);
  $.ajax({
    type: 'POST',
    url: '/function-email.php',
    data: $('#form-message').serialize(),
    dataType: 'json',
    beforeSend: function(){
      link.addClass('btn-info')
          .removeClass('btn-success')
          .html("<i class='fa fa-spinner fa-spin'></i>");
    },
    complete: function(){
      link.addClass('btn-default')
          .removeClass('btn-info')
          .html("Close");
    },
    error: function( e ){
      console.log( e );
    },
    success: function( response ){
      // display status message
      console.log( response );
    }
  });
});
