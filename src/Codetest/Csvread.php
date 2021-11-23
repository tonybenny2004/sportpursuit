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
    $filepath = __DIR__ .'/../storage/data.csv';
    $reader = Reader::createFromPath($filepath, 'r');
    return  $records = $reader->getRecords();
    }
}