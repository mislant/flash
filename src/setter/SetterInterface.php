<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */


declare(strict_types=1);

namespace Mislant\Flash\Setter;

/**
 * Flash setter interface
 *
 * Provides methods to save flash messages
 *
 * @package Mislant\Flash\Setter
 */
interface SetterInterface
{
    /**
     * Sets flash message in storage
     *
     * @param string $key
     * @param string|string[] $message
     *
     * @return bool
     */
    public function set(string $key, $message): bool;
}