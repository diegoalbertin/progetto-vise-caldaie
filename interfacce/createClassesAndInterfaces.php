<?php 
require_once dirname(__FILE__)."\intRiscaldamento.php";
require_once dirname(__FILE__)."\intStufaElettrica.php";
require_once dirname(__FILE__)."\intCaldaiaCondensazione.php";
require_once dirname(__FILE__)."\intCaldaiaTradizionale.php";
require_once dirname(__FILE__)."\intPompaCaloreBuona.php";
require_once dirname(__FILE__)."\intPompaCaloreEconomica.php";

require_once dirname(__DIR__)."\classes\Riscaldamento.php";
require_once dirname(__DIR__)."\classes\stufaElettrica.php";
require_once dirname(__DIR__)."\classes\caldaiaCondensazione.php";
require_once dirname(__DIR__)."\classes\caldaiaTradizionale.php";
require_once dirname(__DIR__)."\classes\pompaCaloreBuona.php";
require_once dirname(__DIR__)."\classes\pompaCaloreEconomica.php";

$Riscaldamento= new Riscaldamento;
$intRiscaldamento = new intRiscaldamento($Riscaldamento);

$stufaElettrica = new StufaElettrica();
$intStufaElettrica = new intStufaElettrica($stufaElettrica);

$CaldaiaCondensazione = new CaldaiaCondensazione();
$intCaldaiaCondensazione = new intCaldaiaCondensazione($CaldaiaCondensazione);

$CaldaiaTradizionale = new CaldaiaTradizionale();
$intCaldaiaTradizionale = new intCaldaiaTradizionale($CaldaiaTradizionale);

$PompaCaloreBuona = new PompaCaloreBuona();
$intPompaCaloreBuona = new intPompaCaloreBuona($PompaCaloreBuona);

$PompaCaloreEconomica = new PompaCaloreEconomica();
$intPompaCaloreEconomica = new intPompaCaloreEconomica($PompaCaloreEconomica);
?>