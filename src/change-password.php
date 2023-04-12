<?php
?>

<link rel="stylesheet" href="css/style.css">

<main class="d-flex align-items-center min-vh-100">
    <div class="container text-center shadow-lg rounded-3 py-4">
        <div class="row">
            <div class="col-12"><img src="img/41290578.jpg" class="img-fluid" width="150" height="150" alt="" srcset="">
            </div>
            <h1 class="display-3">Crea una nuova password</h1>
            <small class="text-body-primary">La tua nuova password deve essere
                diversa da quella usata precedentemente</small>
        </div>

        <div class="row justify-content-center">
            <form class="col-10 col-md-6 col-lg-4 mt-4" action="">

                <div class="mb-1" id="username-container">
                    <label for="username" class="form-label ms-1">Vecchia password</label>
                    <input type="password" class="form-control" id="username" placeholder="mario.rossi@iisviolamarchesini.edu.it">
                </div>
                <div class="mb-1" id="username-container">
                    <label for="username" class="form-label ms-1">Nuova password</label>
                    <input type="password" class="form-control" id="username" placeholder="mario.rossi@iisviolamarchesini.edu.it">
                </div>
                <div class="mb-1" id="username-container">
                    <label for="username" class="form-label ms-1">Conferma la nuova password</label>
                    <input type="password" class="form-control" id="username" placeholder="mario.rossi@iisviolamarchesini.edu.it">
                </div>

                <button type="submit" id="send-button" class="btn btn-primary col-6 my-3">
                    Conferma
                </button>
            </form>
        </div>
    </div>

</main>