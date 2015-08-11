$(window).load () ->
  setTimeout () ->
    $('.rollin').addClass('loaded')
  , 100
  
  $('.article h3').click (e) ->
    $(e.currentTarget).parent().toggleClass 'show'
