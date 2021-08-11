$(document).ready(function() {

    var ajaxurl = 'get-searchclients.php';


    var table = $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        displayLength: 100,
        "ajax": `get-searchclients.php`
    });
});