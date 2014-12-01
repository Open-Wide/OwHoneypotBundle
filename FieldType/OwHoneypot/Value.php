<?php

/**
 * File containing the Selection Value class
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/Resources/Software/Licenses/eZ-Business-Use-License-Agreement-eZ-BUL-Version-2.1 eZ Business Use License Agreement eZ BUL Version 2.1
 * @version 5.2.0
 */

namespace Ow\Bundle\OwHoneypotBundle\FieldType\OwHoneypot;

use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for OWEnhancedSelection field type
 */
class Value extends BaseValue
{
    /**
     * Selected options identifiers
     *
     * @var string[]
     */
    public $identifiers;

    /**
     * Construct a new Value object and initialize it $selection
     *
     * @param string[] $identifiers
     */
    public function __construct(array $identifiers = array())
    {
        $this->identifiers = $identifiers;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return implode(",", $this->identifiers);
    }
}
