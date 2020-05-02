$(document).ready(function () {
    $('.group').hide();
    $('#student').show();
    $('#selectMe').change(function () {
      $('.group').hide();
      $('#'+$(this).val()).show();
    })
  $("input[placeholder]").each(function () {
          $(this).attr('size', $(this).attr('placeholder').length);
      });
  });