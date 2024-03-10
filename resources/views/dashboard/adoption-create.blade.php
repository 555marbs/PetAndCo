@extends('layouts.app')

@extends('navbars.dashboard-navbar')
@section('styles')
<!-- <link rel="stylesheet" href="{{ asset('css/adoption.css') }}"/> -->
<!-- External CSS nalang to  -->
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
        background-color: #B19470 !important;
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
    background-color: #B19470 !important;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    display: block; 
    margin: 0 auto;
    transition: background-color 0.3s ease;
}

.form-group button:hover {
    background-color: #0056b3;
}
</style>
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
            <a>
            <button type="submit">Submit</button>
            </a>
        </form>
    </div>
</div>
@endsection
