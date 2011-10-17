<?PHP

/**
 * qwebIRC Plugin
 *
 * @package Cotonti
 * @version 1.1
 * @author Kilandor
 * @copyright Copyright (c) 2009-2011 Jason Booth (Kilandor)
 * @license BSD
 */
 
/* ====================
[BEGIN_COT_EXT]
Hooks=standalone
[END_COT_EXT]
==================== */

if (!defined('COT_CODE')) { die('Wrong URL.'); }
require_once cot_langfile('qwebirc', 'plug');
$out['subtitle'] = $L['qwebirc_qwebirc'];
$t = new XTemplate(cot_tplfile('qwebirc.main', 'plug'));

$t->assign(array(
	'QWEBIRC_URL' => cot_url('plug', 'e=qwebirc'),
	'QWEBIRC_USERNAME' => (!empty($usr['name'])) ? $usr['name'] : $L['Guest'],
	'QWEBIRC_POPNAME' => str_replace(' ', '', $L['qwebirc_qwebirc']),
	'QWEBIRC_CHANNEL' => $cfg['plugin']['qwebirc']['channel']
));

?>