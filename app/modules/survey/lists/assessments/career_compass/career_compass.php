<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dereja Monitoring and Evaluation System - Career Compass</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../../style.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden;
    }
    .iframe-container {
      position: relative;
      width: 100%;
      height: 100%;
    }
    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
    .copy-button {
      cursor: pointer;
      border: none;
      background-color: #fd7e14;
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
<nav class="nav nav--active">
  <ul class="nav__list">
    <li class="nav__item">
      <a href="#" class="nav__link">
        <div class="nav__thumb color1" data-letter="t"></div>
        <p class="nav__label">Trainees Satisfaction</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="#" class="nav__link">
        <div class="nav__thumb color2" data-letter="c"></div>
        <p class="nav__label">Counsellors Satisfcation</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="#" class="nav__link">
        <div class="nav__thumb color3" data-letter="e"></div>
        <p class="nav__label">Pre Assessment</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="#" class="nav__link">
        <div class="nav__thumb color4" data-letter="o"></div>
        <p class="nav__label">Post Assessment</p>
      </a>
    </li>
  </ul>
  <div class="burger burger--close">
    <div class="burger__patty"></div>
  </div>
  <a href="/" class="logo" target="_blank">
    <img class="logo" src="./gears.svg" alt="" />
  </a>
</nav>

<div class="page">
  <section class="section section--active color1" data-letter="T">
    <article class="section__wrapper">
      <h1 class="section__title">Trainees Satisfaction</h1>
      <input type="text" id="iframe1-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=12&b=0" readonly>
      <button class="copy-button" onclick="copyToClipboard('iframe1-url')"> <i class="fa-solid fa-share-nodes"> Copy Link to Share </i></button>
      <div class="iframe-container">
        <iframe id="iframe1" src="../../../../../../backend/forms/app/form?id=12&b=0"></iframe>
      </div>
      <br><br><br>
      <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color2" data-letter="C">
    <article class="section__wrapper">
      <h1 class="section__title">Counsellors Satisfcation</h1>
      <input type="text" id="iframe2-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=13&b=0" readonly>
      <button class="copy-button" onclick="copyToClipboard('iframe2-url')"><i class="fa-solid fa-share-nodes"> Copy Link to Share </i></button>
      <div class="iframe-container">
        <iframe id="iframe1" src="../../../../../../backend/forms/app/form?id=13&b=0"></iframe>
      </div>
      <br><br><br>
      <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color3" data-letter="E">
    <article class="section__wrapper">
      <h1 class="section__title">Pre Assessment</h1>
      <input type="text" id="iframe3-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=14&b=0" readonly>
      <button class="copy-button" onclick="copyToClipboard('iframe3-url')"><i class="fa-solid fa-share-nodes"> Copy Link to Share </i></button>
      <div class="iframe-container">
        <iframe id="iframe1" src="../../../../../../backend/forms/app/form?id=14&b=0"></iframe>
      </div>
      <br><br><br>
      <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  <section class="section color4" data-letter="O">
    <article class="section__wrapper">
      <h1 class="section__title">Post Assessment</h1>
      <input type="text" id="iframe4-url" value="https://derejadev.merqconsultancy.org/backend/forms/app/form?id=15&b=0" readonly>
      <button class="copy-button" onclick="copyToClipboard('iframe4-url')"><i class="fa-solid fa-share-nodes"> Copy Link to Share </i></button>
      <div class="iframe-container">
        <iframe id="iframe1" src="../../../../../../backend/forms/app/form?id=15&b=0"></iframe>
      </div>
      <br><br><br>
      <p>Use your 'left' and 'right' arrow keys to navigate</p>
    </article>
  </section>
  </div>

<script src='../../jquery.min.js'></script>
<script src="../../script.js"></script>
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
