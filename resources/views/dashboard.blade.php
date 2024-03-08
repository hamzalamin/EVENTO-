@include('NavBar')
        

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .max-w-7xl {
        max-width: 80rem;
        margin-left: auto;
        margin-right: auto;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .bg-white {
        background-color: #fff;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .text-gray-900 {
        color: #333;
    }
</style>
</head>
<body>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("WELCOME! You're logged in!") }}
            </div>
        </div>
    </div>
</div>
</body>
</html>


