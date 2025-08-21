var vid = document.getElementById("background-video2"); 

function playVid() { 

  vid.play(); 

} 







// $('nav a').click(function(){

//   $('html, body').animate({

//       scroll: $( $(this).attr('href') )

//   },1000);

//   return false;

// });



// window.onbeforeunload = function () {

//   window.scrollTo(0, 0, );

// }





//$(window).on("load", function() {

//$("#Sevenpopup").modal('show');

//});





$(window).scroll(function() {    

    var scroll = $(window).scrollTop();



    if (scroll >= 20) {

        $("nav.navbar-b").addClass("navbar-reduce");

    } else {

        $("nav.navbar-b").removeClass("navbar-reduce");

    }

});





$('.banner-slider').slick({

    slidesToShow:1,

    slidesToScroll: 1,

    autoplay: true,

    fade:true,

    dots: true,

    autoplaySpeed:3000,

  });

  $(document).ready(function() {

    $(".accordion-heading").click(function() {
  
      // Toggle the active class on the clicked heading
  
      $(this).toggleClass("active");
  
  
  
      // Find the corresponding content and slide it up or down
  
      var accordionContent = $(this).next(".accordion-content");
  
      accordionContent.slideToggle();
  
  
  
      // Slide up any other open content and remove the active class
  
      $(".accordion-content").not(accordionContent).slideUp();
  
      $(".accordion-heading").not($(this)).removeClass("active");
  
    });
  
  });
  
  
  
  // when accordion altered use this script
  
  
  
  
  
  $('.hideorshow').click(function() {
  
    $('#hide').slideToggle(3000);
  
  });



  $(".enquire").click(function () {

    var form = $("#eform5");

    form.validate({

      errorElement: 'span',

      errorClass: 'help-block',

      highlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').addClass("has-error");



      },

      unhighlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').removeClass("has-error");

        $(element).closest('.form-group').addClass("has-success");

      },

      rules: {

        aname: {

          required: true,

        },

        

        aemail: {

          required: true,

        },

        amobile: {

          required: true,

        },



        intrestedin:{

          required:true,

        }

      },

      messages: {

        aname: {

          required: "Please enter name",

        },

        

        aemail: {

          required: "Please enter e-mail",

        },

        amobile:  {

          required: "Please enter Number",

        },

        select: {

          required: "Please select",

        },

      },

      

    

    });

  });



  $(".enquire").click(function () {

    var form = $("#eform4");

    form.validate({

      errorElement: 'span',

      errorClass: 'help-block',

      highlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').addClass("has-error");



      },

      unhighlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').removeClass("has-error");

        $(element).closest('.form-group').addClass("has-success");

      },

      rules: {

        aname: {

          required: true,

        },

        

        aemail: {

          required: true,

        },

        amobile: {

          required: true,

        },



        intrestedin:{

          required:true,

        }

      },

      messages: {

        aname: {

          required: "Please enter name",

        },

        

        aemail: {

          required: "Please enter e-mail",

        },

        amobile:  {

          required: "Please enter Number",

        },

        select: {

          required: "Please select",

        },

      },

      

    

    });

  });





  $(".enquire").click(function () {

    var form = $("#eform3");

    form.validate({

      errorElement: 'span',

      errorClass: 'help-block',

      highlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').addClass("has-error");



      },

      unhighlight: function (element, errorClass, validClass) {

        $(element).closest('.form-group').removeClass("has-error");

        $(element).closest('.form-group').addClass("has-success");

      },

      rules: {

        aname: {

          required: true,

        },

        

        aemail: {

          required: true,

        },

        amobile: {

          required: true,

        },



        intrestedin:{

          required:true,

        }

      },

      messages: {

        aname: {

          required: "Please enter name",

        },

        

        aemail: {

          required: "Please enter e-mail",

        },

        amobile:  {

          required: "Please enter Number",

        },

        select: {

          required: "Please select",

        },

      },

    

    });

  });



   $(".enquire").click(function () {

     var form = $("#eformp");

     form.validate({

       errorElement: 'span',

       errorClass: 'help-block',

       highlight: function (element, errorClass, validClass) {

         $(element).closest('.form-group').addClass("has-error");



       },

       unhighlight: function (element, errorClass, validClass) {

         $(element).closest('.form-group').removeClass("has-error");

         $(element).closest('.form-group').addClass("has-success");

       },

       rules: {

         aname: {

           required: true,

         },

        

         aemail: {

           required: true,

         },

         amobile: {

           required: true,

         },



         intrestedin:{

           required:true,

         }

       },

       messages: {

         aname: {

           required: "Please enter name",

         },

        

         aemail: {

           required: "Please enter e-mail",

         },

         amobile:  {

           required: "Please enter Number",

         },

         select: {

           required: "Please select",

         },

       },

     

    

     });

   });



 

  $(".enquire").click(function () {

      var form = $("#eform");

      form.validate({

        errorElement: 'span',

        errorClass: 'help-block',

        highlight: function (element, errorClass, validClass) {

          $(element).closest('.form-group').addClass("has-error");



        },

        unhighlight: function (element, errorClass, validClass) {

          $(element).closest('.form-group').removeClass("has-error");

          $(element).closest('.form-group').addClass("has-success");

        },

        rules: {

          aname: {

            required: true,

          },

          

          aemail: {

            required: true,

          },

          amobile: {

            required: true,

          },



          intrestedin:{

            required:true,

          }

        },

        messages: {

          aname: {

            required: "Please enter name",

          },

          

          aemail: {

            required: "Please enter e-mail",

          },

          amobile:  {

            required: "Please enter Number",

          },

          select: {

            required: "Please select",

          },

        },

  //       submitHandler: function(form) {

  //   form.submit();

  //   window.location.href = "thankyou.php";

  // }



      });

     

    });   

    // first letter space restriction

      $("input").on("keypress", function(e) {

        if (e.which === 32 && !this.value.length)

            e.preventDefault();

      });



    // First name special character restrictions

    $(".aname").keypress(function(event) {

      var character = String.fromCharCode(event.keyCode);

      return isValid(character);     

    }); 

    function isValid(str) {

      return !/[~`@@!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);

    }







    // special character restriction for emails

    $("aemail").keypress(function(event) {

      var character = String.fromCharCode(event.keyCode);

      return isValid(character);     

    });

    function isValid(str) {

      return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);

    }

  

$('.rooms-slider-two').slick({

    slidesToShow:3,

    slidesToScroll: 1,

    centerMode: true,

    autoplay: true,

    autoplaySpeed:3000,

    responsive: [

    {

      breakpoint:427,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1,

        

      }

    },

  ]

  });



  $('.project-progress-slick').slick({

    slidesToShow:3,

    slidesToScroll: 1,

    infinite: true,

    // centerMode: true,

    draggable: true,

    swipe: true,

    arrows:false,

    autoplay: true,

    autoplaySpeed:3000,

    responsive: [

    {

      breakpoint:427,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1,

      }

    },

  ]

  });

  

        

    function restrictAlphabets(e) {

        var x = e.which || e.keycode;

        if ((x >= 48 && x <= 57))

            return true;

        else

            return false;

    }

     



 

	if ($(window).width() >= 800){	

    $(window).scroll(function () {

      if ($(document).scrollTop() > 4700 && $("#myModal").attr("displayed") === "false") {

        $('#myModal').modal('show');

        $("#myModal").attr("displayed", "true");

      }

    });

	}	



  