{{--
  Template Name: Homepage
--}}

<style>
  .home-page-hero {
    background-image: url("https://res.cloudinary.com/mariposa/image/upload/b_black,o_90/v1565214483/Planet%20Cycle/teryxxstatic-kawasaki-offer.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  }
</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="flex flex-wrap home-page-hero">
      <h1 class="w-10/12 text-4xl text-white text-center md:text-right font-semibold mx-auto pt-20 md:pt-72 pb-8 md:pb-16"><span class="hidden md:inline">(912)-739-1110</span> <br><span class="text-xl font-thin hidden md:inline">South Georgia’s #1 Volume Dealer</span></h1>
    </div>

    <div class="flex flex-wrap">
      <div class="w-full sm:w-1/3 bg-gray-200 text-center py-5">
        <i class="text-5xl text-color-33cc00 fab fa-creative-commons-nc"></i>
        <p class="text-base md:text-xl font-thin pt-2">No Dealer Fees</p>
      </div>
      <div class="w-full sm:w-1/3 bg-gray-300 text-center py-5">
        <i class="text-5xl text-color-33cc00 fas fa-user-tag"></i>
        <p class="text-base md:text-xl font-thin pt-2">$250 Military Discount</p>
      </div>
      <div class="w-full sm:w-1/3 bg-gray-200 text-center py-5">
        <i class="text-5xl text-color-33cc00 fas fa-credit-card"></i>
        <p class="text-base md:text-xl font-thin pt-2">GATE card accepted</p>
      </div>
    </div>

    <div class="flex flex-wrap w-10/12 py-8 mx-auto">
      <iframe class="w-11/12 max-w-5xl h-iframe text-center shadow-lg" style="margin:auto; background-repeat: no-repeat;" src="https://www.kawasakiadplanner.com/web-banner/a4ba7c4d-1eef-493d-b6ce-a84d8d32c866" frameborder="0"></iframe>
    </div>

<div class="flex flex-wrap">
  <div class="w-11/12 md:w-5/6 bg-color-2a2a2a text-white mx-auto p-3">
    <h3 class="text-2xl font-thin">Featured Listings</h3>
  </div>
</div>

<div class="flex flex-wrap">
  <div class="w-11/12 md:w-5/6 bg-color-33cc00 mx-auto p-3 text-center">
    <h3 class="text-3xl font-thin">IMPORTANT NOTE</h3>
    <p>Due to the current situation we do not have any of these models on the showroom floor. <u>Call us for more details.</u></p>
  </div>
</div>

<div class="flex flex-wrap items-center">
  <?php echo do_shortcode("[pods name='Inventory' template='Inventory Homepage' limit='7' ]"); ?>
  <a href="/inventory/" class="flex flex-wrap w-11/12 md:w-1/5 items-center bg-color-33cc00 hover:bg-color-222222 h-16 mx-auto text-base font-bold uppercase hover:cursor-pointer">
    <p class="w-full text-white text-center mx-auto">View more inventory</p>
  </a>
</div>

  @endwhile
@endsection
