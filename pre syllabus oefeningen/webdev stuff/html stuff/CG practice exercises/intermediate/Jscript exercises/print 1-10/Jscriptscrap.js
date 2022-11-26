//console.log("numbers 1 2 3 4 5 6 7 8 9 10 in a line")
/*
//lifted from stack
//must be an easier way to put 1 - 100 in an array to print out the odds 
var arr = [1, 2, 3, 4, 5, 6];

for (var i = 0; i < arr.length; i++) {
    if (arr[i] % 2 === 0) {
        console.log(arr[i] + "");
    }
}
//--------------
//---- this should fill out the whole array
const array = Array(100).fill(1).map((n, i) => n + i)

console.log(array)

*/

//---- lets adjust the first print then

const arr1to100 = Array(100).fill(1).map((n,i)=> n + i)

for ( var i = 0; i <arr1to100.length; i++){
    if (arr1to100[i] <= 10){
        console.log (arr1to100[i]+"");
    }
    
}
//bit of a hack job but it prints 1 to 10 seperately probs should do it outside the loop

//console.log(arr1to100);
//that just prints the whole lot

//keep it simple i guess
const arr1to10 = Array(10).fill(1).map((n,i)=> n+i);
//console.log (arr1to10);
        //how to print without the (10)..
//console.log(arr1to10.value);
        //didnt work ofcourse er.. figure that detail out later 
        //could put the loop in a string then print that out
const print110 =[];
function countto10 (){
for ( var i = 0; i <arr1to100.length; i++){
    if (arr1to100[i] <= 10){
        print110.push(arr1to100);
        console.log(print110[i] +" ");   
    } 
    else {
    
    }           
}
}
countto10();
//console.log(print110); //what in the !%@!#! is this even

//now to print odds of 1 to 100
for ( var i = 0; i <arr1to100.length; i++){
    if (arr1to100[i] %1 === 0){
        //console.log (arr1to100[i]+"");
    }    
}
//same logic maybe, figure out odds in the loop, slap in string print that out?

 
//im clearly skipping steps


//Lets make a simple array with 100
//count that and push the value into a string


//this is basically my scrapbook at this point probably shouldnt use