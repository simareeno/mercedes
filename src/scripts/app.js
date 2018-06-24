jQuery = require("jquery");

jQuery(function() {
  const Fotorama = require("fotorama/fotorama.js");

  jQuery(".navigation__icon").click(function() {
    jQuery(".navigation__list").toggleClass("navigation__list--active");
    jQuery("body").toggleClass("body--fixed");
    jQuery(this).toggleClass("navigation__icon--active");
  });
});
