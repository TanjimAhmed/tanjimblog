@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam repudiandae quos corrupti dicta modi facere rem soluta tempore dolore, vitae sequi illo nostrum odit assumenda, ea placeat dolorem. Accusantium perferendis placeat delectus aperiam quas corporis ducimus, velit quia similique repellat porro sunt, earum eaque saepe repudiandae quod sit voluptates eligendi.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ipsam fugit accusamus provident eaque. Enim voluptate corrupti nihil recusandae aut, eaque, esse corporis, quasi vitae dignissimos, repudiandae beatae nesciunt adipisci.</p>
@endsection

@section('sidebar')
@parent
  <p>This is appended Sidebar from Home.</p>
@endsection
