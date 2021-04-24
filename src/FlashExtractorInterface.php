<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

/**
 * Flash extractor interface
 *
 * Declares flash message extractor behavior. Extractor gets flesh
 * messages from some storage. Flashes can be extracted all or be curtain type
 * Go to @see Flashes for available message type
 *
 * @package Mislant\Flash
 */
interface FlashExtractorInterface
{
    /**
     * Gets all messages
     *
     * @return mixed
     */
    public function all();

    /**
     * Gets error messages
     *
     * @return mixed
     */
    public function error();

    /**
     * Gets info messages
     *
     * @return mixed
     */
    public function info();

    /**
     * Gets success messages
     *
     * @return mixed
     */
    public function success();

    /**
     * Gets warning messages
     *
     * @return mixed
     */
    public function warning();

    /**
     * Gets notice messages
     *
     * @return mixed
     */
    public function notice();
}