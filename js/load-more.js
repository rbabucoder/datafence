jQuery(document).ready(function ($) {
  function load_team_members(page) {
    $.ajax({
      url: ajax_params.ajax_url,
      type: "POST",
      data: {
        action: "load_more_team_members",
        page: page,
      },
      beforeSend: function () {
        $("#load-more-btn").text("Loading...").prop("disabled", true);
      },
      success: function (response) {
        if (response !== "0") {
          $("#team2-container").append(response);
          $("#load-more-btn")
            .data("page", page + 1)
            .text("View More Team Members")
            .prop("disabled", false);
        } else {
          $("#load-more-btn").hide(); // Hide the button if no team member is returned
        }
      },
      complete: function () {
        $("#load-more-btn").prop("disabled", false);
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  }

  // Load initial 4 members
  load_team_members(1);

  $("#load-more-btn").on("click", function (e) {
    e.preventDefault();

    var button = $(this);
    var page = button.data("page");

    load_team_members(page);
  });
});
