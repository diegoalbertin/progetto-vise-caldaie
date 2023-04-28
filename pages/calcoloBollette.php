<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il segugio delle bollette | Calcolo bollette</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css.css">
    <link rel="icon" type="image/x-icon" href="../style/logo.jpg">
</head>

<body>
    <div id="pageloader">
        <div class="spinner-border text-primary" id="spinner" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div class="container mt-5">
        <form method="post" class="text-center" id="myform">
            <div class="information-container text-center">
                <h2>Benvenuto Utente su</h2>
                <h2>IL SEGUGIO DELLE BOLLETTE</h2>
                <br>

                <div class="row mb-3">
                    <label class="form-label">Tipologia del corso:</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="Kw" name="corrente">
                </div>

                <div class="row mb-3">
                    <label for="">consumo gas</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="SMC" name="gas">
                </div>

                <button type="submit" class="btn btn-primary mb-5" onclick="Loading()">Calcola</button>
        </form>
        <br>
        <?php
        require_once dirname(__FILE__) . "\calcolaBollette.php";
        error_reporting(0);
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['corrente'] == 0 && intval($_POST['gas']) == 0) {
        ?>
                <div class="text-center error">
                    <?php
                    echo '<p class="pt-3 pb-3">!!! non puoi inserire entrambi i consumi pari a zero !!!';
                    ?>
                </div>
        <?php
            } else {
                $data = calcolaBollette(intval($_POST['corrente']), intval($_POST['gas']));
            }
        }
        ?>
        <br>
        <?php if (isset($data)) : ?>
            <div class="container-response">
                <?php foreach ($data as $bollette) : ?>
                    <div class="row">
                        <div class="text-center">
                            <?php
                            echo $bollette->intToString();
                            echo ("<hr>");
                            ?>
                        </div>
                    </div>
                <?php
                endforeach ?>
            </div>
        <?php endif ?>
    </div>
    </div>
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        $(window).on('load', function() {
            $("#pageloader").show();
            setTimeout(function() {
                console.log("Loading..");
                $("#pageloader").hide();
            }, 1000 * 0.5);
        });

        function Loading() {
            $("#pageloader").show();
            setTimeout(function() {
                console.log("Loading..");
                $("#pageloader").hide();
            }, 1000 * 1);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

<style>
    input {
        border-color: grey;
        border: auto;
        border-radius: 5px;
    }

    #pageloader {
        background: rgba(255, 255, 255, 0.8);
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
    }

    #spinner {
        left: 50%;
        margin-left: px;
        margin-top: -32px;
        position: absolute;
        top: 50%;
    }
</style>

</html>