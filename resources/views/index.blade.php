@extends('layout.app');
@section('content')




  <div class="container mt-4">

    <div class="row">



    <div class="col-3"></div>


    <div class="col-xl-6 col-l-6 col-md-6 col-sm-12  bg-light p-md-4 p-lg-4  rounded">


    <form action="{{route('polls.store')}}" method="POST" id="pollCreateForm" >
        @csrf
        
        <div class="input-group mb-3 input-group-lg">
          <input type="text" class="form-control"  name="title" placeholder="Type your question here" required >
        </div>

        <div >
          <input class=" form-control d-flex mt-4 "  name="options[]" placeholder="Enter your option" required >
        </div>
        <div >
          <input class=" form-control d-flex mt-2 "  name="options[]" placeholder="Enter your option"  required>
        </div>

        <div id="initRow">
          <input class=" form-control d-flex mt-2 "  name="options[]" placeholder="Enter your option" >
        </div>
        <br><br>
    
        
        <select name="chacking" class="custom-select">
           <option selected="selected" value="1">IP Duplication Checking</option>
          <option value="0">No Duplication Checking</option>
        </select>
        <br>   <br>
      
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch1" name="multiple">
          <label class="custom-control-label" for="switch1">Allow multiple poll answers</label>
        </div>
<br>
        <button type="submit" class="btn btn-primary d-flex flex-right " id= "pollCreateSubmit" >Submit</button>
      </form>


    </div>


    <div class="col-3"></div>



    </div>
  </div>


@endsection