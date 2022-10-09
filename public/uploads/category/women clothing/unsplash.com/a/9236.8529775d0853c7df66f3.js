"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [9236], {
        58856: (e, o, t) => {
            t.d(o, {
                Z: () => l
            });
            var n = t(66952),
                r = t(76623);
            const a = "rfzWF",
                i = "PTz06",
                l = e => {
                    let {
                        type: o
                    } = e;
                    return n.az("div", {
                        className: a
                    }, n.az(r.Z, {
                        alt: "No content available",
                        className: i,
                        src: `/a/img/empty-states/${o}.png`
                    }))
                }
        },
        87124: (e, o, t) => {
            t.d(o, {
                Z: () => a
            });
            var n = t(66952);
            const r = "rJ2xz bYpwS U8eXG M5vdR",
                a = e => {
                    let {
                        children: o
                    } = e;
                    return n.az("div", {
                        className: r
                    }, o)
                }
        },
        76905: (e, o, t) => {
            t.d(o, {
                sF: () => n,
                SN: () => c.SN,
                v8: () => d,
                $E: () => c.$E,
                gw: () => p
            });
            var n = {};
            t.r(n), t.d(n, {
                forEachUrl: () => l
            });
            var r = t(3735),
                a = t(31461),
                i = t(84162);
            const l = e => (0, r.zG)(a.id(), a.prop("urls"), a.modify(i.UI(e)));
            var s = t(60173),
                c = t(78260);
            const d = e => (0, c.t2)(e) && (() => {
                    switch (e.evaluation_status) {
                        case "in_review":
                        case "approved":
                            return !1;
                        case "dmca_requested":
                        case "dmca_pending_review":
                        case "dmca_approved":
                            return !0
                    }
                })(),
                p = e => (0, s.$K)(e.sponsorship)
        },
        19838: (e, o, t) => {
            t.d(o, {
                ug: () => n,
                aX: () => A,
                hm: () => N
            });
            var n = {};
            t.r(n), t.d(n, {
                _y: () => d,
                xP: () => p,
                f5: () => s,
                Sy: () => f,
                US: () => u,
                c3: () => h,
                EJ: () => c
            });
            var r = t(13904),
                a = t.n(r),
                i = t(12164),
                l = t(66952);
            const s = a()({
                    Topic: (0, r.ofType)(),
                    Collection: (0, r.ofType)(),
                    Editorial: (0, r.ofType)(),
                    Following: (0, r.ofType)(),
                    UserProfile: (0, r.ofType)(),
                    UserStats: (0, r.ofType)(),
                    UserLikes: (0, r.ofType)(),
                    RelatedPhotos: (0, r.ofType)(),
                    VisualSearch: (0, r.ofType)(),
                    Search: (0, r.ofType)(),
                    Explore: (0, r.ofType)()
                }),
                c = a()({
                    PhotoOfTheDay: (0, r.ofType)(),
                    Photo: (0, r.ofType)(),
                    CollectionThumbnail: (0, r.ofType)(),
                    ...s._Record
                }),
                d = l.kr(i.YP);
            var p, u, f, h;
            ! function(e) {
                e.Topic = "topic-feed", e.Collection = "collection-page", e.CollectionThumbnail = "collection-thumbnail"
            }(p || (p = {})),
            function(e) {
                e.Editorial = "editorial-feed", e.KeywordSearch = "search"
            }(u || (u = {})),
            function(e) {
                e.PhotoPage = "photo-page", e.PhotoOfTheDay = "photo-of-the-day"
            }(f || (f = {})),
            function(e) {
                e.Following = "following-feed", e.UserProfile = "profile-page", e.UserStats = "profile-stats", e.UserLikes = "profile-liked", e.RelatedPhotos = "photo-related", e.Explore = "explore-feed", e.VisualSearch = "visual-search"
            }(h || (h = {}));
            var y = t(3735),
                m = t(8585),
                T = t(60026),
                g = t(43856),
                w = t(91361);
            const v = e => g.Y3((() => window.btoa(e)), (e => new Error(`Encoding base64 failed: ${(0,w.e$)(e,{includeStack:!1})}`)));
            var k, P, S = t(63093),
                U = t(62073),
                x = t(31169),
                E = t(76905),
                b = t(94597),
                C = t(66510),
                I = t(99590);
            ! function(e) {
                e.English = "en"
            }(k || (k = {})),
            function(e) {
                e[e.False = 0] = "False", e[e.True = 1] = "True"
            }(P || (P = {}));
            const z = {
                    [I.KM.Relevant]: 0,
                    [I.KM.Latest]: 2
                },
                F = {
                    [I.i5.Landscape]: 0,
                    [I.i5.Portrait]: 1,
                    [I.i5.Squareish]: 2
                },
                R = e => e ? P.True : P.False,
                _ = e => F[e],
                B = e => Math.max(0, e + 1),
                G = e => {
                    const o = encodeURIComponent(e);
                    return (0, y.zG)(v(o), g.UI((0, y.a9)(o)))
                },
                D = (0, C.FH)()(["version", "appId", "ad", "fromApi", "placement", "position", "deckId", "keywords", "language", "safety", "orientation", "orderBy", "color", "timestamp"]),
                L = (0, y.ls)((e => ({
                    version: 2,
                    appId: 1207,
                    ad: "ad" in e ? e.ad : R(!1),
                    fromApi: R(!1),
                    placement: e.placement,
                    position: "position" in e ? e.position : null,
                    deckId: "deckId" in e ? e.deckId : null,
                    keywords: "keywords" in e ? e.keywords : null,
                    language: k.English,
                    safety: "safety" in e ? e.safety : R(!1),
                    orientation: "orientation" in e ? e.orientation : null,
                    orderBy: "orderBy" in e ? e.orderBy : null,
                    color: "color" in e ? e.color : null,
                    timestamp: null
                })), (e => (0, y.zG)(D, b.UID((o => e[o])), b.UID((e => {
                    if (null === e) return "";
                    switch (typeof e) {
                        case "string":
                            return e;
                        case "number":
                            return e.toString()
                    }
                })), b.MJ0("|")))),
                N = c.match({
                    Editorial: e => {
                        let {
                            ad: o,
                            index: t
                        } = e;
                        return {
                            placement: u.Editorial,
                            ad: R(o),
                            position: B(t)
                        }
                    },
                    Collection: e => {
                        let {
                            id: o,
                            index: t
                        } = e;
                        return {
                            placement: p.Collection,
                            deckId: o,
                            position: B(t)
                        }
                    },
                    CollectionThumbnail: e => {
                        let {
                            id: o
                        } = e;
                        return {
                            placement: p.CollectionThumbnail,
                            deckId: o
                        }
                    },
                    Following: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.Following,
                            position: B(o)
                        }
                    },
                    Photo: e => {
                        let {
                            ad: o
                        } = e;
                        return {
                            placement: f.PhotoPage,
                            ad: R(o)
                        }
                    },
                    PhotoOfTheDay: e => {
                        let {
                            ad: o
                        } = e;
                        return {
                            placement: f.PhotoOfTheDay,
                            ad: R(o)
                        }
                    },
                    RelatedPhotos: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.RelatedPhotos,
                            position: B(o)
                        }
                    },
                    Topic: e => {
                        let {
                            id: o,
                            index: t
                        } = e;
                        return {
                            placement: p.Topic,
                            deckId: o,
                            position: B(t)
                        }
                    },
                    UserLikes: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.UserLikes,
                            position: B(o)
                        }
                    },
                    UserProfile: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.UserProfile,
                            position: B(o)
                        }
                    },
                    UserStats: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.UserStats,
                            position: B(o)
                        }
                    },
                    VisualSearch: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.VisualSearch,
                            position: B(o)
                        }
                    },
                    Search: e => {
                        let {
                            keywords: o,
                            orientation: t,
                            orderBy: n,
                            safety: r,
                            color: a,
                            index: l,
                            ad: s
                        } = e;
                        return {
                            placement: u.KeywordSearch,
                            ad: R(s),
                            position: B(l),
                            keywords: (0, y.zG)(G(o), g.fS((e => ((0, S.wj)({
                                error: e
                            }), null)))),
                            color: i.WG(a),
                            safety: R(r),
                            orderBy: (c = n, z[c]),
                            orientation: (0, y.zG)(t, i.WA(_))
                        };
                        var c
                    },
                    Explore: e => {
                        let {
                            index: o
                        } = e;
                        return {
                            placement: h.Explore,
                            position: B(o)
                        }
                    }
                }),
                $ = (0, y.ls)(L, v),
                K = (0, y.ls)($, g.gf),
                M = (0, T.RR)((e => E.sF.forEachUrl((e => m.mB((0, y.ls)(m.XR((e => null !== e ? x.CE(e, U.Cr) : null)), m.Ar({
                    [U.Cr]: e
                }))))(e)))),
                A = e => (0, y.ls)(K, M(e))
        }
    }
]);
//# sourceMappingURL=9236.8529775d0853c7df66f3.js.map