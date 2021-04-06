<html>
<head>
    <title>Gym</title>


</head>
    <body>
    <style>
        body{
            background-color: #cbd5e0;
        }
        span{
            color:#a0aec0;
            display: inline-block;
            width: 100px;
            background-color: #4a5568;
            margin-bottom: 3px;
            margin-left: 3px;
            padding: 10px;
        }
    </style>


        <h3>GYM MEMBERSHIP SYSTEM</h3>

        <form method="POST">

            @csrf

            <input placeholder="Firstname"
                   name="fname"/>
            <input placeholder="Lastname"
                   name="lname"/>
            <input placeholder="Birthdate"
                   name="bdate"/>
            <input placeholder="Expiredate"
                   name="edate"/>
            <input placeholder="Profile picture"
                   name="ppicture"/>

            <button type="submit">Add member</button>

        </form>
        <h3>Member List</h3>

        <table border="1">
           <tr>
               <td><span>Id</span></td>
               <td><span>First Name</span></td>
               <td><span>Last Name</span></td>
               <td><span>Birthdate</span></td>
               <td><span>Expire Date</span></td>
               <td><span>Operation</span></td>
               <td><span>Operation</span></td>
           </tr>
            @foreach($members as $member)
            <tr>
                <td>{{$member['id']}}</td>
                <td>{{$member['fname']}}</td>
                <td>{{$member['lname']}}</td>
                <td>{{$member['bdate']}}</td>
                <td>{{$member['edate']}}</td>
                <td><a href={{"delete/".$member['id']}}>Delete</a>
                </td>
                <td><a href={{"edit/".$member['id']}}>Edit</a></td>
            </tr>
                @endforeach

        </table>

    </body>
</html>
