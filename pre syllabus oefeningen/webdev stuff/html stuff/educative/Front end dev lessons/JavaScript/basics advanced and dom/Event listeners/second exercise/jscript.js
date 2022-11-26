var button = document.querySelector("button");
var p =document.createElement("p");
p.innerHTML = "Clicked!";

// random color generator 
var randomColor = function(){
  var rvalue = function() {
  	return Math.round(Math.random()*255); 
  }

 	return 'rgb(' + rvalue() + "," + rvalue() + "," + rvalue() + ")";
}


button.onclick = function() {
  alert("Hello, World!");
  var body= document.querySelector("body");
  body.appendChild(p);
	//this.style.backgroundColor = randomColor();
  this.style.color = randomColor(); //Changes font color
}
//nailed it




