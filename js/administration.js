$(document).ready(function () {
    // Event listener for navigation links
    $(".nav-link").on("click", function (e) {
      e.preventDefault(); // Prevent default anchor click behavior
      $(".nav-link").removeClass("link-active"); // Remove active class from all links
      $(this).addClass("link-active"); // Add active class to the clicked link
  
      let url = $(this).attr("href"); // Get the URL from the href attribute
      window.history.pushState({ path: url }, "", url); // Update the browser's URL without reloading
    });
  
    // Event listener for the dashboard link
    $("#Administration-link").on("click", function (e) {
      e.preventDefault(); // Prevent default behavior
      viewAdministration(); // Call the function to load analytics
    });


  
    // Determine which page to load based on the current URL
    let url = window.location.href;
    if (url.endsWith("Administration")) {
      $("#Administration-link").trigger("click"); // Trigger the dashboard click event
    }
    else {
      $("#Administration-link").trigger("click"); // Default to dashboard if no specific page
    }


  
    // Function to load products view
    function viewAdministration() {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/view-administration.php", // URL for products view
          dataType: "html", // Expect HTML response
          success: function (response) {
            $(".content-page").html(response); // Load the response into the content area
    
          // Event listener for editing a product and deleting product
          $(".edit-member").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editMember(this.dataset.id); // Call function to edit product
          });

          $(".delete-member").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingMember(this.dataset.id); // Call function to edit product
          });

          $(".edit-Presofficial").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editPresofficial(this.dataset.id); // Call function to edit product
          });

          $(".delete-Presofficial").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingPresofficial(this.dataset.id); // Call function to edit product
          });

          $(".edit-VicePresofficial").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editVicePresofficial(this.dataset.id); // Call function to edit product
          });

          $(".delete-VicePresofficial").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingVicePresofficial(this.dataset.id); // Call function to edit product
          });

          $(".edit-opstaffs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editopstaffs(this.dataset.id); // Call function to edit product
          });

          $(".delete-opstaffs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingopstaffs(this.dataset.id); // Call function to edit product
          });

          $(".edit-uniBoardSecretarys").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            edituniBoardSecretarys(this.dataset.id); // Call function to edit product
          });

          $(".delete-uniBoardSecretarys").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletinguniBoardSecretarys(this.dataset.id); // Call function to edit product
          });

          $(".edit-directors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editdirectors(this.dataset.id); // Call function to edit product
          });

          $(".delete-directors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingdirectors(this.dataset.id); // Call function to edit product
          });

          $(".edit-campusAdmins").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editcampusAdmins(this.dataset.id); // Call function to edit product
          });

          $(".delete-campusAdmins").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingcampusAdmins(this.dataset.id); // Call function to edit product
          });

          $(".edit-ILSPrincipals").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editILSPrincipals(this.dataset.id); // Call function to edit product
          });

          $(".delete-ILSPrincipals").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingILSPrincipals(this.dataset.id); // Call function to edit product
          });

          $(".edit-assistantDirectors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editassistantDirectors(this.dataset.id); // Call function to edit product
          });

          $(".delete-assistantDirectors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingassistantDirectors(this.dataset.id); // Call function to edit product
          });

          $(".edit-techAssists").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            edittechAssists(this.dataset.id); // Call function to edit product
          });

          $(".delete-techAssists").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingtechAssists(this.dataset.id); // Call function to edit product
          });

          $(".edit-chairpersons").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editchairpersons(this.dataset.id); // Call function to edit product
          });

          $(".delete-chairpersons").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingchairpersons(this.dataset.id); // Call function to edit product
          });

          $(".edit-managers").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editmanagers(this.dataset.id); // Call function to edit product
          });

          $(".delete-managers").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingmanagers(this.dataset.id); // Call function to edit product
          });

          $(".edit-graduateSchoolHeads").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editgraduateSchoolHeads(this.dataset.id); // Call function to edit product
          });

          $(".delete-graduateSchoolHeads").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletinggraduateSchoolHeads(this.dataset.id); // Call function to edit product
          });

          $(".edit-coordinators").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editcoordinators(this.dataset.id); // Call function to edit product
          });

          $(".delete-coordinators").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingcoordinators(this.dataset.id); // Call function to edit product
          });

          $(".edit-sectionChiefs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editsectionChiefs(this.dataset.id); // Call function to edit product
          });

          $(".delete-sectionChiefs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingsectionChiefs(this.dataset.id); // Call function to edit product
          });

          $(".edit-otherServices").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editotherServices(this.dataset.id); // Call function to edit product
          });

          $(".delete-otherServices").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingotherServices(this.dataset.id); // Call function to edit product
          });

          $(".edit-academicDeans").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editacademicDeans(this.dataset.id); // Call function to edit product
          });

          $(".delete-academicDeans").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingacademicDeans(this.dataset.id); // Call function to edit product
          });

          $(".edit-associateDeans").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editassociateDeans(this.dataset.id); // Call function to edit product
          });

          $(".delete-associateDeans").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingassociateDeans(this.dataset.id); // Call function to edit product
          });

          $(".edit-externalStudiesUnits").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editexternalStudiesUnits(this.dataset.id); // Call function to edit product
          });

          $(".delete-externalStudiesUnits").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingexternalStudiesUnits(this.dataset.id); // Call function to edit product
          });
    
          },
        });
      }
  
    function deletingMember(id) {
      $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/delete-official.html", // URL to get product data
          dataType: "html", // Expect HTML response
          success: function (view) {
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropDelete").modal("show"); // Show the modal
            $("#staticBackdropDelete").attr("data-id", id);
    
            // Event listener for the edit product form submission
            $("#form-delete-official").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              deleteMember(id); // Call function to update product
            });
          },
        });
    }
  
  // Function to delete account
  function deleteMember(id) {
      $.ajax({
          type: "POST",
          url: "../crud-administration/delete-officials/delete-bor.php", // Point to the delete script
          data: { id: id },
          dataType: "json",
          success: function (response) {
            if (response.status === "success") {
                $("#staticBackdropDelete").modal("hide");
                $("form")[0].reset();
                viewAdministration(); // Reload accounts after update
            }
        },
          error: function () {
              alert("An error occurred while deleting the Official.");
          }
      });
  }

  function deletingPresofficial(id) {
    $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/delete-official.html", // URL to get product data
        dataType: "html", // Expect HTML response
        success: function (view) {
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropDelete").modal("show"); // Show the modal
          $("#staticBackdropDelete").attr("data-id", id);
  
          // Event listener for the edit product form submission
          $("#form-delete-official").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            deletePresofficial(id); // Call function to update product
          });
        },
      });
  }

// Function to delete account
function deletePresofficial(id) {
    $.ajax({
        type: "POST",
        url: "../crud-administration/delete-officials/delete-Pres.php", // Point to the delete script
        data: { id: id },
        dataType: "json",
        success: function (response) {
          if (response.status === "success") {
              $("#staticBackdropDelete").modal("hide");
              $("form")[0].reset();
              viewAdministration(); // Reload accounts after update
          }
      },
        error: function () {
            alert("An error occurred while deleting the Official.");
        }
    });
}

function deletingVicePresofficial(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteVicePresofficial(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteVicePresofficial(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Vicepres.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingopstaffs(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteopstaffs(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteopstaffs(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-opstaff.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletinguniBoardSecretarys(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteuniBoardSecretarys(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteuniBoardSecretarys(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-UniversityBoardSecretary.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingdirectors(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletedirectors(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletedirectors(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Directors.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingcampusAdmins(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletecampusAdmins(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletecampusAdmins(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-CampusAdministrators.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingILSPrincipals(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteILSPrincipals(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteILSPrincipals(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-ILSPrincipals.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingassistantDirectors(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteassistantDirectors(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteassistantDirectors(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-assistantDirectors.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingtechAssists(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletetechAssists(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletetechAssists(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-TechnicalAssistants.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingchairpersons(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletechairpersons(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletechairpersons(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Chairpersons.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingmanagers(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletemanagers(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletemanagers(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Managers.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletinggraduateSchoolHeads(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletegraduateSchoolHeads(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletegraduateSchoolHeads(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-GraduateSchoolHeads.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingcoordinators(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletecoordinators(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletecoordinators(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Coordinators.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingsectionChiefs(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletesectionChiefs(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deletesectionChiefs(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-SectionChiefs.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingotherServices(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteotherServices(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteotherServices(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-OtherServices.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingacademicDeans(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteacademicDeans(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteacademicDeans(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-AcademicDean.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingassociateDeans(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteassociateDeans(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteassociateDeans(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-AssociateDean.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

function deletingexternalStudiesUnits(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteexternalStudiesUnits(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteexternalStudiesUnits(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-ExternalStudiesUnit.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewAdministration(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}
    
  });
  