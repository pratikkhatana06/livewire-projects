<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\File;

use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;   
    public $file, $title;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'file' => 'required|max:1024',
        ]);
  
        $validatedData['name'] = $this->file->store('files', 'public');
  
        File::create($validatedData);
  
        session()->flash('message', 'File successfully Uploaded.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required',
            'file' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}