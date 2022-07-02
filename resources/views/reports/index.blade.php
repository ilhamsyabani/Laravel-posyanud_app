@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('About Page') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header border-0">
                    <div class="card-title">Development activity</div>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                        <div class="row g-2">
                            <div class="col-auto">
                                <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity"
                                    style="min-height: 41px;">
                                    <div id="apexchartssuje7kad"
                                        class="apexcharts-canvas apexchartssuje7kad apexcharts-theme-light"
                                        style="width: 40px; height: 41px;"><svg id="SvgjsSvg1837" width="40" height="41"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1839" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1838">
                                                    <clipPath id="gridRectMasksuje7kad">
                                                        <rect id="SvgjsRect1841" width="46" height="42" x="-3" y="-1" rx="0"
                                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasksuje7kad"></clipPath>
                                                    <clipPath id="nonForecastMasksuje7kad"></clipPath>
                                                    <clipPath id="gridRectMarkerMasksuje7kad">
                                                        <rect id="SvgjsRect1842" width="44" height="44" x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1843" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1844">
                                                        <g id="SvgjsG1845" class="apexcharts-tracks">
                                                            <g id="SvgjsG1846"
                                                                class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="2.3658536585365857"
                                                                    stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1848">
                                                            <g id="SvgjsG1850"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1851"
                                                                    d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(32,107,196,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="2.439024390243903"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="126" data:value="35" index="0" j="0"
                                                                    data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle1849" r="14.670731707317076" cx="20"
                                                                cy="20" class="apexcharts-radialbar-hollow"
                                                                fill="transparent"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1852" x1="0" y1="0" x2="40" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1853" x1="0" y1="0" x2="40" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1840" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div>Today's Earning: $4,262.40</div>
                                <div class="text-muted">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <desc>Download more icon variants from https://tabler-icons.io/i/trending-up</desc>
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="3 17 9 11 13 15 21 7"></polyline>
                                        <polyline points="14 7 21 7 21 14"></polyline>
                                    </svg>
                                    +5% more than yesterday
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chart-development-activity" style="min-height: 192px;">
                        <div id="apexchartsa840m0yl" class="apexcharts-canvas apexchartsa840m0yl apexcharts-theme-light"
                            style="width: 445px; height: 192px;"><svg id="SvgjsSvg2608" width="445" height="192"
                                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2610" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, 0)">
                                    <defs id="SvgjsDefs2609">
                                        <clipPath id="gridRectMaska840m0yl">
                                            <rect id="SvgjsRect2646" width="451" height="194" x="-3" y="-1" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaska840m0yl"></clipPath>
                                        <clipPath id="nonForecastMaska840m0yl"></clipPath>
                                        <clipPath id="gridRectMarkerMaska840m0yl">
                                            <rect id="SvgjsRect2647" width="449" height="196" x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine2615" x1="383.12068965517244" y1="0" x2="383.12068965517244" y2="192"
                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs apexcharts-active" x="383.12068965517244" y="0"
                                        width="1" height="192" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG2654" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2655" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        </g>
                                    </g>
                                    <g id="SvgjsG2667" class="apexcharts-grid">
                                        <g id="SvgjsG2668" class="apexcharts-gridlines-horizontal" style="display: none;">
                                            <line id="SvgjsLine2670" x1="0" y1="0" x2="445" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2671" x1="0" y1="48" x2="445" y2="48" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2672" x1="0" y1="96" x2="445" y2="96" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2673" x1="0" y1="144" x2="445" y2="144" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine2674" x1="0" y1="192" x2="445" y2="192" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG2669" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                        <line id="SvgjsLine2676" x1="0" y1="192" x2="445" y2="192" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2675" x1="0" y1="1" x2="0" y2="192" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2648" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG2649" class="apexcharts-series" seriesName="Purchases"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath2652"
                                                d="M 0 192L 0 184.8C 5.370689655172414 184.8 9.974137931034484 180 15.344827586206897 180C 20.71551724137931 180 25.31896551724138 182.4 30.689655172413794 182.4C 36.060344827586206 182.4 40.66379310344828 177.6 46.03448275862069 177.6C 51.4051724137931 177.6 56.008620689655174 175.2 61.37931034482759 175.2C 66.75 175.2 71.35344827586208 180 76.72413793103449 180C 82.0948275862069 180 86.69827586206897 177.6 92.06896551724138 177.6C 97.4396551724138 177.6 102.04310344827587 172.8 107.41379310344828 172.8C 112.7844827586207 172.8 117.38793103448276 134.4 122.75862068965517 134.4C 128.1293103448276 134.4 132.73275862068965 175.2 138.10344827586206 175.2C 143.47413793103448 175.2 148.07758620689657 163.2 153.44827586206898 163.2C 158.8189655172414 163.2 163.42241379310346 180 168.79310344827587 180C 174.16379310344828 180 178.76724137931035 177.6 184.13793103448276 177.6C 189.50862068965517 177.6 194.11206896551724 184.8 199.48275862068965 184.8C 204.85344827586206 184.8 209.45689655172416 172.8 214.82758620689657 172.8C 220.19827586206898 172.8 224.80172413793105 182.4 230.17241379310346 182.4C 235.54310344827587 182.4 240.14655172413794 158.4 245.51724137931035 158.4C 250.88793103448276 158.4 255.49137931034485 120 260.86206896551727 120C 266.23275862068965 120 270.83620689655174 151.2 276.2068965517241 151.2C 281.57758620689657 151.2 286.1810344827586 146.4 291.55172413793105 146.4C 296.9224137931035 146.4 301.5258620689655 156 306.89655172413796 156C 312.26724137931035 156 316.87068965517244 158.4 322.2413793103448 158.4C 327.61206896551727 158.4 332.2155172413793 132 337.58620689655174 132C 342.9568965517242 132 347.5603448275862 115.2 352.93103448275866 115.2C 358.30172413793105 115.2 362.90517241379314 96 368.2758620689655 96C 373.64655172413796 96 378.25 60 383.62068965517244 60C 388.9913793103448 60 393.5948275862069 48 398.9655172413793 48C 404.33620689655174 48 408.9396551724138 76.80000000000001 414.3103448275862 76.80000000000001C 419.68103448275866 76.80000000000001 424.2844827586207 67.2 429.65517241379314 67.2C 435.0258620689655 67.2 439.6293103448276 24 445 24C 445 24 445 24 445 192M 445 24z"
                                                fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-area" index="0" clip-path="url(#gridRectMaska840m0yl)"
                                                pathTo="M 0 192L 0 184.8C 5.370689655172414 184.8 9.974137931034484 180 15.344827586206897 180C 20.71551724137931 180 25.31896551724138 182.4 30.689655172413794 182.4C 36.060344827586206 182.4 40.66379310344828 177.6 46.03448275862069 177.6C 51.4051724137931 177.6 56.008620689655174 175.2 61.37931034482759 175.2C 66.75 175.2 71.35344827586208 180 76.72413793103449 180C 82.0948275862069 180 86.69827586206897 177.6 92.06896551724138 177.6C 97.4396551724138 177.6 102.04310344827587 172.8 107.41379310344828 172.8C 112.7844827586207 172.8 117.38793103448276 134.4 122.75862068965517 134.4C 128.1293103448276 134.4 132.73275862068965 175.2 138.10344827586206 175.2C 143.47413793103448 175.2 148.07758620689657 163.2 153.44827586206898 163.2C 158.8189655172414 163.2 163.42241379310346 180 168.79310344827587 180C 174.16379310344828 180 178.76724137931035 177.6 184.13793103448276 177.6C 189.50862068965517 177.6 194.11206896551724 184.8 199.48275862068965 184.8C 204.85344827586206 184.8 209.45689655172416 172.8 214.82758620689657 172.8C 220.19827586206898 172.8 224.80172413793105 182.4 230.17241379310346 182.4C 235.54310344827587 182.4 240.14655172413794 158.4 245.51724137931035 158.4C 250.88793103448276 158.4 255.49137931034485 120 260.86206896551727 120C 266.23275862068965 120 270.83620689655174 151.2 276.2068965517241 151.2C 281.57758620689657 151.2 286.1810344827586 146.4 291.55172413793105 146.4C 296.9224137931035 146.4 301.5258620689655 156 306.89655172413796 156C 312.26724137931035 156 316.87068965517244 158.4 322.2413793103448 158.4C 327.61206896551727 158.4 332.2155172413793 132 337.58620689655174 132C 342.9568965517242 132 347.5603448275862 115.2 352.93103448275866 115.2C 358.30172413793105 115.2 362.90517241379314 96 368.2758620689655 96C 373.64655172413796 96 378.25 60 383.62068965517244 60C 388.9913793103448 60 393.5948275862069 48 398.9655172413793 48C 404.33620689655174 48 408.9396551724138 76.80000000000001 414.3103448275862 76.80000000000001C 419.68103448275866 76.80000000000001 424.2844827586207 67.2 429.65517241379314 67.2C 435.0258620689655 67.2 439.6293103448276 24 445 24C 445 24 445 24 445 192M 445 24z"
                                                pathFrom="M -1 192L -1 192L 15.344827586206897 192L 30.689655172413794 192L 46.03448275862069 192L 61.37931034482759 192L 76.72413793103449 192L 92.06896551724138 192L 107.41379310344828 192L 122.75862068965517 192L 138.10344827586206 192L 153.44827586206898 192L 168.79310344827587 192L 184.13793103448276 192L 199.48275862068965 192L 214.82758620689657 192L 230.17241379310346 192L 245.51724137931035 192L 260.86206896551727 192L 276.2068965517241 192L 291.55172413793105 192L 306.89655172413796 192L 322.2413793103448 192L 337.58620689655174 192L 352.93103448275866 192L 368.2758620689655 192L 383.62068965517244 192L 398.9655172413793 192L 414.3103448275862 192L 429.65517241379314 192L 445 192">
                                            </path>
                                            <path id="SvgjsPath2653"
                                                d="M 0 184.8C 5.370689655172414 184.8 9.974137931034484 180 15.344827586206897 180C 20.71551724137931 180 25.31896551724138 182.4 30.689655172413794 182.4C 36.060344827586206 182.4 40.66379310344828 177.6 46.03448275862069 177.6C 51.4051724137931 177.6 56.008620689655174 175.2 61.37931034482759 175.2C 66.75 175.2 71.35344827586208 180 76.72413793103449 180C 82.0948275862069 180 86.69827586206897 177.6 92.06896551724138 177.6C 97.4396551724138 177.6 102.04310344827587 172.8 107.41379310344828 172.8C 112.7844827586207 172.8 117.38793103448276 134.4 122.75862068965517 134.4C 128.1293103448276 134.4 132.73275862068965 175.2 138.10344827586206 175.2C 143.47413793103448 175.2 148.07758620689657 163.2 153.44827586206898 163.2C 158.8189655172414 163.2 163.42241379310346 180 168.79310344827587 180C 174.16379310344828 180 178.76724137931035 177.6 184.13793103448276 177.6C 189.50862068965517 177.6 194.11206896551724 184.8 199.48275862068965 184.8C 204.85344827586206 184.8 209.45689655172416 172.8 214.82758620689657 172.8C 220.19827586206898 172.8 224.80172413793105 182.4 230.17241379310346 182.4C 235.54310344827587 182.4 240.14655172413794 158.4 245.51724137931035 158.4C 250.88793103448276 158.4 255.49137931034485 120 260.86206896551727 120C 266.23275862068965 120 270.83620689655174 151.2 276.2068965517241 151.2C 281.57758620689657 151.2 286.1810344827586 146.4 291.55172413793105 146.4C 296.9224137931035 146.4 301.5258620689655 156 306.89655172413796 156C 312.26724137931035 156 316.87068965517244 158.4 322.2413793103448 158.4C 327.61206896551727 158.4 332.2155172413793 132 337.58620689655174 132C 342.9568965517242 132 347.5603448275862 115.2 352.93103448275866 115.2C 358.30172413793105 115.2 362.90517241379314 96 368.2758620689655 96C 373.64655172413796 96 378.25 60 383.62068965517244 60C 388.9913793103448 60 393.5948275862069 48 398.9655172413793 48C 404.33620689655174 48 408.9396551724138 76.80000000000001 414.3103448275862 76.80000000000001C 419.68103448275866 76.80000000000001 424.2844827586207 67.2 429.65517241379314 67.2C 435.0258620689655 67.2 439.6293103448276 24 445 24"
                                                fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                class="apexcharts-area" index="0" clip-path="url(#gridRectMaska840m0yl)"
                                                pathTo="M 0 184.8C 5.370689655172414 184.8 9.974137931034484 180 15.344827586206897 180C 20.71551724137931 180 25.31896551724138 182.4 30.689655172413794 182.4C 36.060344827586206 182.4 40.66379310344828 177.6 46.03448275862069 177.6C 51.4051724137931 177.6 56.008620689655174 175.2 61.37931034482759 175.2C 66.75 175.2 71.35344827586208 180 76.72413793103449 180C 82.0948275862069 180 86.69827586206897 177.6 92.06896551724138 177.6C 97.4396551724138 177.6 102.04310344827587 172.8 107.41379310344828 172.8C 112.7844827586207 172.8 117.38793103448276 134.4 122.75862068965517 134.4C 128.1293103448276 134.4 132.73275862068965 175.2 138.10344827586206 175.2C 143.47413793103448 175.2 148.07758620689657 163.2 153.44827586206898 163.2C 158.8189655172414 163.2 163.42241379310346 180 168.79310344827587 180C 174.16379310344828 180 178.76724137931035 177.6 184.13793103448276 177.6C 189.50862068965517 177.6 194.11206896551724 184.8 199.48275862068965 184.8C 204.85344827586206 184.8 209.45689655172416 172.8 214.82758620689657 172.8C 220.19827586206898 172.8 224.80172413793105 182.4 230.17241379310346 182.4C 235.54310344827587 182.4 240.14655172413794 158.4 245.51724137931035 158.4C 250.88793103448276 158.4 255.49137931034485 120 260.86206896551727 120C 266.23275862068965 120 270.83620689655174 151.2 276.2068965517241 151.2C 281.57758620689657 151.2 286.1810344827586 146.4 291.55172413793105 146.4C 296.9224137931035 146.4 301.5258620689655 156 306.89655172413796 156C 312.26724137931035 156 316.87068965517244 158.4 322.2413793103448 158.4C 327.61206896551727 158.4 332.2155172413793 132 337.58620689655174 132C 342.9568965517242 132 347.5603448275862 115.2 352.93103448275866 115.2C 358.30172413793105 115.2 362.90517241379314 96 368.2758620689655 96C 373.64655172413796 96 378.25 60 383.62068965517244 60C 388.9913793103448 60 393.5948275862069 48 398.9655172413793 48C 404.33620689655174 48 408.9396551724138 76.80000000000001 414.3103448275862 76.80000000000001C 419.68103448275866 76.80000000000001 424.2844827586207 67.2 429.65517241379314 67.2C 435.0258620689655 67.2 439.6293103448276 24 445 24"
                                                pathFrom="M -1 192L -1 192L 15.344827586206897 192L 30.689655172413794 192L 46.03448275862069 192L 61.37931034482759 192L 76.72413793103449 192L 92.06896551724138 192L 107.41379310344828 192L 122.75862068965517 192L 138.10344827586206 192L 153.44827586206898 192L 168.79310344827587 192L 184.13793103448276 192L 199.48275862068965 192L 214.82758620689657 192L 230.17241379310346 192L 245.51724137931035 192L 260.86206896551727 192L 276.2068965517241 192L 291.55172413793105 192L 306.89655172413796 192L 322.2413793103448 192L 337.58620689655174 192L 352.93103448275866 192L 368.2758620689655 192L 383.62068965517244 192L 398.9655172413793 192L 414.3103448275862 192L 429.65517241379314 192L 445 192">
                                            </path>
                                            <g id="SvgjsG2650" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2682" r="6" cx="383.62068965517244" cy="60"
                                                        class="apexcharts-marker wahkxeepb no-pointer-events"
                                                        stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2"
                                                        stroke-opacity="0.9" default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2651" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2677" x1="0" y1="0" x2="445" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2678" x1="0" y1="0" x2="445" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2679" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2680" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2681" class="apexcharts-point-annotations"></g>
                                </g>
                                <rect id="SvgjsRect2614" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2666" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2611" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 96px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active"
                                style="left: 248.308px; top: 63px;">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">16 Jul
                                </div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                    style="order: 1; display: flex;">
                                    <span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(32, 107, 196);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label">Purchases: </span><span
                                                class="apexcharts-tooltip-text-y-value">55</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-table table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Commit</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/000m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Fix dart Sass compatibility (#29755)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">28 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm">JL</span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Change deprecated html tags to text decoration classes (#29604)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">27 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/002m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Update change-version.js (#29736)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/000f.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Regenerate package-lock.json (#29730)
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">25 Nov 2019</td>
                            </tr>
                            <tr>
                                <td class="w-1">
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(./static/avatars/001f.jpg)"></span>
                                </td>
                                <td class="td-truncate">
                                    <div class="text-truncate">
                                        Some minor text tweaks
                                    </div>
                                </td>
                                <td class="text-nowrap text-muted">24 Nov 2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
