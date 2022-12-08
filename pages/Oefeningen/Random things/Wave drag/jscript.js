// From Mr P Solver:  https://youtu.be/5THnWDz9G0Y
const canvas = document.getElementById("cw");
const context = canvas.getContext("2d");
let mouseY = 0;
let mouseX = 0;
let isMDragging = false;
let MODE = "DRAG_CENTER";
//let MODE = "MOVE_LEFT_END"; 


function update(i, y_t0, y_t1, c, gam, l, dx, dt) { 
    return 1 / (1 / (c*dt)**2 + gam/(2*dt))
            * (1/dx**2 * (y_t1[i+1] - 2*y_t1[i] + y_t1[i-1])
            - 1/(c*dt)**2 * (y_t0[i] - 2*y_t1[i] )
            + gam/(2*dt) * y_t0[i]
            - (l/dx**2)**2 * (y_t1[i-2] - 4*y_t1[i-1] + 6*y_t1[i] -4*y_t1[i+1] + y_t1[i+2]))
}

class String {
    constructor(N) {
        this.N = N;
        this.x = [...Array(this.N)].map((_, i) => i/this.N);
        this.y_t0 = this.x.map(xi => 0);
        
        this.y_t1 = structuredClone(this.y_t0);
        this.y_t2 = structuredClone(this.y_t0);
        this.gam = 200;
        this.l = 0.002;
        this.dx = this.x[1] - this.x[0];
        this.c = 1/100;
        this.dt = 0.2;
        console.log((this.c*this.dt/this.dx)**2);

    }
    move(draw) {
        //Boundary conditions
        this.y_t2[0] = this.y_t1[0];
        this.y_t2[1] = this.y_t1[1];
        this.y_t2[this.N-2] = this.y_t1[this.N-2];
        this.y_t2[this.N-1] = this.y_t1[this.N-1];

        //PDE
        for (let i=2; i<this.y_t1.length-2; i++){
            this.y_t2[i] = update(i, this.y_t0, this.y_t1, this.c, this.gam, this.l, this.dx, this.dt);
            drawString(this, i);
        }
        this.y_t0 = structuredClone(this.y_t1);
        this.y_t1 = structuredClone(this.y_t2);
    };
}

function drawString(s, i) {
    context.beginPath();
    context.lineWidth = 5;
    context.strokeStyle = "blue";
    let {x_cnv: x_cnv0, y_cnv: y_cnv0} = strng2cnv_coords(s.x[i-1], s.y_t2[i-2]);
    let {x_cnv: x_cnv1, y_cnv: y_cnv1} = strng2cnv_coords(s.x[i], s.y_t2[i]);
   // if (i==100) console.log(x_cnv);
    context.moveTo(x_cnv0, y_cnv0);
    context.lineTo(x_cnv1, y_cnv1);
    context.stroke();
}
function strng2cnv_coords(x_str, y_str){
    return {x_cnv: canvas.width * x_str,
            y_cnv: y_str*canvas.width + canvas.height/2}
}


function cnv2strng_coords(x_cnv, y_cnv){
    return {x_str : x_cnv / canvas.width,
            y_str : (y_cnv - canvas.height/2) / canvas.width}
}



function dragString(s ){
    let {x_str, y_str} = cnv2strng_coords(mouseX, mouseY);
    if (MODE == "MOVE_LEFT_END"){
        s.y_t1[0] = s.y_t1[1] = y_str;
    }
    else if (MODE == "DRAG_CENTER"){
        s.y_t1[Math.round(s.N*x_str)] = y_str;
    }
}
addEventListener("mousemove", (e) => {
    mouseY = e.clientY;
    mouseX = e.clientX;
}
);

addEventListener("mousedown", (e) => {
    isMDragging = true;
},
);

addEventListener("mouseup",(e) => {
    isMDragging = false;
},
);

addEventListener("resize", () => setSize());
function setSize(){
    canvas.height = innerHeight;
    canvas.width = innerWidth;
}

function anim() {
    requestAnimationFrame(anim);
    context.fillStyle = "rgba(0,0,0,1)";
    context.fillRect(0,0,canvas.width, canvas.height);
    for (let i=5; i--;){
        s.move(draw=(i==0));
        if (isMDragging) dragString(s);
    }
}

    s= new String(300);
    setSize();
anim();
