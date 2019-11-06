<?php
$body_id = 'index';
include './partials/_header.php'
?>

<main class="max-with-container">
    <section id="services" class="services">
        <h2 class="services__headline">Leistungen</h2>
        <div class="services__item services__item--yellow">
            <p class="services__item-headline">Design</p>
            <img class="services__item-image" src="./assets/icons/design.svg" alt="Stifteschale">
        </div>
        <div class="services__item services__item--blue">
            <p class="services__item-headline">Strategie</p>
            <img class="services__item-image" src="./assets/icons/strategy.svg" alt="Zielscheibe">
        </div>
        <div class="services__item services__item--green">
            <p class="services__item-headline">Consulting</p>
            <img class="services__item-image" src="./assets/icons/consulting.svg" alt="Glühbirne">
        </div>
    </section>

    <section id="news" class="news">
        <h2 class="news__headline">News</h2>
        <ul class="news__list">
            <li class="news__list-item">
                <p><a class="news__list-link" href="#">365 Postkarten </a>- Eine Liebeserklärung für jeden Tag! <a
                            class="news__list-link news__list-link-more" href="#">[mehr erfahren]</a></p>
            </li>
            <li class="news__list-item">
                <p><a class="news__list-link" href="#">Award Nominierung </a>- Tolle News: ich bin bei der Endauswahl
                    2018! <a class="news__list-link news__list-link-more" href="#">[mehr erfahren]</a></p>
            </li>
            <li class="news__list-item">
                <p><a class="news__list-link" href="#">CMYK erklärt</a> - der neueste <a class="news__list-link"
                                                                                         href="#">Blog</a>-Eintrag <a
                            class="news__list-link news__list-link-more" href="#">[mehr erfahren]</a></p>
            </li>
        </ul>
    </section>

    <section id="references" class="references">
        <h2 class="references__headline">Referenzen</h2>
        <div class="references__item">
            <div class="references__item-imageWrapper">
                <img src="./assets/images/dina-meyer.jpg" alt="Tina Ubuntu">
            </div>
            <p><cite>Tina Ubuntu<br>CEO Headless Ltd.</cite></p>
            <blockquote>Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben!
            </blockquote>
        </div>
        <div class="references__item">
            <div class="references__item-imageWrapper secondImage">
                <img src="./assets/images/thomas-meyer.jpg" alt="Tom Herzog">
            </div>
            <p><cite>Tom Herzog<br>Cutter's Finest</cite></p>
            <blockquote>Große Webkunst – keine Kunst mit Alex Mayer!</blockquote>
        </div>
        <div class="references__item">
            <div>
                <img src="./assets/icons/quotation_mark.svg" alt="Quotation">
            </div>
            <div class="references__item-imageWrapper" id="vorstand">
                <img src="./assets/images/vorstand.jpg" alt="Vorstand Müller AG">
            </div>
            <div class="quoteWrapper">
                <p><cite>Vorstand Müller AG<br>KR Ernst Anker, Dr. Florian Eisner</cite></p>
                <blockquote>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</blockquote>
            </div>
        </div>
    </section>
</main>

<?php include './partials/_footer.php' ?>
</body>
</html>
