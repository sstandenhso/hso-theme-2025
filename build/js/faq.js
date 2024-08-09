/*! For license information please see faq.js.LICENSE.txt */
(()=>{"use strict";var l;(l=document.querySelectorAll(".faq-item .collapse"))&&[].forEach.call(l,(function(l){var o=$(l);o.on("show.bs.collapse",(function(){!function(l){l.closest(".faq").find(".collapse").not(l).collapse("hide")}(o)}))}))})();
//# sourceMappingURL=faq.js.map