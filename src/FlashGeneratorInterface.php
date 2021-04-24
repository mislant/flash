<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

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
    public function error(array $message): bool;

    /**
     * Information flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function info(array $message): bool;

    /**
     * Success flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function success(array $message): bool;

    /**
     * Warning flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function warning(array $message): bool;

    /**
     * Notice flash message
     *
     * @param string|string[] $message
     *
     * @return bool
     */
    public function notice(array $message): bool;
}