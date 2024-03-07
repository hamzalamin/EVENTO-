    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <x-Admin-layout>
        <style>
            /* Custom border style for the cards */
            .col {
                border: 1px solid #000; /* Black border */
                border-radius: 10px; 
                padding: 9px; 
             
                margin-top: 30px;
            }

            /* Flexbox layout for the icon container */
            .icon-container {
                display: flex; /* Use flexbox */
                margin-top: 10px; /* Add margin at the top */
            }
            
            @media (min-width: 768px) {
                .col-lg-4 {
                    flex: 0 0 33.33%;
                    max-width: 33.33%;
                }
            }
        </style>    
        <a href="{{ route('Categories') }}">
            <img src="{{ asset('helps/images/t4.png') }}" class="mx-3 mt-3" style="width: 4%" alt="">
        </a>
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
                @foreach ($categorys as $category)
                <div class="col col-lg-4">
                    <div class="p-3">{{ $category->name }}</div>
                    <div class="icon-container">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img src="{{ asset('helps/images/t2.png') }}" style="width: 16%; margin-left:80%" alt="">
                            </button>
                        </form>
                        <a href="{{ route('categories.edit', $category->id) }}">
                            <img src="{{ asset('helps/images/t3.png') }}" style="width: 16%; margin-left:12%" alt="">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Display pagination links -->
        {{ $categorys->links() }}
    </x-Admin-layout>
