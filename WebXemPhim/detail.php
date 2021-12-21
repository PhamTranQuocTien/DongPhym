<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="https://4.bp.blogspot.com/-ECrZkU4VV3I/WTHBy8HP2RI/AAAAAAAACmM/vSZhb8xyb84XKH1AKxiuWPwzryztC0pbQCLcB/s400/MovieYahFavicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>DongPhym</title>
</head>
<body>
    <div class="main">


        <?php  
            // import header
            include("./assets/components/header/header.php");

            // import detail movie
            include("./assets/components/app/detailPage/movie_detail.php");
        ?>

        
        <div class="app">   
            <div class="grid wide">
                <div class="row">
                    <?php 
                        include("./assets/components/app/detailPage/content_detail.php");
                    ?>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php 
            // import footer
            // include("./assets/components/footer/footer.php");
        ?>
    </div>
    
</body>
</html>

