<?php
namespace TriggMineSDK\Events;

class EventsRepository
{
    public function GetEventUrl( $type )
    {
        $urlRepository = array(
                'CartEvent'             => '/api/events/cart',
                'OrderHistoryEvents'    => '/api/events/history',
                'CustomerHistoryEvents' => '/api/events/history/prospects',
                'LoginEvent'            => '/api/events/prospect/login',
                'LogoutEvent'           => '/api/events/prospect/logout',
                'NavigationEvent'       => '/api/events/navigation',
                'OrderEvent'            => '/api/events/order',
                'ProspectEvent'         => '/api/events/prospect/registration',
                'PluginDiagnosticEvent' => '/control/api/plugin/onDiagnosticInformationUpdated'
            );
        
        return $urlRepository[$type];
    }
}