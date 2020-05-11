$(document).ready(function () {










  function addRow(section, initRow) {
    var newRow = initRow.clone().removeAttr('id').addClass('new').insertBefore(initRow),
      deleteRow = $('');

    newRow
      .append(deleteRow)
      .on('click', 'a.rowDelete', function () {
        removeRow(newRow);
      })
      .slideDown(300, function () {
        $(this)
          .find('input').focus();
      })
  }

  function removeRow(newRow) {
    newRow
      .slideUp(200, function () {
        $(this)
          .next('div:not(#initRow)')
          .find('input').focus()
          .end()
          .end()
          .remove();
      });
  }

  $(function () {
    var initRow = $('#initRow'),
      section = initRow.parent('section');

    initRow.on('focus', 'input', function () {
      addRow(section, initRow);
    });
  });





  $(document).on('click', "#pollCreateSubmit", function () {

    var form = $('#pollCreateForm');
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize(),
      success: function (data) {
        console.log(data);
      }

    });


  });












});