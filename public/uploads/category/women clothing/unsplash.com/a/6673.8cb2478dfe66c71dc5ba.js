"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [6673], {
        66827: (e, t, n) => {
            n.d(t, {
                L: () => i
            });
            var o = n(12164);
            const i = n(66952).kr(o.YP)
        },
        56673: (e, t, n) => {
            n.d(t, {
                q: () => y,
                Z: () => x
            });
            var o = n(3735),
                i = n(721),
                l = n(37703),
                s = n(13904),
                r = n(12103),
                a = n(12864),
                d = n(65702),
                c = n(67500),
                h = n(91694),
                p = n(94597),
                u = n(6464),
                I = n(81619),
                f = n(14426),
                g = n(12164),
                S = n(66510),
                O = n(34132),
                b = n(59983),
                m = n(66952),
                v = n(90559),
                R = n(58856),
                z = n(219),
                E = n(51588),
                P = n(66827);
            const q = "gDCZZ",
                N = "HxaG2",
                A = "ATnvl",
                k = "dycl5 hNER6 jJsTo qBwND",
                w = "PwSsU O84oE",
                C = "rx4AP";

            function Z(e, t, n) {
                return t in e ? Object.defineProperty(e, t, {
                    value: n,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = n, e
            }
            const y = () => m.az("div", {
                    className: N
                }, m.az("div", {
                    className: A
                }, p.w6H(0, 17).map((e => m.az("div", {
                    key: e,
                    className: k
                }, m.az("div", {
                    className: w
                })))))),
                B = (0, S.DO)()({
                    shouldRequireInfiniteScrollOptIn: !1,
                    getNoContentEl: I.H((() => m.az(R.Z, {
                        type: "photos"
                    }))),
                    getPlaceholderEl: I.H((() => m.az(y, null)))
                }),
                D = (0, s.unionize)({
                    OptInRequired: (0, s.ofType)(),
                    Enabled: {}
                });
            class F extends m.wA {
                constructor() {
                    super(...arguments), Z(this, "getInfiniteScrollSetting", (e => {
                        let {
                            shouldRequireInfiniteScrollOptIn: t
                        } = e;
                        return t ? D.OptInRequired({
                            optedIn: !1
                        }) : D.Enabled()
                    })), Z(this, "state", {
                        infiniteScrollSetting: this.getInfiniteScrollSetting(this.props)
                    }), Z(this, "toggleInfiniteScrollOptIn", (() => {
                        const {
                            infiniteScrollSetting: e
                        } = this.state;
                        D.match({
                            OptInRequired: e => {
                                let {
                                    optedIn: t
                                } = e;
                                const n = D.OptInRequired({
                                    optedIn: (0, u.U_)(t)
                                });
                                this.setState({
                                    infiniteScrollSetting: n
                                })
                            },
                            default: o.Q1
                        })(e)
                    })), Z(this, "fetchDataAndBuildActions", (0, i.Z)((e => (0, o.ls)(e, f.UI((0, o.ls)(h.Yq, a.E0, (e => {
                        let {
                            entities: t,
                            result: n
                        } = e;
                        return [(0, r.VA)(t), r.aU.mk.HandleNextPhotoFeedPageResponse({
                            feedId: this.props.feedId,
                            photoIds: n
                        })]
                    }))))))), Z(this, "createPhotoFeedIdContextValue", (0, i.Z)((e => g.G(e))))
                }
                UNSAFE_componentWillReceiveProps(e) {
                    if (e.shouldRequireInfiniteScrollOptIn !== this.props.shouldRequireInfiniteScrollOptIn) {
                        const t = this.getInfiniteScrollSetting(e);
                        this.setState({
                            infiniteScrollSetting: t
                        })
                    }
                }
                render() {
                    const {
                        photoFeedOption: e,
                        photosOption: t,
                        children: n,
                        getNoContentEl: o,
                        getPlaceholderEl: i,
                        renderBeneathLoadMoreButton: l,
                        feedId: s,
                        fetchPhotos: r,
                        notifier$: a,
                        intersectionObserverRoot: d,
                        intersectionObserverRootMarginBottom: c
                    } = this.props, {
                        infiniteScrollSetting: h
                    } = this.state, p = !1 === D.match({
                        OptInRequired: e => {
                            let {
                                optedIn: t
                            } = e;
                            return t
                        },
                        Enabled: () => !0
                    })(h);
                    return m.az(P.L.Provider, {
                        value: this.createPhotoFeedIdContextValue(s)
                    }, m.az(z.f, {
                        key: s,
                        renderItems: n,
                        feedItemsOption: t,
                        feedStateOption: e,
                        getScrollFooterEl: () => m.az("div", {
                            className: C
                        }, D.match({
                            OptInRequired: e => {
                                let {
                                    optedIn: t
                                } = e;
                                return t ? m.az(E.Z, null) : m.az(m.HY, null, m.az("div", {
                                    className: q
                                }, m.az(v.Z, {
                                    tag: "button",
                                    buttonType: b.L$.Outline,
                                    onClick: this.toggleInfiniteScrollOptIn,
                                    type: "button"
                                }, "Load more photos")), l ? .())
                            },
                            Enabled: () => m.az(E.Z, null)
                        })(h)),
                        getNoContentEl: o,
                        getPlaceholderEl: i,
                        shouldDisableInfiniteScroll: p,
                        fetchDataAndBuildActions: this.fetchDataAndBuildActions(r),
                        notifier$: a,
                        intersectionObserverRoot: d,
                        intersectionObserverRootMarginBottom: c
                    }))
                }
            }
            const T = (0, d.O)()((() => {
                    const e = (0, O.XT)(),
                        t = (0, O.u0)();
                    return (n, o) => ({
                        photoFeedOption: e(n, o.feedId),
                        photosOption: t(n, o.feedId)
                    })
                })),
                x = (0, o.zG)(F, (0, l.$j)(T), (e => (0, c.b9)(e, B)))
        }
    }
]);
//# sourceMappingURL=6673.8cb2478dfe66c71dc5ba.js.map