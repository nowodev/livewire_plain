@extends('layouts.app')

@section('content')
  <h2 class="text-4xl">Livewire One</h2>

  <livewire:counter/>

  @livewire('search')

  <livewire:show-post :post="1"/>
  <livewire:show-post :post="2"/>
  <livewire:show-post :post="3"/>

  <livewire:first-component/>

  <livewire:second/>

  <div class="bg-white mt-6 p-4">
    <livewire:message/>
  </div>
@endsection
