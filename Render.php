<?php
class Render {
  public static function renderTable ($rows) {


    $table = "
      <table id='displayTable'>
      <thead>
        <tr>
           <th>Task Name</th>
           <th>The time spent</th>
           <th>Is it done</th>
           <th>Comments</th>
        </tr>
       </thead>";
    foreach($rows as $row) {


        $xleng = strlen($row['numx']);

        $time = $xleng * 30;
        $hours = $time/ 60;
        $min = $time % 60;
        $timeformat;
        if ($hours >= 1){
            $timeformat = $hours . " hours, " . $min . " mins";
        }elseif ($hours < 1){
            $timeformat = $time . " mins";
        }


        $table .= "<tr>" . "<td>" . htmlentities($row['taskname']) . "</td>" . "<td>{$timeformat}</td>";

        if ($row['done'] == "on"){
            $table .= "<td>Finished</td>";
        } else {
            $table .= $table .= "<td>Not Finished</td>";
        }
            $table .= "<td><pre>".htmlentities($row['comments'])."</rep></td></tr>";
    }
    $table .= "</table>";
    echo $table;
  }
}
