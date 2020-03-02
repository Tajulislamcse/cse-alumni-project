<?php
namespace App\Repositories;
use App\Factories\TeacherFactory;
class TeacherRepository extends Repository implements ITeacherRepository
{
	public function __construct()
	{
		$objOfTeacherModel=resolve('App\Models\Teacher');
		parent::setModel($objOfTeacherModel);
	}
	public function store($teacher)
    {
	$teacherArray=[
		'employeeId'=>$teacher->getEmployeeid(),
		'name'=>$teacher->getName(),
		'image'=>$teacher->getImage(),
		'bloodGroup'=>$teacher->getBloodgroup(),
		'phoneNumber'=>$teacher->getPhonenumber(),
		'email'=>$teacher->getEmail(),
		'description'=>$teacher->getDescription(),
		'researchInterest'=>$teacher->getResearchinterest(),
		'conferenceArticles'=>$teacher->getConferencearticles()

	];
	parent::store($teacherArray);

   }
   public function getAll()
   {
   	$fetchAllRecord=parent::getAll();
   	return TeacherFactory::convertDatabaseDataToBo($fetchAllRecord);

   }
   public function get($id)
	{
		$fetchRecord=parent::get($id);
		return TeacherFactory::convertIntoBoFromDatabaseData($fetchRecord);
	}
    public function update($sendFactory,$id)
	{
		$teacherArr=[
          'employeeId'=>$sendFactory->getEmployeeid(),
          'name'=>$sendFactory->getName(),
          'image'=>$sendFactory->getImage(),
          'bloodGroup'=>$sendFactory->getBloodgroup(),
          'phoneNumber'=>$sendFactory->getPhonenumber(),
          'email'=>$sendFactory->getEmail(),
          'description'=>$sendFactory->getDescription(),
          'researchInterest'=>$sendFactory->getResearchinterest(),
          'conferenceArticles'=>$sendFactory->getConferencearticles(),
          
		];
		parent::update($teacherArr,$id);
	}	

   public function delete($id)
   {
   	parent::delete($id);
   }


	 public function getWithFilter($field, $fieldValue, $orderColumn, $orderDirection, $itemCount)
    {
        return $this->model->where($field, 'like', '%'.$fieldValue.'%')
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
    }




      public function getPagedTeachers($searchText, $sortOrder, $pageIndex, $pageSize)
    {
        $fetchAllRecord = $this->getWithFilter('employeeId', $searchText, $sortOrder->columnName, $sortOrder->columnDirection, $pageSize);
        return TeacherFactory::convertDatabaseDataToBo($fetchAllRecord);
    }
    public function getTotalTeacherCount()
    {
        return count($this->getAll());
    }
    public function getTotalDisplayableTeachers($searchText)
    {
        return count($this->getWithFilter('name', $searchText, 'name', 'asc', 10));
    }

  
}