!function(e){function r(e,r,o){return 4===arguments.length?t.apply(this,arguments):void n(e,{declarative:!0,deps:r,declare:o})}function t(e,r,t,o){n(e,{declarative:!1,deps:r,executingRequire:t,execute:o})}function n(e,r){r.name=e,e in v||(v[e]=r),r.normalizedDeps=r.deps}function o(e,r){if(r[e.groupIndex]=r[e.groupIndex]||[],-1==g.call(r[e.groupIndex],e)){r[e.groupIndex].push(e);for(var t=0,n=e.normalizedDeps.length;n>t;t++){var a=e.normalizedDeps[t],u=v[a];if(u&&!u.evaluated){var d=e.groupIndex+(u.declarative!=e.declarative);if(void 0===u.groupIndex||u.groupIndex<d){if(void 0!==u.groupIndex&&(r[u.groupIndex].splice(g.call(r[u.groupIndex],u),1),0==r[u.groupIndex].length))throw new TypeError("Mixed dependency cycle detected");u.groupIndex=d}o(u,r)}}}}function a(e){var r=v[e];r.groupIndex=0;var t=[];o(r,t);for(var n=!!r.declarative==t.length%2,a=t.length-1;a>=0;a--){for(var u=t[a],i=0;i<u.length;i++){var s=u[i];n?d(s):l(s)}n=!n}}function u(e){return y[e]||(y[e]={name:e,dependencies:[],exports:{},importers:[]})}function d(r){if(!r.module){var t=r.module=u(r.name),n=r.module.exports,o=r.declare.call(e,function(e,r){if(t.locked=!0,"object"==typeof e)for(var o in e)n[o]=e[o];else n[e]=r;for(var a=0,u=t.importers.length;u>a;a++){var d=t.importers[a];if(!d.locked)for(var i=0;i<d.dependencies.length;++i)d.dependencies[i]===t&&d.setters[i](n)}return t.locked=!1,r},{id:r.name});t.setters=o.setters,t.execute=o.execute;for(var a=0,i=r.normalizedDeps.length;i>a;a++){var l,s=r.normalizedDeps[a],c=v[s],f=y[s];f?l=f.exports:c&&!c.declarative?l=c.esModule:c?(d(c),f=c.module,l=f.exports):l=p(s),f&&f.importers?(f.importers.push(t),t.dependencies.push(f)):t.dependencies.push(null),t.setters[a]&&t.setters[a](l)}}}function i(e){var r,t=v[e];if(t)t.declarative?f(e,[]):t.evaluated||l(t),r=t.module.exports;else if(r=p(e),!r)throw new Error("Unable to load dependency "+e+".");return(!t||t.declarative)&&r&&r.__useDefault?r["default"]:r}function l(r){if(!r.module){var t={},n=r.module={exports:t,id:r.name};if(!r.executingRequire)for(var o=0,a=r.normalizedDeps.length;a>o;o++){var u=r.normalizedDeps[o],d=v[u];d&&l(d)}r.evaluated=!0;var c=r.execute.call(e,function(e){for(var t=0,n=r.deps.length;n>t;t++)if(r.deps[t]==e)return i(r.normalizedDeps[t]);throw new TypeError("Module "+e+" not declared as a dependency.")},t,n);void 0!==typeof c&&(n.exports=c),t=n.exports,t&&t.__esModule?r.esModule=t:r.esModule=s(t)}}function s(r){var t={};if(("object"==typeof r||"function"==typeof r)&&r!==e)if(m)for(var n in r)"default"!==n&&c(t,r,n);else{var o=r&&r.hasOwnProperty;for(var n in r)"default"===n||o&&!r.hasOwnProperty(n)||(t[n]=r[n])}return t["default"]=r,x(t,"__useDefault",{value:!0}),t}function c(e,r,t){try{var n;(n=Object.getOwnPropertyDescriptor(r,t))&&x(e,t,n)}catch(o){return e[t]=r[t],!1}}function f(r,t){var n=v[r];if(n&&!n.evaluated&&n.declarative){t.push(r);for(var o=0,a=n.normalizedDeps.length;a>o;o++){var u=n.normalizedDeps[o];-1==g.call(t,u)&&(v[u]?f(u,t):p(u))}n.evaluated||(n.evaluated=!0,n.module.execute.call(e))}}function p(e){if(I[e])return I[e];if("@node/"==e.substr(0,6))return I[e]=s(D(e.substr(6)));var r=v[e];if(!r)throw"Module "+e+" not present.";return a(e),f(e,[]),v[e]=void 0,r.declarative&&x(r.module.exports,"__esModule",{value:!0}),I[e]=r.declarative?r.module.exports:r.esModule}var v={},g=Array.prototype.indexOf||function(e){for(var r=0,t=this.length;t>r;r++)if(this[r]===e)return r;return-1},m=!0;try{Object.getOwnPropertyDescriptor({a:0},"a")}catch(h){m=!1}var x;!function(){try{Object.defineProperty({},"a",{})&&(x=Object.defineProperty)}catch(e){x=function(e,r,t){try{e[r]=t.value||t.get.call(e)}catch(n){}}}}();var y={},D="undefined"!=typeof System&&System._nodeRequire||"undefined"!=typeof require&&require.resolve&&"undefined"!=typeof process&&require,I={"@empty":{}};return function(e,n,o,a){return function(u){u(function(u){for(var d={_nodeRequire:D,register:r,registerDynamic:t,get:p,set:function(e,r){I[e]=r},newModule:function(e){return e}},i=0;i<n.length;i++)(function(e,r){r&&r.__esModule?I[e]=r:I[e]=s(r)})(n[i],arguments[i]);a(d);var l=p(e[0]);if(e.length>1)for(var i=1;i<e.length;i++)p(e[i]);return o?l["default"]:l})}}}("undefined"!=typeof self?self:global)

(["1"], [], false, function($__System) {
var require = this.require, exports = this.exports, module = this.module;
!function(e){function n(e,n){e=e.replace(l,"");var r=e.match(u),t=(r[1].split(",")[n]||"require").replace(s,""),i=p[t]||(p[t]=new RegExp(a+t+f,"g"));i.lastIndex=0;for(var o,c=[];o=i.exec(e);)c.push(o[2]||o[3]);return c}function r(e,n,t,o){if("object"==typeof e&&!(e instanceof Array))return r.apply(null,Array.prototype.splice.call(arguments,1,arguments.length-1));if("string"==typeof e&&"function"==typeof n&&(e=[e]),!(e instanceof Array)){if("string"==typeof e){var l=i.get(e);return l.__useDefault?l["default"]:l}throw new TypeError("Invalid require")}for(var a=[],f=0;f<e.length;f++)a.push(i["import"](e[f],o));Promise.all(a).then(function(e){n&&n.apply(null,e)},t)}function t(t,l,a){"string"!=typeof t&&(a=l,l=t,t=null),l instanceof Array||(a=l,l=["require","exports","module"].splice(0,a.length)),"function"!=typeof a&&(a=function(e){return function(){return e}}(a)),void 0===l[l.length-1]&&l.pop();var f,u,s;-1!=(f=o.call(l,"require"))&&(l.splice(f,1),t||(l=l.concat(n(a.toString(),f)))),-1!=(u=o.call(l,"exports"))&&l.splice(u,1),-1!=(s=o.call(l,"module"))&&l.splice(s,1);var p={name:t,deps:l,execute:function(n,t,o){for(var p=[],c=0;c<l.length;c++)p.push(n(l[c]));o.uri=o.id,o.config=function(){},-1!=s&&p.splice(s,0,o),-1!=u&&p.splice(u,0,t),-1!=f&&p.splice(f,0,function(e,t,l){return"string"==typeof e&&"function"!=typeof t?n(e):r.call(i,e,t,l,o.id)});var d=a.apply(-1==u?e:t,p);return"undefined"==typeof d&&o&&(d=o.exports),"undefined"!=typeof d?d:void 0}};if(t)c.anonDefine||c.isBundle?c.anonDefine&&c.anonDefine.name&&(c.anonDefine=null):c.anonDefine=p,c.isBundle=!0,i.registerDynamic(p.name,p.deps,!1,p.execute);else{if(c.anonDefine&&!c.anonDefine.name)throw new Error("Multiple anonymous defines in module "+t);c.anonDefine=p}}var i=$__System,o=Array.prototype.indexOf||function(e){for(var n=0,r=this.length;r>n;n++)if(this[n]===e)return n;return-1},l=/(\/\*([\s\S]*?)\*\/|([^:]|^)\/\/(.*)$)/gm,a="(?:^|[^$_a-zA-Z\\xA0-\\uFFFF.])",f="\\s*\\(\\s*(\"([^\"]+)\"|'([^']+)')\\s*\\)",u=/\(([^\)]*)\)/,s=/^\s+|\s+$/g,p={};t.amd={};var c={isBundle:!1,anonDefine:null};i.amdDefine=t,i.amdRequire=r}("undefined"!=typeof self?self:global);
(function() {
var define = $__System.amdDefine;
!function(e, t) {
  "function" == typeof define && define.amd ? define("2", [], t(e)) : "object" == typeof exports ? module.exports = t(e) : e.smoothScroll = t(e);
}("undefined" != typeof global ? global : this.window || this.global, function(e) {
  "use strict";
  var t,
      n,
      o,
      r,
      a,
      i,
      u,
      c = {},
      l = "querySelector" in document && "addEventListener" in e,
      s = {
        selector: "[data-scroll]",
        selectorHeader: null,
        speed: 500,
        easing: "easeInOutCubic",
        offset: 0,
        callback: function() {}
      },
      f = function() {
        var e = {},
            t = !1,
            n = 0,
            o = arguments.length;
        "[object Boolean]" === Object.prototype.toString.call(arguments[0]) && (t = arguments[0], n++);
        for (var r = function(n) {
          for (var o in n)
            Object.prototype.hasOwnProperty.call(n, o) && (t && "[object Object]" === Object.prototype.toString.call(n[o]) ? e[o] = f(!0, e[o], n[o]) : e[o] = n[o]);
        }; o > n; n++) {
          var a = arguments[n];
          r(a);
        }
        return e;
      },
      d = function(e) {
        return Math.max(e.scrollHeight, e.offsetHeight, e.clientHeight);
      },
      h = function(e, t) {
        var n,
            o,
            r = t.charAt(0),
            a = "classList" in document.documentElement;
        for ("[" === r && (t = t.substr(1, t.length - 2), n = t.split("="), n.length > 1 && (o = !0, n[1] = n[1].replace(/"/g, "").replace(/'/g, ""))); e && e !== document && 1 === e.nodeType; e = e.parentNode) {
          if ("." === r)
            if (a) {
              if (e.classList.contains(t.substr(1)))
                return e;
            } else if (new RegExp("(^|\\s)" + t.substr(1) + "(\\s|$)").test(e.className))
              return e;
          if ("#" === r && e.id === t.substr(1))
            return e;
          if ("[" === r && e.hasAttribute(n[0])) {
            if (!o)
              return e;
            if (e.getAttribute(n[0]) === n[1])
              return e;
          }
          if (e.tagName.toLowerCase() === t)
            return e;
        }
        return null;
      },
      m = function(e) {
        "#" === e.charAt(0) && (e = e.substr(1));
        for (var t,
            n = String(e),
            o = n.length,
            r = -1,
            a = "",
            i = n.charCodeAt(0); ++r < o; ) {
          if (t = n.charCodeAt(r), 0 === t)
            throw new InvalidCharacterError("Invalid character: the input contains U+0000.");
          a += t >= 1 && 31 >= t || 127 == t || 0 === r && t >= 48 && 57 >= t || 1 === r && t >= 48 && 57 >= t && 45 === i ? "\\" + t.toString(16) + " " : t >= 128 || 45 === t || 95 === t || t >= 48 && 57 >= t || t >= 65 && 90 >= t || t >= 97 && 122 >= t ? n.charAt(r) : "\\" + n.charAt(r);
        }
        return "#" + a;
      },
      g = function(e, t) {
        var n;
        return "easeInQuad" === e && (n = t * t), "easeOutQuad" === e && (n = t * (2 - t)), "easeInOutQuad" === e && (n = .5 > t ? 2 * t * t : -1 + (4 - 2 * t) * t), "easeInCubic" === e && (n = t * t * t), "easeOutCubic" === e && (n = --t * t * t + 1), "easeInOutCubic" === e && (n = .5 > t ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1), "easeInQuart" === e && (n = t * t * t * t), "easeOutQuart" === e && (n = 1 - --t * t * t * t), "easeInOutQuart" === e && (n = .5 > t ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t), "easeInQuint" === e && (n = t * t * t * t * t), "easeOutQuint" === e && (n = 1 + --t * t * t * t * t), "easeInOutQuint" === e && (n = .5 > t ? 16 * t * t * t * t * t : 1 + 16 * --t * t * t * t * t), n || t;
      },
      p = function(e, t, n) {
        var o = 0;
        if (e.offsetParent)
          do
            o += e.offsetTop, e = e.offsetParent;
 while (e);
        return o = Math.max(o - t - n, 0), Math.min(o, v() - b());
      },
      b = function() {
        return Math.max(document.documentElement.clientHeight, e.innerHeight || 0);
      },
      v = function() {
        return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight);
      },
      y = function(e) {
        return e && "object" == typeof JSON && "function" == typeof JSON.parse ? JSON.parse(e) : {};
      },
      O = function(e) {
        return e ? d(e) + e.offsetTop : 0;
      },
      H = function(t, n, o) {
        o || (t.focus(), document.activeElement.id !== t.id && (t.setAttribute("tabindex", "-1"), t.focus(), t.style.outline = "none"), e.scrollTo(0, n));
      };
  c.animateScroll = function(n, o, i) {
    var c = y(o ? o.getAttribute("data-options") : null),
        l = f(t || s, i || {}, c),
        d = "[object Number]" === Object.prototype.toString.call(n) ? !0 : !1,
        h = d || !n.tagName ? null : n;
    if (d || h) {
      var m = e.pageYOffset;
      l.selectorHeader && !r && (r = document.querySelector(l.selectorHeader)), a || (a = O(r));
      var b,
          I,
          S = d ? n : p(h, a, parseInt(l.offset, 10)),
          E = S - m,
          A = v(),
          j = 0,
          L = function(t, r, a) {
            var i = e.pageYOffset;
            (t == r || i == r || e.innerHeight + i >= A) && (clearInterval(a), H(n, r, d), l.callback(n, o));
          },
          w = function() {
            j += 16, b = j / parseInt(l.speed, 10), b = b > 1 ? 1 : b, I = m + E * g(l.easing, b), e.scrollTo(0, Math.floor(I)), L(I, S, u);
          },
          C = function() {
            clearInterval(u), u = setInterval(w, 16);
          };
      0 === e.pageYOffset && e.scrollTo(0, 0), C();
    }
  };
  var I = function(t) {
    e.location.hash;
    n && (n.id = n.getAttribute("data-scroll-id"), c.animateScroll(n, o), n = null, o = null);
  },
      S = function(r) {
        if (0 === r.button && !r.metaKey && !r.ctrlKey && (o = h(r.target, t.selector), o && "a" === o.tagName.toLowerCase() && o.hostname === e.location.hostname && o.pathname === e.location.pathname && /#/.test(o.href))) {
          var a = m(o.hash);
          if ("#" === a) {
            r.preventDefault(), n = document.body;
            var i = n.id ? n.id : "smooth-scroll-top";
            return n.setAttribute("data-scroll-id", i), n.id = "", void(e.location.hash.substring(1) === i ? I() : e.location.hash = i);
          }
          n = document.querySelector(a), n && (n.setAttribute("data-scroll-id", n.id), n.id = "", o.hash === e.location.hash && (r.preventDefault(), I()));
        }
      },
      E = function(e) {
        i || (i = setTimeout(function() {
          i = null, a = O(r);
        }, 66));
      };
  return c.destroy = function() {
    t && (document.removeEventListener("click", S, !1), e.removeEventListener("resize", E, !1), t = null, n = null, o = null, r = null, a = null, i = null, u = null);
  }, c.init = function(n) {
    l && (c.destroy(), t = f(s, n || {}), r = t.selectorHeader ? document.querySelector(t.selectorHeader) : null, a = O(r), document.addEventListener("click", S, !1), e.addEventListener("hashchange", I, !1), r && e.addEventListener("resize", E, !1));
  }, c;
});

})();
(function() {
var define = $__System.amdDefine;
define("3", ["2"], function(main) {
  return main;
});

})();
$__System.register("4", [], function (_export) {
    "use strict";

    var accordionInit;
    return {
        setters: [],
        execute: function () {
            console.log('accordion.js');

            accordionInit = function accordionInit() {
                jQuery(".bio").accordion({
                    active: false,
                    collapsible: true,
                    header: "aside",
                    heightStyle: 'content'
                });
            };

            _export("default", accordionInit);
        }
    };
});

$__System.register('1', ['3', '4'], function (_export) {
        'use strict';

        var smooth_scroll, accordionInit;
        return {
                setters: [function (_) {
                        smooth_scroll = _['default'];
                }, function (_2) {
                        accordionInit = _2['default'];
                }],
                execute: function () {

                        smooth_scroll.init();
                        jQuery(document).ready(function () {
                                accordionInit();
                        });
                }
        };
});

})
(function(factory) {
  factory();
});