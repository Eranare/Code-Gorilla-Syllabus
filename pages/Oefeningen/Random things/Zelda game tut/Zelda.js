//Canvas

let canvas = document.getElementById("myCanvas");
let ctx = canvas.getContext("2d");
//Event listeners
document.addEventListener("keydown",keyDownHandler, false);
document.addEventListener("keyup",keyUpHandler,false);

//Vars lets consts
let fps = 60;
let worldTiles = new Image();
let caveTiles = new Image();
let link = new Image();
let hud = new Image();
let chars1 = new Image();
let chars2 = new Image();
let enemies = new Image();

let rightPressed = false;
let leftPressed = false;
let upPressed = false;
let downPressed = false;
let lastButtonPressed = "up";
let animationCounter= 0;
let currentAnimation= 0;
let animationSpeed = 10;
let linkX = 116;
let linkY = 135;
let gameObjects = [];
let maps = [];
let gameMap = null;
let lastPickUpItem=0;
let playPickUpItemAnimation = false;
let isPickUpItemName = "";
let isRupee = false;
let rupeeValue =0;
//----------------------
let rupeeAmount = 0;
let linkHearts = 3;
let currentLinkHearts = 3;
let keyAmount = 1;
let bombAmount = 5;
let swordEquipped = 0;
let hasSword =false;
let isAttacking = false;
let canAttackAgain = true;


//enemies vars
let isEnemey= false;
let isEnemyType = [];
let nextX = 0;
let nextY =0;

let health = 0;
let direction ="";
let counter = 0;
let frame = 0;
let needsBounce = false;
let bounceX = 0;
let bounceY = 0;
//
let isOverworld = true;
//

link.src = "sprt/link.png";
worldTiles.src = "overworldtile/tiles-overworld.png";
caveTiles.src=  "overworldtile/tiles-overworld2.png";
hud.src = "hud/pausescreen.png";
chars1.src = "sprt/chars.png";
chars2.src = "sprt/chars2.png";
enemies.src = "sprt/enemies.png";
//Tiles: 15 height 16 width

function GameObject(){
    this.x = 0;
    this.y = 0;
    this.width = 0;
    this.height = 0;
    this.newMap = 0;
    this.newLinkX = 0;
    this.newLinkY =0;
    this.isPortal = false;
    this.counter = 0;
    this.imageNum = 0;
    this.isText = false;
    this.line1Full = "";
    this.line2Full = "";
    this.line1Current = "";
    this.line2Current = "";
    this.line1X = 0;
    this.line1Y = 0;
    this.line2X = 0;
    this.line2Y = 0;
    this.isOldMan= false;
    this.isPickUpItem = false;
    this.pickUpItemNum = 0;
    this.isFlame = false;
    this.isOldWoman = false;
    this.isZelda = false;
    this.isPickUpItemName= "";
    this.isRupee=false;
    this.rupeeValue = 1;
    this.rupeeImage =0;

    this.isEnemey= false;
    this.isEnemyType = [];
    this.nextX = 0;
    this.nextY =0;
    this.isAttacking = false;
    this.health = 0;
    this.direction ="up";
    this.counter = 0;
    this.frame = 0;
    this.needsBounce = false;
    this.bounceX = 0;
    this.bounceY = 0;

}

function MapBundle(m,o){
    this.map = m;
    this.gameobjects = o;
}

function playSound(source){
    let sound = new Audio();
    sound.src = source;
    sound.play();
}

function playMusic(mSource){
    let music = new Audio();
    music.src = mSource;
    music.loop=true;
    music.play();

}


function stopPlayMusic(mSource){
    let music = new Audio();
    music.src = mSource;
    music.pause();
    soundPlayer.currentTime = 0;
}

function keyDownHandler(e){
    if(e.keyCode == 37)
    {
	   leftPressed = true;
	   lastButtonPressed = "left";
	}
	else if(e.keyCode == 39)
	{
	   rightPressed = true;
	   lastButtonPressed = "right";
	}
	else if(e.keyCode == 38)
	{
	   upPressed = true;
	   lastButtonPressed = "up";
	}
	else if(e.keyCode == 40)
	{
	   downPressed = true;
	   lastButtonPressed = "down";
	}
	if(e.keyCode == 32 && canAttackAgain && hasSword)
	{
		isAttacking = true;
		currentAnimation = 0;
		canAttackAgain = false;
		playSound("./sounds/LOZ_sword_slash.wav");
	}
  /*if (e.keycode ==88) {
   
    }*/

}

function keyUpHandler(e){
    if(e.keyCode == 37)
	{
	   leftPressed = false;
	}
	else if(e.keyCode == 39)
	{
	   rightPressed = false;
	}
	else if(e.keyCode == 38)
	{
	   upPressed = false;
	}
	else if(e.keyCode == 40)
	{
	   downPressed = false;
	}
}
//MAPS
let map7_7 = [
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],	
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],	
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],	
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],	
    [ 61, 61, 61, 61, 61, 61, 61,  2,  2, 61, 61, 61, 61, 61, 61, 61],	
    [ 61, 61, 61, 61, 28, 61, 62,  2,  2, 61, 61, 61, 61, 61, 61, 61],	
    [ 61, 61, 61, 62,  2,  2,  2,  2,  2, 61, 61, 61, 61, 61, 61, 61],	
    [ 61, 61, 62,  2,  2,  2,  2,  2,  2, 61, 61, 61, 61, 61, 61, 61],	
    [ 61, 62,  2,  2,  2,  2,  2,  2,  2, 60, 61, 61, 61, 61, 61, 61],	
    [  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2],	
    [ 43, 44,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2, 43, 43],	
    [ 61, 61,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2, 61, 61],	
    [ 61, 61,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2,  2, 61, 61],	
    [ 61, 61, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 61, 61],	
    [ 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61]];
let objects7_7 =[];

let gO = new GameObject();
gO.x=72;
gO.y=72;
gO.width=8;
gO.height=16;
gO.newMap = 1;
gO.newLinkX =120;
gO.newLinkY = 220;
gO.isPortal=true;
gO.isOverworld = false;
objects7_7.push(gO);
//Enemy 1

gO = new GameObject();

gO.x=160;
gO.y=184;
gO.width=16;
gO.height=16;
gO.isEnemy=true;
gO.isEnemyType = 1;
gO.direction ="up"; 
objects7_7.push(gO);

gO = new GameObject();

gO.x=160;
gO.y=164;
gO.width=16;
gO.height=16;
gO.isEnemy=true;
gO.isEnemyType = 1;
gO.direction ="up"; 
objects7_7.push(gO);
gO = new GameObject();

gO.x=120;
gO.y=184;
gO.width=16;
gO.height=16;
gO.isEnemy=true;
gO.isEnemyType = 1;
gO.direction ="up"; 



/*
gO.nextX = 0;
gO.nextY =0;
gO.isAttacking = false;
gO.health = 0;
gO.direction ="up";
gO.counter = 0;
gO.frame = 0;
gO.needsBounce = false;
gO.bounceX = 0;
gO.bounceY = 0; */

objects7_7.push(gO);
let bundle = new MapBundle(map7_7, objects7_7);
maps.push(bundle);

let mapWoodSword = [
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],
    [ 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22],
    [ 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55],
    [ 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 55, 55],
    [ 55, 55, 37, 37, 37, 37, 37, 28, 28, 37, 37, 37, 37, 37, 55, 55],
    [ 55, 55, 55, 55, 55, 55, 55, 28, 28, 55, 55, 55, 55, 55, 55, 55]];
let gameObjectsWoodSword = [];
// 2 flames
gO = new GameObject();
gO.x = (4*16) + 8;
gO.y = (8*16);
gO.width = 16;
gO.height = 16;
gO.isFlame = true;
gameObjectsWoodSword.push(gO);

gO = new GameObject();
gO.x = (10*16) + 8;
gO.y = (8*16);
gO.width = 16;
gO.height = 16;
gO.isFlame = true;
gameObjectsWoodSword.push(gO);
//Old Man
gO = new GameObject();
gO.x = (7*16) + 8;
gO.y = (8*16);
gO.width = 16;
gO.height = 16;
gO.isOldMan = true;
gameObjectsWoodSword.push(gO);

//Sword
gO = new GameObject();
gO.x = (8*16) - 4;
gO.y = (9.5*16);
gO.width = 8;
gO.height = 16;
gO.isPickUpItem = true;
gO.pickUpItemNum = 14;
gameObjectsWoodSword.push(gO);

//Old Man Text
gO = new GameObject();
gO.isText = true;
gO.line1Full = "ITS DANGEROUS TO GO";
gO.line2Full =  "ALONE! TAKE THIS.";
gO.line1X = 3 * 16;
gO.line1Y = 7 * 16;
gO.line2X = 4 * 16;
gO.line2Y = (8 * 16) - 6;
gameObjectsWoodSword.push(gO);

//portals
gO = new GameObject();
gO.x = 112;
gO.y = 240;
gO.width = 16;
gO.height = 16;
gO.newMap = 0;
gO.newLinkX = 68;
gO.newLinkY = 96;
gO.isPortal = true;
gO.isOverworld =true;
gameObjectsWoodSword.push(gO);

gO = new GameObject();
gO.x=128;
gO.y=240;
gO.width=16;
gO.height=16;
gO.newMap = 0;
gO.newLinkX = 68;
gO.newLinkY = 96;
gO.isPortal=true;
gO.isOverworld= true;
gameObjectsWoodSword.push(gO);


bundle = new MapBundle(mapWoodSword, gameObjectsWoodSword);
maps.push(bundle);
gameMap = maps[0].map;
gameObjects = maps[0].gameobjects;
//-----------------------------

function drawLink(){
    let speed = 2;
    animationCounter++;
    if(playPickUpItemAnimation){
        if(animationCounter < 150){
            ctx.drawImage(link, 1, 150, 16, 16, linkX, linkY, 16, 16)
        }
        else{
            playPickUpItemAnimation = false;

        }
        switch(lastPickUpItem){
            case 0 :

            break;
            case 1 :

            break;
            case 2 :

             break;
            case 3 :

            break;
            case 4 :

            break;
            case 5 :

            break;
            case 6 :

            break;
            case 7:

            break;
            case 8:

            break;
            case 9:

            break;
            case 10:

            break;
            case 11:

            break;
            case 12:

            break;
            case 13:

            break;
            case 14:
            ctx.drawImage(hud, 555, 137, 8, 16, linkX-2, linkY-14, 8, 16)
            break;



        }
    }
    else{
        if(isAttacking && hasSword)
		{
			if(currentAnimation == 0)
			{
				if(lastButtonPressed == "down")
				{
					ctx.drawImage(link, 0, 60, 16, 16, linkX, linkY, 16, 16);
				}
				if(lastButtonPressed == "up")
				{
					ctx.drawImage(link, 62, 60, 16, 16, linkX, linkY, 16, 16);
				}
				if(lastButtonPressed == "left")
				{
					ctx.drawImage(link, 30, 60, 16, 16, linkX, linkY, 16, 16);
				}
				if(lastButtonPressed == "right")
				{
					ctx.drawImage(link, 91, 60, 16, 16, linkX, linkY, 16, 16);
				}
			}
			if(currentAnimation == 1)
			{
				if(lastButtonPressed == "down")
				{
					ctx.drawImage(link, 0, 84, 16, 27, linkX, linkY, 16, 27);
                    gameObjectCollision(linkX + 7, linkY + 16, gameObjects, false, true, "down" );
				}
				if(lastButtonPressed == "up")
				{
					ctx.drawImage(link, 62, 84, 16, 26, linkX, linkY - 14, 16, 26);
                    
                    gameObjectCollision(linkX + 3, linkY - 14, gameObjects, false, true, "up");
				}
				if(lastButtonPressed == "left")
				{
					ctx.drawImage(link, 22, 84, 26, 27, linkX - 10, linkY - 8, 27, 27);
                    
                    gameObjectCollision(linkX - 8 , linkY + 5, gameObjects, false, true, "left" );
				}
				if(lastButtonPressed == "right")
				{
					ctx.drawImage(link, 84, 84, 30, 26, linkX, linkY - 8, 30, 26);
                    
                    gameObjectCollision(linkX + 14, linkY + 5, gameObjects, false, true, "right" );
				}
			}
			if(animationCounter >= 6)
			{
				currentAnimation++;
				animationCounter = 0;
				if(currentAnimation > 1)
				{
					currentAnimation = 0;
					isAttacking = false;
					canAttackAgain = true;
				}
			}
		}
            else if(leftPressed && !collission(linkX - speed, linkY, gameMap)){
            linkX -= speed;
            if(currentAnimation==0){
                ctx.drawImage(link, 30, 0, 16, 16, linkX, linkY, 16, 16);
            }
            else if(currentAnimation==1){
                ctx.drawImage(link, 30, 30, 16, 16, linkX, linkY, 16, 16);
            }
                if(animationCounter >=6){
                    currentAnimation++;
                    animationCounter=0;
                    if(currentAnimation > 1){
                        currentAnimation=0;
                    }
                }
        }
        else if(rightPressed  && !collission(linkX + speed, linkY, gameMap)){
            linkX += speed;
            if(currentAnimation==0){
                ctx.drawImage(link, 91, 0, 16, 16, linkX, linkY, 16, 16);
            }
            else if(currentAnimation==1){
                ctx.drawImage(link, 91, 30, 16, 16, linkX, linkY, 16, 16);
            }
            if(animationCounter >=6){
                currentAnimation++;
                animationCounter=0;
                if(currentAnimation > 1){
                    currentAnimation=0;
                }
            }
        }
        else if(upPressed  && !collission(linkX,linkY - speed, gameMap)){
            linkY -= speed;
            if(currentAnimation==0){
                ctx.drawImage(link, 62, 0, 16, 16, linkX, linkY, 16, 16);
            }
            else if(currentAnimation==1){
                ctx.drawImage(link, 62, 30, 16, 16, linkX, linkY, 16, 16);
            }
            if(animationCounter >=6){
                currentAnimation++;
                animationCounter=0;
                if(currentAnimation > 1){
                    currentAnimation=0;
                }
            }
        }
        else if(downPressed && !collission(linkX,linkY + speed, gameMap)){
            linkY += speed;
            if(currentAnimation==0){
                ctx.drawImage(link, 0, 0, 16, 16, linkX, linkY, 16, 16);
            }
            else if(currentAnimation==1){
                ctx.drawImage(link, 0, 30, 16, 16, linkX, linkY, 16, 16);
            }
            if(animationCounter >=6){
                currentAnimation++;
                animationCounter=0;
                if(currentAnimation > 1){
                    currentAnimation=0;
                }
            }
        }
        else 
        {
            if(lastButtonPressed == "down")
            {
                ctx.drawImage(link, 0, 0, 
                16, 16, linkX, linkY, 16, 16);
            }
            if(lastButtonPressed == "up")
            {
                ctx.drawImage(link, 62, 0, 
                16, 16, linkX, linkY, 16, 16);
            }
            if(lastButtonPressed == "left")
            {
                ctx.drawImage(link, 30, 0, 
                16, 16, linkX, linkY, 16, 16);
            }
            if(lastButtonPressed == "right")
            {
                ctx.drawImage(link, 91, 0, 
                16, 16, linkX, linkY, 16, 16);
            }
        }
    }
}
function drawMap(level){
    for(let i = 0; i<level.length; i++){
        for(let j = 0; j<level[i].length; j++){
        ctx.drawImage(worldTiles, ((level[i][j]%18) * 17) +1,
        (Math.floor(level[i][j]/18) * 17) +1,
        16, 16, j *16, i *16, 16, 16);
        }   
    }
    
}

function collission(x,y,map){
    for(let i = 0; i<map.length; i++){
        for(let j = 0; j<map[i].length; j++){
            if(map[i][j] != 2 && map[i][j] != 28){
                if(x <=j*16 + 16 && 
                    x + 12 >= j*16 && 
                    y + 10 <= i * 16 + 16 && 
                    y + 16 >= i*16)
                    {
                        return true;
                    }
            }
        }   
    }
    return false;
}

function gameObjectCollision(x, y, objects, isLink, isSword, direction){
    if(isLink){
        for(let i =0; i<objects.length; i++){
            if(x <= objects[i].x + objects[i].width &&
            x + 16 >= objects[i].x &&
            y <= objects[i].y + objects[i].height &&
            y + 16 >= objects[i].y){
                if(objects[i].isPortal){
                    gameMap=maps[objects[i].newMap].map;
                    gameObjects = maps[objects[i].newMap].gameobjects;
                    linkX = objects[i].newLinkX;
                    linkY = objects[i].newLinkY;
                }
                else if(objects[i].isRupee){
                    rupeeAmount += objects[i].rupeeValue;
                    objects.splice(i,1);
                    playSound("sounds/LOZ_get_rupee.wav");
                }

                else if(objects[i].isPickUpItem){
                    playPickUpItemAnimation = true;
                    // 0 - Boomerang
                    // 1 - bomb
                    // 2 - bow and arrow
                    // 3 - candle
                    // 4 - flute
                    // 5 - meat
                    // 6 - potion red or blue
                    // 7 - magic rod
                    // 8 - raft
                    // 9 - book of magic
                    // 10 - ring
                    // 11 - ladder
                    // 12 - Key
                    // 13 - bracelet
                    // 14 - wooden sword
                    // 15 - 
                    // 16 -
                    // 17 -
                    // 18 - 
                    // 19 -
                    // 20 - 
                    switch(gameObjects[i].pickUpItemNum){
                        case 0 :
        
                        break;
                        case 1 :
        
                        break;
                        case 2 :
        
                         break;
                        case 3 :
        
                        break;
                        case 4 :
        
                        break;
                        case 5 :
        
                        break;
                        case 6 :
        
                        break;
                        case 7:
        
                        break;
                        case 8:
        
                        break;
                        case 9:
        
                        break;
                        case 10:
        
                        break;
                        case 11:
        
                        break;
                        case 12:
        
                        break;
                        case 13:
        
                        break;
                        case 14:
                            lastPickUpItem =14;
                            swordEquipped= 1;
                            hasSword =true;
                            playSound("sounds/item.mp3");
                           
                        break;
                        default: 
        
                        break;
                    }
                    objects.splice(i,1);
                }

            }
        }
    }
    else{
        let swordW =11;
        let swordH = 3;
        if(lastButtonPressed == "up"|| lastButtonPressed =="down"){
            swordW =3;
            swordH = 11;
        }

        for (let i=0; i<objects.length; i++){
        
            if(lastButtonPressed == "left"){
                if(x <= objects[i].x + objects[i].width &&
                    x + swordW>= objects[i].x &&
                    y <=objects[i].y + objects[i].height &&
                    y + swordH>= objects[i].y){
                        if(objects[i].isEnemy){

                            objects[i].needsBounce=true;
                            getBounceLoc(objects[i], false, direction);
                            //
                            objects[i].health -=1;
                            if(objects[i].health <= 0){
                                playSound("sounds/LOZ_Enemy_Die.wav")
                            
                            }
                            else {
                                playSound("sounds/LOZ_Enemy_Hit.wav")
                            }
                        }
                    }
            }
            else if(lastButtonPressed == "right"){
                if(x <= objects[i].x + objects[i].width &&
                    x + swordW>= objects[i].x &&
                    y <=objects[i].y + objects[i].height &&
                    y + swordH>= objects[i].y){
                        if(objects[i].isEnemy){

                            objects[i].needsBounce=true;
                            getBounceLoc(objects[i], false, direction);
                            //
                            objects[i].health -=1;
                            if(objects[i].health <= 0){
                                playSound("sounds/LOZ_Enemy_Die.wav")
                            
                            }
                            else {
                                playSound("sounds/LOZ_Enemy_Hit.wav")
                            }
                        }
                    }
            }
            else if(lastButtonPressed == "up"){
                if(x <= objects[i].x + objects[i].width &&
                    x + swordW>= objects[i].x &&
                    y <=objects[i].y + objects[i].height &&
                    y + swordH>= objects[i].y){
                        if(objects[i].isEnemy){

                            objects[i].needsBounce=true;
                            getBounceLoc(objects[i], false, direction);
                            //
                            objects[i].health -=1;
                            if(objects[i].health <= 0){
                                playSound("sounds/LOZ_Enemy_Die.wav")
                            
                            }
                            else {
                                playSound("sounds/LOZ_Enemy_Hit.wav")
                            }
                        }
                    }
            }
            else {
                if(x <= objects[i].x + objects[i].width &&
                    x + swordW>= objects[i].x &&
                    y <=objects[i].y + objects[i].height &&
                    y + swordH>= objects[i].y){
                        if(objects[i].isEnemy){

                            objects[i].needsBounce=true;
                            getBounceLoc(objects[i], false, direction);
                            //
                            objects[i].health -=1;
                            if(objects[i].health <= 0){
                                playSound("sounds/LOZ_Enemy_Die.wav")
                            
                            }
                            else {
                                playSound("sounds/LOZ_Enemy_Hit.wav")
                            }
                        }
                    }
            }
                

        }
    }
}

function getBounceLoc(gObject, ignoresObjects, direction){
    let currRow = Math.floor(gObject.y/16); 
    let currCol = Math.floor(gObject.x/16);
    if (direction == "up"){
        if(gameMap[currRow -1][currCol] == 2){
            gObject.bounceY = gObject.y -16;            
            gObject.bounceX = gObject.x;            
        }
        else{
            gObject.bounceY = gObject.y;            
            gObject.bounceY = gObject.y;            
        }

    }
    if (direction == "down"){
        if(gameMap[currRow +1][currCol] == 2){
            gObject.bounceY = gObject.y +16;            
            gObject.bounceX = gObject.x;            
        }
        else{
            gObject.bounceY = gObject.y;            
            gObject.bounceY = gObject.y;            
        }

    }
    if (direction == "left"){
        if(gameMap[currRow][currCol-1] == 2){
            gObject.bounceY = gObject.y;            
            gObject.bounceX = gObject.x -16;            
        }
        else{
            gObject.bounceY = gObject.y;            
            gObject.bounceY = gObject.y;            
        }

    }
    if (direction == "right"){
        if(gameMap[currRow][currCol+1] == 2){
            gObject.bounceY = gObject.y;            
            gObject.bounceX = gObject.x +16;            
        }
        else{
            gObject.bounceY = gObject.y;            
            gObject.bounceY = gObject.y;            
        }

    }
}

function drawGameObjects(){
    for(let i =0; i<gameObjects.length; i++){
        if(gameObjects[i].isPickUpItem){
            // 0 - Boomerang
            // 1 - bomb
            // 2 - bow and arrow
            // 3 - candle
            // 4 - flute
            // 5 - meat
            // 6 - potion red or blue
            // 7 - magic rod
            // 8 - raft
            // 9 - book of magic
            // 10 - ring
            // 11 - ladder
            // 12 - Key
            // 13 - bracelet
            // 14 - wooden sword
            // 15 - 
            // 16 -
            // 17 -
            // 18 - 
            // 19 -
            // 20 - 
            switch(gameObjects[i].pickUpItemNum){
                case 0 :

                break;
                case 1 :

                break;
                case 2 :

                 break;
                case 3 :

                break;
                case 4 :

                break;
                case 5 :

                break;
                case 6 :

                break;
                case 7:

                break;
                case 8:

                break;
                case 9:

                break;
                case 10:

                break;
                case 11:

                break;
                case 12:

                break;
                case 13:

                break;
                case 14:
                ctx.drawImage(hud, 555,137,8,16, gameObjects[i].x, gameObjects[i].y, 8, 16);

                break;
                default: 

                break;
            }
        }
		if(gameObjects[i].isText)
		{
			gameObjects[i].counter+=1;
			if(gameObjects[i].counter%5==0)
			{
				if(gameObjects[i].line1Full.length != gameObjects[i].line1Current.length)
				{
					gameObjects[i].line1Current = gameObjects[i].line1Full.substring(0, gameObjects[i].line1Current.length + 1);
                    playSound("./sounds/LOZ_text_slow.wav");
				}
				else if(gameObjects[i].line2Full.length != gameObjects[i].line2Current.length)
				{
					gameObjects[i].line2Current = gameObjects[i].line2Full.substring(0, gameObjects[i].line2Current.length + 1);
                    playSound("./sounds/LOZ_text_slow.wav");
				}
			}
			
			ctx.fillStyle = "white";
			ctx.font = "12px Arial";
			ctx.fillText(gameObjects[i].line1Current, gameObjects[i].line1X, gameObjects[i].line1Y);
			ctx.fillText(gameObjects[i].line2Current, gameObjects[i].line2X, gameObjects[i].line2Y);
		}
        if(gameObjects[i].isFlame){
            gameObjects[i].counter++;
            if(gameObjects[i].counter%5 ==0){
                gameObjects[i].imageNum++;
            }
            if(gameObjects[i].imageNum > 1){
                gameObjects[i].imageNum = 0;
            }
            if (gameObjects[i].imageNum == 0){
                ctx.drawImage(chars2, 158, 11, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
            }
            else{
                ctx.drawImage(chars1, 52, 11, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
            }
        }
        if(gameObjects[i].isOldMan){
            ctx.drawImage(chars1, 1, 11, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
        }
        if(gameObjects[i].isOldWoman){
            ctx.drawImage(chars1, 35, 11, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
        }
        if(gameObjects[i].isEnemy){
            switch(gameObjects[i].isEnemyType){
                case 0 :

                break;
                case 1 :
                    gameObjects[i].counter++;
                    if (gameObjects[i].counter >= 10){
                        gameObjects[i].frame++;
                        gameObjects[i].counter = 0;
                        if(gameObjects[i].frame >1){
                            gameObjects[i].frame= 0;

                        }
                    }
                    if (gameObjects[i].direction=="down"){
                        if(gameObjects[i].frame== 0){
                            ctx.drawImage(enemies, 0, 0, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                        if(gameObjects[i].frame== 1){
                            ctx.drawImage(enemies, 0, 30, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                    }
                    else if (gameObjects[i].direction=="up"){
                        if(gameObjects[i].frame== 0){
                            ctx.drawImage(enemies, 60, 0, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                        if(gameObjects[i].frame== 1){
                            ctx.drawImage(enemies, 60, 30, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                    }
                    else if (gameObjects[i].direction=="left"){
                        if(gameObjects[i].frame== 0){
                            ctx.drawImage(enemies, 30, 0, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                        if(gameObjects[i].frame== 1){
                            ctx.drawImage(enemies, 30, 30, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                    }
                    else{
                        if(gameObjects[i].frame== 0){
                            ctx.drawImage(enemies, 90, 0, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                        if(gameObjects[i].frame== 1){
                            ctx.drawImage(enemies, 90, 30, 16, 16, gameObjects[i].x, gameObjects[i].y, 16, 16);
                        }
                    }
                break;
                case 2 :

                 break;
                case 3 :

                break;
                case 4 :

                break;
                case 5 :

                break;
                case 6 :

                break;
                case 7:

                break;
                case 8:

                break;
                case 9:

                break;
                case 10:

                break;
                case 11:

                break;
                case 12:

                break;
                case 13:

                break;
                case 14:
                

                break;
                default: 

                break;
            }
            if (gameObjects[i].needsBounce){
                if(gameObjects[i].x != gameObjects[i].bounceX){
                    if(gameObjects[i].bounceX > gameObjects[i].x){
                        gameObjects[i].x += 4;
                    }
                    else{
                        gameObjects[i].x -=4;
                    }
                }
                if(gameObjects[i].y != gameObjects[i].bounceY){
                    if(gameObjects[i].bounceY > gameObjects[i].y){
                        gameObjects[i].y += 4;
                    }
                    else{
                        gameObjects[i].y -=4;
                    }
                }
                else{
                    gameObjects[i].needsBounce=false;
                    if(gameObjects[i].health <=0){
                        //rng Droprate
                        //Loot table of rupees/ bomb/ health
                        let rupeeChance = Math.floor(Math.random()*10);
                        if(rupeeChance <=10){
                                rupeeObject = new GameObject();{
                                rupeeObject.x = gameObjects[i].x +4;
                                rupeeObject.y = gameObjects[i].y;
                                rupeeObject.width = 8;
                                rupeeObject.height = 16;
                                rupeeObject.isRupee =true;
                                let rupeeValueChance = Math.floor(Math.random()*10);
                                if(rupeeValueChance < 2){
                                    rupeeObject.rupeeValue =5;
                                }
                                else{
                                    rupeeObject.rupeeValue=1;
                                }
                                gameObjects.push(rupeeObject);
                            }
                        }

                        }
                        //Despawn enemy
                        gameObjects.splice(i,1);
                    }    
                }
            }
        if(gameObjects[i].isRupee){
            if(gameObjects[i].rupeeValue==1){
                gameObjects[i].counter++;
                if(gameObjects[i].counter%5 == 0){
                    gameObjects[i].rupeeImage +=1;
                }
                if(gameObjects[i].rupeeImage >1){
                    gameObjects[i].rupeeImage =0;
                }
                if(gameObjects[i].rupeeImage ==0){
                    ctx.drawImage(link, 244, 225, 8, 16, gameObjects[i].x,gameObjects[i].y, 8, 16);
                }
                else{
                    ctx.drawImage(link, 274, 225, 8, 16, gameObjects[i].x,gameObjects[i].y, 8, 16);
                }
            }
            else{
                ctx.drawImage(link, 274, 225, 8, 16, gameObjects[i].x,gameObjects[i].y, 8, 16);
            }
        }    
        
    }
}
function drawHUD(){
    ctx.drawImage(hud,258, 11, 256, 56, 0, 0, 256, 56);
    ctx.fillStyle= ("black");
    ctx.fillRect(176, 32, 64, 16);

    let fullHearts = Math.floor(currentLinkHearts);
    let halfHearts = currentLinkHearts - fullHearts;
    for(let i = 0; i< linkHearts; i++){
        let heartY = 40;
        let heartX = 176 + (i * 8);
        if (i>7){
            heartY = 40 - 8;
            heartX -=64
        }
        ctx.drawImage(hud, 627, 117, 8, 8, heartX, heartY, 8, 8);
    }
    let halfHeartX = 0;
    let halfHeartY = 0;
    for(let i =0; i<fullHearts; i++){
        let heartY = 40;
        let heartX = 176 + (i * 8);
        if (i>7){
            heartY = 40 - 8;
            heartX -=64
        }
        ctx.drawImage(hud, 645, 117, 8, 8, heartX, heartY, 8, 8);
        if(i == fullHearts-1){
            if(i>6){
                halfHeartY =40-8;
                halfHeartX = 176  +((i%7) +8);

            }
            else{
                halfHeartY =40;
                halfHeartX = 176  +((i*8) +8);

            }
        }
    }
    if(halfHearts > 0 && fullHearts >=1){
        ctx.drawImage(hud, 636, 117, 8, 8, halfHeartX, halfHeartY, 8, 8);
    }
    else if(halfHearts >0 && fullHearts ==0 ){
        ctx.drawImage(hud, 636, 117, 8, 8, 176, 40, 8, 8);
    }
    ctx.fillStyle= ("black");
    ctx.fillRect(96, 10, 24, 50);
    if(rupeeAmount < 100){
        ctx.drawImage(hud, 519, 117, 8, 8, 96, 16, 8, 8);
        let firstNum = rupeeAmount%10;
        ctx.drawImage(hud, 528 + (8*firstNum) + firstNum, 117, 8, 8, 96 + 16, 16, 8, 8 );
        let secondNum = Math.floor(rupeeAmount/10);
        ctx.drawImage(hud, 528 + (8*secondNum) + secondNum, 117, 8, 8, 96 + 8, 16, 8, 8 );    
    }
    else{
        let firstNum = rupeeAmount%10;
        ctx.drawImage(hud, 528 + (8*firstNum) + firstNum, 117, 8, 8, 96 + 16, 16, 8, 8 );
        let thirdNum = Math.floor(rupeeAmount/100)*100 ;
        let secondNum = ((rupeeAmount -thirdNum)-firstNum )/10;
        ctx.drawImage(hud, 528 + (8*secondNum) + secondNum, 117, 8, 8, 96 + 8, 16, 8, 8 );
        thirdNum = Math.floor(rupeeAmount/100);
        ctx.drawImage(hud, 528 + (8*thirdNum) + thirdNum, 117, 8, 8, 96, 16, 8, 8 );
    }
    if(rupeeAmount >= 1000){
        let rupeeFailSafe = 999;
        let firstNum = rupeeFailSafe%10;
        ctx.drawImage(hud, 528 + (8*firstNum) + firstNum, 117, 8, 8, 96 + 16, 16, 8, 8 );
        let thirdNum = Math.floor(rupeeFailSafe/100)*100 ;
        let secondNum = ((rupeeFailSafe -thirdNum)-firstNum )/10;
        ctx.drawImage(hud, 528 + (8*secondNum) + secondNum, 117, 8, 8, 96 + 8, 16, 8, 8 );
        thirdNum = Math.floor(rupeeFailSafe/100);
        ctx.drawImage(hud, 528 + (8*thirdNum) + thirdNum, 117, 8, 8, 96, 16, 8, 8 );
    }
    ctx.drawImage(hud, 519, 117, 8, 8, 96, 32, 8, 8);
    ctx.drawImage(hud, 519, 117, 8, 8, 96, 41, 8, 8);
    ctx.drawImage(hud, 528 + (8*keyAmount) + keyAmount, 117, 8, 8, 96 + 8, 32, 8, 8 );
    ctx.drawImage(hud, 528 + (8*bombAmount) + bombAmount, 117, 8, 8, 96 + 8, 41, 8, 8 );

    
    ctx.fillRect(128, 24, 8, 16);
    ctx.fillRect(152, 24, 8, 16);
    if(swordEquipped){
        ctx.drawImage(hud, 555, 137, 8, 16, 152, 24, 8, 16);
    }
    //map fill gray
    ctx.fillStyle = "gray";
    ctx.fillRect(16, 8, 64, 48); 
}
//
//---temp music holder


console.log(isOverworld);

if(isOverworld){
    playMusic("sounds/Overworld_edit.mp3");
}
else{
   stopPlayMusic("sounds/Overworld_edit.mp3");
}



function draw () {
   setTimeout(function() {
   requestAnimationFrame(draw);
   ctx.fillStyle = "black";

   ctx.fillRect(0,0,256,240);
   ///all code goes here
   
   drawMap(gameMap);
   drawLink();
   gameObjectCollision(linkX, linkY, gameObjects, true)
   drawGameObjects();
   drawHUD();
   },1000/fps);
}
draw();