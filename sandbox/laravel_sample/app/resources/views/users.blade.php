<h1>Hi users</h1>

<table>
@foreach($zzz as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->id}}</td>
</tr>    
@endforeach
</table>