@extends('layouts.app')

@section('content')
    <div class="container main-content">

      @foreach($objAllAdvertisers as $advertiser)
          {{ $advertiser->advertiserid }} <br />
      @endforeach
    </div>
    {{--<script src="{{ asset('js/advertiser/advertiser.js') }}"></script>--}}
@endsection
