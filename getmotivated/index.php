<!DOCTYPE html>
<html>
<head>
	<title>gewoon.de</title>
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
</head>
<body>
    <a href="/">terug</a>
</body>
</html>
