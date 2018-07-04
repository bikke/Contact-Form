<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Confirm Page</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  </head>

  <body>
    <?php
    // CSV ファイルを読み込み、$data配列に格納
    $handle = fopen("utf.csv", "r");
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $data[] = array( 'name'=>$row[0], 'year'=>$row[1], 'att'=>$row[2], 'gr'=>$row[3], 'mess'=>$row[4] );
    }
    fclose($handle);
    // 列方向の配列を得る
    foreach ($data as $key => $row) {
        $name[$key]   = $row['name'];
        $year[$key] = $row['year'];
        $att[$key] = $row['att'];
        $gr[$key] = $row['gr'];
        $mess[$key]  = $row['mess'];
    }
    array_multisort( $gr, SOAT_ASC, $year, SORT_ASC, $name, SORT_ASC, $att, SORT_ASC, $mess, SORT_ASC, $data);
    // array_multisort($year, SORT_ASC);
    // rsort($handle);
    echo "<table class='table'>";
    echo "<tr><th>Group</th><th>Year</th><th>Name</th><th>Attend</th><th>Comment</th> </tr>";
    for( $i=0 ; $i<count( $data ) ; $i++ ) {
      if($year[$i]=="number:2017"){
        $y[$i]=1;
      }
      else if($year[$i]=="number:2016"){
        $y[$i]=2;
      }
      else if($year[$i]=="number:2015"){
        $y[$i]=3;
      }
      else if($year[$i]=="number:2014"){
        $y[$i]=4;
      }
      else if($year[$i]=="number:2013"){
        $y[$i]=5;
      }
      else if($year[$i]=="number:2012"){
        $y[$i]=6;
      }
      else if($year[$i]=="number:2011"){
        $y[$i]=7;
      }
      else if($year[$i]=="number:2010"){
        $y[$i]=8;
      }


      if($gr[$i]==1){
        // echo "<tr style='background-color: #99cc00'>$year[$i] $name[$i] $att[$i] $mess[$i]</tr></br>\n";
        echo "<tr style='background-color: rgba(0,253,2,0.1); '><td>1</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
      else if($gr[$i]==2){
        echo "<tr style='background-color: rgba(0,253,2,0.2) '><td>2</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
      else if($gr[$i]==3){
        echo "<tr style='background-color: rgba(0,253,2,0.3); '><td>3</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
      else if($gr[$i]==4){
        echo "<tr style='background-color: rgba(0,253,2,0.4); '><td>4</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
      else if($gr[$i]==5){
        echo "<tr style='background-color: rgba(0,253,2,0.5); '><td>5</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
      else if($gr[$i]==6){
        echo "<tr style='background-color: rgba(0,253,2,0.6); '><td>6</td> <td>$y[$i]</td> <td>$name[$i]</td> <td>$att[$i]</td> <td>$mess[$i]</td></tr></br>\n";
      }
    }
    echo "</table>";
    ?>

    <p>合計<?php echo $i; ?>人。</p><br>
    <p><a href="index.php">学年別表示</a></p>
  </body>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>
