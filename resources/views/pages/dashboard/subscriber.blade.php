<h4>Subscriber</h4>
<table>
    <thead>
    <tr>
        <td>No</td>
        <td>Email</td>
    </tr>
    </thead>
    <tbody>
    @foreach($subscribers as $subscriber)
        <tr>
            <td>{{ $subscriber->id }}</td>
            <td>{{ $subscriber->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>