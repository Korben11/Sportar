(function (window) { // pass window property to an anonymous function

    // object Defender has 3 parameters - ctx is the context of the canvas
    // x,y are the starting positions of the Defender
    function Defender(ctx, x, y) {
        this.ctx = ctx;
        this.x = x;
        this.y = y;
        this.speed = 60; // set the speed of the defender

        this.model = new Image(); // model is the image of the ball
        this.model.src = "game_img/ball_def.png"; // set the path to the image of the defender
        this.size = function () {
            return this.model.width;
        }

        this.width = function () {
            return this.model.width;
        }
        this.height = function () {
            return this.model.height;
        }
        this.radius = function () {
            return this.model.height / 2;
        }
    }

    Defender.prototype.draw = function () { // function draw draws the ball
        this.ctx.drawImage(this.model, this.x, this.y);
    }

    window.Defender = Defender; // register Ball property in the global namespace

})(window);