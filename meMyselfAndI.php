<!DOCTYPE html>
<html lang="en">
<head>
    <title>My skills and opportunities</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png">
    <script>
        if(localStorage.getItem('isDarkTheme') === 'true')
        {
            document.write('<link id="pageStyle" rel="stylesheet" href="styles/styleDark.css">');
        }
        else
        {
            document.write('<link id="pageStyle" rel="stylesheet" href="styles/styleLight.css">');
        }
    </script>
</head>
<body>
<div class="header">
    <a href="mainPage.php" class="nav-item">Return to main page</a>
    <a href="#ContactMe" class="nav-item">Contact me</a>
    <a id="button1" onclick="Negative_Positive_PageAboutMe()" onmousedown="return false;">☾</a>
</div>
<div class="main">
    <img id="photoOfMe" src="images/square%20onidzuka%20black.png" alt="Actually photo of myself" title="Me at 9 years old">
    <p class="subArticle_AboutPage">What I can</p>
    <p class="mainText_AboutPage">
    <h2>My skills</h2>
    <p>
        I`m a first year student on faculty of computer engineering.<br/>
        My soft skills:<br/>
        - self-study skills;<br/>
        - responsibility;<br/>
        - in some cases, if I really interested in project I work on, I can be very picky.<br/>
        My hard skills: I`m learning C++, PHP and JavaScript programing languages.<br/>
        There is small list of my achievements in every language:
    </p>
    <div class="icons">
        <div class="icon">
        <div id="Cplusplus_icon" onclick="PopupShow(1)"></div>
        <h2 class="iconText">Programing language C++</h2>
        </div>
        <div class="icon">
        <div class="icon" id="PHP_icon" onclick="PopupShow(2)"></div>
        <h2 class="iconText">Programing language PHP</h2>
        </div>
        <div class="icon">
        <div class="icon" id="JS_icon" onclick="PopupShow(3)"></div>
        <h2 class="iconText">Programing language JavaScript</h2>
        </div>
    </div>
</div>
<div id="CplusplusPopup" onclick="PopupHide(1)">
    <div>
    <p class="PopupText">That programming language I started learn early in school and it best known for me.
        I`m learning an object-oriented programming.</p>
    </div>
</div>
<div id="PHPPopup" onclick="PopupHide(2)">
    <div>
        <p class="PopupText">I started learn PHP recently and I know it not so good as, for example,
            C++, but I intend to continue learn it. This site is a good example of my skills in PHP.</p>
    </div>
</div>
<div id="JSPopup" onclick="PopupHide(3)">
    <div>
        <p class="PopupText">I started learn JavaScript when began stying in university.
        Also I still learn it. This site is a good example of my skills in JavaScript.</p>
    </div>
</div>
</body>
<footer>
   <div id="ContactMe"></div>
   <div class="ContactMeBox">
       <form id="subscription_form" class="form_sub">
           <h2>Do you want to contact me? I will text you!</h2>
           <div class="inputs">
               <input aria-label="Name" type="text" name="name" required placeholder="Name">
               <input aria-label="Email" type="email" name="email" required placeholder="Email">
           </div>
           <button type="submit">Send</button>
       </form>
   </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/subscription.js"></script>
<script src="js/blackAndWhiteThemes.js"></script>
<script src="js/popupScript.js"></script>
</html>