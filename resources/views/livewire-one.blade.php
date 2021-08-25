@extends('layouts.app')

@section('content')
  <h2>Livewire One</h2>

  <livewire:first-component />

  <livewire:second />

  <div class="bg-white mt-6 p-4">
    <livewire:message />
  </div>

@endsection
