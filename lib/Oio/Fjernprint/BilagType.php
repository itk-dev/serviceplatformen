<?php

namespace Oio\Fjernprint;

/**
 * Class representing BilagType
 *
 *
 * XSD Type: BilagType
 */
class BilagType
{
    /**
     * @var string $bilagNavn
     */
    private $bilagNavn = null;

    /**
     * @var string $filformatNavn
     */
    private $filformatNavn = null;

    /**
     * @var int $bilagSorteringsIndeksIdentifikator
     */
    private $bilagSorteringsIndeksIdentifikator = null;

    /**
     * @var string $bilagIdentifikator
     */
    private $bilagIdentifikator = null;

    /**
     * @var string $vedhaeftningIndholdData
     */
    private $vedhaeftningIndholdData = null;

    /**
     * @var string $vedhaeftningIndholdURLreference
     */
    private $vedhaeftningIndholdURLreference = null;

    /**
     * @var bool $vedhaeftSomIndholdDataIndikator
     */
    private $vedhaeftSomIndholdDataIndikator = null;

    /**
     * Gets as bilagNavn
     *
     * @return string
     */
    public function getBilagNavn()
    {
        return $this->bilagNavn;
    }

    /**
     * Sets a new bilagNavn
     *
     * @param string $bilagNavn
     * @return self
     */
    public function setBilagNavn($bilagNavn)
    {
        $this->bilagNavn = $bilagNavn;
        return $this;
    }

    /**
     * Gets as filformatNavn
     *
     * @return string
     */
    public function getFilformatNavn()
    {
        return $this->filformatNavn;
    }

    /**
     * Sets a new filformatNavn
     *
     * @param string $filformatNavn
     * @return self
     */
    public function setFilformatNavn($filformatNavn)
    {
        $this->filformatNavn = $filformatNavn;
        return $this;
    }

    /**
     * Gets as bilagSorteringsIndeksIdentifikator
     *
     * @return int
     */
    public function getBilagSorteringsIndeksIdentifikator()
    {
        return $this->bilagSorteringsIndeksIdentifikator;
    }

    /**
     * Sets a new bilagSorteringsIndeksIdentifikator
     *
     * @param int $bilagSorteringsIndeksIdentifikator
     * @return self
     */
    public function setBilagSorteringsIndeksIdentifikator($bilagSorteringsIndeksIdentifikator)
    {
        $this->bilagSorteringsIndeksIdentifikator = $bilagSorteringsIndeksIdentifikator;
        return $this;
    }

    /**
     * Gets as bilagIdentifikator
     *
     * @return string
     */
    public function getBilagIdentifikator()
    {
        return $this->bilagIdentifikator;
    }

    /**
     * Sets a new bilagIdentifikator
     *
     * @param string $bilagIdentifikator
     * @return self
     */
    public function setBilagIdentifikator($bilagIdentifikator)
    {
        $this->bilagIdentifikator = $bilagIdentifikator;
        return $this;
    }

    /**
     * Gets as vedhaeftningIndholdData
     *
     * @return string
     */
    public function getVedhaeftningIndholdData()
    {
        return $this->vedhaeftningIndholdData;
    }

    /**
     * Sets a new vedhaeftningIndholdData
     *
     * @param string $vedhaeftningIndholdData
     * @return self
     */
    public function setVedhaeftningIndholdData($vedhaeftningIndholdData)
    {
        $this->vedhaeftningIndholdData = $vedhaeftningIndholdData;
        return $this;
    }

    /**
     * Gets as vedhaeftningIndholdURLreference
     *
     * @return string
     */
    public function getVedhaeftningIndholdURLreference()
    {
        return $this->vedhaeftningIndholdURLreference;
    }

    /**
     * Sets a new vedhaeftningIndholdURLreference
     *
     * @param string $vedhaeftningIndholdURLreference
     * @return self
     */
    public function setVedhaeftningIndholdURLreference($vedhaeftningIndholdURLreference)
    {
        $this->vedhaeftningIndholdURLreference = $vedhaeftningIndholdURLreference;
        return $this;
    }

    /**
     * Gets as vedhaeftSomIndholdDataIndikator
     *
     * @return bool
     */
    public function getVedhaeftSomIndholdDataIndikator()
    {
        return $this->vedhaeftSomIndholdDataIndikator;
    }

    /**
     * Sets a new vedhaeftSomIndholdDataIndikator
     *
     * @param bool $vedhaeftSomIndholdDataIndikator
     * @return self
     */
    public function setVedhaeftSomIndholdDataIndikator($vedhaeftSomIndholdDataIndikator)
    {
        $this->vedhaeftSomIndholdDataIndikator = $vedhaeftSomIndholdDataIndikator;
        return $this;
    }
}

