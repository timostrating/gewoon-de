<!DOCTYPE html>
<html>
<head>
	<title>gewoon.de</title>
    <meta name="viewport" content="width=1024">
    <script>
        speak('Een sappige dag gewenst mijn kroketje?', 'nl');

        function speak(text, lang) {
            /*Check that your browser supports test to speech*/
            if ('speechSynthesis' in window) {
                var msg = new SpeechSynthesisUtterance();
                var voices = window.speechSynthesis.getVoices();
                if (voices.length > 0) {
                    console.log("Your browser supports " + voices.length + " voices");
                    console.log(voices);
                    msg.voice = voices.filter(function(voice) { return voice.lang == lang; })[1];
                }
                msg.voiceURI = 'native';
                msg.volume = 1; // 0 to 1
                msg.rate = 0.8; // 0.1 to 10
                msg.pitch = 1; //0 to 2
                msg.text = text;
                msg.lang = lang;
                msg.onend = function(e) {
                    console.log('Finished in ' + e.elapsedTime + ' milliseconds.');
                };
                speechSynthesis.speak(msg);
            }
        }
    </script>
    <style>
    *{box-sizing: border-box; user-select: none;}

html, body{width:100%; height: 100%; user-selet: none;}

body{background: #009226; 
  font-family: Helvetica;
  overflow: hidden;}

.nose-line {
  height: 8px;
  width: 5px;
  background: #323232;
  position: absolute;
  top: 68px;
  left: 48px;
}

.mouth {
    height: 150px;
    width: 300px;
    background: black;
    border-bottom-left-radius: 280px;
    border-bottom-right-radius: 280px;
    position: absolute;
    top: 64%;
}

.wrap-center {
    display: flex;
    justify-content: center;
}

.tongue {
    height: 240px;
    width: 200px;
    background: #ff6a80e0;
    border-bottom-left-radius: 140px;
    border-bottom-right-radius: 140px;
    position: absolute;
    top: 3px;
    left: 50px;
}

.eye{
  width: 180px;
  height: 180px;
  border-radius: 100%;
  position: relative;
  overflow: hidden;
  border: 6px solid #151515;
  background: #ffffff;
  z-index: 3;
  transition: top 0.3s ease-out, left 0.3s ease-out, box-shadow 0.4s ease-out, transform 0.4s ease-out;
  
}

/* html:active .eye{
  box-shadow: 0 0 100px 0 rgba(0, 0, 0, 0.4);
} */

.iris{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0%;
  left: 0%;
  background: radial-gradient(circle at center, #ffffff 0%, #000000 12%,#000000 22%,#ffffff 70%);
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -2;
  border-radius: 100%;
  transition: background-size 0.3s; 
}

/* html:active .iris{
  background-size: 75%;
} */

.rim{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9;
  border-radius: 100%;
  box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0);
  border: 1px solid #000000;
  transition: all 0.2s;
}

/* html:active .rim{
  border: 3px solid #000000;
} */


#leftEye{
  position: absolute;
  top: 50%;
  left: 42%;
  margin: -100px 0 0 -100px;
}

/* html:active #leftEye{
  top: 50.2%;
  left: 35.2%;
  transform: rotate(5deg);
} */

#rightEye{
  position: absolute;
  top: 50%;
  left: 59%;
  margin: -100px 0 0 -100px;
}

/* html:active #rightEye{
  top: 50.2%;
  left: 64.8%;
  transform: rotate(-5deg);
} */

#normal{
  position: absolute;
  top: 80%;
  left: 53%;
  margin: -100px 0 0 -100px;
}

a {
    color: white;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>
<body id="body">
    <a href="/">terug</a>

    <div class="eye" id="leftEye">
        <div class="iris"></div>
        <div class="rim"></div>
    </div>

    <div class="eye" id="rightEye">
        <div class="iris"></div>
        <div class="rim"></div>
    </div>

    <div class="wrap-center">
        <div class ="mouth" id="mouth">
            <div class ="tongue" id="tongue"></div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function(){
            $(document).mousemove(function(e){

                    var xPos = e.pageX;
                    var yPos = e.pageY;
                    var mouseXPercent = Math.round(xPos / $(this).width() * 100);
                    var mouseYPercent = Math.round(yPos / $(this).height() * 100);

                    $('.iris').css('top',mouseYPercent - 50);
                    $('.iris').css('left',mouseXPercent - 50);

            }); 
        })
    </script>
</body>
</html>
