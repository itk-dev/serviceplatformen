<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem;

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
            'ImportInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ImportInputType',
            'UuidNoteInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\UuidNoteInputType',
            'OpretInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OpretInputType',
            'OpretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OpretOutputType',
            'BasicOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\BasicOutputType',
            'RetInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RetInputType',
            'LaesInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\LaesInputType',
            'ListInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ListInputType',
            'ListOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ListOutputType',
            'SoegInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegInputType',
            'SoegOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegOutputType',
            'SoegSagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegSagDokObjektType',
            'IdListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\IdListeType',
            'StandardReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\StandardReturType',
            'TidspunktType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\TidspunktType',
            'LaesFiltreretOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\LaesFiltreretOutputType',
            'SoegRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegRegistreringType',
            'SagDokObjektType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SagDokObjektType',
            'RegistreringType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RegistreringType',
            'LokalUdvidelseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\LokalUdvidelseType',
            'PersonFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\PersonFlerRelationType',
            'KlasseRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\KlasseRelationType',
            'MyndighedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\MyndighedRelationType',
            'KlasseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\KlasseFlerRelationType',
            'OrganisationEnhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationEnhedRelationType',
            'VirksomhedRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\VirksomhedRelationType',
            'OrganisationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationRelationType',
            'BrugerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\BrugerFlerRelationType',
            'OrganisationEnhedFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationEnhedFlerRelationType',
            'OrganisationFunktionFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationFunktionFlerRelationType',
            'InteressefaellesskabFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\InteressefaellesskabFlerRelationType',
            'OrganisationFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationFlerRelationType',
            'ItSystemFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ItSystemFlerRelationType',
            'SoegVirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegVirkningType',
            'SoegRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegRelationType',
            'AktoerFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AktoerFlerRelationType',
            'SagFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SagFlerRelationType',
            'AktoerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AktoerRelationType',
            'ArkivRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ArkivRelationType',
            'JournalPostFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\JournalPostFlerRelationType',
            'PartFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\PartFlerRelationType',
            'SagRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SagRelationType',
            'SoegJournalPostRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\SoegJournalPostRelationType',
            'DokumentFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\DokumentFlerRelationType',
            'ArkivFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ArkivFlerRelationType',
            'DokumentRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\DokumentRelationType',
            'FacetRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\FacetRelationType',
            'KlassifikationRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\KlassifikationRelationType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\VirkningType',
            'FlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\FlerRelationType',
            'RelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RelationType',
            'UnikIdType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\UnikIdType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OffentlighedUndtagetType',
            'NulFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\NulFlerRelationType',
            'MultipleOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\MultipleOutputType',
            'UnikReturType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\UnikReturType',
            'DynamicFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\DynamicFlerRelationType',
            'UuidLabelInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\UuidLabelInputType',
            'OpgaverFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OpgaverFlerRelationType',
            'AdresseFlerRelationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AdresseFlerRelationType',
            'PartType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\PartType',
            'AktoerType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AktoerType',
            'GyldighedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\GyldighedType',
            'OrganisationType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationType',
            'AttributListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AttributListeType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\TilstandListeType',
            'RelationListeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RelationListeType',
            'EgenskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\EgenskabType',
            'LaesOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\LaesOutputType',
            'FiltreretOejebliksbilledeType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\FiltreretOejebliksbilledeType',
            'OrganisationEnhedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationEnhedType',
            'OrganisationFunktionType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationFunktionType',
            'BrugerType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\BrugerType',
            'InteressefaellesskabType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\InteressefaellesskabType',
            'ItSystemType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ItSystemType',
            'AdresseType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AdresseType',
            'MyndighedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\MyndighedType',
            'PersonType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\PersonType',
            'VirksomhedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\VirksomhedType',
            'FremsoegObjekthierarkiInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\FremsoegObjekthierarkiInputType',
            'FremsoegObjekthierarkiOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\FremsoegObjekthierarkiOutputType',
            'ImporterOrganisationSystemInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ImporterOrganisationSystemInputType',
            'OrganisationerOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationerOutputType',
            'OrganisationEnhederOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationEnhederOutputType',
            'OrganisationFunktionerOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationFunktionerOutputType',
            'BrugereOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\BrugereOutputType',
            'InteressefaellesskaberOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\InteressefaellesskaberOutputType',
            'ItSystemerOutputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\ItSystemerOutputType',
            'OrganisationEnhederInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\OrganisationEnhederInputType',
            'AnonymiserInputType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\AnonymiserInputType',
            'RegistreringBeskedType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RegistreringBeskedType',
            'RequestHeaderType' => '\\ItkDev\\Serviceplatformen\\SF1500\\OrganisationSystem\\StructType\\RequestHeaderType',
        ];
    }
}
