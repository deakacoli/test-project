const sliderImage = document.querySelector('.slider-image');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// Images array
const images = ['Fotot/Pranvera.jpg', 'Fotot/KosovoDrini.jpg', 'Fotot/Pranvera2.jpg'];

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

var likeBtn = document.getElementById("like-btn");
var likeCount = 0;

likeBtn.addEventListener("click", function() {
  likeCount++;
  alert("You liked this. Total likes: " + likeCount);
});

var dislikeBtn = document.getElementById("dislike-btn");
var dislikeCount = 0;

dislikeBtn.addEventListener("click", function() {
  dislikeCount++;
  alert("You disliked this . Total dislikes: " + dislikeCount);
});