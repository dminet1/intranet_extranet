function changeColour(value)
{
    document.getElementById('sxm').style.display = "inline-block";
    document.getElementById('sxf').style.display = "inline-block";
    document.getElementById('sxu').style.display = "inline-block";
    switch(value)
    {
        case 'm':
            document.getElementById('sxm').style.backgroundColor = '#446CB3';
            document.getElementById('sxm').style.color = 'white';
            document.getElementById('sxf').style.backgroundColor = '#ECECEC';
            document.getElementById('sxf').style.color = 'gray';
        break;
        case 'f':
            document.getElementById('sxm').style.backgroundColor = '#ECECEC';
            document.getElementById('sxm').style.color = 'gray';
            document.getElementById('sxf').style.backgroundColor = '#DB0A5B';
            document.getElementById('sxf').style.color = 'white';
        break;
        case 'u':
            document.getElementById('sxm').style.backgroundColor = '#ECECEC';
            document.getElementById('sxm').style.color = 'gray';
            document.getElementById('sxf').style.backgroundColor = '#ECECEC';
            document.getElementById('sxf').style.color = 'gray';
        break;
        default :
            alert("changeColour KO")
        break;
    }
}
