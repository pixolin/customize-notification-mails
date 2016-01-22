<?php
/*
Plugin Name: Eigene E-Mail-Benachrichtigung
Version: 0.1
Description: Ändert die E-Mail-Benachrichtigung bei Änderung des Passworts
Author: Bego Mario Garde <pixolin@gmx.com>
Author URI: https://pixolin.de
*/

/*
COPYRIGHT (c) 2016 Bego Mario Garde <pixolin@gmx.com>
Credits: User ialocin on https://goo.gl/dOZNsJ

GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

add_filter(
  'password_change_email',
  'pix_change_password_mail_message',
  10,
  3
);

function pix_change_password_mail_message(
  $pass_change_mail,
  $user,
  $userdata
) {

/*
* Der nachfolgende Text kann nach Belieben geändert werden.
* Die Platzhalter ###USERNAME###, ###EMAIL### und ###SITENAME###
* dürfen NICHT geändert werden!
*/

  $new_message_txt = __( 'Hier den ###USERNAME### dann ganz viel Text und die  ###EMAIL### dann noch mehr Text und ###SITENAME###' );
  $pass_change_mail[ 'message' ] = $new_message_txt;
  return $pass_change_mail;
}
