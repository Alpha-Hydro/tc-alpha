(($) ->
  textarea = $('.materialize-textarea')
  textarea.val 'New Text'
  textarea.trigger 'autoresize'
) jQuery