<?php
require_once('company.php');
require_once('customerOrder.php');
$company = new Company();

$company->setName('Elabman Ltd');
echo $company->getName();
//echo $company->companyName;

$co = new CustomerOrder();
$co->register();
?>