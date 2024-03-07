<form action="{{ route('update_events', $event->id) }}" method="POST">
    @csrf
   
    <!-- Input fields to edit event data -->
    <input type="text" name="title" value="{{ $event->title }}" />
    <input type="text" name="description" value="{{ $event->description }}" />
    <input type="date" name="date" value="{{ $event->date }}" />
    <input type="text" name="location" value="{{ $event->location }}" />
    <select id="category_id" name="category_id" class="mt-3" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="number" name="places_available" value="{{ $event->places_available }}" />

    <!-- Add other input fields as needed -->
    <button type="submit">Update</button>
</form>