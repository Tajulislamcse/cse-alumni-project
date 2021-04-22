<?php
namespace App\Repositories;
class AdminRepository extends BaseRepository implements IAdminRepository
{
  public function __construct()
  {
    $userModel=resolve('App\Models\User');
	parent::setModel($userModel);
   }
  public function getAdmins()
	{
      $roleName='admin';//get all admin for sending notification
      $adminUsers=$this->model->whereHas('roles', function ($q) use ($roleName) {
		        $q->where('name',$roleName);
		    })->get();
      return $adminUsers;
	}

}