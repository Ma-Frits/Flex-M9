<?php
for ($nummer = 33; $nummer <= 543; $nummer++) {
    if ($nummer % 5 == 0 && $nummer % 9 == 0) {
        echo "web ";
    } elseif ($nummer % 5 == 0) {
        echo "software ";
    } elseif ($nummer % 9 == 0) {
        echo "developer ";
    } elseif ($nummer % 2 == 0) {
        echo "<strong>{$nummer}</strong> ";
    } else {
        echo "{$nummer} ";
    }
}

?>