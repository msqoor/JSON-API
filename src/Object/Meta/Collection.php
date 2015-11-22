<?php

namespace Json\Object\Meta;

use Json\Object\AbstractCollection;
use Json\Object\Meta;

/**
 * Class Collection
 * @package Json\Object\Meta
 */
class Collection extends AbstractCollection
{
    const COLLECTION_NAME = 'meta';

    /**
     * @param Meta $element
     * @return bool
     */
    protected function validateType($element)
    {
        return ($element instanceof Meta);
    }
}
