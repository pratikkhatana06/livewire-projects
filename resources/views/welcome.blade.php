@extends('layouts.common')
@section('header')
        @livewireScripts
@endsection
@section('title', 'CRUD using livewire')
@section('body')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire CRUD</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('posts')   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    
    <script>
        
        Livewire.on('fileChoosen', postId => {
            let inputField = document.getElementById('image');
            let file = inputField.files[0];
            let reader = new FileReader();
            reader.onloadend = () => {
                window.livewire.emit('fileUpload', reader.result);
            }
            reader.readAsDataURL(file);
        });
    </script>


@endsection