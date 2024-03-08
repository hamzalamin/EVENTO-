{{-- @include('Base') --}}
@include('NavBar')
    <style>
        .login-contect {
            background-color: #f8f9fa;
        }
    
        .login-body {
            background-color: #fff; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)
        }
    
        .login {
            max-width: 400px; 
            margin: 0 auto;   
        }
    
        h5 {
            color: #333;   
            font-size: 24px; 
        }
    
        form {
        padding: 20px; 
        border-radius: 10px;
    }
    
        input[type="text"].mt-3 {
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
            background-color: #00bce4; /* Background color for the button */
            color: #fff;   /* Text color for the button */
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }
    
        .btn-success.submit:hover {
            background-color: #00bce4; /* Darker background color on hover */
        }
    </style>
    
<div style="margin: 2%"></div>
    <div class="login-contect py-5">
        <div class="container py-xl-5 py-3">
            <div class="login-body">
                <div class="login p-4 mx-auto">
                    <h5 class="text-center mb-4">Create Category</h5>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" id="categoryName" type="text" class="mt-3" placeholder="Update of category" name="name" value="{{ $category->name }}">
                        <button class="btn btn-success submit mt-4" type="submit">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
