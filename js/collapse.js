$(document).ready(function() {
  $('.hide').hide();
  $('[data-toggle="toggle"]').change(function(){
    $(this).parents().next('.hide').toggle();
  });
});
