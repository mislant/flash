<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

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
    public function get(?string $key): mixed;
}