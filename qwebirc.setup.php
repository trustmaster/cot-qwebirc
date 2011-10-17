<?PHP

/**
 * qwebIRC Plugin
 *
 * @package qwebirc
 * @version 1.1
 * @author Kilandor
 * @copyright Copyright (c) 2009-2011 Jason Booth (Kilandor)
 * @license BSD
 */

/* ====================
[BEGIN_COT_EXT]
Code=qwebirc
Name=QwebIRC PLugin
Description=Simple plugin, for placing qwebirc
Version=1.1
Date=2011-08-13
Author=Kilandor
Copyright=Kilandor
Notes=The default link uses Freenode IRC chat, but there may be others using QwebIRC, this just uses an iframe for the chat. The link is in the template and may be changed.
Auth_guests=R
Lock_guests=12345A
Auth_members=R
Lock_members=W12345A
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
channel=11:string::cotonti:Default Chat Channel (if want multiple seperate by commas)
[END_COT_EXT_CONFIG]
==================== */

if (!defined('COT_CODE')) { die('Wrong URL.'); }

?>