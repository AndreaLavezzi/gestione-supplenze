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
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Prezzo</th>
                        <th>Tag</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</main>
<script>
    const data = [
        {
            "id": 970,
            "uid": "c6636f91-f566-45bb-98ca-35626c05116c",
            "brand": "Siemens",
            "equipment": "Steam mop"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franca",
            "equipment": "Radiator (heating)"
        },
        {
            "id": 6324,
            "uid": "c4312555-6443-4d01-a455-b23a897e0a73",
            "brand": "Siemens",
            "equipment": "Clothes iron"
        },
        {
            "id": 261,
            "uid": "526ba66d-5219-4402-ad13-c2aa6e1c7013",
            "brand": "Franke",
            "equipment": "Radiator (heating)"
        }
    ];

    $(document).ready(function () {
        $("#myTable").DataTable({
            data: data,
            columns: [
                { data: 'id' },
                { data: 'uid' },
                { data: 'brand' },
                { data: 'equipment' }
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