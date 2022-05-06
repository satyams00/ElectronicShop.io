const Collapse = document.querySelector('.ss_collapse');
const bar = document.querySelector('.ss_collapse_bar');





// Slider............


const Slider = document.querySelector('.slider');
const Img = document.querySelectorAll('.slider .col-12');
const size = Img[0].clientWidth;
const prev = document.querySelector('#prevbtn');
const next = document.querySelector('#nextbtn');

let max_timer = 25;
let counter = 1;
let timer = max_timer;

Slider.style.transform = "translate(" + (-size*counter) +"px)";

setInterval(() => {
    if (timer <= 0) {
        move('next');
        timer = max_timer;
    }else{
        timer--;
    }
}, 100);


next.addEventListener('click', () => {
    move('next');
})
prev.addEventListener('click', () => {
    move('prev');
})

Slider.addEventListener('transitionend', ()=>{
    if (Img[counter].id === "lastClone") {
        Slider.style.transition = "none";
        counter = Img.length - 2;
        Slider.style.transform = "translate(" + (-size*counter) +"px)";   
    }
    if (Img[counter].id === "firstClone") {
        Slider.style.transition = "none";
        counter = Img.length - counter;
        Slider.style.transform = "translate(" + (-size*counter) +"px)";   
    }
})


function move(direction) {
    timer = max_timer;
    if (direction == 'next') {
        if(counter >= Img.length-1) return;
        counter++;
    } else {
        if(counter <= 0) return;
        counter--;
    }
    Slider.style.transition = "transform 0.4s ease";
    Slider.style.transform = "translate(" + (-size*counter) +"px)";
}


// Collapse bar

function coll(){
    Collapse.style.left = "0px";
}

function coll_end(){
    Collapse.style.left = "-100%";
}


