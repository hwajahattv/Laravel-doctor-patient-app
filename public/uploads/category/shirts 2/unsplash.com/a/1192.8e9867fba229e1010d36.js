"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [1192], {
        41117: (t, e, r) => {
            r.d(e, {
                Z: () => i
            });
            var o = r(63093),
                n = r(66952);
            class s extends n.wA {
                constructor() {
                    var t, e, r;
                    super(...arguments), r = {
                        hasError: !1
                    }, (e = "state") in (t = this) ? Object.defineProperty(t, e, {
                        value: r,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : t[e] = r
                }
                static getDerivedStateFromError(t) {
                    return {
                        hasError: !0
                    }
                }
                componentDidCatch(t, e) {
                    (0, o.wj)({
                        error: t,
                        sentryExtra: { ...e
                        }
                    })
                }
                render() {
                    return !1 === this.state.hasError && this.props.children
                }
            }
            const i = s
        },
        38792: (t, e, r) => {
            r.d(e, {
                Um: () => v
            });
            var o = r(3735),
                n = r(1885),
                s = r(7209),
                i = r(94597),
                a = r(22972),
                u = r(12164);
            const c = u.AU((t => "position" in t ? u.G(t) : u.YP)),
                l = (t, e) => (0, o.zG)(t, i.P58(e.position.column), u.tS(i.ZQj(e.position.row, e)), u.tS((r => {
                    const n = r;
                    return (0, o.zG)(t, i.WlJ(e.position.column, n))
                })), u.sc(t)),
                m = t => {
                    const {
                        left: e,
                        right: r
                    } = (0, o.zG)(t.items, i.uKc(c)), s = (t => {
                        let {
                            items: e,
                            columnCount: r
                        } = t;
                        const s = (a = r, Array.from({
                            length: a
                        }).map((() => ({
                            totalHeight: 0,
                            items: []
                        }))));
                        var a;
                        return e.forEach((t => {
                            const e = (0, o.zG)(s, n.nI, u.UI(i.LTh(p())), u.gf);
                            h(t) && (e.totalHeight += t.height / t.width), e.items.push(t)
                        })), s.map((t => t.items))
                    })({
                        items: e,
                        columnCount: t.columnCount
                    });
                    return r.reduce(l, s)
                },
                h = u.AU((t => "height" in t && "width" in t ? u.G(t) : u.YP)),
                p = () => s.contramap((t => t.totalHeight))(a.Df);
            var d = r(68880),
                g = r(66952);
            const w = "mItv1",
                b = "ripi6",
                v = t => {
                    let {
                        columnCount: e,
                        columnGutter: r,
                        rowGutter: o,
                        items: n,
                        dataTestAttribute: s
                    } = t;
                    const i = m({
                        items: n,
                        columnCount: e
                    });
                    return g.az("div", {
                        className: w,
                        style: {
                            "--column-gutter": d.Ei(r),
                            "--columns": e.toString()
                        },
                        ...s ? ? {}
                    }, i.map(((t, e) => g.az("div", {
                        key: e,
                        className: b,
                        style: {
                            "--row-gutter": d.Ei(o)
                        }
                    }, t.map((t => g.az(g.HY, {
                        key: t.key
                    }, t.element)))))))
                }
        },
        36642: (t, e, r) => {
            r.d(e, {
                f: () => o,
                o: () => n
            });
            const o = 500,
                n = 3e3
        }
    }
]);
//# sourceMappingURL=1192.8e9867fba229e1010d36.js.map