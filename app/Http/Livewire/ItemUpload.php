<?php

namespace App\Http\Livewire;
use App\Models\Item;
use Intervention\Image\Image;
use Livewire\WithFileUploads;
use Livewire\Component;

class ItemUpload extends Component
{
    use WithFileUploads;
    public $country;
    public $city;
    public $connectyu_username;
    public $owner;
    public $image;
    public $description;

    protected $rules = [
        'country' => ['max:50','required'],
        'city' => ['max:50','required'],
        'connectyu_username' => ['max:50','required'],
        'owner' => ['max:50','required'],
        'image' => ['required','image','max:1024'],
        'description' => ['max:50','required'],
    ];

    public function updated()
    {
        $this->validate();
    }

    public function submit( )
    {
        $validatedData = $this->validate();
        $this->image->store('images');
        $imagepath=$this->image->store('images');
        $validatedData['image']=$imagepath;


//        $image=Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);//image intervension library
//         $image->save();
//         dd($image);

        Item::create($validatedData);

//        we want to keep a blank form after submission
//        $validatedData=[];
//        or
//        $this->image=[]; same for the other fields
        return redirect()->to('/');
    }


    public function render()
    {
        return view('livewire.item-upload')->layout('layouts.guest');
    }
}
