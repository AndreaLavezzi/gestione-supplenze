<?php
?>

<main>

    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Segnala la tua assenza</h4>
        <form class="needs-validation" novalidate="">
            <div class="row g-3">
                <div class="col-md-5 me-5">
                    <label for="name" class="form-label">Nome docente</label>
                    <select class="form-select" id="name" required="" disabled>
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

                <div class="col-md-5">
                    <label for="absence-type" class="form-label">Tipo di assenza</label>
                    <select class="form-select" id="absence-type" required="">
                        <option value="">Inserire il tipo di assenza</option>
                        <option>Singolo giorno</option>
                        <option>Gruppo di giorni</option>
                        <option>Singola ora</option>
                        <option>Gruppo di ore</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid name
                    </div>
                </div>

                <div class="col-md-5 me-5">
                    <label for="date" class="form-label">Da</label>
                    <input type="date" class="form-control" id="date" placeholder="gg/mm/aaaa" required="">
                </div>

                <div class="col-md-5">
                    <label for="date" class="form-label">A</label>
                    <input type="date" class="form-control" id="date" placeholder="gg/mm/aaaa" required="">
                </div>

                
            <hr class="my-4">
            <h4 class="mb-3">Ore di assenza</h4>
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

            <hr class="my-4">

            <div class="col-md-5 me-5">
                    <label for="name" class="form-label">Motivo</label>
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
                    <label for="disease-protocol-number" class="form-label">Numero protocollo malattia</label>
                    <input type="text" class="form-control" id="disease-protocol-number" placeholder="Inserire il numero di protocollo malattia" required="">
                </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Invia</button>
        </form>
    </div>
</main>