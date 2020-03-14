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

</head>

<body>

    <nav class="navbar">
        <h1 class="navbar-title">Simplon Voyage</h1>
        <label class="navbar-burger" for="toggle">
            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.888889 13H15.1111C15.6 13 16 12.5125 16 11.9167C16 11.3208 15.6 10.8333 15.1111 10.8333H0.888889C0.4 10.8333 0 11.3208 0 11.9167C0 12.5125 0.4 13 0.888889 13ZM0.888889 7.58333H15.1111C15.6 7.58333 16 7.09583 16 6.5C16 5.90417 15.6 5.41667 15.1111 5.41667H0.888889C0.4 5.41667 0 5.90417 0 6.5C0 7.09583 0.4 7.58333 0.888889 7.58333ZM0 1.08333C0 1.67917 0.4 2.16667 0.888889 2.16667H15.1111C15.6 2.16667 16 1.67917 16 1.08333C16 0.4875 15.6 0 15.1111 0H0.888889C0.4 0 0 0.4875 0 1.08333Z"
                    fill="#1A7D9F" />
            </svg>
        </label>
        <input type="checkbox" id="toggle" />
        <ul class="navbar-menu">
            <li>
                <a href="#">Nos séjours</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <header class="headerslide">

        <div data-am-gallery>
            <!-- Radio -->
            <input type="radio" name="gallery" id="img-1" checked />
            <input type="radio" name="gallery" id="img-2" />
            <input type="radio" name="gallery" id="img-3" />
            <!-- Images -->
            <div class="images">
                <div class="image" style="background-image: url(img/destination/001/main.jpg);">
                    <a href="#main" class="gotobottom"></a>
                    <div class="slide-content">
                        <span class="slide-title">Les meilleurs Deals</span>
                        <p class="slide-p">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                        <span class="slide-price">à partir de 684€</span>
                        <a href="#" class="slide-seemore">Voir le Deal</a>
                    </div>
                </div>
                <div class="image" style="background-image: url(img/destination/002/main.jpg);">
                    <a href="#main" class="gotobottom"></a>
                    <div class="slide-content">
                        <span class="slide-title">Les meilleurs Deals</span>
                        <p class="slide-p">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                        <span class="slide-price">à partir de 684€</span>
                        <a href="#" class="slide-seemore">Voir le Deal</a>
                    </div>
                </div>
                <div class="image" style="background-image: url(img/destination/003/main.jpg);">
                    <a href="#main" class="gotobottom"></a>
                    <div class="slide-content">
                        <span class="slide-title">Les meilleurs Deals</span>
                        <p class="slide-p">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                        <span class="slide-price">à partir de 684€</span>
                        <a href="#" class="slide-seemore">Voir le Deal</a>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <div class="navigation">
                <label class="dot" for="img-1"></label>
                <label class="dot" for="img-2"></label>
                <label class="dot" for="img-3"></label>
            </div>
        </div>

    </header>

    <main id="main">
        <h2>Nos derniers séjours :</h2>
        <div class="cards">
            <div class="card">
                <img src="img/destination/001/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/002/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/003/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/004/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/005/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/006/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/007/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/008/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
            <div class="card">
                <img src="img/destination/009/main.jpg" alt="" class="card-img">
                <div class="card-content">
                    <p class="card-content-title">Vacances 4* à Miami : 7 jours à partir de 684€, hôtel 4* avec piscine et vol A/R inclus</p>
                    <span class="card-content-price">à partire de 684€</span>
                    <span class="card-content-seemore">Voir le Deal</span>
                </div>
            </div>
        </div>
        <div class="linkpage">
            Page 1
            <a href="#">></a>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>