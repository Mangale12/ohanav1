<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canvas Animation</title>
</head>
<body>
    <h1>canvas animation</h1>
    <canvas></canvas>
</body>
<script>
    const canvas = document.querySelector('canvas');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    const body = document.querySelector('body');
    body.style.margin = 0;
    const c = canvas.getContext('2d')
    c.beginPath();
    c.arc(200, 200, 30, 0, Math.PI * 2, false );
    c.strokeStyle = "pink";
    c.stroke();
    const animate = () => {
    requestAnimationFrame(animate)
}
animate()
</script>
</html>
