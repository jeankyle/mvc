<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended to use it in production as it is.
 */

declare(strict_types = 1);

namespace Abc\Collection;

use Closure;
use Abc\Collection\Collection;
use Abc\Collection\CollectionProxy;
use Abc\ErrorHandler\ErrorHandler;
use Abc\Utility\Log;
use Exception;

trait CollectionTrait
{
    /** @var array - support collection methods */
    protected static array $proxies = [
        'all',
        'avg',
        'sum',
        'median',
        'size',
        'flat',
        'map',
        'filter',
        'diff',
        'min',
        'max',
        'range',
        'sort',
        'unique',
        'keys',
        'values',
        'remove',
        'get',
        'has',
        'walk',
        'slice',
        'pluck',
        'add',
        'pop',
        'shift',
        'empty'
    ];

    public function __get($key) 
    {
        if (!in_array($key, self::$proxies)) {
            ErrorHandler::exceptionHandler(new Exception("Property [{$key}] does not exist on this collection instance"), CRITICAL_LOG);
            exit;
        }
        return new CollectionProxy($this, $key);
    }

    /**
     * add a method to the array of proxies
     */
    public function proxy(string $method) : void
    {
        static::$proxies[] = $method;
    }

    /**
     * Cast $items
     */
    public function arrayableItems($items): array
    {
        return (array)$items;
    }

    /**
     * Checks whether the input array is of an associative array type
     */
    public static function isAssoc(array $inputArray): bool
    {
        $keys = array_keys($inputArray);
        return array_keys($keys) !== $keys;
    }   

    /**
     * Return an instance of the collection object
     */
    public function collect(): Collection
    {
        return new Collection($this->all());
    }

    /**
     * Get the collection of items as a plain array
     */
    public function toArrays(): array
    {
        return $this->map(function($value){
            //return $value  ? $value->toArray() : $value;
        });
    }

    /**
     * Return the default value of the given value.
     */
    function value($value, ...$args)
    {
        return $value instanceof Closure ? $value(...$args) : $value;
    }


    /**
     * Return the first element in an array passing a given truth test.
     */
    public function first($array, callable $callback = null, $default = null)
    {
        if (is_null($callback)) {
            if (empty($array)) {
                return $this->value($default);
            }

            foreach ($array as $item) {
                return $item;
            }
        }

        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $value;
            }
        }

        return $this->value($default);
    }

    /**
     * Filter the array using the given callback
     */
    public function where(array $input, Callable $callback): array
    {
        return array_filter($input, $callback, ARRAY_FILTER_USE_BOTH);
    }

    public function flatten()
    {
    }

    public function flattenRecursively()
    {
    }
}
