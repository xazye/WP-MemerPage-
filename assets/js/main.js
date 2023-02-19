// When the user clicks anywhere outside of the Header modal, close it
window.onclick = function (event) {
  const modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
window.onclick = function (event) {
  if (event.target.id !== "mySidebar" && event.target.id !== "openbtn") {
    document.getElementById("mySidebar").style.width = "0";
  }
};
