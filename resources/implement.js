/**
* implement for login page footer fixed position
*/
var path = window.location.pathname;
var page = path.split("/");
var page_path = page[page.length-1];

if (page_path.startsWith("goat_")) {
  var positionGoatFooter = document.querySelector('.footer');
  positionGoatFooter.style.position = "fixed";
}

if(page_path.startsWith("admin")){
  let aa = document.createElement('a');
  aa.textContent = 'Log Out';
  aa.href = "logout.php";
  const menu = document.querySelector('.menu');
  menu.appendChild(aa);
}

//PAGINATION
var listItems = document.querySelectorAll(".container-card");
var rows = 4;
var page = 1;
var windowPage = 2;
var totalPage = Math.ceil(listItems.length / rows);
var paginationDiv = document.querySelector("#pagination-container");
paginationDiv.innerHTML = '';

function pagination(items, page, rows){
  var result = [];
  var trimstart = (page - 1) * rows;
  var trimEnd = trimstart + rows;
  if (trimEnd > listItems.length) {
    trimEnd = listItems.length;
  }
  for (let i = 0; i < listItems.length; i++) {
    if (i >= trimstart && i < trimEnd) {
      listItems[i].style.display = "inline-block";
    }else {
      listItems[i].style.display = "none";
    }
  }
  return result;
}


for (let i = 0; i < totalPage; i++) {
  paginationDiv.innerHTML += '<button value="' + (i+1) + '" class="link-page">'+ (i+1) +'</button>';
}
pagination(listItems, page, rows)
$('.link-page').on('click', function(){
  page = $(this).val()
  pagination(listItems, page, rows)
});




/*
function chosenPage(pageNo){
  let idNo = "no_" + pageNo;
  let page = document.getElementById(idNo);
  chosenPage.style.background = "gold";
  chosenPage.style.color = "black";
}

function otherPages(pageNo){
  let idNo = "no_" + pageNo;
  let otherPage = document.getElementById(idNo);
  otherPage.style.background = "black";
  otherPage.style.color = "gold";
}


//notworking!!!!
function displayItems(id, listItemsArray){
  id = id+1;
  let displayStart = id*4-(id-1)*4;
  let displayFinish = id*4;
  if (listItemsArray.length <= displayFinish) {
    displayFinish = listItemsArray.length;
  }
  for (let i = 0; i < listItemsArray.length; i++) {
    if (i >= displayStart && i < displayFinish) {
      listItemsArray[i].style.display = "inline-block";
    }else {
      listItemsArray[i].style.display = "none";
    }
  }
}

if (linkPageCount.length === 0) {
  for (var i = 0; i < totalPage; i++) {
    let linkPage = document.createElement("button");
    linkPage.classList.add(".link-page");
    linkPage.setAttribute('id', 'no_' + (i+1));
    linkPage.style.width = "30px";
    linkPage.style.margin = "5px";
    linkPage.style.height = "30px";
    linkPage.style.padding = "4px";
    linkPage.style.color = "gold";
    let textA = document.createTextNode("" + (i+1) +"");
    linkPage.appendChild(textA);
    paginationDiv.append(linkPage);
  }
}
*/
