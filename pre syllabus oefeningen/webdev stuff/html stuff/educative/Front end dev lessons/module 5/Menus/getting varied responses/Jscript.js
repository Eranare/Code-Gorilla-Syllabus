const HOST = 'server.com/';

const goElement = document.getElementsByClassName("go")[0];
goElement.onclick = function() {
  const inputElement = document.getElementsByClassName("test")[0]; //this part takes the text in the input
  console.log(inputElement.value); //prints input value to console
  api.get(HOST + "menus", {menu: inputElement.value}, displayText);
}
/*---------------------------*/

//my own attempt at messing with the test button

const runTestElement = document.getElementsByClassName("runtest")[0];
runTestElement.onclick = function() {
  const inputElement = document.getElementsByClassName("test")[0]; //this part i dont actually need here
  api.get(HOST + "fakemenus", {menu: inputElement.value}, displayOtherText);
} 

function displayOtherText() {
  const outputElement = document.getElementsByClassName("output")[0];
  outputElement.innerHTML += ("Dude this button doesn't do anything <br> cause i don't have the internal script for the testing");
}
//works
/*-------------------------------*/
function displayText(response) {
  const outputElement = document.getElementsByClassName("output")[0];
  outputElement.innerHTML += (response + "<br>");
}

// Server

function getMenus(data) {
  switch (data.menu) {
    case "a":
      return "I got an A";
    case "b":
      return "I got a B";
    case "c":
      return "C mothafucka";
    default:
      return "I don't know what I got"
  }
}

function getFakeMenus(data) {
  switch (data.menu) {
    case "a":
      return "I got an A";
    case "b":
      return "I got a B";
    default:
      return "I don't know what I got"
  }
}

const endpoints = {
  "/": {
    "get": () => "hello world"
  },
  "/menus": {
    "get": getMenus
  },
  "/fakemenus":  {
    "get": getFakeMenus
  }
}


function getFunction(url, data, callback) {
  const domain = url.substring(0, url.indexOf("/"));
  const endpoint = url.substring(url.indexOf("/"), url.length);

  callback(endpoints[endpoint]["get"](data));
}

const api = {
  get: getFunction
};