<style>
.expand-menu > .menu-item {
  padding: 0px;
}
.menu-item {
  font-size: .68rem;
  padding: 0 0 0 0rem;
  height: 100%;
}
.menu-item a {
  padding: 1.2rem 1rem 1.2rem 1rem;
}
.menu-item a:hover {
  background-color: #da5454;
}
.sub-menu {
  background-color: #da5454;
  transform: scaleX(0.0001);
  transition: .2s;
  position: absolute;
  opacity: 0;
  padding: 5px;
  margin-top: 18px;
  z-index:999;
}
.sub-menu a {
  font-size: .75rem;
}
.expand-menu {
  transform: scaleX(1);
  transition: .2s;
  opacity: 1;
}
.expand-menu li:hover {
  background-color: #FF6347;
}
.expand-menu a:hover {
  background-color: transparent;
}
.expand-menu .menu-item a {
  padding: 0rem 1rem 0rem 1rem;
}
li.current_page_item a{
    background: #da5454;
}
#menu-mobile-menu .menu-item {
  font-size: 1.8rem;
  color: #fff;
  text-align: center;
  padding-bottom: 30px;
}
.header-search {
  border: 1px solid #555555;
  background-color: #3b3c3e;
  color: #afafaf;
}
#breadcrumbs {
  font-size: 10px;
}
#breadcrumbs a {
  font-size: 15px;
}
.pods-pagination-advanced {
  width: 100%;
  text-align: center;
}
.pods-pagination-number {
  padding: 5px 8px 5px 8px;
  border-width: 2px;
}
.pods-pagination-number:hover {
  background-color: #e2e8f0; 
}
.pods-pagination-current {
  background-color: #e2e8f0;
}
.home #breadcrumbs {
  display: none;
}
.updated {
  display: none;
}
.byline {
  display: none;
}
@media(max-width:900px){
.menu-item {
  font-size: .68rem;
}
.menu-item a {
  padding: .7rem .5rem .7rem .5rem;
}
}
@media(min-width:1200px){
.menu-item {
  font-size: .9rem;
}
}
</style>

<header class="bg-color-2a2a2a banner">
  <div class="flex flex-wrap items-center">
    <a class="brand" href="{{ home_url('/') }}">
    <div class="w-1/2 md:w-1/3">
      <div class="w-56 mx-auto p-3">{!! the_custom_logo() !!}</div>
    </div>
    </a>
    <nav class="hidden md:flex flex-wrap w-full ml-auto md:w-1/2 text-gray-300 font-semibold">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'flex flex-wrap', 'menu_class' => 'flex flex-wrap uppercase']) !!}
      @endif
    </nav>
    <a id="mobile-menu" class="md:hidden w-1/2 text-white text-right pr-8 sm:pr-16">
      <div id="mobile-menu-button" class="mobile-menu-button">
        <i class="text-3xl md:text-5xl fas fa-bars"></i>
      </div>
    </a>
  </div>
  <div class="flex flex-wrap items-center bg-color-222222 py-1">
    <div class="flex flex-wrap w-full md:w-11/12 mx-auto">
      <form class="hidden lg:block pr-3 m-0 text-center mr-auto" action="/" method="get">
        <input class="px-2 header-search" type="text" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>" />
      </form>
      <a href="tel:9127391110" class="text-sm mx-auto lg:mx-0 lg:ml-auto text-center md:text-right"><span class="bg-gray-200 py-2 px-4">Sales: (912) 739-1110</span></a>
    </div>
  </div>

  <?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs" class="bg-color-d8d8d8 text-color-888888 font-thin uppercase py-5 px-24">','</p>');} ?>

  <div class="bg-color-2a2a2a h-screen overflow-scroll mobile-menu">
    <div class="flex flex-wrap items-center">
      <a class="brand" href="{{ home_url('/') }}">
        <div class="w-1/2 md:w-1/3">
          <div class="w-56 mx-auto p-3">{!! the_custom_logo() !!}</div>
        </div>
      </a>
      <a id="close-mobile-menu" class="md:hidden w-1/2 text-white text-right pr-8 sm:pr-16 close-menu">
        <div>
          <i class="text-3xl md:text-5xl fas fa-times"></i>
        </div>
      </a>
    </div>
    <div class="w-5/6 mx-auto flex flex-wrap pt-8 mobile-menu-list">
      @if (has_nav_menu('mobile_menu'))
        {!! wp_nav_menu(['theme_location' => 'mobile_menu', 'container_class' => 'w-full', 'menu_class' => 'w-full']) !!}
      @endif
    </div>
  </div>
</header>
