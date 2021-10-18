<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */

use Config\Services;

// ------------------------------------------------------------------------

if (! function_exists('str_encrypt'))
{
    function str_encrypt(string $data, bool $debug = false)
    {
        try
        {
            return bin2hex(Services::encrypter()->encrypt($data));
        }
        catch (\Exception $e)
        {
            if ($debug)
            {
                die($e->getMessage());
            }
        }
    }
}

// ------------------------------------------------------------------------

if (! function_exists('str_decrypt'))
{
    function str_decrypt(string $data, bool $debug = false)
    {
        try
        {
            return Services::encrypter()->decrypt(hex2bin($data));
        }
        catch (\Exception $e)
        {
            if ($debug)
            {
                die($e->getMessage());
            }
        }
    }
}

// ------------------------------------------------------------------------
