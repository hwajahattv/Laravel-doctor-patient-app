"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [6285], {
        40709: (e, t, o) => {
            o.d(t, {
                v: () => z
            });
            var a = o(94184),
                r = o.n(a),
                s = o(3735),
                n = o(64225),
                l = o(12164),
                c = o(66952),
                i = o(76623),
                u = o(67291);
            const d = "cvvNq",
                h = "AUVxJ",
                m = "VNf8N",
                z = e => {
                    let {
                        coverPhotoOption: t,
                        className: o,
                        children: a
                    } = e;
                    const z = (0, s.zG)(t, l.UI((e => (0, n.ru)({
                        baseUrl: e.urls.raw,
                        width: 480,
                        height: 80
                    }))), l.UI((e => c.az(i.Z, {
                        className: m,
                        ...e
                    }))), l.HV((() => c.az("div", {
                        style: {
                            height: 80
                        }
                    }))));
                    return c.az(u.Z, {
                        behind: z,
                        overlayClassName: r()(d, o),
                        containerClassName: h
                    }, a)
                }
        },
        97694: (e, t, o) => {
            o.d(t, {
                w: () => h
            });
            var a = o(94184),
                r = o.n(a),
                s = o(24974),
                n = o(59983),
                l = o(66952),
                c = o(99963);
            const i = "FneJI",
                u = "eFOhM",
                d = "dnFXR RZQOk",
                h = e => {
                    let {
                        keyword: t,
                        ...o
                    } = e;
                    return l.az("div", {
                        className: r()(i, (0, n.yO)({
                            type: n.L$.Outline,
                            ...o
                        }))
                    }, l.az(s.Z, {
                        className: u
                    }), l.az(c.L, {
                        width: 8
                    }), l.az("span", {
                        className: d
                    }, t))
                }
        },
        79381: (e, t, o) => {
            o.r(t), o.d(t, {
                AFFILIATES_REQUEST_ID: () => He,
                default: () => Qe,
                makeInFeedDirectAd: () => Ee
            });
            var a = o(3735),
                r = o(43328),
                s = o(11324),
                n = o(73570),
                l = o(37703),
                c = o(12103),
                i = o(32750),
                u = o(94255),
                d = o(65702),
                h = o(8144),
                m = o(26145),
                z = o(12164),
                p = o(2739);
            var y, k = o(41630),
                I = o(84308),
                G = o(47725),
                v = o(61093),
                w = o(94597),
                U = o(1089);
            ! function(e) {
                e.Editorial = "editorial", e.KeywordSearch = "keyword-search"
            }(y || (y = {}));
            var g = o(66952),
                C = o(1885),
                P = o(21533),
                T = o(45631),
                f = o(8250),
                N = o(69387),
                b = o(57037),
                q = o(8844),
                S = o(40709),
                F = o(94184),
                x = o.n(F),
                D = o(31169),
                O = o(60611);
            const R = "UWRoz",
                K = "oUncV",
                L = "lLTqh",
                Y = "XrdUK",
                B = "SoCF1",
                J = e => g.az("div", { ...(0, a.zG)(e, O.yn(R))
                }),
                A = e => {
                    let {
                        children: t,
                        className: o,
                        ...a
                    } = e;
                    const r = !1 === a.border ? D.CE(a, "border") : D.CE(a, "border", "isInteractive");
                    return g.az("div", {
                        className: x()(K, void 0 === a.border || !0 === a.border ? x()(L, a.isInteractive && Y) : B, o),
                        ...r
                    }, t)
                };
            var E = o(11574);
            const Z = "wJpLi",
                $ = "UPiDi OhYua xNKUO dvBHu oh0KJ",
                H = "qr9yL oh0KJ RZQOk",
                V = "dRkVW RZQOk",
                Q = e => {
                    let {
                        collectionId: t,
                        onClick: o
                    } = e;
                    const a = g.Ye((() => (0, f.FF)()), []),
                        r = g.I4((() => {
                            o(t)
                        }), [o, t]),
                        s = (0, G.v)((e => (0, f.ED)(e, t))),
                        n = (0, G.v)((e => (0, N.Z7)(e, s.userId))),
                        l = (0, G.v)((e => a(e, s.id)));
                    return g.az(E.Z, {
                        to: q.y$.collectionFromEntity(s),
                        onClick: r
                    }, g.az(S.v, {
                        key: s.id,
                        coverPhotoOption: l
                    }, g.az("h3", {
                        className: H
                    }, s.title), g.az("span", {
                        className: V
                    }, (0, P.Lr)(s.total_photos), " ", (0, P.qq)(s.total_photos), " · Curated by ", n.name)))
                },
                W = e => {
                    let {
                        collectionIds: t,
                        tracking: o
                    } = e;
                    const r = (0, I.I)(),
                        s = g.I4((e => {
                            r(c.aU.mk.TrackGridPromptClick({ ...o,
                                items: t,
                                clickedItem: e
                            }))
                        }), [o, t, r]);
                    return g.az(J, null, g.az(A, {
                        isInteractive: !1
                    }, g.az("h2", {
                        className: $
                    }, "Related collections"), g.az("div", {
                        className: Z
                    }, (0, a.zG)(t, w.UID((e => g.az(Q, {
                        key: e,
                        collectionId: e,
                        onClick: s
                    })))))))
                },
                X = e => {
                    let {
                        maximumCollections: t,
                        routeData: o,
                        ...r
                    } = e;
                    const s = (0, T.$)(o),
                        n = g.Ye(b.s, []),
                        l = (0, G.v)((e => n(e, s))),
                        c = g.Ye((() => (0, a.zG)(l, z.tS((0, a.ls)(w.ke6(t), C.nI)))), [l, t]);
                    return (0, a.zG)(c, z.WA((e => g.az(W, {
                        collectionIds: e,
                        ...r
                    }))))
                };
            var _ = o(73727),
                j = o(70754),
                M = o(97694);
            const ee = "gjpB4 OhYua xNKUO dvBHu oh0KJ",
                te = "jl2Jm ruKGA oh0KJ",
                oe = "UIMaH eziW_",
                ae = e => {
                    let {
                        to: t,
                        onClick: o,
                        keyword: a
                    } = e;
                    const r = g.I4((() => {
                        o(a)
                    }), [a, o]);
                    return g.az(_.rU, {
                        to: t,
                        onClick: r,
                        className: oe
                    }, g.az(M.w, {
                        keyword: a
                    }))
                },
                re = e => {
                    let {
                        keywords: t,
                        tracking: o,
                        makeSearchLink: a
                    } = e;
                    const r = (0, I.I)(),
                        s = g.I4((e => {
                            r(c.aU.mk.TrackGridPromptClick({ ...o,
                                items: t,
                                clickedItem: e
                            }))
                        }), [r, t, o]);
                    return g.az(J, null, g.az(A, {
                        isInteractive: !1
                    }, g.az("h2", {
                        className: ee
                    }, "Related searches"), g.az("ul", {
                        className: te
                    }, t.map((e => g.az("li", {
                        key: e
                    }, g.az(ae, {
                        to: a(e),
                        onClick: s,
                        keyword: e
                    })))))))
                },
                se = e => {
                    let {
                        maximumKeywords: t,
                        routeData: o,
                        ...r
                    } = e;
                    const {
                        query: s,
                        filters: n
                    } = o, l = (0, v.bU)(), c = g.Ye(j.Jc, []), i = (0, G.v)((e => c(e, s))), u = g.I4((e => q.y$.searchPhotos({
                        query: e,
                        filters: n
                    })(l)), [n, l]);
                    return (0, a.zG)(i, z.tS((0, a.ls)(w.ke6(t), w.UID((e => e.title)), C.nI)), z.WA((e => g.az(re, {
                        keywords: e,
                        makeSearchLink: u,
                        ...r
                    }))))
                },
                ne = "related-collections",
                le = "related-search-keywords",
                ce = e => {
                    let {
                        totalPhotos: t,
                        routeData: o
                    } = e;
                    return e => (0, a.zG)([(() => {
                        const r = (0, a.zG)(t, z.DT((e => e >= 10)), z.tS((() => (0, a.zG)(e, U.Pe({
                            List: z.YP,
                            TwoColumns: z.G({
                                column: 1,
                                row: 10
                            }),
                            ThreeColumns: z.G({
                                column: 2,
                                row: 5
                            })
                        })))));
                        return (0, a.zG)(r, z.UI((t => ({
                            position: t,
                            key: ne,
                            element: g.az(X, {
                                routeData: o,
                                maximumCollections: 3,
                                tracking: {
                                    promptId: ne,
                                    placement: y.KeywordSearch,
                                    layout: e,
                                    position: t
                                }
                            })
                        }))))
                    })(), (() => {
                        const r = (0, a.zG)(t, z.DT((e => e >= 10)), z.tS((() => (0, a.zG)(e, U.Pe({
                            List: z.YP,
                            TwoColumns: z.G({
                                column: 0,
                                row: 20
                            }),
                            ThreeColumns: z.G({
                                column: 0,
                                row: 10
                            })
                        })))));
                        return (0, a.zG)(r, z.UI((t => ({
                            position: t,
                            key: le,
                            element: g.az(se, {
                                routeData: o,
                                maximumKeywords: 8,
                                tracking: {
                                    promptId: le,
                                    placement: y.KeywordSearch,
                                    layout: e,
                                    position: t
                                }
                            })
                        }))))
                    })()], w.oA$)
                };
            var ie = o(28765),
                ue = o(49698),
                de = o(45842),
                he = o(6464),
                me = o(43856),
                ze = o(14426),
                pe = o(55475),
                ye = o(26657),
                ke = o(59387),
                Ie = o(78913),
                Ge = o(85806),
                ve = o(76905),
                we = o(34132),
                Ue = o(41913);
            const ge = e => (0, Ue.KO)(e).activeCampaignKeywords;
            var Ce = o(14321),
                Pe = o(40925),
                Te = o(99590),
                fe = o(19838),
                Ne = o(15308),
                be = o(91290),
                qe = o(78040),
                Se = o(58856),
                Fe = o(87124),
                xe = o(70319),
                De = o(5845),
                Oe = o(26522),
                Re = o(99963),
                Ke = o(1931),
                Le = o(84849);
            const Ye = "sj5of OhYua xNKUO dvBHu oh0KJ",
                Be = "z2o58",
                Je = e => {
                    let {
                        photos: t,
                        feedTotal: o
                    } = e;
                    const a = (e => {
                        const t = (0, k.h)((() => e.some((e => null !== e.sponsorship)))),
                            o = (0, G.v)(Ge.J1);
                        return !1 === t && !1 === o
                    })(t);
                    return xe.Bq() || a && o >= 20
                },
                Ae = e => {
                    const t = (0, a.zG)(e, p.UI((e => e[0])), p.xb()),
                        o = (0, a.zG)(e, p.UI((e => e[1])), p.xb(Te.fS)),
                        r = (0, a.zG)(e, p.UI((e => e[2])), p.xb()),
                        s = p.aj([t, o]);
                    return (0, a.zG)(s, p.zg((() => (0, a.zG)(r, p.oA, p.Ps()))))
                },
                Ee = e => {
                    let {
                        adRequest: t,
                        adType: o
                    } = e;
                    return e => [{
                        position: (0, a.zG)(e, U.Qu({
                            List: {
                                column: 0,
                                row: 2
                            },
                            TwoColumns: {
                                column: 1,
                                row: 0
                            },
                            ThreeColumns: {
                                column: 2,
                                row: 0
                            }
                        })),
                        key: "in-feed-direct-ad",
                        element: g.az(xe.om, {
                            adRequest: t,
                            adType: o
                        })
                    }]
                },
                Ze = e => {
                    let {
                        photos: t,
                        feedTotal: o,
                        routeData: n
                    } = e;
                    const {
                        filters: l,
                        query: c
                    } = n, i = Pe.Dy.SearchInFeed({
                        keyword: n.query,
                        position: 3
                    }), u = (e => {
                        let {
                            condition: t,
                            observable$: o,
                            initialValue: r
                        } = e;
                        const n = (0, s.m)((e => (0, a.zG)(e, p.zg((e => {
                            let [t] = e;
                            return t ? m.u5(o) : m.YP
                        })))), [t]);
                        return (0, h.p)(n, t ? z.G(r) : z.YP)
                    })({
                        condition: Je({
                            photos: t,
                            feedTotal: o
                        }),
                        initialValue: ye.nn,
                        observable$: Ne.DU(i)
                    }), d = g.I4((e => {
                        let {
                            index: t,
                            photo: o
                        } = e;
                        return (0, a.zG)(fe.ug.f5.Search({
                            index: t,
                            ad: ve.gw(o),
                            keywords: c,
                            safety: !1,
                            color: l.color,
                            orderBy: l.orderBy,
                            orientation: l.orientation
                        }), z.G)
                    }), [l.color, l.orderBy, l.orientation, c]), y = g.Ye((() => (0, a.zG)([z.G(ce({
                        totalPhotos: t.length,
                        routeData: n
                    })), (0, a.zG)(u, z.UI((e => Ee({
                        adRequest: e,
                        adType: i
                    }))))], w.oA$, pe.RD, pe.UI(r.xH))), [t.length, n, u, i]);
                    return g.az(Oe.I, {
                        photos: t,
                        ixidFeedPlacementFactory: d,
                        getFixedPlacementsForLayout: y,
                        userLinkPlacement: Le.bx.SearchFeed
                    })
                },
                $e = (e, t, o) => {
                    let {
                        filters: r,
                        query: s,
                        searchXps: n
                    } = e;
                    return e => {
                        let {
                            page: l,
                            perPage: u
                        } = e;
                        return (0, a.zG)(ie.h.search.getPhotos({ ...Te.L7(r),
                            query: s,
                            searchXps: n,
                            page: l,
                            perPage: u
                        }), ue.nn({
                            makeRequest: i.W,
                            locale: o
                        }), ze.UI((e => {
                            let [t] = e;
                            return t
                        })), p.xU(me.I$((e => {
                            t(c.aU.mk.TrackGotSearchResults({
                                startPosition: (0, De.bt)({
                                    page: l,
                                    perPage: u
                                }),
                                photos: e.results.map((e => e.id))
                            }))
                        }))))
                    }
                },
                He = "SearchPhotos",
                Ve = (0, d.O)()((() => {
                    const e = (0, we.XT)();
                    return (t, o) => {
                        let {
                            routeData: a
                        } = o;
                        const r = (0, T.rJ)(a.query, a.filters);
                        return {
                            searchXps: (0, Ce.oV)(t),
                            photoFeedOption: e(t, r)
                        }
                    }
                })),
                Qe = (0, a.zG)((e => {
                    let {
                        routeData: t,
                        searchXps: o,
                        photoFeedOption: r
                    } = e;
                    const l = (0, v.bU)(),
                        i = (0, I.I)(),
                        h = (0, G.v)(ge),
                        {
                            query: m,
                            filters: p
                        } = t,
                        y = (0, T.rJ)(m, p),
                        k = (0, s.m)(Ae, [t.query, p, r]);
                    (0, n.m)(k, (e => {
                        (0, a.zG)([c.aU.mk.TrackGotInitialSearchResults(), c.aU.mk.TrackGotSearchResults({
                            startPosition: 1,
                            photos: e.ids
                        })], (0, d.wV)(i))
                    }));
                    const U = qe.Vv() && (0, a.zG)(h, w.t94(ke.Eq)(t.query.toLowerCase()), he.U_),
                        C = U,
                        P = U,
                        f = e => {
                            let {
                                placement: o
                            } = e;
                            return g.az(Fe.Z, null, g.az(qe.fU, {
                                placement: o,
                                searchQueryOption: z.G({
                                    searchQuery: t.query,
                                    searchQueryWithSuffix: `${t.query} images`
                                }),
                                xp: void 0
                            }))
                        },
                        N = () => (0, a.zG)(z.gx(P)((() => g.az(g.HY, null, g.az("div", {
                            className: Be
                        }), f({
                            placement: be.ug.SearchBottomFeed
                        })))), z.WG);
                    return g.az("div", { ...(0, Ie.N)(de.jF)
                    }, (0, a.zG)([z.gx(C)((() => f({
                        placement: be.ug.SearchTopFeed
                    }))), z.G(g.az(g.HY, null, C && g.az(Fe.Z, null, g.az("h2", {
                        className: Ye
                    }, "Results for ", m, " on Unsplash")), g.az(Ke.t, {
                        feedId: y,
                        fetchPhotos: $e({
                            query: m,
                            searchXps: o,
                            filters: p
                        }, i, l),
                        shouldRequireInfiniteScrollOptIn: P,
                        renderBeneathLoadMoreButton: N,
                        getNoContentEl: () => g.az(g.HY, null, g.az(Se.Z, {
                            type: "photos"
                        }), f({
                            placement: be.ug.SearchBottomFeedEmpty
                        }))
                    }, (e => {
                        let {
                            items: o,
                            total: a,
                            hasFetchedAllPages: r
                        } = e;
                        return g.az(g.HY, null, g.az(Ze, {
                            photos: o,
                            routeData: t,
                            feedTotal: a
                        }), r && N())
                    }))))], (0, u.K4)("items"), (0, u.CB)((e => g.az(Re.L, {
                        key: e,
                        height: 72
                    })))))
                }), (0, l.$j)(Ve))
        }
    }
]);
//# sourceMappingURL=search-photos-route.3e5b8797b097291eccdd.js.map