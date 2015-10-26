(($) ->
  textarea = $('.materialize-textarea')
#  textarea.val 'New Text'
  textarea.trigger 'autoresize'

  form = $('form')
#
#  form.validate
#    errorClass: 'invalid'
#    errorPlacement: (error,element)->
#      element.next("label").attr("data-error", error.contents().text())

#  console.log $('form-group').hasClass 'has-error'
#  $('#modal1').openModal()

) jQuery