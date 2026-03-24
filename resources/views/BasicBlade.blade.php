<h1>Blade All Operation</h1>

<p style="color:red">**How to Print anything  in Blade template></p>
{{ "Hello Chandan" }}<br>
{{ 2+5 }}<br>
{{ 5+98*5/9 }}<br>

<p style="color:red">**How to Use Html tag in Blade template</p>
{{ "<h1>Heyy I am chandan </h1>" }}  ye as it is print ho jayega

<!-- --to hum aise use krte hai -- -->
{!! "<h1> Heyy I am Chandan </h1>" !!}

<p style="color: red">Ab hum kaise variable bana print krte hai karege in Blade template</p>
@php
 $user ="chandan Thakur";
@endphp
{{ $user }}

<p style="color: blue;">For Multiple Array in blade template </p>
@php
 $names =["chandan","satyam","rahul"];
@endphp
<p>Simple list</p>
<ul>
    @foreach ($names as $n)
     <li>{{ $n }}</li>
    @endforeach
</ul>
<p>For Use <b>$Loop->index</b></p>
<ul>
    @foreach ($names as $n)
     <li>{{ $loop->index }}-{{ $n }}</li>
    @endforeach
</ul>
<p>For Use <b>$Loop->iteration</b></p>
<ul>
    @foreach ($names as $n)
     <li>{{ $loop->iteration }}-{{ $n }}</li>
    @endforeach
</ul>
<p>For Use <b>$Loop->Count</b></p>
<ul>
    @foreach ($names as $n)
     <li>{{ $loop->count }}-{{ $n }}</li>
    @endforeach
</ul>
<p>For Use <b>$Loop->first</b></p>
<ul>
    @foreach ($names as $n)
    @if($loop->first)
       <li style="color:orange">{{ $n }}</li>
    @else
      <li>{{ $n }}</li>
    @endif
    @endforeach
</ul>

<p>For Use <b>$Loop->last</b></p>
<ul>
    @foreach ($names as $n)
    @if($loop->first)
       <li style="color:orange">{{ $n }}</li>
    @elseif($loop->last)
      <li style="color:green">{{ $n }}</li>
    @else
     <li>{{ $n }}</li>
    @endif
    @endforeach
</ul>


<p>For Use <b>$Loop->Even & odd</b></p>
@php
  $name =["chandan","satyam","rahul","Prashant","purushootam","Kunal"];
@endphp
<ul>
    @foreach ($name as $n)
    @if($loop->even)
       <li style="color:red">{{ $n }}</li>
    @elseif($loop->odd)
      <li style="color:blue">{{ $n }}</li>
    @else
     <li>{{ $n }}</li>
    @endif
    @endforeach
</ul>