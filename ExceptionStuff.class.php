<?php
	class ParcelException extends Exception {}

	class ExceptionStuff
	{

		public function ship($parcel)
		{
			if (2 < 5)
			{
				throw new ParcelException("Parcel exceeded courier weight");
				
			}
			return true;
		}
	}