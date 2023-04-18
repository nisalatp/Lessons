<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php 
    
    foreach(glob('assets/js/app/*.js') as $file) {
        echo "<script src=$file></script>\r\n";
    }


    $pagecss = "assets/js/views/".$page.".view.js";
    if(file_exists($pagecss)){
        echo "<script src=$pagecss></script>";
    }
    ?>