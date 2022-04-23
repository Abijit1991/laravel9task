<!DOCTYPE html>
<html>
<head>
    <title>Usertype{{ $usertype }} - Home</title>
    <style>
        .center {
            margin: auto;
            width: 60%;
        }
    </style>
</head>
<body>

<div class="center">
    <table class="center" border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th colspan="3">Type: Usertype{{ $usertype }} (Total User: {{ $users->count() }})</th>
        </tr>
        <tr>
            <th width="5%">S.No.</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

        @php $sno = 1; @endphp
        @foreach($users as $user)
            <tr>
                <td>{{ $sno }} @php $sno++; @endphp</td>
                <td>{{ $user->name }}</td>
                <td>
                    Usertype{{ $user->type }}
                </td>
            </tr>
        @endforeach
    </table>
</div>

<button><a href="{{ route('usertype'.$usertype.'.logout') }}"> Logout</a></button>

</body>
</html>
