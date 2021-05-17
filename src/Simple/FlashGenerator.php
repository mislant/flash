<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash\Simple;

use Mislant\Flash\Flashes;
use Mislant\Flash\FlashGeneratorInterface;
use Mislant\Flash\SetterInterface;

/**
 * Flash generator
 *
 * Simple implementation fot [[FlashGeneratorInterface]]
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
 * @package Mislant\Flash
 */
final class FlashGenerator implements FlashGeneratorInterface
{
    private SetterInterface $flashSetter;

    /**
     * FlashGenerator constructor
     * @param SetterInterface $flashSetter
     */
    public function __construct(SetterInterface $flashSetter)
    {
        $this->flashSetter = $flashSetter;
    }

    /**
     * {@inheritdoc }
     */
    public function error(array $message): bool
    {
        return $this->set(Flashes::ERROR(), $message);
    }

    /**
     * {@inheritdoc }
     */
    public function info(array $message): bool
    {
        return $this->set(Flashes::INFO(), $message);
    }

    /**
     * {@inheritdoc }
     */
    public function success(array $message): bool
    {
        return $this->set(Flashes::SUCCESS(), $message);
    }

    /**
     * {@inheritdoc }
     */
    public function warning(array $message): bool
    {
        return $this->set(Flashes::WARNING(), $message);
    }

    /**
     * {@inheritdoc }
     */
    public function notice(array $message): bool
    {
        return $this->set(Flashes::NOTICE(), $message);
    }

    /**
     * Sets flash messages in storage
     *
     * @param Flashes $flash
     * @param array $message
     *
     * @return bool
     */
    private function set(Flashes $flash, array $message): bool
    {
        list ($message) = $message;
        return $this->flashSetter->set($flash->getValue(), $message);
    }
}