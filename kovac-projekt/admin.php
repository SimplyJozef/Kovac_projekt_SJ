<?php 
include('functions/Database.php');
include('functions/quotes.php');

$quotesObj = new Quotes();

// call the get_quotes() method to fetch the quotes
$quotes = $quotesObj->get_quotes();
$page_name = basename($_SERVER['SCRIPT_NAME'], ".php");

?>

<title>
      <?php 
        include('functions/title_name.php')
        ?>  
</title>

<style>
    table {
        width: 50%;
        margin: auto;
        border: black 3px solid;
        padding: 20px;
        background-color: #86BBD8;
    }
    .nadpis{
        width: 50%;
        margin: auto;
    }
    
    td:nth-child(2) {
        background-color: #5580A0;
        border-radius: 7px;
    }

    .edit {
        padding: 10px;
        border: none;
        background-color: #FFD700;
        font-weight: bold;
        cursor: pointer;
    }

    .edit:hover {
        background-color: #FFC400;
    }

</style>

<div class="nadpis">
<h1>Citáty</h1>

<form action="admin/quotes_add.php" method="post">

            <input type="text" name="page_name" id="page_name" placeholder="Meno stranky">
            <input type="text" name="quote" id="quote" placeholder="citát">
            <input type="submit" name="quote_add">

    </form>
</div>
<table>
<?php
foreach ($quotes as $quote) {
    echo '<tr>';
    echo '<td>' . $quote->page_name . '</td>';
    echo '<td>' . $quote->quote . '</td>';
    
    echo '<td>
            <form action="admin/quotes_delete.php" method="post">

                <button class="edit" name="quote_delete" value="'.$quote->id.'">Vymazať</button>

            </form>';

    echo '</tr>';
}
?>
</table>
