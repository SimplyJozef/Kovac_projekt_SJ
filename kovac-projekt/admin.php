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
    
    .formular{
        display: flex;
    }

    .formular-add {
        display:flex;
        margin-top: 100px;
        justify-content: center;
    }

    textarea {
        border-radius: 7px;
        background-color: #86BBD8;
        border: 2px solid black;
    }

    textarea:hover{
        
        background-color: #9ec9e0;
    }

    .edit {
        padding: 8px;
        background-color: #FFD700;
        font-weight: bold;
        cursor: pointer;
        margin: 0 2px 0 2px;
        border-radius: 7px;
        border: 2px solid black;
    }

    .edit:hover {
        background-color: #FFC400;
    }

    .quote_container {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .quote_box {
        width: 50%;
        padding: 20px;
        border: 2px solid black;
        border-radius: 25px;
        background-color: #e8f0f8;
        text-align: center;
    }

</style>



<div class="quote_container">
    <div class="quote_box">
        <?php 
        foreach ($quotes as $quote) {
            if ($page_name == $quote->page_name) {
                echo "<p>" . $quote->quote . "</p>";
            }
        }
        ?>
    </div>
</div>


<form action="admin/quotes_add.php" method="post" class="formular-add">

            <input type="text" name="page_name" id="page_name" placeholder="Meno stranky">
            <input type="text" name="quote" id="quote" placeholder="citát" >
            <input type="submit" name="quote_add" class="edit">

    </form>

<table>


<?php

foreach ($quotes as $quote) {
    echo '<tr>';
    echo '<td>' .$quote->page_name. '</td>';
    // echo '<td> <textarea value="'.$quote->quote.'" rows="8" cols="100">'.$quote->quote.'</textarea> </td>';
    


    echo '<td>
            <form class="formular" action="admin/quotes_update-delete.php" method="post">
                <textarea value="'.$quote->quote.'" rows="5" cols="100" name="quote" >'.$quote->quote.'</textarea>
                <button class="edit" name="quote_update" value="'.$quote->id.'">Update</button>
                <button class="edit" name="quote_delete" value="'.$quote->id.'">Vymazať</button>
            </form>';
    echo '</tr>';
}
?>
</table>
