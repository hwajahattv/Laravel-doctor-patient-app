"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [1129], {
        21129: (t, e, a) => {
            a.d(e, {
                ZP: () => x
            });
            var l = a(3735),
                n = a(37703),
                r = a(65702),
                s = a(31866),
                i = a(61093),
                o = a(94597),
                c = a(12164),
                u = a(31169),
                g = a(66952),
                p = a(94184),
                h = a.n(p),
                m = a(12103),
                G = a(66510),
                k = a(11574);
            const z = "IMl2x",
                b = "Ha8Q_",
                U = "I7LRm VXHKb vJr7f O84oE AVFKX",
                v = t => {
                    let {
                        responseOption: e,
                        trackSearchSuggestionClick: a
                    } = t;
                    const n = (0, G.DO)()({
                        className: h()(z, (0, l.zG)(e, c.g_((() => U), (() => b))))
                    });
                    return (0, l.zG)(e, c.g_((() => g.az("div", { ...n
                    })), (t => {
                        let {
                            tag: e,
                            emplacement: l
                        } = t;
                        return g.az(k.Z, { ...n,
                            to: e.linkUrl,
                            title: e.titleAttribute,
                            onClick: () => a(e.title.toLowerCase(), l)
                        }, e.title)
                    })))
                },
                y = (0, r.Z3)()({
                    trackSearchSuggestionClick: m._W
                }),
                _ = (0, l.zG)(v, (0, n.$j)(null, y));
            var d = a(46242),
                A = a(28486),
                P = a(16017),
                C = a(55475),
                I = a(13959),
                O = a(85806),
                $ = a(28293),
                f = a(47999),
                w = a(13904),
                S = a.n(w),
                D = a(85875);
            const V = S()({
                [D.cN]: (0, w.ofType)(),
                [D.HI]: (0, w.ofType)()
            }, {
                tag: "type"
            });
            var Y = a(8844);
            const Z = c.AU((t => "type" in t ? c.G(t) : c.YP)),
                N = c.AU((t => "linkUrl" in t ? c.G(t) : c.YP)),
                T = t => `${t} images`,
                j = (t, e) => (0, l.zG)(e, c.UI((e => Z(e) ? ((t, e) => {
                    const a = (0, O.M7)(t);
                    return (0, l.zG)(e, V.match({
                        search: t => {
                            let {
                                title: e
                            } = t;
                            return {
                                title: e,
                                titleAttribute: T(e),
                                linkUrl: Y.y$.searchPhotos({
                                    query: e
                                })
                            }
                        },
                        landing_page: e => {
                            let {
                                title: l,
                                source: n
                            } = e;
                            const r = (0, f.hg)(t, n);
                            return {
                                title: a ? l : r.title,
                                titleAttribute: a ? T(l) : r.title,
                                linkUrl: $.xe(r)
                            }
                        }
                    }))
                })(t, e) : N(e) ? (t => ({ ...t,
                    titleAttribute: T(t.title)
                }))(e) : (0, d.ZP)(e)))),
                H = (0, l.ls)((t => e => a => {
                    let {
                        routeData: n
                    } = a;
                    return (0, l.zG)(n, Y.Vw.Union.match({
                        Search: (0, l.ls)(Y.y$.search, c.G),
                        LandingPage: (0, l.ls)(Y.y$.landingPage, c.G),
                        [I._]: () => c.YP
                    }), c.Gg((a => a(e) === t.linkUrl(e))))
                }), C.UI(P.ff)),
                L = "VZRk3",
                M = "bmeX6",
                Q = t => {
                    let {
                        responseOptions: e
                    } = t;
                    const a = (0, i.bU)();
                    return g.az("div", {
                        className: L
                    }, e(a).map(((t, e) => {
                        const a = (0, l.zG)([c.G(e.toString()), (0, l.zG)(t, c.UI((t => t.tag.title)))], o.oA$, (t => (0, l.zG)(t, o.MJ0("-"))));
                        return g.az("div", {
                            key: a,
                            className: M
                        }, g.az(_, {
                            responseOption: t
                        }))
                    })))
                },
                X = (0, r.O)()((() => {
                    const t = (0, A.Yi)((t => {
                        let {
                            state: e,
                            tags: a,
                            routeData: l,
                            emplacement: n
                        } = t;
                        return C.VF((t => a.map((t => j(e, c.ij(t)))).filter(c.g_((() => !0), (e => H(e)(t)({
                            routeData: l
                        })))).map(c.UI((t => ({
                            tag: t,
                            emplacement: n
                        }))))))
                    }));
                    return (e, a) => ({
                        responseOptions: t({
                            state: e,
                            ...(0, u.ei)(a, "tags", "routeData", "emplacement")
                        })
                    })
                })),
                x = (0, l.zG)(Q, (0, n.$j)(X), s.C)
        },
        47999: (t, e, a) => {
            a.d(e, {
                Yc: () => s,
                hg: () => i,
                Qt: () => o
            });
            var l = a(3735),
                n = a(41913),
                r = a(84774);
            const s = t => (e, a) => (0, l.zG)(e, n.vt, (e => t(e, a))),
                i = s(r.hg),
                o = (0, l.ls)(r.Qt, s)
        }
    }
]);
//# sourceMappingURL=1129.123df9ee49dd1374a087.js.map