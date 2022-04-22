<?php
// class Driver
// {
// 	private $_vehicle;
// 	public function __construct(IVehicle $vehicle)
// 	{
// 		$this->_vehicle = $vehicle;
// 	}
//    public function print()
//    {
//    	$this->_vehicle->running();
//    }


// }
// class Car implements IVehicle
// {
//   public function running()
//   {
//   	echo "car is running";
//   }
// }
// class Aeroplane implements IVehicle
// {
//   public function running()
//   {
//   	echo "aeroplane is running";
//   }
// }
// interface IVehicle
// {
//   public function running();
// }
// $aero = new Aeroplane;
// $driver = new Driver($aero);
// $driver->print();
trait Test
{
	public function start()
	{
		echo "this test";
	}
}
class Person
{
	use Test;

}
$person = new Person;
$person->start();
