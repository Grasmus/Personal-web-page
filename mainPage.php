<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
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
        <a href="#" class="nav-item">Lifestyle</a>
        <a href="#Music" class="nav-item">Music</a>
        <a href="#Books" class="nav-item">Books</a>
        <a href="#Hobbies" class="nav-item">Hobbies</a>
        <a href="meMyselfAndI.php" class="nav-item">My Skills</a>
        <a href="#ContactMe" class="nav-item">Contact me</a>
        <a id="button1" onclick="Negative_Positive_MainPage()" onmousedown="return false;">☾</a>
    </div>
    <script>
        if(localStorage.getItem('isDarkTheme') === 'true')
        {
            document.write('<img alt="Some black and white photo of forest in the fog" id="headerImage" src="images/BlackTheme.png"/>');
        }
        else
        {
            document.write('<img alt="Some black and white photo of forest in the fog" id="headerImage" src="images/WhiteTheme.png"/>');
        }
    </script>
    <div class="main">
        <div id="Music"></div>
        <p class="subArticle">Music I listen to</p>
        <p class="mtext">
            <h2>What music I like</h2>
            <p>
                I am very picky choosing music I will listen to.
                Because of that, I like difficult, non-standard composition in broad
                understanding of that. And no, I don`t listen classical music,
                but I like works of some composers like Igor Stravinsky or some modern
                ones like Darren Korb, Mick Gordon or Motoi Sakuraba.
                I am interested in majority number of music genre: electronic, rock, techno,
                some jazz, hip-hop, lo-fi etc. But, there are some genres that I listen
                often like metal, mathrock, mathcore, metalcore, deathcore, deathmetal,
                progressive metal, alternative metal etc. There is a small list of my favorite bands:
            </p>
            <a class="readMoreItem" href="musicPage.php">Read more...</a>
        <div class="bands">
            <div class="cardBox">
                <img  class="bandsImage" src="images/After%20The%20Burial.jpg" alt="After The Burial - Evergreen">
                <h2>After The Burial</h2>
                <p>Genres: metalcore, progressive metal, deathcore</p>
            </div>
            <div class="cardBox">
                <img class="bandsImage" src="images/Covet.jpg" alt="Covet - effloresce">
                <h2>Covet</h2>
                <p>Genre: mathrock</p>
            </div>
            <div class="cardBox">
                <img class="bandsImage" src="images/Car%20Bomb.jpg" alt="Car Bomb - Merdial">
                <h2>Car Bomb</h2>
                <p>Genre: mathcore</p>
            </div>
            <div class="cardBox">
                <img class="bandsImage" src="images/Dance%20Gavin%20Dance.jpg" alt="Dance Gavin Dance - Instant Gratification">
                <h2 class="subTitle">Dance Gavin Dance</h2>
                <p>Genres: post-hardcore, experimental rock,
                    progressive rock, math rock</p>
            </div>
            <p class="subArticle">Song I made</p>
        </div>
    </div>
    <iframe class="video" src="https://www.youtube.com/embed/MpKETO14oqI"
            title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    <div class="main">
        <div id="Books"></div>
        <p class="subArticle">Books I read</p>
        <p class="mtext">
        <h2>What books I like</h2>
        <p>
            I didn`t read a lot of books, about 20, but I still remember them all, because I got absorbed in each of them.
            In literature I can highlight some genres like adventure novel, historical novel, science fiction, scientifically popular,
            Lovecraftian horror, horror fiction. It`s not full list of my favorite book genres, it`s always replenished every time
            I read new one. There is some collection of my favorite books:
        </p>
        <a class="readMoreItem" href="bookPage.php">Read more...</a>
        <div class="books">
            <div class="cardBox">
                <img class="bookImage" src="images/The%20Count%20of%20Monte%20Cristo.jpg" alt="The Count of Monte Cristo by Alexandre Dumas">
                <h2>The Count of Monte Cristo</h2>
                <p>
                    Author: Alexandre Dumas. <br  />
                    Genre: historical novel, adventure.
                </p>
            </div>
            <div class="cardBox">
                <img class="bookImage" src="images/A%20Brief%20History%20of%20Time.jpg" alt="A Brief History of Time by Stephen Hawking">
                <h2 class="subTitle">A Brief History of Time</h2>
                <p>
                    Author: Stephen Hawking.<br  />
                    Genre: scientifically popular, science.
                </p>
            </div>
            <div class="cardBox">
                <img class="bookImage" src="images/The%20Martian%20Chronicles.jpg" alt="The Martian Chronicles by Ray Bradbury">
                <h2>The Martian Chronicles</h2>
                <p>
                    Author: Ray Bradbury. <br  />
                    Genre: science fiction, post-apocalyptic fiction, horror, dystopian fiction.
                </p>
            </div>
            <div class="cardBox">
                <img class="bookImage" src="images/Call%20of%20Chtulhu.jpg" alt="Call of Chtulhu by Howard Phillips Lovecraft">
                <h2>Call of Chtulhu</h2>
                <p>
                    Author: Howard Phillips Lovecraft. <br  />
                    Genre: Lovecraftian horror.
                </p>
            </div>
        </div>
        <div id="Hobbies"></div>
        <div class="hobbies">
            <p class="subArticle"">Hobbies
        </div>
    </div>
    <img class="hobbiesImage" src="images/img.png" title="Credit: author`s twitter: @kurii89800727" alt="Some cool artwork I like.">
    <div class="main">
        <div class="hobbies">
            <h2>What thing I like to do</h2>
            <p>
                There are several things I love to do: it`s a playing the guitar and creating music, workout and some drawing.
            </p>
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
<script src="js/blackAndWhiteThemes.js"></script>
<script src="js/subscription.js"></script>
</html>