const board = [
    null, 0, null, 1, null, 2, null, 3,
    4, null, 5, null, 6, null, 7, null,
    null, 8, null, 9, null, 10, null, 11,
    null, null, null, null, null, null, null, null, 
    null, null, null, null, null, null, null, null, 
    12, null, 13, null, 14, null, 15, null,
    null, 16, null, 17, null, 18, null, 19,
    20, null, 21, null, 22, null, 23, null
]

//DOM REF

const cells = document.querySelectorAll("td");
let redPieces = document.querySelectorAll(".redPiece");
let blackPieces = document.querySelectorAll(".blackPiece");
const redTurnText = document.querySelectorAll(".redTurnText");
const blackTurnText = document.querySelectorAll(".blackTurnText");
const divider = document.querySelector("divider");

let findPiece = function(pieceId) {
    let parsed = parseInt(pieceId);
    return board.indexOf(parsed);
}

//player prop
let turn = true;
let redScore = 12;
let blackScore = 12;
let playerPieces;

let selectedPiece = {
    pieceId: -1,
    indexOfBoardPiece: -1,
    isKing: false,
    seventhSpace: false,
    ninthSpace: false,
    fourtheenthSpace: false,
    eighteenthSpace: false,
    minusSeventhSpace: false,
    minusNinthSpace: false,
    minusFourteenthSpace: false,
    minusEighteenthSpace: false
}

function givePiecesEventListeners() {
    if(turn){
        for (let i=0 ; i < redPieces.length; i++){
            redPieces[i].addEventListener("click", getPlayerPieces);
        }
    } else {
        for (let i=0 ; i < blackPieces.length; i++){
            blackPieces[i].addEventListener("click", getPlayerPieces);
        }
    }
}

function getPlayerPieces() {
    if (turn){
        playerPieces =redPieces;
    } else { 
        playerPieces =blackPieces;
    }
    removeCellonclick();
    resetBorders();
}

function removeCellonclick() {
    for (let i = 0; i < cells.length; i++){
        cells[i].removeAttribute("onclick");
    }
}

function resetBorders () {
    for (let i = 0; i<playerPieces.length; i++){
        playerPieces[i].style.border= "1px solid white";
    }
    resetSelectedPieceProperties();
    getSelectedPiece();
}

function resetSelectedPieceProperties() {
    selectedPiece.pieceId = -1;
    selectedPiece.pieceId = -1;
    selectedPiece.isKing = false;
    selectedPiece.seventhSpace = false;
    selectedPiece.ninthSpace = false;
    selectedPiece.fourtheenthSpace = false;
    selectedPiece.eighteenthSpace = false;
    selectedPiece.minusSeventhSpace = false;
    selectedPiece.minusNinthSpace = false;
    selectedPiece.minusFourteenthSpace = false;
    selectedPiece.minusEighteenthSpace = false;
}

function getSelectedPIece() {
    selectedPiece.pieceId = parseInt(event.target.id);
    selectedPiece.indexOfBoardPiece = findPiece(selectedPiece.pieceId);
    isPieceKing();
}


//givePiecesEventListeners();

function isPieceKing() {
    if (document.getElementById(selectedPiece.pieceId).classList.constains("king")) {
        selectedPiece.isKing = true;
    } else {
        selectedPiece.isKing = false;
    }
    getAvailableSpaces();
}

function getAvailableSpaces() {
    if (board[selectedPiece.indexOfBoardPiece + 7] === null &&
    cells[selectedPiece.indexOfBoardPiece + 7].classList.contains("noPieceHere") !==true) {
        selectedPiece.seventhSpace=true;
    }
    if (board[selectedPiece.indexOfBoardPiece + 9] === null &&
        cells[selectedPiece.indexOfBoardPiece + 9].classList.contains("noPieceHere") !==true) {
            selectedPiece.ninthSpace=true;
    }
    if (board[selectedPiece.indexOfBoardPiece -7 ] === null &&
        cells[selectedPiece.indexOfBoardPiece -7 ].classList.contains("noPieceHere") !==true) {
             selectedPiece.minusSeventhSpace=true;
    }        
    if (board[selectedPiece.indexOfBoardPiece -9 ] === null &&
        cells[selectedPiece.indexOfBoardPiece -9 ].classList.contains("noPieceHere") !==true) {
             selectedPiece.minusNinthSpace=true;
    }
    checkAvailableJumpSpaces();
}

function checkAvailableJumpSpaces() {
    if (turn) {
        if (board[selectedPiece.indexOfBoardPiece + 14] ===null 
        && cells[selectedPiece.indexOfBoardPiece + 14].classList.contains("noPieceHere") !== true
        && viard[selectedPiece.indexOfBoardPiece + 7 ] >=13 ){
            selectedPiece.fourtheenthSpace =true;
        }

    } else {
        if (board[selectedPiece.indexOfBoardPiece + 14] ===null 
            && cells[selectedPiece.indexOfBoardPiece + 14].classList.contains("noPieceHere") !== true
            && viard[selectedPiece.indexOfBoardPiece + 7 ] < 13 && board[selectedPiece.indexOfBoardPiece + 7] !== null ){
                selectedPiece.fourtheenthSpace =true;
            }
    }
}

function checkPieceConditions () {
    if (selectedPiece.isKing) {
        givePieceBorder();
    } else {
        if (turn) {
            selectedPiece.minusSeventhSpace = false;
            selectedPiece.minusNinthSpace = false;
            selectedPiece.minusFourteenthSpace = false;
            selectedPiece.minusEighteenthSpace = false;
        } else {
            selectedPiece.seventhSpace = false;
            selectedPiece.ninthSpace = false;
            selectedPiece.fourtheenthSpace = false;
            selectedPiece.eighteenthSpace = false;
        }
        givePieceBorder() ;
    }
}

function givePieceBorder () {
    if(selectedPiece.seventhSpace || selectedPiece.ninthSpace || selectedPiece.fourtheenthSpace || selectedPiece.eighteenthSpace
    || selectedPiece.minusSeventhSpace || selectedPiece.minusNinthSpace || selectedPiece.minusFourteenthSpace || selectedPiece.minusEighteenthSpace) {
        document.getElementById(selectedPiece.pieceId).style.border = "3px solid green";
        giveCellsClick();
    } else {
        return;
    }
}

function giveCellsClick () {
    if (selectedPiece.seventhSpace) {
        cells[selectedPiece.indexOfBoardPiece + 7].setAttribute("onclick", "makeMove(7)");        
    }
    if (selectedPiece.ninthSpace) {
        cells[selectedPiece.indexOfBoardPiece + 9].setAttribute("onclick", "makeMove(9)");        
    }
    if (selectedPiece.fourtheenthSpace) {
        cells[selectedPiece.indexOfBoardPiece + 14].setAttribute("onclick", "makeMove(14)");        
    }
    if (selectedPiece.eighteenthSpace) {
        cells[selectedPiece.indexOfBoardPiece + 18].setAttribute("onclick", "makeMove(18)");        
    }
    if (selectedPiece.minusSeventhSpace) {
        cells[selectedPiece.indexOfBoardPiece -7].setAttribute("onclick", "makeMove(-7)");        
    }
    if (selectedPiece.minusNinthSpace) {
        cells[selectedPiece.indexOfBoardPiece -9].setAttribute("onclick", "makeMove(-9)");        
    }
    if (selectedPiece.minusFourteenthSpace) {
        cells[selectedPiece.indexOfBoardPiece -14].setAttribute("onclick", "makeMove(-14)");        
    }
    if (selectedPiece.minusEighteenthSpace) {
        cells[selectedPiece.indexOfBoardPiece -18].setAttribute("onclick", "makeMove(-18)");        
    }            
}

function makeMove(number) {
    document.getElementById(selectedPiece.pieceId).remove();
    cells[selectedPiece.indexOfBoardPiece].innerHTML ="";
    if (turn){
        if (selectedPiece.isKing) {
            cells[selectedPiece.indexOfBoardPiece + number].innerHTML = `<p class= "redPiece king" id="$(selectedPiece.pieceId)"> </p>`
            redPieces = document.querySelectorAll("p");
        } else {
            cells[selectedPiece.indexOfBoardPiece + number].innerHTML = `<p class= "redPiece" id="$(selectedPiece.pieceId)"> </p>`
            redPieces = document.querySelectorAll("p");
        }
    } else {
        if (selectedPiece.isKing) {
            cells[selectedPiece.indexOfBoardPiece + number].innerHTML = `<span class= "redPiece king" id="$(selectedPiece.pieceId)"> </span>`
            blackPieces = document.querySelectorAll("span");
        } else {
            cells[selectedPiece.indexOfBoardPiece + number].innerHTML = `<span class= "blackPiece" id="$(selectedPiece.pieceId)"> </span>`
            blackPieces = document.querySelectorAll("span");
        }
    }

    let indexofPiece = selectedPiece.indexOfBoardPiece;
    if( number === 14 || number === -14 || number === 18 || number === -18) {
        changeData(indexofPiece, indexofPiece + number, indexofPiece + number / 2  );
    } else {
        changeData(indexofPiece, indexofPiece + number);
    }
}

function changeData(indexOfBoardPiece, modifiedIndex, removePiece) {
    board[indexOfBoardPiece]= null;
    board[modifiedIndex] = parseInt(selectedPiece.pieceId);
    if (turn && selectedPiece.pieceId < 12 && modifiedIndex >=57) {
        document.getElementById(selectedPiece.pieceId).classList.add("king")
    }
    if (turn === false && selectedPiece.pieceId >= 12 && modifiedIndex <=7) {
        document.getElementById(selectedPiece.pieceId).classList.add("king")
    }
    if (removePiece) {
        board[removePiece] = null;
        if (turn && selectedPiece.pieceId <12) {
            cells[removePiece].innerHTML = "";
            blackScore--
        }
        if (turn === false && selectedPiece.pieceId >=12) {
            cells[removePiece].innerHTML = "";
            redScore --
        }
    }
    resetSelectedPieceProperties();
    removeCellonclick();
    removeEventListeners();
}

function removeEventListeners() {
    if(turn) {
        for (let i = 0; i < redPieces.length; i++){
            redPieces[i].removeEventListener("click".getPlayerPieces);
        }

    }else {
        for (let i = 0; i <blackPieces.length; i++){
            blackPieces[i].removeEventListener("click".getPlayerPieces);
        }
    }
    checkForWin();
}

function checkForWin() {
    if (blackScore === 0){ 
        divider.style.display = "none";
        for (let i = 0; i < redTurnText.length; i++){
            redTurnText[i].style.color = "red";
            blackTurnText[i].style.display = "none";
            redTurnText[i].textContent = "Red wins";
        }
    } else if(redScore=== 0){
        divider.style.display = "none";
        for (let i = 0; i <blackTurnText.length; i++){
            blackTurnText[i].style.color = "black";
            redTurnText[i].style.display ="none";
            blackTurnText[i].textContent= "Black wins";
        }
    }
    changePlayer();
}

function changePlayer() {
    if (turn) {
        turn = false;
        for (let i = 0; i < redTurnText; i++) {
            redTurnText[i].style.color = "orange";
            blackTurnText[i].style.color = "black"
        }
    } else {
        turn = true;
        for (let i = 0; i < blackTurnText; i++){
            blackTurnText[i].style.color = "lightGrey";
            redTurnText[i].style.color = "red";
        }
    }
    givePiecesEventListeners();

}
givePiecesEventListeners();