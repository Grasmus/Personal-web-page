function PopupShow(x)
{
    if (x === 1)
    {
        document.getElementById('CplusplusPopup').style.display = "flex";
    }
    else if (x === 2)
    {
        document.getElementById('PHPPopup').style.display = "flex";
    }
    else if (x === 3)
    {
        document.getElementById('JSPopup').style.display = "flex";
    }
}
function PopupHide(x){
    if (x === 1)
    {
        document.getElementById('CplusplusPopup').style.display = "none";
    }
    else if (x === 2)
    {
        document.getElementById('PHPPopup').style.display = "none";
    }
    else if (x === 3)
    {
        document.getElementById('JSPopup').style.display = "none";
    }
}