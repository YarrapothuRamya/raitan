<<<<<<< HEAD
@extends('layouts.app')
@section('content')
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- Styles -->
  <style>
    /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    :host,
    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-feature-settings: normal;
      font-variation-settings: normal;
      -webkit-tap-highlight-color: transparent
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    dialog {
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .-left-20 {
      left: -5rem
    }

    .top-0 {
      top: 0px
    }

    .-bottom-16 {
      bottom: -4rem
    }

    .-left-16 {
      left: -4rem
    }

    .-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .mt-6 {
      margin-top: 1.5rem
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

    .aspect-video {
      aspect-ratio: 16 / 9
    }

    .size-12 {
      width: 3rem;
      height: 3rem
    }

    .size-5 {
      width: 1.25rem;
      height: 1.25rem
    }

    .size-6 {
      width: 1.5rem;
      height: 1.5rem
    }

    .h-12 {
      height: 3rem
    }

    .h-40 {
      height: 10rem
    }

    .h-full {
      height: 100%
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-full {
      width: 100%
    }

    .w-\[calc\(100\%\+8rem\)\] {
      width: calc(100% + 8rem)
    }

    .w-auto {
      width: auto
    }

    .max-w-\[877px\] {
      max-width: 877px
    }

    .max-w-2xl {
      max-width: 42rem
    }

    .flex-1 {
      flex: 1 1 0%
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .flex-col {
      flex-direction: column
    }

    .items-start {
      align-items: flex-start
    }

    .items-center {
      align-items: center
    }

    .items-stretch {
      align-items: stretch
    }

    .justify-end {
      justify-content: flex-end
    }

    .justify-center {
      justify-content: center
    }

    .gap-2 {
      gap: 0.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .gap-6 {
      gap: 1.5rem
    }

    .self-center {
      align-self: center
    }

    .overflow-hidden {
      overflow: hidden
    }

    .rounded-\[10px\] {
      border-radius: 10px
    }

    .rounded-full {
      border-radius: 9999px
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-md {
      border-radius: 0.375rem
    }

    .rounded-sm {
      border-radius: 0.125rem
    }

    .bg-\[\#FF2D20\]\/10 {
      background-color: rgb(255 45 32 / 0.1)
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gradient-to-b {
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
    }

    .from-transparent {
      --tw-gradient-from: transparent var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-white {
      --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .to-white {
      --tw-gradient-to: #fff var(--tw-gradient-to-position)
    }

    .stroke-\[\#FF2D20\] {
      stroke: #FF2D20
    }

    .object-cover {
      object-fit: cover
    }

    .object-top {
      object-position: top
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .py-10 {
      padding-top: 2.5rem;
      padding-bottom: 2.5rem
    }

    .px-3 {
      padding-left: 0.75rem;
      padding-right: 0.75rem
    }

    .py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .pt-3 {
      padding-top: 0.75rem
    }

    .text-center {
      text-align: center
    }

    .font-sans {
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .text-sm\/relaxed {
      font-size: 0.875rem;
      line-height: 1.625
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .font-semibold {
      font-weight: 600
    }

    .text-black {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
      --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
      --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .ring-transparent {
      --tw-ring-color: transparent
    }

    .ring-white\/\[0\.05\] {
      --tw-ring-color: rgb(255 255 255 / 0.05)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .transition {
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .duration-300 {
      transition-duration: 300ms
    }

    .selection\:bg-\[\#FF2D20\] *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-\[\#FF2D20\]::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-black:hover {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .hover\:text-black\/70:hover {
      color: rgb(0 0 0 / 0.7)
    }

    .hover\:ring-black\/20:hover {
      --tw-ring-color: rgb(0 0 0 / 0.2)
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px
    }

    .focus-visible\:ring-1:focus-visible {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
    }

    @media (min-width: 640px) {
      .sm\:size-16 {
        width: 4rem;
        height: 4rem
      }

      .sm\:size-6 {
        width: 1.5rem;
        height: 1.5rem
      }

      .sm\:pt-5 {
        padding-top: 1.25rem
      }
    }

    @media (min-width: 768px) {
      .md\:row-span-3 {
        grid-row: span 3 / span 3
      }
    }

    @media (min-width: 1024px) {
      .lg\:col-start-2 {
        grid-column-start: 2
      }

      .lg\:h-16 {
        height: 4rem
      }

      .lg\:max-w-7xl {
        max-width: 80rem
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .lg\:flex-col {
        flex-direction: column
      }

      .lg\:items-end {
        align-items: flex-end
      }

      .lg\:justify-center {
        justify-content: center
      }

      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-10 {
        padding: 2.5rem
      }

      .lg\:pb-10 {
        padding-bottom: 2.5rem
      }

      .lg\:pt-0 {
        padding-top: 0px
      }

      .lg\:text-\[\#FF2D20\] {
        --tw-text-opacity: 1;
        color: rgb(255 45 32 / var(--tw-text-opacity))
      }
    }

    @media (prefers-color-scheme: dark) {
      .dark\:block {
        display: block
      }

      .dark\:hidden {
        display: none
      }

      .dark\:bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity))
      }

      .dark\:bg-zinc-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(24 24 27 / var(--tw-bg-opacity))
      }

      .dark\:via-zinc-900 {
        --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
      }

      .dark\:to-zinc-900 {
        --tw-gradient-to: #18181b var(--tw-gradient-to-position)
      }

      .dark\:text-white\/50 {
        color: rgb(255 255 255 / 0.5)
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:text-white\/70 {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:ring-zinc-800 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:hover\:text-white\/70:hover {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:hover\:text-white\/80:hover {
        color: rgb(255 255 255 / 0.8)
      }

      .dark\:hover\:ring-zinc-700:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-white:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- <link rel="stylesheet" type="text/css" href="css/vendor.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('tractors.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">
  <style>
    #footer {
      background-image: url('images/Banners/banner3.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .home_banner_swiper .slide_show {
      position: relative;
      height: 100%;
      width: 100%;
    }

    .home_banner_swiper .slide_list {
      padding: 0;
      margin: 0;
      background: #000;
      overflow: hidden;
    }

    .home_banner_swiper .slide_list .slide {
      position: absolute;
      clear: both;
      width: 100%;
      height: 100%;
      margin: 0 auto;
      overflow: hidden;
    }

    .home_banner_swiper .slide {
      -webkit-transition-property: left;
      -moz-transition-timing-function: left;
      -o-transition-timing-function: left;
      transition-property: left;
      -webkit-transition-timing-function: linear;
      -moz-transition-timing-function: linear;
      -o-transition-timing-function: linear;
      transition-timing-function: linear;
      -webkit-transition-duration: 0ms;
      -moz-transition-duration: 0ms;
      -o-transition-duration: 0ms;
      transition-duration: 0ms;
      left: 100%;
      top: 0;
      bottom: 0;
      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      -o-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-duration: 300ms;
      -moz-animation-duration: 300ms;
      -o-animation-duration: 300ms;
      animation-duration: 300ms;
      -webkit-animation-timing-function: linear;
      -moz-animation-timing-function: linear;
      -o-animation-timing-function: linear;
      animation-timing-function: linear;
    }

    .home_banner_swiper .slide:first-child {
      left: 0;
    }

    .home_banner_swiper .animate-forward .prev-slide {
      -webkit-animation-name: inactiveFromRight;
      -moz-animation-name: inactiveFromRight;
      -o-animation-name: inactiveFromRight;
      animation-name: inactiveFromRight;
    }

    .home_banner_swiper .animate-forward .active-slide {
      -webkit-animation-name: activeFromRight;
      -moz-animation-name: activeFromRight;
      -o-animation-name: activeFromRight;
      animation-name: activeFromRight;
    }

    @-webkit-keyframes inactiveFromRight {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    @-moz-keyframes inactiveFromRight {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    @-o-keyframes inactiveFromRight {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    @keyframes inactiveFromRight {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    @-webkit-keyframes activeFromRight {
      0% {
        left: 100%;
      }

      100% {
        left: 0;
      }
    }

    @-moz-keyframes activeFromRight {
      0% {
        left: 100%;
      }

      100% {
        left: 0;
      }
    }

    @-o-keyframes activeFromRight {
      0% {
        left: 100%;
      }

      100% {
        left: 0;
      }
    }

    @keyframes activeFromRight {
      0% {
        left: 100%;
      }

      100% {
        left: 0;
      }
    }

    .home_banner_swiper .slide_pagination_bullets {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -moz-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: 100%;
      position: absolute;
      bottom: 10px;
      z-index: 2;
    }

    .home_banner_swiper .slide_pagination_bullet {
      background: rgba(255, 255, 255, .6);
      width: 6px;
      height: 6px;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      border-radius: 100%;
      margin: 0 3px;
    }

    .home_banner_swiper .slide_pagination_bullet.active {
      background: rgba(255, 255, 255, 1);
    }

    .home_banner_swiper .slide_control .swiper-button-prev {
      left: 10px;
    }

    .home_banner_swiper .slide_control .swiper-button-next {
      right: 10px;
    }

    .home_banner_swiper .slide_control .swiper-button {
      width: 26px;
      height: 26px;
      background-color: #0000;
      border: none;
      cursor: pointer;
      top: -webkit-calc((100% - 13px) - 50%);
      top: -moz-calc((100% - 13px) - 50%);
      top: calc((100% - 13px) - 50%);
      position: absolute;
      z-index: 2;
    }

    .home_banner_swiper .swiper-button-next {
      background-image: url(https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/swiper_next.svg);
      width: 26px;
      height: 26px;
    }

    .home_banner_swiper .swiper-button-prev {
      background-image: url(https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/swiper_prev.svg);
      width: 26px;
      height: 26px;
    }

    .home_banner_swiper .swiper-button-prev,
    .home_banner_swiper .swiper-button-next {
      display: none;
    }

    .home_banner_li_effect {
      padding: 15px;
      cursor: pointer;
      overflow: hidden;
      -webkit-border-radius: 12px;
      -moz-border-radius: 12px;
      border-radius: 12px;
    }

    .home_banner_text {
      font-size: 20px;
      color: #fff;
      font-weight: 700;
      margin-bottom: 4px;
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
      -webkit-transition: .2s linear;
      -moz-transition: .2s linear;
      -o-transition: .2s linear;
      transition: .2s linear;
      -webkit-transform-origin: bottom left;
      -moz-transform-origin: bottom left;
      -ms-transform-origin: bottom left;
      -o-transform-origin: bottom left;
      transform-origin: bottom left;
    }

    .home_banner_subtext {
      font-size: 14px;
      position: relative;
      z-index: 1;
      width: 50%;
      line-height: 1.4;
    }

    .home_banner_explore {
      position: absolute;
      bottom: 25px;
      left: 0;
      min-width: 26px;
      height: 26px;
      -webkit-border-bottom-right-radius: 5px;
      -moz-border-radius-bottomright: 5px;
      border-bottom-right-radius: 5px;
      -webkit-border-top-right-radius: 5px;
      -moz-border-radius-topright: 5px;
      border-top-right-radius: 5px;
      -webkit-box-shadow: 0 3px 6px 0 rgba(0, 0, 0, .16);
      -moz-box-shadow: 0 3px 6px 0 rgba(0, 0, 0, .16);
      box-shadow: 0 3px 6px 0 rgba(0, 0, 0, .16);
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -moz-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      z-index: 1;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .home_banner_exploretxt {
      width: 0;
      overflow: hidden;
      font-size: 12px;
      color: #fff;
      -webkit-transition: all .3s linear;
      -moz-transition: all .3s linear;
      -o-transition: all .3s linear;
      transition: all .3s linear;
    }

    .home_banner_explorearw {
      display: inline-block;
      font-weight: 500;
      width: 8px;
      height: 14px;
      background: url(https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg) no-repeat;
      margin: 0 2px 0 2px;
      -webkit-background-size: 100%;
      -moz-background-size: 100%;
      -o-background-size: 100%;
      background-size: 100%;
      background-position: center;
    }

    .home_banner_img_btm {
      position: absolute;
      bottom: 0;
      right: 0;
      -webkit-transform-origin: bottom right;
      -moz-transform-origin: bottom right;
      -ms-transform-origin: bottom right;
      -o-transform-origin: bottom right;
      transform-origin: bottom right;
      -webkit-transition: all .5s;
      -moz-transition: all .5s;
      -o-transition: all .5s;
      transition: all .5s;
    }

    .home_banner_li_effect:hover .home_banner_explore {
      background-color: #fff;
    }

    .home_banner_li_effect:hover .home_banner_exploretxt {
      width: 50px;
      padding: 0 0 0 5px;
    }

    .home_banner_li_effect:hover .home_banner_explorearw {
      margin-right: 6px;
    }

    .home_banner_explorearw {
      display: inline-block;
      font-weight: 500;
      width: 8px;
      height: 14px;
      background: url(https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg) no-repeat;
      margin: 0 2px 0 2px;
      -webkit-background-size: 100%;
      -moz-background-size: 100%;
      -o-background-size: 100%;
      background-size: 100%;
      background-position: center;
    }
  </style>

</head>

<body>

  @if (Route::has('login'))
  <nav class="-mx-3 flex flex-1 justify-end">
    @auth
    <a href="{{ url('/dashboard') }}"
    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
    Dashboard
    </a>
  @else
  <a href="{{ route('login') }}"
  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
  Log in
  </a>

  @if (Route::has('register'))
  <a href="{{ route('register') }}"
  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
  Register
  </a>
@endif
@endauth
  </nav>
@endif
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>

    </defs>
  </svg>

  <!-- <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div> -->

  <div id="login-signup" style="display: none;">
    <div class="fixed top-0 left-0 w-full
    h-full z-50 sm:py-0 py-1 flex justify-center items-center backdrop-blur-sm bg-black/25" style="opacity: 1;">
      <div class="sm:w-96 w-full bg-gray-50 rounded-xl text-black shadow-2xl drop-shadow-lg" style="opacity: 1;">
        <header class="modal-header-bg">
          <h3 class="sm:text-black text-gray-50">Login</h3><button class="modal-close"><svg stroke="currentColor"
              fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="w-4 h-4" height="1em" width="1em"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
              </path>
            </svg></button>
        </header>
        <div class="bg-gray-50 rounded-b-xl px-6 pt-3 pb-8 text-black">
          <p class="py-2 font-light mb-2 text-sm">Enter your mobile number to continue</p>
          <form action="profile.html" method="post">
            <div class="my-2">
              <div class="relative mb-2">
                <input  name="phone_number"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Email Number"
                   value="" style="padding-left: 46.8px;">

                <!-- <div class="absolute left-0 top-0 bottom-0 bg-gray-50 text-black smooth-animate rounded-lg rounded-r-none p-2 flex items-center border border-r-0 justify-center"
                                tabindex="-1">
                                <div class="flex space-x-1 items-center text-sm">
                                    <svg stroke="currentColor"
                                        fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" class=" z-10 text-pear top-0 left-1 bottom-0 h-full"
                                        height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                    </svg>
                                </div>
                            </div> -->
              </div>
              <div class="relative">

                <input name="phone_number"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Password"
                  style="padding-left: 46.8px;">
                <!-- <div class="absolute left-0 top-0 bottom-0 bg-gray-50 text-black smooth-animate rounded-lg rounded-r-none p-2 flex items-center border border-r-0 justify-center"
                              tabindex="-1">
                              <div class="flex space-x-1 items-center text-sm">
                                  <svg stroke="currentColor"
                                      fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                      stroke-linejoin="round" class=" z-10 text-pear top-0 left-1 bottom-0 h-full"
                                      height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                      <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                      <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                  </svg>
                              </div>
                          </div> -->
              </div>
            </div>
            <div class="min-h-[25px] text-xs text-center"></div>
            <button type="submit" id="verification-button"
              class="action-btn w-full py-2 rounded-xl mt-2 flex items-center justify-center space-x-2">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M160 32c-16 0-32 16-32 32v384c0 16 16 32 32 32h192c16 0 32-16 32-32V64c0-16-16-32-32-32H160zm21.68 23h96v18h-96V55zM304 55h32v18h-32V55zM154 96h204v320H154V96zm70 342h63.984c16 0 16 16 16 16v6H208v-6s0-16 16-16z">
                </path>
              </svg>
              <span>Login</span>
            </button>
          </form>
          <span class="text-center block my-4">OR</span>
          <div class="relative flex items-center mb-5">
            <div class="flex-grow border-t border-pear"></div>
            <small class="flex-shrink mx-4 font-light text-gray-600">Continue with social login</small>
            <div class="flex-grow border-t border-pear"></div>
          </div>
          <button
            class="flex py-2 px-4 items-center justify-center space-x-3 border text-sm rounded-xl sm:border-black/50 border-black/10 w-full hover:bg-black hover:text-gray-50 smooth-animate mb-4"><svg
              stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px"
              viewBox="0 0 48 48" enable-background="new 0 0 48 48" height="26" width="26"
              xmlns="http://www.w3.org/2000/svg">
              <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
 c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
 c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
              <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
 C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
              <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
 c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
              <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
 c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
              </path>
            </svg>
            <div class="text-left"><span>Continue with Google</span></div>
          </button>
          <button
            class="flex py-2 px-4 items-center justify-center space-x-3 border text-sm rounded-xl sm:border-black/50 border-black/10 w-full hover:bg-black hover:text-gray-50 smooth-animate"><svg
              stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-[#4267B2]"
              height="26" width="26" xmlns="http://www.w3.org/2000/svg">
              <g>
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z">
                </path>
              </g>
            </svg><span>Continue with Facebook</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div id="user-register" style="display: none;">
    <div class="fixed top-0 left-0 w-full
    h-full z-50 sm:py-0 py-1 flex justify-center items-center backdrop-blur-sm bg-black/25" style="opacity: 1;">
      <div class="sm:w-96 w-full bg-gray-50 rounded-xl text-black shadow-2xl drop-shadow-lg" style="opacity: 1;">
        <header class="modal-header-bg">
          <h3 class="sm:text-black text-gray-50">Register</h3><button class="register-modal-close modal-close"><svg stroke="currentColor"
              fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="w-4 h-4" height="1em" width="1em"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
              </path>
            </svg></button>
        </header>
        <div class="bg-gray-50 rounded-b-xl px-6 pt-3 pb-8 text-black">
          <p class="py-2 font-light mb-2 text-sm">Enter your details to continue</p>
          <form action="profile.html" method="post">
            <div class="my-2">
              <div class="relative mb-2">
              <input  name="name"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Name"
                   value="" style="padding-left: 46.8px;">
                   

                
              </div>
              <div class="relative mb-2">

              <input type="email" name="email"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Email Address"
                   value="" style="padding-left: 46.8px;">
                
              </div>
              <div class="relative mb-2">

              
                   <select class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Please select Role" 
                   title="Please select Role" style="padding-left: 46.8px;">
                   <option value="">Please select Role</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                    <option value="agent">Agent</option>
                  </select>
                
              </div>
              <div class="relative mb-2">

              <input  name="password"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Password"
                   value="" style="padding-left: 46.8px;">
                
              </div>
              <div class="relative mb-2">

              <input  name="confirm password"
                  class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Confirm Password"
                   value="" style="padding-left: 46.8px;">
                
              </div>

            </div>
            <div class="min-h-[25px] text-xs text-center"></div>
            <button type="submit" id="verification-button"
              class="action-btn w-full py-2 rounded-xl mt-2 flex items-center justify-center space-x-2">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M160 32c-16 0-32 16-32 32v384c0 16 16 32 32 32h192c16 0 32-16 32-32V64c0-16-16-32-32-32H160zm21.68 23h96v18h-96V55zM304 55h32v18h-32V55zM154 96h204v320H154V96zm70 342h63.984c16 0 16 16 16 16v6H208v-6s0-16 16-16z">
                </path>
              </svg>
              <span>Register</span>
            </button>
          </form>
          
          
          
          
        </div>
      </div>
    </div>
  </div>


  <header class="jdheader jdheader_home header_fixed header_sticky">
    <div class="header_home header">
      <div class="header_left">
        <div class="header_left_inner"><a role="link" class="animate__animated header_jdlogo " href="/"><img
              src="images/raitanlogo.png" alt="Raitan Logo" aria-label="Raitan" title="Raitan" height="90" width="102"
              class=""></a></div>
      </div>
      <div class="header_center">
        <div class="header_input_group home_input_group ">
          <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-city-auto-suggest"
            aria-expanded="false" class="city-suggestions-container">
            <div class="inputgroup_location mr-15 ">
              <div class="input_location_box "><input type="text" autocomplete="off" aria-autocomplete="list"
                  aria-controls="react-autowhatever-city-auto-suggest" class="input_location font14 fw400 color111"
                  aria-label="City Auto-suggest" placeholder="Select Location"></div>
            </div>
            <div id="react-autowhatever-city-auto-suggest" role="listbox"
              class="react-autosuggest__suggestions-container" aria-label="City Auto-suggest">
              <div class="input_search_result input_search_recent"></div>
            </div>
          </div>
          <div class="inputgroup_search "><label class="input_search_box has-voice-search">
              <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-main-auto-suggest"
                aria-expanded="false" class="input_seach_box_results "><input type="text" autocomplete="off"
                  aria-autocomplete="list" aria-controls="react-autowhatever-main-auto-suggest"
                  class="input_search font14 fw400 color111" aria-label="Main Auto-suggest"
                  placeholder="Search for Machines and Implementors" id="main-auto" value="" fdprocessedid="1qhazu">
                <div id="react-autowhatever-main-auto-suggest" role="listbox"
                  class="react-autosuggest__suggestions-container" aria-label="Main Auto-suggest">
                  <div class="input_search_result input_search_recent"></div>
                </div>
              </div>
              <div class="voice_btnbox">
                <div class="mic_icon jdicon" role="button" aria-label="Search by voice" title="Search by voice"
                  tabindex="0" fdprocessedid="zum9gl"></div>
              </div>
              <div class="search_btnbox">
                <div class="search_button" role="button" aria-label="search" tabindex="0" fdprocessedid="bjper">
                  <div id="srchbtn" class="jdicon search_white_icon"></div>
                </div><span class="btnbox_text font13 fw400 colorFFF">Search the businesses</span>
              </div>
            </label></div>
        </div>
      </div>
      <div class="header_right">
        <div class="header_navigation">
          <ul role="menu" class="headnav_list">
            <!-- <li role="menuitem" tabindex="0" id="header_language" class="headnav_item headnav_language">
              <span
                class="headnav_item_anchor whitefill_animate ">
                <div class="nav_language_icon jdicon"></div>
                <div class="headnav_item_text pl-5 font14 fw400 color007">English<span role="none"
                    class="nav_drop_icon jdicon ml-4"></span></div>
              </span>
              <div class="headnav_language_dropdown ">
                <div class="language_drop_text font14 fw400 color111">हिंदी</div>
                <div class="language_drop_text font14 fw400 color111">मराठी</div>
                <div class="language_drop_text font14 fw400 color111">বেঙ্গলি</div>
                <div class="language_drop_text font14 fw400 color111">ગુજરાતી</div>
                <div class="language_drop_text font14 fw400 color111">ಕನ್ನಡ</div>
                <div class="language_drop_text font14 fw400 color111">தமிழ்</div>
              </div>
            </li> -->
            <li role="menuitem" tabindex="0" class="headnav_item headnav_hiring"><a href=""
                class="headnav_item_anchor whitefill_animate ">
                <div class="headnav_item_text pl-5 font14 fw400 color111">Farm Machinery
                </div>
              </a></li>
            <li role="menuitem" tabindex="0" class="headnav_item headnav_investor"><a href=""
                class="headnav_item_anchor whitefill_animate ">
                <div class="headnav_item_text pl-5 font14 fw400 color111">Implementors
                </div>
              </a></li>
            <li role="menuitem" tabindex="0" id="header_advertise" class="headnav_item headnav_advertise"><a href=""
                class="headnav_item_anchor whitefill_animate">
                <div class="nav_advertise_icon jdicon"></div>
                <div class="headnav_item_text pl-5 font14 fw400 color111">Services
                </div>
              </a></li>
            <li role="menuitem" tabindex="0" id="header_freelisting" class="headnav_item headnav_addbusiness"><a href=""
                class="headnav_item_anchor whitefill_animate">
                <div class="nav_listing_icon jdicon"></div>
                <div class="headnav_item_text pl-5 font14 fw400 color111">Free Listing
                </div>
                <div class="headnav_tag font8 fw700 colorFFF text_uppercase mr-4">
                  Business</div>
              </a></li>
            <li role="menuitem" aria-label="notification" class="headnav_item headnav_notify">
              <div role="button" tabindex="0" aria-label="Notifications" class="headnav_item_anchor whitefill_animate"
                fdprocessedid="xsjip">
                <div class="nav_notify_icon jdicon"></div>
              </div>
            </li>
            <li role="menuitem" tabindex="0"  class="headnav_item headnav_user">
              <div role="button" tabindex="0" aria-label="Login/Sign Up" class="headnav_item_anchor bluefill_animate"
                fdprocessedid="yopgan">
                <div class="">
                  @if (Route::has('login'))

          @auth
      <a href="{{ url('/dashboard') }}">Dashboard
      </a>
    @else
    <a class="headnav_item_text font14 fw500 colorFFF" id="header_login">
      Log in /
    </a>

    @if (Route::has('register'))
    <a class="headnav_item_text font14 fw500 colorFFF" id="header_register">
    Register
    </a>
  @endif
  @endauth

        @endif
                </div>
              </div>
              <ul class="headnav_user_dropdown dn">
                <li class="headnav_item"></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
>>>>>>> 628e174545cb89fa7724da2670717566aeb5e3ef
  <section class=" home_appextra ">
    <h2 class=" home_input_title font26 fw700 color111 mb-15"><span class="">Search Nearby <!-- --> </span><span
        class=" content__list__count pl-8" style="transform: translate3d(0px, 0px, 0px);"><span class=""><span
            class=" color007">Businesses</span></span><span class="">
          <span class=" color007">Products &amp; Services</span></span></span>
      <div class=" home_input_title font26 fw700 color111 mb-15">
        <ul class=" content__list pl-8" style="transform: translate3d(0px, 0px, 0px);">
          <li class=" list__item color007"> </li>
          <li class=" list__item color007"> </li>
        </ul>
      </div>
    </h2>
    <!-- <a href="/JD-ON-MOBILE" class=" home_appdownload mt-50">
      <div class=" getapp_button fw500 font13 color111">Download App</div>
      <div class=" getapp_mobile"></div>
      <div class=" inner"></div>
      <div class=" getapp_icon jdicon"></div>
    </a> -->
  </section>

  <section style="min-height:1400px" class=" jdwrapper jdhome">
    <div style="min-height:1400px" class=" jdcontainer">
      <div id="mainContent" style="scroll-margin:81px" class=" jdwrapper">
        <div class="home_rowbox home_row_1 home_bannerbox mb-50" role="banner" aria-label="slider"
          data-tracker-id="banners">
          <div class="home_banner_li pointer home_banner_swiper font11" tabindex="0" role="button"
            fdprocessedid="w05rkp">
            <div class="slide_show" id="slideshow">
              <ul class="slide_list animate-forward" id="slides">
                <li tabindex="0" class="slide "><span class="slide_anchor" title="" draggable="false"><img
                      draggable="false" title="IPL" src="images/Banners/banner1.jpg"
                      data-src="images/Banners/banner1.jpg" class="home_banner_li_image" alt="IPL"></span></li>
                <li tabindex="0" class="slide "><span class="slide_anchor" title="" draggable="false"><img
                      draggable="false" title="Ramdan" src="images/Banners/banner5.jpg"
                      data-src="images/Banners/banner5.jpg" class="home_banner_li_image" alt="Ramdan"></span></li>
                <li tabindex="0" class="slide "><span class="slide_anchor" title="" draggable="false"><img
                      draggable="false" title="" src="images/Banners/banner5.jpg" data-src="images/Banners/banner5.jpg"
                      class="home_banner_li_image" alt=""></span></li>
                <!-- <li tabindex="0" class="slide "><span class="slide_anchor" title="Earth Movers"
                    draggable="false"><img draggable="false" title="Earth Movers"
                      src="images/Banners/banner3.jpg"
                      data-src="images/Banners/banner3.jpg"
                      class="home_banner_li_image" alt="Earth Movers"></span></li> -->
                <!-- <li tabindex="0" class="slide prev-slide"><span class="slide_anchor"
                    title="Interior Designer in Hyderabad" draggable="false"><img draggable="false"
                      title="Interior Designer in Hyderabad"
                      src="images/Banners/banner2.jpg"
                      data-src="images/Banners/banner2.jpg"
                      class="home_banner_li_image" alt="Interior Designer in Hyderabad"></span></li> -->
                <!-- <li tabindex="0" class="slide active-slide"><span class="slide_anchor" title=""
                    draggable="false"><img draggable="false" title=""
                      src=""
                      data-src=""
                      class="home_banner_li_image" alt=""></span></li>
                <li tabindex="0" class="slide "><span class="slide_anchor" title=""
                    draggable="false"><img draggable="false" title=""
                      src=""
                      data-src=""
                      class="home_banner_li_image" alt=""></span></li>
                <li tabindex="0" class="slide "><span class="slide_anchor" title="Flights" draggable="false"><img
                      draggable="false" title="Flights"
                      src=""
                      data-src=""
                      class="home_banner_li_image" alt="Flights"></span></li> -->
              </ul>
              <div class="slide_pagination_bullets" aria-label="slider"><span class="slide_pagination_bullet "
                  role="banner" aria-label="Banner_ipl"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Banner_Ramdan"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Hotels"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Packers Movers"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Interior Designer"></span><span class="slide_pagination_bullet active" role="banner"
                  aria-label="CCTV"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Bills"></span><span class="slide_pagination_bullet " role="banner"
                  aria-label="Flight"></span></div>
              <div class="slide_control control"><button class="swiper-button swiper-button-prev" id="previous"
                  aria-label="swiperprevious"></button><button class="swiper-button swiper-button-next" id="next"
                  aria-label="swipernext"></button>
              </div>
            </div>
          </div>
          <a title="JDmart - B2B marketplace" href="" class="home_banner_li home_banner_li_effect" datatype="#FFF"
            role="link" aria-label="B2B" style="background-color:#0F7DD8">
            <div class="home_banner_text" style="color:#FFF">B2B</div>
            <div class="home_banner_subtext" style="color:#b5deff">Quick Quotes</div>
            <div class="home_banner_explore" style="background-color: rgb(15, 125, 216);">
              <div class="home_banner_exploretxt" style="color: white;">Explore</div>
              <div class="home_banner_explorearw"
                style="color: rgb(255, 255, 255); background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg&quot;);">
              </div>
            </div><span
              style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
              <noscript>
              </noscript></span>
          </a><a title="REPAIRS &amp; SERVICES in Hyderabad" href="" class="home_banner_li home_banner_li_effect"
            datatype="#FFF" role="link" aria-label="REPAIRS &amp; SERVICES" style="background-color:#2654A1">
            <div class="home_banner_text" style="color:#FFF">REPAIRS &amp; SERVICES</div>
            <div class="home_banner_subtext" style="color:#b1d5ff">Get Nearest Vendor</div>
            <div class="home_banner_explore" style="background-color: rgb(38, 84, 161);">
              <div class="home_banner_exploretxt" style="color: white;">Explore</div>
              <div class="home_banner_explorearw"
                style="color: rgb(255, 255, 255); background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg&quot;);">
              </div>
            </div><span
              style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
              <noscript>
              </noscript></span>
          </a><a title="REAL ESTATE in Hyderabad" href="" class="home_banner_li home_banner_li_effect" datatype="#FFF"
            role="link" aria-label="REAL ESTATE" style="background-color:#6769D0">
            <div class="home_banner_text" style="color:#FFF">Rental Services</div>
            <div class="home_banner_subtext" style="color:#dedfff">Finest Agents</div>
            <div class="home_banner_explore" style="background-color: rgb(103, 105, 208);">
              <div class="home_banner_exploretxt" style="color: white;">Explore</div>
              <div class="home_banner_explorearw"
                style="color: rgb(255, 255, 255); background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg&quot;);">
              </div>
            </div><span
              style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
              <noscript>
                <img alt="REAL ESTATE in Hyderabad" title="REAL ESTATE in Hyderabad" sizes="100vw" srcSet="" src=""
                  decoding="async" data-nimg="fill"
                  style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                  class="home_banner_img_btm" loading="lazy" /></noscript></span>
          </a><a title="DOCTORS in Hyderabad" href="" class="home_banner_li home_banner_li_effect" datatype="#FFF"
            role="link" aria-label="DOCTORS" style="background-color:#00ac7d">
            <div class="home_banner_text" style="color:#FFF">Workers</div>
            <div class="home_banner_subtext" style="color:#acffcf">Book Now</div>
            <div class="home_banner_explore" style="background-color: rgb(0, 172, 125);">
              <div class="home_banner_exploretxt" style="color: white;">Explore</div>
              <div class="home_banner_explorearw"
                style="color: rgb(255, 255, 255); background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/web_whiteright_arrow.svg&quot;);">
              </div>
            </div><span
              style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
              <noscript><img alt="DOCTORS in Hyderabad" title="DOCTORS in Hyderabad" sizes="100vw" srcSet="" src=""
                  decoding="async" data-nimg="fill"
                  style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                  class="home_banner_img_btm" loading="lazy" /></noscript></span>
          </a>
        </div>
        <div class="home_rowbox home_row_2 home_hotkeybox mb-50" data-tracker-id="hotkey">
          <a class="home_hotkeybox_li imageZoom text_center" title="30HP" href="{{ route('tractors.home') }}">
            <div class="home_hotkeyimg mb-10" style="background-image:url();">
              <span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%">
                <span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%">
                  <img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e">
                </span>
                <img alt="30HP Tractor" title="30HP Tractor" src="images/tractors/tractor1.jpg?w=96&amp;q=75"
                  decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto; "
                  srcset="images/tractors/tractor1.jpg?w=48&amp;q=75 1x, images/tractors/tractor1.jpg?w=96&amp;q=75 2x">
                <noscript>
                  <img alt="30HP Tractor" title="30HP Tractor"
                    srcSet="images/tractors/tractor1.jpg?w=48&amp;q=75 1x, images/tractors/tractor1.jpg?w=96&amp;q=75 2x"
                    src="images/tractors/tractor1.jpg?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:200px;height:auto;"
                    loading="lazy">
                </noscript>
              </span>
            </div>
            <div class="font14 color111 fw400">30HP</div>
          </a>
          <a class="home_hotkeybox_li imageZoom text_center " title="20HP" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Hotels in Hyderabad" title="Hotels in Hyderabad" src="images/tractors/tractor3.png?w=96&amp;q=75"
                  decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto; "
                  srcset="images/tractors/tractor3.png?w=48&amp;q=75 1x, images/tractors/tractor3.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Hotels in Hyderabad" title="Hotels in Hyderabad"
                    srcSet="images/tractors/tractor3.png?w=48&amp;q=75 1x, images/tractors/tractor3.png?w=96&amp;q=75 2x"
                    src="images/tractors/tractor3.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">30-50HP</div>
          </a><a href="#" class="home_hotkeybox_li imageZoom text_center " title="30HP">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Beauty Spa in Hyderabad" title="Beauty Spa in Hyderabad"
                  src="images/tractors/tractor65.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto;"
                  srcset="images/tractors/tractor65.png?w=48&amp;q=75 1x, images/tractors/tractor65.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Beauty Spa in Hyderabad" title="Beauty Spa in Hyderabad"
                    srcSet="images/tractors/tractor65.png?w=48&amp;q=75 1x, images/tractors/tractor65.png?w=96&amp;q=75 2x"
                    src="images/tractors/tractor65.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width: 200px; height: auto;"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">50-75HP</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Home Decor in Hyderabad" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Home Decor in Hyderabad" title="Home Decor in Hyderabad"
                  src="images/tractors/tractor75.jpg?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto;"
                  srcset="images/tractors/tractor75.jpg?w=48&amp;q=75 1x, images/tractors/tractor75.jpg?w=96&amp;q=75 2x"><noscript><img
                    alt="Home Decor in Hyderabad" title="Home Decor in Hyderabad"
                    srcSet="images/tractors/tractor75.jpg?w=48&amp;q=75 1x, images/tractors/tractor75.jpg?w=96&amp;q=75 2x"
                    src="images/tractors/tractor75.jpg?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width: 200px; height: auto;"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Above 75HP</div>
          </a><a href="#" class="home_hotkeybox_li imageZoom text_center Cricket" title="Earth Movers">
            <div class="home_hotkeyimg mb-10">
              <span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Wedding" title="Wedding" src="images/tractors/jcb1.pngw=96&amp;q=75" decoding="async"
                  data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto;"
                  srcset="images/tractors/jcb1.png?w=48&amp;q=75 1x, images/tractors/jcb1.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Wedding" title="Wedding"
                    srcSet="images/tractors/jcb1.png?w=48&amp;q=75 1x, images/tractors/jcb1.png?w=96&amp;q=75 2x"
                    src="images/tractors/jcb1.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width: 200px; height: auto;"
                    loading="lazy" /></noscript></span>
            </div>
            <div class="font14 color111 fw400">Earth Movers</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Agriculture Labour" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Agriculture Labour" title="Agriculture Labour" src="images/farmer1.png?w=96&amp;q=75"
                  decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 200px; height: auto;"
                  srcset="images/farmer1.png?w=48&amp;q=75 1x, images/farmer1.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Agriculture Labour" title="Agriculture Labour"
                    srcSet="images/farmer1.png?w=48&amp;q=75 1x, images/farmer1.png?w=96&amp;q=75 2x"
                    src="images/farmer1.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Agriculture Labour</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Rent &amp; Hire in Hyderabad" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Rent &amp; Hire in Hyderabad" title="Rent &amp; Hire in Hyderabad"
                  src="images/harvestor1.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                  srcset="images/harvestor1.png?w=48&amp;q=75 1x, images/harvestor1.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Rent &amp; Hire in Hyderabad" title="Rent &amp; Hire in Hyderabad"
                    srcSet="images/harvestor1.png?w=48&amp;q=75 1x, images/harvestor1.png?w=96&amp;q=75 2x"
                    src="images/harvestor1.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Harvestor</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Hospitals in Hyderabad" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Hospitals in Hyderabad" title="Hospitals in Hyderabad"
                  src="images/dronesprayer.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                  srcset="images/dronesprayer.png?w=48&amp;q=75 1x, images/dronesprayer.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Hospitals in Hyderabad" title="Hospitals in Hyderabad"
                    srcSet="images/dronesprayer.png?w=48&amp;q=75 1x, images/dronesprayer.png?w=96&amp;q=75 2x"
                    src="images/dronesprayer.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Drone(Sprayer)</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Contractors in Hyderabad" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Contractors in Hyderabad" title="Contractors in Hyderabad"
                  src="images/machine/paddytransplanter.jpeg?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                  srcset="images/machine/paddytransplanter.jpeg?w=48&amp;q=75 1x, images/machine/paddytransplanter.jpeg?w=96&amp;q=75 2x"><noscript><img
                    alt="Contractors in Hyderabad" title="Contractors in Hyderabad"
                    srcSet="images/machine/paddytransplanter.jpeg?w=48&amp;q=75 1x, images/machine/paddytransplanter.jpeg?w=96&amp;q=75 2x"
                    src="images/machine/paddytransplanter.jpeg?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Paddy Transplantor</div>
          </a><a class="home_hotkeybox_li imageZoom text_center " title="Pet Shops in Hyderabad" href="#">
            <div class="home_hotkeyimg mb-10" style="background-image:url();"><span
                style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                  style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                    style="display:block;max-width:100%;width:200px;height:auto;background:none;opacity:1;border:0;margin:0;padding:0"
                    alt="" aria-hidden="true"
                    src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2745%27%20height=%2745%27/%3e"></span><img
                  alt="Pet Shops in Hyderabad" title="Pet Shops in Hyderabad" src="images/mechanic.png?w=96&amp;q=75"
                  decoding="async" data-nimg="intrinsic"
                  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                  srcset="images/mechanic.png?w=48&amp;q=75 1x, images/mechanic.png?w=96&amp;q=75 2x"><noscript><img
                    alt="Pet Shops in Hyderabad" title="Pet Shops in Hyderabad"
                    srcSet="images/mechanic.png?w=48&amp;q=75 1x, images/mechanic.png?w=96&amp;q=75 2x"
                    src="images/mechanic.png?w=96&amp;q=75" decoding="async" data-nimg="intrinsic"
                    style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                    loading="lazy" /></noscript></span></div>
            <div class="font14 color111 fw400">Mechanic</div>
          </a>
        </div>
        <div class="home_rowbox home_row_3 home_card_hotkey mb-50" data-tracker-id="cat">
          <div class="cardhotkey__wrap p-30 pt-15 pb-15 pointer"><a href="#" class="cat_Wedding Requisites"
              title="Tractor Implementors">
              <h2 class="cardhotkey__title fw500 font18 color111">Tractor Implementors</h2>
            </a>
            <div class="cardhotkey__content"><a class="cardhotkey__imgBlock text_center mt-10" title="Disc Harrow"
                href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Disc Harrow" title="Disc Harrow" src="images/implementors/disc-harrow.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/implementors/disc-harrow.jpg?w=256&amp;q=75 1x, images/implementors/disc-harrow.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Disc Harrow" title="Disc Harrow"
                        srcSet="images/implementors/disc-harrow.jpg?w=256&amp;q=75 1x, images/implementors/disc-harrow.jpg?w=640&amp;q=75 2x"
                        src="images/implementors/disc-harrow.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Disc Harrow<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Cultivator" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Cultivator" title="Cultivator" src="images/implementors/cultivator.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/implementors/cultivator.jpg?w=256&amp;q=75 1x, images/implementors/cultivator.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Cultivator" title="Cultivator"
                        srcSet="images/implementors/cultivator.jpg?w=256&amp;q=75 1x, images/implementors/cultivator.jpg?w=640&amp;q=75 2x"
                        src="images/implementors/cultivator.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Cultivator <!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Caterers in Hyderabad" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Caterers in Hyderabad" title="Caterers in Hyderabad"
                      src="images/implementors/boom-sprayer.png?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/implementors/boom-sprayer.png?w=256&amp;q=75 1x, images/implementors/boom-sprayer.png?w=640&amp;q=75 2x"><noscript><img
                        alt="Caterers in Hyderabad" title="Caterers in Hyderabad"
                        srcSet="images/implementors/boom-sprayer.png?w=256&amp;q=75 1x, images/implementors/boom-sprayer.png?w=640&amp;q=75 2x"
                        src="images/implementors/boom-sprayer.png?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Boom-Sprayer<!-- --> </figcaption>
              </a></div>
          </div>
          <div class="cardhotkey__wrap p-30 pt-15 pb-15 pointer"><a href="" class="cat_Beauty &amp; Spa"
              title="Man Power Services">
              <h2 class="cardhotkey__title fw500 font18 color111">Man Power Services</h2>
            </a>
            <div class="cardhotkey__content"><a class="cardhotkey__imgBlock text_center mt-10" title="Farming Women"
                href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Farming Women" title="Farming Women" src="images/man_power/farming_women.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/farming_women.jpg?w=256&amp;q=75 1x, images/man_power/farming_women.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Farming Women" title="Farming Women"
                        srcSet="images/man_power/farming_women.jpg?w=256&amp;q=75 1x, images/man_power/farming_women.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/farming_women.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Farming Labour<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Chilli Picker" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Chilli Picker" title="Chilli Picker" src="images/man_power/chilli_picker.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/chilli_picker.jpg?w=256&amp;q=75 1x, images/man_power/chilli_picker.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Chilli Picker" title="Chilli Picker"
                        srcSet="images/man_power/chilli_picker.jpg?w=256&amp;q=75 1x, images/man_power/chilli_picker.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/chilli_picker.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Cotton/ chilli picker<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Sack pickers" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Sack pickers" title="Sack pickers" src="images/man_power/sack_picker.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/sack_picker.jpg?w=256&amp;q=75 1x, images/man_power/sack_picker.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Sack pickers" title="Sack pickers"
                        srcSet="images/man_power/sack_picker.jpg?w=256&amp;q=75 1x, images/man_power/sack_picker.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/sack_picker.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Sack Picker<!-- --> </figcaption>
              </a></div>
          </div>
          <div class="cardhotkey__wrap p-30 pt-15 pb-15 pointer"><a href="#" class="cat_Repairs &amp; Services"
              title="Repairs &amp; Services in Hyderabad">
              <h2 class="cardhotkey__title fw500 font18 color111">Repairs &amp; Services</h2>
            </a>
            <div class="cardhotkey__content"><a class="cardhotkey__imgBlock text_center mt-10"
                title="Pump Set Mechanic (Electric)" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Pump Set Mechanic (Electric)" title="Pump Set Mechanic (Electric)"
                      src="images/mechanics/pump_repairing_service.png?w=640&amp;q=75" decoding="async"
                      data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/mechanics/pump_repairing_service.png?w=256&amp;q=75 1x, images/mechanics/pump_repairing_service.png?w=640&amp;q=75 2x"><noscript><img
                        alt="Pump Set Mechanic (Electric)" title="Pump Set Mechanic (Electric)"
                        srcSet="images/mechanics/pump_repairing_service.png?w=256&amp;q=75 1x, images/mechanics/pump_repairing_service.png?w=640&amp;q=75 2x"
                        src="images/mechanics/pump_repairing_service.png?w=640&amp;q=75" decoding="async"
                        data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Pump Set Mechanic (Electric)</figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Pump Set mechanic (Diesel engine)" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Pump Set mechanic (Diesel engine)" title="Pump Set mechanic (Diesel engine)"
                      src="images/mechanics/diesel_engine_pump_set.png?w=640&amp;q=75" decoding="async"
                      data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/mechanics/diesel_engine_pump_set.png?w=256&amp;q=75 1x, images/mechanics/diesel_engine_pump_set.png?w=640&amp;q=75 2x"><noscript><img
                        alt="Pump Set mechanic (Diesel engine)" title="Pump Set mechanic (Diesel engine)"
                        srcSet="images/mechanics/diesel_engine_pump_set.png?w=256&amp;q=75 1x, images/mechanics/diesel_engine_pump_set.png?w=640&amp;q=75 2x"
                        src="images/mechanics/diesel_engine_pump_set.png?w=640&amp;q=75" decoding="async"
                        data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Pump Set mechanic <br>(Diesel engine)<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Solar pump set mechanic" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Solar pump set mechanic" title="Solar pump set mechanic"
                      src="images/mechanics/solar_pump.png?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/mechanics/solar_pump.png?w=256&amp;q=75 1x, images/mechanics/solar_pump.png?w=640&amp;q=75 2x"><noscript><img
                        alt="Solar pump set mechanic" title="Solar pump set mechanic"
                        srcSet="images/mechanics/solar_pump.png?w=256&amp;q=75 1x, images/mechanics/solar_pump.png?w=640&amp;q=75 2x"
                        src="images/mechanics/solar_pump.png?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Solar pump set mechanic <!-- --> </figcaption>
              </a></div>
          </div>
          <div class="cardhotkey__wrap p-30 pt-15 pb-15 pointer"><a href="#" class="cat_Daily Needs" title="Sprayers">
              <h2 class="cardhotkey__title fw500 font18 color111">Sprayers</h2>
            </a>
            <div class="cardhotkey__content"><a class="cardhotkey__imgBlock text_center mt-10" href="#" title="sprayer">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="category_images" title="sprayer" src="images/man_power/sprayer.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/sprayer.jpg?w=256&amp;q=75 1x, images/man_power/sprayer.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="category_images" title="sprayer"
                        srcSet="images/man_power/sprayer.jpg?w=256&amp;q=75 1x, images/man_power/sprayer.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/sprayer.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Sprayer<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Battery Sprayer" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Battery Sprayer" title="Battery Sprayer"
                      src="images/man_power/battery_sprayer.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/battery_sprayer.jpg?w=256&amp;q=75 1x, images/man_power/battery_sprayer.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Battery Sprayer" title="Battery Sprayer"
                        srcSet="images/man_power/battery_sprayer.jpg?w=256&amp;q=75 1x, images/man_power/battery_sprayer.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/battery_sprayer.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Battery Sprayer<!-- --> </figcaption>
              </a><a class="cardhotkey__imgBlock text_center mt-10" title="Fuel Sparyer" href="#">
                <div class="cardhotkey_img_outer imageZoom"><span
                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                      style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                        style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                        alt="" aria-hidden="true"
                        src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27200%27%20height=%27200%27/%3e"></span><img
                      alt="Fuel Sparyer" title="Fuel Sparyer" src="images/man_power/fuel_sprayer.jpg?w=640&amp;q=75"
                      decoding="async" data-nimg="intrinsic"
                      style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                      srcset="images/man_power/fuel_sprayer.jpg?w=256&amp;q=75 1x, images/man_power/fuel_sprayer.jpg?w=640&amp;q=75 2x"><noscript><img
                        alt="Fuel Sparyer" title="Fuel Sparyer"
                        srcSet="images/man_power/fuel_sprayer.jpg?w=256&amp;q=75 1x, images/man_power/fuel_sprayer.jpg?w=640&amp;q=75 2x"
                        src="images/man_power/fuel_sprayer.jpg?w=640&amp;q=75" decoding="async" data-nimg="intrinsic"
                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                        loading="lazy" /></noscript></span></div>
                <figcaption class="color111 font14 pt-10">Fuel Sparyer<!-- --> </figcaption>
              </a></div>
          </div>
        </div>

        <div data-tracker-id="web_PopularCatagory_impression"
          class=" home_rowbox home_row_9 home_popularsearches mb-50">
          <div class=" jdwrapper jddtl_slider ">
            <div class=" dtlboxleft_headbox mb-20">
              <h2 class=" dtlboxleft_heading font25 fw600 color111">Popular Searches</h2>
            </div>
            <div class=" jddtl_slider_box">
              <div tabindex="0" class=" jddtl_slide popularsearches_slide">
                <div class=" popularsearches_slide_imgbox">
                  <div class=" popularsearches_slide_imginner"><img tabindex="-1"
                      src="images/implementors/implementor-banner.jpg" alt="Implementors" title="Implementors"
                      class=" popularsearches_slide_image"></div>
                </div>
                <div class=" popularsearches_txtbox">
                  <div class=" popularsearches_category line_clamp_2 font18 fw500 colorFFF">
                    Implementors</div><button tabindex="0" role="button"
                    class=" popularsearches_button whitefill_animate font16 fw600 color007"
                    fdprocessedid="hlkbke">Enquire Now</button>
                </div>
              </div>

              <div tabindex="0" class=" jddtl_slide popularsearches_slide">
                <div class=" popularsearches_slide_imgbox">
                  <div class=" popularsearches_slide_imginner"><img tabindex="-1"
                      src="images/mechanics/tractor_mechanic.jpg" alt="Repair &amp; Service photo"
                      title="Get Quote for Repair &amp; Service" class=" popularsearches_slide_image"></div>
                </div>
                <div class=" popularsearches_txtbox">
                  <div class=" popularsearches_category line_clamp_2 font18 fw500 colorFFF">
                    Repair &amp; Service</div><button tabindex="0" role="button"
                    class=" popularsearches_button whitefill_animate font16 fw600 color007"
                    fdprocessedid="b7c39k">Enquire Now</button>
                </div>
              </div>
              <div tabindex="0" class=" jddtl_slide popularsearches_slide">
                <div class=" popularsearches_slide_imgbox">
                  <div class=" popularsearches_slide_imginner"><img tabindex="-1" src="images/tractors/jcb1.png"
                      alt="Earth Movers photo" title="Get Quote for Earth Movers" class=" popularsearches_slide_image">
                  </div>
                </div>
                <div class=" popularsearches_txtbox">
                  <div class=" popularsearches_category line_clamp_2 font18 fw500 colorFFF">
                    Earth Movers</div><button tabindex="0" role="button"
                    class=" popularsearches_button whitefill_animate font16 fw600 color007"
                    fdprocessedid="cydfli">Enquire Now</button>
                </div>
              </div>

              <div tabindex="0" class=" jddtl_slide popularsearches_slide">
                <div class=" popularsearches_slide_imgbox">
                  <div class=" popularsearches_slide_imginner"><img tabindex="-1" src="images/man_power/farm_worker.jpg"
                      alt="Farm Workers photo" title="Get Quote for Farm Workers" class=" popularsearches_slide_image">
                  </div>
                </div>
                <div class=" popularsearches_txtbox">
                  <div class=" popularsearches_category line_clamp_2 font18 fw500 colorFFF">
                    Farm Workers</div><button tabindex="0" role="button"
                    class=" popularsearches_button whitefill_animate font16 fw600 color007"
                    fdprocessedid="ehk6vp">Enquire Now</button>
                </div>
              </div>
              <div tabindex="0" class=" jddtl_slide popularsearches_slide">
                <div class=" popularsearches_slide_imgbox">
                  <div class=" popularsearches_slide_imginner"><img tabindex="-1" src="images/machine/farm-drones.jpg"
                      alt="Drones photo" title="Get Quote for Drones" class=" popularsearches_slide_image">
                  </div>
                </div>
                <div class=" popularsearches_txtbox">
                  <div class=" popularsearches_category line_clamp_2 font18 fw500 colorFFF">
                    Drones</div><button tabindex="0" role="button"
                    class=" popularsearches_button whitefill_animate font16 fw600 color007"
                    fdprocessedid="k9jdyp">Enquire Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="latest-blog" class="my-5">
    <div class="container py-5 my-5">
      <div class="row mt-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
          <h2 class="display-3 fw-normal">Latest Blog Post</h2>
          <div>
            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
              Read all
              <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                <use xlink:href="#arrow-right"></use>
              </svg></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">20</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="#"><img src="images/tractors/tractor1.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="#">
                <h3 class="card-title pt-4 pb-3 m-0">Mahindra 265 DI</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">30 HP tractor fitted with a 2048 CC engine. It delivers maximum output
                  with 3 cylinders</p>
                <a href="#" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">21</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="#"><img src="images/tractors/tractor1.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="#">
                <h3 class="card-title pt-4 pb-3 m-0">Mahindra 265 DI</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">30 HP tractor fitted with a 2048 CC engine. It delivers maximum output
                  with 3 cylinders</p>
                <a href="#" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 my-4 my-md-0">
          <div class="z-1 position-absolute rounded-3 m-2 px-3 pt-1 bg-light">
            <h3 class="secondary-font text-primary m-0">22</h3>
            <p class="secondary-font fs-6 m-0">Feb</p>

          </div>
          <div class="card position-relative">
            <a href="#"><img src="images/tractors/tractor1.jpg" class="img-fluid rounded-4" alt="image"></a>
            <div class="card-body p-0">
              <a href="#">
                <h3 class="card-title pt-4 pb-3 m-0">Swaraj Target 630</h3>
              </a>

              <div class="card-text">
                <p class="blog-paragraph fs-6">Swaraj Target 630 is a high-performing and powerful 29 hp tractor with a
                  powerful engine and super attractive design.</p>
                <a href="#" class="blog-read">read more</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<<<<<<< HEAD
=======
  <footer id="footer" class="my-5">
    <div class="container py-5 my-5">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="images/raitanlogo.png" alt="Justdial Logo" aria-label="Justdial" title="Justdial" height="90"
              width="102" class="">
            <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled gap-2">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Quick Links</h3>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">About us</a>
              </li>

              <li class="menu-item">
                <a href="#" class="nav-link">Services</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Help Center</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">FAQs</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Payment</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Returns & Refunds</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Checkout</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Delivery Information</a>
                </li>
              </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div>
            <h3>Our Newsletter</h3>
            <p class="blog-paragraph fs-6">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="search-bar border rounded-pill border-dark-subtle px-2">
              <form class="text-center d-flex align-items-center" action="" method="">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Enter your email here" />
                <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      <div class="row mt-3">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2023 Raitan. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="secondary-font"> </p>
          <p class="secondary-font"> </p>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
>>>>>>> 628e174545cb89fa7724da2670717566aeb5e3ef
  <script>
    window.addEventListener('scroll', function () {
      var header = document.querySelector('.jdheader');


      if (window.scrollY > 50) {

        header.classList.add('header_fixed');
      } else {

        header.classList.remove('header_fixed');
      }
    });

  </script>
<<<<<<< HEAD
@endsection
=======
  <script>

    document.addEventListener("DOMContentLoaded", function () {

      const loginButton = document.querySelector('#header_login');
      const registerButton = document.querySelector('#header_register');
      const loginsection = document.querySelector('#login-signup');
      const registersection = document.querySelector('#user-register');
      const closeButton = document.querySelector('.modal-close');
      const registercloseButton = document.querySelector('.register-modal-close');


      loginButton.addEventListener('click', function () {

        loginsection.style.display = (loginsection.style.display === 'block') ? 'none' : 'block';


        loginsection.classList.toggle('animated');

        loginsection.classList.toggle('fadeInUpmovie');


        Array.from(loginsection.children).forEach(child => {
          child.classList.toggle('fadeInUpmovie');
        });
      });

      registerButton.addEventListener('click', function () {

        registersection.style.display = (registersection.style.display === 'block') ? 'none' : 'block';


        registersection.classList.toggle('animated');

        registersection.classList.toggle('fadeInUpmovie');


Array.from(registersection.children).forEach(child => {
  child.classList.toggle('fadeInUpmovie');
});
});


      closeButton.addEventListener('click', function () {

        loginsection.style.display = (loginsection.style.display === 'none') ? 'block' : 'none';

      });

      registercloseButton.addEventListener('click', function () {

        registersection.style.display = (registersection.style.display === 'none') ? 'block' : 'none';

});
    });

  </script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const slides = document.querySelectorAll('.slide');
      const bullets = document.querySelectorAll('.slide_pagination_bullet');
      let currentIndex = 0;

      const goToSlide = (index) => {
        slides[currentIndex].classList.remove('active-slide');
        bullets[currentIndex].classList.remove('active');
        slides[index].classList.add('active-slide');
        bullets[index].classList.add('active');
        currentIndex = index;
      };

      const nextSlide = () => {
        let nextIndex = currentIndex + 1;
        if (nextIndex >= slides.length) {
          nextIndex = 0;
        }
        goToSlide(nextIndex);
      };

      const prevSlide = () => {
        let prevIndex = currentIndex - 1;
        if (prevIndex < 0) {
          prevIndex = slides.length - 1;
        }
        goToSlide(prevIndex);
      };

      document.getElementById('next').addEventListener('click', nextSlide);
      document.getElementById('previous').addEventListener('click', prevSlide);

      bullets.forEach((bullet, index) => {
        bullet.addEventListener('click', () => {
          goToSlide(index);
        });
      });

      setInterval(nextSlide, 3000); // Change slide every 3 seconds
    });

  </script>
</body>

</html>
>>>>>>> 628e174545cb89fa7724da2670717566aeb5e3ef
