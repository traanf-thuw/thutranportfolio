let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');

nextButton.onclick = function(){
    showSlider('next');
}
prevButton.onclick = function(){
    showSlider('prev');
}
let unAcceppClick;
const showSlider = (type) => {
    nextButton.style.pointerEvents = 'none';
    prevButton.style.pointerEvents = 'none';

    carousel.classList.remove('next', 'prev');
    let items = document.querySelectorAll('.carousel .list .item');
    if(type === 'next'){
        listHTML.appendChild(items[0]);
        carousel.classList.add('next');
    }else{
        listHTML.prepend(items[items.length - 1]);
        carousel.classList.add('prev');
    }
    clearTimeout(unAcceppClick);
    unAcceppClick = setTimeout(()=>{
        nextButton.style.pointerEvents = 'auto';
        prevButton.style.pointerEvents = 'auto';
    }, 2000)
}
seeMoreButtons.forEach((button) => {
    button.onclick = function(){
        carousel.classList.remove('next', 'prev');
        carousel.classList.add('showDetail');
    }
});
backButton.onclick = function(){
    carousel.classList.remove('showDetail');
}

// Get the elements to apply the blur effect
const subTitle = document.getElementById("sub-title");
const title = document.getElementById("title");
const sapo = document.getElementById("sapo")

window.addEventListener("scroll", function () {
    const scrollPosition = window.scrollY; 

    const blurAmount = Math.min(scrollPosition / 5, 15); 

    // Apply the blur effect to the elements
    subTitle.style.filter = `blur(${blurAmount}px)`;
    title.style.filter = `blur(${blurAmount}px)`;
    sapo.style.filter = `blur(${blurAmount}px)`;
});

// Text for typewriter effect
const text = "PORTFOLIO";
let index = 0;

// Typewriter effect function
function typeWriter() {
    if (index < text.length) {
        title.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 150); // Typing speed (milliseconds)
    } else {
        title.classList.add("hideCursor"); // Remove cursor after typing is done
    }
}

// Start typewriter effect when page loads
window.onload = function () {
    setTimeout(typeWriter, 500); // Delay before typing starts
};