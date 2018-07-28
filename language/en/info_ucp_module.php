<?php
/**
 *
 * OpenRAUserAccounts. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, The OpenRAUserAccounts authors
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_TITLE'					=> 'OpenRA profile',
	'UCP_ADD_KEY'					=> 'Add authentication key',
	'UCP_ADD_KEY_EXPLAIN'				=> 'Connect your forum account to as many OpenRA installs as you want and authenticate yourself to other players ingame.',
	'UCP_MANAGE_KEYS'				=> 'Manage keys',
	'UCP_MANAGE_KEYS_EXPLAIN'			=> 'The list shows your active authenticatin keys. Revoked authentication keys will not be shown.',
	'UCP_SELECT_BADGES'				=> 'Select badges',
	'UCP_SELECT_BADGES_EXPLAIN'			=> 'Here you find the badges that are available for your account.',
	'UCP_ORDER_BADGES'				=> 'Order badges',
	'UCP_ORDER_BADGES_EXPLAIN'			=> 'These are the badges that will be shown in your profile information. You can change the order or add more badges from the \'Select badges\' page.',
	'UCP_INPUT_KEY'					=> 'Enter authentication key',
	'UCP_INPUT_KEY_EXPLAIN'				=> 'Paste the authentication key generated by your OpenRA install.',
	'UCP_INPUT_SAVED'				=> 'Authentication key has been saved successfully.',
	'UCP_KEY_INVALID'				=> 'Invalid authentication key.',
	'UCP_DUPLICATE_KEY_QUERY_FAILED'		=> 'Failed to query duplicate keys.',
	'UCP_DUPLICATE_KEY'				=> 'This authentication key is already in use.',
	'UCP_DUPLICATE_KEY_REVOKED'			=> 'This authentication key is already used and revoked.',
	'UCP_KEY_DATA_QUERY_FAILED'			=> 'Failed to query key data.',
	'UCP_KEY_REVOKE_QUERY_FAILED'			=> 'Failed to revoke keys.',
	'UCP_KEY_COUNT_QUERY_FAILED'			=> 'Failed to query key count.',
	'UCP_NO_KEYS'					=> 'No authentication keys.',
	'UCP_KEY_NOT_ACCESSED'				=> 'Authentication key not accessed.',
	'UCP_TOTAL_KEYS'				=> array(1 => '%d key', 2 => '%d keys'),
	'UCP_FINGERPRINT'				=> 'Fingerprint',
	'UCP_REGISTERED'				=> 'Registered',
	'UCP_LAST_ACCESS'				=> 'Last accessed',
	'UCP_REVOKE_ALL'				=> 'Revoke all keys',
	'UCP_REVOKE_MARKED'				=> 'Revoke marked keys',
	'UCP_BADGE_LABEL'				=> 'Badge label',
	'UCP_BADGE_ICON'				=> 'Badge icon',
	'UCP_NO_PROFILE_BADGES'				=> 'No profile badges',
	'UCP_NO_BADGES_AVAILABLE'			=> 'No badges available.',
	'UCP_BADGES_NOT_DISPLAYED'			=> 'Badges below will not be shown in your profile information.',
	'UCP_AVAIL_BADGES_QUERY_FAILED'			=> 'Failed to query available badges',
	'UCP_AVAIL_BADGE_COUNT_QUERY_FAILED'		=> 'Failed to query available badge count.',
	'UCP_DUPLICATE_USER_BADGE_QUERY_FAILED'		=> 'Failed to query duplicate user badges.',
	'UCP_SELECTION'					=> 'SELECTION',
	'UCP_ORDER_BADGES_TABLE_DESC'			=> 'Use the arrows to manage the order of your profile badges.',
	'UCP_SELECT_BADGES_TABLE_DESC'			=> 'Select badges to show them in your profile information.',
	'UCP_CHECK_REVOKE_QUERY_FAILED'			=> 'Failed to check if key is revoked.',
	'UCP_AGREEMENT'					=> 'I agree to OpenRA\'s <a href="https://forum.openra.net/privacypolicy/policy">privacy policy</a> and acknowledge that my OpenRA profile may be disabled without warning if I am found to have exploited or abused the system to the detriment of other players.',
	'UCP_SELECTED_BADGES_SAVED'			=> 'Your badge selection has been updated. Visit the \'Order badges\' page to view and change the order of your badges.',
	'UCP_BADGE_ORDER_QUERY_FAILED'			=> 'Failed to query item order.',
	'UCP_UBADGE_COUNT_QUERY_FAILED'			=> 'Failed to query user badge count.',
	'UCP_UBADGE_DATA_QUERY_FAILED'			=> 'Failed to query user badge data.',
));
