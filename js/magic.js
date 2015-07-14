$('#modal-message').on('shown.bs.modal', function( e ){
  $(e.currentTarget).find('input:first').focus();
});

$('#modal-message').on('hidden.bs.modal', function( e ){
  resetModal( $(e.currentTarget) );
});

function resetModal( modal ){
  // remove any alerts
  modal.find('.alert, .fa-spinner').remove();
  // show send button with proper text, and hide close button
  modal.find('a[name=send]').eq(0)
       .html('<i class="fa fa-paper-plane-o fa-fw"></i> Send')
       .removeClass('btn-info hide')
       .addClass('btn-success')
       .prev()
       .addClass('hide');
  // clear fields
  modal.find('input, textarea').val('');
}

$('a[name=send]').click(function(){
  var link = $(this);
  $.ajax({
    type: 'POST',
    url: '/email.php',
    data: $('#form-message').serialize(),
    dataType: 'json',
    beforeSend: function(){
      link.addClass('btn-info')
          .removeClass('btn-success')
          .html("<i class='fa fa-spinner fa-spin'></i>");
    },
    complete: function(){
      link.addClass('hide').prev().removeClass('hide');
    },
    error: function( e ){
      // display status message
      var modalBody = link.parents('.modal').eq(0).find('.modal-body').eq(0);
      var alert = "<div class='alert alert-danger'>\
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>\
                       <span aria-hidden='true'>&times;</span>\
                     </button>Encountered an error while sending.</div>";
      modalBody.find('.alert').remove();
      modalBody.prepend( alert );
      console.log( 'ERROR' );
      console.log( e );
    },
    success: function( response ){
      console.log( response );
      // display status message
      var modalBody = link.parents('.modal').eq(0).find('.modal-body').eq(0);
      var alert = "<div class='alert alert-"+response.status+"'>\
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>\
                       <span aria-hidden='true'>&times;</span>\
                     </button>"+response.msg+"</div>";
      modalBody.find('.alert').remove();
      modalBody.prepend( alert );
    }
  });
});
