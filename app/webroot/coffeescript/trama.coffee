jQuery ->
  $('#leyendaButtonMas').live 'click', (event) ->
    $('#leyendaTop').animate({height:$('#leyendaInside').css('height')}, 2000)
    $(@).attr('id', 'leyendaButtonMenos')

  $('#leyendaButtonMenos').live 'click', (event) ->
    $('#leyendaTop').animate({height:'1.2em'}, 2000)
    $(@).attr('id', 'leyendaButtonMas')

  $('.sidebarButton').on 'mouseover', (event) ->
    $($(event.target).data('onbutton')).show()

  $('.sidebarButton').on 'mouseout', (event) ->
    $($(event.target).data('onbutton')).hide()
