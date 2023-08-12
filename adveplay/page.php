<?php get_header()?>

<?php if ( is_front_page() ): ?>

<section class="main-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/background.webp)">
    <div class="main-block-text">
        <span class="main-subtitle">Adveplay</span>
        <h1 class="main-title"><?php echo the_title() ?></h1>
        <a href="#contact" class="down-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg)"></a>
    </div>
</section>
<section class="experts-block">
    <div class="container-block">
        <div class="experts-block-content">
            <h2 id="about" class="content-title">Experts</h2>
            <span class="experts-block-subtitle">Leading Monetization Models</span>
            <p class="experts-block-description">
                We are a Digital Marketing, Online Advertising, Applications, Management and Development
                of Online Content and Traffic Management Company
            </p>
            <!--<img data-speed="5" src="<?php echo get_template_directory_uri() ?>/img/elements.svg" class="parallax-desc" alt="elements">-->
        </div>
    </div>
</section>
<section class="about-block">
    <div class="container-block">
        <div class="title-block">
            <h2 id="what_we_do" class="content-title">What we do</h2>
        </div>
        <div class="about-block-row">
            <div class="about-block-column">
                <div class="about-block-icon"></div>
                <span class="about-block-title">Media Buying</span>
                <p class="about-block-description">
                    Experience combined with an ambitious
                    development team, enabled the creation
                    of innovative technologies that allow us to
                    communicate directly with the target
                    audience segments depending on the
                    partner campaign in question
                    or geographic location.
                </p>
            </div>
            <div class="about-block-column">
                <div class="about-block-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/media-buying.webp" width="430" height="307" alt="Media Buying">
                </div>
            </div>
        </div>
        <div class="about-block-row">
            <div class="about-block-column">
                <div class="about-block-img publishing">
                    <img src="<?php echo get_template_directory_uri() ?>/img/publishing.webp" width="417" height="310" alt="Publishing">
                </div>
            </div>
            <div class="about-block-column">
                <div class="about-block-icon publishing"></div>
                <span class="about-block-title">Publishing, Mobile and Social Media</span>
                <p class="about-block-description">
                    We have implemented our global digital
                    presence over the years and we are market
                    leaders in promotion, branding recognition
                    and acquisition of new customers for their
                    partner brands both national and international,
                    with our growing network of traffic and
                    social media presence.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="traffic-block">
    <div class="container-block">
        <div class="title-block">
            <h2 class="content-title">Our traffic sources</h2>
        </div>
        <div class="traffic-cards">
            <div class="traffic-card-row">
                <div class="traffic-card-col">
                    <div class="traffic-card-img">
                        <div class="traffic-card-icon google"></div>
                    </div>
                    <div class="traffic-card-text">
                        <span>Google Ads</span>
                        <p>
                            We help your business to buy ads
                            in the most popular traffic source
                        </p>
                    </div>
                </div>
                <div class="traffic-card-col">
                    <div class="traffic-card-img">
                        <div class="traffic-card-icon facebook"></div>
                    </div>
                    <div class="traffic-card-text">
                        <span>Facebook</span>
                        <p>
                            The easiest way to reach
                            the audiences
                        </p>
                    </div>
                </div>
            </div>
            <div class="traffic-card-row">
                <div class="traffic-card-col">
                    <div class="traffic-card-img">
                        <div class="traffic-card-icon seo"></div>
                    </div>
                    <div class="traffic-card-text">
                        <span>SEO</span>
                        <p>
                            Attract more of the right
                            customers to your site!
                        </p>
                    </div>
                </div>
                <div class="traffic-card-col">
                    <div class="traffic-card-img">
                        <div class="traffic-card-icon aso"></div>
                    </div>
                    <div class="traffic-card-text">
                        <span>ASO</span>
                        <p>
                            We help to increase app visibility
                            and conversion rate
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-block">
    <div class="container-block">
        <div class="contact-title">
            <a id="contact" href="mailto:info@adveplay.com">info@adveplay.com</a>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer()?>

admin
M8CG541zSy9mVDzn





