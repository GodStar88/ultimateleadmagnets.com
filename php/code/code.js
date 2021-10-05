$(document).ready(function () {
 
    var table = $("#bestfreebusinesstools_table").DataTable({
      dom: "Bfrtip",
      buttons: ["copy", "csv", "excel", "pdf", "print"],
      displayLength: 10,
      ajax: `php/code/get_bestfreebusinesstools.php`
    });
  
  });