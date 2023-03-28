<!DOCTYPE html>
<html lang="{{ __('lang') }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WiDi group</title>
    <meta name="keywords" content="escuela, técnica, ciudad, buenos, aires, orientación, automotores, computación, educacion, balvanera, informatica">
    <meta name="robots" content="follow">
    <meta name="title" content="WiDi Group">
    <meta name="copyright" content="WiDi Group">
    <meta name="author" content="WiDi Group">
    <meta name="twitter:description" content="WiDi Group it's a technology consulting and open source developing group, where you can find a IT solution for every step of your production chain">
    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="images/WiDi.png">
    <meta name="description" content="WiDi Group it's a technology consulting and open source developing group, where you can find a IT solution for every step of your production chain">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="images/WiDi.png">
    <meta name="twitter:title" content="WiDi Group">
    <link rel="icon" type="image/png" sizes="371x371" href="images/WiDiLogo.png">

    <link rel="stylesheet" href="notification.css"></link>
    <script src="notification.var.js"></script>

  <link rel="icon" href="favicon.ico">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
  <body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
    <!-- ===== Header Start ===== -->
    <header
  class="g s r vd ya cj"
  :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
  @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
>
  <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
    <div class="vd to/4 tc wf yf">
      <a href="/">
        <img class="om" src="images/WiDi.png" width="130px" alt="Logo Light" />
        <img class="xc nm" src="images/WiDiDark.png" width="130px" alt="Logo Dark" />
      </a>

      <!-- Hamburger Toggle BTN -->
      <button class="po rc" @click="navigationOpen = !navigationOpen">
        <span class="rc i pf re pd">
          <span class="du-block h q vd yc">
            <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
          </span>
          <span class="du-block h q vd yc lf">
            <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
            <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
    </div>

    <div
      class="vd wo/4 sd qo f ho oo wf yf"
      :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
    >
      <nav>
        <ul class="tc _o sf yo cg ep">
          <li><a href="/" class="xl" :class="{ 'mk': page === 'home' }">{{ __('navigation')['Inicio'] }}</a></li>
          <li><a href="#widi" class="xl">WiDi</a></li>
          <li><a href="#projects" class="xl">{{ __('navigation')['Proyectos'] }}</a></li>
          <li><a href="#support" class="xl">{{ __('navigation')['Contacto'] }}</a></li>
        </ul>
      </nav>

      <div class="tc wf ig pb no">
        <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
          <label class="rc ab i">
            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
            <!-- Icon Sun -->
            <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill=""/>
            </svg>
            <!-- Icon Sun -->
            <img class="xc nm" src="images/icon-moon.svg" alt="Moon" />
          </label>
        </div>
      </div>
    </div>
  </div>
</header>

    <!-- ===== Header End ===== -->

    <main>
      <!-- ===== Hero Start ===== -->
      <section class="gj do ir hj sp jr i pg">
        <!-- Hero Images -->
        <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
          <img src="images/shape-01.svg" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
          <img src="images/shape-02.svg" alt="shape" class="xc 2xl:ud-block h u p va" />
          <img src="images/shape-03.svg" alt="shape" class="xc 2xl:ud-block h v w va" />
          <img src="images/shape-04.svg" alt="shape" class="h q r" />
          <img src="images/banner-{{rand(1,5)}}.png" alt="shape" class="h q r" />
        </div>

        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn/2">
              <h1 class="fk vj zp or kk wm wb">{{ __('titulo') }}</h1>
              <p class="fq">
                {{ __('descripcion') }}
              </p>

              <div class="tc tf yo zf mb">
                <a href="#widi" class="ek jk lk gh gi hi rg ml il vc _d _l">
                    {{ __('Descubrenos') }}
                </a>

                <span class="tc sf">
                  <a href="#" class="inline-block ek xj kk wm"> {{ __('Escribe a') }} contact@widi.ar </a>
                  <span class="inline-block">{{ __('Para una') }}</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Hero End ===== -->

      <!-- ===== Small Features Start ===== -->
      <section id="features">
        <div class="bb ze ki yn 2xl:ud-px-12.5">
          <div class="tc uf zo xf ap zf bp mq">
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg mh">
                <img src="images/icon-01.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">{{ __('contacto')['dinamico'] }}</h4>
                <p>{{ __('contacto')['soporte']  }}</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg nh">
                <img src="images/icon-02.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">{{ __('experiencia')['descripcion'] }}</h4>
                <p>{{ __('experiencia')['desarrollos_abiertos'] }}</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg oh">
                <img src="images/icon-03.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">{{ __('facilidad')['tecnica'] }}</h4>
                <p>{{ __('facilidad')['descripcion'] }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Small Features End ===== -->

      <!-- ===== About Start ===== -->
      <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
          <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
              <div>
                <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x" />
                <img src="images/about-01.png" alt="About" class="ib" />
                <img src="images/about-02.png" alt="About" />
              </div>
              <div>
                <img src="images/shape-06.svg" alt="Shape" />
                <img src="images/about-03.png" alt="About" class="ob gb" />
                <img src="images/shape-07.svg" alt="Shape" class="bb" />
              </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2">
              <h4 class="ek yj mk gb">{{ __('apoyo')['descripcion'] }}</h4>
              <h2 class="fk vj zp pr kk wm qb">{{ __('apoyo')['juntos'] }} <span class="ek mk gb">{{ __('apoyo')['seguridad'] }}</span></h2>
              <p class="uo">{{ __('apoyo')['widi_cams'] }}</p>

              <a href="https://www.youtube.com/watch?v=hyjQvW4PVkI" data-fslightbox class="vc wf hg mb">
                <span class="tc wf xf be dd rg i gh ua">
                  <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                  <img src="images/icon-play.svg" alt="Play" />
                </span>
                <span class="kk">{{ __('trabajo')['descripcion'] }}</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About End ===== -->

      <!-- ===== Team Start ===== -->
      <section class="i pg ji gp uq">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img src="images/shape-08.svg" alt="Shape Bg" class="h q r" />
        <img src="images/shape-09.svg" alt="Shape" class="of h y z/2" />
        <img src="images/shape-10.svg" alt="Shape" class="h _ aa" />
        <img src="images/shape-11.svg" alt="Shape" class="of h m ba" />

        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `{{ __('trabajo')['equipo']['titulo'] }}`, sectionTitleText: `{{ __('trabajo')['equipo']['descripcion'] }}`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
            <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
            >
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze i va ki xn xq jb jo">
          <div class="wc qf pn xo gg cp">
            <!-- Team Item -->
            <div class="animate_top rj">
              <div class="c i pg z-1">
                <img class="vd om" src="images/worker-1.png" alt="Team" />
                <img class="vd xc nm" src="images/worker-1-dark.png" alt="Team" />

                <div class="ef im nl il">
                  <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                  <span class="h s p rc vd hd mh va"></span>
                  <div class="h s p vd ij jj xa">
                    <ul class="tc xf wf gg">
                      <li>
                        <a href="https://github.com/MaximoBrandi">
                          <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://maximoprandi.tech/">
                          <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/m%C3%A1ximo-prandi/">
                          <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z" fill=""/>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <h4 class="yj go kk wm ob zb">Máximo Prandi</h4>
              <p>CEO</p>
            </div>
            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                  <img class="vd om" src="images/worker-4.jpeg" alt="Team" />
                  <img class="vd xc nm" src="images/worker-4-dark.png" alt="Team" />

                  <div class="ef im nl il">
                    <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                    <span class="h s p rc vd hd mh va"></span>
                    <div class="h s p vd ij jj xa">
                      <ul class="tc xf wf gg">
                        <li>
                          <a href="https://github.com/EitanMohorade">
                            <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/__eightan__/">
                            <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/eitan-mohorade-4b904826a/">
                            <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z" fill=""/>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <h4 class="yj go kk wm ob zb">Eitan Mohorade</h4>
                <p>COO</p>
              </div>

            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                  <img class="vd om" src="images/worker-5.jpeg" alt="Team" />
                  <img class="vd xc nm" src="images/worker-5-dark.png" alt="Team" />

                  <div class="ef im nl il">
                    <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                    <span class="h s p rc vd hd mh va"></span>
                    <div class="h s p vd ij jj xa">
                      <ul class="tc xf wf gg">
                        <li>
                          <a href="https://github.com/Fedelgado">
                            <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/fede.delva/">
                            <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/federico-delgado-6a55a8257/">
                            <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z" fill=""/>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <h4 class="yj go kk wm ob zb">Federico Delgado</h4>
                <p>CCO</p>
            </div>
            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                  <img class="vd om" src="images/worker-3.jpeg" alt="Team" />
                  <img class="vd xc nm" src="images/worker-3-dark.png" alt="Team" />

                  <div class="ef im nl il">
                    <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                    <span class="h s p rc vd hd mh va"></span>
                    <div class="h s p vd ij jj xa">
                      <ul class="tc xf wf gg">
                        <li>
                          <a href="https://github.com/Sebjpg">
                            <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                          </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/dis.seb/">
                              <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                              </svg>
                            </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <h4 class="yj go kk wm ob zb">Sebastian Díaz</h4>
                <p>CMO</p>
              </div>



            <!-- Team Item -->
            <div class="animate_top rj">
              <div class="c i pg z-1">
                <img class="vd om" src="images/worker-2.png" alt="Team" />
                <img class="vd xc nm" src="images/worker-2-dark.png" alt="Team" />

                <div class="ef im nl il">
                  <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                  <span class="h s p rc vd hd mh va"></span>
                  <div class="h s p vd ij jj xa">
                    <ul class="tc xf wf gg">
                      <li>
                        <a href="https://github.com/TobiasTamashiro">
                          <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/tobias10105/">
                          <svg class="uh vl ml il" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <h4 class="yj go kk wm ob zb">Tobias Tamashiro</h4>
              <p>CFO</p>
            </div>

            <!-- Team Item -->

      </section>
      <!-- ===== Team End ===== -->

      <!-- ===== Services Start ===== -->
      <section id="widi" class="lj tp kr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `{{ __('valores')['todos'] }}`, sectionTitleText: `{{ __('valores')['codigo_abierto'] }}`}"
                >
                <div class="animate_top bb ze rj ki xn vq">
            <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
            >
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn yq mb en">
          <div class="wc qf pn xo ng">
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-04.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('valores')['hecho_para_todos titulo'] }}</h4>
              <p>{{ __('valores')['hecho_para_todos'] }}</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('valores')['confiabilidad titulo'] }}</h4>
              <p>{{ __('valores')['confiabilidad'] }}</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-06.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('valores')['comunidad titulo'] }}</h4>
              <p>{{ __('valores')['comunidad'] }}.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-07.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('valores')['eficiencia titulo'] }}</h4>
              <p>{{ __('valores')['eficiencia'] }}</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('Avanzada customizacion') }}</h4>
              <p>{{ __('Avanzada customizacion desc') }}</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-06.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">{{ __('Continuas mejoras') }}</h4>
              <p>{{ __('Continuas mejoras desc') }}</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Services End ===== -->

      <!-- ===== Projects Start ===== -->
      <section id="projects" class="pg pj vp mr oj wp nr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `{{ __('Nuestras soluciones al mundo entero') }}`, sectionTitleText: `{{ __('Nuestras soluciones al mundo entero desc') }}`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn 2xl:ud-px-0 jb" x-data="{filterTab: 1}">
          <!-- Porject Tab -->
          <div
            class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc"
          >
            <button
              data-filter="*"
              @click="filterTab = 1"
              :class="{ 'gh lk' : filterTab === 1 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
            {{ __('Todos') }}
            </button>
            <button
              data-filter=".branding"
              @click="filterTab = 2"
              :class="{ 'gh lk' : filterTab === 2 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
            {{ __('Aplicaciones web') }}
            </button>
            <button
              data-filter=".digital"
              @click="filterTab = 3"
              :class="{ 'gh lk' : filterTab === 3 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
            {{ __('Aplicaciones nativas') }}
            </button>
            <button
              data-filter=".ecommerce"
              @click="filterTab = 4"
              :class="{ 'gh lk' : filterTab === 4 }"
              class="project-tab-btn ek rg ml il vi mi"
            >
            {{ __('Sistemas') }}
            </button>
          </div>

          <!-- Projects item wrapper -->
          <div class="projects-wrapper tc -ud-mx-5">
            <div class="project-sizer"></div>
            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-01.png" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Larn</h4>
                  <p>{{ __('Larn') }}</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="https://larn.ar" target="_blank"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 digital">
              <div class="c i pg sg z-1">
                <img src="images/project-02.png" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Praendi Template</h4>
                  <p>{{ __('Praendi') }}</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="https://praendi.ar/template"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-04.png" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">WiDicams</h4>
                  <p>{{ __('WiDicams') }}</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="https://widicams.widi.ar"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd vo/3 digital ecommerce">
              <div class="c i pg sg z-1">
                <img src="images/project-03.png" alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                >
                  <h4 class="ek tj kk hc">Jildam</h4>
                  <p>{{ __('Jildam') }}</p>
                  <a
                    class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="https://jildam.curseofacademy.com.ar"
                  >
                    <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Projects End ===== -->

      {{-- <!-- ===== Testimonials Start ===== -->
      <section class="hj rp hr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Experiencias`, sectionTitleText: `Experiencias y menciones que tuvimos para destacar, sobre la utilizacion y aplicacion de nuestras soluciones.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn ar">
          <div class="animate_top jb cq">
            <!-- Slider main container -->
            <div class="swiper testimonial-01">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="i hh rm sg vk xm bi qj">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                      <img class="bf" src="images/testimonial.png" alt="User" />

                      <div>
                        <img src="images/icon-quote.svg" alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor diam, feugiat quis enim sed, ullamcorper semper ligula. Mauris consequat justo volutpat.
                        </p>

                        <div class="tc yf vf">
                          <div>
                            <span class="rc ek xj kk wm zb">Devid Smith</span>
                            <span class="rc">Founter @democompany</span>
                          </div>

                          <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need navigation -->
              <div class="tc wf xf fg jb">
                <div
                  class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                >
                  <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                      fill=""
                    />
                  </svg>
                </div>
                <div
                  class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                >
                  <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" fill="" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Testimonials End ===== --> --}}

      <!-- ===== Counter Start ===== -->
      <section class="i pg qh rm ji hp">
        <img src="images/shape-11.svg" alt="Shape" class="of h ga ha ke" />
        <img src="images/shape-07.svg" alt="Shape" class="h ia o ae jf" />
        <img src="images/shape-14.svg" alt="Shape" class="h ja ka" />
        <img src="images/shape-15.svg" alt="Shape" class="h q p" />

        <div class="bb ze i va ki xn br">
          <div class="tc uf sn tn xf un gg">
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">+7</h2>
              <p class="ek bk aq">{{ __('Proyectos') }}</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">+200</h2>
              <p class="ek bk aq">{{ __('Consumidores') }}</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">∞</h2>
              <p class="ek bk aq">{{ __('Clientes potenciales') }}</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">195</h2>
              <p class="ek bk aq">{{ __('Paises objetivo') }}</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Counter End ===== -->

      {{-- <!-- ===== Clients Start ===== -->
      <section class="pj vp mr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Trusted by Global Brands`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc">
          <div class="wc rf qn zf cp kq xf wf">
            <a href="#" class="rc animate_top">
              <img class="th wl ml il zl om" src="images/brand-light-01.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-01.svg" alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om" src="images/brand-light-02.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-02.svg" alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om" src="images/brand-light-03.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-03.svg" alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om" src="images/brand-light-04.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-04.svg" alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om" src="images/brand-light-05.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-05.svg" alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om" src="images/brand-light-06.svg" alt="Clients" />
              <img class="xc sk ml il zl nm" src="images/brand-dark-06.svg" alt="Clients" />
            </a>
          </div>
        </div>
      </section>
      <!-- ===== Clients End ===== --> --}}

      {{-- <!-- ===== Blog Start ===== -->
      <section class="ji gp uq">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Ultimas actualizaciones y noticias`, sectionTitleText: `En nuestro blog vas a poder encotnrar las ultimas actualizaciones de nuestros proyectos al mismo tiempo que informacion de interes general sobre tecnologia.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/blog-01.png" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi"
                    >Leer mas</a
                  >
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="blog-single.html">Free advertising for your online business</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/blog-02.png" alt="Blog" />

                <div
                  class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                >
                  <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi"
                    >Leer mas</a
                  >
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="blog-single.html">9 simple ways to improve your design skills</a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full" src="images/blog-03.png" alt="Blog" />

                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                    <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">
                        Leer mas
                    </a>
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="images/icon-man.svg" alt="User" />
                    <p>Musharof Chy</p>
                  </div>
                  <div class="tc wf ag">
                    <img src="images/icon-calender.svg" alt="Calender" />
                    <p>25 Dec, 2025</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a href="blog-single.html">Tips to quickly improve your coding speed.</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Blog End ===== --> --}}

      <!-- ===== Contact Start ===== -->
      <section id="support" class="i pg fh rm ji gp uq">
        <!-- Bg Shapes -->
        <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
        <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
        <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
        <img src="images/shape-12.svg" alt="Shape" class="h p s" />
        <img src="images/shape-13.svg" alt="Shape" class="h r q" />

        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `{{ __('Contactemos') }}`, sectionTitleText: `{{ __('Contactar encantado') }}`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="i va bb ye ki xn wq jb mo">
          <div class="tc uf sn tf rn un zf xl:gap-10">
            <div class="animate_top mn/5 to/3 vk sg hh sm yh rq i pg">
              <!-- Bg Shapes -->
              <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
              <img src="images/shape-06.svg" alt="Shape" class="h la ma ne kf" />

              <div class="fb">
                <h4 class="wj kk wm cc">{{ __('Informacion') }}</h4>
                <p><a href="#">contact@widi.ar</a></p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">{{ __('Soporte') }}</h4>
                <p>support@widi.ar</p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">{{ __('Numero telefonico') }}</h4>
                <p><a href="#">+54 9 11 2407-9549</a></p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">‎ </h4>
                <p><a href="#">‎ </a></p>
              </div>

              <span class="rc nd rh tm lc fb"></span>

              <div>
                <h4 class="wj kk wm qb">{{ __('Redes sociales') }}</h4>
                <ul class="tc wf fg">
                  <li>
                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z"
                          fill=""
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M19.3153 2.18484C18.6155 2.4944 17.8733 2.6977 17.1134 2.78801C17.9144 2.30899 18.5138 1.55511 18.8001 0.666844C18.0484 1.11418 17.2244 1.42768 16.3654 1.59726C15.7885 0.979958 15.0238 0.57056 14.1901 0.432713C13.3565 0.294866 12.5007 0.436294 11.7558 0.835009C11.0108 1.23372 10.4185 1.86739 10.0708 2.63749C9.72313 3.40759 9.63963 4.27098 9.83327 5.09343C8.30896 5.01703 6.81775 4.62091 5.45645 3.93079C4.09516 3.24067 2.89423 2.27197 1.93161 1.08759C1.59088 1.67284 1.41182 2.33814 1.41278 3.01534C1.41278 4.34451 2.08928 5.51876 3.11778 6.20626C2.50912 6.1871 1.91386 6.02273 1.38161 5.72685V5.77451C1.38179 6.65974 1.68811 7.51766 2.24864 8.20282C2.80916 8.88797 3.58938 9.3582 4.45703 9.53376C3.89201 9.68688 3.29956 9.70945 2.72453 9.59976C2.96915 10.3617 3.44595 11.0281 4.08815 11.5056C4.73035 11.9831 5.50581 12.2478 6.30594 12.2627C5.51072 12.8872 4.60019 13.3489 3.62642 13.6213C2.65264 13.8938 1.63473 13.9716 0.630859 13.8503C2.38325 14.9773 4.4232 15.5756 6.50669 15.5737C13.5586 15.5737 17.415 9.73176 17.415 4.66535C17.415 4.50035 17.4104 4.33351 17.4031 4.17035C18.1537 3.62783 18.8016 2.95578 19.3162 2.18576L19.3153 2.18484Z"
                          fill=""
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                      <svg class="th lm ml il" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
              <form action="javascript:void(0)" method="POST">
                <div class="tc sf yo ap zf ep qb">
                  <div class="vd to/2">
                    <label class="rc ac" for="fullname">{{ __('Nombre completo') }}*</label>
                    <input
                      type="text"
                      name="fullname"
                      id="fullname"
                      placeholder="Devid Wonder"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                      required="required"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="email">{{ __('Direccion email') }}*</label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="example@domain.com"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                      required="required"
                    />
                  </div>
                </div>

                <div class="tc sf yo ap zf ep qb">
                  <div class="vd to/2">
                    <label class="rc ac" for="phone">{{ __('Telefono') }}</label>
                    <input
                      type="text"
                      name="phone"
                      id="phone"
                      placeholder="+00 000 3342 3432"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="subject">{{ __('Asunto') }}*</label>
                    <input
                      type="text"
                      for="subject"
                      id="subject"
                      placeholder="{{ __('Asunto desc') }}"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                      required="required"
                    />
                  </div>
                </div>

                <div class="fb">
                  <label class="rc ac" for="message">{{ __('Mensaje') }}*</label>
                  <textarea
                    placeholder="{{ __('Mensaje') }}"
                    rows="4"
                    name="message"
                    id="message"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"
                    required="required"
                  ></textarea>
                </div>

                @foreach ($errors->all() as $error)
                <script>contactpush('{{ $error }}')</script>
                @endforeach
                {!! HCaptcha::display() !!}

                <div class="tc xf">
                  <button type="submit" class="vc rg lk gh ml il hi gi _l">{{ __('Enviar mensaje') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Contact End ===== -->

      <!-- ===== CTA Start ===== -->
      <section class="i pg gh ji">
  <!-- Bg Shape -->
  <img class="h p q" src="images/shape-16.svg" alt="Bg Shape" />

  <div class="bb ye i z-10 ki xn dr">
    <div class="tc uf sn tn un gg">
      <div class="animate_left to/2">
        <h2 class="fk vj zp pr lk ac">
            {{ __('Unete a la revolucion') }}
        </h2>
        <p class="lk">
            {{ __('Unete a la revolucion desc') }}
        </p>
      </div>
      <div class="animate_right bf">
        <a href="#support" class="vc ek kk hh rg ol il cm gi hi">
            {{ __('Contacta a WiDi') }}
        </a>
      </div>
    </div>
  </div>
</section>

      <!-- ===== CTA End ===== -->
    </main>
    <!-- ===== Footer Start ===== -->
    <footer>
  <div class="bb ze ki xn 2xl:ud-px-0">
    <!-- Footer Top -->
    <div class="ji gp">
      <div class="tc uf ap gg fp">
        <div class="animate_top zd/2 to/4">
          <a href="/">
            <img src="images/WiDi.png" width="130px" alt="Logo" class="om" />
            <img src="images/WiDiDark.png" width="130px" alt="Logo" class="xc nm" />
          </a>

          <p class="lc fb">{{ __('titulo') }}</p>

          <ul class="tc wf cg">
            <li>
              <a href="#">
                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_48_1499)">
                    <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z" fill="" />
                  </g>
                  <defs>
                    <clipPath id="clip0_48_1499">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_48_1502)">
                    <path
                      d="M22.162 5.65593C21.3985 5.99362 20.589 6.2154 19.76 6.31393C20.6337 5.79136 21.2877 4.96894 21.6 3.99993C20.78 4.48793 19.881 4.82993 18.944 5.01493C18.3146 4.34151 17.4803 3.89489 16.5709 3.74451C15.6615 3.59413 14.7279 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0771 6.14972C11.6978 6.98983 11.6067 7.93171 11.818 8.82893C10.1551 8.74558 8.52832 8.31345 7.04328 7.56059C5.55823 6.80773 4.24812 5.75098 3.19799 4.45893C2.82628 5.09738 2.63095 5.82315 2.63199 6.56193C2.63199 8.01193 3.36999 9.29293 4.49199 10.0429C3.828 10.022 3.17862 9.84271 2.59799 9.51993V9.57193C2.59819 10.5376 2.93236 11.4735 3.54384 12.221C4.15532 12.9684 5.00647 13.4814 5.95299 13.6729C5.33661 13.84 4.6903 13.8646 4.06299 13.7449C4.32986 14.5762 4.85 15.3031 5.55058 15.824C6.25117 16.345 7.09712 16.6337 7.96999 16.6499C7.10247 17.3313 6.10917 17.8349 5.04687 18.1321C3.98458 18.4293 2.87412 18.5142 1.77899 18.3819C3.69069 19.6114 5.91609 20.2641 8.18899 20.2619C15.882 20.2619 20.089 13.8889 20.089 8.36193C20.089 8.18193 20.084 7.99993 20.076 7.82193C20.8949 7.2301 21.6016 6.49695 22.163 5.65693L22.162 5.65593Z"
                      fill=""
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_48_1502">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="vh ul cl il" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_48_1508)">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_48_1508">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="vd ro tc sf rn un gg vn">
          <div class="animate_top">
            <h4 class="kk wm tj ec">{{ __('Nosotros') }}</h4>

            <ul>
              <li><a href="#" class="sc xl vb">{{ __('Equipo') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Proyectos') }}</a></li>
              <li>
                <a href="#" class="sc xl vb">
                    {{ __('Trabajo') }}
                  <span class="sc ek uj lk nh rg zi _i nc">{{ __('Contratando') }}</span>
                </a>
              </li>
              <li><a href="#" class="sc xl vb">{{ __('Contacto') }}</a></li>
            </ul>
          </div>

          <div class="animate_top">
            <h4 class="kk wm tj ec">{{ __('Servicios') }}</h4>

            <ul>
              <li><a href="#" class="sc xl vb">{{ __('Desarrollo web apps') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Diseño grafico') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Sistemas informaticos') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Experiencia de usuario') }}</a></li>
            </ul>
          </div>

          <div class="animate_top">
            <h4 class="kk wm tj ec">{{ __('Soporte') }}</h4>

            <ul>
              <li><a href="#" class="sc xl vb">{{ __('Grupo') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Media y comunicacion') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Blog') }}</a></li>
              <li><a href="#" class="sc xl vb">{{ __('Soporte tecnico') }}</a></li>
            </ul>
          </div>

          <div class="animate_top">
            <h4 class="kk wm tj ec">Newsletter</h4>
            <p class="ac qe">{{ __('boletin de noticias') }}</p>

            <form action="javascript:void(0)" method="POST">
              <div class="i">
                <input
                id="newsletter"
                  type="text"
                  placeholder="{{ __('Direccion') }}"
                  class="vd sm _g ch pm vk xm rg gm dm dn gi mi"
                />

                <button onclick="newsletterfunct('{{csrf_token()}}')" class="h q fi">
                  <svg class="th vm ul" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_48_1487)">
                      <path
                        d="M3.1175 1.17318L18.5025 9.63484C18.5678 9.67081 18.6223 9.72365 18.6602 9.78786C18.6982 9.85206 18.7182 9.92527 18.7182 9.99984C18.7182 10.0744 18.6982 10.1476 18.6602 10.2118C18.6223 10.276 18.5678 10.3289 18.5025 10.3648L3.1175 18.8265C3.05406 18.8614 2.98262 18.8792 2.91023 18.8781C2.83783 18.8769 2.76698 18.857 2.70465 18.8201C2.64232 18.7833 2.59066 18.7308 2.55478 18.6679C2.51889 18.6051 2.50001 18.5339 2.5 18.4615V1.53818C2.50001 1.46577 2.51889 1.39462 2.55478 1.33174C2.59066 1.26885 2.64232 1.2164 2.70465 1.17956C2.76698 1.14272 2.83783 1.12275 2.91023 1.12163C2.98262 1.12051 3.05406 1.13828 3.1175 1.17318ZM4.16667 10.8332V16.3473L15.7083 9.99984L4.16667 3.65234V9.16651H8.33333V10.8332H4.16667Z"
                        fill=""
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_48_1487">
                        <rect width="20" height="20" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Top -->

    <!-- Footer Bottom -->
    <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
      <div class="animate_top">
        <ul class="tc wf gg">
          <li>
              <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                  <!-- Dropdown toggle button -->
                  <button @mouseover="open = true" class="flex bottom-0 items-center block p-2 rounded-md ">
                      <span><span class='fi fi-{{ __('selected') }}'></span></span>
                  </button>

                  <div x-show="open"
                  x-transition:enter.duration.500ms
                  x-transition:leave.duration.800ms
                  class="mt-2 -mr-1 w-32 bottom-0 origin-top-right absolute right-0 rounded-md shadow-xl">
                      <a href="{{ __('second lang') }}"
                          class="hover:text-white">
                          <span class='fi fi-{{ __('second') }}'></span>
                      </a>
                      <a href="{{ __('third lang') }}"
                          class="hover:text-white">
                          <span class='fi fi-{{ __('third') }}'></span>
                      </a>
                </div>

                  <!-- Dropdown menu -->
              </div>
          </li>
          <li><a href="/policy" class="xl">{{ __('Politica de privacidad') }}</a></li>
          <li><a href="/support" class="xl">{{ __('Soporte') }}</a></li>
        </ul>
      </div>

      <div class="animate_top">
        <p>{{date("Y")}} WiDi Group</p>
      </div>
    </div>
    <!-- Footer Bottom -->
  </div>
</footer>

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button
  class="xc wf xf ie ld vg sr gh tr g sa ta _a"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ 'uc' : scrollTop }"
>
  <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->

    <script>
      //  Pricing Table
      const setup = () => {
        return {
          isNavOpen: false,

          billPlan: 'monthly',

          plans: [
            {
              name: 'Starter',
              price: {
                monthly: 29,
                annually: 29 * 12 - 199,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
              name: 'Growth Plan',
              price: {
                monthly: 59,
                annually: 59 * 12 - 100,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
              name: 'Business',
              price: {
                monthly: 139,
                annually: 139 * 12 - 100,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
          ],
        };
      };
    </script>
  <script defer src="bundle.js"></script></body>
  {!! HCaptcha::script() !!}
</html>
