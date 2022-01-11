let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let togg3 = document.getElementById("togg3");
let togg4 = document.getElementById("togg4");
let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
let d3 = document.getElementById("d3");
let d4 = document.getElementById("d4");

let menus = document.getElementsByClassName('menu');

console.log(menus);

let closeMenu = (d1close, d2close, d3close, d4close, d5close) => {
  (d1close) ? d1.style.display = "none" : null;
  (d2close) ? d2.style.display = "none" : null;
  (d3close) ? d3.style.display = "none" : null;
  (d4close) ? d4.style.display = "none" : null;
}

togg1.addEventListener("click", () => {
  closeMenu(false, true, true, true);
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

togg2.addEventListener("click", () => {
  closeMenu(true, false, true, true);
  if(getComputedStyle(d2).display != "none"){
    d2.style.display = "none";
  } else {
    d2.style.display = "block";
  }
})

togg3.addEventListener("click", () => {
  closeMenu(true, true, false, true);
  if(getComputedStyle(d3).display != "none"){
    d3.style.display = "none";
  } else {
    d3.style.display = "block";
  }
})

togg4.addEventListener("click", () => {
  closeMenu(true, true, true, false);
  if(getComputedStyle(d4).display != "none"){
    d4.style.display = "none";
  } else {
    d4.style.display = "block";
  }
})

