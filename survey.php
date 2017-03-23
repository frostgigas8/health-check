<?php

echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content='Sam Nolting, SLN'>

    <title>Sophity Health Check</title>
    <link rel='shortcut icon' type='image/x-icon' href='img/Sophity.png'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js' type='text/javascript'></script>
    <script src='js/smoothscroll.js' type='text/javascript'></script>
    <script src='js/main.js' type='text/javascript'></script>

    <link href='css/normalize.css' rel='stylesheet'>
    <link href='http://www.sophity.com/wp-content/themes/uncode/library/css/style-custom.css?ver=907035256' rel='stylesheet'>
    <link href='http://www.sophity.com/wp-content/themes/uncode/library/css/style.css?ver=907035256' rel='stylesheet'>
    <link href='http://www.sophity.com/wp-content/themes/uncode/library/css/uncode-icons.css?ver=907035256' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>"
?>

<?php include("header.html"); ?>

<?php
echo "
<!--  <div class='hc-header'>
    <div class='hc-header-image'>
      <img src='http://www.sophity.com/wp-content/uploads/2016/07/sophity.png'>
    </div>
  </div> ../>

  <section id='hc-results-section' class='hidden gone'>
    <div class='hc-results-wrapper'>
      <div class='card-rise'>
        <div class='hc-results-caption'>Your Score</div>
        <div class='hc-results-score'>?</div>
      </div>

      <!--<div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 1</p>
      </div>
      <div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 2</p>
      </div>
      <div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 3</p>
      </div>
      <div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 4</p>
      </div>
      <div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 5</p>
      </div>
      <div class='card-rise hc-progress-bar'>
        <div class='hc-progress'></div><p>Topic 6</p>
      </div>-->

      <div class='hc-results-actions-wrapper card-rise gone hidden'>
        <div class='hc-results-header'>
          <h2>Want More Detail?</h2>
          <p>Using your Health Check responses as a guide, Sophity will create and send you a personalized Professional Services Road Map, and contact you for a free 1-hour consultation to discuss your results.</p>
          <p>Introduce yourself below to request your Road Map.</p>
        </div>
        <form class='hc-user-info gone hidden' id='hc-user-info' action='' method='post'>
          <label for='hc-user-name' >Name</label>
          <input type='text' name='hc-user-name' placeholder='Name'>
          <label for='hc-user-title'>Job Title</label>
          <input type='text' name='hc-user-title' placeholder='Title'>
          <label for='hc-user-company'>Company</label>
          <input type='text' name='hc-user-company' placeholder='Company'>
          <label for='hc-user-phone'>Phone Number</label>
          <input type='text' name='hc-user-phone' placeholder='(123) 555-4567'>
          <div class='hc-phone-checkbox'>
            <input type='checkbox' class='hc-phone-inner' name='hc-user-contact-preference' value='checked'>
            <label class='hc-phone-inner' for='hc-user-contact-preference'>I prefer email</label>
          </div>
          <input type='button' class='clickable' value='REQUEST REPORT' id='hc-results-request'>
        </post>

      </div>
    </div>
  </section>

  <section id='hc-question-section'>
    <div class='hc-topic-header'>
      <h2>...</h2>
      <div class='hc-progress-bar card-fixed hidden gone'>
        <div class='hc-progress'></div>
        <p>1 of 45 completed (3%)</p>
      </div>
    </div>

    <div class='hc-question-group card' id='hc-question-1'>
      <div class='hc-question-link'><a name='hc-question-link-1'></a></div>
      <div class='hc-question-wrapper'>
        <div class='hc-question-number card-fixed'>01</div>
        <div class='hc-question-text'>
          ...
        </div>
      </div>
      <div class='hc-answer-wrapper'>
        <div class='hc-answer-prompt'>
          Choose an answer
        </div>
        <div class='hc-answer-key clickable'>
          <input type='radio' name='hc-answers-1' id='hc-answers-1-1' value=0>
          <label class = '' for='hc-answers-1-1'><p>STRONGLY DISAGREE</p></label>
          <input type='radio' name='hc-answers-1' id='hc-answers-1-2' value=1>
          <label class = '' for='hc-answers-1-2'><p>DISAGREE</p></label>
          <input type='radio' name='hc-answers-1' id='hc-answers-1-3' value=2>
          <label class = '' for='hc-answers-1-3'><p>NEUTRAL</p></label>
          <input type='radio' name='hc-answers-1' id='hc-answers-1-4' value=3>
          <label class = '' for='hc-answers-1-4'><p>AGREE</p></label>
          <input type='radio' name='hc-answers-1' id='hc-answers-1-5' value=4>
          <label class = '' for='hc-answers-1-5'><p>STRONGLY AGREE</p></label>
        </div>
      </div>
    </div>

    <div class='hc-button-wrapper'>
      <input type='button' class='clickable' value='Continue' id='hc-button-next'>
    </div>
  </section>
</body>

</html>

";
?>
