<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CharacterHUD - 40K</title>
		<script type="text/javascript" src="../js/jquery.js">/* for ie*/</script>
		<link type="text/css" rel="stylesheet" href="css/_styles.css" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <script type="text/javascript">
      function roll(size) {
        var num = $('#number').val();

        var rolls = new Array();
        var index = 0;

        if( size == 100 ) {
          var rolled = Math.floor(Math.random()*size)+1;
          $('#results').html(rolled);
        }
        else {
          for( var i =0; i < num; i++ ) {
            var rolled = Math.floor(Math.random()*size)+1;
            rolls[index++] = rolled;
          }
          $('#results').html(rolls.join());
        }


      }


    </script>
	</head>
	<body>
  <div class="content">
    <p class="header">40K Die Roller</p>

      <p><input type="button" value="d100" onclick="roll(100); return false;" /></p>

      <div id="dice_number">
        <p>Number of Dice</p>
        <input type="text" size="3" id="number" />
      </div>

      <p><input type="button" value="d10" onclick="roll(10); return false;" /></p>
      <p><input type="button" value="d5" onclick="roll(5); return false;" /></p>

    <div id="results">&nbsp;</div>

    <div class="footer_pad">&nbsp;</div>
  </div><!-- .content -->
<script type="text/javascript">
  //Google Analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19915133-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>
