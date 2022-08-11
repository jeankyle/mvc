<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended to use it in production as it is.
 */

declare(strict_types = 1);

namespace Abc\Orm\Drivers;

use PDO;

interface DatabaseDriverInterface
{
    public function open(): PDO;
    public function close();
}