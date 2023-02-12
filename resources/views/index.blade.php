@section('title')
    Министерства
@endsection

<form action="{{ ('index') }}" method="GET">
{{--<form method="GET">--}}

    <input type="text" name="search" placeholder="Search..." value="{{ request()->search }}">
    <button type="submit">Поиск</button>
</form>

<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Описание</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($ministries as $ministry)
        <tr>
            <td>{{ $ministry->name }}</td>
            <td>{{ $ministry->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $ministries->appends(request()->except('page'))->links() }}
