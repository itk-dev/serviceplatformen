<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjektIndholdType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObjektIndholdType extends AbstractStructBase
{
    /**
     * The DistributionDokument
     * Meta information extracted from the WSDL
     * - choice: DistributionDokument | DistributionJournalPost | DistributionFormular
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType $DistributionDokument = null;
    /**
     * The DistributionJournalPost
     * Meta information extracted from the WSDL
     * - choice: DistributionDokument | DistributionJournalPost | DistributionFormular
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType $DistributionJournalPost = null;
    /**
     * The DistributionFormular
     * Meta information extracted from the WSDL
     * - choice: DistributionDokument | DistributionJournalPost | DistributionFormular
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType $DistributionFormular = null;
    /**
     * Constructor method for ObjektIndholdType
     * @uses ObjektIndholdType::setDistributionDokument()
     * @uses ObjektIndholdType::setDistributionJournalPost()
     * @uses ObjektIndholdType::setDistributionFormular()
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType $distributionDokument
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType $distributionJournalPost
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType $distributionFormular
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType $distributionDokument = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType $distributionJournalPost = null, ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType $distributionFormular = null)
    {
        $this
            ->setDistributionDokument($distributionDokument)
            ->setDistributionJournalPost($distributionJournalPost)
            ->setDistributionFormular($distributionFormular);
    }
    /**
     * Get DistributionDokument value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType|null
     */
    public function getDistributionDokument(): ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType
    {
        return $this->DistributionDokument ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDistributionDokument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistributionDokument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistributionDokumentForChoiceConstraintFromSetDistributionDokument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DistributionJournalPost',
            'DistributionFormular',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DistributionDokument can\'t be set as the property %s is already set. Only one property must be set among these properties: DistributionDokument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistributionDokument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType $distributionDokument
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
     */
    public function setDistributionDokument(?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionDokumentType $distributionDokument = null): self
    {
        // validation for constraint: choice(DistributionDokument, DistributionJournalPost, DistributionFormular)
        if ('' !== ($distributionDokumentChoiceErrorMessage = self::validateDistributionDokumentForChoiceConstraintFromSetDistributionDokument($distributionDokument))) {
            throw new InvalidArgumentException($distributionDokumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($distributionDokument) || (is_array($distributionDokument) && empty($distributionDokument))) {
            unset($this->DistributionDokument);
        } else {
            $this->DistributionDokument = $distributionDokument;
        }
        
        return $this;
    }
    /**
     * Get DistributionJournalPost value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType|null
     */
    public function getDistributionJournalPost(): ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType
    {
        return $this->DistributionJournalPost ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDistributionJournalPost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistributionJournalPost method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistributionJournalPostForChoiceConstraintFromSetDistributionJournalPost($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DistributionDokument',
            'DistributionFormular',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DistributionJournalPost can\'t be set as the property %s is already set. Only one property must be set among these properties: DistributionJournalPost, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistributionJournalPost value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType $distributionJournalPost
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
     */
    public function setDistributionJournalPost(?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionJournalPostType $distributionJournalPost = null): self
    {
        // validation for constraint: choice(DistributionDokument, DistributionJournalPost, DistributionFormular)
        if ('' !== ($distributionJournalPostChoiceErrorMessage = self::validateDistributionJournalPostForChoiceConstraintFromSetDistributionJournalPost($distributionJournalPost))) {
            throw new InvalidArgumentException($distributionJournalPostChoiceErrorMessage, __LINE__);
        }
        if (is_null($distributionJournalPost) || (is_array($distributionJournalPost) && empty($distributionJournalPost))) {
            unset($this->DistributionJournalPost);
        } else {
            $this->DistributionJournalPost = $distributionJournalPost;
        }
        
        return $this;
    }
    /**
     * Get DistributionFormular value
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType|null
     */
    public function getDistributionFormular(): ?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType
    {
        return $this->DistributionFormular ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDistributionFormular method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistributionFormular method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistributionFormularForChoiceConstraintFromSetDistributionFormular($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DistributionDokument',
            'DistributionJournalPost',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DistributionFormular can\'t be set as the property %s is already set. Only one property must be set among these properties: DistributionFormular, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistributionFormular value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType $distributionFormular
     * @return \ItkDev\Serviceplatformen\SF2900\StructType\ObjektIndholdType
     */
    public function setDistributionFormular(?\ItkDev\Serviceplatformen\SF2900\StructType\DistributionFormularType $distributionFormular = null): self
    {
        // validation for constraint: choice(DistributionDokument, DistributionJournalPost, DistributionFormular)
        if ('' !== ($distributionFormularChoiceErrorMessage = self::validateDistributionFormularForChoiceConstraintFromSetDistributionFormular($distributionFormular))) {
            throw new InvalidArgumentException($distributionFormularChoiceErrorMessage, __LINE__);
        }
        if (is_null($distributionFormular) || (is_array($distributionFormular) && empty($distributionFormular))) {
            unset($this->DistributionFormular);
        } else {
            $this->DistributionFormular = $distributionFormular;
        }
        
        return $this;
    }
}
