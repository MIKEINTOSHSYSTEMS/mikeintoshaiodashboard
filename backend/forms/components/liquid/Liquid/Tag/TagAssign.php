<?php

/*
 * This file is part of the Liquid package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Liquid
 */

namespace app\components\liquid\Liquid\Tag;

use app\components\liquid\Liquid\AbstractTag;
use app\components\liquid\Liquid\Exception\ParseException;
use app\components\liquid\Liquid\Liquid;
use app\components\liquid\Liquid\FileSystem;
use app\components\liquid\Liquid\Regexp;
use app\components\liquid\Liquid\Context;
use app\components\liquid\Liquid\Variable;

/**
 * Performs an assignment of one variable to another
 *
 * Example:
 *
 *     {% assign var = var %}
 *     {% assign var = "hello" | upcase %}
 */
class TagAssign extends AbstractTag
{
	/**
	 * @var string The variable to assign from
	 */
	private $from;

	/**
	 * @var string The variable to assign to
	 */
	private $to;

	/**
	 * Constructor
	 *
	 * @param string $markup
	 * @param array $tokens
	 * @param FileSystem $fileSystem
	 *
	 * @throws \app\components\liquid\Liquid\Exception\ParseException
	 */
	public function __construct($markup, array &$tokens, FileSystem $fileSystem = null)
	{
		$syntaxRegexp = new Regexp('/(\w+)\s*=\s*(.*)\s*/');

		if ($syntaxRegexp->match($markup)) {
			$this->to = $syntaxRegexp->matches[1];
			$this->from = new Variable($syntaxRegexp->matches[2]);
		} else {
			throw new ParseException("Syntax Error in 'assign' - Valid syntax: assign [var] = [source]");
		}
	}

	/**
	 * Renders the tag
	 *
	 * @param Context $context
	 *
	 * @return string|void
	 */
	public function render(Context $context)
	{
		$output = $this->from->render($context);

		$context->set($this->to, $output, true);
	}
}
