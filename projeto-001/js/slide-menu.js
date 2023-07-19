$(function () {
  //codigo javascript
  $("nav.mobile").removeClass("active");

  $("nav.mobile").click(function () {
    $("nav.mobile").toggleClass("active");
  });
});
