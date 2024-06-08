@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="header-wrapper">
        <div class="header-title">
            <span>Primary</span>
            <span>Dashboard</span>
        </div>
        <div class="user-info">
            <div class="search">
                <i class="bx bx-search-alt"></i>
                <input type="text" placeholder="Search" />
            </div>
            <img src="{{ asset('image/government64px.png') }}" alt="" />
        </div>
    </div>
    <div class="dashboard-widgets">
        <div class="widget">
            <h3>Total Petisi</h3>
            <p>{{ $totalPetisi }}</p>
        </div>
        <!-- Add more widgets as needed -->
    </div>
@endsection
