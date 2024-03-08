@include('BaseCopy')
@include('NavBar')
<div style="margin: 5%;"></div>
@foreach($userReservations as $reservation)
    <div style="border: 2px solid #333; border-radius: 10px; padding: 20px; margin-bottom: 20px; margin:10px;">
        <!-- Display reservation details as needed -->
        <h2 style="color: #333;">Event Ticket</h2>
        <p><strong>User:</strong> {{ $reservation->user->name }}</p>
        <p><strong>Event:</strong> {{ $reservation->event->title }}</p>
        
       @role('Organisateur')
        <p><strong>Accepted:</strong> {{ $reservation->accept ? 'Yes' : 'No' }}</p>
        
        @if (!$reservation->accept)
            <form action="{{ route('confirm.ticket', $reservation->id) }}" method="POST">
                @csrf
                @method('post')
                <input type="hidden" name="accept" value="{{ $reservation->accept }}">
                <button type="submit"><img src="{{ asset('helps/images/t.png') }}" style="width: 6%;" alt=""></button>
            </form>
        @endif
        @endrole
        <form class="" action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
            @csrf
            @method('post')
            <button type="submit"><img src="{{ asset('helps/images/t2.png') }}" style="width: 6%; margin-left:-92%;" alt=""></button>
        </form>
        <hr style="border-top: 2px solid #333;">
        <p style="font-size: 14px; color: #666;">Thank you for reserving a ticket to our event! We look forward to seeing you there.</p>
    </div>
@endforeach
<div style="margin: 5%;"></div>

@include('footer')