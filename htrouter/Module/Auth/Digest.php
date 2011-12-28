<?php

/**
 * Digest authentication is not operational yet.
 */

namespace HTRouter\Module\Auth;

class Digest extends \HTRouter\AuthModule {

    public function init(\HTRouter $router)
    {
        parent::init($router);

        $router->registerHook(\HTRouter::HOOK_CHECK_USER_ID, array($this, "authenticateDigestUser"));
    }

    public function authenticateDigestUser(\HTRouter\Request $request) {
        // Not yet available
        return \HTRouter::STATUS_DECLINED;
    }

    public function getName() {
        return "Digest";
    }

    public function getAliases() {
        return array("mod_auth_digest.c", "auth_digest");
    }

}