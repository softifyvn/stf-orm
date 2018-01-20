<?php

namespace Stf\Object;

interface ObjectInterface
{
	public function getName();

	public function setValue($value);

	public function hasValue();

	public function getValue();
}