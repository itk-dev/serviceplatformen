<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationEnhed;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\AdresseFlerRelationType',
            'PartType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\PartType',
            'AktoerType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\AktoerType',
            'GyldighedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\GyldighedType',
            'OrganisationEnhedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\OrganisationEnhedType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\EgenskabType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\FiltreretOejebliksbilledeType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationEnhed\\StructType\\RequestHeaderType',
        ];
    }
}
