<?php
namespace App\Services;
interface INotificationService
{
	public function sendNotificationToAdmins($userModel);
	public function sendNotificationToAlumniMembers($professionModel);
	
}