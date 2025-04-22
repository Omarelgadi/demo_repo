<h1> welcome  {{$myname}} {{$mylastname}}</h1>
@if(strlen($myname)>4)
<p>the name is too long</p>
@elseif(strlen($myname)<4)
<p>the name is too short</p>
@else
<p>the name is just right</p> 
@endif