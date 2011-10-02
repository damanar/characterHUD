<?php
  $char = $_GET['char'];
  $char = 'char_data/' . $char . '.xml';

  $xml = simplexml_load_file($char);

  echo '<script type="text/javascript">';
  echo "var c = {\n";
    foreach( $xml->children()  as $child ) {
      printOut( $child );
    }
  echo "};\n";
  echo '</script>';
  
  function printOut( $var ) {
    if( $var->children() ){
      echo "'" . $var->getName() . "': {\n";
      foreach( $var->children()  as $child ) {
        printOut($child);
      }
      echo "},\n";
    }
    else {
      echo "'" . $var->getName() . "': '" . $var . "',\n";
    }
  }
?>
