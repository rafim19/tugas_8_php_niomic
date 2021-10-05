<?php
  function ketupat() {
    $rows = 21;
    $halfRows = floor($rows/2);
    $underCounter = $halfRows;

    // Segitiga bagian atas
    for ($i = 1; $i <= $halfRows + 1; $i++) {
      if ($i == 1) { // Pada saat baris pertama
        for ($j = 1; $j <= $halfRows; $j++) {
          echo "_";
          if ($j == $underCounter) {
            echo "<br>";
          }
        }
        $underCounter--; // 10
      } else if ($i > 1 && $i < $halfRows + 1) { // Pada saat baris di tengah
        $batasLoop = $halfRows + $i - 1;
        for ($j = 1; $j <= $batasLoop; $j++) {
          if ($j > $underCounter) {
            echo "x";
          } else { // 1 < 9
            echo "_";
          }
          if ($j == $batasLoop) {
            echo "<br>";
          }
        }
        $underCounter--;
      } else { // Pada saat baris terakhir
        $batasLoop = $halfRows * 2;
        for ($j = 1; $j <= $batasLoop; $j++) {
          echo "x";
          if ($j == $batasLoop) {
            echo "<br>";
          }
        }
      }
    }

    // Segitiga bawah
    $underCounter = 1;
    for ($i = $halfRows; $i >= 1; $i--) {
      if ($i == 1) { // Pada saat baris terakhir
        for ($j = 1; $j <= $halfRows; $j++) {
          echo "_";
          if ($j == $underCounter) {
            echo "<br>";
          }
        }
        $underCounter++; // 10
      } else { // Pada saat baris di tengah
        $batasLoop = $halfRows + $i - 1;
        for ($j = 1; $j <= $batasLoop; $j++) {
          if ($j > $underCounter) {
            echo "x";
          } else { // 1 < 9
            echo "_";
          }
          if ($j == $batasLoop) {
            echo "<br>";
          }
        }
        $underCounter++;
      }
    }
  }
?>
<div style="display: flex; justify-content: space-between;">
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
</div>
<div style="display: flex; justify-content: space-between;">
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
  <div><?php ketupat() ?></div>
</div>
