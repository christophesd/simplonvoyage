<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Voyage</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800|Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/voyage.css">

</head>

<body>

    <?php include ('php/nav.php'); ?>
    
    <div class="navpage">
        <ul>
            <li><a href="index.php">Nos voyages</a> > </li>
            <li><a href="">USA</a> > </li>
            <li><a href="">Vacances 4* à Miamie</a></li>
        </ul>
    </div>

    <main id="main">
        <h2>Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</h2>
        <div class="gallery">
            <!-- Radio -->
            <input type="radio" name="gallery" id="img-1" checked />
            <input type="radio" name="gallery" id="img-2" />
            <input type="radio" name="gallery" id="img-3" />
            <div class="galleryslide">
                <div data-am-gallery>
                    <!-- Images -->
                    <div class="images">
                        <div class="image" style="background-image: url(./img/destination/001/main.jpg);">
                            <!-- <label class="left" for="img-3"></label>
                            <label class="right" for="img-2"></label> -->
                            <div class="slide-content blackshadow">
                                <p class="slide-p-des">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                            </div>
                        </div>
                        <div class="image" style="background-image: url(./img/destination/001/001.jpg);">
                            <!-- <label class="left" for="img-1"></label>
                            <label class="right" for="img-3"></label> -->
                            <div class="slide-content blackshadow">
                                <p class="slide-p-des">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                            </div>
                        </div>
                        <div class="image" style="background-image: url(./img/destination/001/002.jpg);">
                            <!-- <label class="left" for="img-2"></label>
                            <label class="right" for="img-1"></label> -->
                            <div class="slide-content blackshadow">
                                <p class="slide-p-des">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="navigation">
                        <label class="dot" for="img-1"></label>
                        <label class="dot" for="img-2"></label>
                        <label class="dot" for="img-3"></label>
                    </div>
                    <div class="leftright">
                        <div class="slide">
                            <label class="left" for="img-3"></label>
                            <label class="right" for="img-2"></label>
                        </div>
                        <div class="slide">
                            <label class="left" for="img-1"></label>
                            <label class="right" for="img-3"></label>
                        </div>
                        <div class="slide">
                            <label class="left" for="img-2"></label>
                            <label class="right" for="img-1"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mini">
                    <label for="img-1" style="background-image: url(./img/destination/001/main.jpg);"></label>
                    <label for="img-2" style="background-image: url(./img/destination/001/001.jpg);"></label>
                    <label for="img-3" style="background-image: url(./img/destination/001/002.jpg);"></label>
            </div>
        </div>

        test






    </main>


    <?php include ('php/footer.php'); ?>

</body>

</html>