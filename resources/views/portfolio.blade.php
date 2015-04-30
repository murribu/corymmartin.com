@extends('layouts.master')

@section('page', 'index')

@section('content')
    <ul id="portfolioCards">
      <?php foreach($entries as $entry) :?>
        <li>
          <h3><?php echo $entry['title']?> (<?php echo $entry['when']?>)</h3>
          <p><?php echo $entry['html']?></p>
        </li>
      <?php endforeach?>
    </ul>
@stop
