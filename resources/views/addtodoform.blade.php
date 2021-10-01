 <form method="POST" action="{{url('/add_todo/')}}" enctype="multipart/form-data">
    @csrf
        
        <div >
            <input class="input" type="text" placeholder="Todo Detail" name ="todo" required> <br>
            <label>Add file:</label> 
            <input type="file" name="picture">
          </div>
            
            <button type="submit" >Add Todo</button>

        </div>
</form>