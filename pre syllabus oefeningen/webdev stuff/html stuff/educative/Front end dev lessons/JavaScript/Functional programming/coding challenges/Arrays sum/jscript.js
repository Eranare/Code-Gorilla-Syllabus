const arrays = [[1, 4], [11], [3, 5, 7]]; // 5 + 11 + 15 = 31


//const sum=  arrays.reduce((acc, value) => acc + value, 0); //01.4113.5.7 this isnt summing it up but just lumping it all together
//const sum = arrays.reduce((acc,element) => acc+element.length,0); //this returned 6

//..Durp count in a for function would have done the trick
//const total = arr => arr.arrays = arr.arrays.reduce((a,b) => a + b, 0) ;

function findSum(array) {
  var sum = 0;
  for(x of array){
    for(y of x){
          sum += y;
      }
  }
  
return sum;
}

console.log();
//How to bloody print this sum value
/*
var p = document.createElement("p");
p.innerHTML = findSum();

*/

//console.log(findSum.);