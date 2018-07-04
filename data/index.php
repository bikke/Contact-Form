<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Confirm Page</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
  </head>

  <body style="background-color:white;">
    <div class="contents">
      <div class="container">
        <div class="text-left">
          <h2>結果発表</h2>
          <h3>message</h3>
          <table class='table'>
          <?php
          // CSV ファイルを読み込み、$data配列に格納
          $handle = fopen("utf.csv", "r");
          while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // $data[] = array( 'name'=>$row[0], 'year'=>$row[1], 'att'=>$row[2], 'gr'=>$row[3], 'mess'=>$row[4] );
            $data[] = array( 'q1'=>$row[0], 'q2'=>$row[1], 'q3'=>$row[2],'q4'=>$row[3], 'q5'=>$row[4], 'q6'=>$row[5],'q7'=>$row[6], 'q8'=>$row[7], 'q9'=>$row[8], 'mes'=>$row[9]);
          }
          fclose($handle);
          // 列方向の配列を得る
          foreach ($data as $key => $row) {
            $q1[$key] = $row['q1'];
            $q2[$key] = $row['q2'];
            $q3[$key] = $row['q3'];
            $q4[$key] = $row['q4'];
            $q5[$key] = $row['q5'];
            $q6[$key] = $row['q6'];
            $q7[$key] = $row['q7'];
            $q8[$key] = $row['q8'];
            $q9[$key] = $row['q9'];

            $mes[$key] = $row['mes'];

          }
          // array_multisort($year, SORT_ASC, $name, SORT_ASC, $att, SORT_ASC, $gr, SOAT_ASC, $mess, SORT_ASC, $data);
          // echo "<table class='table'>";
          // echo "<tr><th>Year</th><th>Name</th><th>Attend</th><th>Group</th><th>Comment</th> </tr>";
          $q1_a=0;$q1_b=0;
          $q2_a=0;$q2_b=0;
          $q3_a=0;$q3_b=0;
          $q4_a=0;$q4_b=0;$q4_c=0;$q4_d=0;
          $q5_a=0;$q5_b=0;
          $q6_a=0;$q6_b=0;
          $q7_a=0;$q7_b=0;
          $q8_a=0;$q8_b=0;
          $q9_a=0;$q9_b=0;$q9_c=0;$q9_d=0;$q9_e=0;

          for( $i=0 ; $i<count( $data ) ; $i++ ) {
            if($mes[$i]!=="") {
              echo '<tr><td>',$mes[$i],'</td></tr>';
            }
            if($q1[$i]==="a") {
              $q1_a+=1;
            } else {
              $q1_b+=1;
            }
            if($q2[$i]==="a") {
              $q2_a+=1;
            } else {
              $q2_b+=1;
            }
            if($q3[$i]==="a") {
              $q3_a+=1;
            } else {
              $q3_b+=1;
            }
            if($q4[$i]==="a") {
              $q4_a+=1;
            } elseif($q4[$i]==="b") {
              $q4_b+=1;
            } elseif($q4[$i]==="c") {
              $q4_c+=1;
            } else {
              $q4_d+=1;
            }
            if($q5[$i]==="a") {
              $q5_a+=1;
            } else {
              $q5_b+=1;
            }
            if($q6[$i]==="a") {
              $q6_a+=1;
            } else {
              $q6_b+=1;
            }
            if($q7[$i]==="a") {
              $q7_a+=1;
            } else {
              $q7_b+=1;
            }
            if($q8[$i]==="a") {
              $q8_a+=1;
            } else {
              $q8_b+=1;
            }
            if($q9[$i]==="a") {
              $q9_a+=1;
            } elseif($q9[$i]==="b") {
              $q9_b+=1;
            } elseif($q9[$i]==="c") {
              $q9_c+=1;
            } elseif($q9[$i]==="d") {
              $q9_d+=1;
            } else {
              $q9_e+=1;
            }
          }
          ?>
          </table>
          <div class="row">
            <div class="text-center">
              <table class='table'>
                <tr style='background-color: #dceaf8; '><td>Q1</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q1_a,'(',sprintf('%.1f',100.0*$q1_a/$i),'%)'; ?></td> <td><?php echo $q1_b,'(',sprintf('%.1f',100.0*$q1_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q2</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q2_a,'(',sprintf('%.1f',100.0*$q2_a/$i),'%)'; ?></td> <td><?php echo $q2_b,'(',sprintf('%.1f',100.0*$q2_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q3</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q3_a,'(',sprintf('%.1f',100.0*$q3_a/$i),'%)'; ?></td> <td><?php echo $q3_b,'(',sprintf('%.1f',100.0*$q3_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q4</td><td>a</td> <td>b</td><td>c</td><td>d</td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q4_a,'(',sprintf('%.1f',100.0*$q4_a/$i),'%)'; ?></td> <td><?php echo $q4_b,'(',sprintf('%.1f',100.0*$q4_b/$i),'%)'; ?></td><td><?php echo $q4_c,'(',sprintf('%.1f',100.0*$q4_c/$i),'%)'; ?></td><td><?php echo $q4_d,'(',sprintf('%.1f',100.0*$q4_d/$i),'%)'; ?></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q5</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q5_a,'(',sprintf('%.1f',100.0*$q5_a/$i),'%)'; ?></td> <td><?php echo $q5_b,'(',sprintf('%.1f',100.0*$q5_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q6</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q6_a,'(',sprintf('%.1f',100.0*$q6_a/$i),'%)'; ?></td> <td><?php echo $q6_b,'(',sprintf('%.1f',100.0*$q6_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q7</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q7_a,'(',sprintf('%.1f',100.0*$q7_a/$i),'%)'; ?></td> <td><?php echo $q7_b,'(',sprintf('%.1f',100.0*$q7_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q8</td><td>a</td> <td>b</td><td></td><td></td><td></td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q8_a,'(',sprintf('%.1f',100.0*$q8_a/$i),'%)'; ?></td> <td><?php echo $q8_b,'(',sprintf('%.1f',100.0*$q8_b/$i),'%)'; ?></td><td></td><td></td><td></td></tr>
                <tr style='background-color: #dceaf8; '><td>Q9</td><td>a</td> <td>b</td><td>c</td><td>d</td><td>e</td></tr>
                <tr style='background-color: #f7fafd; '><td>　</td><td><?php echo $q9_a,'(',sprintf('%.1f',100.0*$q9_a/$i),'%)'; ?></td> <td><?php echo $q9_b,'(',sprintf('%.1f',100.0*$q9_b/$i),'%)'; ?></td><td><?php echo $q9_c,'(',sprintf('%.1f',100.0*$q9_c/$i),'%)'; ?></td><td><?php echo $q9_d,'(',sprintf('%.1f',100.0*$q9_d/$i),'%)'; ?></td><td><?php echo $q9_e,'(',sprintf('%.1f',100.0*$q9_e/$i),'%)'; ?></td></tr>

              </table>
              <p>合計<?php echo $i; ?>人．</p><br>
          </div>
          </div>
        </div>
      </div>

    </div>

  </body>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>
