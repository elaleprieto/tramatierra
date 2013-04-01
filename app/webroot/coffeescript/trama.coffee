jQuery ->
  $(document).on 'click', '#leyendaButtonMas', (event) ->
    $('#leyendaTop').animate({height:$('#leyendaInside').css('height')}, 2000)
    $(@).attr('id', 'leyendaButtonMenos')

  $(document).on 'click', '#leyendaButtonMenos', (event) ->
    $('#leyendaTop').animate({height:'1.2em'}, 2000)
    $(@).attr('id', 'leyendaButtonMas')

  $('.sidebarButton').on 'mouseover', (event) ->
    $($(event.target).data('onbutton')).show()

  $('.sidebarButton').on 'mouseout', (event) ->
    $($(event.target).data('onbutton')).hide()
