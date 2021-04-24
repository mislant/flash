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
 * @method static SUCCESS()
 * @method static ERROR()
 * @method static WARNING()
 * @method static INFO()
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