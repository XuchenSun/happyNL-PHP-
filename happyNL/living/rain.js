var    canvas = document.getElementById( 'rain1' );
var    ctx = canvas.getContext( '2d' );
var    canvas2 = document.getElementById( 'rain2' );
var    ctx2 = canvas2.getContext( '2d' );
var    rainwidth = window.innerWidth;
var    rainheight = window.innerHeight;
var    array_char = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];

var    fallingCharArr = [];
var    fontSize = 12;
var    maxColums = rainwidth/(fontSize);
canvas.width = canvas2.width = rainwidth;
canvas.height = canvas2.height = rainheight;


function randomInt( min, max ) {
    return Math.floor(Math.random() * ( max - min ) + min);
}

function randomFloat( min, max ) {
    return Math.random() * ( max - min ) + min;
}

function Point(x,y)
{
    this.x = x;
    this.y = y;
}

Point.prototype.draw = function(ctx){

    this.value = array_char[randomInt(0,array_char.length-1)].toUpperCase();
    this.speed = randomFloat(1,12);


    ctx2.fillStyle = "rgba(255,255,255,9)";
    ctx2.font = fontSize+"px san-serif";
    ctx2.fillText(this.value,this.x,this.y);

    ctx.fillStyle = "#1F1";

    ctx.font = fontSize+"px san-serif";
    ctx.fillText(this.value,this.x,this.y);



    this.y += this.speed;
    if(this.y > rainheight)
    {
        this.y = randomFloat(-80,0);
        this.speed = randomFloat(2,7);
    }
}

for(var i = 0; i < maxColums ; i++) {
    fallingCharArr.push(new Point(i*fontSize,randomFloat(-485,0)));
}


var update = function()
{

    ctx.fillStyle = "rgba(0,0,0,0.04)";
    ctx.fillRect(0,0,rainwidth,rainheight);

    ctx2.clearRect(0,0,rainwidth,rainheight);

    var i = fallingCharArr.length;

    while (i--) {
        fallingCharArr[i].draw(ctx);

    }

    requestAnimationFrame(update);
}

update();