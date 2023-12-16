<?php
$table = array(
          array("No" => 1, "Eng" => "anyway", "Ja" => "とにかく"),
          array("No" => 2, "Eng" => "following", "Ja" => "に続いて，次の"),
          array("No" => 3, "Eng" => "refer", "Ja" => "参照する，言及する"),
          array("No" => 4, "Eng" => "available", "Ja" => "入手できる，利用できる"),
          array("No" => 5, "Eng" => "department", "Ja" => "部門，売り場"),
          array("No" => 6, "Eng" => "conference", "Ja" => "会議"),
          array("No" => 7, "Eng" => "according to", "Ja" => "～によると"),
          array("No" => 8, "Eng" => "likely", "Ja" => "おそらく，～しそうだ"),
          array("No" => 9, "Eng" => "offer", "Ja" => "申し出る，提供する"),
          array("No" => 10, "Eng" => "equipment", "Ja" => "機器，装備")
);

// JSで使える形(json)にエンコード
$encodedTable = json_encode($table);
?>