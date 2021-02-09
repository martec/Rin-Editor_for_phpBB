<?php
namespace rin\editor\tests\functional;

/**
 * @group functional
 */
class rin_editor_test extends \phpbb_functional_test_case
{
	protected function setUp(): void
	{
		parent::setUp();
		$this->add_lang_ext('rin/editor', 'rce');
		$this->login();
	}

	public function test_rin_editor_input()
	{
		$crawler = self::request('GET', sprintf(
			'posting.php?mode=post&f=2&sid=%s',
			$this->sid
		));

		//no test here yet...
		$this->assertSame(1, 1);
	}
}
