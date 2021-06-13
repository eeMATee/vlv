

const  btnRight = document.querySelector('.gallery-carousel__btn--right');
const  btnLeft = document.querySelector('.gallery-carousel__btn--left');

const liItems = document.querySelector('.gallery-carousel__container--list');
const images = Array.from(liItems.children);

const carouselNav = document.querySelector('.gallery-carousel__nav');
const dots = Array.from(carouselNav.children);



// Width of images
const imgWidth = images[0].getBoundingClientRect().width;
// console.log(imgWidth);


// Setting images in array on X
const setImgPosition = (img, index) => {
    img.style.left = imgWidth * index + 'px';
    img.style.top = 0;
}
images.forEach(setImgPosition);





const moveImg = (list, currentImg, targetImg) => {
    liItems.style.transform = "translateX(-" + targetImg.style.left + ")";

    currentImg.classList.remove('current--img');
    targetImg.classList.add('current--img');
}

// Changing dots color on click
const updateDots = (currentDot, targetDot) => {
    currentDot.classList.remove('current--img');
    targetDot.classList.add('current--img');
};

// Hide/Show Arrows
const hideShowArrows = (images, btnLeft, btnRight, targetIndex) => {
    if(targetIndex === 0) {
        btnLeft.classList.add('hidden');
        btnRight.classList.remove('hidden');
    } else if(targetIndex === images.length - 1) {
        btnLeft.classList.remove('hidden');
        btnRight.classList.add('hidden');
    } else {
        btnLeft.classList.remove('hidden');
        btnRight.classList.remove('hidden');
    }
};



// Event listeners
btnRight.addEventListener('click', (evt) => {
    const currentImg = liItems.querySelector('.current--img');
    const nextImg = currentImg.nextElementSibling;
    const nextIndex = images.findIndex((img) => img === nextImg);

    const currentDot = carouselNav.querySelector('.current--img');
    const nextDot = currentDot.nextElementSibling;
    
    moveImg(liItems, currentImg, nextImg);
    updateDots(currentDot, nextDot);
    hideShowArrows(images, btnLeft, btnRight, nextIndex);
});

btnLeft.addEventListener('click', (evt) => {
    const currentImg = liItems.querySelector('.current--img');
    const prevImg = currentImg.previousElementSibling;
    const prevIndex = images.findIndex((img) => img === prevImg);

    const currentDot = carouselNav.querySelector('.current--img');
    const prevDot = currentDot.previousElementSibling;
    
    moveImg(liItems, currentImg, prevImg);
    updateDots(currentDot, prevDot);
    hideShowArrows(images, btnLeft, btnRight, prevIndex);
});

carouselNav.addEventListener('click', (evt) => {
    const targetDot = evt.target.closest('button');

    if(!targetDot) return;

    const currentImg = liItems.querySelector('.current--img');
    const currentDot = carouselNav.querySelector('.current--img');
    
    const targetIndex = dots.findIndex((dot) => dot === targetDot);
    const targetImg = images[targetIndex];

    moveImg(liItems, currentImg, targetImg);
    updateDots(currentDot, targetDot);
    hideShowArrows(images, btnLeft, btnRight, targetIndex);
});

