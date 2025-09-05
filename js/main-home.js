/*if (typeof jQuery == "undefined") {
         alert("Not Working")
     }
else {
        alert ("Working")
     }*/

const navE1 = document.querySelector(".navbar");

window.addEventListener('scroll',() =>{
    if (window.scrollY >= 56) {
        navE1.classList.add('navbar-scrolled');
    } else if  (window.scrollY < 56) {
        navE1.classList.remove('navbar-scrolled');
    }
});

document.getElementById("explore").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
}) 



function changemapNP(){
    
    document.getElementById('map1').style.display = "block";
}

function changemapNC(){
    
    document.getElementById('map2').style.display = "block";
}

function changemapNW(){
    
    document.getElementById('map3').style.display = "block";
}

function changemapWP(){
    
    document.getElementById('map4').style.display = "block";
}

function changemapSP(){
    
    document.getElementById('map5').style.display = "block";
}

function changemapCP(){
    
    document.getElementById('map6').style.display = "block";
}

function changemapSG(){
    
    document.getElementById('map7').style.display = "block";
}

function changemapEP(){
    
    document.getElementById('map8').style.display = "block";
}

function changemapUP(){
    
    document.getElementById('map9').style.display = "block";
}

document.getElementById('popup').onclick = function (){
    document,getElementById('mapsec').style.display = "block";
}



document.getElementById("hide").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
}) 


