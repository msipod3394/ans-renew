// header
$(document).ready(function () {

  $(".js-hover-service").hover(
    function () {
      console.log("hover!");
      $(".js-hover-service").addClass("_isShow");
    },
    function () {
      console.log("hover out!");
      $(".js-hover-service").removeClass("_isShow");
    }
  );

  $(".js-hover-company").hover(
    function () {
      console.log("hover!");
      $(".js-hover-company").addClass("_isShow");
    },
    function () {
      console.log("hover out!");
      $(".js-hover-company").removeClass("_isShow");
    }
  );

});
