    // Use Morris.Area instead of Morris.Line
$(document).ready(function() {
    $('.table').DataTable();
    Waves.init();
    Waves.attach('.waves-effect', ['waves-button', 'waves-float']);
})
  


$(window).scroll(function() {
  var height = $(window).height();
  $('.sidebar').css('height',height);
})