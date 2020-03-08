<?php
namespace App\Repositories;
use App\Factories\AlumniFactory;
class AlumniRepository extends Repository implements IAlumniRepository
{
	public function __construct()
	{
		$objOfModel=resolve('App\models\Alumni');
		parent::setModel($objOfModel);
	}
	public function store($alumni)
	{
		 $alumniArray=[
          'roll'=>$alumni->getRoll(),
          'name'=>$alumni->getName(),
          'batch'=>$alumni->getBatch(),
          'session'=>$alumni->getSession(),
          'bloodgroup'=>$alumni->getBloodgroup(),
          'image'=>$alumni->getImage(),
          'profession'=>$alumni->getProfession(),
          'phonenumber'=>$alumni->getPhonenumber(),
          'email'=>$alumni->getEmail(),
          'password'=>$alumni->getPassword()
		 ];
		 parent::store($alumniArray);
	}
	public function getAll()
	{
		$fetchAlldataFromDatabase=parent::getAll();
		return AlumniFactory::setValueToBoFromDatabase($fetchAlldataFromDatabase);
	}
	public function get($id)
	{
		$fetchRecord=parent::get($id);
		return AlumniFactory::convertIntoBoFromDatabaseData($fetchRecord);
	}

	public function update($senFactory,$id)
	{
		$alumniArr=[
          'roll'=>$senFactory->getRoll(),
          'name'=>$senFactory->getName(),
          'batch'=>$senFactory->getBatch(),
          'session'=>$senFactory->getSession(),
          'bloodgroup'=>$senFactory->getBloodgroup(),
          'image'=>$senFactory->getImage(),
          'profession'=>$senFactory->getProfession(),
          'phonenumber'=>$senFactory->getPhonenumber(),
          'email'=>$senFactory->getEmail()
		];
		parent::update($alumniArr,$id);
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




      public function getPagedAlumnis($searchText, $sortOrder, $pageIndex, $pageSize)
    {
        $fetchAlldataFromDatabase = $this->getWithFilter('name', $searchText, $sortOrder->columnName, $sortOrder->columnDirection, $pageSize);
        return AlumniFactory::setValueToBoFromDatabase($fetchAlldataFromDatabase);
    }
    public function getTotalAlumniCount()
    {
        return count($this->getAll());
    }
    public function getTotalDisplayableAlumnis($searchText)
    {
        return count($this->getWithFilter('name', $searchText, 'name', 'asc', 10));
    }

}