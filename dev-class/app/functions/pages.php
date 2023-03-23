<?php 





function load() {
    

    $page = filter_input(INPUT_GET,'page',FILTER_UNSAFE_RAW);


    
    $page = (!$page) ? "pages/home.php" : "pages/{$page}.php";

    return $page;
    
    
    
    
    

}

    


?>