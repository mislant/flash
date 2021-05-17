<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash\Simple;

use Mislant\Flash\Flashes;
use Mislant\Flash\FlashExtractorInterface;
use Mislant\Flash\GetterInterface;

/**
 * Flash extractor
 *
 * Simple implementation for [[FlashExtractorInterface]].
 * @see FlashExtractorInterface for more information
 * Extracts flash messages from some storage.
 *
 * @package Mislant\Flash
 */
final class FlashExtractor implements FlashExtractorInterface
{
    private GetterInterface $flashGetter;

    /**
     * FlashExtractor constructor.
     * @param GetterInterface $flashGetter
     */
    public function __construct(GetterInterface $flashGetter)
    {
        $this->flashGetter = $flashGetter;
    }

    /**
     * {@inheritdoc }
     */
    public function all()
    {
        return $this->get(null);
    }

    /**
     * {@inheritdoc }
     */
    public function error()
    {
        return $this->get(Flashes::ERROR());
    }

    /**
     * {@inheritdoc }
     */
    public function info()
    {
        return $this->get(Flashes::INFO());
    }

    /**
     * {@inheritdoc }
     */
    public function success()
    {
        return $this->get(Flashes::SUCCESS());
    }

    /**
     * {@inheritdoc }
     */
    public function warning()
    {
        return $this->get(Flashes::WARNING());
    }

    /**
     * {@inheritdoc }
     */
    public function notice()
    {
        return $this->get(Flashes::NOTICE());
    }

    /**
     * Gets flash messages from storage
     *
     * @param Flashes|null $flash
     *
     * @return mixed
     */
    private function get(?Flashes $flash)
    {
        return $this->flashGetter->get($flash ?? $flash->getValue());
    }

}