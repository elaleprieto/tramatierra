(function() {

  jQuery(function() {
    $('#leyendaButtonMas').live('click', function(event) {
      $('#leyendaTop').animate({
        height: $('#leyendaInside').css('height')
      }, 2000);
      return $(this).attr('id', 'leyendaButtonMenos');
    });
    $('#leyendaButtonMenos').live('click', function(event) {
      $('#leyendaTop').animate({
        height: '1.2em'
      }, 2000);
      return $(this).attr('id', 'leyendaButtonMas');
    });
    $('.sidebarButton').on('mouseover', function(event) {
      return $($(event.target).data('onbutton')).show();
    });
    return $('.sidebarButton').on('mouseout', function(event) {
      return $($(event.target).data('onbutton')).hide();
    });
  });

}).call(this);
