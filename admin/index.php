<?php
	include 'hlavickaAdmin.php';
	include 'navbarAdmin.php';
	include 'pataAdmin.php';



    if(isset($_SESSION['prihlaseny'])) {
        header('Location: prihlaseny.php');
        exit();
    }
?>
<?php
$chyba ="";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

     $uzivatelia = file('uzivatelia.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
     //$prihlasenie = [];
        foreach ($uzivatelia as $uzivatel) {
            list($k,$h) = explode('::', $uzivatel);
               $prihlasenie[$k] = $h;
                   }

        if($_POST['password'] === $prihlasenie[$_POST['email-address']])
        {
            $_SESSION['prihlaseny'] = 1;
            header('Location: prihlaseny.php');
            exit();
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong> Výborne... si prihlásený </strong> <?php echo "" ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
        }
        else if (!$prihlasenie[$_POST['email-address']])
        {
            ?>//uzivatel neexistuje
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong> Ups! </strong> <?php echo $chyba; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
        }
        else {
            //nespravne heslo...

        }
    }
 ?>
<body style="background-color:powderblue;">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-5 border-dark">
                    <div class="card-header text-center" ><h4>Prihlásenie</h4></div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group row was-validated">
                                <small id="emailHelp" class="form-text text-muted mb-2 ml-3" ><b>Meno</b></small>
                                <div class="input-group mx-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="text" id="email_address" class="form-control" name="email-address" required pattern="\S.{2,9}.[^()/><\][,;*_|]+">

                                    <div class="invalid-feedback">
                                      Prosím zadaj meno (5-20 znakov).
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row was-validated">
                                 <small id="emailHelp" class="form-text text-muted mb-2 ml-3"><b>Heslo</b></small>
                                <div class="input-group mx-3">
                                    <div class="input-group-prepend">
                                         <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                             </svg>
                                        </span>
                                    </div>
                                    <input type="password" id="password" class="form-control" name="password" required pattern="(?=.*\d).{5,}" >
                                    <div class="invalid-feedback">
                                      Prosím zadaj heslo (minimálne 5 znakov)
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Zapamätať prihlásenie
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-light mb-4">
                                    Prihlásiť sa
                                </button>
                                <br>
                                <a href="#" class="text-secondary">
                                    <small>Zaregistruj sa</small>
                                </a>
                                <br>
                                <a href="#" class="text-secondary">
                                    <small>Zabudol som heslo</small>
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
