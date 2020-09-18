<?php

use App\HappyTicketFinder;

const MIN_NUMBER = 1;
const MAX_NUMBER = 999999;

require_once __DIR__ . '/../vendor/autoload.php';

$first = $_GET['first'] ?? null;
$end = $_GET['end'] ?? null;

if ($first < MIN_NUMBER || $first > MAX_NUMBER || $end < MIN_NUMBER || $end > MAX_NUMBER) {
    die('Wrong params');
}

$finder = new HappyTicketFinder();

echo $finder->getCount($first, $end);
