<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="../public/app.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <h1>PHP Version</h1>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="card-container">
                        <?php foreach ($dischi as $disco) { ?>
                            <div class="music-card">
                                <img src="<?php echo $disco['poster'] ?>">
                                <h3 class="album"><?php echo $disco['title']  ?></h3>
                                <h4 class="artist"><?php echo $disco['author'] ?></h4>
                                <p class="year"><?php echo $disco['year'] ?></p>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
            </section>
        </main>

    </body>
</html>
