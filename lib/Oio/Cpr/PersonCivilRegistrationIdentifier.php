<?php

namespace Oio\Cpr;

/**
 * Class representing PersonCivilRegistrationIdentifier
 *
 * CivilRegistrationNumber (PNR)
 *  
 *  Description:
 *  Unique identification of a person
 *  
 *  The Civil Registration System contains:
 *  - Data on persons, who after 1968 April 2nd Danish registry of citizens. 
 *  As for Greenland the corresponding date is 1972 may 1st.
 *  - Danish citizens living outside Denmark (who must pay duty and ATP)
 *  has also been given a civil registration number.
 *  - Civil registration numbers are also assigned for other administrative purposes. 
 *  
 *  
 *  Value space:
 *  The civil registration number consists of two parts.
 *  The first part is the valid birthday in the form DDMMYY.
 *  The following part is a serial number of four digits.
 *  The civil registration number may also hold the value 0000000000.
 *  This value is used where the civil registration number is required but unknown.
 *  
 *  Lifecycle:
 *  The civil registration number is generated and assigned at birth, entry and change of civil registration number of for administrative reasons.
 *  The civil registration number may be assigned via hospitals.
 *  
 *  The civil registration number is not to be deleted.
 *  
 *  Remarks:
 *  1994 June 11th the civil registration number was changed according to this description.
 */
class PersonCivilRegistrationIdentifier
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}

