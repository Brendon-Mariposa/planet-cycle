<style>
  
</style>

@extends('layouts.app')

@section('content')

<div class="flex flex-wrap items-center">
  <?php
    echo do_shortcode("[pods name='Inventory' template='Inventory Category' limit='6' pagination='true' where='category.name=\"motorcycle\"' ]"); 
  ?>
</div>

@endsection