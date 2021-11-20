$(document).ready(function (){
    tableItems = $('#table-items').DataTable({
        "responsive":true,
        "language": {
            "search": 'Buscar <i class="fa fa-search"></i>',
            "lengthMenu": "Mostrar _MENU_",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 de 0 registros",
            "emptyTable": "No se encontraron registros",
            "zeroRecords": "No se encontraron registros",
            "paginate": {
                "first": "Inicio",
                "last": "Fin",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        },
        "info": true,
        "searching": true,
        "paging": true,
        "ordering": true,
        ajax: {
            url: '/solditems',
            type: 'get',
            dataSrc: ""
        },
        rowId: 'id',
        columns: [
            { data: 'id' },
            { data: 'description' },
            { data: 'department' },
            { data: 'price' },
            { data: 'sale_date' }, //oculto
        ]
    });
    
});