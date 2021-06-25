<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            Laravel Livewire Example
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Comment</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What's in your mind ?">
                </div>
                <button type="button" class="btn btn-primary" wire:click="addComment">Submit</button>
            </form>
        </div>
    </div>
</div>
<br>

@foreach($comments as $comment)
    <div class="container">
        <div class="container">
            <div class="card">
                <p class="mt-2 ml-2">
                    <b>Pratik</b>
                </p>
                <p class="mt-2 ml-2">
                    {{$comment['body']}}
                </p>
            </div>
        </div>
    </div>
@endforeach