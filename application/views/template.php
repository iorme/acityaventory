@layout('layout')
@section('title')
  {{$title}}
@endsection

@section('header')
  @include('template/header')
@endsection
@section('subheader')
  {{$subheader}}    
@endsection

@section('main')
  @include($main)
@endsection
@section('footer')
  @include('template/footer')
@endsection