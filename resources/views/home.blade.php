@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
@foreach ($categories as $category)
<button type="button" class="btn btn-primary">{{$category->name}}</button>
<!-- <buton></button> -->
    </br> 
    @foreach ($category->subCategories as $subCategory)
        <!-- {{$subCategory->name}} -->
    @endforeach
@endforeach
    
</div>
@endsection
