

var massage = document.getElementById("submit");
var box_1 = document.getElementById("box-1");
var box_2 = document.getElementById("box-2");
var box_3 = document.getElementById("box-3");
var box_4 = document.getElementById("box-4");
massage.onmouseover = () =>{
    massage.style.backgroundColor = "#323134";
}
massage.onmouseout = () =>{
    massage.style.backgroundColor = "#03caa9";
}


function opicaty (box){
    box.onmouseover = () => {
        box.style.opacity = 0.5;
    }
    box.onmouseout = () => {
        box.style.opacity = 1;
    }
}
opicaty(box_1);
opicaty(box_2);
opicaty(box_3);
opicaty(box_4);
