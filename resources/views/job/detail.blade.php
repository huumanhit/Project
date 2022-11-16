@extends('layout.master')

@section('title', 'List of Job')

@section('content')

<h2>Job detail</h2>
<ul>
  <li>ID: {{ $job[0]->id }}</li>
  <li>recruitment: {{ $job[0]->recruitment }}</li>
  <li>namework: {{ $job[0]->namework }}</li>
  <li>level: {{ $job[0]->level }}</li>
  <li>age: {{$job[0]->age }}</li>
  <li>quantity: {{ $job[0]->quantity }}</li>
  <li>work: {{ $job[0]->work }}</li>
  <li>phone: {{$job[0]->phone }}</li>
  <li>email: {{ $job[0]->email }}</li>
  <li>address: {{$job[0]->address }}</li>
</ul>

@stop
