<?php 
require_once dirname(__FILE__)."\interfacce\createClassesAndInterfaces.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css.css"/>
    <title>caldaie</title>
  </head>

  <body>
    <div class="row">
        <div class="container">
            <form method="post">
                <div class="information-container text-center">

                <div class="row">
                    <label for="">consumo corrente</label>
                    <input type="text" placeholder="Kw">
                </div>
                
                <div class="row">
                    <label for="">consumo gas</label>
                    <input type="text" placeholder="SMC">
                </div>

                </div>
                <div class="input-container text-center">

                <label for="">inserisci methodo di riscaldamento</label>

                <div class="row">
                    <label for="">stufa elettrica</label>
                    <input type="radio" name="heating-method[]">
                </div>

                <div class="row">
                    <label for="">pompa di calore buona</label>
                    <input type="radio" name="heating-method[]">
                </div>

                <div class="row">
                    <label for="">pompa di calore economica</label>
                    <input type="radio" name="heating-method[]">
                </div>

                <div class="row">
                    <label for="">caldaia tradizionale</label>
                    <input type="radio" name="heating-method[]">
                </div>

                <div class="row">
                    <label for="">caldaia a condensazione</label>
                    <input type="radio" name="heating-method[]">
                </div>

                </div>
                <input type="submit" value="calcola" name="submit">
            </form>

        </div>
    </div>
  </body>
</html>