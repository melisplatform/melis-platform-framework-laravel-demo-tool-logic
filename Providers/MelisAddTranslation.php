<?php

namespace MelisPlatformFrameworkLaravelDemoToolLogic\Providers;

class MelisAddTranslation
{
    /**
     * Melis Platform Frameworks gather translation files
     * and add to the zend application
     *
     * this will be use specially on the frontend translation
     * using js
     *
     * @param $locale - Default value of Melis Locale are "en_EN" and "fr_FR"
     * @return string
     */
    static function translationFile($locale)
    {
        $locale = explode('_', $locale)[0];

        /**
         * Module translation file path to be added in the melis application
         */
        $path = __DIR__ . '/../Resources/lang/'. $locale .'/messages.php';

        if (file_exists($path))
            return $path;
    }
}