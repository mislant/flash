<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

/**
 * List of available flash messages
 *
 * @method static Flashes SUCCESS()
 * @method static Flashes ERROR()
 * @method static Flashes WARNING()
 * @method static Flashes INFO()
 * @method static Flashes NOTICE()
 *
 * @package Mislant\Flash
 */
final class Flashes extends \MyCLabs\Enum\Enum
{
    private const SUCCESS = 'success';
    private const ERROR = 'danger';
    private const WARNING = 'warning';
    private const INFO = 'info';
    private const NOTICE = 'notice';
}