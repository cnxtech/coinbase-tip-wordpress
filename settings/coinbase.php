<?php

/* 

Copyright (C) 2014 Coinbase Inc.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

*/

global $wpsf_settings;

// General Settings section
$wpsf_settings[] = array(
    'section_id' => 'general',
    'section_title' => 'Coinbase Account Information',
    'section_description' => '',
    'section_order' => 5,
    'fields' => array(
        array(
            'id' => 'userinfo',
            'title' => 'Coinbase Username or UserID',
            'desc' => 'You can find this on the <a href="https://www.coinbase.com/tip">Coinbase Tip</a> page.',
            'type' => 'text',
            'std' => ''
        ),
    )
);

// Post Settings section
$wpsf_settings[] = array(
    'section_id' => 'autoembed',
    'section_title' => 'Auto Embed Settings',
    'section_description' => '',
    'section_order' => 6,
    'fields' => array(
    	array(
            'id' => 'enable',
            'title' => 'Enable Auto Embed?',
            'desc' => '',
            'type' => 'checkbox',
            'std' => 1
        ),
        array(
            'id' => 'type',
            'title' => 'Auto Embed Type',
            'desc' => "",
            'type' => 'select',
            'std' => 'bottom',
            'choices' => array (
            	'bottom' => 'Bottom of Posts',
            	'top' => 'Top of Posts',
                'top_bottom' => 'Top and Bottom of Posts',
            )
        )
    )
);

?>
