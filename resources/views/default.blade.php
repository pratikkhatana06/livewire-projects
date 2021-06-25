@extends('layouts.common')
@section('title', 'File upload')
@section('body')
<div class="container">
    
    <div class="card">
      <div class="card-header">
        Laravel Livewire Example
      </div>
      <div class="card-body">
        @livewire('file-upload')
      </div>
    </div>
</div>
@endsection

@section('footer')
  @livewireScripts
@endsection