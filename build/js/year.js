/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!************************!*\
  !*** ./src/js/year.js ***!
  \************************/
//
// year.js
// Theme module
//



(function () {
  // Variables
  // =========

  var year = document.querySelectorAll('.current-year');

  // Methods
  // =======

  function appendYear(elem) {
    var date = new Date().getFullYear();
    var text = document.createTextNode(date);
    elem.appendChild(text);
  }

  // Events
  // ======

  if (year) {
    [].forEach.call(year, function (elem) {
      appendYear(elem);
    });
  }
})();
/******/ })()
;
//# sourceMappingURL=year.js.map