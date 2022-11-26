
//move into making a bullet hell shooter
//draw hitbox function
//can i use external sprites, probably
//download music instead and just play through game
//add pause function
//bullets and bullet hitboxes
//


//On start press space, game starts?
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
let stream = document.getElementsByTagName("iframe");
let x = canvas.width / 2;
let y = canvas.height - 30;
let dx = 4;
let dy = -4;
let lives = 3;
let score = 0; 
const ballRadius = 10;

const paddleHeight = 10;
const paddleWidth = 125;
let paddleX = (canvas.width - paddleWidth) / 2;
//-------paddle controls
let rightPressed = false;
let leftPressed = false;

//---------------
//pause control 

let spacePressed = false;
let gamePaused = false;
//Bricks
let brickColor = "blue";
const brickRowCount = 5;
const brickColumnCount = 10;
const brickWidth = 75;
const brickHeight = 20;
const brickPadding = 10;
const brickOffsetTop = 30;
const brickOffsetLeft = 30;

const bricks = [];
for (let c = 0; c < brickColumnCount; c++) {
  bricks[c] = [];
  for (let r = 0; r < brickRowCount; r++) {
    bricks[c][r] = { x: 0, y: 0, status: 3 };
  }
}
//let b ;
function restartGame(){
    
    x = canvas.width / 2;
    y = canvas.height - 30;
    dx = 4;
    dy = -4;
    
    //ballRadius = 10;
    
   // paddleHeight = 10;
   // paddleWidth = 125;
    paddleX = (canvas.width - paddleWidth) / 2;
    //-------paddle controls
    rightPressed = false;
    leftPressed = false;

    
}

function restartgamefull(){
    
    lives =3;
    x = canvas.width / 2;
    y = canvas.height - 30;
    dx = 4;
    dy = -4;
    
    ballRadius = 10;
    
    paddleHeight = 10;
    paddleWidth = 125;
    paddleX = (canvas.width - paddleWidth) / 2;
    //-------paddle controls
    rightPressed = false;
    leftPressed = false;
    //---------------
    //Bricks
    brickRowCount = 5;
    brickColumnCount = 10;
    brickWidth = 75;
    brickHeight = 20;
    brickPadding = 10;
    brickOffsetTop = 30;
    brickOffsetLeft = 30;

    
    
    for (let c = 0; c < brickColumnCount; c++) {
      bricks[c] = [];
      for (let r = 0; r < brickRowCount; r++) {
        bricks[c][r] = { x: 0, y: 0, status: 3 };
      }
    }      
}



function drawBall() {
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI * 2);
    ctx.fillStyle = "#F0F8FF";
    
    ctx.fill();
    ctx.closePath();
}

  
function drawPaddle() {
    ctx.beginPath();
    ctx.rect(paddleX, canvas.height - paddleHeight -7, paddleWidth, paddleHeight);
    ctx.fillStyle = "#F0F8FF";
    ctx.fill();
    ctx.closePath();
}

function drawBricks() {
    for (let c = 0; c < brickColumnCount; c++) {
      for (let r = 0; r < brickRowCount; r++) {
        if (bricks[c][r].status >=1 ) {
          const brickX = c * (brickWidth + brickPadding) + brickOffsetLeft;
          const brickY = r * (brickHeight + brickPadding) + brickOffsetTop;
          bricks[c][r].x = brickX;
          bricks[c][r].y = brickY;
          ctx.beginPath();
          ctx.rect(brickX, brickY, brickWidth, brickHeight);
          if (bricks[c][r].status <=2 ) {
            ctx.fillStyle = brickColor;
            }
          else ctx.fillStyle = "blue";
          
          ctx.fill();
          ctx.closePath();

        }
      }
    }
  }
//-----------
//Randomize brick colors
function randomColorBricks(){
  var x = Math. floor(Math. random() * 256);
  var y = Math. floor(Math. random() * 256);
  var z = Math. floor(Math. random() * 256);
  brickColor ="rgb( "+x+","+y+","+z+")";
}  
//-----------
function drawScore(){

        ctx.font = "16px Arial";
        ctx.fillStyle = "#FFFAFA";
        ctx.fillText(`Score: ${score}`, 8, 20);
      
}
function drawLives() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#FFFAFA";
    ctx.fillText(`Lives: ${lives}`, canvas.width - 65, 20);
  }

function draw() {
 
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBricks();
    drawBall();
    drawPaddle();
    drawScore();
    drawLives();
   // randomColorBricks();
    collisionDetection();


    if (x + dx > canvas.width -ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
   /* if (x > paddleX && x < paddleX + paddleWidth) {
        dx = -dx;
    }*/

    if (y + dy < ballRadius) {
        dy = -dy;
      } else if (y + dy > canvas.height - ballRadius -7) {
        if (x > paddleX && x < paddleX + paddleWidth) {
          dy = -dy;
          /*if (x > paddleX && x < paddleX + (paddleWidth/2)){
            dx = -dx;
          }*/
        //  dx = -dx;
        //dx = dx/5 + 5;
        }
        
        else if (y + dy > canvas.height - ballRadius +30) {
         
            lives -=1;
            
            
            if (lives ===0 ){    
                gameOver();
                
        }
         
         else { 
           // clearInterval(interval);
            restartGame(); }
        }
      }
    if (rightPressed) {
        paddleX = Math.min(paddleX + 7, canvas.width - paddleWidth);
    } else if (leftPressed) {
        paddleX = Math.max(paddleX - 7, 0);
    }

    x += dx;
    y += dy;

    requestAnimationFrame(draw);
  
}
function gameOver(){
    alert("GAME OVER");
    document.location.reload();
   restartgamefull();
   // clearInterval(interval);
    
}

//document.addEventListener("spacedown", keyDownHandler, false);

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);


function keyDownHandler(e) {
    if (e.key === "Right" || e.key === "ArrowRight") {
      rightPressed = true;
    } else if (e.key === "Left" || e.key === "ArrowLeft") {
      leftPressed = true;
    }

  }
  
function keyUpHandler(e) {
    if (e.key === "Right" || e.key === "ArrowRight") {
      rightPressed = false;
    } else if (e.key === "Left" || e.key === "ArrowLeft") {
      leftPressed = false;

    }
}
function mouseMoveHandler(e) {
    const relativeX = e.clientX - canvas.offsetLeft;
    if (relativeX > 0 && relativeX < canvas.width) {
      paddleX = relativeX - paddleWidth / 2;
    }
  }

function collisionDetection() {
    for (let c = 0; c < brickColumnCount; c++) {
      for (let r = 0; r < brickRowCount; r++) {
         b = bricks[c][r];
        if (b.status >= 1) {
          if (
            x > b.x &&
            x < b.x + brickWidth &&
            y > b.y &&
            y < b.y + brickHeight
          ) {
            dy = -dy;
            b.status -= 1 ;
            score++;
            randomColorBricks();
           // ctx.fillStyle = 'rgb(' + r +', ' + g + ',' + b +')';
            if (score === (brickRowCount * brickColumnCount) *3 ) {
                alert("YOU WIN, CONGRATULATIONS!");
                document.location.reload();
            }
              //  clearInterval(interval); // Needed for Chrome to end game
          }
        }
      }
    }
  }
  //var r = Math.floor(Math.Random()* 256);
  //var g = Math.floor(Math.Random()* 256);
  //var b = Math.floor(Math.Random()* 256);
  
  //var cssColor = 'rgb(' + r +', ' + g + ',' + b +')';
  function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
}  

function drawVisualiser(){
  const drawVisual = requestAnimationFrame(draw);

}
//Audio visualizer

//-----draw function to start the whole thing

  draw();

//const interval = setInterval(draw, 10);//sets the canvas in motion
