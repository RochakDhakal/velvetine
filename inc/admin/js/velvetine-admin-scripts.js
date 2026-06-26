(function ($) {
  "use strict";
  $("#velvetine-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: velvetine_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "velvetine_dismissble_notice",
        nonce: velvetine_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          $("#velvetine-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });

  // Dashboard
  const $velvetineDashboard = $(".dashboard-about-velvetine");
  const $velvetineTabs = $velvetineDashboard.find(".velvetine-tabs-item");
  const $velvetineContents = $velvetineDashboard.find(".velvetine-content-item");

  function velvetineChangeTab(index) {
    $velvetineTabs.removeClass("active");
    $velvetineContents.removeClass("active");

    // Add active class to the selected tab and content
    $velvetineTabs.eq(index).addClass("active");
    $velvetineContents.eq(index).addClass("active");
  }

  const velvetineGetSessionTab = sessionStorage.getItem("velvetineActivePage");
  if (parseInt(velvetineGetSessionTab)) {
    velvetineChangeTab(velvetineGetSessionTab);
  } else {
    velvetineChangeTab(0);
  }

  $velvetineTabs.click(function () {
    const velvetineIndex = $(this).data("index");
    sessionStorage.setItem("velvetineActivePage", velvetineIndex);
    velvetineChangeTab(velvetineIndex);
  });

  // Recommended Plugins Page
  // Activate plugin
  $velvetineDashboard.find(".plugin-button.plugin-activate").click(function (e) {
    e.preventDefault();

    const velvetinePluginSlug = $(this).data("slug");
    const velvetinePluginFilename = $(this).data("filename");
    const velvetinePluginName = $(this).data("name");

    $(this).addClass("processing-spinner");

    $.ajax({
      url: velvetine_admin_localize.ajax_url,
      type: "POST",
      data: {
        action: "velvetine_rplugin_activation",
        nonce: velvetine_admin_localize.nonce,
        pluginSlug: velvetinePluginSlug,
        pluginFilename: velvetinePluginFilename,
        pluginName: velvetinePluginName,
      },
      success: function (response) {
        var velvetineCheckJSON = /{.*}/;
        var velvetineMatch = velvetineCheckJSON.exec(response);

        if (velvetineMatch) {
          var velvetineJsonResponse = velvetineMatch[0];
          try {
            var velvetineResponseObj = JSON.parse(velvetineJsonResponse);

            if (velvetineResponseObj.success) {
              window.location.href = window.location.href;
            } else {
              console.log("Error!");
            }
          } catch (error) {
            console.log("Error parsing JSON!");
            window.location.href = window.location.href;
          }
        } else {
          if (response.success) {
            window.location.href = window.location.href;
          }
        }

        $(this).removeClass("processing-spinner");
      },
      error: function (xhr, status, error) {
        $("#response-container").text("An error occurred.");
        $(this).removeClass("processing-spinner");

        console.log(xhr.responseText);
      },
    });
  });

  $("#velvetine-recommend-plugins__installer, #install-activate-button").click(
    function (e) {
      e.preventDefault();
      const velvetineButton = $(this);
      velvetineButton.attr("disabled", "disabled");
      velvetineButton
        .text("Installing & Activating required plugins")
        .addClass("processing-spinner");

      var velvetineActivationData = {
        action: "velvetine_install_and_activate_plugins",
        nonce: velvetine_admin_localize.welcomeNonce,
      };

      $.post(
        velvetine_admin_localize.ajax_url,
        velvetineActivationData,
        function (response) {
          var velvetineCheckJSON = /{.*}/;
          var velvetineMatch = velvetineCheckJSON.exec(response);

          if (velvetineMatch) {
            var velvetineJsonResponse = velvetineMatch[0];
            try {
              var velvetineResponseObj = JSON.parse(velvetineJsonResponse);

              if (velvetineResponseObj.success === true) {
                window.location.href = velvetine_admin_localize.redirect_url;
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          } else {
            if (response.success === true) {
              window.location.href = velvetine_admin_localize.redirect_url;
            } else {
              velvetineButton.text(response.data.message);
            }
          }
        },
      );
    },
  );

  $velvetineDashboard
    .find(".licence-activator.account-unavailable")
    .click(function (e) {
      e.preventDefault();

      window.location.href = velvetine_admin_localize.scrollURL;
    });

  // Demos Page
  const velvetineDemoRedirection = $velvetineDashboard.find(
    ".demo-importer__redirection",
  );

  velvetineDemoRedirection.click(function (e) {
    e.preventDefault();

    if ($(this).hasClass("plugins-unavailable")) {
      velvetineDemoRedirection.attr("disabled", "disabled");
      velvetineDemoRedirection
        .text("Installing & Activating required plugins")
        .addClass("processing-spinner");

      var velvetineActivationData = {
        action: "velvetine_install_and_activate_plugins",
        nonce: velvetine_admin_localize.welcomeNonce,
      };

      $.post(
        velvetine_admin_localize.ajax_url,
        velvetineActivationData,
        function (response) {
          var velvetineCheckJSON = /{.*}/;
          var velvetineMatch = velvetineCheckJSON.exec(response);

          if (velvetineMatch) {
            var velvetineJsonResponse = velvetineMatch[0];
            try {
              var velvetineResponseObj = JSON.parse(velvetineJsonResponse);

              if (velvetineResponseObj.success === true) {
                window.location.href = velvetine_admin_localize.demoURL;
              } else {
                console.log("Error!");
              }
            } catch (error) {
              console.log("Error parsing JSON!");
            }
          } else {
            if (response.success === true) {
              window.location.href = velvetine_admin_localize.demoURL;
            } else {
              velvetineDemoRedirection.text(response.data.message);
            }
          }
        },
      );
    } else {
      window.location.href = velvetine_admin_localize.demoURL;
    }
  });

  $(document).ready(function () {
    var velvetineUrlParams = new URLSearchParams(window.location.search);

    if (velvetineUrlParams.get("cozy-addons-scroll") === "true") {
      $("html, body").animate(
        {
          scrollTop:
            $(`.active[data-slug="cozy-addons"]`).offset().top -
            $(window).height() / 2 +
            $(`.active[data-slug="cozy-addons"]`).outerHeight() / 2,
        },
        1000,
      );

      $(`.active[data-slug="cozy-addons"] .activate-license a`).addClass(
        "velvetine-highlighted",
      );

      setTimeout(() => {
        $(`.active[data-slug="cozy-addons"] .activate-license a`).removeClass(
          "velvetine-highlighted",
        );
      }, 3000);
    }
  });
})(jQuery);