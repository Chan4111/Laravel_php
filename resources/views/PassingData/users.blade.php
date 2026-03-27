<h1>Passing Data Router To View</h1>


<!--  for Multiple Array -->
  @foreach ($user as $id=>$u )
  <h3>{{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}</h3>
  @endforeach