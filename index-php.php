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

</head>
<body>

    <header>

    </header>

    <main>

        <div class="container">

            <div class="row">

                <?php foreach($albums as $album){ ?>

                    <div class="ms_one-of-five-cols p-1rem txt-cen">

                        <h3> <?php echo $album['title'] ?> </h3>

                        <div class="ms_img-container">
                            <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?> poster">
                        </div>

                        <div class="ms_info">
                            <h5> <?php echo $album['author'] ?> </h5>
                            <h5> <?php echo $album['year'] ?> </h5>
                        </div>

                    </div>


                <?php } ?>


            </div>

        </div>

    </main>
    
    <footer>

    </footer>

</body>
</html>