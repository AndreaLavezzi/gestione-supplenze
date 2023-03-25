<?php
?>

<main>

    <div class="col-12">

        <form class="needs-alidation" id="form" novalidate="">
            <div class="row g-3">
                <h4 class="">Segnala la tua assenza</h4>

                <!--Selezione nome docente-->
                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="name" class="form-label ms-1">Nome docente</label>
                        <select class="form-select" id="name" required>
                            <option value="0" disabled selected>Inserire il docente</option>
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

                <!--Selezione tipo di assenza-->
                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="absence-type" class="form-label ms-1">Tipo di assenza</label>
                        <select class="form-select" id="absence-type">
                            <option value="0">Inserire il tipo di assenza</option>
                            <option value="1">Singolo giorno</option>
                            <option value="2">Gruppo di giorni</option>
                            <option value="3">Singole ore</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid name
                        </div>
                    </div>
                </div>

                <!--Inserimento date-->
                <div class="row g-2">
                    <!--Prima data-->
                    <div class="col-md-5" id="date-from-container">
                        <label for="date" class="form-label ms-1" id="date-from-label">Da</label>
                        <input type="date" class="form-control" id="date-from" placeholder="gg/mm/aaaa" required="">
                    </div>
                    <!--Seconda data-->
                    <div class="col-md-5" id="date-to-container">
                        <label for="date" class="form-label ms-1">A</label>
                        <input type="date" class="form-control" id="date-to" placeholder="gg/mm/aaaa" required="">
                    </div>
                </div>

                <!--Selezione ore di assenza-->
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

                <!--Selezione motivo-->
                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="reason" class="form-label ms-1">Motivo</label>
                        <select class="form-select" id="reason" required="">
                            <option value="0" selected disabled>Inserire il motivo</option>
                            <option value="1">Salute</option>
                            <option value="2">Vacanza</option>
                            <option value="3">Motivi personali</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid name
                        </div>
                    </div>

                    <!--Inserimento numero protocollo malattia-->
                    <div class="col-md-6" id="disease-protocol-number-container" style="display: none;">
                        <label for="disease-protocol-number" class="form-label ms-1">Numero protocollo malattia</label>
                        <input type="text" class="form-control" id="disease-protocol-number"
                            placeholder="Inserire il numero di protocollo malattia" required="">
                    </div>
                </div>



                <hr class="my-4">

                <!--Modale di conferma-->
                <div class="modal fade" id="confirmation-modal" tabindex="-1" aria-labelledby="confirmation-modal-label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="confirmation-modal-label">Vuoi confermare la seguente
                                    assenza?
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="modal-body">
                                <div class="row g-1">
                                    <span id="confirm-name"></span>
                                    <span id="confirm-absence-type"></span>
                                    <span id="confirm-date-from"></span>
                                    <span id="confirm-date-to"></span>
                                    <span id="confirm-hours"></span>
                                    <span id="confirm-reason"></span>
                                    <span id="confirm-disease-protocol-number"></span>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <button type="button" class="btn btn-primary">Conferma</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" id="send-button" class="btn btn-primary">
                    Invia
                </button>
        </form>




    </div>

    <script>
        let
            hours = $("#hours"),
            confirmName = $("#confirm-name"),
            confirmAbsenceType = $("#confirm-absence-type"),
            confirmDateFrom = $("#confirm-date-from"),
            confirmDateTo = $("#confirm-date-to"),
            confirmHours = $("#confirm-hours"),
            confirmReason = $("#confirm-reason"),
            confirmDiseaseProtocolNumber = $("#confirm-disease-protocol-number");

        $(document).ready(function () {

            // Cambio campi in base al tipo di assenza
            $("#absence-type").change(function () {
                switch ($(this).val()) {
                    case "1":
                        // Singolo giorno - nasconde data di fine, ore da selezionare e cambia il testo della prima data in "giorno"
                        $("#date-to-container").hide();
                        hours.hide();
                        confirmDateTo.hide();
                        confirmHours.hide();
                        $("#date-from-label").html("Giorno");
                        break;
                    case "2":
                        // Gruppo di giorni - nasconde le ore da selezionare, mostra la data di fine e cambia il testo della prima data in "da"
                        $("#date-to-container").show();
                        hours.hide();
                        confirmDateTo.show();
                        confirmHours.hide();
                        $("#date-from-label").html("Da");
                        break;
                    case "3":
                        // Singole ore - nasconde la data di fine, mostra le ore da selezionare e cambia il testo della prima data in "giorno"
                        $("#date-to-container").hide();
                        hours.show();
                        confirmDateTo.hide();
                        confirmHours.show();
                        $("#date-from-label").html("Giorno");
                        break;

                }
            });

            $("#reason").change(function () {
                switch ($(this).val()) {
                    case "1":
                        $("#disease-protocol-number-container").show();
                        break;
                    default:
                        $("#disease-protocol-number-container").hide();
                        break;

                }
            });
        });

        $("#form").submit(function (e) {
            $("#confirmation-modal").modal('show');
            e.preventDefault();
            var absenceType = $("#absence-type option:selected"),
                name = $("#name option:selected"),
                dateFrom = new Date($("#date-from").val()),
                dateTo = new Date($("#date-to").val()),
                check = [],
                reason = $("#reason option:selected"),
                diseaseProtocolNumber = $("#disease-protocol-number");

            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };

            $(".form-check :checkbox").each(function () {
                if ($(this).is(":checked")) {
                    check.push("true");
                } else {
                    check.push("false");
                }
            });

            confirmName.html("Nome: " + name.text());

            confirmAbsenceType.html("Tipo di assenza: " + absenceType.text());

            if (absenceType.val() == 2) {
                confirmDateFrom.html("Da: ");
            } else {
                confirmDateFrom.html("Giorno: ");
            }
            confirmDateFrom.append(dateFrom.toLocaleDateString('it-IT', options));

            confirmDateTo.html("A: " + dateTo.toLocaleDateString('it-IT', options));

            confirmHours.html("");
            for (var i = 0; i < check.length; i++) {
                if (check[i] == "true") {
                    confirmHours.append(" " + (i + 1) + "^ ora");
                }
            }

            confirmReason.html("Motivo: " + reason.text());

            confirmDiseaseProtocolNumber.html("Numero protocollo malattia: " + diseaseProtocolNumber.val());

        });
    </script>
</main>