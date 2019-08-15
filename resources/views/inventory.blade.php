{{--
  Template Name: Inventory
--}}

<style>
  
</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="flex flex-wrap items-center">
    <?php echo do_shortcode("[pods name='Inventory' template='Inventory Homepage' limit='8' pagination='true' ]"); ?>
    </div>

  @endwhile
@endsection