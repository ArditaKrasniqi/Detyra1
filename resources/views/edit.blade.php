<html>
<head>
    <title>Edit Gym Member</title>
    <style>
        body{
            background-color: #cbd5e0;
        }
        h1{
            text-align: center;
            color: darkblue;
        }

        button{
            width: 10%;
            background-color: #4a5568;
            color: white;
            padding: 10px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        

        input[type=text] {
            padding: 10px;
            width: 17%;
            border-radius:10px;
            border:0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);


        }
        </style>
</head>
<body>
<h1>Update Gym Member</h1>
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
</body>
</html>
