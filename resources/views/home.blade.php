@extends('layout')
@section('content')
@foreach ($dsc as $ds)
<section class="ftco-services ftco-no-pb">
   
    <div class="container-wrap">
        <div class="row no-gutters">
  <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
    <div class="media block-6 d-block text-center">
      <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-teacher"></span>
      </div>   
          
      
      <div class="media-body p-2 mt-3">
        <h3 class="heading">{{$ds->title}}</h3>
      <span>{{$ds->created_at}}</span>
      <p>{{$ds->body}}</p>
      </div>
      
    </div>      
  </div>
  
</div>
    </div>
  
</section>
@endforeach
@endsection