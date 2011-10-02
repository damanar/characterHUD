<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CharacterHUD - Scion</title>
		<script type="text/javascript" src="../js/jquery.js">/* for ie*/</script>
		<link type="text/css" rel="stylesheet" href="css/_styles.css" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <script type="text/javascript">
      function roll() {
        var target = $('#target').val();
        var num = $('#number').val();

        var success = 0;
        var rolls = new Array();
        var index = 0;

        for( var i =0; i < num; i++ ) {
          var rolled = Math.floor(Math.random()*10)+1;
          if( rolled >= target ) {
            success++;
          }
          if( rolled == 10 ) {
            success++;
          }
          rolls[index++] = rolled;
        }

        $('#results').html(success);

      }


    </script>
	</head>
	<body>
  <div class="content">
    <p class="header">Scion Die Roller</p>

    <form action="#">
      <div id="target_number">
        <p>Target Number</p>
        <select id="target">
          <option value="10">10</option>
          <option value="9">9</option>
          <option value="8">8</option>
          <option value="7" selected>7</option>
          <option value="6">6</option>
          <option value="5">5</option>
          <option value="4">4</option>
          <option value="3">3</option>
        </select>
      </div><!-- #target_number -->

      <div id="dice_number">
        <p>Number of Dice</p>
        <input type="text" size="3" id="number" />
      </div>

      <p><input type="button" value="Roll" onclick="roll(); return false;" /></p>
    </form>

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
