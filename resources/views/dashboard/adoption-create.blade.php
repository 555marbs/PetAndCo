@extends('layouts.app')

@extends('navbars.dashboard-navbar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/adoption-create.css') }}"/>
@endsection

@section('content')
<div class="container">
    <!-- Form for posting images and text -->
    <div class="post-form">
        <h2>Post Image and Text</h2>
        <form method="post" action="{{ route('adoptions.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required maxlength="30">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" name="contact" id="contact" required maxlength="30" required pattern="^[0-9]+$">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="text" required maxlength="100"></textarea>
            </div>
            <a>
            <button type="submit">Submit</button>
            </a>
        </form>
    </div>
</div>
@endsection
