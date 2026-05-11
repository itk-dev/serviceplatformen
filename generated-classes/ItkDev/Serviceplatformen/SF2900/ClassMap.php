<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF2900;

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
            'CallContextType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\CallContextType',
            'AuthorityContextType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\AuthorityContextType',
            'UUID_URN' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\UUID_URN',
            'UUID_URN_Tekst' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\UUID_URN_Tekst',
            'TransportkvitteringType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\TransportkvitteringType',
            'FejlListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FejlListeType',
            'FejlType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FejlType',
            'ForretningskvitteringType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\ForretningskvitteringType',
            'anmodRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\AnmodRequestType',
            'DistributionContextType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DistributionContextType',
            'RoutingValg' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingValg',
            'RoutingKLEInfo' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingKLEInfo',
            'RoutingListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingListeType',
            'RoutingType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingType',
            'RoutingResposneListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingResposneListeType',
            'RoutingResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RoutingResponseType',
            'DistributionObjectType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DistributionObjectType',
            'ObjektIndholdType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\ObjektIndholdType',
            'DistributionDokumentType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DistributionDokumentType',
            'DokumentRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DokumentRegistreringType',
            'RelationsListe' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\RelationsListe',
            'VariantListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\VariantListeType',
            'VariantType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\VariantType',
            'VariantAttributterType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\VariantAttributterType',
            'DelAttributterType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DelAttributterType',
            'DokumentPartListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DokumentPartListeType',
            'DokumentPartType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DokumentPartType',
            'VirkningType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\VirkningType',
            'TilstandListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\TilstandListeType',
            'TilstandType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\TilstandType',
            'AttributterListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\AttributterListeType',
            'AttributterType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\AttributterType',
            'OffentlighedUndtagetType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\OffentlighedUndtagetType',
            'DistributionJournalPostType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DistributionJournalPostType',
            'JournalPostRegistreringType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalPostRegistreringType',
            'PartType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\PartType',
            'JournalPostRelationsListeType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalPostRelationsListeType',
            'JournalPostType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalPostType',
            'JournalpostEgenskaberType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalpostEgenskaberType',
            'JournalNotatEgenskaberType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalNotatEgenskaberType',
            'JournalPartType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\JournalPartType',
            'DistributionFormularType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\DistributionFormularType',
            'MeddelelseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\MeddelelseType',
            'FormularType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FormularType',
            'FormularXMLType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FormularXMLType',
            'tilgaengeligeModtagereType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\TilgaengeligeModtagereType',
            'ModtagerMedEndpointType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\ModtagerMedEndpointType',
            'FordelingsmodtagerListRequest' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsmodtagerListRequest',
            'FordelingsobjektModtagRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsobjektModtagRequestType',
            'FordelingsobjektModtagResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsobjektModtagResponseType',
            'FordelingskvitteringModtagAnvenderRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingskvitteringModtagAnvenderRequestType',
            'FordelingskvitteringModtagAnvenderResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingskvitteringModtagAnvenderResponseType',
            'FordelingsobjektAfsendRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsobjektAfsendRequestType',
            'FordelingsobjektAfsendResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsobjektAfsendResponseType',
            'FordelingskvitteringModtagRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingskvitteringModtagRequestType',
            'FordelingskvitteringModtagResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingskvitteringModtagResponseType',
            'FordelingsmodtagerListRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsmodtagerListRequestType',
            'FordelingsmodtagerListResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsmodtagerListResponseType',
            'FordelingsmodtagerValiderRequestType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsmodtagerValiderRequestType',
            'FordelingsmodtagerValiderResponseType' => '\\ItkDev\\Serviceplatformen\\SF2900\\StructType\\FordelingsmodtagerValiderResponseType',
        ];
    }
}
