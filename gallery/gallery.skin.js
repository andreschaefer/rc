!function (i) {
    Gallery.addTheme({
        name: "skin",
        author: "Gallery",
        css: "gallery.skin.css",
        defaults: {
            transition: "pulse",
            thumbCrop: "width",
            imageCrop: false,
            carousel: false,
            show: false,
            easing: "galleryOut",
            trueFullscreen: false,
            _webkitCursor: false,
            _animate: true,
            _onClick: null
        },
        init: function (t) {
            Gallery.requires(1.33, "This version of Azur theme requires Gallery version 1.3.3 or later");
            this.addElement("preloader", "loaded", "close").append({
                container: "preloader",
                preloader: "loaded",
                stage: "close"
            });
            var e = this, a = this.$("stage"), n = this.$("thumbnails"), s = this.$("images"), o = this.$("info"), l = this.$("loader"), r = this.$("target"), h = 0, c = r.width(), f = 0, d = window.location.hash.substr(2), u = function (t) {
                e.$("info").css({left: e.finger ? 20 : Math.max(20, i(window).width() / 2 - t / 2 + 10)})
            }, g = function (i) {
                return Math.min.apply(window, i)
            }, p = function (i) {
                return Math.max.apply(window, i)
            }, m = function (t, e) {
                e = i.extend({
                    speed: 400, width: 190, onbrick: function () {
                    }, onheight: function () {
                    }, delay: 0, debug: false
                }, e);
                t = i(t);
                var a = t.children(), n = t.width(), s = Math.floor(n / e.width), o = [], l, r, h, c, f = {
                    "float": "none",
                    position: "absolute",
                    display: Gallery.SAFARI ? "inline-block" : "block"
                };
                if (t.data("colCount") === s) {
                    return
                }
                t.data("colCount", s);
                if (!a.length) {
                    return
                }
                for (l = 0; l < s; l++) {
                    o[l] = 0
                }
                t.css("position", "relative");
                a.css(f).each(function (t, a) {
                    a = i(a);
                    for (l = s - 1; l > -1; l--) {
                        if (o[l] === g(o)) {
                            r = l
                        }
                    }
                    h = {top: o[r], left: e.width * r};
                    if (typeof h.top !== "number" || typeof h.left !== "number") {
                        return
                    }
                    if (e.speed) {
                        window.setTimeout(function (i, t, e) {
                            return function (a) {
                                Gallery.utils.animate(i, e, {
                                    easing: "galleryOut",
                                    duration: t.speed,
                                    complete: t.onbrick
                                })
                            }
                        }(a, e, h), t * e.delay)
                    } else {
                        a.css(h);
                        e.onbrick.call(a)
                    }
                    if (!a.data("height")) {
                        a.data("height", a.outerHeight(true))
                    }
                    o[r] += a.data("height")
                });
                c = p(o);
                if (c < 0) {
                    return
                }
                if (typeof c !== "number") {
                    return
                }
                if (e.speed) {
                    t.animate({height: p(o)}, e.speed, e.onheight)
                } else {
                    t.height(p(o));
                    e.onheight.call(t)
                }
            };
            this.bind("fullscreen_enter", function (t) {
                this.$("container").css("height", "100%");
                if (e.finger) {
                    i.each(e._controls.slides, function (t, e) {
                        i(e.container).show()
                    })
                }
            });
            this.bind("fullscreen_exit", function (t) {
                if (this.getData().iframe) {
                    i(this._controls.getActive().container).find("iframe").remove();
                    this.$("container").removeClass("iframe")
                }
                Gallery.TOUCH || i(e._controls.getActive().container).hide();
                if (e.finger) {
                    i.each(e._controls.slides, function (t, e) {
                        i(e.container).hide()
                    })
                }
            });
            this._fullscreen.beforeExit = function (i) {
                o.hide();
                if (Gallery.IE8) {
                    Gallery.utils.animate(e.getActiveImage(), {opacity: 0}, {duration: 200})
                }
                Gallery.utils.animate(a[0], {opacity: 0}, {
                    duration: 200, complete: function () {
                        a.css({visibility: "hidden", opacity: 1});
                        n.show();
                        Gallery.utils.animate(n[0], {opacity: 1}, {duration: 200});
                        i()
                    }
                })
            };
            this.bind("thumbnail", function (o) {
                this.addElement("plus");
                var l = o.thumbTarget, c = this.$("plus").css({display: "block"}).insertAfter(l), d = i(l).parent().data("index", o.index);
                if (t.showInfo && this.hasInfo(o.index)) {
                    c.append("<span>" + this.getData(o.index).title + "</span>")
                }
                f = f || i(l).parent().outerWidth(true);
                i(l).css("opacity", 0);
                d.off(t.thumbEventType);
                if (Gallery.IE) {
                    c.hide()
                } else {
                    c.css("opacity", 0)
                }
                if (!Gallery.TOUCH) {
                    d.hover(function () {
                        if (Gallery.IE) {
                            c.show()
                        } else {
                            c.stop().css("opacity", 1)
                        }
                    }, function () {
                        if (Gallery.IE) {
                            c.hide()
                        } else {
                            c.stop().animate({opacity: 0}, 300)
                        }
                    })
                } else {
                    d.on("touchstart", function () {
                        c.css("opacity", 1)
                    }).on("touchend", function () {
                        c.hide()
                    })
                }
                h++;
                this.$("loaded").css("width", h / this.getDataLength() * 100 + "%");
                if (h === this.getDataLength()) {
                    this.$("preloader").fadeOut(100);
                    n.data("colCount", null);
                    m(n, {
                        width: f, speed: t._animate ? 400 : 0, onbrick: function () {
                            var o = this, l = i(o).find("img, .img");
                            window.setTimeout(function (o) {
                                return function () {
                                    Gallery.utils.animate(o, {opacity: 1}, {
                                        duration: t.transition_speed,
                                        complete: function () {
                                            i(o).parent().css("background", "#000")
                                        }
                                    });
                                    o.parent().off("click:fast click").on("click:fast", function () {
                                        var o = i(this).data("index");
                                        if (Gallery.IE < 9) {
                                            i(this).find(".gallery-plus").hide()
                                        }
                                        if (i.isFunction(t._onClick)) {
                                            t._onClick.call(e, e.getData(o));
                                            return
                                        }
                                        a.css({visibility: "visible", opacity: 0});
                                        e.$("target").height(e.$("target").height());
                                        if (e.finger) {
                                            s.css("opacity", 0)
                                        }
                                        Gallery.utils.animate(n[0], {opacity: 0}, {
                                            duration: 100, complete: function () {
                                                n.hide();
                                                e.enterFullscreen();
                                                Gallery.utils.animate(a[0], {opacity: 1}, {
                                                    duration: 200,
                                                    complete: function () {
                                                        if (e.finger) {
                                                            s.animate({opacity: 1});
                                                            e.finger.moveTo(o)
                                                        }
                                                        if (e.finger) {
                                                            e.finger.setPosition(-o * e.finger.width)
                                                        }
                                                        e.show(o)
                                                    }
                                                })
                                            }
                                        })
                                    })
                                }
                            }(l), t._animate ? l.parent().data("index") * 100 : 0)
                        }, onheight: function () {
                            r.height(n.height())
                        }
                    })
                }
            });
            this.bind("loadstart", function (i) {
                if (!i.cached) {
                    l.show()
                }
            });
            this.bind("data", function () {
                h = 0
            });
            this.bind("loadfinish", function (e) {
                if (!e.galleryData) {
                    return
                }
                l.hide();
                this.finger || o.hide();
                if (this.hasInfo() && t.showInfo && this.isFullscreen() && !this.finger) {
                    o.fadeIn(t.transition ? t.transitionSpeed : 0)
                }
                u(i(e.imageTarget).width());
                this.finger && o.show()
            });
            if (!Gallery.TOUCH && !t._webkitCursor) {
                this.addIdleState(this.get("image-nav-left"), {left: -100});
                this.addIdleState(this.get("image-nav-right"), {right: -100});
                this.addIdleState(this.get("info"), {opacity: 0})
            }
            this.$("container").css({width: t.width, height: "auto"});
            if (t._webkitCursor && Gallery.WEBKIT && !Gallery.TOUCH) {
                this.$("image-nav-right,image-nav-left").addClass("cur")
            }
            if (Gallery.TOUCH) {
                this.setOptions({transition: "fadeslide", initialTransition: false})
            }
            this.$("close").on("click:fast", function () {
                e.exitFullscreen()
            });
            if (Gallery.History && d) {
                a.css("visibility", "visible");
                n.hide();
                this.$("preloader").hide();
                this.enterFullscreen(function () {
                    this.show(parseInt(d, 10))
                })
            }
            i(window).resize(function () {
                if (e.isFullscreen()) {
                    if (e.getActiveImage()) {
                        u(e.getActiveImage().width)
                    }
                    return
                }
                var i = r.width();
                if (i !== c) {
                    c = i;
                    m(n, {
                        width: f, delay: 50, debug: true, onheight: function () {
                            r.height(n.height())
                        }
                    })
                }
            })
        }
    })
}(jQuery);