<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>

<!-- Remove the container if you want to extend the Footer to full width. -->

<div class="footer " style="margin: 0px;">
  <div class="bubbles">
    <!-- These `div.bubble` elements will be dynamically created with JavaScript -->
  </div>
  <div class="content d-flex justify-content-center">
    <div class="row ">
        <div class="col-sm-6">
          <b>Shortcuts</b>
          <hr>
          <a href="">Home</a>
          <a href="">FAQS</a>
          <br>
          <a href="">Games</a>
          <a href="">Contact Us </a>
          <a href="">About Us</a>
        </div>
        
    </div>
    <div class=" d-flex justify-content-center">
      <img src="websiteAsset/BrandName.png" style="max-width: 200px;">
      
      
    </div>
    
  </div>
</div>
<svg style="position:fixed; top:100vh;">
  <defs>
    <filter id="blob">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob" />
    </filter>
  </defs>
</svg>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const bubblesContainer = document.querySelector('.bubbles');

      for (let i = 0; i < 128; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'bubble';
        bubble.style.setProperty('--size', `${2 + Math.random() * 4}rem`);
        bubble.style.setProperty('--distance', `${6 + Math.random() * 4}rem`);
        bubble.style.setProperty('--position', `${-5 + Math.random() * 110}%`);
        bubble.style.setProperty('--time', `${2 + Math.random() * 2}s`);
        bubble.style.setProperty('--delay', `${-1 * (2 + Math.random() * 2)}s`);
        bubblesContainer.appendChild(bubble);
}

    </script>

</body>
</html>