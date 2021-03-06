<?php

namespace GoDaddy\WordPress\MWC\Common\Traits;

use GoDaddy\WordPress\MWC\Common\Helpers\ArrayHelper;
use ReflectionClass;
use ReflectionProperty;

/**
 * A trait that allows a given class/object to convert its state to an array.
 *
 * @since 1.0.0
 */
trait CanConvertToArrayTrait
{
    /** @var bool convert Private Properties to Array Output */
    protected $toArrayIncludePrivate = false;

    /** @var bool convert Protected Properties to Array Output */
    protected $toArrayIncludeProtected = true;

    /** @var bool convert Public Properties to Array Output */
    protected $toArrayIncludePublic = true;

    /**
     * Converts all class data properties to an array.
     *
     * @since 1.0.0
     *
     * @return array
     */
    public function toArray() : array
    {
        $array = [];

        foreach ((new ReflectionClass(static::class))->getProperties() as $property) {
            if ($this->toArrayShouldPropertyBeAccessible($property)) {
                $property->setAccessible(true);

                $array[$property->getName()] = $property->getValue($this);
            }
        }

        return ArrayHelper::except($array, [
            'toArrayIncludePrivate',
            'toArrayIncludeProtected',
            'toArrayIncludePublic',
        ]);
    }

    /**
     * Checks if the property is accessible for {@see toArray()} conversion.
     *
     * @since 1.0.0
     *
     * @param ReflectionProperty $property
     * @return bool
     */
    private function toArrayShouldPropertyBeAccessible(ReflectionProperty $property) : bool
    {
        if ($this->toArrayIncludePublic && $property->isPublic()) {
            return true;
        }

        if ($this->toArrayIncludeProtected && $property->isProtected()) {
            return true;
        }

        if ($this->toArrayIncludePrivate && $property->isPrivate()) {
            return true;
        }

        return false;
    }
}
