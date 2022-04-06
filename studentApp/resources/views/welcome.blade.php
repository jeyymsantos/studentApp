@extends('layouts.master')

@section('title')
    <title> Welcome to Student System </title>
@endsection

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Course</th>
      <th scope="col">Student Address</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @foreach($student as $row)
    <tr>
      <th scope="row"> {{ $row->id}} </th>
      <td>{{ $row->studName}}</td>
      <td>{{ $row->studCourse}}</td>
      <td>{{ $row->studCity}}, {{ $row->studProvince}}, {{ $row->studRegion}} </td>
      <td>
          <button class="btn btn-primary">Update</button>
      </td>
      <td>
          <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection