<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalPostRelationsListeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalPostRelationsListeType extends AbstractStructBase
{
    /**
     * The JournalPost
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType[]
     */
    protected array $JournalPost;
    /**
     * Constructor method for JournalPostRelationsListeType
     * @uses JournalPostRelationsListeType::setJournalPost()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType[] $journalPost
     */
    public function __construct(array $journalPost)
    {
        $this
            ->setJournalPost($journalPost);
    }
    /**
     * Get JournalPost value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType[]
     */
    public function getJournalPost(): array
    {
        return $this->JournalPost;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJournalPost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalPost method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalPostForArrayConstraintFromSetJournalPost(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $journalPostRelationsListeTypeJournalPostItem) {
            // validation for constraint: itemType
            if (!$journalPostRelationsListeTypeJournalPostItem instanceof \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType) {
                $invalidValues[] = is_object($journalPostRelationsListeTypeJournalPostItem) ? get_class($journalPostRelationsListeTypeJournalPostItem) : sprintf('%s(%s)', gettype($journalPostRelationsListeTypeJournalPostItem), var_export($journalPostRelationsListeTypeJournalPostItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JournalPost property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JournalPost value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType[] $journalPost
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType
     */
    public function setJournalPost(array $journalPost): self
    {
        // validation for constraint: array
        if ('' !== ($journalPostArrayErrorMessage = self::validateJournalPostForArrayConstraintFromSetJournalPost($journalPost))) {
            throw new InvalidArgumentException($journalPostArrayErrorMessage, __LINE__);
        }
        $this->JournalPost = $journalPost;
        
        return $this;
    }
    /**
     * Add item to JournalPost value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType $item
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostRelationsListeType
     */
    public function addToJournalPost(\ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType) {
            throw new InvalidArgumentException(sprintf('The JournalPost property can only contain items of type \ItkDev\Serviceplatformen\SF2900\StructType\JournalPostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JournalPost[] = $item;
        
        return $this;
    }
}
