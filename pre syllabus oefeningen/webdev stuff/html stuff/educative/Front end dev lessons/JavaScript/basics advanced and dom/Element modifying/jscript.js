var h1 = document.querySelector('h1');
var input = document.querySelector('input[type=text]');

console.log("input attributes:", input.getAttributeNames()); //for the attribute list in the console

console.log("input type:", input.getAttribute('type')); //not sure yet

input.setAttribute('type', "checkbox"); //changed the entry field into a checkbox
input.removeAttribute('placeholder');  //got rid of placeholder text

console.log(input.getAttributeNames()); //get names again of the attributes without placeholder