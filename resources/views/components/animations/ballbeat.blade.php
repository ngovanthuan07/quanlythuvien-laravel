<div class="la-ball-beat">
    <div></div>
    <div></div>
    <div></div>
</div>


@push('styles')
    <style>
        .la-ball-beat,
        .la-ball-beat > div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .la-ball-beat {
            display: block;
            font-size: 0;
            color: #fff;
        }
        .la-ball-beat.la-dark {
            color: #333;
        }
        .la-ball-beat > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-ball-beat {
            width: 54px;
            height: 18px;
        }
        .la-ball-beat > div {
            width: 10px;
            height: 10px;
            margin: 4px;
            border-radius: 100%;
            -webkit-animation: ball-beat .7s -.15s infinite linear;
            -moz-animation: ball-beat .7s -.15s infinite linear;
            -o-animation: ball-beat .7s -.15s infinite linear;
            animation: ball-beat .7s -.15s infinite linear;
        }
        .la-ball-beat > div:nth-child(2n-1) {
            -webkit-animation-delay: -.5s;
            -moz-animation-delay: -.5s;
            -o-animation-delay: -.5s;
            animation-delay: -.5s;
        }
        .la-ball-beat.la-sm {
            width: 26px;
            height: 8px;
        }
        .la-ball-beat.la-sm > div {
            width: 4px;
            height: 4px;
            margin: 2px;
        }
        .la-ball-beat.la-2x {
            width: 108px;
            height: 36px;
        }
        .la-ball-beat.la-2x > div {
            width: 20px;
            height: 20px;
            margin: 8px;
        }
        .la-ball-beat.la-3x {
            width: 162px;
            height: 54px;
        }
        .la-ball-beat.la-3x > div {
            width: 30px;
            height: 30px;
            margin: 12px;
        }
        /*
         * Animation
         */
        @-webkit-keyframes ball-beat {
            50% {
                opacity: .2;
                -webkit-transform: scale(.75);
                transform: scale(.75);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @-moz-keyframes ball-beat {
            50% {
                opacity: .2;
                -moz-transform: scale(.75);
                transform: scale(.75);
            }
            100% {
                opacity: 1;
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }
        @-o-keyframes ball-beat {
            50% {
                opacity: .2;
                -o-transform: scale(.75);
                transform: scale(.75);
            }
            100% {
                opacity: 1;
                -o-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes ball-beat {
            50% {
                opacity: .2;
                -webkit-transform: scale(.75);
                -moz-transform: scale(.75);
                -o-transform: scale(.75);
                transform: scale(.75);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }
    </style>
@endpush
