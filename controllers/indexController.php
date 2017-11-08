<?php

// CALL ALL THE CLASSES
function chargerClasses($classe)
{
  require 'entities/' . $classe . '.php';
}
spl_autoload_register('chargerClasses');


// CALL BANK ACCOUNT MANAGER
require('./model/bankAccountManager.php');

// SET DB
$db = new PDO('mysql:host=localhost; dbname=CB', 'root', 'Paperback1966');

// SET BANK ACCOUNT MANAGER
$bankAccountManager = new BankAccountManager($db);

// GET ALL BANK ACCOUNTS
$accounts = $bankAccountManager->getList();

//CREATE NEW OBJETCS ACCOUNTS FROM DATABASE
foreach ($accounts as $key => $account) {

    $accounts[$key] = new BankAccount($account);

  }


// CALL INDEX VIEW
require 'views/indexView.php';

 ?>
