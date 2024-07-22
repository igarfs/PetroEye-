function addRow() {
    var table = document.getElementById("infoTable");
    var newRow = table.insertRow();
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    cell1.innerHTML = '<input type="text" name="col1[]">';
    cell2.innerHTML = '<input type="text" name="col2[]">';
    cell3.innerHTML = '<input type="text" name="col3[]">';
  }
  function clearForm() {
    document.getElementById("myForm").reset();
  }
  function submitForm() {
    clearForm();
    alert("Formulário enviado com sucesso!");
  }



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
