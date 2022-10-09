@extends('layouts.app')

@section('content')
    <video-chat :allusers="{{ $users }}" :authUserId="{{ auth()->id() }}" turn_url="turn:openrelay.metered.ca:80"
        turn_username="openrelayproject" turn_credential="openrelayproject" />
@endsection
