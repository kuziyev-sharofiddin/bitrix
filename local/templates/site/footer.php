<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<div class="footer">
    <div class="wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="footer-box">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer/inc_logo.php"
	                )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer/inc_title.php"
	                )
                );?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6"><a class="active">
                    <div class="footer-box back-to-top">
                        <p>BACK TO TOP</p><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/arrow.a74212b6.svg" alt="arrow">
                    </div>
                </a></div>
        </div>
    </div>
</div>
</div>
</div>
<script>!function (e) { function t(t) { for (var n, l, i = t[0], p = t[1], f = t[2], c = 0, s = []; c < i.length; c++)l = i[c], Object.prototype.hasOwnProperty.call(o, l) && o[l] && s.push(o[l][0]), o[l] = 0; for (n in p) Object.prototype.hasOwnProperty.call(p, n) && (e[n] = p[n]); for (a && a(t); s.length;)s.shift()(); return u.push.apply(u, f || []), r() } function r() { for (var e, t = 0; t < u.length; t++) { for (var r = u[t], n = !0, i = 1; i < r.length; i++) { var p = r[i]; 0 !== o[p] && (n = !1) } n && (u.splice(t--, 1), e = l(l.s = r[0])) } return e } var n = {}, o = { 1: 0 }, u = []; function l(t) { if (n[t]) return n[t].exports; var r = n[t] = { i: t, l: !1, exports: {} }; return e[t].call(r.exports, r, r.exports, l), r.l = !0, r.exports } l.m = e, l.c = n, l.d = function (e, t, r) { l.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r }) }, l.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, l.t = function (e, t) { if (1 & t && (e = l(e)), 8 & t) return e; if (4 & t && "object" == typeof e && e && e.__esModule) return e; var r = Object.create(null); if (l.r(r), Object.defineProperty(r, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e) for (var n in e) l.d(r, n, function (t) { return e[t] }.bind(null, n)); return r }, l.n = function (e) { var t = e && e.__esModule ? function () { return e.default } : function () { return e }; return l.d(t, "a", t), t }, l.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, l.p = "/themes/min/"; var i = this["webpackJsonpmint-portfolio-template"] = this["webpackJsonpmint-portfolio-template"] || [], p = i.push.bind(i); i.push = t, i = i.slice(); for (var f = 0; f < i.length; f++)t(i[f]); var a = p; r() }([])</script>
</body>
</html>