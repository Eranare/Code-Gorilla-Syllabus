// global Variables-------------
var h1 = document.querySelector("h1");
var h2 = document.querySelector("h2");
var h3 = document.querySelector("h3");
var h4 = document.querySelector("h4");
var h5 = document.querySelector("h5");
var h6 = document.querySelector("h6");
//--------------------------
var invisible = document.getElementsByClassName("invisible");
var visible = document.getElementsByClassName("visible"); // this doesnt do much yet

//h1
  h1.style.border= "3px dashed black";
  h1.style.fontFamily = "Verdana";
//h2
  h2.style.border= "8px solid red";
  h2.style.textAlign = "center";
  h2.style.fontFamily = "Arial";
//h3
  h3.style.width = "50%"; //Border and text align in .css
//h4
h4.onclick = function(){
  this.style.color="white";
  this.style.backgroundColor = "blue";
};
//h5
h5.onclick = function(){
this.classList.add("highlight");
};
//h6
h6.onclick = function(){
  this.classList.toggle("highlight");
  console.log("Helloooooo" + invisible); 
  
};

//image visibility toggle
var img = document.querySelector("img"); //ffs was trying to query with everything but just img the image clicking works now at least

img.onclick = function() 
{
  console.log("Helloooooo"); //log works now for the visibility toggle
  
    this.classList.toggle('invisible');
  

};



