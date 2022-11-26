
var ul = document.createElement('ul');
var li1 = document.createElement("li");
li1.innerHTML = "first list";
var li2 = document.createElement("li");
li2.innerHTML = "second list";
var li3 = document.createElement("li");
li3.innerHTML = "third list";

var content = document.querySelector("body");
content.appendChild(ul);
var content1 = document.querySelector("ul");
content1.appendChild(li1);
content1.appendChild(li2);
content1.appendChild(li3);