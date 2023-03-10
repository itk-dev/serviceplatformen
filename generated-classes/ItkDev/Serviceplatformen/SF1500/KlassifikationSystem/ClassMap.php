<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\KlassifikationSystem;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\AdresseFlerRelationType',
            'KlassifikationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlassifikationType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\EgenskabType',
            'PubliceretStatusType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\PubliceretStatusType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FiltreretOejebliksbilledeType',
            'FacetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FacetType',
            'KlasseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlasseType',
            'SoegeordType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\SoegeordType',
            'FremsoegObjekthierarkiInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FremsoegObjekthierarkiInputType',
            'FremsoegObjekthierarkiOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FremsoegObjekthierarkiOutputType',
            'ImporterKlassifikationSystemInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ImporterKlassifikationSystemInputType',
            'KlassifikationerOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlassifikationerOutputType',
            'FacetterOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FacetterOutputType',
            'KlasserOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlasserOutputType',
            'FacetterInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\FacetterInputType',
            'KlasserInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\KlasserInputType',
            'ImportOutputElementType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\ImportOutputElementType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\KlassifikationSystem\\StructType\\RequestHeaderType',
        ];
    }
}
