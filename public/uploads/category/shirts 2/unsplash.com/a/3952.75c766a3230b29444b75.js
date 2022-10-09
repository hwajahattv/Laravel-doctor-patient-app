"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [3952], {
        31009: (e, a, r) => {
            r.d(a, {
                Z: () => z
            });
            var s = r(94184),
                o = r.n(s),
                t = r(3735),
                n = r(73727),
                l = r(65999),
                d = r(47725),
                c = r(61093),
                i = r(12164),
                u = r(66952),
                p = r(66827),
                h = r(65597);
            const m = "rEAWd",
                z = e => {
                    let {
                        children: a,
                        photoId: r,
                        className: s,
                        ...z
                    } = e;
                    const I = u.Ye(h.Y, []),
                        w = u.Ye(h.l, []),
                        N = (0, d.v)((e => "title" in z == !0 ? i.G(z.title) : I(e, r))),
                        v = (0, l.TH)(),
                        g = u.qp(p.L),
                        f = (0, d.v)((e => w(e, {
                            feedIdOption: g,
                            photoId: r,
                            location: v
                        }))),
                        b = (0, c.bU)();
                    return u.az(n.rU, {
                        to: f(b),
                        itemProp: "contentUrl",
                        className: o()(m, s),
                        ...(0, t.zG)(N, i.WA((e => ({
                            title: e
                        })))),
                        ...z
                    }, a)
                }
        },
        57786: (e, a, r) => {
            r.d(a, {
                g: () => n
            });
            var s = r(66952),
                o = r(51588);
            const t = "vjCmO",
                n = () => s.az("div", {
                    className: t
                }, s.az(o.Z, {
                    padContentBelow: !1
                }))
        },
        27057: (e, a, r) => {
            r.d(a, {
                Z: () => N
            });
            var s = r(3735),
                o = r(33072),
                t = r(78679),
                n = r(36642),
                l = r(18703),
                d = r(2739),
                c = r(66952),
                i = r(68900),
                u = r(11385),
                p = r(91361),
                h = r(99963),
                m = r(57786);
            const z = (0, u.Z)({
                    loader: () => Promise.all([r.e(5458), r.e(2665), r.e(5902)]).then(r.bind(r, 55448)),
                    chunkName: "user-hover-card-content",
                    resolve: () => 55448,
                    loading: m.g,
                    error: e => c.az(c.HY, null, "Error when loading chunk", c.az(h.L, {
                        height: 16
                    }), (0, p.pH)(e.error))
                }),
                I = "YuMTD",
                w = "yayNa",
                N = e => {
                    let {
                        children: a,
                        userId: r,
                        centerPopoverArrow: u = !1
                    } = e;
                    const [p, h] = (0, o.W)((0, s.ls)(d.bh(n.f), d.O4(!1), d.xb())), m = c.I4((() => p(!0)), [p]), N = c.I4((() => p(!1)), [p]), v = (0, t.R)(h), {
                        showArrow: g,
                        arrowStyle: f,
                        contentStyle: b,
                        onContentResize: A,
                        setTriggerElement: P,
                        setContentElement: Z,
                        setArrowElement: S,
                        decodedComputedPlacementOption: U
                    } = (0, l.S)({
                        placement: "top-start",
                        showArrow: !0,
                        centerArrow: u
                    });
                    return c.az("span", {
                        onMouseMove: m,
                        onMouseLeave: N,
                        onFocus: m,
                        onBlur: N,
                        className: w
                    }, c.az("div", {
                        ref: P
                    }, a), c.az(i.bX, {
                        bgColor: "white",
                        isOpen: v,
                        className: I,
                        showArrow: g,
                        ref: Z,
                        containerStyle: b,
                        arrowStyle: f,
                        arrowRef: S,
                        onResize: A,
                        decodedComputedPlacementOption: U
                    }, c.az(z, {
                        userId: r
                    })))
                }
        },
        84849: (e, a, r) => {
            r.d(a, {
                QT: () => O,
                Ss: () => R,
                bx: () => G,
                DL: () => C,
                O6: () => T
            });
            var s = r(94184),
                o = r.n(s),
                t = r(3735),
                n = r(73727),
                l = r(12103),
                d = r(84308),
                c = r(47725),
                i = r(93370),
                u = r(36159),
                p = r(12164),
                h = r(69387),
                m = r(66952),
                z = r(44373),
                I = r(13096),
                w = r(67486),
                N = r(27057);
            const v = "MssrA",
                g = "Fw1fz",
                f = "yzAnJ",
                b = "N2odk RZQOk Vk1a0",
                A = "AVon2 RZQOk Vk1a0",
                P = "na3Wz y6oJr",
                Z = "pgmwB",
                S = "AsGGe pgmwB KHq0c",
                U = "lXK9Z",
                k = "Pq5x3",
                y = e => {
                    let {
                        userId: a,
                        size: r = 32
                    } = e;
                    return m.az("div", {
                        className: g
                    }, m.az(N.Z, {
                        userId: a,
                        centerPopoverArrow: !0
                    }, m.az(z.ZP, {
                        size: r,
                        userId: a
                    })))
                },
                C = e => {
                    let {
                        type: a,
                        userId: r,
                        renderSecondaryLabel: s,
                        avatarSize: l,
                        usernameClassName: d
                    } = e;
                    const i = (0, c.v)((e => (0, h.Z7)(e, r))),
                        u = (() => {
                            switch (a) {
                                case "default":
                                    return;
                                case "alt":
                                    return P;
                                case "emphasiseUsername":
                                    return S
                            }
                        })(),
                        z = (() => {
                            switch (a) {
                                case "default":
                                    return;
                                case "alt":
                                    return P;
                                case "emphasiseUsername":
                                    return Z
                            }
                        })();
                    return m.az("span", {
                        className: v
                    }, m.az(y, {
                        userId: i.id,
                        size: l
                    }), m.az("div", {
                        className: f
                    }, m.az(N.Z, {
                        userId: i.id
                    }, m.az(I._R, {
                        userId: i.id
                    }, (e => m.az(n.rU, {
                        to: e,
                        className: o()(b, u, d)
                    }, i.name)))), (0, t.zG)(p.ij(s), p.UI((e => e({
                        className: z,
                        user: i
                    }))), p.WG)))
                };
            var G;
            ! function(e) {
                e.EditorialFeed = "editorial-feed", e.SearchFeed = "search", e.PhotoPageHeader = "photo-page", e.DetailedTrendsTopPhoto = "detailed-trends-top-photo", e.CollectionFeed = "collection-page", e.ExploreFeed = "explore-feed", e.FollowingFeed = "following-feed", e.RelatedPhotos = "photo-related", e.TopicFeed = "topic-feed", e.VisualSearchFeed = "visual-search", e.ProfilePage = "profile"
            }(G || (G = {}));
            const R = e => {
                    let {
                        photo: a,
                        placement: r,
                        renderNonSponsoredSecondaryLabel: s,
                        ...o
                    } = e;
                    const n = m.Ye((() => p.ij(a.sponsorship)), [a.sponsorship]),
                        l = (0, t.zG)(n, p.UI((e => e.sponsor_id)), p.HV((() => a.userId))),
                        d = m.I4((e => {
                            let {
                                className: o,
                                user: l
                            } = e;
                            return (0, t.zG)(n, p.g_((() => (0, t.zG)(p.ij(s), p.UI((e => e({
                                className: o,
                                user: l
                            }))), p.WG)), (e => m.az(F, {
                                sponsorship: e,
                                userId: l.id,
                                className: o,
                                photo: a,
                                placement: r
                            }))))
                        }), [a, r, s, n]);
                    return m.az(C, {
                        userId: l,
                        ...o,
                        renderSecondaryLabel: d
                    })
                },
                F = e => {
                    let {
                        sponsorship: a,
                        className: r,
                        userId: s,
                        photo: c,
                        placement: i
                    } = e;
                    const u = {
                            className: o()(A, r)
                        },
                        h = (0, d.I)(),
                        z = () => {
                            h((0, l.W)(c.id, i))
                        };
                    return (0, t.zG)(p.ij(a.tagline_url), p.UI((e => m.az(w.r, {
                        href: e,
                        onClick: z,
                        ...u
                    }, a.tagline, " ↗"))), p.HV((() => m.az(I._R, {
                        userId: s
                    }, (e => m.az(n.rU, {
                        to: e,
                        ...u
                    }, a.tagline))))))
                },
                O = e => {
                    let {
                        userId: a,
                        className: r
                    } = e;
                    return m.az(I._R, {
                        userId: a
                    }, (e => m.az(n.rU, {
                        to: e,
                        className: o()(A, k, r)
                    }, "Available for hire", m.az(i.Z, {
                        className: U
                    }))))
                },
                T = e => {
                    let {
                        userId: a,
                        className: r
                    } = e;
                    const s = (0, c.v)((e => (0, h.Z7)(e, a)));
                    return m.az(I._R, {
                        userId: s.id
                    }, (e => m.az(n.rU, {
                        to: e,
                        className: o()(A, r)
                    }, (0, t.zG)(s.username, u.JQ.encode))))
                }
        },
        11599: (e, a, r) => {
            r.d(a, {
                Z: () => s
            });
            const s = (0, r(44811).x)({
                path: "M9.9 11.5l6.1 6.1 6.1-6.1 1.9 1.9-8 8-8-8 1.9-1.9z"
            })
        }
    }
]);
//# sourceMappingURL=3952.75c766a3230b29444b75.js.map