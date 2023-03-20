<?php
?>

<main>

    <div class="col-12">

        <form class="needs-validation" novalidate="">
            <div class="row g-3">
                <h4 class="">Segnala la tua assenza</h4>

                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="name" class="form-label ms-1">Nome docente</label>
                        <select class="form-select" id="name" required="">
                            <option value="">Inserire il docente</option>
                            <option>Raspa Massimiliano</option>
                            <option>Dall'Ara Enrico Ermanno</option>
                            <option>Mazzullo Alessandro</option>
                            <option>Visentin Alessandro</option>
                            <option>Lamantea Cesare Nicola</option>
                            <option>Manfrini Anita</option>

                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid name
                        </div>
                    </div>
                </div>


                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="absence-type" class="form-label ms-1">Tipo di assenza</label>
                        <select class="form-select" id="absence-type" required="">
                            <option value="0">Inserire il tipo di assenza</option>
                            <option value="1">Singolo giorno</option>
                            <option value="2">Gruppo di giorni</option>
                            <option value="3">Singola ora</option>
                            <option value="4">Gruppo di ore</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid name
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="date" class="form-label ms-1">Da</label>
                        <input type="date" class="form-control" id="date-from" placeholder="gg/mm/aaaa" required="">
                    </div>

                    <div class="col-md-5">
                        <label for="date" class="form-label ms-1">A</label>
                        <input type="date" class="form-control" id="date-to" placeholder="gg/mm/aaaa" required="">
                    </div>
                </div>

                <div id="hours">
                    <label for="hours" class="form-label">Ore di assenza</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hour-one">
                        <label class="form-check-label" for="same-address">1^ ora</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hour-two">
                        <label class="form-check-label" for="same-address">2^ ora</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hour-three">
                        <label class="form-check-label" for="same-address">3^ ora</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hour-four">
                        <label class="form-check-label" for="same-address">4^ ora</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hour-five">
                        <label class="form-check-label" for="same-address">5^ ora</label>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="name" class="form-label ms-1">Motivo</label>
                        <select class="form-select" id="name" required="">
                            <option value="">Inserire il motivo</option>
                            <option>Salute</option>
                            <option>Vacanza</option>
                            <option>Motivi personali</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid name
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <label for="disease-protocol-number" class="form-label ms-1">Numero protocollo malattia</label>
                        <input type="text" class="form-control" id="disease-protocol-number"
                            placeholder="Inserire il numero di protocollo malattia" required="">
                    </div>
                </div>



                <hr class="my-4">

                <div class="d-flex justify-content-center align-content-center" id="button">
                    <div class="w-50 btn btn-primary btn-lg" id="send-button">Invia</div>
                </div>
        </form>
    </div>

    <script>
        $("#send-button").click(function () {
            var absence_type = $("#absence-type option:selected");
            var name = $("#name option:selected");
            var date_from = new Date($("#date-from").val());
            var date_to = new Date($("#date-to").val());
            var check = [];
            console.log(absence_type.text(), name.text(), date_from, date_to.text(), check);
        });
    </script>
</main>