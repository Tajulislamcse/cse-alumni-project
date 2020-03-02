<?php
namespace App\ViewModels;
use App\Services\ITeacherService;
class ViewTeacherModel implements IViewTeacherModel
{
	private $_teacherService;
	public function __construct(ITeacherService $teacherService)
	{
		$this->_teacherService=$teacherService;
	}
	public function getAll()
	{
     return $this->_teacherService->getAll();
	}
	public function get($id)
	{
		return $this->_teacherService->get($id);
	}
	public function delete($id)
	{
		$this->_teacherService->delete($id);
	}



	 public function getTeachersJsonData(DataTablesModel $dataTablesModel)

    {
        $records = $this->_teacherService->getTeachers(
            $dataTablesModel->getSearchText(),
            $dataTablesModel->getSortOrder(['id','employeeId', 'name','image','bloodGroup','phoneNumber','email', 'description', 'researchInterest','conferenceArticles','id']),
            
            $dataTablesModel->getPageIndex(),
            $dataTablesModel->getPageSize()
        );
        $total = $records->total;
        $totalFiltered = $records->totalDisplay;
        
        return
            [
                "recordsTotal" => $total,
                "recordsFiltered" => $totalFiltered,
                 "data" => $this->getTeacherFieldValues($records->data)
            ];
    }
    private function getTeacherFieldValues($teacherData)
    {
    
        $teachers=[];
        for ($i = 0; $i < count($teacherData); $i++) {
            $teachers[] = [
                $teacherData[$i]->getId(),
                $teacherData[$i]->getEmployeeid(),
                $teacherData[$i]->getName(),
                $teacherData[$i]->getImage(),
                $teacherData[$i]->getBloodgroup(),
                $teacherData[$i]->getPhonenumber(),
                $teacherData[$i]->getEmail(),
                $teacherData[$i]->getDescription(),
                $teacherData[$i]->getResearchinterest(),
                $teacherData[$i]->getConferencearticles(),
                $teacherData[$i]->getId()
            ];
        }
        return $teachers;
    }


}