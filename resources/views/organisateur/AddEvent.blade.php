@include('BaseCopy')
@include('NavBar')    <style>
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
            background-color: #00bce4;
            /* Background color for the button */
            color: #fff;
            /* Text color for the button */
            cursor: pointer;
            /* Change cursor to pointer on hover */
            transition: background-color 0.3s ease;
            /* Smooth transition for background color */
        }

        .btn-success.submit:hover {
            background-color: #00bce4;
            /* Darker background color on hover */
        }
    </style>

    <div class="login-contect py-5">
        <div class="container py-xl-5 py-3">
            <div class="login-body">
                <div class="login p-4 mx-auto">
                    <h5 class="text-center mb-4">Create event</h5>
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="mt-3" required>
                        </div>

                        <div>
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="mt-3" required></textarea>
                        </div>

                        <div>
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" class="mt-3" required>
                        </div>

                        <div>
                            <label for="location">Location:</label>
                            <input type="text" id="location" name="location" class="mt-3" required>
                        </div>

                        <div>
                            <label for="category_id">Category:</label>
                            <select id="category_id" name="category_id" class="mt-3" required>
                                <option value="">Chose category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="places_available">Places Available:</label>
                            <input type="number" id="places_available" name="places_available" class="mt-3" required min="1">
                        </div>
                        <div class="form-group">
                            <label for="places_available">Setengs:</label>

                            <select id="states" name="states" class="mt-3" required>
                                <option value="">Chose Setengs</option>
                                <option value="auto">auto</option>
                                <option value="manuelle">manuelle</option>
                            </select>
                        </div>
                        
                        

                        <button class="btn btn-success submit mt-4" type="submit">Create Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 10%"></div>
@include('footer')