//----------variables 
//maybe i should have been using lets, habbits
var firstlog ="";
var secondlog = "";
var multiplytable7 = "";


var multiplytable1to10 ="";

var sumtotalof1to10 ="";

var calculate10total ="";
var sum10to30oddstotal = "";

//---------------------------------------

//ex1
function count1to10 () {
    for (let i = 1; i<=10; i++)
    firstlog += [i] + " ";
    
}

count1to10();
console.log(firstlog); //Okay this worked


//-----------
function count1to100(){
    for (let i = 1; i<=100; i++){
        if ([i] % 2 === 0) {
            secondlog += [i] + " ";
    }
    
}
}
count1to100();
console.log(secondlog); //this does evens but i gotta have odds

//----------------------
//ex2
function count1to100odds(){
    secondlog= ""; //secondlog reset
    for (let i = 1; i<=100; i++){
        if ([i] % 2 === 1) {
            secondlog += [i] + " ";
    }
    
}
}
count1to100odds();
console.log(secondlog); //eyoo

//------------------------
/* multiplication table of 7 */
//ex3
function multiply7() { //7 + "string * + [i] + "= "+multiplyby7?  
    for (let i = 1; i<=10; i++){
       // multiplytable7   += [i] + "*7="+  ([i] *7) + " \n" ; //ahshit wrong way around
        multiplytable7 += "7*"+[i]+ "=" + ([i]*7) + "\n";

    }
}
multiply7();
console.log( multiplytable7);  //owshit have to word it differently

//---------
//ex4
function multiply1to10() {
    for (let x = 1; x<=10; x++){
        for (let i = 1; i<=10; i++){
        multiplytable1to10 += [i] + "*"+ [x]+ "="+  [i] *x + " \n" ;
        }
        multiplytable1to10 += "\n";
    }    
}
multiply1to10();
console.log(multiplytable1to10); //hoppa


//---------------
//ex5
function sumof1to10(){ 
let x = 0 ;
    for(let i = 1; i <=10; i++){
    x+=i;            
    }
    sumtotalof1to10 = x; 

    //sumtotalof1to10 +="the total sum of 1 to 10 ="+[i] ;
}    
sumof1to10();
console.log("the total sum of 1 to 10 = "+sumtotalof1to10);

//-------------
//ex6
function calculate10(){
    let x=1;
    for(let i = 1; i<=10; i++){
        x*=i;
    }
    calculate10total= x;
}
calculate10();
console.log("10! = " +calculate10total );
//---------------
//ex7
function sumof10to30odds(){
    let x=0;
    for(let i=10; i<=30; i++){
        if ([i] % 2 === 1) {
            x+=i;
        }
    }
    sum10to30oddstotal = x;
}
sumof10to30odds();
console.log("the sum of odd numbers between 10 to 30 = " +sum10to30oddstotal);

//----------------
//ex8
// C and F conversion for input
var inputC = document.getElementById("ctof").value;
var outputC = ftoc();
var inputF = document.getElementById("ftoc").value;
var outputF = ctof();
var inputC;
var outputC;
var inputF;
var outputF;
function ctof(){
    var fahrenheit = " ";
    var celcius = " ";
    celcius = inputC; //input
    fahrenheit =   ((celcius *1.8) + 32);
    outputF = Math.round(fahrenheit*100)/100;

}
function ftoc(){ 
   var fahrenheit = "";
   var celcius = '';
   fahrenheit = inputF;
   celcius = (fahrenheit-32)/1.8;
   outputC = Math.round(celcius*100)/100; 
}

//when convert button is clicked call both ctof and ftoc
let convert = document.getElementById("convert");
convert.addEventListener('click', event => {
    inputC = document.getElementById("ctof").value;
        if (inputC === ""){
            inputC = 20;
        }
    outputC = ftoc();
    inputF = document.getElementById("ftoc").value;
        if (inputF === ""){
            inputF = 68;
        }
    outputF = ctof();
    ctof();
    ftoc();
    
console.log(inputC + "°C is "+  outputF + "°F");
console.log(inputF + "°F is "+ outputC+ "°C");
var output = document.getElementById("output");
output.innerHTML = inputC + "°C is "+  outputF + "°F" + " \n " + "and " + inputF + "°F is "+ outputC+ "°C";
});
//output is a single line, \n doesnt work
// celcius °C to fahrenheit °F multiply by 1.8 (or 9/5) and add 32.

//--------------
//ex9
//sum within a sum within a sum?
let arrofsumsofnumbers= [15+23, 4213+322, 12-4, 23+52];
console.log(arrofsumsofnumbers);

//ex9 proper
const arr = [2, 3, -1, 5, 7, 9, 10, 15, 95];

let sum = 0;

for (const value of arr) {
  sum += value;
}

console.log("the sum of the array [" + arr  + "] = " + sum); 