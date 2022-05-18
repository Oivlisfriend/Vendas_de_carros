/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/views/wilsardcar/js/script.js ***!
  \*************************************************/
$('.btn-cancelar').on('click', function () {
  $('.panelc').css('display', 'none');
  $('.panelc').css('visibility', 'hidden');
  $('.panelc').css('opacity', '0');
  $('.panel-e').css('display', 'none');
  $('.panel-e').css('visibility', 'hidden');
  $('.panel-e').css('opacity', '0');
});
$('.btn-add').on('click', function () {
  $('.panelc').css('display', 'block');
  $('.panelc').css('visibility', 'visible');
  $('.panelc').css('opacity', '1');
});
$('.btn-edit').on('click', function () {
  $('.panel-e').css('display', 'block');
  $('.panel-e').css('visibility', 'visible');
  $('.panel-e').css('opacity', '1');
});
/******/ })()
;