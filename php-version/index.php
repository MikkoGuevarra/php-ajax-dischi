<?php include '../dbase/dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <div class="genres-cont">
                        <select class="genres">
                            <option value="">Choose Genre</option>
                            <?php foreach ($genres as $genre) { ?>
                                <option value="<?php echo $genre ?>">
                                    <?php echo $genre ?>
                                </option>
                                <?php
                            } ?>
                        </select>
                    </div>
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
        <script id="card-template" type="text/x-handlebars-template">
            <div class="music-card">
                <img src="{{poster}}">
                <h3 class="album">{{title}}</h3>
                <h4 class="artist">{{author}}</h4>
                <p class="year">{{year}}</p>
            </div>
        </script>

        <script src="../public/app.js" charset="utf-8"></script>
    </body>
</html>
