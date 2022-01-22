/* NAV ---------------------- */
let hamburger = document.getElementById("hamburger-menu");
let navbar = document.getElementById("navbar-mobile");

hamburger.addEventListener('click', () => {
    navbar.classList.toggle("hide");
})


/* CAROUSEL ------------------------------ */
let items = document.getElementsByClassName("carousel-element");
const nbSlides = items.length;
const next = document.getElementById("button-next");
const previous = document.getElementById("button-previous");

let count = 0;

function nextSlide() {
    items[count].classList.remove("active");

    if (count < nbSlides - 1) {
        count++;
    } else {
        count = 0;
    }
    items[count].classList.add("active");
}

next.addEventListener("click", nextSlide);
next.addEventListener("touch", nextSlide);

function previousSlide() {
    items[count].classList.remove("active");

    if(count > 0) {
        count--;
    } else {
        count = nbSlides - 1;
    }

    items[count].classList.add('active');
}

setTimeout(nextSlide(), 4000);

previous.addEventListener("click", previousSlide);

window.addEventListener('keydown', (e) => {
    console.log(e)
    if (e.key === "ArrowLeft") {
        previousSlide();
    } else if (e.key === "ArrowRight") {
        nextSlide();
    }
});