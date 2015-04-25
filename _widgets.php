<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of randomComment, a plugin for Dotclear.
# 
# Copyright (c) 2009-2015 Tomtom and contributors
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$core->addBehavior('initWidgets',array('randomCommentWidgets','initWidgets'));

class randomCommentWidgets
{
	/**
	 * This function create a new randomComment widget
	 *
	 * @param	object	w
	 */
	public static function initWidgets($w)
	{
		$w->create('randomcomment',__('RandomComment'),array('randomCommentPublic','widget'),
			null,
			__('Displays a random comment'));
		$w->randomcomment->setting('title',__('Title:'),__('Random comment'));
		$w->randomcomment->setting('comment_info',__('Information text about comment:'),__('By %author% about %entry% on %date%.'));
		$w->randomcomment->setting('text_size',__('Text size to display (leave blank for full text):'),'');
		$w->randomcomment->setting('ttl',__('Time to reload widget (in sec.):'),'10');
		$w->randomcomment->setting('homeonly',__('Display on:'),0,'combo',
			array(
				__('All pages') => 0,
				__('Home page only') => 1,
				__('Except on home page') => 2
				)
		);
		$w->randomcomment->setting('content_only',__('Content only'),0,'check');
		$w->randomcomment->setting('class',__('CSS class:'),'');
		$w->randomcomment->setting('offline',__('Offline'),0,'check');
	}
}