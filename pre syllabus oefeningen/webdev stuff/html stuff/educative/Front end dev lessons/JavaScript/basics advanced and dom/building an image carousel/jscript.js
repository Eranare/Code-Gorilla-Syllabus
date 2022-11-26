var images = [
  "images/niohcat.png",
  "images/niohcatsleep.png",
  "images/niohcatspng.png",
  "images/otakemaru.png"

];
var paragraph = [
  "Cat",
  "Cat asleep",
  "Two Cats",
  "Otakemaru" 
]//subtext
var currentPIndex =0; //subtext index
var currentIndex = 0;
var img = document.querySelector('img');

var text = document.querySelector("p"); //extra stuff

var next = document.getElementById('next-button'); 
var incrementIndex = function(){
    console.log(currentIndex)
    currentIndex = currentIndex + 1;
    if (currentIndex > images.length - 1) {currentIndex = 0}

    return currentIndex; 
}
//---- extra paragraph index
var incrementPIndex = function(){
  
  currentPIndex = currentPIndex +1;
  if (currentPIndex > paragraph.length -1){currentPIndex =0}
  return currentPIndex;
}

next.onclick = function(){
    img.setAttribute('src', images[incrementIndex(currentIndex)]);

    text.innerHTML= ("p", paragraph[incrementPIndex(currentPIndex)]); //extra text
  }
//works


var prev = document.getElementById('prev-button');
var decrementIndex = function(){
    currentIndex = currentIndex -1;
      if (currentIndex < 0) {currentIndex = images.length -1} 
      //console.log(currentIndex);  
      return  currentIndex;
   
  }
//---extra paragraph index
var decrementPIndex = function(){
  currentPIndex = currentPIndex -1;
  if (currentPIndex < 0) {currentPIndex = paragraph.length -1}
  return currentPIndex;
}
//-----------------
prev.onclick = function(){
      img.setAttribute('src', images[decrementIndex(currentIndex)]);
      text.innerHTML= ("p", paragraph[decrementPIndex(currentPIndex)]); //extra text
    }


