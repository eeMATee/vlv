<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\vlv/themes/demo/pages/home.htm */
class __TwigTemplate_1adc91a368dee231a44a8ddb94e58d7b97a6bf036111c884f42ac1518c305684 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Header Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
    <header id=\"header\">
        <nav class=\"header__main-nav\">
          <input type=\"checkbox\">
          <div class=\"header__main-nav--hamburger\">
            <!-- Hamburger Lines -->
            <div></div>
          </div>
  
          <div class=\"header__main-nav--menu\">
            <div class=\"\"> <!-- overlay  -->
              <div class=\"\"> <!-- menu  -->
                <ul>
                  <li><a href=\"#\">Home</a></li>
                  <li><a href=\"#\">Villas</a></li>
                  <li><a href=\"#\">Abouts</a></li>
                  <li><a href=\"#\">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
  
        <!-- Logo & Content -->
        <div class=\"header__logo__content\">
          <!-- Logo -->
          <a href=\"#\" class=\"header__logo__content--logo\"><span>V</span>L<span>V</span></a>
      
          <!-- Content -->
          <div class=\"header__logo__content--content\">
            <h1 class=\"header__logo__content--content__title\">Relax Your Soul 22222</h1>
            <p class=\"header__logo__content--content__para\">The team of VLV welcomes you. Start relaxing your soul and enjoy your stay.</p>
            <a href=\"#\" class=\"header__logo__content--content__link\">Discover More</a>
          </div>
        </div>
      </header>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Booking Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"booking-content\">
          <h2 class=\"booking-content__title\">Discover Serenity</h2>
          <p class=\"booking-content__para\">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vell laudantium ullam sint earum! Consectetur illum, quisquam unde rerum sed inventore.
          </p>
  
          <!-- Icons -->
          <div class=\"booking-content__icons\">
  
            <div class=\"booking-content__icons--weather\">
              <i class=\"far fa-sun\"></i>
              <p>24<sup>&#8451;</sup></p>
            </div>
  
            <div class=\"booking-content__icons--time\">
              <i class=\"far fa-clock\"></i>
              <p>17:30</p>
            </div>
  
          </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Booking Date Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"booking-date\">
          <div class=\"booking-date__schedule\">
            <div class=\"booking-date__schedule--arrival\">
              <!-- Arrival -->
              <h5>Arrival</h5>
              <div class=\"\">
                <p>May</p>
                <p>09</p>
                <p>&#65088;</p>
              </div>
            </div>
            <!-- Depature -->
            <div class=\"booking-date__schedule--departure\">
              <h5>Departure</h5>
              <div class=\"\">
                <p>June</p>
                <p>15</p>
                <p>&#65088;</p>
              </div>
            </div>
            <!-- Guests -->
            <div class=\"booking-date__schedule--guests\">
              <h5>Guestes</h5>
              <div class=\"\">
                <p>&#65087;</p>
                <p>01</p>
                <p>&#65088;</p>
              </div>
            </div>
          </div>
  
          <!-- Contact -->
          <div class=\"booking-date__contact\">
            <a href=\"#\" class=\"booking-date__contact--link\">Make a Reservation</a>
            <p>Reservation Hotline</p>
            <p>0700 880 995</p>
            <p>Reservation Assistance Available 24 Hours 7 Days a Week</p>
          </div>
          
  
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Villas Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"villas\">
  
          <!-- Villa 1 -->
          <div class=\"villas villas__villa-1\">
            <h2 class=\"villas__villa-1--title\">Standard Villa</h2>
            <p class=\"villas__villa-1--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"\" class=\"villas__villa-1--link\">Starting at \$200.</a>
          </div>
  
          <!-- Villa 2 -->
          <div class=\"villas villas__villa-2\">
            <h2 class=\"villas__villa-2--title\">Extra Villa</h2>
            <p class=\"villas__villa-2--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-2--link\">Starting at \$250.</a>
          </div>
  
          <!-- Villa 3 -->
          <div class=\"villas villas__villa-3\">
            <h2 class=\"villas__villa-3--title\">Infinity Villa</h2>
            <p class=\"villas__villa-3--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-3--link\">Starting at \$300.</a>
          </div>
  
          <!-- Villa 4 -->
          <div class=\"villas villas__villa-4\">
            <h2 class=\"villas__villa-4--title\">Extreme Villa</h2>
            <p class=\"villas__villa-4--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-4--link\">Starting at \$350.</a>
          </div>
  
          <!-- Villa 5 -->
          <div class=\"villas villas__villa-5\">
            <h2 class=\"villas__villa-5--title\">Galactica Villa</h2>
            <p class=\"villas__villa-5--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-5--link\">Starting at \$500.</a>
          </div>
  
          <!-- Villa 6 -->
          <div class=\"villas villas__villa-6\">
            <h2 class=\"villas__villa-6--title\">Uber Villa</h2>
            <p class=\"villas__villa-6--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-6--link\">Starting at \$600.</a>
          </div>
  
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Motto Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"motto\">
        <div class=\"motto__content\">
          <h2 class=\"motto__content--title\">We Reimaginde Luxury</h2>
          <p class=\"motto__content--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dolorem tempora dolore modi quibusdam ea assumenda officiis debitis maxime fugiat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Events Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"events-content\">
        <!-- Event 1 -->
        <div class=\"events-content__event-1\">
          <h2 class=\"events-content__event-1--title\">
            Beach Party
          </h2>
          <p class=\"events-content__event-1--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
  
        <!-- Event 2 -->
        <div class=\"events-content__event-2\">
          <h2 class=\"events-content__event-2--title\">
            Cultural Events
          </h2>
          <p class=\"events-content__event-2--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Events Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"events-text\">
        <h2 class=\"events-text__title\">Events</h2>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Gallery Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"gallery-text\">
        <div class=\"gallery-text__content\">
          <h2 class=\"gallery-text__content--title\">Gallery</h2>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Gallery Carousel Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"gallery-carousel\">
        <!-- Button Left -->
        <div class=\"gallery-carousel__btn gallery-carousel__btn--left hidden\">
          <i class=\"fas fa-caret-left\"></i>
        </div>
  
        <!-- Image Container -->
        <div class=\"gallery-carousel__container\">
          <ul class=\"gallery-carousel__container--list\">
            <li class=\"gallery-carousel__container--list__item current--img\">
              <img src=\"./img/Gallery/gallery-1.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-2.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-3.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-4.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-5.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-6.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-7.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-8.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-9.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-10.jpg\" alt=\"villa view\">
            </li>
  
          </ul>
        </div>
  
        <!-- Button Right -->
        <div class=\"gallery-carousel__btn gallery-carousel__btn--right\">
          <i class=\"fas fa-caret-right\"></i>
        </div>
  
        <!-- Carousel Nav -->
        <div class=\"gallery-carousel__nav\">
          <button class=\"gallery-carousel__nav--btn current--img\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
        </div>
  
      </section>
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Features Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"features-content\">
        <!-- Feature 1 -->
        <div class=\"features-content__feature-1\">
          <h2 class=\"features-content__feature-1--title\">
            Beach Party
          </h2>
          <p class=\"features-content__feature-1--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
  
        <!-- Feature 2 -->
        <div class=\"features-content__feature-2\">
          <h2 class=\"features-content__feature-2--title\">
            Cultural features
          </h2>
          <p class=\"features-content__feature-2--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Features Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"features-text\">
        <h2 class=\"features-text__title\">Features</h2>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Testimonial Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"testimonials\">
  
        <!-- Testimonial 1 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 2 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 3 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 4 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 5 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 6 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Footer Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <footer id=\"footer\">
        <p>All Rights Reserved. &copy; VLV</p>
        <div class=\"footer__social\">
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-facebook-f\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-twitter\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-linkedin-in\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-instagram\"></i>
          </a>
        </div>
      </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vlv/themes/demo/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Header Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
    <header id=\"header\">
        <nav class=\"header__main-nav\">
          <input type=\"checkbox\">
          <div class=\"header__main-nav--hamburger\">
            <!-- Hamburger Lines -->
            <div></div>
          </div>
  
          <div class=\"header__main-nav--menu\">
            <div class=\"\"> <!-- overlay  -->
              <div class=\"\"> <!-- menu  -->
                <ul>
                  <li><a href=\"#\">Home</a></li>
                  <li><a href=\"#\">Villas</a></li>
                  <li><a href=\"#\">Abouts</a></li>
                  <li><a href=\"#\">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
  
        <!-- Logo & Content -->
        <div class=\"header__logo__content\">
          <!-- Logo -->
          <a href=\"#\" class=\"header__logo__content--logo\"><span>V</span>L<span>V</span></a>
      
          <!-- Content -->
          <div class=\"header__logo__content--content\">
            <h1 class=\"header__logo__content--content__title\">Relax Your Soul 22222</h1>
            <p class=\"header__logo__content--content__para\">The team of VLV welcomes you. Start relaxing your soul and enjoy your stay.</p>
            <a href=\"#\" class=\"header__logo__content--content__link\">Discover More</a>
          </div>
        </div>
      </header>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Booking Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"booking-content\">
          <h2 class=\"booking-content__title\">Discover Serenity</h2>
          <p class=\"booking-content__para\">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vell laudantium ullam sint earum! Consectetur illum, quisquam unde rerum sed inventore.
          </p>
  
          <!-- Icons -->
          <div class=\"booking-content__icons\">
  
            <div class=\"booking-content__icons--weather\">
              <i class=\"far fa-sun\"></i>
              <p>24<sup>&#8451;</sup></p>
            </div>
  
            <div class=\"booking-content__icons--time\">
              <i class=\"far fa-clock\"></i>
              <p>17:30</p>
            </div>
  
          </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Booking Date Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"booking-date\">
          <div class=\"booking-date__schedule\">
            <div class=\"booking-date__schedule--arrival\">
              <!-- Arrival -->
              <h5>Arrival</h5>
              <div class=\"\">
                <p>May</p>
                <p>09</p>
                <p>&#65088;</p>
              </div>
            </div>
            <!-- Depature -->
            <div class=\"booking-date__schedule--departure\">
              <h5>Departure</h5>
              <div class=\"\">
                <p>June</p>
                <p>15</p>
                <p>&#65088;</p>
              </div>
            </div>
            <!-- Guests -->
            <div class=\"booking-date__schedule--guests\">
              <h5>Guestes</h5>
              <div class=\"\">
                <p>&#65087;</p>
                <p>01</p>
                <p>&#65088;</p>
              </div>
            </div>
          </div>
  
          <!-- Contact -->
          <div class=\"booking-date__contact\">
            <a href=\"#\" class=\"booking-date__contact--link\">Make a Reservation</a>
            <p>Reservation Hotline</p>
            <p>0700 880 995</p>
            <p>Reservation Assistance Available 24 Hours 7 Days a Week</p>
          </div>
          
  
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Villas Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"villas\">
  
          <!-- Villa 1 -->
          <div class=\"villas villas__villa-1\">
            <h2 class=\"villas__villa-1--title\">Standard Villa</h2>
            <p class=\"villas__villa-1--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"\" class=\"villas__villa-1--link\">Starting at \$200.</a>
          </div>
  
          <!-- Villa 2 -->
          <div class=\"villas villas__villa-2\">
            <h2 class=\"villas__villa-2--title\">Extra Villa</h2>
            <p class=\"villas__villa-2--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-2--link\">Starting at \$250.</a>
          </div>
  
          <!-- Villa 3 -->
          <div class=\"villas villas__villa-3\">
            <h2 class=\"villas__villa-3--title\">Infinity Villa</h2>
            <p class=\"villas__villa-3--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-3--link\">Starting at \$300.</a>
          </div>
  
          <!-- Villa 4 -->
          <div class=\"villas villas__villa-4\">
            <h2 class=\"villas__villa-4--title\">Extreme Villa</h2>
            <p class=\"villas__villa-4--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-4--link\">Starting at \$350.</a>
          </div>
  
          <!-- Villa 5 -->
          <div class=\"villas villas__villa-5\">
            <h2 class=\"villas__villa-5--title\">Galactica Villa</h2>
            <p class=\"villas__villa-5--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-5--link\">Starting at \$500.</a>
          </div>
  
          <!-- Villa 6 -->
          <div class=\"villas villas__villa-6\">
            <h2 class=\"villas__villa-6--title\">Uber Villa</h2>
            <p class=\"villas__villa-6--para\">Lorem ipsum dolor, sit amet consectetur   adipisicing elit. Qui, sed! X
            </p>
            <a href=\"#\" class=\"villas__villa-6--link\">Starting at \$600.</a>
          </div>
  
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Motto Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"motto\">
        <div class=\"motto__content\">
          <h2 class=\"motto__content--title\">We Reimaginde Luxury</h2>
          <p class=\"motto__content--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dolorem tempora dolore modi quibusdam ea assumenda officiis debitis maxime fugiat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Events Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"events-content\">
        <!-- Event 1 -->
        <div class=\"events-content__event-1\">
          <h2 class=\"events-content__event-1--title\">
            Beach Party
          </h2>
          <p class=\"events-content__event-1--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
  
        <!-- Event 2 -->
        <div class=\"events-content__event-2\">
          <h2 class=\"events-content__event-2--title\">
            Cultural Events
          </h2>
          <p class=\"events-content__event-2--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Events Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"events-text\">
        <h2 class=\"events-text__title\">Events</h2>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Gallery Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"gallery-text\">
        <div class=\"gallery-text__content\">
          <h2 class=\"gallery-text__content--title\">Gallery</h2>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Gallery Carousel Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"gallery-carousel\">
        <!-- Button Left -->
        <div class=\"gallery-carousel__btn gallery-carousel__btn--left hidden\">
          <i class=\"fas fa-caret-left\"></i>
        </div>
  
        <!-- Image Container -->
        <div class=\"gallery-carousel__container\">
          <ul class=\"gallery-carousel__container--list\">
            <li class=\"gallery-carousel__container--list__item current--img\">
              <img src=\"./img/Gallery/gallery-1.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-2.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-3.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-4.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-5.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-6.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-7.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-8.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-9.jpg\" alt=\"villa view\">
            </li>
            <li class=\"gallery-carousel__container--list__item\">
              <img src=\"./img/Gallery/gallery-10.jpg\" alt=\"villa view\">
            </li>
  
          </ul>
        </div>
  
        <!-- Button Right -->
        <div class=\"gallery-carousel__btn gallery-carousel__btn--right\">
          <i class=\"fas fa-caret-right\"></i>
        </div>
  
        <!-- Carousel Nav -->
        <div class=\"gallery-carousel__nav\">
          <button class=\"gallery-carousel__nav--btn current--img\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
          <button class=\"gallery-carousel__nav--btn\"></button>
        </div>
  
      </section>
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Features Content Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"features-content\">
        <!-- Feature 1 -->
        <div class=\"features-content__feature-1\">
          <h2 class=\"features-content__feature-1--title\">
            Beach Party
          </h2>
          <p class=\"features-content__feature-1--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
  
        <!-- Feature 2 -->
        <div class=\"features-content__feature-2\">
          <h2 class=\"features-content__feature-2--title\">
            Cultural features
          </h2>
          <p class=\"features-content__feature-2--para\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem facilis nemo iusto quibusdam et placeat.</p>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Features Text Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"features-text\">
        <h2 class=\"features-text__title\">Features</h2>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Testimonial Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <section id=\"testimonials\">
  
        <!-- Testimonial 1 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 2 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 3 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 4 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 5 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
  
        <!-- Testimonial 6 -->
        <div class=\"testimonials__card\">
          <!-- Front -->
          <div class=\"testimonials__card--front\">
            <h2>Clarke Bozena</h2>
          </div>
          <!-- Back -->
          <div class=\"testimonials__card--back\">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, tenetur?
            </p>
          </div>
        </div>
      </section>
  
  
      <!-- *-+*-+*-+*-+*-+*-+*-+*-+||| Footer Section |||-+*-+*-+*-+*-+*-+*-+*-+*-+ -->
      <footer id=\"footer\">
        <p>All Rights Reserved. &copy; VLV</p>
        <div class=\"footer__social\">
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-facebook-f\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-twitter\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-linkedin-in\"></i>
          </a>
  
          <a href=\"#\" class=\"footer__social--link\">
            <i class=\"fab fa-instagram\"></i>
          </a>
        </div>
      </footer>", "C:\\xampp\\htdocs\\vlv/themes/demo/pages/home.htm", "");
    }
}
