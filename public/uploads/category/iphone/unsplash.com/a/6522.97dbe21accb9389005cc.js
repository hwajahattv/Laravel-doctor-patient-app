"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [6522], {
        26522: (e, t, a) => {
            a.d(t, {
                I: () => pe
            });
            var o = a(3735),
                s = a(37703),
                n = a(31866),
                r = a(12164),
                l = a(66510),
                i = a(167),
                u = a(1089),
                d = a(19838),
                h = a(66952),
                c = a(68252),
                p = a(94597),
                m = a(38792),
                z = a(65702),
                I = a(45842),
                y = a(78913),
                v = a(85806),
                G = a(42606),
                g = a(12038),
                w = a(93500),
                N = a(17253),
                F = a(76041),
                L = a(67237),
                U = a(88685),
                P = a(19640),
                Z = a(84849),
                k = a(60026),
                C = a(87375),
                M = a(78260),
                b = a(69400),
                T = a(88333),
                j = a(28202),
                f = a(67291),
                D = a(43046);
            const _ = "ijMze",
                x = "aXMwe ijMze",
                S = "PThIJ dT0f5",
                H = e => {
                    let {
                        sponsorship: t,
                        photo: a,
                        children: o
                    } = e;
                    return h.az(f.Z, {
                        behind: o,
                        overlayClassName: x
                    }, h.az("div", {
                        className: S
                    }, h.az(D.Z, {
                        sponsorship: t,
                        photoUserId: a.userId
                    })))
                },
                E = (0, z.O)()((() => {
                    const e = (0, C.g)();
                    return (t, a) => ({
                        photo: (0, G.hA)(t, a.photoId),
                        showHiddenFromProfileOverlay: e(t, {
                            photoId: a.photoId,
                            routeData: a.routeData
                        })
                    })
                })),
                O = (0, o.zG)((e => {
                    let {
                        children: t,
                        photo: a,
                        showHiddenFromProfileOverlay: s
                    } = e;
                    const n = (0, o.zG)(a, r.DT(M.t2), r.UI((e => e.evaluation_status)), r.FS);
                    if ("dmca_requested" === n) return h.az(b.Z, null, t); {
                        const e = (0, o.zG)(n, T.T, r.UI((e => t => h.az(T.Z, {
                                overlayClassName: _,
                                status: e,
                                withBackground: !1 === s
                            }, t)))),
                            l = r.ij(a.sponsorship),
                            i = s ? r.G((e => h.az(j.Z, {
                                overlayClassName: _
                            }, e))) : (0, o.zG)(l, r.UI((e => t => h.az(H, {
                                sponsorship: e,
                                photo: a
                            }, t))));
                        return (0, o.zG)(t, (0, k.tf)([i, e]))
                    }
                }), (0, s.$j)(E), n.C),
                q = "CwiNy",
                A = "WJJ9Q jKeRp",
                J = "LEgqh",
                R = "cK4A6",
                X = "mHeEV",
                $ = "HMITC jKeRp",
                K = "Nn4aZ jKeRp",
                Y = e => {
                    let {
                        photoId: t,
                        photo: a,
                        authUserOption: s,
                        userLinkPlacement: n,
                        dispatch: l,
                        ...i
                    } = e;
                    const u = (0, o.zG)(s, r.Gg((e => e.id === a.userId)));
                    return h.az(P.Z, {
                        photoId: t
                    }, h.az(L.Z, {
                        photoId: t,
                        extraInfoClassname: K,
                        ...(0, y.N)(I.J9.SINGLE_COL_FIGURE)
                    }, h.az("div", {
                        className: $
                    }, h.az(Z.Ss, {
                        photo: a,
                        type: "emphasiseUsername",
                        placement: n
                    })), h.az(O, {
                        photoId: t
                    }, h.az(U.E0, {
                        photoId: t,
                        testAttr: I.J9.SINGLE_COL_IMG,
                        containerClassName: q,
                        ...i
                    })), h.az("div", {
                        className: A
                    }, h.az("div", {
                        className: J
                    }, u && h.az(N.Z, {
                        photoId: t,
                        type: "default",
                        className: X
                    }), h.az(F.Z, {
                        photoId: t
                    }), h.az("div", {
                        className: R
                    }, h.az(g.Z, {
                        photoId: t
                    }))), h.az("div", null, h.az(w.Z, {
                        photoId: a.id,
                        label: "Download",
                        showSizesDropdown: !0
                    })))))
                },
                V = (0, z.X1)()(((e, t) => ({
                    photo: (0, G.hA)(e, t.photoId),
                    authUserOption: (0, v.vg)(e)
                }))),
                B = (0, o.zG)(Y, (0, s.$j)(V), (e => h.X$(e))),
                Q = () => [],
                W = (0, c.t)((e => {
                    let {
                        grid: t,
                        enqueueUpdateFunction: a,
                        photos: s,
                        getFixedPlacementsForLayout: n = Q,
                        userLinkPlacement: r
                    } = e;
                    const l = h.Ye((() => ({
                            enqueueUpdateFunction: a
                        })), [a]),
                        i = h.Ye((() => (0, o.zG)(s, p.Sud(((e, a) => ({
                            key: a.id,
                            element: h.az(B, {
                                index: e,
                                linkProps: l,
                                grid: t,
                                photoId: a.id,
                                userLinkPlacement: r
                            })
                        }))))), [s, l, t, r]),
                        d = h.Ye((() => {
                            const e = u.Ar.List();
                            return [...n(e), ...i]
                        }), [n, i]);
                    return h.az(m.Um, {
                        columnGutter: t.columnGutter,
                        items: d,
                        rowGutter: 50,
                        columnCount: 1
                    })
                }));
            var ee = a(94184),
                te = a.n(ee),
                ae = a(87124),
                oe = a(58063),
                se = a(15859),
                ne = a(48114);
            const re = (0, l.FH)()([{
                    tag: "Two"
                }, {
                    tag: "Three"
                }]),
                le = ne.AS.match({
                    Phone: () => u.TZ,
                    Tablet: () => u.TZ,
                    Desktop: () => u.nf
                }),
                ie = u.iz.match({
                    Two: () => se.Z.showUntilSmMax,
                    Three: () => se.Z.showFromMdMin
                }),
                ue = (0, z.q3)()({
                    maybeDevice: i._v
                }),
                de = (0, o.zG)((e => {
                    let {
                        maybeDevice: t,
                        ...a
                    } = e;
                    const s = e => {
                            let {
                                isUnenhanced: t
                            } = e;
                            return e => h.az("div", {
                                className: te()(t && ie(e)),
                                key: e.tag
                            }, h.az(oe.R, {
                                columnCount: e,
                                ...a
                            }))
                        },
                        n = (0, o.ls)(le, s({
                            isUnenhanced: !1
                        })),
                        l = (0, o.zG)(t, r.UI(n), r.HV((() => re.map(s({
                            isUnenhanced: !0
                        })))));
                    return h.az(ae.Z, null, l)
                }), (0, s.$j)(ue));
            var he = a(3729);
            const ce = {
                    mobileLayout: u.Xj.Masonry(),
                    columnGutter: 24
                },
                pe = (0, o.zG)((e => {
                    let {
                        photos: t,
                        getFixedPlacementsForLayout: a,
                        ixidFeedPlacementFactory: s,
                        maybeDevice: n,
                        shouldShowExtraInfo: i,
                        userLinkPlacement: c
                    } = e;
                    const p = () => h.az(W, {
                            photos: t,
                            getFixedPlacementsForLayout: a,
                            grid: ce,
                            userLinkPlacement: c
                        }),
                        m = () => h.az(de, {
                            photos: t,
                            getFixedPlacementsForLayout: a,
                            grid: ce,
                            rowGutter: i ? 40 : 24,
                            userLinkPlacement: c
                        }),
                        z = e => {
                            let {
                                layoutMode: t,
                                className: a
                            } = e;
                            return h.az("div", {
                                className: a,
                                key: t.tag
                            }, u.Xj.match({
                                List: m,
                                Masonry: p
                            })(t))
                        },
                        I = (0, l.FH)()([{
                            tag: "List"
                        }, {
                            tag: "Masonry"
                        }]),
                        y = (0, o.zG)(n, r.UI(he.qs)),
                        v = (0, o.zG)(y, r.UI((e => z({
                            layoutMode: e
                        }))), r.HV((() => I.map((e => z({
                            layoutMode: e,
                            className: (0, he.NH)({
                                layoutMode: e
                            })
                        })))))),
                        G = h.Ye((() => r.G({
                            factory: s
                        })), [s]);
                    return h.az(d.ug._y.Provider, {
                        value: G
                    }, v)
                }), (0, s.$j)(((e, t) => ({
                    maybeDevice: (0, i._v)(e),
                    shouldShowExtraInfo: (0, he.hI)(e, t.routeData)
                }))), n.C)
        }
    }
]);
//# sourceMappingURL=6522.97dbe21accb9389005cc.js.map