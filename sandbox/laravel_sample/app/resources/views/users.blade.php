<h1>Hi users</h1>

{{var_dump($zzz["users"])}}

<div>
@foreach ($zzz["users"] as $user)
    <section>
        {{$user->id}}-{{$user->name}}
    </section>    
    <details>
        @foreach ($user->requests as $req)
           {{$req->what_req}} 
        @endforeach
    </details>
@endforeach
</div>

<pre>
    <?php var_dump($zzz) ?>
</pre>

{{-- <table>
@foreach($zzz as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->id}}</td>
</tr>    
@endforeach --}}

<pre>
    <?php var_dump($user ?? "") ?>
</pre>
</table>