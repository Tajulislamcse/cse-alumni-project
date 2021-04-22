<?php
namespace App\ViewModels;
use App\Factories\PostFactory;
use App\Services\IPostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class StorePostModel implements IStorePostModel
{
	private $_postService;
	public $title;
	public $description;
	public $image;
	public $status;
	public $category;
	public $user_id;
	public $publishedAt;
	public function __construct(Request $request,IPostService $postService)
	{
		$this->_postService=$postService;
		$this->loadFields($request);
	}
	public function store()
	{
		$postObject=PostFactory::setProperty($this);
		$this->_postService->store($postObject);
	}
	public function update($id)
	{
		$postObject=PostFactory::setProperty($this);
		$this->_postService->update($postObject,$id);
	}
	public function loadFields(Request $request)
	{   

		$validatedData = $request->validate([
			'title'=>'required',
			'category'=>'required',
			'description'=>'required',
			'image'=>'image|mimes:jpeg,jpg,png,gif,svg|max:2048'
		]);
		if($request->hasFile('image'))
		{
			$imageFile=$request->file('image');
			$imageName=time().'.'.$imageFile->getClientOriginalExtension();
			$resizeImg = Image::make($imageFile)->resize(500,281)->stream();
			Storage::disk('public')->put('images/post/'.$imageName,$resizeImg);
		  $this->image=$imageName;
		}
		if($request->status==true)
		{
			$date=Carbon::now();
			$this->publishedAt=$date->toFormattedDateString();
		}
		$this->title=$request->title;
		$this->description=strip_tags($request->description);
		$this->status=$request->input('status',0);
		$this->category=$request->category;
		$this->user_id=$request->user()->id;
	}
}