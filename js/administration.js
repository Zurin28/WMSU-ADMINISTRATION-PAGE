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

        // Event listener for the dashboard link
        $("#Home-link").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          viewHome(); // Call the function to load analytics
        });


  
  // Determine which page to load based on the current URL
  let url = window.location.href;
  if (url.endsWith("Administration")) {
    $("#Administration-link").trigger("click");
  } else if (url.endsWith("Home")) {
    $("#Home-link").trigger("click");
  } else {
    $("#Administration-link").trigger("click");
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

          $(".edit-pres").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editPresofficial(this.dataset.id); // Call function to edit product
          });

          $(".delete-pres").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingPresofficial(this.dataset.id); // Call function to edit product
          });

          $(".edit-vicepres").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editVicePresofficial(this.dataset.id); // Call function to edit product
          });

          $(".delete-vicepres").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingVicePresofficial(this.dataset.id); // Call function to edit product
          });

          $(".edit-opstaff").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editopstaffs(this.dataset.id); // Call function to edit product
          });

          $(".delete-opstaff").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingopstaffs(this.dataset.id); // Call function to edit product
          });

          $(".edit-universityboardsecretary").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            edituniBoardSecretarys(this.dataset.id); // Call function to edit product
          });

          $(".delete-universityboardsecretary").on("click", function (e) {
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

          $(".edit-campusadministrators").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editcampusAdmins(this.dataset.id); // Call function to edit product
          });

          $(".delete-campusadministrators").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingcampusAdmins(this.dataset.id); // Call function to edit product
          });

          $(".edit-ilsprincipals").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editILSPrincipals(this.dataset.id); // Call function to edit product
          });

          $(".delete-ilsprincipals").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingILSPrincipals(this.dataset.id); // Call function to edit product
          });

          $(".edit-assistantdirectors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editassistantDirectors(this.dataset.id); // Call function to edit product
          });

          $(".delete-assistantdirectors").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingassistantDirectors(this.dataset.id); // Call function to edit product
          });

          $(".edit-technicalassistants").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            edittechAssists(this.dataset.id); // Call function to edit product
          });

          $(".delete-technicalassistants").on("click", function (e) {
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

          $(".edit-graduateschoolheads").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editgraduateSchoolHeads(this.dataset.id); // Call function to edit product
          });

          $(".delete-graduateschoolheads").on("click", function (e) {
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

          $(".edit-sectionchiefs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editsectionChiefs(this.dataset.id); // Call function to edit product
          });

          $(".delete-sectionchiefs").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            deletingsectionChiefs(this.dataset.id); // Call function to edit product
          });

          $(".edit-otherservices").on("click", function (e) {
            e.preventDefault(); // Prevent default behavior
            editotherServices(this.dataset.id); // Call function to edit product
          });

          $(".delete-otherservices").on("click", function (e) {
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

      // Function to show the edit modal
  function editMember(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-bor.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchRecordMember(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditmember").modal("show"); // Show the modal
        $("#staticBackdropeditmember").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-member").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateMember(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordMember(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-bor.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (member) {
        $("#name").val(member.name);
        $("#title").val(member.title);
      },
    });
  }

    // Function to update a new official
    function updateMember(id) {
      var form = $('#form-edit-member')[0];
      var formData = new FormData(form);
      
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-bor.php?id=${id}`,
          data: formData,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditmember").modal("hide");
                  $("#form-edit-member")[0].reset();
                  viewAdministration();
              }
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

       // Function to show the edit modal
       function editPresofficial(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordPresofficial(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage_link").modal("show"); // Show the modal
            $("#staticBackdropeditpage_link").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page_link").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatePresofficial(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordPresofficial(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Pres.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (Presofficial) {
            $("#name").val(Presofficial.name);
            $("#title").val(Presofficial.title);
            $("#page_link").val(Presofficial.page_link);
          },
        });
      }
    
        // Function to update a new official
        function updatePresofficial(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Pres.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage_link").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editVicePresofficial(id) {
        $.ajax({
          type: "GET",
          url: "../crud-administration/edit-officials/edit-w-page_link.html",
          dataType: "html",
          success: function (view) {
            // First load the modal content
            $(".modal-container").empty().html(view);
            
            // Then fetch and populate the data
            $.ajax({
              url: `../crud-administration/fetching/fetch-Vicepres.php?id=${id}`,
              type: "POST",
              dataType: "json",
              success: function (data) {
                // Populate form fields
                $("#staticBackdropeditpage_link #name").val(data.name);
                $("#staticBackdropeditpage_link #title").val(data.title);
                $("#staticBackdropeditpage_link #page_link").val(data.page_link);
                
                // Store ID in modal
                $("#staticBackdropeditpage_link").attr("data-id", id);
                
                // Show modal
                $("#staticBackdropeditpage_link").modal("show");
              },
              error: function(xhr, status, error) {
                console.error("Error fetching data:", error);
              }
            });
      
            // Handle form submission
            $("#form-edit-page_link").off('submit').on("submit", function (e) {
              e.preventDefault();
              
              // Get form data
              const formData = {
                name: $("#staticBackdropeditpage_link #name").val(),
                title: $("#staticBackdropeditpage_link #title").val(), 
                page_link: $("#staticBackdropeditpage_link #page_link").val(),
                id: id
              };
      
              // Submit update
              $.ajax({
                type: "POST",
                url: `../crud-administration/update-officials/update-Vicepres.php?id=${id}`,
                data: formData,
                dataType: "json",
                success: function (response) {
                  if (response.status === "success") {
                    $("#staticBackdropeditpage_link").modal("hide");
                    $("#form-edit-page_link")[0].reset();
                    viewAdministration();
                  } else {
                    console.error("Update failed:", response);
                  }
                },
                error: function(xhr, status, error) {
                  console.error("Error updating:", error);
                }
              });
            });
          },
          error: function(xhr, status, error) {
            console.error("Error loading modal:", error);
          }
        });
      }
    
      function fetchRecordVicePresofficial(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Vicepres.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (VicePresofficial) {
            $("#name").val(VicePresofficial.name);
            $("#title").val(VicePresofficial.title);
            $("#page_link").val(VicePresofficial.page_link);
          },
        });
      }
    
        // Function to update a new official
        function updateVicePresofficial(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Vicepres.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage_link").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editopstaffs(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordopstaffs(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage_link").modal("show"); // Show the modal
            $("#staticBackdropeditpage_link").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page_link").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateopstaffs(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordopstaffs(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-opstaff.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (opstaffs) {
            $("#name").val(opstaffs.name);
            $("#title").val(opstaffs.title);
            $("#page_link").val(opstaffs.page_link);
          },
        });
      }
    
        // Function to update a new official
        function updateopstaffs(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-opstaff.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage_link").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function edituniBoardSecretarys(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecorduniBoardSecretarys(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateuniBoardSecretarys(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecorduniBoardSecretarys(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-UniversityBoardSecretary.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (uniBoardSecretarys) {
            $("#name").val(uniBoardSecretarys.name);
            $("#title").val(uniBoardSecretarys.title);
          },
        });
      }
    
        // Function to update a new official
        function updateuniBoardSecretarys(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-UniversityBoardSecretary.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editdirectors(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecorddirectors(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatedirectors(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecorddirectors(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Directors.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (directors) {
            $("#name").val(directors.name);
            $("#title").val(directors.title);
          },
        });
      }
    
        // Function to update a new official
        function updatedirectors(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Directors.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editcampusAdmins(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordcampusAdmins(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatecampusAdmins(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordcampusAdmins(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-CampusAdministrators.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (campusAdmins) {
            $("#name").val(campusAdmins.name);
            $("#title").val(campusAdmins.title);
          },
        });
      }
    
        // Function to update a new official
        function updatecampusAdmins(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-CampusAdministrators.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editILSPrincipals(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordILSPrincipals(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateILSPrincipals(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordILSPrincipals(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-ILSPrincipals.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (ILSPrincipals) {
            $("#name").val(ILSPrincipals.name);
            $("#title").val(ILSPrincipals.title);
          },
        });
      }
    
        // Function to update a new official
        function updateILSPrincipals(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-ILSPrincipals.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editassistantDirectors(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordassistantDirectors(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateassistantDirectors(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordassistantDirectors(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-AssistantDirectors.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (assistantDirectors) {
            $("#name").val(assistantDirectors.name);
            $("#title").val(assistantDirectors.title);
          },
        });
      }
    
        // Function to update a new official
        function updateassistantDirectors(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-AssistantDirectors.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function edittechAssists(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordtechAssists(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatetechAssists(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordtechAssists(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-TechnicalAssistants.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (techAssists) {
            $("#name").val(techAssists.name);
            $("#title").val(techAssists.title);
          },
        });
      }
    
        // Function to update a new official
        function updatetechAssists(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-TechnicalAssistants.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editchairpersons(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordchairpersons(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatechairpersons(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordchairpersons(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Chairpersons.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (chairpersons) {
            $("#name").val(chairpersons.name);
            $("#title").val(chairpersons.title);
          },
        });
      }
    
        // Function to update a new official
        function updatechairpersons(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Chairpersons.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editmanagers(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordmanagers(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatemanagers(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordmanagers(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Managers.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (managers) {
            $("#name").val(managers.name);
            $("#title").val(managers.title);
          },
        });
      }
    
        // Function to update a new official
        function updatemanagers(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Managers.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editgraduateSchoolHeads(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordgraduateSchoolHeads(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updategraduateSchoolHeads(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordgraduateSchoolHeads(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-GraduateSchoolHead.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (graduateSchoolHeads) {
            $("#name").val(graduateSchoolHeads.name);
            $("#title").val(graduateSchoolHeads.title);
          },
        });
      }
    
        // Function to update a new official
        function updategraduateSchoolHeads(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-GraduateSchoolHead.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editcoordinators(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordcoordinators(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatecoordinators(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordcoordinators(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-Coordinators.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (coordinators) {
            $("#name").val(coordinators.name);
            $("#title").val(coordinators.title);
          },
        });
      }
    
        // Function to update a new official
        function updatecoordinators(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-Coordinators.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editsectionChiefs(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordsectionChiefs(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatesectionChiefs(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordsectionChiefs(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-SectionChiefs.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (sectionChiefs) {
            $("#name").val(sectionChiefs.name);
            $("#title").val(sectionChiefs.title);
          },
        });
      }
    
        // Function to update a new official
        function updatesectionChiefs(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-SectionChiefs.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editotherServices(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordotherServices(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateotherServices(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordotherServices(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-OtherServices.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (otherServices) {
            $("#name").val(otherServices.name);
            $("#title").val(otherServices.title);
          },
        });
      }
    
        // Function to update a new official
        function updateotherServices(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-OtherServices.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editacademicDeans(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordacademicDeans(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateacademicDeans(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordacademicDeans(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-AcademicDean.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (academicDeans) {
            $("#name").val(academicDeans.name);
            $("#title").val(academicDeans.title);
          },
        });
      }
    
        // Function to update a new official
        function updateacademicDeans(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-AcademicDean.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editassociateDeans(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordassociateDeans(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateassociateDeans(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordassociateDeans(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-AssociateDean.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (associateDeans) {
            $("#name").val(associateDeans.name);
            $("#title").val(associateDeans.title);
          },
        });
      }
    
        // Function to update a new official
        function updateassociateDeans(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-AssociateDean.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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

       // Function to show the edit modal
       function editexternalStudiesUnits(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordexternalStudiesUnits(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpage").modal("show"); // Show the modal
            $("#staticBackdropeditpage").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-page").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updateexternalStudiesUnits(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordexternalStudiesUnits(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-ExternalStudiesUnit.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (externalStudiesUnits) {
            $("#name").val(externalStudiesUnits.name);
            $("#title").val(externalStudiesUnits.title);
          },
        });
      }
    
        // Function to update a new official
        function updateexternalStudiesUnits(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-ExternalStudiesUnit.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpage").modal("hide");
                      $("form")[0].reset();
                      viewAdministration(); // Reload accounts after update
                  }
              },
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


    // Function to load products view
    function viewHome() {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/view-administration-copy.php", // URL for products view
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

        $(".edit-pres").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editPresofficial(this.dataset.id); // Call function to edit product
        });

        $(".delete-pres").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingPresofficial(this.dataset.id); // Call function to edit product
        });

        $(".edit-vicepres").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editVicePresofficial(this.dataset.id); // Call function to edit product
        });

        $(".delete-vicepres").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingVicePresofficial(this.dataset.id); // Call function to edit product
        });

        $(".edit-opstaff").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editopstaffs(this.dataset.id); // Call function to edit product
        });

        $(".delete-opstaff").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingopstaffs(this.dataset.id); // Call function to edit product
        });

        $(".edit-universityboardsecretary").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          edituniBoardSecretarys(this.dataset.id); // Call function to edit product
        });

        $(".delete-universityboardsecretary").on("click", function (e) {
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

        $(".edit-campusadministrators").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editcampusAdmins(this.dataset.id); // Call function to edit product
        });

        $(".delete-campusadministrators").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingcampusAdmins(this.dataset.id); // Call function to edit product
        });

        $(".edit-ilsprincipals").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editILSPrincipals(this.dataset.id); // Call function to edit product
        });

        $(".delete-ilsprincipals").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingILSPrincipals(this.dataset.id); // Call function to edit product
        });

        $(".edit-assistantdirectors").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editassistantDirectors(this.dataset.id); // Call function to edit product
        });

        $(".delete-assistantdirectors").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingassistantDirectors(this.dataset.id); // Call function to edit product
        });

        $(".edit-technicalassistants").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          edittechAssists(this.dataset.id); // Call function to edit product
        });

        $(".delete-technicalassistants").on("click", function (e) {
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

        $(".edit-graduateschoolheads").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editgraduateSchoolHeads(this.dataset.id); // Call function to edit product
        });

        $(".delete-graduateschoolheads").on("click", function (e) {
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

        $(".edit-sectionchiefs").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editsectionChiefs(this.dataset.id); // Call function to edit product
        });

        $(".delete-sectionchiefs").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          deletingsectionChiefs(this.dataset.id); // Call function to edit product
        });

        $(".edit-otherservices").on("click", function (e) {
          e.preventDefault(); // Prevent default behavior
          editotherServices(this.dataset.id); // Call function to edit product
        });

        $(".delete-otherservices").on("click", function (e) {
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

    // Function to show the edit modal
function editMember(id) {
  $.ajax({
    type: "GET", // Use GET request
    url: "../crud-administration/edit-officials/edit-bor.html", // URL to get product data
    dataType: "html", // Expect JSON response
    success: function (view) {
      fetchRecordMember(id);
      // Assuming 'view' contains the new content you want to display
      $(".modal-container").empty().html(view); // Load the modal view
      $("#staticBackdropeditmember").modal("show"); // Show the modal
      $("#staticBackdropeditmember").attr("data-id", id);

      // Event listener for the add product form submission
      $("#form-edit-member").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission
        updateMember(id); // Call function to save product
      });
    },
  });
}

function fetchRecordMember(id) {
  $.ajax({
    url: `../crud-administration/fetching/fetch-bor.php?id=${id}`, // URL for fetching categories
    type: "POST", // Use GET request
    dataType: "json", // Expect JSON response
    success: function (member) {
      $("#name").val(member.name);
      $("#title").val(member.title);
    },
  });
}

  // Function to update a new official
  function updateMember(id) {
    var form = $('#form-edit-member')[0];
    var formData = new FormData(form);
    
    $.ajax({
        type: "POST",
        url: `../crud-administration/update-officials/update-bor.php?id=${id}`,
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                $("#staticBackdropeditmember").modal("hide");
                $("#form-edit-member")[0].reset();
                viewHome();
            }
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
              viewHome(); // Reload accounts after update
          }
      },
        error: function () {
            alert("An error occurred while deleting the Official.");
        }
    });
}

     // Function to show the edit modal
     function editPresofficial(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordPresofficial(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage_link").modal("show"); // Show the modal
          $("#staticBackdropeditpage_link").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page_link").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatePresofficial(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordPresofficial(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Pres.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (Presofficial) {
          $("#name").val(Presofficial.name);
          $("#title").val(Presofficial.title);
          $("#page_link").val(Presofficial.page_link);
        },
      });
    }
  
      // Function to update a new official
      function updatePresofficial(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Pres.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage_link").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
            viewHome(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

     // Function to show the edit modal
     function editVicePresofficial(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordVicePresofficial(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage_link").modal("show"); // Show the modal
          $("#staticBackdropeditpage_link").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page_link").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateVicePresofficial(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordVicePresofficial(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Vicepres.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (VicePresofficial) {
          $("#name").val(VicePresofficial.name);
          $("#title").val(VicePresofficial.title);
          $("#page_link").val(VicePresofficial.page_link);
        },
      });
    }
  
      // Function to update a new official
      function updateVicePresofficial(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Vicepres.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage_link").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editopstaffs(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordopstaffs(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage_link").modal("show"); // Show the modal
          $("#staticBackdropeditpage_link").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page_link").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateopstaffs(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordopstaffs(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-opstaff.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (opstaffs) {
          $("#name").val(opstaffs.name);
          $("#title").val(opstaffs.title);
          $("#page_link").val(opstaffs.page_link);
        },
      });
    }
  
      // Function to update a new official
      function updateopstaffs(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-opstaff.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage_link").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function edituniBoardSecretarys(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecorduniBoardSecretarys(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateuniBoardSecretarys(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecorduniBoardSecretarys(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-UniversityBoardSecretary.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (uniBoardSecretarys) {
          $("#name").val(uniBoardSecretarys.name);
          $("#title").val(uniBoardSecretarys.title);
        },
      });
    }
  
      // Function to update a new official
      function updateuniBoardSecretarys(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-UniversityBoardSecretary.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editdirectors(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecorddirectors(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatedirectors(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecorddirectors(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Directors.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (directors) {
          $("#name").val(directors.name);
          $("#title").val(directors.title);
        },
      });
    }
  
      // Function to update a new official
      function updatedirectors(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Directors.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editcampusAdmins(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordcampusAdmins(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatecampusAdmins(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordcampusAdmins(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-CampusAdministrators.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (campusAdmins) {
          $("#name").val(campusAdmins.name);
          $("#title").val(campusAdmins.title);
        },
      });
    }
  
      // Function to update a new official
      function updatecampusAdmins(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-CampusAdministrators.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editILSPrincipals(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordILSPrincipals(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateILSPrincipals(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordILSPrincipals(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-ILSPrincipals.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (ILSPrincipals) {
          $("#name").val(ILSPrincipals.name);
          $("#title").val(ILSPrincipals.title);
        },
      });
    }
  
      // Function to update a new official
      function updateILSPrincipals(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-ILSPrincipals.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editassistantDirectors(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordassistantDirectors(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateassistantDirectors(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordassistantDirectors(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-AssistantDirectors.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (assistantDirectors) {
          $("#name").val(assistantDirectors.name);
          $("#title").val(assistantDirectors.title);
        },
      });
    }
  
      // Function to update a new official
      function updateassistantDirectors(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-AssistantDirectors.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function edittechAssists(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordtechAssists(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatetechAssists(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordtechAssists(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-TechnicalAssistants.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (techAssists) {
          $("#name").val(techAssists.name);
          $("#title").val(techAssists.title);
        },
      });
    }
  
      // Function to update a new official
      function updatetechAssists(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-TechnicalAssistants.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editchairpersons(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordchairpersons(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatechairpersons(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordchairpersons(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Chairpersons.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (chairpersons) {
          $("#name").val(chairpersons.name);
          $("#title").val(chairpersons.title);
        },
      });
    }
  
      // Function to update a new official
      function updatechairpersons(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Chairpersons.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editmanagers(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordmanagers(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatemanagers(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordmanagers(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Managers.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (managers) {
          $("#name").val(managers.name);
          $("#title").val(managers.title);
        },
      });
    }
  
      // Function to update a new official
      function updatemanagers(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Managers.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editgraduateSchoolHeads(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordgraduateSchoolHeads(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updategraduateSchoolHeads(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordgraduateSchoolHeads(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-GraduateSchoolHead.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (graduateSchoolHeads) {
          $("#name").val(graduateSchoolHeads.name);
          $("#title").val(graduateSchoolHeads.title);
        },
      });
    }
  
      // Function to update a new official
      function updategraduateSchoolHeads(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-GraduateSchoolHead.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editcoordinators(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordcoordinators(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatecoordinators(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordcoordinators(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Coordinators.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (coordinators) {
          $("#name").val(coordinators.name);
          $("#title").val(coordinators.title);
        },
      });
    }
  
      // Function to update a new official
      function updatecoordinators(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Coordinators.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editsectionChiefs(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordsectionChiefs(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updatesectionChiefs(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordsectionChiefs(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-SectionChiefs.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (sectionChiefs) {
          $("#name").val(sectionChiefs.name);
          $("#title").val(sectionChiefs.title);
        },
      });
    }
  
      // Function to update a new official
      function updatesectionChiefs(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-SectionChiefs.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editotherServices(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordotherServices(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateotherServices(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordotherServices(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-OtherServices.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (otherServices) {
          $("#name").val(otherServices.name);
          $("#title").val(otherServices.title);
        },
      });
    }
  
      // Function to update a new official
      function updateotherServices(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-OtherServices.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editacademicDeans(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordacademicDeans(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateacademicDeans(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordacademicDeans(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-AcademicDean.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (academicDeans) {
          $("#name").val(academicDeans.name);
          $("#title").val(academicDeans.title);
        },
      });
    }
  
      // Function to update a new official
      function updateacademicDeans(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-AcademicDean.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editassociateDeans(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordassociateDeans(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateassociateDeans(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordassociateDeans(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-AssociateDean.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (associateDeans) {
          $("#name").val(associateDeans.name);
          $("#title").val(associateDeans.title);
        },
      });
    }
  
      // Function to update a new official
      function updateassociateDeans(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-AssociateDean.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editexternalStudiesUnits(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchRecordexternalStudiesUnits(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditpage").modal("show"); // Show the modal
          $("#staticBackdropeditpage").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-page").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateexternalStudiesUnits(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordexternalStudiesUnits(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-ExternalStudiesUnit.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (externalStudiesUnits) {
          $("#name").val(externalStudiesUnits.name);
          $("#title").val(externalStudiesUnits.title);
        },
      });
    }
  
      // Function to update a new official
      function updateexternalStudiesUnits(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-ExternalStudiesUnit.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditpage").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
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
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}
    
  });
  