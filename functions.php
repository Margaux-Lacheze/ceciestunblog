<?php
function count_words($text) {
    $count = 0;
    for ($i =0; $i < strlen($text); $i++) {
        $count++;
    }
    return $count;
};