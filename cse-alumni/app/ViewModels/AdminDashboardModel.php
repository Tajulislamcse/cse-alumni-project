<?php
namespace App\ViewModels;
use App\Repositories\IAlumniMainRepository;
use App\Repositories\IAlumniCommitteeRepository;
use App\Repositories\IPostRepository;
class AdminDashboardModel implements IAdminDashboardModel
{
	private $_alumniMainRepository;
	private $_alumniCommitteeRepository;
	private $_postRepository;
	public function __construct(IAlumniMainRepository $alumniMainRepository,IAlumniCommitteeRepository $alumniCommitteeRepository,IPostRepository $postRepository)
	{
		$this->_alumniMainRepository=$alumniMainRepository;
		$this->_alumniCommitteeRepository=$alumniCommitteeRepository;
		$this->_postRepository=$postRepository;
	}
	public function getData()
	{
		$data=[
			'generalMembers'=>$this->_alumniMainRepository->getCount(),
			'todaysRegisteredGeneralMembers'=>$this->_alumniMainRepository->todaysRegisteredAlumnis(),
			'committeeMembers'=>$this->_alumniCommitteeRepository->getAll(),
			'publishedPost'=>$this->_postRepository->countPublishedPost(),
			'pendingPost'=>$this->_postRepository->countPendingPost()

		];
		return $data;
	}
}