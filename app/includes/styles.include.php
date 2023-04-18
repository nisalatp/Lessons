<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:ital,wght@0,100;0,700;1,500&display=swap" rel="stylesheet">
    
    <!-- font Awesome Cdn -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="icon" type="image/x-icon" href="assets/images/home_img/icon.png">


    <?php 
    
    foreach(glob('assets/css/app/*.css') as $file) {
        echo "<link rel='stylesheet' href=$file>\r\n";
    }


    $pagecss = "assets/css/views/".$page.".view.css";
    if(file_exists($pagecss)){
        echo "<link rel='stylesheet' href=$pagecss>";
    }
    ?>

