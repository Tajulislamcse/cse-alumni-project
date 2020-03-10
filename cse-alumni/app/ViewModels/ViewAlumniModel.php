<?php
namespace App\ViewModels;
use App\Services\IAlumniService;
class ViewAlumniModel implements IViewAlumniModel
{
	private $_alumniService;
	public function __construct(IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;
	}
	public function getAll()
	{
		return $this->_alumniService->getAll();
	}
	public function get($id)
	{
		return $this->_alumniService->get($id);
	}
	public function delete($id)
	{
		$this->_alumniService->delete($id);

	}



	 public function getAlumnisJsonData(DataTablesModel $dataTablesModel)

    {
        $records = $this->_alumniService->getAlumnis(
            $dataTablesModel->getSearchText(),
            $dataTablesModel->getSortOrder(['id','roll', 'name','image','id']),
            
            $dataTablesModel->getPageIndex(),
            $dataTablesModel->getPageSize()
        );
        $total = $records->total;
        $totalFiltered = $records->totalDisplay;
        
        return
            [
                "recordsTotal" => $total,
                "recordsFiltered" => $totalFiltered,
                 "data" => $this->getAlumniFieldValues($records->data)
            ];
    }
    private function getAlumniFieldValues($alumniData)
    {
    
        $alumnis=[];
        for ($i = 0; $i < count($alumniData); $i++) {
            $alumnis[] = [
                $alumniData[$i]->getId(),
                $alumniData[$i]->getRoll(),
                $alumniData[$i]->getName(),
             
                 "/uploads/".$alumniData[$i]->getImage(),
          
                $alumniData[$i]->getId()
            ];
        }
        return $alumnis;
    }



}