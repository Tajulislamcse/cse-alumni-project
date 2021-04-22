<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\ISliderService;
use App\Factories\SliderFactory;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class StoreSliderModel implements IStoreSliderModel
{
	private $_sliderService;
	public $url;
	public function __construct(Request $request,ISliderService $sliderService)
	{
		$this->_sliderService=$sliderService;
		$this->loadFields($request);
	}
	public function store()
	{
		$sliderObject=SliderFactory::setProperty($this);
		$this->_sliderService->store($sliderObject);
	}
	public function update($id)
    {
    	$sliderObject=SliderFactory::setProperty($this);
		$this->_sliderService->update($sliderObject,$id);
    }
	public function loadFields(Request $request)
	{
		$sliderFile=$request->file('slider');
		$sliderName=time().'.'.$sliderFile->getClientOriginalExtension();
        $resizeSlider = Image::make($sliderFile)->resize(1110,660)->stream();
        Storage::disk('public')->put('images/slider/'.$sliderName,$resizeSlider);
        $this->url=$sliderName;
	}

}