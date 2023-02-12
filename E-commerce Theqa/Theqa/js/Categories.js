


var b1 = document.getElementById("B1");
var b2 = document.getElementById("B2");
var b3 = document.getElementById("B3");
var b4 = document.getElementById("B4");
var b5 = document.getElementById("B5");
var b6 = document.getElementById("B6");
var b7 = document.getElementById("B7");


function BorderNone (button) {
    button.onclick = () => {
        button.style.borderStyle = "none";
    }
}
function BorderNon (button) {
    button.onmouseover = () => {
        button.style.borderStyle = "none";
    }
    button.onmouseout = () => {
        button.style.borderStyle = "none";
    }
}

BorderNone(b1); BorderNon (b1);
BorderNone(b2); BorderNon (b2);
BorderNone(b3); BorderNon (b3);
BorderNone(b4); BorderNon (b4);
BorderNone(b5); BorderNon (b5);
BorderNone(b6); BorderNon (b6);
BorderNone(b7); BorderNon (b7);


var Add = document.getElementById("add");
Add.onclick = () => {
    Add.innerHTML = 'ADD successfully <i class="fa-solid fa-check"></i>';
    Add.style.backgroundColor = "green";
}