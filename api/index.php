<?php

// Fix SCRIPT_NAME for Laravel routing under Vercel serverless
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Forward request Vercel ke index public Laravel
require __DIR__ . '/../public/index.php';
