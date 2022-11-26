var button = document.querySelector('button');

var p =document.createElement("p");
p.innerHTML = "Clicked!";

button.onclick = function() {
  alert("Hello, World!");
  var body= document.querySelector("body");
  body.appendChild(p);
}
//nailed it