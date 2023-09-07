<?php
for ($nummer = 33; $nummer <= 543; $nummer++) { //geeft de nummers 33 tot en met 543 weer
    if ($nummer % 5 == 0 && $nummer % 9 == 0) {  //als het nummer door 5 of 9 gedeelt kan worden geef dan web waar
    } elseif ($nummer % 5 == 0) { //als het nummer gedeelt door 5 kan geef dan software waar

        if($nummer % 2 == 0){
            echo "<strong>{software}</strong> "; //als het nummer ook door 2 gedeelt kan worden dan komt er dik gedrukte tekst
        }
        else echo "software ";

    } elseif ($nummer % 9 == 0) { //als het nummer gedeelt door 9 kan geef dan developer waar
      
        if($nummer % 2 == 0){
            echo "<strong>{developer}</strong> "; //als het nummer ook door 2 gedeelt kan worden dan komt er dik gedrukte tekst
        }
        else echo "developer ";
    } elseif ($nummer % 2 == 0) { //als het nummer gedeelt door 2 kan geef dan het nummer in bolt
        echo "<strong>{$nummer}</strong> ";
    } else {
        echo "{$nummer} ";
    }
}

?>