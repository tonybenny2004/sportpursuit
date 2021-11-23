<?php

/**
 * Csvread
 *
 * (c) Tony Benny <tonybenny2004@gmail.com>
 *
 */

declare(strict_types=1);
namespace Codetest;
use League\Csv\Reader;

class Csvread
{
    public function getRecords()
    {
    $reader = Reader::createFromPath('storage/data.csv', 'r');
    return  $records = $reader->getRecords();
    }
}