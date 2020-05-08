$(document).ready(function () {
    $('.table').DataTable({
        "aaSorting": [[0, "asc"]],
        "aLengthMenu": [[3, 50, 100, -1], [3, 50, 100, "All"]],
        "pageLength": 3,
        "stateSave": true,
        "columnDefs": [{
            "targets": [0, 4, 5],
            "orderable": false
        }],
    });
});