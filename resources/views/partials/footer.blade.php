<style>
footer .widget {
  margin: 0 auto 40px auto;
}
footer .widget h3 {
  font-size: 20px;
  font-weight: 300;
  padding: 0 0 15px 0;
  text-transform: uppercase;
}
footer .widget p {
  color: #888888;
}
</style>

<footer class="pt-5 content-info">
  <div class="flex flex-wrap">
    <a href="tel:9127391110" class="w-full bg-color-222222 text-2xl md:text-3xl text-white font-bold text-center uppercase py-8 md:py-2">Call Now - (912) 739-1110</a>
  </div>
  <div class="md:flex flex-wrap bg-color-2a2a2a text-white">
    <div class="md:flex flex-wrap w-11/12 py-8 mx-auto">
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>
  <p class="bg-color-222222 text-sm text-white text-center font-thin py-3">© 2016 - <?php echo get_the_date(); ?> | Planet Cycle</p>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-59859902-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-59859902-1');
</script>