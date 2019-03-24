@extends('layouts.app')
@section('main')


<user-list-from-backend users="{{ $users }}"></user-list-from-backend>
<user-list-from-request ></user-list-from-request>
<user-list-from-backend-and-local-api ></user-list-from-backend-and-local-api>

@endsection