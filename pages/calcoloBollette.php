<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Il segugio delle bollette | Calcolo bollette</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/css.css">
        <link rel="icon" type="image/x-icon" href="../style/logo.jpg">
    </head>

  <body>
  <?php require_once(__DIR__.'../navbar.php'); ?>
        <div class="container mt-5">
            <form method="post" class="text-center">
                <div class="information-container text-center">
                <h2>Benvenuto Utente su</h2>
                <h2>IL SEGUGIO DELLE BOLLETTE</h2>
                <br>

                <div class="row">
                <label class="form-label">Tipologia del corso:</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="Kw" name="corrente">
                </div>
                
                <div class="row">
                    <label for="">consumo gas</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="SMC" name="gas">
                </div>

                 <input type="submit" name="submit" class="submit btn btn-primary mb-5" value="Calcola" />
            </form>
            <br>
            <?php 
require_once dirname(__FILE__)."\calcolaBollette.php";
error_reporting(0);
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['corrente']==0 && intval($_POST['gas'])==0){
        ?>
        <div class="text-center error">
            <br>
            <?php 
                echo "!!! non puoi inserire entrambi i consumi pari a zero !!!";
            ?> 
        </div>
        <?php
    }
    else{
        $data=calcolaBollette(intval($_POST['corrente']),intval($_POST['gas']));        
    }
}
?>
<br>
  <?php
            if(isset($data)){
                foreach($data as $bollette){
                    ?>
                    <div class="container-response">
                    <div class="row">
                    <div class= "text-center">
                        <?php
                            echo $bollette->intToString();
                            echo("<hr>");
                            ?>
                            </div>
                        </div>   
                    </div>
                    <?php
                }
            }
        ?>

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
    </script> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>