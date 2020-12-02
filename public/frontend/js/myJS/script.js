// navigasi
const nav= document.querySelector('nav');
window.addEventListener('scroll', function(){
    if(scrollY>50){
        nav.classList.remove('bg-transparent');
        nav.classList.remove('navbar-dark');
        nav.classList.add('bg-light');
        nav.classList.add('navbar-light');
        nav.classList.add('nav-shadow');
    } else{
        nav.classList.remove('bg-dark');
        nav.classList.remove('navbar-light');
        nav.classList.add('navbar-dark');
        nav.classList.add('bg-transparent');
        nav.classList.remove('nav-shadow');

    }
});

if(screen.width < 767){
    nav.classList.remove('bg-transparent');
    nav.classList.add('bg-light');
    nav.classList.remove('navbar-dark');
    nav.classList.add('navbar-light');

}

// slider
const slider= document.getElementById('slider');
const slide1= document.getElementById('slide1');
const slide2= document.getElementById('slide2');
const slide3= document.getElementById('slide3');
const slide4= document.getElementById('slide4');

slide1.onclick= function(){
    slider.style.marginTop= '0';
} 
slide2.onclick = function(){
    slider.style.marginTop= '-475px';
} 
slide3.onclick = function(){
    slider.style.marginTop= '-940px';
} 
slide4.onclick= function(){
    slider.style.marginTop= '-1410px'
}



document.getElementById("a").addEventListener("click", function(event){
    event.preventDefault()
  }); 

