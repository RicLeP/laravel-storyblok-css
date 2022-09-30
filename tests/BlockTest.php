<?php

namespace Riclep\StoryblokCss\Tests;


class BlockTest extends TestCase
{
	/** @test */
	public function can_get_css_class()
	{
		$page = $this->makePage();
		$block = $page->block();

		$this->assertEquals('all-fields', $block->cssClass());
		$this->assertEquals('person', $block->blocks[0]->cssClass());
	}

	/** @test */
	public function can_get_css_class_with_parent()
	{
		$page = $this->makePage();
		$block = $page->block();

		$this->assertEquals('person@all-fields', $block->blocks[0]->cssClassWithParent());
	}

	/** @test */
	public function can_get_layout()
	{
		$page = $this->makePage('custom-page.json');
		$block = $page->block();

		$this->assertEquals('layout_columns', $block->blocks[0]->columns[0]->getLayout());
	}

	/** @test */
	public function can_get_css_class_with_layout()
	{
		$page = $this->makePage('custom-page.json');
		$block = $page->block();

		$this->assertEquals('person@layout_columns', $block->blocks[0]->columns[0]->cssClassWithLayout());
	}
}
