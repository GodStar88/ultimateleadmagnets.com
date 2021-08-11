$(document).ready(function () {
  $("#load").hide();
  var table = $("#example23").DataTable({
    dom: "Bfrtip",
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    displayLength: 20,
    ajax: `php/file/get_file.php`
  });

  $('#upload').on('click', function () {
    var file_data = $('#fileToUpload').prop('files')[0];

    if (file_data == null) return;

    var form_data = new FormData();
    form_data.append('fileToUpload', file_data);
    console.log(form_data);
    $.ajax({
      url: 'php/file/upload.php', // <-- point to server-side PHP script 
      dataType: 'text', // <-- what to expect back from the PHP script, if anything
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'post',
      success: function (response) {
        console.log(response);
        alert(response);
      }
    });
  });

  var table = $("#example23").DataTable();

  $("#example23 tbody").on("click", "#delete", function () {
    var trNode = $(this).parents("tr");
    var filename = trNode.children()[2].innerHTML;
    var username = trNode.children()[3].innerHTML;
    table
      .row($(this).parents("tr"))
      .remove()
      .draw();
    $.ajax({
      url: "php/file/delete_file.php",
      data: {
        username: username,
        filename: filename
      },
      type: "GET",
      success: function (response) {
        alert(response);
      }
    });
  });

});