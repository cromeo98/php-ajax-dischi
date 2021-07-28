<?php
    include __DIR__ . '/partials/db.php';
    include __DIR__ . '/partials/functions.php';
?>

<!-- Stampare a schermo una decina di dischi musicali -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax dischi</title>
    <!-- link to my framework -->
    <link rel="stylesheet" href="css/framework.css">
    <!-- link to my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link to google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <!-- link to fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <header>

        <div class="container pt-1rem">

            <div class="row between-xs middle-xs">

                <div class="col-xs-4">

                    <?php if(empty($_GET['name'])){ ?>

                        <h2>Here's Your favourite albums</h2>

                    <?php } else {?>

                        <h2>Here's <?php echo isLogged($_GET['name']) ?> favourite albums</h2>
                    
                    <?php } ?>


                </div>

                <div class="col-xs-4">

                    <div class="ms_genres-container txt-cen">

                        <h3>Genres: </h3>

                        <ul>

                            <?php foreach($playlist['genres'] as $genres){ ?>

                                <li class="d-inline-block plr-1rem txt-upp"> <?php echo $genres ?> </li>

                            <?php } ?>

                        </ul>

                    </div>

                </div>

                <div class="col-xs-4 d-flex end-xs">

                    <div class="ms_icons-container">

                        <i class="fab fa-spotify"></i>
                        <i class="fas fa-music"></i>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <main>

        <div class="container middle-xs d-flex">

            <div class="row between-xs">

                <?php foreach($albums as $album){ ?>

                    <div class="ms_one-of-five-cols txt-cen ptb-1rem">

                        <h2> <?php echo $album['title'] ?> </h2>

                        <div class="ms_img-container ptb-1rem">
                            <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?> poster">
                        </div>

                        <div class="ms_info">
                            <h3> <?php echo $album['author'] ?> </h3>
                            <h5> <?php echo $album['year'] ?> </h5>
                        </div>

                    </div>


                <?php } ?>


            </div>

        </div>

    </main>
    
    <footer class="txt-cen ptb-1rem">
        <p>Designed by a music lover</p>
    </footer>

</body>
</html>