<?php

/**
 * Make sure avatararena is not disabled.
 *
 * @param observer
 * @return bool    TRUE if the housing arena section is enabled, else FALSE.
 */
class Default_ArtArenaAdminEnabled_CircuitModel
{
   /**
    * Execute the model
    * @param Container    The Observer object.
    * @return bool        TRUE if successful, else FALSE.
    * @access public
    */
    function execute( & $observer )
    {
        if( SC::isEmpty('board_config.artarenaadmin_disable') ) return TRUE;
        $observer->set('error.code', GENERAL_MESSAGE);
        $observer->set('error.title', 'Arena Admin Disabled');
        //$observer->set('error.message', 'Testing is now over for Housing Arena. The Housing Arena has been disabled in preparation for a full release. We thank you for helping us and hope you will join us once again when Housing Arena is back up and fully running. All entries submitted during the testing phase will be deleted.');
        $observer->set('error.message', 'The Art Arena Admin panel is currently disabled. Please check back later');
        $observer->set('error.line', __LINE__);
        $observer->set('error.file', __FILE__);
        $observer->set('error.debug', backtrace() );
        return FALSE;
    }
 }
 
?>