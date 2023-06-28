<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';
use App\Model\User;
use Carbon\Carbon;

$tomorrow=Carbon::now()->addDay();
echo $tomorrow;

$user = new User();
