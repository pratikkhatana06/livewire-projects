<form enctype="multipart/form-data">
    @if($image)
        <img src="{{$image}}" width="200" alt="">
    @endif
    <div class="form-group">
        <label for="exampleFormControlInput1">Image:</label>
        <input type="file" id="image" class="form-control" id="exampleFormControlInput1" wire:change="$emit('fileChoosen')">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput2">Body:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>