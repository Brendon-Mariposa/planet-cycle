{{--
  Template Name: Warrenty Pricing
--}}

<style>

</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <header class="flex flex-wrap bg-color-d8d8d8">
    <h1 class="w-11/12 border-t-2 text-4xl mx-auto pt-5 pb-56 entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>

<div class="flex flex-wrap -mt-48">
	<div class="flex flex-wrap w-11/12 mx-auto">
        <div class="flex flex-wrap w-8/12 bg-white mb-8 mx-auto shadow-lg rounded">
			<h4 class="w-full bg-color-222222 text-lg text-white p-3 uppercase">Apply for Credit with Planet Cycle</h4>
            <div class="w-full p-8">
                <?php echo do_shortcode("[wpforms id='316']"); ?>
            </div>
        </div>
        <div class="w-3/12 mx-auto">
		    <div class="flex flex-wrap bg-white shadow-lg rounded">
			    <h4 class="w-full bg-color-222222 text-lg text-white p-3 uppercase">CALL US IF YOU HAVE QUESTIONS</h4>
			    <p class="w-8/12 text-sm text-center font-bold uppercase p-2 my-5 mx-auto">Sales: (912) 739-1110</p>
		    </div>
	</div>
	</div>
</div>

  @endwhile
@endsection