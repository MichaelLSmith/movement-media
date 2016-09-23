"bundle";
(function() {
var define = System.amdDefine;
!function(e, t) {
  "function" == typeof define && define.amd ? define("github:cferdinandi/smooth-scroll@10.0.1/dist/js/smooth-scroll.min.js", [], t(e)) : "object" == typeof exports ? module.exports = t(e) : e.smoothScroll = t(e);
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
var define = System.amdDefine;
define("github:cferdinandi/smooth-scroll@10.0.1.js", ["github:cferdinandi/smooth-scroll@10.0.1/dist/js/smooth-scroll.min.js"], function(main) {
  return main;
});

})();
System.register('js/custom/app.js', ['github:cferdinandi/smooth-scroll@10.0.1.js'], function (_export) {
  'use strict';

  var smooth_scroll;
  return {
    setters: [function (_githubCferdinandiSmoothScroll1001Js) {
      smooth_scroll = _githubCferdinandiSmoothScroll1001Js['default'];
    }],
    execute: function () {

      smooth_scroll.init();
    }
  };
});
