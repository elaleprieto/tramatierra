(function() {

  jQuery(function() {
    $(document).on('click', '#leyendaButtonMas', function(event) {
      $('#leyendaTop').animate({
        height: $('#leyendaInside').css('height')
      }, 2000);
      return $(this).attr('id', 'leyendaButtonMenos');
    });
    $(document).on('click', '#leyendaButtonMenos', function(event) {
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
