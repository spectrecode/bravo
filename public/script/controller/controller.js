// Generated by CoffeeScript 1.10.0
app.controller('bodyCrtl', [
  '$scope', '$location', function(scope, location) {
    scope.setup = function() {
      var h;
      h = $(window).height();
      console.log(h);
      $('body').css("min-height", h);
    };
    scope.setup();
    window.addEventListener("resize", scope.setup);
  }
]);

app.controller('mainmenuCrtl', ['$scope', '$location', function(scope, location) {}]);
