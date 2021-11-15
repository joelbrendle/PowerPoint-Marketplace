var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function confirmDeletePP() {
  let confirmDeletePP = confirm("Möchtest du diese PowerPoint wirklich löschen?");

  if(confirmDeletePP==true) {
    // location.href = "inc/deletepp.php";
    // return false;
  } else {
    return false;
  }
}