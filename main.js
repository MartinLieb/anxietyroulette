let spin = document.querySelector("#spin");
let text = document.querySelector("#text");

function reqListener () {
  console.log(this.responseText);
}

spin.addEventListener("click", function(){

  moveContainer();



//  var xhr = new XMLHttpRequest(); 
//    xhr.onload = function() {
//      let obj = JSON.parse(this.response);
//      console.log(obj);
//      
//    text.innerHTML = "<h1>" + obj.Challenge + "</h1>";
//  };
//
//  xhr.open("get", "main.php", true);

//  xhr.send();
});