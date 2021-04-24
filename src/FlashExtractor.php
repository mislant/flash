<?php
/**
 * @author Kirill K. aka Mislant
 * @license MIT
 */

declare(strict_types=1);

namespace Mislant\Flash;

use Mislant\Flash\Getter\GetterInterface;

/**
 * Flash extractor
 *
 * Base implementation for [[FlashExtractorInterface]].
 * @see FlashExtractorInterface for more information
 * Extracts flash messages from some storage.
 *
 * @method mixed all();
 * @method mixed error();
 * @method mixed info();
 * @method mixed success();
 * @method mixed warning();
 * @method mixed notice();
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
     * Creates flash message
     *
     * @param $name
     * @param $arguments
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        if ('all' === $name) {
            return $this->flashGetter->get(null);
        }

        if (Flashes::isValid($name)) {
            throw new \Exception("$name flash is not available");
        }

        return $this->flashGetter->get($name);
    }
}