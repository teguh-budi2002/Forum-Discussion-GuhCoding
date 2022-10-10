@extends('app')
@section('content')
<div class="{{ request()->route()->named('home.main') ? '' : 'hidden' }}">
   <div id="home-main">
       <home-main></home-main>
   </div>
</div>
@endsection
