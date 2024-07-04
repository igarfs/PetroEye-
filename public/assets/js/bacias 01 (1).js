$(document).ready(function(){


    var dragging = false;

    var maxHeight = -500;
    var originalY = $(".bottomdrag").css("top");
    $("#dragbutton").mousedown(function() {
        dragging = true;
    });

    $(document).mouseup(function() {
        dragging = false;
    });

    $(document).mousemove(function(event) {
        if (dragging) {

            var y = event.pageY;



            if  (y < maxHeight) {
                y = maxHeight;
            }


            $(".bottomdrag").css("top", y);
        }
    });
    $(".lupa").click(function () {
        var $searchWrapper = $(".search-wrapper");
        if ($searchWrapper.is(":visible")) {
          // If the search-wrapper is already visible, animate it to the left
          $searchWrapper.animate({ right: "-500px" }, 500, function () {
            $searchWrapper.hide();
          });
        } else {
          // If the search-wrapper is hidden, animate it in from the right
          $searchWrapper.css("right", "-500px");
          $searchWrapper.show();
          $searchWrapper.animate({ right: "0" }, 500);
        }
      });
      $(".menu").click(function () {
        var $searchWrapper = $(".menu-wrapper");
        if ($searchWrapper.is(":visible")) {
          // If the search-wrapper is already visible, animate it upwards
          $searchWrapper.animate({ top: "-500px" }, 500, function () {
            $searchWrapper.hide();
          });
        } else {
          // If the search-wrapper is hidden, animate it downwards
          $searchWrapper.css("top", "-500px");
          $searchWrapper.show();
          $searchWrapper.animate({ top: "100%" }, 100);
        }
      });});
