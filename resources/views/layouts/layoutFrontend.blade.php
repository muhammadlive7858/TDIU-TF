<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TSUE-TF</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">
        {{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @endauth
            </div>
        @endif --}}
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <!doctype html>
            <html lang="en-US">

            <head>
                <!-- CSS only -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
                    crossorigin="anonymous">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <title>TSUE &#8211; Higher Education</title>
                <meta name='robots' content='max-image-preview:large' />
                <link rel='dns-prefetch' href='//s.w.org' />
                <link rel="alternate" type="application/rss+xml" title="Varsity &raquo; Feed"
                    href="https://varsity.mhrtheme.com/feed/" />
                <link rel="alternate" type="application/rss+xml" title="Varsity &raquo; Comments Feed"
                    href="https://varsity.mhrtheme.com/comments/feed/" />
                <script type="text/javascript">
                    window._wpemojiSettings = {
                        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
                        "ext": ".png",
                        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
                        "svgExt": ".svg",
                        "source": {
                            "concatemoji": "https:\/\/varsity.mhrtheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.3"
                        }
                    };
                    /*! This file is auto-generated */
                    ! function(e, a, t) {
                        var n, r, o, i = a.createElement("canvas"),
                            p = i.getContext && i.getContext("2d");

                        function s(e, t) {
                            var a = String.fromCharCode,
                                e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
                        }

                        function c(e) {
                            var t = a.createElement("script");
                            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
                        }
                        for (o = Array("flag", "emoji"), t.supports = {
                                everything: !0,
                                everythingExceptFlag: !0
                            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                            if (!p || !p.fillText) return !1;
                            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                                case "flag":
                                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                                        55356, 56826, 55356, 56819
                                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                                        56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                                        56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                                    ]);
                                case "emoji":
                                    return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                            }
                            return !1
                        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
                        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                            .readyCallback = function() {
                                t.DOMReady = !0
                            }, t.supports.everything || (n = function() {
                                t.readyCallback()
                            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                                "complete" === a.readyState && t.readyCallback()
                            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                                .wpemoji)))
                    }(window, document, window._wpemojiSettings);
                </script>
                <style type="text/css">
                    img.wp-smiley,
                    img.emoji {
                        display: inline !important;
                        border: none !important;
                        box-shadow: none !important;
                        height: 1em !important;
                        width: 1em !important;
                        margin: 0 0.07em !important;
                        vertical-align: -0.1em !important;
                        background: none !important;
                        padding: 0 !important;
                    }
                </style>
                <link rel='stylesheet' id='wp-block-library-css'
                    href='https://varsity.mhrtheme.com/wp-includes/css/dist/block-library/style.min.css?ver=6.0.3'
                    type='text/css' media='all' />
                <style id='global-styles-inline-css' type='text/css'>
                    body {
                        --wp--preset--color--black: #000000;
                        --wp--preset--color--cyan-bluish-gray: #abb8c3;
                        --wp--preset--color--white: #ffffff;
                        --wp--preset--color--pale-pink: #f78da7;
                        --wp--preset--color--vivid-red: #cf2e2e;
                        --wp--preset--color--luminous-vivid-orange: #ff6900;
                        --wp--preset--color--luminous-vivid-amber: #fcb900;
                        --wp--preset--color--light-green-cyan: #7bdcb5;
                        --wp--preset--color--vivid-green-cyan: #00d084;
                        --wp--preset--color--pale-cyan-blue: #8ed1fc;
                        --wp--preset--color--vivid-cyan-blue: #0693e3;
                        --wp--preset--color--vivid-purple: #9b51e0;
                        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
                        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
                        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
                        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
                        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
                        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
                        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
                        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
                        --wp--preset--font-size--small: 13px;
                        --wp--preset--font-size--medium: 20px;
                        --wp--preset--font-size--large: 36px;
                        --wp--preset--font-size--x-large: 42px;
                    }

                    .has-black-color {
                        color: var(--wp--preset--color--black) !important;
                    }

                    .has-cyan-bluish-gray-color {
                        color: var(--wp--preset--color--cyan-bluish-gray) !important;
                    }

                    .has-white-color {
                        color: var(--wp--preset--color--white) !important;
                    }

                    .has-pale-pink-color {
                        color: var(--wp--preset--color--pale-pink) !important;
                    }

                    .has-vivid-red-color {
                        color: var(--wp--preset--color--vivid-red) !important;
                    }

                    .has-luminous-vivid-orange-color {
                        color: var(--wp--preset--color--luminous-vivid-orange) !important;
                    }

                    .has-luminous-vivid-amber-color {
                        color: var(--wp--preset--color--luminous-vivid-amber) !important;
                    }

                    .has-light-green-cyan-color {
                        color: var(--wp--preset--color--light-green-cyan) !important;
                    }

                    .has-vivid-green-cyan-color {
                        color: var(--wp--preset--color--vivid-green-cyan) !important;
                    }

                    .has-pale-cyan-blue-color {
                        color: var(--wp--preset--color--pale-cyan-blue) !important;
                    }

                    .has-vivid-cyan-blue-color {
                        color: var(--wp--preset--color--vivid-cyan-blue) !important;
                    }

                    .has-vivid-purple-color {
                        color: var(--wp--preset--color--vivid-purple) !important;
                    }

                    .has-black-background-color {
                        background-color: var(--wp--preset--color--black) !important;
                    }

                    .has-cyan-bluish-gray-background-color {
                        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
                    }

                    .has-white-background-color {
                        background-color: var(--wp--preset--color--white) !important;
                    }

                    .has-pale-pink-background-color {
                        background-color: var(--wp--preset--color--pale-pink) !important;
                    }

                    .has-vivid-red-background-color {
                        background-color: var(--wp--preset--color--vivid-red) !important;
                    }

                    .has-luminous-vivid-orange-background-color {
                        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
                    }

                    .has-luminous-vivid-amber-background-color {
                        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
                    }

                    .has-light-green-cyan-background-color {
                        background-color: var(--wp--preset--color--light-green-cyan) !important;
                    }

                    .has-vivid-green-cyan-background-color {
                        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
                    }

                    .has-pale-cyan-blue-background-color {
                        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
                    }

                    .has-vivid-cyan-blue-background-color {
                        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
                    }

                    .has-vivid-purple-background-color {
                        background-color: var(--wp--preset--color--vivid-purple) !important;
                    }

                    .has-black-border-color {
                        border-color: var(--wp--preset--color--black) !important;
                    }

                    .has-cyan-bluish-gray-border-color {
                        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
                    }

                    .has-white-border-color {
                        border-color: var(--wp--preset--color--white) !important;
                    }

                    .has-pale-pink-border-color {
                        border-color: var(--wp--preset--color--pale-pink) !important;
                    }

                    .has-vivid-red-border-color {
                        border-color: var(--wp--preset--color--vivid-red) !important;
                    }

                    .has-luminous-vivid-orange-border-color {
                        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
                    }

                    .has-luminous-vivid-amber-border-color {
                        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
                    }

                    .has-light-green-cyan-border-color {
                        border-color: var(--wp--preset--color--light-green-cyan) !important;
                    }

                    .has-vivid-green-cyan-border-color {
                        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
                    }

                    .has-pale-cyan-blue-border-color {
                        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
                    }

                    .has-vivid-cyan-blue-border-color {
                        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
                    }

                    .has-vivid-purple-border-color {
                        border-color: var(--wp--preset--color--vivid-purple) !important;
                    }

                    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
                    }

                    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
                    }

                    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
                    }

                    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
                    }

                    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
                    }

                    .has-cool-to-warm-spectrum-gradient-background {
                        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
                    }

                    .has-blush-light-purple-gradient-background {
                        background: var(--wp--preset--gradient--blush-light-purple) !important;
                    }

                    .has-blush-bordeaux-gradient-background {
                        background: var(--wp--preset--gradient--blush-bordeaux) !important;
                    }

                    .has-luminous-dusk-gradient-background {
                        background: var(--wp--preset--gradient--luminous-dusk) !important;
                    }

                    .has-pale-ocean-gradient-background {
                        background: var(--wp--preset--gradient--pale-ocean) !important;
                    }

                    .has-electric-grass-gradient-background {
                        background: var(--wp--preset--gradient--electric-grass) !important;
                    }

                    .has-midnight-gradient-background {
                        background: var(--wp--preset--gradient--midnight) !important;
                    }

                    .has-small-font-size {
                        font-size: var(--wp--preset--font-size--small) !important;
                    }

                    .has-medium-font-size {
                        font-size: var(--wp--preset--font-size--medium) !important;
                    }

                    .has-large-font-size {
                        font-size: var(--wp--preset--font-size--large) !important;
                    }

                    .has-x-large-font-size {
                        font-size: var(--wp--preset--font-size--x-large) !important;
                    }
                </style>
                <link rel='stylesheet' id='contact-form-7-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-bootstrap-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/css/bootstrap.min.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-animate-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/css/animate.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-google-fonts-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/css/varsity-google-font.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-font-awesome-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/elegant_Icon/elegent_icon.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-nice-select-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/niceselect/css/nice-select.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-owl-carousel-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/owl_carousel/css/owl.carousel.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-magnific-popup-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/magnify_popup/magnific-popup.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-countdown-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/countdown/css/Countdown.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-flaticon-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/css/flaticon.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-aos-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/aos/aos.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='varsity-style-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/style.css?ver=6.0.3' type='text/css'
                    media='all' />
                <link rel='stylesheet' id='varsity-responsive-css'
                    href='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/css/responsive.css?ver=6.0.3'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='elementor-icons-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.14.0'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='elementor-frontend-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.5.6'
                    type='text/css' media='all' />
                <style id='elementor-frontend-inline-css' type='text/css'>
                    .elementor-kit-407 {
                        --e-global-color-primary: #6EC1E4;
                        --e-global-color-secondary: #54595F;
                        --e-global-color-text: #7A7A7A;
                        --e-global-color-accent: #61CE70;
                        --e-global-typography-primary-font-family: "Roboto";
                        --e-global-typography-primary-font-weight: 600;
                        --e-global-typography-secondary-font-family: "Roboto Slab";
                        --e-global-typography-secondary-font-weight: 400;
                        --e-global-typography-text-font-family: "Roboto";
                        --e-global-typography-text-font-weight: 400;
                        --e-global-typography-accent-font-family: "Roboto";
                        --e-global-typography-accent-font-weight: 500;
                    }

                    .elementor-section.elementor-section-boxed>.elementor-container {
                        max-width: 1140px;
                    }

                    .elementor-widget:not(:last-child) {
                        margin-bottom: 20px;
                    }

                        {}

                    h1.entry-title {
                        display: var(--page-title-display);
                    }

                    @media(max-width:1024px) {
                        .elementor-section.elementor-section-boxed>.elementor-container {
                            max-width: 1024px;
                        }
                    }

                    @media(max-width:767px) {
                        .elementor-section.elementor-section-boxed>.elementor-container {
                            max-width: 767px;
                        }
                    }

                    .elementor-widget-heading .elementor-heading-title {
                        color: var(--e-global-color-primary);
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-image .widget-image-caption {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-text-editor {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                        background-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap,
                    .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap {
                        color: var(--e-global-color-primary);
                        border-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-button .elementor-button {
                        font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-accent-font-weight);
                        background-color: var(--e-global-color-accent);
                    }

                    .elementor-widget-divider {
                        --divider-color: var(--e-global-color-secondary);
                    }

                    .elementor-widget-divider .elementor-divider__text {
                        color: var(--e-global-color-secondary);
                        font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-secondary-font-weight);
                    }

                    .elementor-widget-divider.elementor-view-stacked .elementor-icon {
                        background-color: var(--e-global-color-secondary);
                    }

                    .elementor-widget-divider.elementor-view-framed .elementor-icon,
                    .elementor-widget-divider.elementor-view-default .elementor-icon {
                        color: var(--e-global-color-secondary);
                        border-color: var(--e-global-color-secondary);
                    }

                    .elementor-widget-divider.elementor-view-framed .elementor-icon,
                    .elementor-widget-divider.elementor-view-default .elementor-icon svg {
                        fill: var(--e-global-color-secondary);
                    }

                    .elementor-widget-image-box .elementor-image-box-title {
                        color: var(--e-global-color-primary);
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-image-box .elementor-image-box-description {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-icon.elementor-view-stacked .elementor-icon {
                        background-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon.elementor-view-framed .elementor-icon,
                    .elementor-widget-icon.elementor-view-default .elementor-icon {
                        color: var(--e-global-color-primary);
                        border-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon.elementor-view-framed .elementor-icon,
                    .elementor-widget-icon.elementor-view-default .elementor-icon svg {
                        fill: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-box.elementor-view-stacked .elementor-icon {
                        background-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
                    .elementor-widget-icon-box.elementor-view-default .elementor-icon {
                        fill: var(--e-global-color-primary);
                        color: var(--e-global-color-primary);
                        border-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-box .elementor-icon-box-title {
                        color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-box .elementor-icon-box-title,
                    .elementor-widget-icon-box .elementor-icon-box-title a {
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-icon-box .elementor-icon-box-description {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-star-rating .elementor-star-rating__title {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-image-gallery .gallery-item .gallery-caption {
                        font-family: var(--e-global-typography-accent-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-accent-font-weight);
                    }

                    .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
                        border-color: var(--e-global-color-text);
                    }

                    .elementor-widget-icon-list .elementor-icon-list-icon i {
                        color: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-list .elementor-icon-list-icon svg {
                        fill: var(--e-global-color-primary);
                    }

                    .elementor-widget-icon-list .elementor-icon-list-text {
                        color: var(--e-global-color-secondary);
                    }

                    .elementor-widget-icon-list .elementor-icon-list-item>.elementor-icon-list-text,
                    .elementor-widget-icon-list .elementor-icon-list-item>a {
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-counter .elementor-counter-number-wrapper {
                        color: var(--e-global-color-primary);
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-counter .elementor-counter-title {
                        color: var(--e-global-color-secondary);
                        font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-secondary-font-weight);
                    }

                    .elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar {
                        background-color: var(--e-global-color-primary);
                    }

                    .elementor-widget-progress .elementor-title {
                        color: var(--e-global-color-primary);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-testimonial .elementor-testimonial-content {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-testimonial .elementor-testimonial-name {
                        color: var(--e-global-color-primary);
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-testimonial .elementor-testimonial-job {
                        color: var(--e-global-color-secondary);
                        font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-secondary-font-weight);
                    }

                    .elementor-widget-tabs .elementor-tab-title,
                    .elementor-widget-tabs .elementor-tab-title a {
                        color: var(--e-global-color-primary);
                    }

                    .elementor-widget-tabs .elementor-tab-title.elementor-active,
                    .elementor-widget-tabs .elementor-tab-title.elementor-active a {
                        color: var(--e-global-color-accent);
                    }

                    .elementor-widget-tabs .elementor-tab-title {
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-tabs .elementor-tab-content {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-accordion .elementor-accordion-icon,
                    .elementor-widget-accordion .elementor-accordion-title {
                        color: var(--e-global-color-primary);
                    }

                    .elementor-widget-accordion .elementor-accordion-icon svg {
                        fill: var(--e-global-color-primary);
                    }

                    .elementor-widget-accordion .elementor-active .elementor-accordion-icon,
                    .elementor-widget-accordion .elementor-active .elementor-accordion-title {
                        color: var(--e-global-color-accent);
                    }

                    .elementor-widget-accordion .elementor-active .elementor-accordion-icon svg {
                        fill: var(--e-global-color-accent);
                    }

                    .elementor-widget-accordion .elementor-accordion-title {
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-accordion .elementor-tab-content {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-toggle .elementor-toggle-title,
                    .elementor-widget-toggle .elementor-toggle-icon {
                        color: var(--e-global-color-primary);
                    }

                    .elementor-widget-toggle .elementor-toggle-icon svg {
                        fill: var(--e-global-color-primary);
                    }

                    .elementor-widget-toggle .elementor-tab-title.elementor-active a,
                    .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon {
                        color: var(--e-global-color-accent);
                    }

                    .elementor-widget-toggle .elementor-toggle-title {
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-toggle .elementor-tab-content {
                        color: var(--e-global-color-text);
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-alert .elementor-alert-title {
                        font-family: var(--e-global-typography-primary-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-primary-font-weight);
                    }

                    .elementor-widget-alert .elementor-alert-description {
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }

                    .elementor-widget-text-path {
                        font-family: var(--e-global-typography-text-font-family), Sans-serif;
                        font-weight: var(--e-global-typography-text-font-weight);
                    }
                </style>
                <link rel='stylesheet' id='font-awesome-5-all-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.5.6'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='font-awesome-4-shim-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.5.6'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='video-conferencing-with-zoom-api-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/video-conferencing-with-zoom-api/assets/public/css/style.min.css?ver=3.8.18'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='learnpress-widgets-css'
                    href='https://varsity.mhrtheme.com/wp-content/plugins/learnpress/assets/css/widgets.min.css?ver=4.1.5'
                    type='text/css' media='all' />
                <link rel='stylesheet' id='google-fonts-1-css'
                    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.3'
                    type='text/css' media='all' />
                <script type='text/javascript' src='https://varsity.mhrtheme.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
                    id='jquery-core-js'></script>
                <script type='text/javascript' src='https://varsity.mhrtheme.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
                    id='jquery-migrate-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.5.6'
                    id='font-awesome-4-shim-js'></script>
                <link rel="https://api.w.org/" href="https://varsity.mhrtheme.com/wp-json/" />
                <link rel="alternate" type="application/json"
                    href="https://varsity.mhrtheme.com/wp-json/wp/v2/pages/12" />
                <link rel="EditURI" type="application/rsd+xml" title="RSD"
                    href="https://varsity.mhrtheme.com/xmlrpc.php?rsd" />
                <link rel="wlwmanifest" type="application/wlwmanifest+xml"
                    href="https://varsity.mhrtheme.com/wp-includes/wlwmanifest.xml" />
                <meta name="generator" content="WordPress 6.0.3" />
                <link rel="canonical" href="https://varsity.mhrtheme.com/" />
                <link rel='shortlink' href='https://varsity.mhrtheme.com/' />
                <link rel="alternate" type="application/json+oembed"
                    href="https://varsity.mhrtheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvarsity.mhrtheme.com%2F" />
                <link rel="alternate" type="text/xml+oembed"
                    href="https://varsity.mhrtheme.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fvarsity.mhrtheme.com%2F&#038;format=xml" />

                <style id="learn-press-custom-css">
                    :root {
                        --lp-primary-color: #2572ff;
                        --lp-secondary-color: #442e66;
                    }
                </style>

                <meta name="framework" content="Redux 4.2.15" />
                <style type="text/css">
                    .blog_grid_bg {
                        background-color: ;
                        background-repeat: ;
                        background-size: ;
                        background-attachment: ;
                        background-position:  !important;
                        background-image: url(https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/breadcrumb_bg/blog_breadcrumg.png );
                    }

                    .blog_breadcrumb {
                        background-color: ;
                        background-repeat: ;
                        background-size: ;
                        background-attachment: ;
                        background-position:  !important;
                        background-image: url(https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/breadcrumb_bg_1.png );
                    }

                    body {
                        background-color: ;
                        background-repeat: ;
                        background-size: ;
                        background-attachment: ;
                        background-position:  !important;
                        background-image: url();
                    }

                    h1 {
                        color: ;
                    }

                    h2 {
                        color: ;
                    }

                    h3 {
                        color: ;
                    }

                    h4 {
                        color: ;
                    }

                    h5 {
                        color: ;
                    }

                    h6 {
                        color: ;
                    }

                    p {
                        color: ;
                    }

                    .header_part .sub_header {
                        background-color: ;
                    }

                    .footer_section {
                        background-color: ;
                    }

                    .niceSelect .option.selected,
                    .niceSelect .list li:hover,
                    .common-checkbox:checked+label:before,
                    .btn_3,
                    .view_archive_btn:hover,
                    .header_part .btn_1:hover,
                    .header_part .sub_header i,
                    .header_part .sub_header a:hover,
                    .menu_fixed .btn_1:hover,
                    .navbar_bar ul li a:hover,
                    .mega_menu_dropdown:hover>a,
                    .menu_fixed .mega_menu_dropdown>ul li a:hover,
                    .single_page_header .navbar_bar ul li a:hover,
                    .single_page_header .navbar_bar ul li ul li a:hover,
                    .single_page_header .mega_menu_dropdown:hover>a,
                    .countdown .time,
                    .about_us .about_us_details h3,
                    .popular_course .single_courses_item h4:hover,
                    .popular_course_list p i,
                    .course_category .single_category_item h4,
                    .course_category .single_category_item p,
                    .instructor_list .single_instructor_tittle h4 a:hover,
                    .motivation .single_item:hover i,
                    .motivation .single_item:hover p,
                    .motivation .single_item.active i,
                    .motivation .single_item.active p,
                    .motivation_video span,
                    .motivation_video a:hover span,
                    .event_list .single_event_list a h2:hover,
                    .event_list .event_list_tag i,
                    .student_review .owl-nav button.owl-next:hover,
                    .student_review .owl-nav button.owl-prev:hover,
                    .grid_courses_filter_part .single_courses_filter i,
                    .blog_sidebar .single_sidebar h3 a:hover,
                    .blog_sidebar .single_sidebar .search_form i,
                    .blog_sidebar .single_sidebar .single_sidebar_post .sidebar_post_content h4 a:hover,
                    .blog_sidebar .single_sidebar .category_list p a:hover,
                    .wpcf7 input[type="submit"]:hover,
                    .course_details_tab .course_details_decription ul li i,
                    .course_details_tab .course_details_decription ul li span,
                    .course_details_tab .course_details_tab . i,
                    .course_details_tab .course_details_tab .active,
                    .comment_part .replay_btn:hover,
                    .comment_part .like_btn,
                    .add_cart_sidebar h2,
                    .upcoming_event_desc p i,
                    .upcoming_event_details .single_sidebar p i,
                    .single_page_blog_post .single_blog_content h2 a:hover,
                    .single_page_blog_post .single_blog_content .read_more_btn:hover,
                    .quote_post p a:hover,
                    .link_post p a:hover,
                    .video_post .post_thumb .popup_youtube,
                    .single_blog_details .single_blog_list p i,
                    .blog_page_single_item .reply_btn:hover,
                    .tag_share_list .share_icon_list a:hover,
                    .contact_sidebar .single_contact_sidebar i,
                    .go_back:hover,
                    .comming_soon_page .comming_soom .single_countdown:last-child span,
                    .copyright_content .copyright_social_icon a i:hover,
                    .footer_section .footer_contact_info a,
                    .footer_section .footer_nav ul li a:hover,
                    .footer_section .copyright_part a,
                    .logged-in-as a,
                    .lp_profile_course_progress__nav button:hover,
                    .course_details .course_registration_form .btn_1:hover,
                    .about_us .about_us_details .btn_1:hover {
                        color: ;
                    }

                    .show .btn,
                    .preloder_part .dot1,
                    .preloder_part .dot2,
                    .page_pageination a:hover,
                    .page-pageination span:hover,
                    .page_pageination .current,
                    .btn_1,
                    .btn_1:hover,
                    .btn_2:hover,
                    .btn_3:hover,
                    .btn_4:hover,
                    .dropdown-toggle:hover,
                    .menu_fixed .btn_1,
                    .blog_breadcrumb .breadcrumb_iner span,
                    .banner_part .owl-nav button.owl-next:hover,
                    .banner_part .owl-nav button.owl-prev:hover,
                    .about_us .about_tricker,
                    .popular_course button.owl-dot.active,
                    .courses_review .courses_btn,
                    .course_category button.owl-dot.active,
                    .instructor_list .single_instructor .social_icon a:hover,
                    .cta_part,
                    .education_sidebar .single_sidebar h4:after,
                    .wpcf7 input[type="submit"],
                    .blog_page_single_item h3:after,
                    .eventcountdown,
                    .subscribe_form a,
                    .social_icon a:hover,
                    .lp_profile_course_progress__nav button {
                        background-color: ;
                    }

                    .page_pageination a:hover,
                    .page-pageination span:hover,
                    .page_pageination .current,
                    .btn_1,
                    .btn_1:hover,
                    .btn_2:hover,
                    .btn_3:hover,
                    .btn_4:hover,
                    .view_archive_btn:hover,
                    .banner_part .owl-nav button.owl-next:hover,
                    .banner_part .owl-nav button.owl-prev:hover,
                    .instructor_list .single_instructor .social_icon a:hover,
                    .wpcf7 input[type="submit"],
                    .subscribe_form a,
                    .social_icon a:hover,
                    .header_part .btn_1:hover,
                    .btn_3,
                    .lp_profile_course_progress__nav button,
                    .lp_profile_course_progress__nav button:hover,
                    .course_details .course_registration_form .btn_1:hover {
                        border-color: ;
                    }
                </style>
                <script type="text/javascript"></script>

                <link rel="preconnect" href="//code.tidio.co">
                <link rel="icon" href="https://varsity.mhrtheme.com/wp-content/uploads/2021/09/favicon-1.png"
                    sizes="32x32" />
                <link rel="icon" href="https://varsity.mhrtheme.com/wp-content/uploads/2021/09/favicon-1.png"
                    sizes="192x192" />
                <link rel="apple-touch-icon"
                    href="https://varsity.mhrtheme.com/wp-content/uploads/2021/09/favicon-1.png" />
                <meta name="msapplication-TileImage"
                    content="https://varsity.mhrtheme.com/wp-content/uploads/2021/09/favicon-1.png" />
                <style id="varsity-dynamic-css" title="dynamic-css" class="redux-options-output">
                    p {
                        font-display: swap;
                    }

                    h1 {
                        font-display: swap;
                    }

                    h2 {
                        font-display: swap;
                    }

                    h3 {
                        font-display: swap;
                    }

                    h4 {
                        font-display: swap;
                    }

                    h5 {
                        font-display: swap;
                    }

                    h6 {
                        font-display: swap;
                    }
                </style>
            </head>

            <body
                class="home page-template page-template-template-parts page-template-frontpage page-template-template-partsfrontpage-php page page-id-12 wp-custom-logo no-sidebar elementor-default elementor-kit-407 elementor-page elementor-page-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-dark-grayscale">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0 0.49803921568627" />
                                <feFuncG type="table" tableValues="0 0.49803921568627" />
                                <feFuncB type="table" tableValues="0 0.49803921568627" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-grayscale">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0 1" />
                                <feFuncG type="table" tableValues="0 1" />
                                <feFuncB type="table" tableValues="0 1" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-purple-yellow">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                                <feFuncG type="table" tableValues="0 1" />
                                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-blue-red">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0 1" />
                                <feFuncG type="table" tableValues="0 0.27843137254902" />
                                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-midnight">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0 0" />
                                <feFuncG type="table" tableValues="0 0.64705882352941" />
                                <feFuncB type="table" tableValues="0 1" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-magenta-yellow">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0.78039215686275 1" />
                                <feFuncG type="table" tableValues="0 0.94901960784314" />
                                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-purple-green">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                                <feFuncG type="table" tableValues="0 1" />
                                <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
                    focusable="false" role="none"
                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                    <defs>
                        <filter id="wp-duotone-blue-orange">
                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                            <feComponentTransfer color-interpolation-filters="sRGB">
                                <feFuncR type="table" tableValues="0.098039215686275 1" />
                                <feFuncG type="table" tableValues="0 0.66274509803922" />
                                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                                <feFuncA type="table" tableValues="1 1" />
                            </feComponentTransfer>
                            <feComposite in2="SourceGraphic" operator="in" />
                        </filter>
                    </defs>
                </svg>

                <div id="page" class="site">
                    <header id="masthead" class="header_part site-header">
                        <div class="sub_header section_bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="header_contact_info">
                                            <a href="tel:+945967858"><i class="icon_phone"></i>+998945967858</a>
                                            <a href="mailto:education@support.com"><i
                                                    class="icon_mail_alt"></i>education@support.com</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="header_login_info">
                                            <a href="#">Become A
                                                Teacher</a>
                                            @if (Route::has('login'))
                                                @auth
                                                    <a href="{{ url('/home') }}">Home</a>
                                                @else
                                                    <a href="{{ route('login') }}">My Profile</a>
                                                @endauth
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_nav">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="header_iner d-flex justify-content-between align-items-center">
                                            <div class="sidebar_icon troggle_icon d-lg-none">
                                                <i class="bi bi-plus"></i>=
                                            </div>
                                            <div class="logo">
                                                <a href="#" class="custom-logo-link" rel="home"
                                                    aria-current="page"><img width="100" height="100"
                                                        src="{{ asset('/images/logo.png') }}" class="custom-logo"
                                                        alt="TSUE University" /></a>
                                            </div>
                                            <nav class="navbar_bar">
                                                <ul id="menu-primary-menu" class="menu">
                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        id="menu-item-1365"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mega_menu_dropdown active menu-item-1365 nav-item">
                                                        <a title="Home" href="#"
                                                            data-toggle="mega_menu_dropdown" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="mega_menu_dropdown-toggle nav-link"
                                                            id="menu-item-mega_menu_dropdown-1365">Universitet</a>
                                                        <ul class="mega_menu_dropdown-menu"
                                                            aria-labelledby="menu-item-mega_menu_dropdown-1365"
                                                            role="menu">
                                                            <li itemscope="itemscope" id="menu-item-1239"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item active menu-item-1239 nav-item">
                                                                <a title="Homepage One" href="#"
                                                                    class="mega_menu_dropdown-item"
                                                                    aria-current="page">Universitet haqida</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1240"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240 nav-item">
                                                                <a title="Homepage Two" href="#"
                                                                    class="mega_menu_dropdown-item">Universitet
                                                                    nizomi</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1239"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item active menu-item-1239 nav-item">
                                                                <a title="Homepage One" href="#"
                                                                    class="mega_menu_dropdown-item"
                                                                    aria-current="page">Universitet kichik tartib
                                                                    qoidalari</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1240"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240 nav-item">
                                                                <a title="Homepage Two" href="#"
                                                                    class="mega_menu_dropdown-item">Universitet
                                                                    odob-axloq kodeksi</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1239"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item active menu-item-1239 nav-item">
                                                                <a title="Homepage One" href="#"
                                                                    class="mega_menu_dropdown-item"
                                                                    aria-current="page">Dekanat</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1240"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1240 nav-item">
                                                                <a title="Homepage Two" href="#"
                                                                    class="mega_menu_dropdown-item">Kafedralar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        id="menu-item-1340"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega_menu_dropdown menu-item-1340 nav-item">
                                                        <a title="All Courses" href="#"
                                                            data-toggle="mega_menu_dropdown" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="mega_menu_dropdown-toggle nav-link"
                                                            id="menu-item-mega_menu_dropdown-1340">Faoliyat</a>
                                                        <ul class="mega_menu_dropdown-menu"
                                                            aria-labelledby="menu-item-mega_menu_dropdown-1340"
                                                            role="menu">
                                                            <li itemscope="itemscope" id="menu-item-70"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70 nav-item">
                                                                <a title="Course List" href="#"
                                                                    class="mega_menu_dropdown-item">Xaqlaro hamkor
                                                                    tashkilotlar</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1341"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1341 nav-item">
                                                                <a title="Course Details" href="#"
                                                                    class="mega_menu_dropdown-item">Moliyaviy
                                                                    faoliyat</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-1345"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1345 nav-item">
                                                                <a title="Course Category" href="#"
                                                                    class="mega_menu_dropdown-item">Yoshlar bilan
                                                                    ishlash va ma'naviy-madaniy faoliyat</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        id="menu-item-77"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega_menu_dropdown menu-item-77 nav-item">
                                                        <a title="Blog Classic" href="#"
                                                            data-toggle="mega_menu_dropdown" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="mega_menu_dropdown-toggle nav-link"
                                                            id="menu-item-mega_menu_dropdown-77">Abuturent</a>
                                                        <ul class="mega_menu_dropdown-menu"
                                                            aria-labelledby="menu-item-mega_menu_dropdown-77"
                                                            role="menu">
                                                            <li itemscope="itemscope" id="menu-item-78"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                                                                <a title="Blog Grid" href="#"
                                                                    class="mega_menu_dropdown-item">Kunduzgi talim
                                                                    yo'nalishlari</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-82"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82 nav-item">
                                                                <a title="Blog Left Sidebar" href="#"
                                                                    class="mega_menu_dropdown-item">Kunduzgi talim
                                                                    kvotasi</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-78"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                                                                <a title="Blog Grid" href="#"
                                                                    class="mega_menu_dropdown-item">Sirtqi talim
                                                                    yo'nalishlari</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-82"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82 nav-item">
                                                                <a title="Blog Left Sidebar" href="#"
                                                                    class="mega_menu_dropdown-item">Sirtqi talim
                                                                    kvotasi</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-78"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                                                                <a title="Blog Grid" href="#"
                                                                    class="mega_menu_dropdown-item">Magistraturs talim
                                                                    yo'nalishlari va kvotasi</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-82"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82 nav-item">
                                                                <a title="Blog Left Sidebar" href="#"
                                                                    class="mega_menu_dropdown-item">O'qishni
                                                                    ko'chirish</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        id="menu-item-402"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega_menu_dropdown menu-item-402 nav-item">
                                                        <a title="Pages" href="#"
                                                            data-toggle="mega_menu_dropdown" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="mega_menu_dropdown-toggle nav-link"
                                                            id="menu-item-mega_menu_dropdown-402">Talabalar</a>
                                                        <ul class="mega_menu_dropdown-menu"
                                                            aria-labelledby="menu-item-mega_menu_dropdown-402"
                                                            role="menu">
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Oliy talim davlat
                                                                    talim standarti</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Meyoriy huquqiy
                                                                    hujjatlar</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">O'quv jarayoni
                                                                    grafigi</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li itemscope="itemscope" id="menu-item-402"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega_menu_dropdown menu-item-402 nav-item">
                                                        <a title="Pages" href="#"
                                                            data-toggle="mega_menu_dropdown" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="mega_menu_dropdown-toggle nav-link"
                                                            id="menu-item-mega_menu_dropdown-402">Talim resurslari</a>
                                                        <ul class="mega_menu_dropdown-menu"
                                                            aria-labelledby="menu-item-mega_menu_dropdown-402"
                                                            role="menu">
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Elektron
                                                                    kutubxona</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">ZOOM</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Talim
                                                                    resurslari</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Dars jadvali</a>
                                                            </li>
                                                            <li itemscope="itemscope" id="menu-item-414"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-414 nav-item">
                                                                <a title="About Us" href="#"
                                                                    class="mega_menu_dropdown-item">Masofaviy talim
                                                                    tizimi</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    {{-- <li itemscope="itemscope" id="menu-item-74"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74 nav-item">
                                                        <a title="Contact Us" href="#"
                                                            class="nav-link bg-primary p-2 form-control text-white">Bog'lanish</a>
                                                    </li> --}}
                                                </ul>
                                            </nav>
                                            <div class="navbar_btn">
                                                <a href="#"
                                                    class="btn_1">
                                                    Bog'lanish </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header><!-- #masthead -->

                    <div id="content" class="site-content">

                        {{-- <h1>Muhammad</h1> --}}

                        @yield('content')

                    </div><!-- #content -->


                    <!-- footer part here -->
                    <footer class="footer_section">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_feature_footer">
                                        <a href="https://varsity.mhrtheme.com/"><img
                                                src="https://varsity.mhrtheme.com/wp-content/uploads/2021/09/logo.png"
                                                alt="No-image"></a>

                                        <p>Loo faff about cockup Harry baking cakes hunky dory mush happy days on your
                                            bike mate.</p>
                                        <div class="footer_contact_info">
                                            <a href="tel:+464 145 684 325"><i class="icon_phone"></i>
                                                +464 145 684 325</a>
                                            <a href="mailto:education@example.com"><i class="icon_mail_alt"></i>
                                                education@example.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_feature_footer footer_nav">
                                        <ul>
                                            <h4>Popular Courses</h4>
                                            <div class="menu-popular-course-container">
                                                <ul id="menu-popular-course" class="menu">
                                                    <li id="menu-item-1001"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1001">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/courses/algebra-calculus/">Algebra
                                                            &#038; Calculus</a>
                                                    </li>
                                                    <li id="menu-item-1002"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1002">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/courses/business-strategy/">Business
                                                            Strategy</a>
                                                    </li>
                                                    <li id="menu-item-1003"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1003">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/courses/computer-security-network/">Computer
                                                            Security &#038; Network</a>
                                                    </li>
                                                    <li id="menu-item-1004"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1004">
                                                        <a href="https://varsity.mhrtheme.com/courses/data-analysis/">Data
                                                            Analysis</a>
                                                    </li>
                                                    <li id="menu-item-1005"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1005">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/courses/english-learning/">English
                                                            Learning</a>
                                                    </li>
                                                    <li id="menu-item-1006"
                                                        class="menu-item menu-item-type-post_type menu-item-object-lp_course menu-item-1006">
                                                        <a href="https://varsity.mhrtheme.com/courses/music-art/">Music
                                                            &#038; Art</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_feature_footer footer_nav">
                                        <ul>
                                            <h4>Course Categories</h4>
                                            <div class="menu-course-categories-container">
                                                <ul id="menu-course-categories" class="menu">
                                                    <li id="menu-item-114"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-114">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/arts-humanities/">Arts
                                                            &amp; Humanities</a>
                                                    </li>
                                                    <li id="menu-item-115"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-115">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/business/">Business</a>
                                                    </li>
                                                    <li id="menu-item-116"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-116">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/computer-science/">Computer
                                                            Science</a>
                                                    </li>
                                                    <li id="menu-item-117"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-117">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/data-science/">Data
                                                            Science</a>
                                                    </li>
                                                    <li id="menu-item-118"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-118">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/language-learning/">Language
                                                            Learning</a>
                                                    </li>
                                                    <li id="menu-item-119"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-119">
                                                        <a
                                                            href="https://varsity.mhrtheme.com/course-category/math-logic/">Math
                                                            &amp; Logic</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="single_feature_footer footer_nav">
                                        <ul>
                                            <h4>Quick Links</h4>
                                            <div class="menu-quick-links-container">
                                                <ul id="menu-quick-links" class="menu">
                                                    <li id="menu-item-101"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101">
                                                        <a href="https://varsity.mhrtheme.com/live-class/">Live
                                                            Class</a>
                                                    </li>
                                                    <li id="menu-item-99"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99">
                                                        <a href="https://varsity.mhrtheme.com/tuition-fees/">Tuition
                                                            Fees</a>
                                                    </li>
                                                    <li id="menu-item-94"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
                                                        <a href="https://varsity.mhrtheme.com/terms-conditions/">Terms
                                                            &#038; Conditions</a>
                                                    </li>
                                                    <li id="menu-item-100"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100">
                                                        <a href="https://varsity.mhrtheme.com/privacy-policy/">Privacy
                                                            Policy</a>
                                                    </li>
                                                    <li id="menu-item-106"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106">
                                                        <a href="https://varsity.mhrtheme.com/support/">Support</a>
                                                    </li>
                                                    <li id="menu-item-107"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                                        <a href="https://varsity.mhrtheme.com/career/">Career</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="copyright_part">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-8">
                                                <p>© 2022 Copyright. Developed by Muhammad.</p>
                                            </div>
                                            <div class="col-lg-6 col-md-4">
                                                <div class="social_icon">
                                                    <a href="#"><i class="social_facebook"></i></a>
                                                    <a href="#"><i class="social_twitter"></i></a>
                                                    <a href="#"><i class="social_youtube"></i></a>
                                                    <a href="#"><i class="social_linkedin"></i></a>
                                                    <a href="#"><i class="social_skype"></i></a>
                                                    <a href="#"><i class="social_instagram"></i></a>
                                                    <a href="#"><i class="social_pinterest"></i></a>
                                                    <a href="#"><i class="social_googleplus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/icon/shape_01.png"
                            alt="#" class="footer_sharp_1">
                        <img src="https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/icon/about_shape_02.png"
                            alt="#" class="footer_sharp_2 custom-animation2">
                        <img src="https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/icon/about_shape_03.png"
                            alt="#" class="footer_sharp_3 custom-animation3">
                    </footer>
                </div><!-- #page -->

                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
                    id='regenerator-runtime-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'>
                </script>
                <script type='text/javascript' id='contact-form-7-js-extra'>
                    /* <![CDATA[ */
                    var wpcf7 = {
                        "api": {
                            "root": "https:\/\/varsity.mhrtheme.com\/wp-json\/",
                            "namespace": "contact-form-7\/v1"
                        }
                    };
                    /* ]]> */
                </script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6'
                    id='contact-form-7-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/js/popper.min.js?ver=1.1' id='varsity-popper-js'>
                </script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/js/bootstrap.min.js?ver=1.1'
                    id='varsity-bootstrap-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/niceselect/js/jquery.nice-select.min.js?ver=1.1'
                    id='varsity-nice-select-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/owl_carousel/js/owl.carousel.min.js?ver=1.1'
                    id='varsity-owl-carousel-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/magnify_popup/jquery.magnific-popup.js?ver=1.1'
                    id='varsity-magnify-popup-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/countdown/js/simplyCountdown.min.js?ver=1.1'
                    id='varsity-simply-countdown-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/counter/jquery.countTo.js?ver=1.1'
                    id='varsity-counter-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/vendors/aos/aos.js?ver=1.1' id='varsity-aos-js'>
                </script>
                <script type='text/javascript' src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/js/custom.js?ver=1.1'
                    id='varsity-custom-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/js/navigation.js?ver=1.1'
                    id='varsity-navigation-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/themes/varsity/assets/js/skip-link-focus-fix.js?ver=1.1'
                    id='varsity-skip-link-focus-fix-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.6'
                    id='elementor-webpack-runtime-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.6'
                    id='elementor-frontend-modules-js'></script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
                    id='elementor-waypoints-js'></script>
                <script type='text/javascript' src='https://varsity.mhrtheme.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1'
                    id='jquery-ui-core-js'></script>
                <script type='text/javascript' id='elementor-frontend-js-before'>
                    var elementorFrontendConfig = {
                        "environmentMode": {
                            "edit": false,
                            "wpPreview": false,
                            "isScriptDebug": false
                        },
                        "i18n": {
                            "shareOnFacebook": "Share on Facebook",
                            "shareOnTwitter": "Share on Twitter",
                            "pinIt": "Pin it",
                            "download": "Download",
                            "downloadImage": "Download image",
                            "fullscreen": "Fullscreen",
                            "zoom": "Zoom",
                            "share": "Share",
                            "playVideo": "Play Video",
                            "previous": "Previous",
                            "next": "Next",
                            "close": "Close"
                        },
                        "is_rtl": false,
                        "breakpoints": {
                            "xs": 0,
                            "sm": 480,
                            "md": 768,
                            "lg": 1025,
                            "xl": 1440,
                            "xxl": 1600
                        },
                        "responsive": {
                            "breakpoints": {
                                "mobile": {
                                    "label": "Mobile",
                                    "value": 767,
                                    "default_value": 767,
                                    "direction": "max",
                                    "is_enabled": true
                                },
                                "mobile_extra": {
                                    "label": "Mobile Extra",
                                    "value": 880,
                                    "default_value": 880,
                                    "direction": "max",
                                    "is_enabled": false
                                },
                                "tablet": {
                                    "label": "Tablet",
                                    "value": 1024,
                                    "default_value": 1024,
                                    "direction": "max",
                                    "is_enabled": true
                                },
                                "tablet_extra": {
                                    "label": "Tablet Extra",
                                    "value": 1200,
                                    "default_value": 1200,
                                    "direction": "max",
                                    "is_enabled": false
                                },
                                "laptop": {
                                    "label": "Laptop",
                                    "value": 1366,
                                    "default_value": 1366,
                                    "direction": "max",
                                    "is_enabled": false
                                },
                                "widescreen": {
                                    "label": "Widescreen",
                                    "value": 2400,
                                    "default_value": 2400,
                                    "direction": "min",
                                    "is_enabled": false
                                }
                            }
                        },
                        "version": "3.5.6",
                        "is_static": false,
                        "experimentalFeatures": {
                            "e_dom_optimization": true,
                            "e_optimized_assets_loading": true,
                            "e_optimized_css_loading": true,
                            "a11y_improvements": true,
                            "e_import_export": true,
                            "additional_custom_breakpoints": true,
                            "e_hidden_wordpress_widgets": true,
                            "landing-pages": true,
                            "elements-color-picker": true,
                            "favorite-widgets": true,
                            "admin-top-bar": true
                        },
                        "urls": {
                            "assets": "https:\/\/varsity.mhrtheme.com\/wp-content\/plugins\/elementor\/assets\/"
                        },
                        "settings": {
                            "page": [],
                            "editorPreferences": []
                        },
                        "kit": {
                            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                            "global_image_lightbox": "yes",
                            "lightbox_enable_counter": "yes",
                            "lightbox_enable_fullscreen": "yes",
                            "lightbox_enable_zoom": "yes",
                            "lightbox_enable_share": "yes",
                            "lightbox_title_src": "title",
                            "lightbox_description_src": "description"
                        },
                        "post": {
                            "id": 124,
                            "title": "Varsity%20%E2%80%93%20Educational%20WordPress%20Theme",
                            "excerpt": "",
                            "featuredImage": "https:\/\/varsity.mhrtheme.com\/wp-content\/uploads\/2021\/09\/popular_item_6.png"
                        }
                    };
                </script>
                <script type='text/javascript'
                    src='https://varsity.mhrtheme.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.6'
                    id='elementor-frontend-js'></script>
                <script type='text/javascript'>
                    document.tidioChatCode = "rkqidedynllcgcv1ggaslub1w5ghfyiq";
                    (function() {
                        function asyncLoad() {
                            var tidioScript = document.createElement("script");
                            tidioScript.type = "text/javascript";
                            tidioScript.async = true;
                            tidioScript.src = "//code.tidio.co/rkqidedynllcgcv1ggaslub1w5ghfyiq.js";
                            document.body.appendChild(tidioScript);
                        }
                        if (window.attachEvent) {
                            window.attachEvent("onload", asyncLoad);
                        } else {
                            window.addEventListener("load", asyncLoad, false);
                        }
                    })();
                </script>
            </body>

            </html>

        </div>
    </div>
</body>

</html>
