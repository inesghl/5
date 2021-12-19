// Start SignIn
function togglePasswordVisibility() {
  let password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
  let eyeIcon = document.getElementById("eyeIcon");
  if (eyeIcon.classList.contains("bi-eye")) {
    eyeIcon.classList.remove("bi-eye");
    eyeIcon.classList.add("bi-eye-slash");
  } else {
    eyeIcon.classList.remove("bi-eye-slash");
    eyeIcon.classList.add("bi-eye");
  }
}
// End SignIn

//counter
// let counter = document.getElementById("counting");
// counter.value=0;
// function plus() {
//   if(counter.value!=null)
//   counter.value++;
// }
// function minus() {
//   if(counter.value!=null)
//   {
//   counter.value--;
//   if (counter.value < 0) {
//     counter.value = 0;
//   }
// }
// }
//end counter

//add item_to cart

//end add item_to cart

//Start ReviewItem
//counter to the number of items to add to cart
let amount = document.getElementById("amount");
if (amount) {
  amount.value = 0;
}
function ereasing() {
  amount.value--;
  if (amount.value < 0) {
    amount.value = 0;
  }
}
function adding(max) {
  if (amount.value < max) {
    amount.value++;
  }
}

//function to change the main image of the item
let thumbArray = document.querySelectorAll(".thumbnails img");
let mainImage = document.querySelector("#screen img");
thumbArray.forEach((element) => {
  element.addEventListener("click", function () {
    //change the main image src with this src
    let newsrc = element.getAttribute("src");
    mainImage.setAttribute("src", newsrc);
  });
});
//End ReviewItem

// Start NavBar
let myMedia = window.matchMedia("(max-width: 991px)");
if (myMedia.matches) {
  let myElement = document.querySelector(".dropdown-menu-profile");
  myElement.classList.add("show");
}

// End NavBar

//Start profileSeller page
function permanentlyDeleteItem() {
  return confirm(
    "You are going to delete this item permanently, are you sure?"
  );
}
//Start profileSeller page
// Start Scroll to top
let scrollToTopElement = document.querySelector(".scroll-to-top");
window.onscroll = function () {
  if (this.scrollY >= 100) {
    scrollToTopElement.classList.add("scroll-to-top-show");
  } else {
    scrollToTopElement.classList.remove("scroll-to-top-show");
  }
};

scrollToTopElement.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// End Scroll to top
