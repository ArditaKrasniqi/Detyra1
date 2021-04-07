<html>
<head>
    <title>Gym</title>


</head>
    <body>
    <style>
        body{
            background-color: #cbd5e0;
            background-image: url("/public/images/gym_background.jpg");
        }
        span{
            color:#a0aec0;
            display: inline-block;
            width: 160px;
            background-color: #4a5568;
            margin-bottom: 3px;
            margin-left: 3px;
            padding: 10px;
            text-align: center;
        }
        h2,h3{
            color: darkblue;
            font-family: Geneva;
            text-align: center;

        }

        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #4a5568 ;
            opacity: 1;
            text-align: center;/* Firefox */
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


        <h2>GYM MEMBERSHIP SYSTEM</h2>

        <form method="POST">

            @csrf

            <input type="text" placeholder="Firstname"
                   name="fname"/>
            <input type="text" placeholder="Lastname"
                   name="lname"/>
            <input type="text" placeholder="Birthdate"
                   name="bdate"/>
            <input type="text" placeholder="Expiredate"
                   name="edate"/>
            <input type="text" placeholder="Profile picture"
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
