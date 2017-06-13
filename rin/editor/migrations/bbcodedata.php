<?php

namespace rin\editor\migrations;

class bbcodedata extends \phpbb\db\migration\migration
{

 	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'addbbcode'))),
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(array($this, 'removebbcode'))),
		);
	}

	public function removebbcode()
	{
		$bbcodedata = array('s', 'sub', 'sup', 'left', 'right', 'center', 'justify', 'font=', 'hr', 'youtube', 'dailymotion', 'vimeo',);

		$sql = 'DELETE FROM ' . $this->table_prefix . 'bbcodes WHERE ' . $this->db->sql_in_set('bbcode_tag', $bbcodedata);
		$this->db->sql_query($sql);
	}

	public function addbbcode()
	{
		$bbcodedata = array('s', 'sub', 'sup', 'left', 'right', 'center', 'justify', 'font=', 'hr', 'youtube', 'dailymotion', 'vimeo',);

		$sql = 'DELETE FROM ' . $this->table_prefix . 'bbcodes WHERE ' . $this->db->sql_in_set('bbcode_tag', $bbcodedata);
		$this->db->sql_query($sql);

		$sql = 'SELECT MAX(bbcode_id) AS max_id
    				FROM ' . $this->table_prefix . 'bbcodes';
		$result = $this->db->sql_query($sql);

		$style_ids = 0;
		if ($styles_row = $this->db->sql_fetchrow()) {
			$style_ids = $styles_row['max_id'];
		}
		$this->db->sql_freeresult($result);

		// Make sure we don't start too low
		if ($style_ids <= NUM_CORE_BBCODES) {
			$style_ids = NUM_CORE_BBCODES;
		}

		$phpbb_bbcodes = array(
			array( // row #1
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 's',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[s]{TEXT}[/s]',
				'bbcode_tpl' => '<span style="text-decoration: line-through;">{TEXT}</span>',
				'first_pass_match' => '!\\[s\\](.*?)\\[/s\\]!ies',
				'first_pass_replace' => '\'[s:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/s:$uid]\'',
				'second_pass_match' => '!\\[s:$uid\\](.*?)\\[/s:$uid\\]!s',
				'second_pass_replace' => '<span style="text-decoration: line-through;">${1}</span>'
			),
			array( // row #2
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'sub',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[sub]{TEXT}[/sub]',
				'bbcode_tpl' => '<sub>{TEXT}</sub>',
				'first_pass_match' => '!\\[sub\\](.*?)\\[/sub\\]!ies',
				'first_pass_replace' => '\'[sub:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/sub:$uid]\'',
				'second_pass_match' => '!\\[sub:$uid\\](.*?)\\[/sub:$uid\\]!s',
				'second_pass_replace' => '<sub>${1}</sub>'
			),
			array( // row #3
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'sup',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[sup]{TEXT}[/sup]',
				'bbcode_tpl' => '<sup>{TEXT}</sup>',
				'first_pass_match' => '!\\[sup\\](.*?)\\[/sup\\]!ies',
				'first_pass_replace' => '\'[sup:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/sup:$uid]\'',
				'second_pass_match' => '!\\[sup:$uid\\](.*?)\\[/sup:$uid\\]!s',
				'second_pass_replace' => '<sup>${1}</sup>'
			),
			array( // row #4
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'left',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[left]{TEXT}[/left]',
				'bbcode_tpl' => '<div align="left">{TEXT}</div>',
				'first_pass_match' => '!\\[left\\](.*?)\\[/left\\]!ies',
				'first_pass_replace' => '\'[left:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/left:$uid]\'',
				'second_pass_match' => '!\\[left:$uid\\](.*?)\\[/left:$uid\\]!s',
				'second_pass_replace' => '<div align="left">${1}</div>'
			),
			array( // row #5
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'right',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[right]{TEXT}[/right]',
				'bbcode_tpl' => '<div align="right">{TEXT}</div>',
				'first_pass_match' => '!\\[right\\](.*?)\\[/right\\]!ies',
				'first_pass_replace' => '\'[right:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/right:$uid]\'',
				'second_pass_match' => '!\\[right:$uid\\](.*?)\\[/right:$uid\\]!s',
				'second_pass_replace' => '<div align="right">${1}</div>'
			),
			array( // row #6
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'center',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[center]{TEXT}[/center]',
				'bbcode_tpl' => '<div align="center">{TEXT}</div>',
				'first_pass_match' => '!\\[center\\](.*?)\\[/center\\]!ies',
				'first_pass_replace' => '\'[center:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/center:$uid]\'',
				'second_pass_match' => '!\\[center:$uid\\](.*?)\\[/center:$uid\\]!s',
				'second_pass_replace' => '<div align="center">${1}</div>'
			),
			array( // row #7
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'justify',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[justify]{TEXT}[/justify]',
				'bbcode_tpl' => '<div align="justify">{TEXT}</div>',
				'first_pass_match' => '!\\[justify\\](.*?)\\[/justify\\]!ies',
				'first_pass_replace' => '\'[justify:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/justify:$uid]\'',
				'second_pass_match' => '!\\[justify:$uid\\](.*?)\\[/justify:$uid\\]!s',
				'second_pass_replace' => '<div align="justify">${1}</div>'
			),
			array( // row #8
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'font=',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[font={SIMPLETEXT}]{TEXT}[/font]',
				'bbcode_tpl' => '<span style="font-family: {SIMPLETEXT};">{TEXT}</span>',
				'first_pass_match' => "!\\[font\\=([a-z0-9 ,\-_']+)\\](.*?)\\[/font\\]!ies",
				'first_pass_replace' => '\'[font=${1}:$uid]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/font:$uid]\'',
				'second_pass_match' => "!\\[font\\=([a-z0-9 ,\-_']+):$uid\\](.*?)\\[/font:$uid\\]!s",
				'second_pass_replace' => '<span style="font-family: ${1};">${2}</span>'
			),
			array( // row #9
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'hr',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[hr]',
				'bbcode_tpl' => '<hr />',
				'first_pass_match' => '!\\[hr\\]!i',
				'first_pass_replace' => '[hr:$uid]',
				'second_pass_match' => '!\\[hr:$uid\\]!s',
				'second_pass_replace' => '<hr />'
			),
			array( // row #10
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'youtube',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[youtube]{SIMPLETEXT}[/youtube]',
				'bbcode_tpl' => '<iframe width="560" height="315" src="//www.youtube.com/embed/{SIMPLETEXT}?html5=1" frameborder="0" allowfullscreen></iframe>',
				'first_pass_match' => '!\\[youtube\\]([a-zA-Z0-9-+.,_ ]+)\\[/youtube\\]!i',
				'first_pass_replace' => '[youtube:$uid]${1}[/youtube:$uid]',
				'second_pass_match' => '!\\[youtube:$uid\\]([a-zA-Z0-9-+.,_ ]+)\\[/youtube:$uid\\]!s',
				'second_pass_replace' => '<iframe width="560" height="315" src="//www.youtube.com/embed/${1}?html5=1" frameborder="0" allowfullscreen></iframe>'
			),
			array( // row #11
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'dailymotion',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[dailymotion]{SIMPLETEXT}[/dailymotion]',
				'bbcode_tpl' => '<iframe width="560" height="320" src="//www.dailymotion.com/embed/video/{SIMPLETEXT}" frameborder="0"></iframe>',
				'first_pass_match' => '!\\[dailymotion\\]([a-zA-Z0-9-+.,_ ]+)\\[/dailymotion\\]!i',
				'first_pass_replace' => '[dailymotion:$uid]${1}[/dailymotion:$uid]',
				'second_pass_match' => '!\\[dailymotion:$uid\\]([a-zA-Z0-9-+.,_ ]+)\\[/dailymotion:$uid\\]!s',
				'second_pass_replace' => '<iframe width="560" height="320" src="//www.dailymotion.com/embed/video/${1}" frameborder="0"></iframe>'
			),
			array( // row #12
				'bbcode_id' => ++$style_ids,
				'bbcode_tag' => 'vimeo',
				'bbcode_helpline' => '',
				'display_on_posting' => 0,
				'bbcode_match' => '[vimeo]{SIMPLETEXT}[/vimeo]',
				'bbcode_tpl' => '<iframe width="560" height="315" src="//player.vimeo.com/video/{SIMPLETEXT}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>',
				'first_pass_match' => '!\\[vimeo\\]([a-zA-Z0-9-+.,_ ]+)\\[/vimeo\\]!i',
				'first_pass_replace' => '[vimeo:$uid]${1}[/vimeo:$uid]',
				'second_pass_match' => '!\\[vimeo:$uid\\]([a-zA-Z0-9-+.,_ ]+)\\[/vimeo:$uid\\]!s',
				'second_pass_replace' => '<iframe width="560" height="320" src="//player.vimeo.com/video//${1}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
			)			
		);
		foreach ($phpbb_bbcodes as $eee) {
			$sql = 'INSERT INTO ' . $this->table_prefix . 'bbcodes' . $this->db->sql_build_array('INSERT', $eee);
			$this->db->sql_query($sql);
		}
	}
}
