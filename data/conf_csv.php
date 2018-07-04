<!DOCTYPE html>
<html>
  <head>
    <!-- <meta charset="shift_jis"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Confirm Page</title>
  </head>
  <body>
    <?php

    // $fp = fopen('shift_jis.csv', 'r');
    $fp = fopen('utf.csv', 'r');
    while (($data = fgetcsv($fp)) !== FALSE) {
    	echo '<p>';
    	echo $data[0],',';
    	echo $data[1],',';
    	echo $data[2],',';
      echo $data[3],',';
      echo $data[4],',';
      echo $data[5],',';
      echo $data[6],',';
      echo $data[7],',';
      echo $data[8],',';
      echo $data[9];
      // echo $data[4];
    	echo '</p>';
    }
    fclose($fp);
    ?>
  </body>
</html>
