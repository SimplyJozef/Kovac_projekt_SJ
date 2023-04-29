<?php 
include('functions/Database.php');
include('functions/quotes.php');

$quotesObj = new Quotes();

// call the get_quotes() method to fetch the quotes
$quotes = $quotesObj->get_quotes();
$page_name = basename($_SERVER['SCRIPT_NAME'],".php");

// loop through the quotes array and display each quote
foreach ($quotes as $quote) {
    if($page_name == $quote->page_name){print_r($quote->quote);}; 
    
}