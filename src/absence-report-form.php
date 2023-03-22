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
                        <label for="reason" class="form-label ms-1">Motivo</label>
                        <select class="form-select" id="reason" required="">
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
                        <input type="text" class="form-control" id="disease-protocol-number" placeholder="Inserire il numero di protocollo malattia" required="">
                    </div>
                </div>



                <hr class="my-4">

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi confermare la seguente assenza?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="modal-body">
                                <div class="row g-1">
                                    <span> Nome: <span id="confirm-name"></span> </span>
                                    <span> Tipo di assenza: <span id="confirm-absence-type"></span> </span>
                                    <span> Data inizio: <span id="confirm-date-from"></span> </span>
                                    <span> Data fine: <span id="confirm-date-to"></span> </span>
                                    <span> Ore di assenza: <span id="confirm-hours"></span> </span>
                                    <span> Motivo: <span id="confirm-reason"></span> </span>
                                    <span> Numero protocollo malattia: <span id="confirm-disease-protocol-number"></span> </span>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <button type="button" class="btn btn-primary">Conferma</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" id="send-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Invia
                </button>
        </form>




    </div>

    <script>
        $("#send-button").click(function() {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };

            var absence_type = $("#absence-type option:selected");
            var name = $("#name option:selected");
            var date_from = new Date($("#date-from").val());
            var date_to = new Date($("#date-to").val());
            var check = $('input[name=thename]:checked');
            var reason = $("#reason option:selected");
            var disease_protocol_number = $("#disease-protocol-number").val();

   

            $(".form-check :checkbox").each(function() {
                if ($(this).is(":checked")) {
                    check.push("true");
                } else {
                    check.push("false");
                }
            });

            


            $("#confirm-name").html(name.text());
            $("#confirm-absence-type").html(absence_type.text());
            $("#confirm-date-from").html(date_from.toLocaleDateString('it-IT', options));
            $("#confirm-date-to").html(date_to.toLocaleDateString('it-IT', options));
            for(var i = 0; i < check.length; i++){
                if(check[i] == "true"){
                    $("#confirm-hours").append(" " + (i+1) + "^ ora");
                }
            }
            $("#confirm-reason").html(reason.text());
            $("#confirm-disease-protocol-number").html(disease_protocol_number);
        });
    </script>
</main>