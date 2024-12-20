<?php

namespace App;

class Person
{
	public function __construct(
		private string $name,
		private int $age,
		private string $gender
	){}

	/**
	 * Get the value of name
	 *
	 * @return string
	 */
	public function getName (): string
	{
		return $this->name;
	}

	/**
	 * Get the value of age
	 *
	 * @return int
	 */
	public function getAge (): int
	{
		return $this->age;
	}

	/**
	 * Get the value of gender
	 *
	 * @return string
	 */
	public function getGender (): string
	{
		return $this->gender;
	}

	/**
	 * Set the value of name
	 *
	 * @param string $name
	 */
	public function setName (string $name): void
	{
		$this->name = $name;
	}

	/**
	 * Set the value of age
	 *
	 * @param int $age
	 */
	public function setAge (int $age): void
	{
		$this->age = $age;
	}

	/**
	 * Set the value of gender
	 *
	 * @param string $gender
	 */
	public function setGender (string $gender): void
	{
		$this->gender = $gender;
	}

	public function __toString()
	{
		return "Name: {$this->name}, Age: {$this->age}, Gender: {$this->gender}";
	}
}
