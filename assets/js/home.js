 // ANIMATE category hover
  $('#nomadic-schematic').animate({
    'background-position': '100px 200px',
  }, 10000, 'linear');

<!-- MENU -->
  $(function() {
    $('a.get-up-there').on('click', function() {
      $('html, body').animate({ scrollTop: '0px' });
      return false;
    });

    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $("slide").val();

      // most effect types need no options passed by default
      var options = {};

      // run the effect
      $( "#effect" ).toggle();
    };

    // set effect from select menu value
    $( "#button" ).click(function() {
      runEffect();
      return false;
    });
  });
