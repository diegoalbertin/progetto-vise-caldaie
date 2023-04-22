<?php 
require_once dirname(__FILE__)."\calcolaBollette.php";
error_reporting(0);
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['corrente']>=0 && intval($_POST['gas'])>=0){
        $data=calcolaBollette(intval($_POST['corrente']),intval($_POST['gas']));
    }
    else{
        ?>
        <div class="text-center error">
            <?php 
                echo "!!! non puoi inserire entrambi i consumi pari a zero !!!";
            ?> 
        </div>
        <?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>caldaie</title>
  </head>

  <body>
    <div class="row">
        <div class="container-response text-center">
        <?php
            if(isset($data)){
                foreach($data as $bollette){
                    ?>
                    <div class="row">
                        <div class="single-response">
                        <?php
                            echo $bollette->intToString();
                            ?>
                        </div>   
                    </div>
                    <?php
                }
            }
        ?>
        </div>
        <div class="container">
            <form method="post" class="text-center">
                <div class="information-container text-center">

                <div class="row">
                    <label for="">consumo corrente</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="Kw" name="corrente">
                </div>
                
                <div class="row">
                    <label for="">consumo gas</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="SMC" name="gas">
                </div>

                </div>
                <input class="submit rounded" type="submit" value="calcola" name="submit">
            </form>

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