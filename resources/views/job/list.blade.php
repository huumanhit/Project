@extends('layout.master')

@section('title', 'List of Job')

@section('content')
<h2>List of Job</h2>
<p><a href="/create/job" class="btn btn-primary">Create Job</a></p>
<div class="box-search">
  <form action="/index" method="get" id="seachForm">
  <div class="autocomplete" style="width:300px;">
      Tìm kiếm thông tin:<input type="text" name="namework" id="searchName" list="search"
        placeholder="Tim theo tieu de name..." value="{{$namework}}" />
      <div class="autocomplete-items"></div>
    </div>
    <button type="submit">Tìm kiếm</button>
  </form>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">recruitment</th>
      <!-- <th scope="col">namework</th> -->
      <th scope="col"><a href="/index?sortNamework={{ $sortNamework }}">namework</a></th>
      <th scope="col"><a href="/index?sortLevel={{ $sortLevel }}">Level</a></th>
      <th scope="col">age</th>
      <th scope="col">quantity</th>
      <th scope="col">work</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">Crud</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jobs as $job)
    <tr>
      <td>{{ $job->id}}</td>
      <td>{{ $job->recruitment }}</td>
      <td><a title="{{ $job->namework }}">{{ $job->namework }}</a></td>
      <td>{{ $job->level }}</td>
      <td>{{ $job->age }}</td>
      <td>{{ $job->quantity }}</td>
      <td>{{ $job->work }}</td>
      <td>{{ $job->phone }}</td>
      <td>{{ $job->email }}</td>
      <td>{{ $job->address }}</td>
      <td><a href="/admin/jobs/edit/{{ $job->id }}">Edit</a> | <a
          href="/admin/jobs/delete/{{ $job->id }}">Delete</a> |
        <a href="/admin/jobs/detail/{{ $job->id }}">View</a>
      </td>
    </tr>
  </tbody>
    @endforeach
</table>
</body>
</html>

@stop