<?php

/**
 * Global helper functions
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

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
function nl2p($string, $line_breaks = true, $xml = true)
{
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
