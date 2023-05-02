<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationFunktion;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\AdresseFlerRelationType',
            'PartType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\PartType',
            'AktoerType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\AktoerType',
            'GyldighedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\GyldighedType',
            'OrganisationFunktionType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\OrganisationFunktionType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\EgenskabType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\FiltreretOejebliksbilledeType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationFunktion\\StructType\\RequestHeaderType',
        ];
    }
}
