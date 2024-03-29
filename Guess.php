<?php
echo 'Please enter the minnumber'."\n";
$minnumber = fgets(STDIN);

echo 'Please enter the maxnumber'."\n";
$maxnumber = fgets(STDIN);

while ($minnumber > $maxnumber || $minnumber === $maxnumber) {
    echo 'Error : Redo' . "\n";

    echo 'Please enter the minnumber'."\n";
    $minnumber = fgets(STDIN);

    echo 'Please enter the maxnumber'."\n";
    $maxnumber = fgets(STDIN);

}

echo 'Please answer number' . "\n";
$answer = fgets(STDIN);

$limit = 3;
$current = 0;

for(;;){
    $randomnamber = random_int($minnumber,$maxnumber);

    if($randomnamber === $answer) {
        echo 'Great!' . "\n";
        break;
    } else {
        $current++;
        if($current >= $limit) {
            echo "end";
            break;
        }
        echo 'again' . "\n";
        $answer = intval(fgets(STDIN));
    }
}