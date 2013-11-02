<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   Fuel\Validation
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace Fuel\Validation;

/**
 * Defines a common interface for validation rules
 *
 * @package Fuel\Validation
 * @author  Fuel Development Team
 */
interface RuleInterface
{

	/**
	 * Performs validation on the given value
	 *
	 * @param mixed $value Value to validate
	 *
	 * @return bool
	 */
	public function validate($value);

	/**
	 * Gets the failure message for this rule
	 *
	 * @return string
	 */
	public function getMessage();

	/**
	 * Sets the failure message for this rule
	 *
	 * @param string $message
	 *
	 * @return $this
	 */
	public function setMessage($message);

	/**
	 * Sets the parameter for this validation rule.
	 * See each Rule's documentation for what this should be.
	 *
	 * @param mixed $params
	 *
	 * @return $this
	 */
	public function setParameter($params);

	/**
	 * Returns the value of the set parameter.
	 * See each Rule's documentation for what the parameter does.
	 *
	 * @return mixed
	 */
	public function getParameter();

}