<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class BatchController extends Controller
{
	private $batchRepository;
	public function __construct()
	{
		$this->batchRepository=resolve('App\Repositories\BatchRepository');
	}
	public function index()
	{
		$batches=$this->batchRepository->getAll();
		return view('admin.batch.index',compact('batches'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validateData = $request->validate([
            'name' => 'required'
		]);
		$name = $request->name;
		$this->batchRepository->store($name);
		return response()->json(['success'=>'Batch added successfully']);
		
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$validateData = $request->validate([
            'name' => 'required'
		]);
		$name = $request->name;
		$this->batchRepository->update($name, $id);
		return response()->json(['success'=>'Batch updated successfully']);
		
	}
	public function destroy($id)
	{
		$this->batchRepository->delete($id);
        return redirect('admin/batch');

	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
   */
}
