<form method="POST" action="{{url('/edit/'.$datas->id)}}" enctype="multipart/form-data">
    @csrf
        
        <div >
            <input class="input" type="text" placeholder="Todo Detail" name ="todo" value="{{$datas->detail}}" required>
          </div>
            
            <button type="submit" >Update Todo</button>

        </div>
</form>