@extends('app')
@section('content')
<div class="{{ request()->route()->named('home.main') ? '' : 'hidden' }}">
   <div id="home-main-nav">
       <home-main-nav></home-main-nav>
   </div>
</div>
@endsection
