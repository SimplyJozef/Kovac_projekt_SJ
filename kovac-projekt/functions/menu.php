<?php 

$menu = array("Homepage"=>"index.php",
                "About Us"=>"about.php",
                "Trending"=>"trending.php",
                "Explore Work"=>"explore.php",
                "Contact Us"=>"contact.php");
                    

function print_menu($item){
    $page_name = basename($_SERVER['SCRIPT_NAME']);
    foreach($item as $page=>$url){

        $active_status = '';
        if($page_name == $url){$active_status = 'active';}; 


        echo '<li class="nav-item ">
                  <a class="nav-link '.$active_status.' " href="'.$url.'">'.$page.'</a>
                </li>';
    }
}

?>