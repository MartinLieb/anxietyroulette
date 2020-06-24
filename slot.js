let display = document.getElementById('display');
let container = document.getElementById('container');

function moveContainer () {
  let choosenOption = getRandomOption();
  setTop(-choosenOption.offsetTop + 27);
}

function setTop (top) {
  container.style.top = `${top}px`;
}

function getRandomOption () {
  let options = container.children;
  let randomOption = Math.floor(Math.random() * (options.length));  
  let choosenOption = options[randomOption];
    
  return choosenOption;
}