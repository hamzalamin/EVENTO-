@include('BaseCopy')
@include('NavBar')
<style>
    .login-contect {
        background-color: #f8f9fa;
    }

    .login-body {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login {
        max-width: 400px;
        margin: 0 auto;
    }

    h5 {
        color: #333;
        font-size: 24px;
    }

    /* form {
        padding: 20px;
        border: 2px solid #00bce4;
        border-radius: 10px;
    } */

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        margin-top: 10px;
        outline: none;
    }

    .btn-success.submit {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        margin-top: 20px;
        background-color: #03b72a;
        /* Background color for the button */
        color: #fff;
        /* Text color for the button */
        cursor: pointer;
        /* Change cursor to pointer on hover */
        transition: background-color 0.3s ease;
        /* Smooth transition for background color */
    }

    .btn-success.submit:hover {
        background-color: #54e400;
        /* Darker background color on hover */
    }
</style>
<div style="margin:1%"></div>

<div class="login-contect py-5">
    <div class="container py-xl-5 py-3">
        <div class="login-body">
            <div class="login p-4 mx-auto">
<form action="{{ route('update_events', $event->id) }}" method="POST">
    @csrf
   
    <!-- Input fields to edit event data -->
    <label for="title">Title:</label>
    <input type="text" name="title" class="mt-3" value="{{ $event->title }}" />
    <label for="title">Description:</label>
    <input type="text" name="description" class="mt-3" value="{{ $event->description }}" />
    <label for="title">Date:</label>
    <input type="date" name="date" class="mt-3" value="{{ $event->date }}" />
    <label for="title">Location:</label>
    <input type="text" name="location" class="mt-3" value="{{ $event->location }}" />
    <label for="title">Category:</label>
    <select id="category_id" name="category_id" class="mt-3" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="title">Seats:</label>
    <input type="number" name="places_available" value="{{ $event->places_available }}" />

    <!-- Add other input fields as needed -->
    <button class="btn btn-success submit mt-4" type="submit">Update</button>
</form>
            </div>
        </div></div></div>
<div style="margin:10%"></div>
@include('footer')