$(document).ready(function () {
    // Add new User
    $(document).on("submit", "#add-form", function (e) {
      e.preventDefault();
  
      // Form validation (example)
      if (!$("#add-form")[0].checkValidity()) {
        alert("Please fill out all required fields.");
        return;
      }
  
      // AJAX request
      $.ajax({
        url: "./partials/ajax.php",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function () {
          console.log("Wait... Data is loading");
        },
        success: function (response) {
          console.log(response);
          // Handle success response
          if (response.success) {
            alert("User added successfully!");
            // Optionally, reset the form
            $("#add-form")[0].reset();
          } else {
            alert("Error: " + response.message);
          }
        },
        error: function (request, error) {
          console.log(arguments);
          console.log("Can't do because: " + error);
          alert("An error occurred. Please try again.");
        },
      });
    });
  });