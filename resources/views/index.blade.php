<!DOCTYPE html>
<html>

<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>





  <div class="container">

    <div class="row">
      <form action="{{route('polls.store')}}" method="POST">
        @csrf


        <div class="input-group mb-3 input-group-lg">

          <input type="text" class="form-control"  name="title" placeholder="Type your question here">
        </div>

        <div id="initRow">
          <input name="options[]" placeholder="Enter your option" size="50">
        </div>
        <br><br>
    
        
        <select name="chacking" class="custom-select">
           <option selected="selected" value="1">IP Duplication Checking</option>
          <option value="0">No Duplication Checking</option>
        </select>
      <br>
      
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch1" name="multiple">
          <label class="custom-control-label" for="switch1">Allow multiple poll answers</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>





  <script>
    function addRow(section, initRow) {
      var newRow = initRow.clone().removeAttr('id').addClass('new').insertBefore(initRow),
        deleteRow = $('<a class="rowDelete"><img src="http://i.imgur.com/ZSoHl.png"></a>');

      newRow
        .append(deleteRow)
        .on('click', 'a.rowDelete', function() {
          removeRow(newRow);
        })
        .slideDown(300, function() {
          $(this)
            .find('input').focus();
        })
    }

    function removeRow(newRow) {
      newRow
        .slideUp(200, function() {
          $(this)
            .next('div:not(#initRow)')
            .find('input').focus()
            .end()
            .end()
            .remove();
        });
    }

    $(function() {
      var initRow = $('#initRow'),
        section = initRow.parent('section');

      initRow.on('focus', 'input', function() {
        addRow(section, initRow);
      });
    });
  </script>

</body>

</html>