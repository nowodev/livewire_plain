@extends('layouts.app')

@section('content')
  <h2>Livewire One</h2>

  @livewire('search')

  <livewire:show-post :post="1" />

  <livewire:first-component />

  <livewire:second />

  <div class="bg-white mt-6 p-4">
    <livewire:message />
  </div>

@endsection
