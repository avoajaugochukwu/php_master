<?php
	class Parcel
	{
		protected $weight;
		protected $destinationCountry;

		public function setWeight($weight)
		{
			echo "weight set to: " . $weight . "\n";
			$this->weight = $weight;
			return $this;
		}

		public function setCountry($country)
		{
			echo "destination country is: " . $country . "\n";
			$this->destinationCountry = $country;
			return $this;
		}
	}