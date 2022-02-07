<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1600;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'InvocationContextType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\InvocationContextType',
            'AuthorityContextType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\AuthorityContextType',
            'CallContextType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\CallContextType',
            'MeddelelsesFormatObjektType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\MeddelelsesFormatObjektType',
            'DokumentParametreType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\DokumentParametreType',
            'CountryIdentificationCodeType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\CountryIdentificationCodeType',
            'KontaktOplysningType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\KontaktOplysningType',
            'ForsendelseAfsenderType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ForsendelseAfsenderType',
            'KanalUafhaengigeParametreIType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\KanalUafhaengigeParametreIType',
            'MeddelelseFESDmetadataType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\MeddelelseFESDmetadataType',
            'DigitalPostParametreType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\DigitalPostParametreType',
            'PostParametreType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PostParametreType',
            'TransaktionsParametreIType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\TransaktionsParametreIType',
            'PrintParametreType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PrintParametreType',
            'SlutbrugerIdentitetType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\SlutbrugerIdentitetType',
            'ForsendelseModtagerType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ForsendelseModtagerType',
            'BilagType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\BilagType',
            'BilagSamlingType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\BilagSamlingType',
            'ForsendelseIType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ForsendelseIType',
            'BrevSPBodyType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\BrevSPBodyType',
            'TilmeldingRequestType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\TilmeldingRequestType',
            'PrintAfsendBrevRequestType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PrintAfsendBrevRequestType',
            'PrintAfsendBrevResponseType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PrintAfsendBrevResponseType',
            'PrintSpoergTilmeldingRequestType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PrintSpoergTilmeldingRequestType',
            'PrintSpoergTilmeldingResponseType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\PrintSpoergTilmeldingResponseType',
            'FejlType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\FejlType',
            'ServiceplatformFaultType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ServiceplatformFaultType',
            'ErrorListType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ErrorListType',
            'ErrorType' => '\\ItkDev\\Serviceplatformen\\SF1600\\StructType\\ErrorType',
        ];
    }
}
