<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curl</title>
    <link rel="shortcut icon" href="css/img/Logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />

</head>

<body>
    <div class="main-content">
        <header>
            <section class="logo left">
                <img src="./css/img/Logo.svg" class="left" alt="" />
                <span>Curl</span>
            </section>
            <nav class="right">
                <ul>
                    <li>
                        <a href="#how-does-it-work">
                            How does it work ?
                        </a>
                    </li>
                    <li>
                        <a href="#why-us">Why us ?</a>
                    </li>
                    <li style="display: none;">Donate</li>
                    <li style="display: none;">
                        <a href="#contact-us" >
                            Contact us
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Welcome to <b>Curl</b> link shortener</h1>
            <p>Please paste the link you want to shorten in the input below</p>
            <input type="text" name="link" id="link-input" placeholder="https://www.example.com/page">
            <button id="shorten" type="submit">
                Shorten
            </button>
        </main>
    </div>
    <div class="container">
        <section class="how-does-it-work" id="how-does-it-work">
            <h3 class="title">How does it work ?</h3>
            <div class="left">
                <img src="css/img/clipboard.svg" alt="">
                <h3>1 <sup>st</sup> step </h3>
                <p>Paste the link in the input above</p>
            </div>
            <div class="left">
                <img src="css/img/settings.svg" alt="">
                <h3>2<sup>nd</sup> step </h3>
                <p>we generate a short link</p>
            </div>
            <div class="left">
                <img src="css/img/link-2.svg" alt="">
                <h3>3<sup>rd</sup> step </h3>
                <p>you click on the generated link and you will be directed automatically to your link</p>
            </div>
        </section>
        <section id="why-us" class="why-us">
            <h3 class="title">Why us ?</h3>
            <div class="left">
                <img src="css/img/lock.svg" alt="">
                <h3>Privacy</h3>
                <p>we do not share your data and your activities with advertisers</p>
            </div>
            <div class="left">
                <img src="css/img/shield.svg" alt="">
                <h3>Security</h3>
                <p>we are a safe website to navigate and also we generate safe links</p>
            </div>
            <div class="left">
                <img src="css/img/credit-card.svg" alt="">
                <h3>No Ads</h3>
                <p>this website is not a revenue-earning project so there is no ads</p>
            </div>
        </section>
        <section class="contact-us" id="contact-us" style="display: none;">
            <h3 class="title">Contact us </h3>
            <form action="" class="contact-us-form">
                <label>Your name</label>
                <input type="text">
                <label>Your e-mail address</label>
                <input type="text">
                <label>Your e-mail message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button class="send">
                    <span>Send</span>
                </button>
            </form>
        </section>
    </div>
    <footer>
        This website is designed and programmed by <a href="https://github.com/LoqmanOuagague/">@Loqman.ouagague</a>
        <span>(E-mail address: <a href="mailto:loqman.ouagague@gmail.com">loqman.ouagague@gmail.com</a>)</span>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>