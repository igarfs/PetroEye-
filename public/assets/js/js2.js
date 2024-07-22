
    $(document).ready(function() {
        var dragging = false;
        var maxHeight = 500; // Defina isso para a altura máxima desejada

        // Quando o mouse é pressionado
        $("#dragbutton").mousedown(function(event) {
            dragging = true;
        });

        // Quando o mouse é liberado
        $(document).mouseup(function(event) {
            dragging = false;
        });

        // Manipula o movimento do mouse
        $(document).mousemove(function(event) {
            if (dragging) {
                var y = event.pageY;

                // Garante que y não seja menor que maxHeight
                if (y < maxHeight) {
                    y = maxHeight;
                }

                // Opcional: Defina uma altura mínima, se necessário
                var minHeight = 0; // Exemplo de altura mínima
                if (y < minHeight) {
                    y = minHeight;
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
