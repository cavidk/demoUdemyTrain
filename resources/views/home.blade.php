@extends('layouts.master');

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            {{-- @foreach($users as $user)
                 <div class="col-md-3">
                     <div class="card">
                         <div class="card-body">
                             <h4>{{$user->name}}</h4>
                             <p>{{$user->email}}</p>
                             <p>{{$user->address->street_address}}</p>
                         </div>
                     </div>
                 </div>
             @endforeach--}}

            {{--for address --}}
            @foreach($address as $street_address)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{$street_address->user->name}}</h4>
                            <p>{{$street_address->user->email}}</p>
                            <p>{{$street_address->street_address}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
