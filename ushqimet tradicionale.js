const sliderImage = document.querySelector('.slider-image');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// Images array
const images = ['Fotot/sliderphoto1.jpg', 'Fotot/sliderphoto2.jpg', 'Fotot/sliderphoto3.png'];

// Index of the current image
let currentImageIndex = 0;

// Function to change image
function changeImage() {
  sliderImage.src = images[currentImageIndex];
}

// Previous button click event
prevBtn.addEventListener('click', () => {
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  changeImage();
});

// Next button click event
nextBtn.addEventListener('click', () => {
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  changeImage();
});