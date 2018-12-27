(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/assets/js/admin"],{

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {// SideNav Button Initialization
$(".button-collapse").sideNav(); // SideNav Scrollbar Initialization

var sideNavScrollbar = document.querySelector('.custom-scrollbar');
$(document).ready(function () {
  Ps.initialize(sideNavScrollbar);
  $('.mdb-select').material_select();
  $('[data-toggle="tooltip"]').tooltip();
});
$('.datepicker').pickadate();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/admin.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\www\tuts\erp\resources\js\admin.js */"./resources/js/admin.js");


/***/ })

},[[1,"/assets/js/manifest","/assets/js/vendor"]]]);