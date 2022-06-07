<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="jquery.js"></script>
</head>
<body>
<body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="log-in.php">Log in</a></li>
                    <li><a href="feedback.php">Feedback</a></li>

                </ul>
            </nav>
            <h1 class="band-name band-name-large">backpacks</h1>
            <div class="container">
            </header>
<!-- css code -->
<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #ecf0f1;
  }
  
  a.close {
    z-index: 10;
    color: rgb(255, 73, 73);
    position: absolute;
    top: 0px;
    right: 0px;
    font-weight: 600;
    padding: 20px;
    display: inline-block;
    -moz-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    -webkit-transition: color 0.3s ease;
    transition: color 0.3s ease;
  }
  
  a.close:hover { color: rgb(255, 73, 73); }
  
  .heading {
    text-align: center;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 90%;
    height: 100px;
  }
  
  .heading h1 {
    color: rgb(255, 73, 73);
    font-size: 60px;
    font-weight: 600;
    margin-bottom: 25px;
    letter-spacing: .05em;
    text-shadow: 1px 1px 0 rgb(255, 73, 73), 2px 2px 0 rgb(255, 73, 73), 3px 3px 0 #f1c40f;
  }
  
  .heading p {
    font-size: 24px;
    font-weight: 300;
  }
  
  .heading p span { color: #e74c3c; }
  
  button {
    background-color: rgb(255, 73, 73);
    color: #fff;
    border: none;
    padding: 10px 30px;
    cursor: pointer;
    font-weight: 300;
    font-size: 16px;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    -webkit-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;
  }
  
  button:active, button:focus { outline: none; }
  
  button#feedback {
    position: fixed;
    bottom: 0;
    right: 0;
    display: inline-block;
    -moz-border-radius: 4px 0 0 0;
    -webkit-border-radius: 4px;
    border-radius: 4px 0 0 0;
  }
  
  button:hover { background-color: #e74c3c; }
  
  .feedback-box {
    z-index: 10;
    position: fixed;
    bottom: 0;
    right: 0;
    display: inline-block;
    width: 500px;
    -moz-perspective: 1000;
    -webkit-perspective: 1000;
    perspective: 1000;
    pointer-events: none;
  }
  
  .feedback-box .content {
    height: 335px;
   filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    background: white;
    border: 1px solid #ddd;
    border-right: none;
    border-bottom: none;
    -moz-transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -moz-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
    -moz-transform: rotateY(-180deg);
    -webkit-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -moz-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    -o-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    -webkit-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
  }
  
  .feedback-box .confirm {
    z-index: 2;
    color: #fff;
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: #ff6f0f;
    -moz-transform: scale(0, 0);
    -ms-transform: scale(0, 0);
    -webkit-transform: scale(0, 0);
    transform: scale(0, 0);
   filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    border-radius: 20px;
    -moz-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    -o-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    -webkit-transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
    transition: all 0.4s cubic-bezier(0.685, -0.245, 0.19, 1.315);
  }
  
  .feedback-box .confirm h1 {
    text-align: center;
    font-weight: 600;
    Text-transform: uppercase;
    font-size: 70px;
    margin-top: 115px;
    letter-spacing: -.08em;
    line-height: 1.2;
  }
  
  .feedback-box .confirm h1 i { vertical-align: 3px; }
  
  .feedback-box .confirm h1 span {
    display: block;
    font-size: 40%;
    font-weight: 300;
    text-transform: none;
    letter-spacing: .02em;
  }
  
  .feedback-box.show { pointer-events: auto; }
  
  .feedback-box.show .content {
    -moz-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
   filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
  }
  
  .feedback-box.show-confirm .confirm {
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
   filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
  }
  
  .feedback-box.error textarea { border-color: red; }
  
  .feedback-box header {
    z-index: 10;
    background-color: #F7F7F7;
    color: rgb(255, 73, 73);
    font-weight: 400;
    font-size: 18px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }
  
  .feedback-box section {
    padding: 30px;
    overflow: hidden;
    -moz-transition: all ease;
    -o-transition: all ease;
    -webkit-transition: all ease;
    transition: all ease;
  }
  
  .feedback-box section textarea {
    z-index: 0;
    width: 100%;
    margin-bottom: 20px;
    padding: 10px;
    font-size: 16px;
    line-height: 1.5;
    resize: none;
    color: #333;
    border: 1px solid #ddd;
    height: 150px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
  
  .feedback-box section textarea:focus {
    outline: none;
    border: 1px solid rgb(73, 73, 73);
  }
  
  .feedback-box section button {
    display: block;
    padding: 15px;
    text-align: center;
    width: 100%;
  }
</style>
<!---->

</head>
<body>
<div class="heading">
  <h1>Welcome to backpacks Feedback </h1>
  <p>Click the 'Feedback' button to toggle the feedback form.</p>
</div>
<div class="feedback-box">
  <div class="content"> <a class='close' href="#"><i class="fa fa-times"></i></a>
    <div class="confirm">
      <h1><i class="fa fa-thumbs-up"></i> <strong>BOOOM!</strong> <span>Thank you for your feedback</span></h1>
    </div>
    <header><i class="fa fa-bullhorn"></i> What can we Improve here for you!</header>
    <section>
      <textarea name="feedback"></textarea>
      <button id='submit'>Send Feedback</button>
    </section>
  </div>
</div>
<button id="feedback"><i class="fa fa-bullhorn"></i> Feedback</button>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 


<!--jQuery code-->
<script>
(function($){
  var words = ["Great!" , "Brilliant!", "Marvelous!" , "have nice day!", "Awesome!" , "All Good!" , "Right on!"];
  var feedback = $(".feedback-box");
  
  //Feedback Toggle
	$("#feedback").on("click" , function(){
		feedback.addClass("show");
	});
  
  //Close Trigger
	$(".close").on("click" , function(){
    feedback.removeClass("show");
    setTimeout(function(){ 
      feedback.removeClass("show-confirm").find("textarea").val('');
      console.log("reset")
    }, 1000);
	});

//Submit
  $("#submit").on("click" , function(){
     if( !$("textarea").val() ) {
       feedback.addClass("error");
       setTimeout(function(){
         feedback.removeClass("error");
       }, 500)
    }else{
      feedback.addClass("show-confirm");
      var randomWord = words[Math.floor(Math.random() * words.length)];
      $(".feedback-box h1 strong").text(randomWord);
      
      setTimeout(function(){
         feedback.removeClass("show").find("textarea").val('').delay(1000);
      },2000);
      
       setTimeout(function(){
         feedback.removeClass("show-confirm");
      },2200);
    }
  })
})(jQuery);
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>