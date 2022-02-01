<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music I listen to</title>
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
    <span class="Space"></span>
    <p class="subArticle">Music I listen to</p>
    <p class="mtext">
    <h2>What music I like</h2>
    <div class="infoBlocks">
    <div class="infoBlock">
    <img alt="After The Burial album picture" class="InfoImage" src="images/After%20The%20Burial.jpg">
    <h2>After The Burial</h2>
    <p>
        After the Burial is an American progressive metal band from Minneapolis, Minnesota. They are currently signed to Sumerian Records
        and have released five of their six full-length albums through the label. Since their inception in 2004, the band has gone through
        two vocalist changes, two drummer changes, the departure and death of founding rhythm guitarist Justin Lowe, and the departure of
        bassist Lerichard Foral. Lead guitarist Trent Hafdahl remains the sole remaining founding member. They are considered key contributors
        to the development of subgenres such as djent and progressive metalcore. This is one of my favorites band.
    </p>
    </div>
    <div class="infoBlock">
    <img alt="Covet album picture" class="InfoImage" src="images/Covet.jpg">
    <h2>Covet</h2>
    <p>
        Founded by guitarist Yvette Young with the intention of fusing lush post rock soundscapes with the subtle technical intricacies of progressive rock,
        Yvette enlisted the help of bassist David Adamiak to form Covet. After playing numerous local shows in Northern California the band released
        the Currents EP in late 2015. The band toured throughout the west coast building a buzz for their dynamic live show. In 2017 Covet continued to tour and
        highlighted the year by supporting Polyphia, Jason Richardson tour and followed that up with the Chon, Tera Melos, Little Tybee Homey Tour.
        Covet just completed dates supporting new label mates Tiny Moving Parts.
    </p>
    </div>
        <div class="infoBlock">
            <img alt="Car Bomb album picture" class="InfoImage" src="images/Car%20Bomb.jpg">
            <h2>Car Bomb</h2>
            <p>
                Car Bomb (stylized as [Car_Bomb]) is an American mathcore band from Long Island, New York, United States, that was initially formed in 2000.
                Their debut album, Centralia, was released through Relapse Records on February 6, 2007. Car Bomb's style inspired later mathcore bands.
                Car Bomb's style is marked by an experimental and extremely aggressive approach to metal. Describing a 2014 Car Bomb performance supporting Meshuggah,
                Amit Sharma of Kerrang! said of the band: "Long Island experimentalists Car Bomb sound absolutely ferocious. Their psychotic turbo-thrash is disgustingly disorientating,
                'Frankensteining' Meshuggah and The Dillinger Escape Plan into one relentless onslaught of time-chopping violence."
            </p>
        </div>
        <div class="infoBlock">
            <img alt="Dance Gavin Dance album picture" class="InfoImage" src="images/Dance%20Gavin%20Dance.jpg">
            <h2>Dance Gavin Dance</h2>
            <p>
                Dance Gavin Dance is an American rock band from Sacramento, California, formed in 2005. The band currently consists of vocalists Tilian Pearson and Jon Mess, lead guitarist Will Swan,
                bass guitarist Tim Feerick, and drummer Matthew Mingus. The band formerly included lead vocalists Jonny Craig and Kurt Travis, and the lineup has changed several times since their inception. Swan and Mingus are the only band members who have appeared on every studio album.
                Dance Gavin Dance's musical style has been described as post-hardcore, math rock, experimental rock, progressive rock, screamo, jazz fusion and emo. Critics have compared the band to fellow post-hardcore peers the Fall of Troy,
                Alexisonfire and Circa Survive. Their 2011 release Downtown Battle Mountain II is said to feature “the same structuring as The Mars Volta album The Bedlam In Goliath in that it never lets up”.
            </p>
        </div>
    </div>
</div>
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
</body>
</html>