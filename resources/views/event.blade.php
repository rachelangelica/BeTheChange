@extends('layouts.layout')
<title>{{ $event->name }}</title>
<link rel="stylesheet" href="{{ asset('assets/css/event-style.css') }}">

@section('content')
    <!-- BODY -->
    <div class="container">
        <div class="row-1">
            <img src="{{ asset('images/' . $event->poster_image) }}" alt="Poster" id="poster">
            <div class="text-content">
                <h1>{{ $event->name }}</h1>
                <p><i class="fa-regular fa-calendar-days"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</p>
                <p><i class="fa-solid fa-location-dot"></i> {{ $event->location }}</p>
                <a href="#" class="button1">Jadi Relawan</a>
                <a href="#" class="button2">Kontak</a>
            </div>
        </div>

        <div class="row-2">
            <div class="profile">
                <img src="{{ asset('images/' . $event->organizer_image) }}" alt="Foto Profile" id="profile">       
                <h2>{{ $event->organizer_name }}</h2>
            </div>
            <p>{{ $event->description }}</p>
        </div>

        <div class="row-3">
            <h2>Relawan ({{ $volunteers->count() }} orang)</h2>
            <div class="volunteer-container">
                @foreach($volunteers as $volunteer)
                <div class="volunteer">
                    <img src="{{ asset('images/' . $volunteer->image) }}" alt="{{ $volunteer->name }}">
                    <p>{{ $volunteer->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection