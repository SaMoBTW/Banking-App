<?php 

// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_ROOT'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_ROOT"]);
/////////////////////////////////////
include_once(APP_ROOT . "/BoilerPlate/head.view.php");
include_once(APP_ROOT . "/BoilerPlate/header.view.php");

$data = 
[
    'check1'=> 
    [
        'number'=> '1234 5678 9101',
        'amount'=> 2000,
        'name' => "Checking 1"
    ],
    'check2' =>
    [
        'number'=> '9876 5432 1032',
        'amount'=> 0,
        'name'=> "Checking 2"
    ],
    'check3'=> 
    [
        'number'=> '4675 4582 2158',
        'amount'=> 1000000,
        'name'=> "Checking 3"
    ]
];

$message = "";


if(isset($_POST['amount']))
{
  if(isset($_POST)) {
     $b1 = $data[$_POST['from']];
     $b2 = $data[$_POST['To']];
     $amount = $_POST['amount'];
     
     
     if($b1['amount'] -$amount <0) {
      $message = '<p class = "insufffunds">Insuffient funds </p>';
     }
     else
     {
      $data[$_POST['from']]['amount'] -= $amount;
      $data[$_POST['To']]['amount'] += $amount;
      $message = '<p class = "sufffunds">Suffient funds </p>';
     }
}

}

?>
<form class="transaction-form" method="post" action = "">

  <h2>
    From:
  </h2> 
  <select name="from" id="from">
    <option value="check1" name = "Checking 1"><span class="checking-spans">Checking 1</span> $<?php echo $data['check1']['amount']?></option>
    <option value="check2" name = "Checking 2"><span class="checking-spans">Checking 2</span> $<?php echo $data['check2']['amount']?></option>
    <option value="check3" name = "Checking 3"><span class="checking-spans">Checking 3</span> $<?php echo $data['check3']['amount']?></option>
  </select>
 
  <br>
  <h2>
    To:
  </h2>
 
  <select name="To" id="from">
    <option value="check1" name = "Checking 1"><span class="checking-spans">Checking 1</span> $<?php echo $data['check1']['amount']?></option>
    <option value="check2" name = "Checking 2"><span class="checking-spans">Checking 2</span> $<?php echo $data['check2']['amount']?></option>
    <option value="check3" name = "Checking 3"><span class="checking-spans">Checking 3</span> $<?php echo $data['check3']['amount']?></option>

  </select><br>
  <h2>Amount:</h2>
 
  <input type="number" name="amount" id = "amount" >
  <br><br>
  <input type="submit" class="transaction-form-button">

</form>
<?php echo "<p>" . $message . "</p>";?>
<?php include_once($APP_ROOT . '/Banking-App/src/BoilerPlate/footer.view.php') ?>
