<?php
namespace App\Services;
use App\BusinessObjects\ITeacher;
use App\Repositories\ITeacherRepository;
use App\ViewModels\PagedData;
class TeacherService implements ITeacherService
{
	private $_teacherRepository;
	public function __construct(ITeacherRepository $teacherRepository)
	{
		$this->_teacherRepository=$teacherRepository;
	}
	public function store(ITeacher $teacher)
	{
     $this->_teacherRepository->store($teacher);
	}
	public function getAll()
	{
	  return $this->_teacherRepository->getAll();
	}
	public function get($id)
	{
		return $this->_teacherRepository->get($id);
	}
	public function delete($id)
	{
		$this->_teacherRepository->delete($id);
	}
	public function update($sendFactory,$id)
	{
		$this->_teacherRepository->update($sendFactory,$id);
	}


    public function getTeachers($searchText, $sortOrder, $pageIndex, $pageSize)
    {
        $teachers = $this->_teacherRepository->getPagedTeachers($searchText, $sortOrder, $pageIndex, $pageSize);
        $totalCount = $this->_teacherRepository->getTotalTeacherCount();
        $totalDisplayCount = $this->_teacherRepository->getTotalDisplayableTeachers($searchText);
        return new PagedData($teachers, $totalCount, $totalDisplayCount);
    }

}