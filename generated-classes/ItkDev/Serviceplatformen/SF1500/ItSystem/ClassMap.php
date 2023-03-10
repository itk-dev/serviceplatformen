<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\ItSystem;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\AdresseFlerRelationType',
            'PartType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\PartType',
            'AktoerType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\AktoerType',
            'GyldighedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\GyldighedType',
            'ItSystemType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\ItSystemType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\EgenskabType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\FiltreretOejebliksbilledeType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\ItSystem\\StructType\\RequestHeaderType',
        ];
    }
}
