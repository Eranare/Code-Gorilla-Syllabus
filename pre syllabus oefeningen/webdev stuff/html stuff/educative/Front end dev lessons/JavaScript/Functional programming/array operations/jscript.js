const numbers = [1, 5, 10, 15];
// The associated function multiply each array number by 2
const doubles = numbers.map(x => x * 2); //x is array number 

console.log(numbers); // [1, 5, 10, 15] (no change)
console.log(doubles); // [2, 10, 20, 30]

const sum = numbers.reduce((acc, value) => acc + value, 0); //Reduce slaps all selected array elements together

console.log(numbers); // [1, 5, 10, 15] (no change)
console.log(sum);     // 31

/*_____________________________________*/
/* Refer to movielist jscripts         */
/* simpler way of writing functions    */
/*_____________________________________*/
const movieList = [
  {
    title: "Batman",
    year: 1989,
    director: "Tim Burton",
    imdbRating: 7.6
  },
  {
    title: "Batman Returns",
    year: 1992,
    director: "Tim Burton",
    imdbRating: 7.0
  },
  {
    title: "Batman Forever",
    year: 1995,
    director: "Joel Schumacher",
    imdbRating: 5.4
  },
  {
    title: "Batman & Robin",
    year: 1997,
    director: "Joel Schumacher",
    imdbRating: 3.7
  },
  {
    title: "Batman Begins",
    year: 2005,
    director: "Christopher Nolan",
    imdbRating: 8.3
  },
  {
    title: "The Dark Knight",
    year: 2008,
    director: "Christopher Nolan",
    imdbRating: 9.0
  },
  {
    title: "The Dark Knight Rises",
    year: 2012,
    director: "Christopher Nolan",
    imdbRating: 8.5
  }
];

/* ------
  // Get movie titles
  const titles = [];
  for (const movie of movieList) {
    titles.push(movie.title);
  }
  console.log("Every Batman movie: " + titles); */
 
  const titles = movies => {

  
    // Return a new array containing only movie titles
    return movies.map(movie => movie.title);
  };
/* ---------
  // Count movies by Christopher Nolan
const nolanMovieList = [];
for (const movie of movieList) {
  if (movie.director === "Christopher Nolan") {
    nolanMovieList.push(movie);

    
  }
} */

// Get movies by Christopher Nolan
const nolanMovies = movies => {

  // Return a new array containing only movies by Christopher Nolan
  return movies.filter(movie => movie.director === "Christopher Nolan");
};
/*--------------------------
const bestTitles = [];
for (const movie of movies) {
  if (movie.imdbRating >= 7.5) {
    bestTitles.push(movie.title);
  }
}
return bestTitles;


*/
// Get titles of movies with an IMDB rating greater or equal to 7.5
const bestTitles = movies => {

  // Filter movies by IMDB rating, then creates a movie titles array
  return movies.filter(movie => movie.imdbRating >= 7.5).map(movie => movie.title);
};
console.log(bestTitles(movieList)) //Way shorter way better, looks a lot more familiar to how ive messed around with a C based language as well
/*---------------------

  let ratingSum = 0;
  for (const movie of movies) {
    ratingSum += movie.imdbRating;
  }
  return ratingSum / movies.length;
  */

// Compute average rating of a movie list
const averageRating = movies => {


  // Compute the sum of all movie IMDB ratings
  const ratingSum = movies.reduce((acc, movie) => acc + movie.imdbRating, 0); //computes total rating by reducing the array into a single number
  //this average has a lot of decimals to it though, must be some way to round down
  return ratingSum / movies.length; //divides sum by length/total amount of movies
  
}; 
console.log(averageRating(movieList)) 

//compute sum before reducing

const averageRating2 = movies => {
  /* Previous code
  let ratingSum = 0;
  for (const movie of movies) {
    ratingSum += movie.imdbRating;
  }
  return ratingSum / movies.length;
  */

  // Compute the sum of all movie IMDB ratings
  const ratingSum2 = movies.map(movie => movie.imdbRating).reduce((acc, value) => acc + value, 0); //computes rating through .map before reducing the array into a single number
  return ratingSum2 / movies.length;
};
console.log(averageRating2(movieList))