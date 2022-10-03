"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_home_BodyMain_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0":
/*!***********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0 ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "w-full h-screen overflow-hidden relative"
};

var _hoisted_2 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"bg-main\"><div class=\"nav-menu flex justify-between items-center mx-16 pt-7\"><div class=\"logo-web cursor-pointer text-2xl flex space-x-3\"><p class=\"text-teal-100 font-medium\">FORUM</p><p class=\"font-semibold text-teal-700\">GUHCODING</p></div><div class=\"menu-nav sm:block hidden\"><ul class=\"flex items-center space-x-10 font-semibold\"><li><a href=\"\" class=\"text-white\">HOME</a></li><li><a href=\"auth/register\" class=\"text-white\">REGISTER</a></li><li><a href=\"auth/login\" class=\"menu-login py-2 px-6 rounded-full outline outline-2 outline-white text-white transition duration-300\">LOGIN</a></li></ul></div></div></div><div class=\"left-section grid grid-cols-1 md:mt-72 mt-52 md:ml-16 ml-0 md:px-0 px-3\"><div class=\"wrapper-main-content z-20 w-full md:w-96 h-fit p-7 md:p-0 md:bg-transparent md:outline-none outline outline-2 outline-teal-400 rounded\"><div class=\"text-teal-700\"><div class=\"mb-5 space-y-2 text-center\"><h1 class=\"text-4xl font-semibold\">Hallo Developer</h1><h2 class=\"text-lg\">Temukan Ilmu dan Relasi Dengan Join Forum GuhCoding</h2></div></div><div class=\"btn-forum text-center\"><a href=\"forum\" class=\"button-forum py-2.5 px-12 rounded-full text-white border-b-4 border-teal-500\">FORUM</a></div></div></div>", 2);

var _hoisted_4 = [_hoisted_2];
function render(_ctx, _cache) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, _hoisted_4);
}

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css":
/*!********************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.bg-main {\n        position: absolute;\n        z-index: 2;\n        width: 100%;\n        height: 100%;\n        background-image: url('/img/bg-main2.png');\n        background-position: top right;\n        background-size: 60vmax;\n        background-repeat: no-repeat;\n}\n.logo-web {\n        position: relative;\n        width: auto;\n        height: 100%;\n        padding: 8px;\n        border-radius: 8px;\n        transform: rotate(5deg);\n        background-color: #16acc3;\n        border-bottom: 4px solid #1a7e8d;\n        transition: transform 0.3s ease-in-out;\n        animation: wiggle 0.3s ease-in-out alternate-reverse infinite;\n}\n.logo-web::before {\n        content: \"\";\n        position: absolute;\n        bottom: 10%;\n        left: -1%;\n        z-index: -3;\n        width: 230px;\n        height: 38px;\n        transform: rotate(-3deg);\n        border-radius: 5px;\n        background-color: #1dcbe6;\n        border-bottom: 3px solid #03323a;\n        animation: wiggle2 0.4s ease-in-out alternate-reverse infinite;\n}\n.logo-web:hover {\n        -webkit-animation: none;\n                animation: none;\n        transform: rotate(0deg);\n}\n.logo-web:hover::before {\n        -webkit-animation: none;\n                animation: none;\n        transform: rotate(0deg);\n}\n@-webkit-keyframes wiggle {\n0% {\n            transform: rotate(-2deg);\n}\n100% {\n            transform: rotate(2deg);\n}\n}\n@keyframes wiggle {\n0% {\n            transform: rotate(-2deg);\n}\n100% {\n            transform: rotate(2deg);\n}\n}\n@-webkit-keyframes wiggle2 {\n0% {\n            transform: rotate(6deg);\n}\n100% {\n            transform: rotate(-6deg);\n}\n}\n@keyframes wiggle2 {\n0% {\n            transform: rotate(6deg);\n}\n100% {\n            transform: rotate(-6deg);\n}\n}\n.menu-login:hover {\n        background-color: #0093AA;\n        outline: 2px solid #0093AA;\n}\n.button-forum {\n        background-color: #0093AA;\n}\n@media screen and (max-width: 768px) {\n.bg-main {\n            background-size: cover;\n}\n.logo-web {\n            width: auto;\n            position: relative;\n            bottom: 40%;\n            left: 10%;\n}\n.btn-forum {\n            text-align: center;\n}\n.wrapper-main-content {\n            background-color: rgba(21, 236, 184, 0.6);\n}\n}\n\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css":
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_style_index_0_id_5d0a27e0_lang_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_style_index_0_id_5d0a27e0_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_style_index_0_id_5d0a27e0_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/home/BodyMain.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/home/BodyMain.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _BodyMain_vue_vue_type_template_id_5d0a27e0__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BodyMain.vue?vue&type=template&id=5d0a27e0 */ "./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0");
/* harmony import */ var _BodyMain_vue_vue_type_style_index_0_id_5d0a27e0_lang_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css */ "./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css");
/* harmony import */ var _var_www_html_forum_guhcoding_testing_forum_guhcoding_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");

const script = {}

;


const __exports__ = /*#__PURE__*/(0,_var_www_html_forum_guhcoding_testing_forum_guhcoding_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(script, [['render',_BodyMain_vue_vue_type_template_id_5d0a27e0__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/home/BodyMain.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0 ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_template_id_5d0a27e0__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_template_id_5d0a27e0__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./BodyMain.vue?vue&type=template&id=5d0a27e0 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=template&id=5d0a27e0");


/***/ }),

/***/ "./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css":
/*!***********************************************************************************************!*\
  !*** ./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BodyMain_vue_vue_type_style_index_0_id_5d0a27e0_lang_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home/BodyMain.vue?vue&type=style&index=0&id=5d0a27e0&lang=css");


/***/ })

}]);