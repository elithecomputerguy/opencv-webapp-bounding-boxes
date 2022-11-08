<canvas id="myCanvas" width="300" height="200" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.
</canvas>

<canvas id="myCanvas2" width="300" height="200" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.
</canvas>


<script>
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var img = new Image();
    img.src = "./upload/faces.jpg";
    var scale = Math.min(canvas.width / img.width, canvas.height / img.height);
    var x = (canvas.width / 2) - (img.width / 2) * scale;
    var y = (canvas.height / 2) - (img.height / 2) * scale;
    ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
    ctx.beginPath();
    ctx.rect(30, 60, 70, 100);
    ctx.stroke();

    var canvas = document.getElementById("myCanvas2");
    var ctx = canvas.getContext("2d");
    var img = new Image();
    img.src = "./upload/faces2.png";
    var scale = Math.min(canvas.width / img.width, canvas.height / img.height);
    var x = (canvas.width / 2) - (img.width / 2) * scale;
    var y = (canvas.height / 2) - (img.height / 2) * scale;
    ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
    ctx.beginPath();
    ctx.rect(5, 5, 60, 60);
    ctx.stroke();
</script>

