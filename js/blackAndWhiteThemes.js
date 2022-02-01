function Negative_Positive_MainPage()
{
    let elImage = document.getElementById('headerImage');
    let elStyleMainPage = document.getElementById('pageStyle');
    if(localStorage.getItem('isDarkTheme') === 'true')
    {
        elStyleMainPage.setAttribute('href', 'styles/styleLight.css');
        elImage.setAttribute('src', 'images/WhiteTheme.png');
        localStorage.setItem('isDarkTheme', 'false');
    }
    else
    {
        elStyleMainPage.setAttribute('href', 'styles/styleDark.css');
        elImage.setAttribute('src', 'images/BlackTheme.png');
        localStorage.setItem('isDarkTheme', 'true');
    }
}
function Negative_Positive_PageAboutMe()
{
    let elStyleAboutMe = document.getElementById('pageStyle');
    if(localStorage.getItem('isDarkTheme') === 'true')
    {
        elStyleAboutMe.setAttribute('href', 'styles/styleLight.css');
        localStorage.setItem('isDarkTheme', 'false');
    }
    else
    {
        elStyleAboutMe.setAttribute('href', 'styles/styleDark.css');
        localStorage.setItem('isDarkTheme', 'true');
    }
}