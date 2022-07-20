function showAnswer(title)
{
    let elements = document.querySelectorAll("."+title)
    elements[0].style.display = 'none';
    elements[1].style.display = '';
    elements[2].style.display = '';
}

function hideAnswer(title)
{
    let elements = document.querySelectorAll("."+title)
    elements[0].style.display = '';
    elements[1].style.display = 'none';
    elements[2].style.display = 'none';
}
function hideMain()
{
    document.getElementsByClassName('main')[0].style.display = 'none';
}