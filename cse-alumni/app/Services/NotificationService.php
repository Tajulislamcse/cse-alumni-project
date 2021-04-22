<?php
namespace App\Services;
use App\Notifications\RegistrationApprovalNotification;
use App\Notifications\JobChangeNotification;
use Illuminate\Support\Facades\Notification;
use App\Repositories\IAdminRepository;
use App\Repositories\IAlumniMainRepository;

class NotificationService implements INotificationService
{   
	private $_adminRepository;
	private $_alumniMainRepository;
	public function __construct(IAdminRepository $adminRepository,IAlumniMainRepository $alumniMainRepository)
	{
	 $this->_adminRepository=$adminRepository;
	 $this->_alumniMainRepository=$alumniMainRepository;

	}

	public function sendNotificationToAdmins($userModel)//eloquent userModel.userModel refers to a person who has registered.
	{
     $adminUsers=$this->_adminRepository->getAdmins();
     Notification::send($adminUsers,new RegistrationApprovalNotification($userModel));
	}
	public function sendNotificationToAlumniMembers($professionModel)//eloquent professionModel
	{
	 $alumniUsers=$this->_alumniMainRepository->getAlumnis($professionModel);
	 Notification::send($alumniUsers,new JobChangeNotification($professionModel));
	}
}