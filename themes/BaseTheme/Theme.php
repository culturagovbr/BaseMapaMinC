<?php

namespace BaseTheme;

use MapasCulturais\i;
use MapasCulturais\App;

/**
 * @method void import(string $components) Importa lista de componentes Vue. * 
 */
class Theme extends \MapasCulturais\Themes\BaseV2\Theme
{
    static function getThemeFolder()
    {
        return __DIR__;
    }

    function __construct($config = [])
    {
        $app = App::i();

        /**
         * Carrega configurações centralizadas do BaseTheme
         * Os temas filhos podem sobrescrever as configurações do BaseTheme 
         */
        $theme_config = require __DIR__ . '/config.php';
        $app->config = array_merge($app->config, $theme_config);

        parent::__construct($config);
    }

    function _init()
    {
        parent::_init();
        $app = App::i();

        /**
         * Implementação que impede a sobrecarga de dados do usuário administrativo
         * Pull Request https://github.com/culturagovbr/mapadacultura/pull/53
         * TODO: Necessário implementar interface para gestão desse metadado
         */
        $app->hook('auth.successful', function () use ($app) {
            $user = $app->user;

            $preventOverhead = (bool) ($user->metadata['preventOverhead'] ?? false);
            if (!$preventOverhead) {
                $user->getEntitiesNotifications($app);
            }

            $user->lastLoginTimestamp = new \DateTime;
            $user->save(true);
        });
    }
}
