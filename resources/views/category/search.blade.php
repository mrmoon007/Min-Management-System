@extends('welcome')
@section('moon')
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL Number</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1
        @endphp
        @foreach ($searchItem as $item)
            <tr>
                <th scope="row">{{ $i++}} </th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->message}}</td>
                <td>
                    <a href="{{ route('edit1', ['id'=>$item->id]) }}" class="btn btn-success btn-small btn-sm">Edit</a>
                    <a href="{{ route('delete', ['id'=>$item->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>

            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
