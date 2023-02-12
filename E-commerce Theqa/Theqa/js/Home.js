// color
var color = document.getElementById("color");

SaqahCo = ["green" , "#03caa9" , "#59595a"]

setInterval(function() {
        let randBg = Math.floor(Math.random()*SaqahCo.length)
        color.style.color = SaqahCo[randBg];     
}, 400);

// slider images

// get images 
const images = ['1.jpg' , '2.jpg' , '3.jpg' , '4.jpg' , '5.jpg' , '6.jpg' , '7.jpg' , '8.jpg' ,
'9.jpg' , '10.jpg' , '11.jpg' , '12.jpg'
] ;
// length
var len = images.length;
// get boxes
var box_1 = document.getElementById("box-1");
var box_2 = document.getElementById("box-2");
var box_3 = document.getElementById("box-3");
var box_4 = document.getElementById("box-4");
var box_5 = document.getElementById("box-5");
var box_6 = document.getElementById("box-6");
var icon  = document.getElementsByClassName("boxes-icon");
  // next and prev
var next = document.getElementById("a-l");
var prev = document.getElementById("a-r");
prev.style.opacity = 0.5;
//default images
function slider(index ,box_1 ,box_2 , box_3 , box_4 ,box_5 ,box_6) {
    box_1.style.backgroundImage = `url(./images/${images[index]})`;
    box_2.style.backgroundImage = `url(./images/${images[index+1]})`;
    box_3.style.backgroundImage = `url(./images/${images[index+2]})`;
    box_4.style.backgroundImage = `url(./images/${images[index+3]})`;
    box_5.style.backgroundImage = `url(./images/${images[index+4]})`;
    box_6.style.backgroundImage = `url(./images/${images[index+5]})`;
}
slider(0,box_1 ,box_2 , box_3 , box_4 ,box_5 ,box_6);
next.onclick = () => {
    slider(6,box_1 ,box_2 , box_3 , box_4 ,box_5 ,box_6);
    next.style.opacity = 0.5;
    prev.style.opacity = 1;
}
prev.onclick = () => {
    slider(0,box_1 ,box_2 , box_3 , box_4 ,box_5 ,box_6);
    prev.style.opacity = 0.5;
    next.style.opacity = 1;
}
function hidden (elem_hidden){
    elem_hidden.style.visibility = "hidden" ;
}
function show ( child , elem_hidden) {
    child.onmouseout = ()=> {
        elem_hidden.style.visibility = "hidden" ;
        child.style.opacity = 1;
    }
    child.onmouseover = ()=> {
        elem_hidden.style.visibility = "visible" ;
        child.style.opacity = 0.9;
    }
}
var content1 = document.getElementById("content-1");
var content2 = document.getElementById("content-2");
var content3 = document.getElementById("content-3");
var content4 = document.getElementById("content-4");
var content5 = document.getElementById("content-5");
var content6 = document.getElementById("content-6");

hidden(content1);
hidden(content2);
hidden(content3);
hidden(content4);
hidden(content5);
hidden(content6);

show(box_1,content1);
show(box_2,content2);
show(box_3,content3);
show(box_4,content4);
show(box_5,content5);
show(box_6,content6);


var load = document.getElementById("load");
load.onmouseover = () =>{
    load.style.backgroundColor = "gray";
}
load.onmouseout = () =>{
    load.style.backgroundColor = "#59595a";
}