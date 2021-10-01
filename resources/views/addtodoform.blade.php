 <form method="POST" action="{{url('/add_todo/')}}" enctype="multipart/form-data">
    @csrf
        
        <div >
            <input class="input" type="text" placeholder="Todo Detail" name ="todo" required>
          </div>
            
            <button type="submit" >Add Todo</button>

        </div>
</form>