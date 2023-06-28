@extends('Admin_cp.Layout.master')
@section('title','')
@section('content')

@endsection
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(isset ($errors) && count($errors) > 0)

        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}')
        @endforeach

        @endif
    </script>
@endsection
