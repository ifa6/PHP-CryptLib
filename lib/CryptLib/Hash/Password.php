<?php
/**
 * The core password hash interface
 *
 * All pasword implementations must implement this interface
 *
 * PHP version 5.3
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPCryptLib
 * @package    Hash
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @license    http://www.gnu.org/licenses/lgpl-2.1.html LGPL v 2.1
 */

namespace CryptLib\Hash;

/**
 * The core password key interface
 *
 * All pasword implementations must implement this interface
 *
 * @see        http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 * @category   PHPCryptLib
 * @package    Hash
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
interface Password {

    /**
     * Determine if the hash was made with this method
     * 
     * @param string $hash The hashed data to check
     * 
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash);

    /**
     * Load an instance of the class based upon the supplied hash
     *
     * @param string $hash The hash to load from
     *
     * @return Password the created instance
     */
    public static function loadFromHash($hash);

    /**
     * Create a password hash for a given plain text password
     *
     * @param string $password The password to hash
     *
     * @return string The formatted password hash
     */
    public function create($password);

    /**
     * Verify a password hash against a given plain text password
     *
     * @param string $hash     The supplied ahsh to validate
     * @param string $password The password to hash
     *
     * @return boolean Does the password validate against the hash
     */
    public function verify($hash, $password);

} 
