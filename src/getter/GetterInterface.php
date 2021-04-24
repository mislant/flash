<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

namespace Mislant\Flash\Getter;

/**
 * Flash getter interface
 *
 * Provides methods to get flash messages
 *
 * @package Mislant\Flash\Setter
 */
interface GetterInterface
{
    /**
     * Gets messages
     *
     * @param string|null $key If key null gets all messages
     *
     * @return mixed
     */
    public function get(?string $key);
}