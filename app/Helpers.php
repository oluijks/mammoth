<?php

/**
 * Global helper functions
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

/**
 * Generate a HTML link to an email address.
 *
 * @param  string  $email
 * @param  string  $title
 * @param  array   $attributes
 * @return string
 */
if (! function_exists('mailto')) {
    function mailto($email, $title = null, $attributes = []) {
        $email = email($email);
        $title = $title ?: $email;
        $email = obfuscate('mailto:') . $email;
        return '<a href="'.$email.'"'.attributes($attributes).'>'.entities($title).'</a>';
    }
}

/**
 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
 *
 * @param  string  $email
 * @return string
 */
if (! function_exists('email')) {
    function email($email) {
        return str_replace('@', '&#64;', obfuscate($email));
    }
}

/**
 * Build an HTML attribute string from an array.
 *
 * @param  array  $attributes
 * @return string
 */
if (! function_exists('attributes')) {
    function attributes($attributes) {
        $html = [];
        // For numeric keys we will assume that the key and the value are the same
        // as this will convert HTML attributes such as "required" to a correct
        // form like required="required" instead of using incorrect numerics.
        foreach ((array) $attributes as $key => $value)
        {
            $element = attributeElement($key, $value);
            if ( ! is_null($element)) $html[] = $element;
        }
        return count($html) > 0 ? ' '.implode(' ', $html) : '';
    }
}

/**
 * Build a single attribute element.
 *
 * @param  string  $key
 * @param  string  $value
 * @return string
 */
if (! function_exists('attributeElement')) {
    function attributeElement($key, $value) {
        if (is_numeric($key)) $key = $value;
        if (! is_null($value)) return $key.'="'.e($value).'"';
    }
}

/**
 * Obfuscate a string to prevent spam-bots from sniffing it.
 *
 * @param  string  $value
 * @return string
 */
if (! function_exists('obfuscate')) {
    function obfuscate($value) {
        $safe = '';
        foreach (str_split($value) as $letter) {
            if (ord($letter) > 128) return $letter;
            // To properly obfuscate the value, we will randomly convert each letter to
            // its entity or hexadecimal representation, keeping a bot from sniffing
            // the randomly obfuscated letters out of the string on the responses.
            switch (rand(1, 3)) {
                case 1:
                    $safe .= '&#' . ord($letter) . ';';
                    break;
                case 2:
                    $safe .= '&#x' . dechex(ord($letter)) . ';';
                    break;
                case 3:
                    $safe .= $letter;
                    break;
            }
        }
        return $safe;
    }
}

/**
 * Convert an HTML string to entities.
 *
 * @param  string  $value
 * @return string
 */
if (! function_exists('entities')) {
    function entities($value) {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}

/**
 * Returns string with newline formatting converted into HTML paragraphs.
 *
 * @author Michael Tomasello <miketomasello@gmail.com>
 * @copyright Copyright (c) 2007, Michael Tomasello
 * @license http://www.opensource.org/licenses/bsd-license.html BSD License
 *
 * @param string $string String to be formatted.
 * @param boolean $line_breaks When true, single-line line-breaks will be converted to HTML break tags.
 * @param boolean $xml When true, an XML self-closing tag will be applied to break tags (<br />).
 * @return string
 */
if (! function_exists('nl2p')) {
    function nl2p($string, $line_breaks = true, $xml = true) {
        // Remove existing HTML formatting to avoid double-wrapping things
        $string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);

        // It is conceivable that people might still want single line-breaks
        // without breaking into a new paragraph.
        if ($line_breaks == true)
            return '<p>'.preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"),
                array("</p>\n<p>", '<br'.($xml == true ? ' /' : '').'>'), trim($string)).'</p>';
        else
            return '<p>'.preg_replace("/([\n]{1,})/i", "</p>\n<p>", trim($string)).'</p>';
    }
}
