$(document).ready(function() {
    var table = $('#example').removeAttr('width').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        fixedColumns: true
    } );
} );