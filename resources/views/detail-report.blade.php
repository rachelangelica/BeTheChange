@extends('layouts.layout')
<title>Detail Report</title>
<link href="{{ asset('assets/css/detail-report-style.css') }}" rel="stylesheet">
   
@section('content')
        <!-- BODY -->
        <div class="container">
          <div class="row-1">
              <img src="Picture1.png" alt="Poster" id="poster">
              <div class="text-content">
                <h1>{{$past_event->name}}</h1>
                <p><i class="fa-regular fa-calesndar-days"></i> {{ \Carbon\Carbon::parse($past_event->date)->format('d F Y') }}</p>
                <p><i class="fa-solid fa-location-dot"></i> {{$past_event->location}}</p>
              </div>
          </div>

          <div class="row-2">
              <div class="profile">
                <img src="Picture1.png" alt="Foto Profile" id="profile">       
                <h2>{{$past_event->name}}</h2>
              </div>
              <p>{{$past_event->description}}</p>
              <div class="images">
                <img src="Picture1.png" alt="pic1">
                <img src="Picture1.png" alt="pic2">
                <img src="Picture1.png" alt="pic3">
              </div>
          </div>

          <div class="row-3">
            <h2>Report Kegiatan</h2>
            <p>{{$past_event->report}}</p>
          </div>
          
          <div class="row-4">
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
@endsection