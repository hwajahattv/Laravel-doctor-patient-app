"use strict";
(globalThis.webpackChunkunsplash_web = globalThis.webpackChunkunsplash_web || []).push([
    [3970], {
        93475: (a, e, t) => {
            t.d(e, {
                $: () => s
            });
            var n = t(12103),
                r = t(84308),
                l = t(66952),
                o = t(67486);
            const s = a => {
                let {
                    metadata: e,
                    adType: t,
                    ...s
                } = a;
                const i = (0, r.I)(),
                    c = l.I4((() => {
                        i(n.aU.mk.TrackDirectAdClick({
                            metadata: e,
                            adType: t
                        }))
                    }), [e, t, i]);
                return l.az(o.r, {
                    onClick: c,
                    href: e.clickUrl,
                    ...s
                })
            }
        },
        70319: (a, e, t) => {
            t.d(e, {
                om: () => J,
                Bq: () => na
            });
            var n = t(3735),
                r = t(16461),
                l = t(12164),
                o = t(10596),
                s = t(78913),
                i = t(40925),
                c = t(84415),
                d = t(27927),
                m = t(66952),
                u = t(15308),
                z = t(44212),
                p = t(93475),
                h = t(58855),
                C = t(67291),
                v = t(48791),
                k = t(94184),
                b = t.n(k),
                N = t(26657),
                y = t(59983),
                g = t(98599),
                I = t(90013),
                U = t(76623);
            const G = "Bw3k3",
                R = "l_w_S",
                j = a => {
                    let {
                        textOption: e,
                        placeholderCharacterCount: t,
                        contentClassName: r,
                        disableAnimation: o = !0
                    } = a;
                    return m.az(C.Z, {
                        behind: m.az("div", {
                            className: b()(l.pC(e) && G)
                        }, m.az(v.xv, {
                            characterCount: t,
                            disableAnimation: o
                        })),
                        overlayClassName: b()(R, r)
                    }, (0, n.zG)(e, l.WA(n.yR)))
                },
                L = "eMppj",
                S = "UvbEe",
                T = "Fzg1x",
                A = "bUtTQ",
                F = "HtPKU",
                Z = "nZPba",
                x = "MovzA",
                $ = "nLV0U",
                _ = "GTaOV",
                V = I.ix,
                W = I.Sn,
                q = a => ({
                    backgroundColor: (0, n.zG)(a.ctaBackgroundColor, l.ij, l.sc(V), I.o6),
                    color: (0, n.zG)(a.ctaTextColor, l.ij, l.sc(W), I.o6)
                }),
                B = a => {
                    let {
                        adRequest: e
                    } = a;
                    const t = (0, r.D)(e),
                        s = t ? g.Z.placeholderBackground : g.Z.placeholderBackgroundWithAnimation,
                        c = o.Rl(e),
                        d = l.Wi(c);
                    return m.az("footer", {
                        className: b()(L, N.d6(e) && l.pC(e.value) && S),
                        style: {
                            backgroundColor: (0, n.zG)(c, l.UI((0, n.ls)((a => a.variant), i.$e.match({
                                KitchenSink: a => {
                                    let {
                                        backgroundColor: e
                                    } = a;
                                    return l.ij(e)
                                },
                                InFeedVideo: a => {
                                    let {
                                        backgroundColor: e
                                    } = a;
                                    return l.ij(e)
                                }
                            }), l.sc(I.Sn), I.o6)), l.FS)
                        }
                    }, m.az("div", {
                        className: T
                    }, m.az("div", {
                        style: {
                            height: 32
                        },
                        className: A
                    }, (0, n.zG)(c, l.UI((a => {
                        let {
                            metadata: e
                        } = a;
                        return m.az(U.Z, {
                            src: e.logoUrl,
                            className: F
                        })
                    })), l.HV((() => m.az("div", {
                        className: b()(s, Z)
                    }))))), m.az("div", {
                        className: x,
                        style: {
                            color: (0, n.zG)(c, l.UI((0, n.ls)((a => a.variant), i.$e.match({
                                KitchenSink: a => {
                                    let {
                                        textColor: e
                                    } = a;
                                    return l.ij(e)
                                },
                                InFeedVideo: a => {
                                    let {
                                        textColor: e
                                    } = a;
                                    return l.ij(e)
                                }
                            }), l.sc(I.ix), I.o6)), l.FS)
                        }
                    }, m.az(j, {
                        textOption: (0, n.zG)(c, l.UI((a => {
                            let {
                                metadata: e
                            } = a;
                            return e.companyTagline
                        }))),
                        placeholderCharacterCount: 65,
                        contentClassName: $,
                        disableAnimation: t
                    }))), m.az("div", {
                        style: (0, n.zG)(c, l.UI((0, n.ls)((a => a.variant), i.$e.match({
                            KitchenSink: q,
                            InFeedVideo: q
                        }))), l.FS),
                        className: b()(_, (0, y.yO)({
                            size: "small",
                            type: d ? y.L$.Base : y.L$.Primary
                        }), d && s)
                    }, (0, n.zG)(c, l.WA((0, n.ls)((a => a.variant), i.$e.match({
                        InFeedVideo: a => {
                            let {
                                ctaLabel: e
                            } = a;
                            return l.ij(e)
                        },
                        KitchenSink: a => {
                            let {
                                ctaLabel: e
                            } = a;
                            return l.ij(e)
                        }
                    }), l.sc("Learn more"))))))
                },
                f = "dMth9",
                w = a => {
                    let {
                        ad: e,
                        aspectRatio: t,
                        className: n,
                        ...r
                    } = a;
                    return m.az(z.o, {
                        aspectRatio: t
                    }, (a => {
                        let {
                            className: t
                        } = a;
                        return m.az("video", {
                            autoPlay: !0,
                            muted: !0,
                            loop: !0,
                            playsInline: !0,
                            preload: "auto",
                            className: b()(f, t, n),
                            ...r
                        }, m.az("source", {
                            src: e.variant.mediaUrl,
                            type: "video/mp4"
                        }))
                    }))
                },
                K = "DjoTo eziW_",
                P = "HjpWP",
                D = "LBDpZ eziW_",
                M = "RAaYj",
                O = c.h,
                H = "InFeedStaticAd-Container",
                E = "InFeedVideoAd-Container",
                Q = a => {
                    let {
                        ad: e
                    } = a;
                    return m.az(h.Q, {
                        aspectRatio: O,
                        placeholderConfig: d.EI,
                        responseOption: (0, n.zG)(l.ij(e.variant.mediaUrl), l.UI((a => ({
                            src: a
                        })))),
                        ...(0, s.N)(H)
                    })
                },
                Y = a => {
                    let {
                        adRequest: e
                    } = a;
                    const t = (0, r.D)(e);
                    return m.az("div", null, m.az(z.o, {
                        aspectRatio: O
                    }, (a => m.az(v.Il, {
                        animate: !1 === t,
                        backgroundColor: l.YP,
                        ...a
                    }))), m.az(B, {
                        adRequest: e
                    }))
                },
                J = a => {
                    let {
                        adRequest: e,
                        adType: t
                    } = a;
                    return (0, n.zG)(e, o.Rl, l.g_((() => m.az(Y, {
                        adRequest: e
                    })), (a => {
                        let {
                            metadata: r,
                            variant: l
                        } = a;
                        return (0, n.zG)(l, i.$e.match({
                            KitchenSink: a => m.az(Q, {
                                ad: {
                                    metadata: r,
                                    variant: a
                                }
                            }),
                            InFeedVideo: a => m.az(w, {
                                ad: {
                                    metadata: r,
                                    variant: a
                                },
                                aspectRatio: O,
                                ...(0, s.N)(E)
                            })
                        }), (a => m.az(C.Z, {
                            overlayClassName: P,
                            behind: m.az(u.WZ, {
                                adType: t,
                                metadata: r
                            }, m.az(p.$, {
                                metadata: r,
                                adType: t,
                                className: K
                            }, a, m.az(B, {
                                adRequest: e
                            })))
                        }, m.az("a", {
                            className: D,
                            href: "https://unsplash.com/blog/advertise-on-unsplash"
                        }, m.az("div", {
                            className: M
                        }, "Ad")))))
                    })))
                };
            var X = t(7593),
                aa = t(66510),
                ea = t(94128);
            const ta = (0, n.zG)(ea.er(), l.Gg((a => (0, aa.e$)(a, "force_in_feed_ads")))),
                na = () => (0, X.US)() && ta
        },
        93370: (a, e, t) => {
            t.d(e, {
                Z: () => n
            });
            const n = (0, t(44811).x)({
                path: "M16.3 3C9 3 3 9 3 16.3C3 23.6 9 29.6 16.3 29.6C23.7 29.6 29.6 23.6 29.6 16.3C29.6 9 23.7 3 16.3 3ZM13.8 22.6L8.7 17.5L10.7 15.5L13.8 18.6L21.6 10.8L23.6 12.8L13.8 22.6Z"
            })
        }
    }
]);
//# sourceMappingURL=3970.93b003f932635d1112af.js.map