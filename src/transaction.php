<?php 

// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_BASE"]);
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
    <option value="check1" name = "Checking 1">Checking1 <?php echo $data['check1']['amount']?></option>
    <option value="check2" name = "Checking 2">Checking2 <?php echo $data['check2']['amount']?></option>
    <option value="check3" name = "Checking 3">Checking3 <?php echo $data['check3']['amount']?></option>
  </select>
 
  <br>
To: 
  <select name="To" id="from">
    <option value="check1" name = "Checking 1">Checking1 <?php echo $data['check1']['amount']?></option>
    <option value="check2" name = "Checking 2">Checking2 <?php echo $data['check2']['amount']?></option>
    <option value="check3" name = "Checking 3">Checking3 <?php echo $data['check3']['amount']?></option>

  </select><br>
Amount: 
  <input type="number" name="amount" id = "amount" >
  <br><br>
  <input type="submit">

</form>
<?php echo "<p>" . $message . "</p>";?>
