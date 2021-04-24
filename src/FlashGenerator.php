<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

use Mislant\Flash\Setter\SetterInterface;

/**
 * Flash generator
 *
 * Base implementation fot [[FlashGeneratorInterface]]
 * @see FlashGeneratorInterface for more information
 * Creates messages in some storage to show alerts or send
 * another notification to user. Use [[SetterInterface]] class
 * for specific realization of setter logic
 *
 * ___________________________________________________________
 *
 * Usage example:
 * ```php
 *
 * $flash = new FlashGenerator(new SessionSetter());
 * $flash->success('Some success message');
 *
 * ```
 *
 * @method bool error(string|string[] $message)
 * @method bool info(string|string[] $message)
 * @method bool success(string|string[] $message)
 * @method bool warning(string|string[] $message)
 * @method bool notice(string|string[] $message)
 *
 * @package Mislant\Flash
 */
final class FlashGenerator implements FlashGeneratorInterface
{
    private SetterInterface $flashSetter;

    /**
     * FlashGenerator constructor.
     * @param SetterInterface $flashSetter
     */
    public function __construct(SetterInterface $flashSetter)
    {
        $this->flashSetter = $flashSetter;
    }

    /**
     * Creates flash message
     *
     * @param $name
     * @param $arguments
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function __call($name, $arguments): bool
    {
        if (!Flashes::isValid($name)) {
            throw new \Exception("$name flash is not available");
        }

        return $this->flashSetter->set($name, $arguments);
    }
}