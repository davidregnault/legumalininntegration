
$(function(){
  $('#formMessage').on('keypress', function(e) {
    if(e.keyCode === 13) {

      e.preventDefault();

      var objetEnvoye = {
        pseudo: $('#pseudo').val(),
        message: $('#message').val(),
        soumettre: true,
        idMessage: $('.message-block').first().data('id-message')
      };

      $.post('reception.php', objetEnvoye, function(data){
        $('#titreMessages').after(data.message);
        //console.log(data.message);
      }, 'JSON');

      $('#message').val(''); // clear the message box
      $('#message').on('focus', function() {
        this.value = '';
        });
        $('#pseudo').attr('disabled', 'disabled');

    }
  });
});

