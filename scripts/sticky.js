// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  myFunction();
};

// Get the navbar
var navbar = document.getElementById("masthead");

// Get the offset position of the navbar

var sticky = document.getElementById("masthead").offsetHeight / 3;
console.log(sticky);

window.addEventListener("resize", function () {
  var sticky = document.getElementById("masthead").offsetHeight / 3;
  //console.log(sticky);
});

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
