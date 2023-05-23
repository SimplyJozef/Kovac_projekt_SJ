<?php 
include('functions/Database.php');
include('functions/quotes.php');

$quotesObj = new Quotes();


$quotes = $quotesObj->get_quotes();
$page_name = basename($_SERVER['SCRIPT_NAME'],".php");


foreach ($quotes as $quote) {
    if($page_name == $quote->page_name){print_r($quote->quote);}; 
    
}