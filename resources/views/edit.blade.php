<h1>Update Member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
   <input type="text" name="id" value={{$data['id']}}> <br> <br>
    <input type="text" name="fname" value={{$data['fname']}}> <br> <br>
    <input type="text" name="lname" value={{$data['lname']}}> <br> <br>
    <input type="text" name="bdate" value={{$data['bdate']}}> <br> <br>
    <input type="text" name="edate" value={{$data['edate']}}> <br> <br>
    <input type="text" name="ppicture value={{$data['ppicture']}}"> <br> <br>
    <button type="submit">Update</button>
</form>
