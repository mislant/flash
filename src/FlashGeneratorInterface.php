<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

/**
 * Flash generator interface
 *
 * Declares behavior of flash generator. Generator is used to
 * create messages for client.
 * Go to @see Flashes for available message type
 *
 * @package Mislant\Flash
 */
interface FlashGeneratorInterface
{
    /**
     * Error flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function error(array|string $message): bool;

    /**
     * Information flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function info(array|string $message): bool;

    /**
     * Success flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function success(array|string $message): bool;

    /**
     * Warning flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function warning(array|string $message): bool;

    /**
     * Notice flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function notice(array|string $message): bool;
}