@extends('components.profile.page-profile')


@section('content')
<ul>
    @foreach (auth()->user()->notifications as $notification)
        <li>
            {{ $notification->data['message'] }} 
            <span>{{ $notification->created_at->diffForHumans() }}</span>
        </li>
    @endforeach
</ul>

@endsection
