<?php
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
$current_path = trim($_SERVER['REQUEST_URI'], '/');
?>

<!-- Header
============================================= -->
<header id="header" class="transparent-header z-9 header-size-md ignore-slider">
    <div class="container-fluid">
        <div class="header-row justify-content-between">

            <div class="primary-menu-trigger">
                <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                    <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                </button>
            </div>

            <!-- Hero content -->
            <div class="order-lg-2 me-lg-0 position-relative z-5 p-0 pt-4 center">

                <!-- Main title -->
                <!-- Canvas: display-* for big typography, fw-light for thin weight -->
                <h1 class="mb-0 fw-light wedding-title" data-animate="fadeInUp"
                    style="font-family: 'Bodoni Moda', Georgia, serif; line-height: 1; text-transform: uppercase;">
                    <span class="wedding-name text-contrast-900">Cata</span>
                    <em class="wedding-amp" style="color: var(--cnvs-themecolor);">&amp;</em><br>
                    <span class="wedding-name text-contrast-900">Camilo</span>
                </h1>

                <!-- Subtitle -->
                <p class="mt-3 mb-0 text-contrast-600 fw-semibold text-smaller ls-5" data-animate="fadeInUp" data-delay="150"
                style="letter-spacing: 0.45em;">
                    N O S &nbsp; C A S A M O S!
                </p>

                <!-- Thin gold rule -->
                <div class="d-flex align-items-center justify-content-center gap-2 mt-4 mb-2" aria-hidden="true">
                    <span class="flex-shrink-0 op-05" style="width:40px; height:1px; background:var(--cnvs-themecolor); display:block;"></span>
                    <svg width="7" height="7" viewBox="0 0 7 7"><circle cx="3.5" cy="3.5" r="3" stroke="var(--cnvs-themecolor)" stroke-width="0.8" fill="none"/></svg>
                    <span class="flex-shrink-0 op-05" style="width:40px; height:1px; background:var(--cnvs-themecolor); display:block;"></span>
                </div>

            </div>

            <div class="header-misc order-lg-1 col-lg-2">
                
            </div>

            <div class="header-misc order-lg-3 col-lg-2 me-0 justify-content-end">

            </div>

        </div>
    </div>

    <div id="header-wrap" class="border-0">
        <div class="container">
            <div class="header-row justify-content-center">
                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item <?php echo $current_page == '' ? 'current' : ''; ?>"><a class="menu-link" href="/"><div>Bienvenidos</div></a></li>
                        <li class="menu-item <?php echo $current_page == 'nuestra-historia' ? 'current' : ''; ?>"><a class="menu-link" href="/nuestra-historia"><div>Nuestra Historia</div></a></li>
                        <li class="menu-item <?php echo $current_page == 'la-boda' ? 'current' : ''; ?>"><a class="menu-link" href="/la-boda"><div>La Boda</div></a></li>
                        <li class="menu-item <?php echo $current_page == 'planea-tu-visita' ? 'current' : ''; ?>"><a class="menu-link" href="/planea-tu-visita"><div>Planea Tu Visita</div></a></li>
                        <li class="menu-item"><a href="/rsvp" class="menu-link button button-border button-circle border-color">R s v p</a>
						</li>
                    </ul>

                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->