<?php
if (!function_exists('_is_php_version_')) {
    /**
     * Determines if the current version of PHP is equal to or greater than the supplied value
     *
     * @param string $version
     *
     * @return    bool    TRUE if the current version is $version or higher
     */
    function _is_php_version_($version)
    {
        static $_is_php;
        $version = (string) $version;

        if (!isset($_is_php[$version])) {
            $_is_php[$version] = version_compare(PHP_VERSION, $version, '>=');
        }

        return $_is_php[$version];
    }
}
