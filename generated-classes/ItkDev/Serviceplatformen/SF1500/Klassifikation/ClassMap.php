<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\AdresseFlerRelationType',
            'KlassifikationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\KlassifikationType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\EgenskabType',
            'PubliceretStatusType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\PubliceretStatusType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\FiltreretOejebliksbilledeType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\Klassifikation\\StructType\\RequestHeaderType',
        ];
    }
}
