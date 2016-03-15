(function () { // make an anonymous function so we don't pollute the global namespace
    var canvas; // our canvas
    var ctx; // canvas context
    var ball; // our ball object
    var lSPoints, rSPoints;
    var defender;
    var keysDown = {}; // for keyboard handling
    var bgImage, bgReady = false; // background image
    var then; // used for game loop
    var Y_LEFT = 65,
        Y_UP = 87,
        Y_RIGHT = 68,
        Y_DOWN = 83;

    function detectConflict(circle1, circle2) {
        var dx = circle1.x - circle2.x;
        var dy = circle1.y - circle2.y;
        var distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < circle1.radius() + circle2.radius()) {
            // collision detected!
            return true;
        } else
            return false;
    }




    function init() { // prepares the canvas and initializes the game
        canvas = document.getElementById("main_canvas"); // get the canvas
        ctx = canvas.getContext('2d'); // create canvas Context

        // init points
        lSPoints = 0;
        rSPoints = 0;

        bgImage = new Image(); // background image, grass in our case
        bgImage.onload = function () { // if the image is ready...
            bgReady = true;
            ctx.drawImage(bgImage, 0, 0); // draw it
        }
        bgImage.src = "game_img/grass.png"; // the path to the background image

        // register event listeners for keyDown and keyUp
        window.addEventListener("keydown", function (e) {
            keysDown[e.keyCode] = true; // key with keyCode is pressed, so we set it to true
        }, false);
        window.addEventListener("keyup", function (e) {
            delete keysDown[e.keyCode]; // when we release the key, it is removed from the pressed keys object
        }, false);

        ball = new Ball(ctx, canvas.width / 2, canvas.height / 2); // let's put the ball in the middle of the canvas

        defender = new Defender(ctx, canvas.width / 4, canvas.height / 2);

        ball.speed = 220;
        defender.speed = 220;

        then = Date.now();
        setInterval(mainLoop, 1); // set the main game loop
    }

    // called each iteration of the game loop
    function update(modifier) {
        //console.log(keysDown);


        // clean up button down text element
        document.getElementById("buttonDown").innerHTML = "";
        // keypress handling
        if (38 in keysDown) { //up movement - W
            ball.y -= ball.speed * modifier;
            document.getElementById("buttonDown").innerHTML += " UP";
            if (detectConflict(ball, defender)) {
                ball.y += ball.speed * modifier;
            }
        }
        if (40 in keysDown) { //down movement - S
            ball.y += ball.speed * modifier;
            document.getElementById("buttonDown").innerHTML += " DOWN";
            if (detectConflict(ball, defender)) {
                ball.y -= ball.speed * modifier;
            }
        }
        if (37 in keysDown) { //left movement - A
            ball.x -= ball.speed * modifier;
            document.getElementById("buttonDown").innerHTML += " LEFT";
            if (detectConflict(ball, defender)) {
                ball.x += ball.speed * modifier;
            }
        }
        if (39 in keysDown) { //right movement - D
            ball.x += ball.speed * modifier;
            document.getElementById("buttonDown").innerHTML += " RIGHT";
            if (detectConflict(ball, defender)) {
                ball.x -= ball.speed * modifier;
            }
        }



        // defender controll---------------------------------------------
        if (Y_UP in keysDown) { //up movement - W
            defender.y -= defender.speed * modifier;
            if (detectConflict(ball, defender)) {
                defender.y += defender.speed * modifier;
            }
        }
        if (Y_DOWN in keysDown) { //down movement - S
            defender.y += defender.speed * modifier;
            if (detectConflict(ball, defender)) {
                defender.y -= defender.speed * modifier;
            }
        }
        if (Y_LEFT in keysDown) { //left movement - A
            defender.x -= defender.speed * modifier;
            if (detectConflict(ball, defender)) {
                defender.x += defender.speed * modifier;
            }
        }
        if (Y_RIGHT in keysDown) { //right movement - D
            defender.x += defender.speed * modifier;
            if (detectConflict(ball, defender)) {
                defender.x -= defender.speed * modifier;
            }
        }


        // if the ball runs out of the canvas, let's put it on the other side of it
        //console.log("X: " + ball.x + "Y: " + ball.y);
        if (ball.x + ball.size() < 0) {
            if (ball.y > 85 && ball.y < 160)
                rSPoints++;
            ball.x = canvas.width / 2;
            ball.y = canvas.height / 2;
            defender.x = canvas.width / 4;
            defender.y = canvas.height / 2;

        }
        if (ball.x > canvas.width) {
            if (ball.y > 85 && ball.y < 160)
                lSPoints++;
            ball.x = canvas.width / 2;
            ball.y = canvas.height / 2;
            defender.x = canvas.width / 4;
            defender.y = canvas.height / 2;
        }
        if (ball.y + ball.size() < 0) {
            ball.x = canvas.width / 2;
            ball.y = canvas.height / 2;
            defender.x = canvas.width / 4;
            defender.y = canvas.height / 2;

        }
        if (ball.y > canvas.height) {
            ball.x = canvas.width / 2;
            ball.y = canvas.height / 2;
            defender.x = canvas.width / 4;
            defender.y = canvas.height / 2;

        }

    }

    function draw() {
        ctx.drawImage(bgImage, 0, 0); // draws the background
        ball.draw(); // draws the ball 
        defender.draw();
        ctx.fillStyle = "rgba(255, 255, 255, 0.92)";
        ctx.font = "30px Verdana";
        ctx.fillText(lSPoints, 10, canvas.height - 10);
        ctx.fillText(rSPoints, canvas.width - 30, canvas.height - 10);

    }

    // main game loop
    function mainLoop() {
        var now = Date.now();
        var delta = now - then;

        update(delta / 1000); // update movement
        draw(); // draw the whole canvas

        then = now;
    }

    init(); // call the initialization function

})();