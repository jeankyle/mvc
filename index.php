<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended using it in production as it is.
 */

declare(strict_types = 1);

use Abc\Utility\Log;

Log::write('Wrong directory: ' . realpath(dirname(__FILE__, 1)) . '. Navigate to /public', 'emergency');

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
