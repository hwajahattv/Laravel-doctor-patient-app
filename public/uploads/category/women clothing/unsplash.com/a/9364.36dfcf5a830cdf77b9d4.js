"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [9364], {
        219: (e, t, r) => {
            r.d(t, {
                f: () => D
            });
            var a = r(3735),
                o = r(1885),
                n = r(57717),
                l = r(45842),
                s = r(26145),
                i = r(12164),
                c = r(78913),
                h = r(66952),
                u = r(11324),
                f = r(68880),
                d = r(5434),
                g = r(53084),
                z = r(14426),
                P = r(2739);
            const b = e => {
                    const t = (e => t => {
                            const r = (0, a.zG)(t, P.UI((e => {
                                    let [t, r, a] = e;
                                    return {
                                        hasFetchedAllPages: t,
                                        fetchDataParams: r,
                                        fetchDataAndBuildActions: a
                                    }
                                }))),
                                o = (0, a.zG)(r, P.UP(e), P.EB((e => {
                                    let {
                                        fetchDataParams: t
                                    } = e;
                                    return t.page
                                })), P.oE((e => {
                                    let {
                                        hasFetchedAllPages: t
                                    } = e;
                                    return !1 === t
                                })));
                            return (0, a.zG)(o, P.Mm(r, ((e, t) => t)), P.zg((e => {
                                let {
                                    fetchDataParams: t,
                                    fetchDataAndBuildActions: r
                                } = e;
                                return (0, a.zG)(r(t), z.XD(3))
                            })))
                        })((0, u.m)((e => {
                            let {
                                notifier$: t,
                                footerRefOption$: r
                            } = e;
                            return e => {
                                const o = (0, a.zG)(e, P.UI((e => {
                                        let [t, r, a, o] = e;
                                        return {
                                            shouldDisableInfiniteScroll: t,
                                            fetchDataParams: r,
                                            intersectionObserverRoot: a,
                                            intersectionObserverRootMarginBottom: o
                                        }
                                    }))),
                                    n = (0, a.zG)(o, P.DZ((e => {
                                        let {
                                            intersectionObserverRoot: t
                                        } = e;
                                        return t
                                    })), P.xb()),
                                    l = (0, a.zG)(o, P.UI((e => {
                                        let {
                                            intersectionObserverRootMarginBottom: t
                                        } = e;
                                        return t ? ? 2e3
                                    })), P.xb()),
                                    s = (0, a.zG)(o, P.UI((e => {
                                        let {
                                            fetchDataParams: t
                                        } = e;
                                        return t.page
                                    })), P.xb()),
                                    c = (0, a.zG)(P.aj([r, n, l, s]), P.wt((e => {
                                        let [t, r, o] = e;
                                        return (0, a.zG)(t, i.g_((() => P.E_), (e => (0, a.zG)(P.bH(e, {
                                            root: r,
                                            rootMargin: (0, g.Ae)({
                                                top: f.ZI,
                                                right: f.ZI,
                                                bottom: f.Ei(o),
                                                left: f.ZI
                                            })
                                        }), P.hX(g.Yu)))))
                                    }))),
                                    h = (0, a.zG)(o, P.UI((e => e.shouldDisableInfiniteScroll)), P.xb());
                                return (0, a.zG)(o, P.UP(P.TS((0, a.zG)(P.aj([c, h]), P.hX((e => {
                                    let [t, r] = e;
                                    return !1 === r
                                }))), t)))
                            }
                        })({
                            notifier$: e.notifier$,
                            footerRefOption$: e.footerRefOption$
                        }), [e.shouldDisableInfiniteScroll, e.fetchDataParams, e.intersectionObserverRoot, e.intersectionObserverRootMarginBottom])),
                        r = [e.hasFetchedAllPages, e.fetchDataParams, e.fetchDataAndBuildActions],
                        o = (0, u.m)(t, r);
                    (0, d.Rd)(o)
                },
                m = e => {
                    let {
                        lastPageFetched: t,
                        perPage: r,
                        total: a
                    } = e;
                    return t >= (e => {
                        let {
                            total: t,
                            perPage: r
                        } = e;
                        return Math.ceil(t / r)
                    })({
                        total: a,
                        perPage: r
                    })
                },
                p = e => {
                    let {
                        feedState: t,
                        feedItems: r,
                        renderItems: o,
                        getScrollFooterEl: i,
                        ...u
                    } = e;
                    const [f, d] = (0, n.m)((e => (0, a.zG)(e, s.DZ))), g = h.Ye((() => (e => {
                        let {
                            lastPageFetched: t,
                            perPage: r,
                            orderBy: a
                        } = e;
                        return {
                            page: t + 1,
                            perPage: r,
                            orderBy: a
                        }
                    })(t)), [t]), z = h.Ye((() => m(t)), [t]);
                    return b({
                        fetchDataParams: g,
                        hasFetchedAllPages: z,
                        footerRefOption$: d,
                        ...u
                    }), h.az(h.HY, null, o({
                        items: r,
                        hasFetchedAllPages: z,
                        total: t.total
                    }), h.az("div", {
                        ref: f,
                        ...(0, c.N)(l.gZ)
                    }), !1 === z && i())
                },
                D = e => {
                    let {
                        feedStateOption: t,
                        feedItemsOption: r,
                        getNoContentEl: n,
                        getPlaceholderEl: l,
                        ...s
                    } = e;
                    return h.az(h.HY, null, (0, a.zG)(i.gz(t, r), i.UI((e => {
                        let [t, r] = e;
                        return (0, a.zG)(r, o.nI, i.g_(n, (e => h.az(p, {
                            feedState: t,
                            feedItems: e,
                            ...s
                        }))))
                    })), i.HV(l)))
                }
        },
        81619: (e, t, r) => {
            r.d(t, {
                H: () => a
            });
            const a = e => {
                const t = Symbol();
                let r = t;
                return () => r === t ? r = e() : r
            }
        }
    }
]);
//# sourceMappingURL=9364.36dfcf5a830cdf77b9d4.js.map