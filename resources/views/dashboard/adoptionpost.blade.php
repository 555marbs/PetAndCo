@extends('layouts.app')

@extends('navbars.dashboard-navbar')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/adoption.css') }}"/>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .post-form {
        width: 400px; /* Adjust width as needed */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .post-form h2 {
        text-align: center;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="file"],
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .form-group textarea {
        height: 100px;
    }
    .form-group button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="container">
    <!-- Form for posting images and text -->
    <div class="post-form">
        <h2>Post Image and Text</h2>
        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" name="contact" id="contact" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" rows="5" required></textarea>
            </div>
            <a href="{{ route('dog') }}">
            <button type="submit">Submit</button>
            </a>
        </form>
    </div>
</div>
@endsection