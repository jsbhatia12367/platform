! function(t) {
    var e = {};

    function n(i) {
        if (e[i]) return e[i].exports;
        var a = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(a.exports, a, a.exports, n), a.l = !0, a.exports
    }
    n.m = t, n.c = e, n.d = function(t, e, i) {
        n.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, n.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, n.t = function(t, e) {
        if (1 & e && (t = n(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (n.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var a in t) n.d(i, a, function(e) {
                return t[e]
            }.bind(null, a));
        return i
    }, n.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return n.d(e, "a", e), e
    }, n.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, n.p = "", n(n.s = 11)
}([function(t, e, n) {
    (function(e) {
        var n = Object.assign ? Object.assign : function(t, e, n, i) {
                for (var a = 1; a < arguments.length; a++) s(Object(arguments[a]), (function(e, n) {
                    t[n] = e
                }));
                return t
            },
            i = function() {
                if (Object.create) return function(t, e, i, a) {
                    var r = o(arguments, 1);
                    return n.apply(this, [Object.create(t)].concat(r))
                }; {
                    function t() {}
                    return function(e, i, a, r) {
                        var s = o(arguments, 1);
                        return t.prototype = e, n.apply(this, [new t].concat(s))
                    }
                }
            }(),
            a = String.prototype.trim ? function(t) {
                return String.prototype.trim.call(t)
            } : function(t) {
                return t.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
            },
            r = "undefined" != typeof window ? window : e;

        function o(t, e) {
            return Array.prototype.slice.call(t, e || 0)
        }

        function s(t, e) {
            c(t, (function(t, n) {
                return e(t, n), !1
            }))
        }

        function c(t, e) {
            if (l(t)) {
                for (var n = 0; n < t.length; n++)
                    if (e(t[n], n)) return t[n]
            } else
                for (var i in t)
                    if (t.hasOwnProperty(i) && e(t[i], i)) return t[i]
        }

        function l(t) {
            return null != t && "function" != typeof t && "number" == typeof t.length
        }
        t.exports = {
            assign: n,
            create: i,
            trim: a,
            bind: function(t, e) {
                return function() {
                    return e.apply(t, Array.prototype.slice.call(arguments, 0))
                }
            },
            slice: o,
            each: s,
            map: function(t, e) {
                var n = l(t) ? [] : {};
                return c(t, (function(t, i) {
                    return n[i] = e(t, i), !1
                })), n
            },
            pluck: c,
            isList: l,
            isFunction: function(t) {
                return t && "[object Function]" === {}.toString.call(t)
            },
            isObject: function(t) {
                return t && "[object Object]" === {}.toString.call(t)
            },
            Global: r
        }
    }).call(this, n(7))
}, function(t, e, n) {
    "use strict";
    var i = n(2),
        a = n.n(i),
        r = (n(8), n(3)),
        o = n.n(r),
        s = n(4),
        c = n.n(s),
        l = n(5),
        u = n.n(l),
        d = [o.a],
        f = [c.a, u.a],
        v = a.a.createStore(d, f);
    e.a = v
}, function(t, e, n) {
    var i = n(0),
        a = i.slice,
        r = i.pluck,
        o = i.each,
        s = i.bind,
        c = i.create,
        l = i.isList,
        u = i.isFunction,
        d = i.isObject;
    t.exports = {
        createStore: v
    };
    var f = {
        version: "2.0.12",
        enabled: !1,
        get: function(t, e) {
            var n = this.storage.read(this._namespacePrefix + t);
            return this._deserialize(n, e)
        },
        set: function(t, e) {
            return void 0 === e ? this.remove(t) : (this.storage.write(this._namespacePrefix + t, this._serialize(e)), e)
        },
        remove: function(t) {
            this.storage.remove(this._namespacePrefix + t)
        },
        each: function(t) {
            var e = this;
            this.storage.each((function(n, i) {
                t.call(e, e._deserialize(n), (i || "").replace(e._namespaceRegexp, ""))
            }))
        },
        clearAll: function() {
            this.storage.clearAll()
        },
        hasNamespace: function(t) {
            return this._namespacePrefix == "__storejs_" + t + "_"
        },
        createStore: function() {
            return v.apply(this, arguments)
        },
        addPlugin: function(t) {
            this._addPlugin(t)
        },
        namespace: function(t) {
            return v(this.storage, this.plugins, t)
        }
    };

    function v(t, e, n) {
        n || (n = ""), t && !l(t) && (t = [t]), e && !l(e) && (e = [e]);
        var i = n ? "__storejs_" + n + "_" : "",
            v = n ? new RegExp("^" + i) : null;
        if (!/^[a-zA-Z0-9_\-]*$/.test(n)) throw new Error("store.js namespaces can only have alphanumerics + underscores and dashes");
        var p = c({
            _namespacePrefix: i,
            _namespaceRegexp: v,
            _testStorage: function(t) {
                try {
                    var e = "__storejs__test__";
                    t.write(e, e);
                    var n = t.read(e) === e;
                    return t.remove(e), n
                } catch (t) {
                    return !1
                }
            },
            _assignPluginFnProp: function(t, e) {
                var n = this[e];
                this[e] = function() {
                    var e = a(arguments, 0),
                        i = this;

                    function r() {
                        if (n) return o(arguments, (function(t, n) {
                            e[n] = t
                        })), n.apply(i, e)
                    }
                    var s = [r].concat(e);
                    return t.apply(i, s)
                }
            },
            _serialize: function(t) {
                return JSON.stringify(t)
            },
            _deserialize: function(t, e) {
                if (!t) return e;
                var n = "";
                try {
                    n = JSON.parse(t)
                } catch (e) {
                    n = t
                }
                return void 0 !== n ? n : e
            },
            _addStorage: function(t) {
                this.enabled || this._testStorage(t) && (this.storage = t, this.enabled = !0)
            },
            _addPlugin: function(t) {
                var e = this;
                if (l(t)) o(t, (function(t) {
                    e._addPlugin(t)
                }));
                else if (!r(this.plugins, (function(e) {
                        return t === e
                    }))) {
                    if (this.plugins.push(t), !u(t)) throw new Error("Plugins must be function values that return objects");
                    var n = t.call(this);
                    if (!d(n)) throw new Error("Plugins must return an object of function properties");
                    o(n, (function(n, i) {
                        if (!u(n)) throw new Error("Bad plugin property: " + i + " from plugin " + t.name + ". Plugins should only return functions.");
                        e._assignPluginFnProp(n, i)
                    }))
                }
            },
            addStorage: function(t) {
                ! function() {
                    var t = "undefined" == typeof console ? null : console;
                    if (t) {
                        var e = t.warn ? t.warn : t.log;
                        e.apply(t, arguments)
                    }
                }("store.addStorage(storage) is deprecated. Use createStore([storages])"), this._addStorage(t)
            }
        }, f, {
            plugins: []
        });
        return p.raw = {}, o(p, (function(t, e) {
            u(t) && (p.raw[e] = s(p, t))
        })), o(t, (function(t) {
            p._addStorage(t)
        })), o(e, (function(t) {
            p._addPlugin(t)
        })), p
    }
}, function(t, e, n) {
    var i = n(0).Global;

    function a() {
        return i.localStorage
    }

    function r(t) {
        return a().getItem(t)
    }
    t.exports = {
        name: "localStorage",
        read: r,
        write: function(t, e) {
            return a().setItem(t, e)
        },
        each: function(t) {
            for (var e = a().length - 1; e >= 0; e--) {
                var n = a().key(e);
                t(r(n), n)
            }
        },
        remove: function(t) {
            return a().removeItem(t)
        },
        clearAll: function() {
            return a().clear()
        }
    }
}, function(t, e) {
    t.exports = function() {
        var t = {};
        return {
            defaults: function(e, n) {
                t = n
            },
            get: function(e, n) {
                var i = e();
                return void 0 !== i ? i : t[n]
            }
        }
    }
}, function(t, e, n) {
    var i = n(0),
        a = i.bind,
        r = i.each,
        o = i.create,
        s = i.slice;
    t.exports = function() {
        var t = o(c, {
            _id: 0,
            _subSignals: {},
            _subCallbacks: {}
        });
        return {
            watch: function(e, n, i) {
                return t.on(n, a(this, i))
            },
            unwatch: function(e, n) {
                t.off(n)
            },
            once: function(e, n, i) {
                t.once(n, a(this, i))
            },
            set: function(e, n, i) {
                var a = this.get(n);
                e(), t.fire(n, i, a)
            },
            remove: function(e, n) {
                var i = this.get(n);
                e(), t.fire(n, void 0, i)
            },
            clearAll: function(e) {
                var n = {};
                this.each((function(t, e) {
                    n[e] = t
                })), e(), r(n, (function(e, n) {
                    t.fire(n, void 0, e)
                }))
            }
        }
    };
    var c = {
        _id: null,
        _subCallbacks: null,
        _subSignals: null,
        on: function(t, e) {
            return this._subCallbacks[t] || (this._subCallbacks[t] = {}), this._id += 1, this._subCallbacks[t][this._id] = e, this._subSignals[this._id] = t, this._id
        },
        off: function(t) {
            var e = this._subSignals[t];
            delete this._subCallbacks[e][t], delete this._subSignals[t]
        },
        once: function(t, e) {
            var n = this.on(t, a(this, (function() {
                e.apply(this, arguments), this.off(n)
            })))
        },
        fire: function(t) {
            var e = s(arguments, 1);
            r(this._subCallbacks[t], (function(t) {
                t.apply(this, e)
            }))
        }
    }
}, , function(t, e) {
    var n;
    n = function() {
        return this
    }();
    try {
        n = n || new Function("return this")()
    } catch (t) {
        "object" == typeof window && (n = window)
    }
    t.exports = n
}, function(t, e, n) {
    var i = n(0).Global;

    function a() {
        return i.sessionStorage
    }

    function r(t) {
        return a().getItem(t)
    }
    t.exports = {
        name: "sessionStorage",
        read: r,
        write: function(t, e) {
            return a().setItem(t, e)
        },
        each: function(t) {
            for (var e = a().length - 1; e >= 0; e--) {
                var n = a().key(e);
                t(r(n), n)
            }
        },
        remove: function(t) {
            return a().removeItem(t)
        },
        clearAll: function() {
            return a().clear()
        }
    }
}, , , function(t, e, n) {
    "use strict";
    n.r(e);
    var i = n(1);

    function a(t) {
        return (a = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
            return typeof t
        } : function(t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        })(t)
    }! function(t) {
        function e() {
            return !!i.a.get("cart") && i.a.get("cart")
        }

        function n() {
            var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : [];
            if ("object" == a(t)) return i.a.set("cart", t)
        }

        function r(t) {
            var i = t.downloadId,
                a = t.title,
                r = t.schedule,
                o = t.tag ? t.tag : "",
                s = t.niceDate ? t.niceDate : "",
                c = t.sessions ? " (" + t.sessions + " sessions)" : "";
            if (i && a && r) {
                var l = e(),
                    u = {
                        id: i,
                        name: a,
                        schedule: r,
                        tag: o,
                        niceDate: s,
                        sessions: c
                    };
                if (l) l.push(u), n(l);
                else {
                    var d = [];
                    d.push(u), n(d)
                }
            }
        }

        function o(t) {
            if (t) {
                var i = e();
                n(i = i.filter((function(e) {
                    return e.id != t
                })))
            }
        }

        function s() {
            var n = t("#cart"),
                i = e(),
                r = "";
            "object" == a(i) && i.length && i.forEach((function(t) {
                r += function(t) {
                    return '<li class="cart-item" data-title="' + t.name + '" data-download-id="' + t.id + '">\n            <div class="cart-item-inner">\n                <div class="cart-title"><p><b>' + t.name + '<span class="muted">' + t.sessions + '</span></b></p></div>\n                <div class="cart-meta">\n                    <div class="tag-circle-container">\n\t\t\t\t\t\t<span class="tag-circle tag-circle--' + t.tag + '"></span>\n\t\t\t\t\t</div>\n                    <p class="small"><b>' + t.niceDate + '</b></p>\n                </div>\n            </div>\n            <i class="ion ion-md-close-circle remove-from-cart"></i>\n        </li>'
                }(t)
            })), n.find("ul").empty().html(r)
        }

        function c() {
            var n = t("#content"),
                i = e(),
                r = t(".cart-button-quantity");
            n.find(".add-to-cart").removeAttr("disabled"), r.text(i.length), i.length ? r.css("opacity", "1") : r.css("opacity", "0"), "object" == a(i) && i.length && i.forEach((function(t) {
                n.find('.add-to-cart[data-download-id="' + t.id + '"]')
            }))
        }

        function l() {
            var t = e(),
                n = [];
            t && "object" == a(t) && 1 < t.length && t.forEach((function(e, i) {
                try {
                    JSON.parse(e.schedule).forEach((function(a) {
                        t.forEach((function(t, r) {
                            i !== r && JSON.parse(t.schedule).forEach((function(i) {
                                (function(t, e, n, i) {
                                    return !!(t <= n && n <= e) || !!(t <= i && i <= e) || !!(n < t && e < i)
                                })(Date.parse(a.start), Date.parse(a.end), Date.parse(i.start), Date.parse(i.end)) && -1 === n.map((function(t) {
                                    return t.id
                                })).indexOf(e.id) && n.push({
                                    id: e.id,
                                    conflictsWith: t.id
                                })
                            }))
                        }))
                    }))
                } catch (t) {}
            })), d(t, n)
        }

        function u(e) {
            var n = e.siblings("#cart");
            n.toggleClass("cart-container-open");
            var i = e.find(".button-cart").toggleClass("cart-open").hasClass("cart-open");
            i && 768 > t(document).width() && (n.addClass("cart-container-open__mobile"), t("body").addClass("no-scroll")), i || (n.removeClass("cart-container-open__mobile"), t("body").removeClass("no-scroll"))
        }

        function d(e, n) {
            var i = t("#cart"),
                r = t("#finalize-registration");
            if (i.find(".cart-item").each((function(e, i) {
                    var a = t(i);
                    a.removeClass("cart-item__invalid"), n.forEach((function(t) {
                        // a.attr("data-download-id") == t.id && (a.addClass("cart-item__invalid"), a.append('<p class="cart-item-conflicts">Conflict with ' + a.siblings('[data-download-id="' + t.conflictsWith + '"]').attr("data-title") + "</p>"))
                    }))
                })), n.length) {
                // r.attr("disabled", "disabled");
                var o = t(".cart-button-outer");
                o.find("#cart-toggle").hasClass("cart-open") || u(o)
            } else "object" == a(e) && e.length ? r.removeAttr("disabled") : r.attr("disabled", "disabled")
        }
        var f = ajaxscript.ajax_url,
            v = (ajaxscript.home_url, ajaxscript.theme_url, ajaxscript.checkout_url),
            p = ajaxscript.nonce;
        i.a.watch("cart", (function() {
            s(), c(), l()
        })), t(document).ready((function() {
            function i(t) {
                t.closest(".card__footer").find(".add-to-cart, .add-to-waitlist").removeClass("private-class").prop("disabled", !1), t.closest(".private-event-form").remove()
            }
            if (function() {
                    var t, e;
                    void 0 === document.hidden ? void 0 === document.msHidden ? void 0 !== document.webkitHidden && (t = "webkitHidden", e = "webkitvisibilitychange") : (t = "msHidden", e = "msvisibilitychange") : (t = "hidden", e = "visibilitychange"), void 0 === document.addEventListener || void 0 === t || document.addEventListener(e, (function() {
                        "visible" == document.visibilityState && (s(), c(), l())
                    }), !1)
                }(), s(), c(), l(), t(document).on("click", ".add-to-cart", (function(e) {
                    var n = t(e.currentTarget),
                        i = t("#cart");
                    n.siblings(".private-event-form").length || "visible" === document.visibilityState && (r(n[0].dataset), i.addClass("active"))
                })), t(document).on("click", ".remove-from-cart", (function(e) {
                    var n = t(e.currentTarget);
                    "visible" === document.visibilityState && o(n.closest("li").attr("data-download-id"))
                })), t(".edd_cart_remove_item_btn").on("click", (function(e) {
                    o(t(e.currentTarget).closest(".edd_cart_item").attr("data-download-id"))
                })), t(".cart-button-outer").on("click", (function(e) {
                    u(t(e.currentTarget))
                })), t("#dismiss-cart").on("click", (function() {
                    u(t(".cart-button-outer"))
                })), t("#finalize-registration").on("click", (function(n) {
                    var i = t(n.currentTarget),
                        r = e();
                    !i.attr("disabled") && (n.preventDefault(), "object" == a(r) && r.length) && (i.attr("disabled", "disabled"), i.addClass("button--pending"), t.ajax({
                        method: "POST",
                        url: "request.php",
                        data: {
                            action: "sync_cart",
                            cart: r,
                            nonce: p
                        },
                        success: function(t) {
                            console.log("Success");
                            t.success && (window.location = v)
                        }
                    }).always((function() {
                        i.removeAttr("disabled"), i.removeClass("button--pending")
                    })))
                })), t("body").hasClass("edd-success") && n([]), t(".add-to-waitlist").on("click", (function(e) {
                    var n = t(e.currentTarget),
                        i = t("#waitlist-modal");
                    n.siblings(".private-event-form").length || (i.attr("data-event-id", n.attr("data-event-id")), i.find("input").not('[type="radio"]').not('[type="checkbox"]').val(""), i.find(".notice").remove(), i.find("form").css("display", "block"), i.find("#waitlist-submit").css("display", "block"), i.modal("show"))
                })), t("#waitlist-submit").on("click", (function(e) {
                    var n = t(e.currentTarget),
                        i = t("#waitlist-modal"),
                        a = i.attr("data-event-id"),
                        r = i.find("form"),
                        o = !1,
                        s = !1;
                    r.find(".missing-required").removeClass("missing-required"), r.find(".invalid-input").removeClass("invalid-input"), r.find(".notice").remove(), r.removeClass("validation-error"), r.find('input[type="tel"]').val(r.find('input[type="tel"]').val().replace(/\D/g, ""));
                    var c = r.find("input[data-conditional-switch]:visible");
                    if ((void 0 === c.val() || "" == c.val()) && (c.addClass("missing-required"), o = !0), r.find("input, textarea").each((function() {
                            t(this)[0].checkValidity() || (s = !0, t(this).addClass("invalid-input")), t(this)[0].hasAttribute("required") && (void 0 === t(this).val() || "" == t(this).val() || t(this).is('[type="checkbox"]') && !t(this).is(":checked")) && (t(this).addClass("missing-required"), o = !0)
                        })), o || s) return r.addClass("validation-error"), void r.append('<div class="notice notice--error">One or more errors were detected in your submission, and have been highlighted above. Please correct them and try again.</div>');
                    var l = "";
                    switch (r.find('input[name="contact-preference"]:checked').val()) {
                        case "email":
                            l = r.find('[name="email"]').val();
                            break;
                        case "phone":
                            l = r.find('[name="phone"]').val()
                    }
                    var u = {
                        name: r.find('[name="name"]').val(),
                        contact: l
                    };
                    n.prop("disabled", !0), t.ajax({
                        method: "POST",
                        url: f,
                        data: {
                            action: "submit_add_to_waitlist",
                            user: u,
                            event_id: a,
                            nonce: p
                        },
                        success: function(t) {
                            if (t.success) r.css("display", "none"), i.find("#waitlist-submit").css("display", "none"), r.after('<div class="notice notice--success">Thanks for your interest! You\'ve been added to the waitlist, and we will let you know when a spot becomes available.</div>'), n.prop("disabled", !1);
                            else {
                                var e = "";
                                "full" == t.code ? e = "Sorry, the waitlist is full." : "required_fields" == t.code ? e = "Sorry, your submission is missing some required field(s). Please ensure everything is filled out and try again." : "err" == t.code ? e = "Oh no! Something went wrong, please try again." : "exists" == t.code && (e = "It looks like you've already signed up for this waitlist! Thanks for your interest. We'll be sure to let you know when a spot becomes available."), e && r.append('<div class="notice notice--error">' + e + "</div>"), n.prop("disabled", !1)
                            }
                        }
                    })
                })), t(".archive-lazy").length) {
                var d = t(".archive-lazy"),
                    h = d.attr("data-pages");
                d.attr("data-search-term") && d.attr("data-search-term");
                if (1 < h && "IntersectionObserver" in window) {
                    var m = function(e) {
                            b = !0, t("#load-more").find(".label").text("Loading...");
                            var n = t("#load-more").find(".load-more-indicator");
                            n.addClass("loading-more");
                            var i = {
                                action: "archive_get_page",
                                page: e,
                                s: d.attr("data-search-term"),
                                nonce: p
                            };
                            t.ajax({
                                method: "GET",
                                url: f,
                                data: i,
                                success: function(i) {
                                    i.success ? (t(i.html).appendTo(t("#load-more-target")), n.removeClass("loading-more"), ++g, b = !1, t("#load-more").find(".label").text(""), g > h && t("#load-more").find(".label").text("End of Archive")) : m(e)
                                }
                            })
                        },
                        b = !1,
                        g = 2;
                    new IntersectionObserver((function(t) {
                        t.forEach((function(t) {
                            t.isIntersecting && !b && g <= h && m(g)
                        }))
                    }), {
                        rootMargin: "0px",
                        threshold: 1
                    }).observe(document.getElementById("load-more"))
                }
            }
            if (t("#cancellation-wrap").length) {
                var y = t("#cancellation-wrap"),
                    _ = t("#cancel-registration");
                _.on("click", (function() {
                    if (confirm("Are you sure you want to cancel your registration?\nThis is a non-reversible action.")) {
                        _.addClass("button--ajaxing"), _.prop("disabled", !0);
                        var e = _.attr("data-id");
                        t.ajax({
                            method: "GET",
                            url: f,
                            data: {
                                action: "unregister_self",
                                id: e,
                                nonce: p
                            },
                            success: function(e) {
                                e.success ? y.empty().html('<div class="col-12"><p>You have successfully been unregistered from this class.</p></div>') : (_.removeClass("button--ajaxing"), _.prop("disabled", !1), t(".cancel-box-message").remove(), t('<p class="notice cancel-box-message">Something went wrong, try again later or contact us.</p>').appendTo(".cancel-box"))
                            }
                        })
                    } else _.prop("disabled", !1)
                }))
            }
            var w = e();
            t(".add-to-cart").each((function(e, n) {
                var a = t(n);
                w && w.forEach((function(t) {
                    parseInt(a.data("download-id")) == t.id && i(a.closest(".card__footer").find(".form-contents .button"))
                }))
            })), t(document).on("click", ".private-event-form .button", (function(e) {
                e.preventDefault();
                var n = t(e.currentTarget),
                    a = n.closest("form"),
                    r = a[0].checkValidity();
                if (a[0].reportValidity(), r) {
                    var o = n.data("id"),
                        s = n.siblings('input[type="text"]').val();
                    o && s && (n.addClass("button--ajaxing button--disabled"), t.ajax({
                        method: "GET",
                        url: f,
                        data: {
                            action: "check_private_class_code",
                            id: o,
                            code: s,
                            nonce: p
                        },
                        success: function(t) {
                            t.success ? i(n) : (a.find('input[type="text"]').addClass("input-invalid"), a.find(".private-event-user-message").text("Invalid Code")), n.removeClass("button--ajaxing button--disabled")
                        }
                    }))
                }
            }))
        }))
    }(jQuery)
}]);