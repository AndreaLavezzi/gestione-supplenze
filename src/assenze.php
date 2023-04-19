<?php
?>


<main class="container">
    <div class="row g-2 justify-content-between">
        <h2 class="col-6">Le assenze di oggi</h2>
        <button class="col-2 btn btn-primary">Segnala un'assenza</button>
    </div>
    <div class="container border border-secondary p-2 mt-4 rounded-2">
        <div class="row">
            <table id="myTable" class="table table-striped display nowrap">
                <thead>
                    <tr>
                        <th>Docente</th>
                        <th>Data</th>
                        <th>Ora</th>
                        <th>Supplenza</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</main>
<script>
    const data = [{
        "docente": "Giorgio Pancaccini",
        "data": "12/07",
        "ora": "1^",
        "supplenza": "Franco Cisco"
    }];

    $(document).ready(function() {
        $("#myTable").DataTable({
            data: data,
            columns: [{
                    data: 'docente'
                },
                {
                    data: 'data'
                },
                {
                    data: 'ora'
                },
                {
                    data: 'supplenza'
                },
                {
                    data: null,
                    className: "dt-center editor-edit",
                    defaultContent: '<i class="fa fa-pencil"/>',
                    orderable: false
                }
            ],
            language: {
                lengthMenu: '_MENU_ righe mostrate',
                zeroRecords: 'Nessun dato corrispondente alla parola cercata',
                info: 'Pagina _PAGE_ di _PAGES_',
                infoEmpty: 'Nessun dato disponibile',
                infoFiltered: '(filtrati da _MAX_ righe totali)',
                search: "Cerca:",
                "paginate": {
                    "prima": "Primo",
                    "last": "Ultimo",
                    "next": "Successivo",
                    "previous": "Precedente"
                },
            }
        });
    });
</script>