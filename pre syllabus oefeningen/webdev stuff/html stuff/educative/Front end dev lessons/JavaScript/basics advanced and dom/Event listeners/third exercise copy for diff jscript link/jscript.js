var button = document.querySelector("button");

var ul = document.querySelector("ul");

// Added Enter key for shits and giggles

input.addEventListener("keypress", function(event){

  if (event.key === "Enter") {
    event.preventDefault();
    button.click();
  }
} );
//------------------------------


  
button.onclick = function(){
  let input = document.querySelector("input");
 if (input.value!=("") ) { //if statement works


  var li = document.createElement("li");  //Creates new LI elements per click
  console.log(input.value); //FUCK ME I FORGOT TO ADD .value
  //console.log(input);
  //li.appendChild(document.createTextNode(input);)
  li.appendChild(document.createTextNode(input.value));
  ul.appendChild(li);
  

  
  
  input.value= (""); //clears input field works



 }
}



