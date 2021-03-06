@extends('layouts.app_administrator')

@section('title')
  Destinations
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('breadcrumbs')
  <ol class="breadcrumb slim-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Destinations</li>
  </ol>
@endsection

@section('clientAttr')
  ng-controller="Destination"
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/destinations.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/have/destinations-route.js') }}"></script>
@endsection

@section('content')
  <div class="col-md-12">
      <ng-view $autoscroll="false"></ng-view>
  </div>
@endsection


@section('modal')
  {{-- modal form --}}
  @include('site.admin.destinations.create')
  {{-- modal question --}}
  @include('site.admin.destinations.delete')
@endsection
