/**
* implement for login page footer fixed position
*/
var path = window.location.pathname;
var page = path.split("/");
var page_path = page[page.length-1];
console.log(page_path);
if (page_path.startsWith("goat_") || page_path.startsWith("abo")) {
  var positionGoatFooter = document.querySelector('.footer');
  positionGoatFooter.style.position = "fixed";
}
