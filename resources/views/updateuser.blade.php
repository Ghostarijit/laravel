@extends('master')
@section('contant')
<section class="vh-100">
   
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://media.istockphoto.com/id/1421035868/vector/game-designer-illustration-concept-on-white-background.jpg?s=612x612&w=0&k=20&c=UnZEEA7MhDkIsnDzix-ogK6SiV4ys_FtEPF3Ifg-WQc="
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action='/update' method="POST">
            @csrf
            <div class="form-outline mb-4">
            <input type="hidden" name="id" value="{{$item->id}}"id="form1Example13" class="form-control form-control-lg" />
          
          </div>
                <!-- name input -->
          <div class="form-outline mb-4">
            <input type="text" name="name" value="{{$item->name}}" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">name</label>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" value="{{$item->email}}" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

        <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">update</button>
        
        </form>
      </div>
    </div>
  </div>
</section>
@endsection