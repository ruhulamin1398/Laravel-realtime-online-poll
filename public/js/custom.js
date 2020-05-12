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




  $("#searchText").keyup(function(){
  

   if( $.isNumeric($('#searchText').val().trim())){

    var link = $('#indexLink').val().trim() +'/polls/'+$('#searchText').val().trim();
    $("#searchLink").attr('href',link);
   }
   else{
     alert('Enter right number');
     $("#searchLink").removeAttr('href');
   }
    
  });




  
  function showResult() {
   

    var link = $('#indexLink').val().trim() + '/result/' + $('#pollId').val().trim();
    // console.log("result");
    // console.log(link);


    $.get(link, function (data) {
       console.log(data.poll.total_votes);
  
var votes= data.poll.total_votes;
      $('#totalVotes').text(votes + ' Votes ');



      // console.log ('all votes ');
      // console.log(votes);
      // console.log ('all votes ');

      var html = '';
var options  = data.options;
      $.each(options, function (i) {
        html += '<tr> <th scope="row">    <div >      <div class=" d-flex  justify-content-start">' + options[i].name + ' </div>      <div class=" d-flex   justify-content-end">' + options[i].count + ' votes </div>  </div>     <div class="progress"> <div class="progress-bar progress-bar-striped bg-dark" style="width:' + (options[i].count / votes) * 100 + '%"> </div>    ' + ((options[i].count / votes) * 100).toFixed(2) + ' %    </div> </th></tr>';

      });



      $('#resultPreview').html(html);




    });


    $('#resultArea').show();


  }  

















  
  function updateResult() {
   

    var link = $('#indexLink').val().trim() + '/result/' + $('#pollId').val().trim();
    // console.log("result");
    // console.log(link);


    $.get(link, function (data) {
       console.log(data.poll.total_votes);
  
var votes= data.poll.total_votes;
      $('#totalVotes').text(votes + ' Votes ');



      // console.log ('all votes ');
      // console.log(votes);
      // console.log ('all votes ');

      var html = '';
var options  = data.options;
      $.each(options, function (i) {
        html += '<tr> <th scope="row">    <div >      <div class=" d-flex  justify-content-start">' + options[i].name + ' </div>      <div class=" d-flex   justify-content-end">' + options[i].count + ' votes </div>  </div>     <div class="progress"> <div class="progress-bar progress-bar-striped bg-dark" style="width:' + (options[i].count / votes) * 100 + '%"> </div>    ' + ((options[i].count / votes) * 100).toFixed(2) + ' %    </div> </th></tr>';

      });
      $('#resultPreview').html(html);

    });

  }


  setInterval(updateResult, 600);












  $('#resultArea').hide();
  $("#showResultButton").click(function () {
    if ($('#resultArea:visible').length)
      $('#resultArea').hide();
    else {
      showResult();

    }
  });


  $("#voteButton").click(function () {



    if ($('input[name="vote[]"]:checked').length == 0) {
      alert('Select atleast one option');
      return false;
    }

    var link = $('#indexLink').val().trim() + '/able-to-vote/' + $('#pollId').val().trim();

    $.get(link, function (ableToVote) {


      if (ableToVote == 1) {
        var form = $('#voteCreateForm');
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          success: function (data) {
            console.log(data); 
            
          },
          error: function (data) {
            console.log(data);
          }

        });
        showResult();

      }
      else {

        alert('Your can not vote any more');
        showResult();

      }


    });

  });


  // $(document).on('click', "#pollCreateSubmit", function () {

  //   var form = $('#pollCreateForm');
  //   $.ajax({
  //     type: form.attr('method'),
  //     url: form.attr('action'),
  //     data: form.serialize(),
  //     success: function (data) {
  //       console.log(data);
  //     }

  //   });


  // });












});