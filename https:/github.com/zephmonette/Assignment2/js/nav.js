
window.addEventListener('load', function() {
  
//  window.addEventListener('resize')

document.querySelector('.icon').addEventListener('click', () =>{
  var x = document.getElementById("links");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
});
});