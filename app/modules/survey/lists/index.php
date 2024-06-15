<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dereja Monitoring and Evaluation System - Survey and Form List</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="./style.css">
<style>
    /* Add your custom styles here if needed */
    .copy-button {
      cursor: pointer;
      border: none;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      transition-duration: 0.4s;
      border-radius: 4px;
    }
    .copy-button:hover {
      background-color: #45a049;
    }
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="nav nav--active">
  <ul class="nav__list">
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color1" data-letter="e"></div>
        <p class="nav__label">Event Participants Registration Form</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color2" data-letter="t"></div>
        <p class="nav__label">Training Participants Registration Form</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color3" data-letter="C"></div>
        <p class="nav__label">Pre-Assessment Candidates' Survey</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color4" data-letter="e"></div>
        <p class="nav__label">Pre-Assessment Employers' Feedback</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color5" data-letter="c"></div>
        <p class="nav__label">Post-Assessment Candidates' Survey</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color6" data-letter="e"></div>
        <p class="nav__label">Post-Assessment Employers' Feedback</p>
      </a>
    </li>
  </ul>
  <div class="burger burger--close">
    <div class="burger__patty"></div>
  </div>
<!--<a href="https://dereja.com" class="logo" target="_blank">-->
  
    <a href="/" class="logo" target="_blank">
   <!--<img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/ettrics-logo.svg" alt="" /> -->
    <img class="logo" src="./gears.svg" alt="" /> 
  </a>
</nav>

<div class="page">
  <section class="section section--active color1" data-letter="E">
    <article class="section__wrapper">
      <h1 class="section__title">Events</h1>
        <input type="text" id="iframe1-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=2&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe1-url')"> <i class="fa-solid fa-share-nodes"> Copy Link </i><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
        <iframe id="iframe1" src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=2&b=0" 
          style="border:0px none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br><br><br>
        <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color2" data-letter="T">
    <article class="section__wrapper">
      <h1 class="section__title">Training</h1>
              <input type="text" id="iframe2-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=3&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe2-url')"><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
            <iframe id="iframe2"src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=3&b=0" 
        style="border:0px  none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br>
        <br>
        <br>
     <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color3" data-letter="C">
    <article class="section__wrapper">
      <h1 class="section__title">Pre-Assessment Candidates' Survey</h1>
              <input type="text" id="iframe3-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=6&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe3-url')"><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
            <iframe id="iframe3"src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=6&b=0" 
        style="border:0px  none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br>
        <br>
        <br>
     <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color4" data-letter="E">
    <article class="section__wrapper">
      <h1 class="section__title">Pre-Assessment Employers' Feedback</h1>
              <input type="text" id="iframe4-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=7&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe4-url')"><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
            <iframe id="iframe4"src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=7&b=0" 
        style="border:0px  none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br>
        <br>
        <br>
     <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color5" data-letter="C">
    <article class="section__wrapper">
      <h1 class="section__title">Post-Assessment Candidates' Survey</h1>
              <input type="text" id="iframe5-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=8&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe5-url')"><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
            <iframe id="iframe5"src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=8&b=0" 
        style="border:0px  none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br>
        <br>
        <br>
     <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color6" data-letter="E">
    <article class="section__wrapper">
      <h1 class="section__title">Post-Assessment Employers' Feedback</h1>
              <input type="text" id="iframe6-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=9&b=0" readonly>
        <button class="copy-button" onclick="copyToClipboard('iframe6-url')"><i class="fa-solid fa-share-nodes"> Copy Link </i></button>
            <iframe id="iframe6"src="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=9&b=0" 
        style="border:0px  none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>
        <br>
        <br>
        <br>
     <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
</div>
<!-- partial -->
<!--<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>-->  
<script src='./jquery.min.js'></script>
<script  src="./script.js"></script>
<script>
    function copyToClipboard(inputId) {
      var copyText = document.getElementById(inputId);
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */
      document.execCommand("copy");
      alert("Copied the link: " + copyText.value);
    }
  </script>
</body>
</html>
