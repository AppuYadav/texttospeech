
<!DOCTYPE HTML>

<html>
  <head>

      <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>

     </head>
  <body>

  <audio loop="false" width="0" height="0" id="sound" src="http://responsivevoice.org/wp-content/uploads/2015/06/Peppy-The-Firing-Squad_YMXB-160.mp3" type="audio/mp3" ></audio>

<button
  class="butt js--triggerAnimation"
  onclick="responsiveVoice.speak('Hello, Brother! Aankh lada ke tune maara Ghayal ho gaya dil bechara Suna hai tere chaahne waale Aage 10 hain piche 12 Mujhko apna chaand bana le Chamka de qismat ka taara Arey ek baar se dil nahi bharta Mud ke dekh mujhe dobara Tan tana tan tan tan tara Tan tana tan tan tan tara Chalti hai kya 9 se 12 1 2 3 4.. Arey tan tana tan tan tan tara Tan tana tan tan tan tara Chalti hai kya 9 se 12 Suna hai tere chahne waale Aage 10 hain piche 12 Arey khadi khadi kya soch rahi hai Chal ho jaayein 9-2-11 1 2 3 4.. Tan tana tan.. Tan tana tan tan tan tara Tan tana tan.. Aye.. wo… Raat ki show ki do ticketein hain Khol ke purse dikhlaun Arey chipak ke baithoon sath tere main Taxi mein le jaaun Arey samajh na mujhko aisa waisa Mere batuve mein hai paisa Tujhe khilaunga jee bhar ke Garam samosa, idli ya dosa Chal hatt tu meri hai Pepsi Cola Main tera hoon Coca Cola Tan tana tan tan tan tara Arey chalta hai kya 9 se 12 Filmi dhun pe dekh ke tujhko Seeti roz bajaaun Arey bohat dinon se soch raha tha Film main tujhe dikhaaoon Shukarvar ki shaam haseen hai Nayi nayi yeh film lagi hai Garmi ki na hogi tension Theatre hai woh air conditioned I Know! film haseen woh jaan-e-man hai Yeh filmon mein number one hai Tan tana tan tan tan taraArey chalta hai kya 9 se 12', 'UK English Male'); document.getElementById('sound').play();" type="button" value="Play">Play With Background Music</button>

  <script type="text/javascript">
    $(document).ready(function(){

 $('#gspeech').on('click', function(){

        var text = $('input[name="text"]').val();
        responsiveVoice.speak("" + text +"");
        <!--  http://responsivevoice.org/ -->
    });


});

  </script>
  </body>
</html>
