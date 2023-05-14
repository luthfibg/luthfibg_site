
<section class="m-cross">
    <h2 class="heading"><span>Spherical</span> Crossing</h2>
    <span class="Sphere"></span>

    <!-- Including the TagCloud.js script CDN in the document    -->
    <script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>
    <script>
      const Texts = ['Catarchian', 'Avalon', 'Pragmenasti', 'Jdzora', 'Cervetuns', 'Ieflfin', 'Vonuti', 'Marshtunnia', 'Django', 'Elsjyvian', 'Tengnga', 'Scysc', 'Valhalla', 'Polus', 'Neztjekilya'];
      // for( var i = 0; i < Texts.length; i++ ){
      //   document.write("<div>" + Texts[i] + "</div>" );
      // }
        // Texts[0].link('https://github.com/luthfibg');

      // function radiusValue() {
      //   if (window.screen.width <= 319.98) {
      //     radius = 60;
      //   } else if (window.screen.width >= 320 && window.screen.width <= 375.98) {
      //     radius = 90;
      //   } else if (window.screen.width >= 376 && window.screen.width <= 424.98) {
      //     radius = 120;
      //   } else if (window.screen.width >= 425 && window.screen.width <= 529.98) {
      //     radius = 150;
      //   } else if (window.screen.width >= 530 && window.screen.width <= 681.98) {
      //     radius = 180;
      //   } else if (window.screen.width >= 682 && window.screen.width <= 767.98) {
      //     radius = 180;
      //   } else {
      //     radius = 230;
      //   }
      //   return radius;
      // }
      var tagCloud = TagCloud('.Sphere', Texts, {
        // Sphere radius in px
        // radius: radiusValue(),
        radius: 230,

        // animation speed
        // slow, normal, fast
        maxSpeed: 'normal',
        initSpeed: 'fast',

        // Rolling direction [0 (top) , 90 (left), 135 (right-bottom)]
        direction: 135,

        // interaction with mouse or not [Default true (decelerate to rolling init speed, and keep rolling with mouse).]
        keep: true,
      });

      // Giving color to each text in sphere
      var color = '#FF5733 ';
      document.querySelector('.Sphere').style.color = color;
    </script>
</section>
