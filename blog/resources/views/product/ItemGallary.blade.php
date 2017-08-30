  @extends('layouts.addItem')
  @section('title','Edit Collar')
  @section('body')
  <style>
    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;

    }
  .CRUD a {
      float: left;
      padding-right: 20px;
  }

  .CRUD {
      padding: 0 30px;
  }

  .CRUD i {
      font-size: 22px;
  }


  </style>

  <body>
  <br>
  <div class="bak">
    <a href="/product/{{$product_id}}">

  <i class="fa fa-arrow-left " aria-hidden="true"></i>
    </a>
  </div>

    @foreach($items as $item)
      <br>
      @yield('print')
    <div class="gallery">
      <a target="_blank" href="/storage/images/collar/{{$item->pattern}}">
          
        <img src="/storage/images/collar/{{$item->pattern}}"
         alt="{{$item->pattern}}" width="300" height="200" value="" >
      </a>
      <div class="desc">Price Rs. {{$item->rate}}</div>
      <div class="desc">Description. {{$item->desc}}</div>
  <div class=" CRUD ">

      <a href="
      {{route('collar.edit',['id'=>$item->front_id,'collar'=> $item->id])}}

      "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
      <form action="

      {{route('collar.destroy',['id'=>$item->front_id,'collar'=> $item->id])}}

      "  id="formdel{{$item->id}}" method="POST">
        <i  class="fa fa-trash-o dlt" id="{{$item->id}}" aria-hidden="true" >  </i>
        {{csrf_field()}}
        {{method_field('DELETE')}}
      </form>
  </div>

    </div>
    @endforeach

    @endsection
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script >

      $( document ).ready(function() {
        console.log( "ready!" );
        $(".dlt").click(function(){
          var id = $(this).attr('id');
          alert('Are You Sure You Want To Delete ?');
          $("#formdel"+id).submit();
        });
      });

    </script>
