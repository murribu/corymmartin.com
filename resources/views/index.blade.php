@extends('layouts.master')

@section('page', 'index')

@section('content')
    <ul id="cards">
      <?php foreach($entries as $entry) :?>
        <li>
          <h3><?php echo $entry['title']?></h3>
          <p><?php echo $entry['body']?></p>
        </li>
      <?php endforeach?>
    </ul>
@stop
