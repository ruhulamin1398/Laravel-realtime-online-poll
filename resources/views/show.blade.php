@extends('layout.app');
@section('content')




<div class="container-fluid">

  <div class="row">



    <div class="col-1"></div>




    <div class="container-fluid col-xl-5 col-l-5 col-md-5 col-sm-12   rounded">
      <div class="card mb-4 shadow">


        <div class="card-header">
          <nav class="navbar navbar-dark ">
            <a class="navbar-brand  text-dark"> {{$poll->title}}</a>

          </nav>
        </div>


        <div class="card-body">
          <form action="{{route('votes.store')}}" method="POST" id="voteCreateForm">
            @csrf
            <input type="number" name="poll_id" value="{{$poll->id}}" id="pollId" hidden readonly>




            <table class="table table-striped table-hover table-sm">

              <tbody>
                @if($poll->multiple== 1)

                @foreach( $poll->options as $option)
                <tr>
                  <th scope="row">
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck{{$option->id}}" name="vote[]" value="{{$option->id}}" >
                      <label class="custom-control-label" for="customCheck{{$option->id}}">{{$option->name}}</label>
                    </div>
                  </th>

                </tr>
                @endforeach
                @else
                @foreach( $poll->options as $option)
                <tr>
                  <th scope="row">
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" class="custom-control-input" id="customCheck{{$option->id}}" name="vote[]" value="{{$option->id}}" >
                      <label class="custom-control-label" for="customCheck{{$option->id}}">{{$option->name}}</label>
                    </div>
                  </th>

                </tr>
                @endforeach
                @endif



              </tbody>

            </table>

            <button class="btn btn-success" type="button" id="voteButton"> Vote</button>
            <button class="btn btn-success" type="button" id="showResultButton"> Result</button>
            <!-- <button class="btn btn-success" type="button" id="ShareButton"> Share</button> -->


          </form>
        </div>
      </div>



    </div>


    <div class="container-fluid col-xl-5 col-l-5 col-md-5 col-sm-12   rounded">
      <div class="card mb-4 shadow" id="resultArea">


        <div class="card-header">
          <nav class="navbar navbar-dark ">
            <a class="navbar-brand  text-dark"> Result</a>
            <span id="totalVotes"></span>

          </nav>
        </div>


        <div class="card-body">
          <form action="{{route('votes.store')}}" method="POST" id="pollCreateForm">
            @csrf




            <table class="table table-hover">

              <tbody id="resultPreview" >
                @foreach( $poll->options as $option)
                <!-- <tr>
                  <th scope="row">
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-dark" style="width:40%"> {{$option->name}}</div>
                    </div>
                  </th>

                </tr> -->
                @endforeach




              </tbody>

            </table>



          </form>
        </div>
      </div>



    </div>



    <div class="col-1"></div>



  </div>
</div>


@endsection