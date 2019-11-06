<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="./../main.css">
    <title>Alex Mayer Design</title>
</head>
<body id='<?php echo $body_id?>'>
<header>
    <h1 class="logo"><a href="./index.php">Alex Mayer</a></h1>
    <!-- header__headline -->
    <a href="#main-menu"
       id="main-menu-toggle"
       class="menu-toggle"
       aria-label="Open main menu">
        <span class="sr-only">Open main menu</span>
        <span class="fas fa-bars" aria-hidden="true"></span>
    </a>

    <nav id="main-menu" class="main-menu" aria-label="Main menu">
        <a href="#main-menu-toggle"
           id="main-menu-close"
           class="menu-close"
           aria-label="Close main menu">
            <span class="sr-only">Close main menu</span>
            <span class="fas fa-times" aria-hidden="true"></span>
        </a>
        <ul class="main-menu__nav-list">
            <li class="main-menu__list-item"><a href='./index.php'>Start</a></li>
            <li class="main-menu__list-item"><a href='#'>Leistungen</a></li>
            <li class="main-menu__list-item"><a href='#'>Blog</a></li>
            <li class="main-menu__list-item"><a href='./about.php'>Über mich</a></li>
            <li class="main-menu__list-item"><a href='#'>Kontakt</a></li>
        </ul>
    </nav>
    <a href="#main-menu-toggle"
       class="backdrop"
       tabindex="-1"
       aria-hidden="true" hidden></a>
</header>

<section class="header">
    <section id="hero" class="header__hero">
        <div>
            <h2 class="header__hero-text"><span>Glänzende Ideen</span> <span>für leuchtende</span> <span>Augen</span>
            </h2>
            <button class="header__hero-button">Angebot einholen</button>
        </div>
    </section>
</section>

