<?php


	class Courier {
		public $name;
		public $home_country;
		protected $data = array();

		public function __construct()
		{
			echo "This is \t Courier Class";
		}

		public static function getCourierByCountry($country)
		{
			echo 'This is my first PHP static class <b>' .$country . '</b>';
		}

		public function __get($property)
		{
			return $this->data[$property];
		}

		public function __set($property, $value)
		{
			$this->data[$property] = $value;
			return true;
		}
	}