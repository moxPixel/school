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

/* components/_main-header.html.twig */
class __TwigTemplate_e5412cc415b78da21896edfdab63f82a076a0c7a3706b1e4cad1eb360f34bb35 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_main-header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_main-header.html.twig"));

        // line 1
        echo "<div id=\"kt_header\" class=\"header\" data-kt-sticky=\"true\" data-kt-sticky-name=\"header\"
    data-kt-sticky-offset=\"{default: '200px', lg: '300px'}\">
    <!--begin::Container-->
    <div class=\"container d-flex align-items-stretch justify-content-between\">
        <!--begin::Left-->
        <div class=\"d-flex align-items-center\">
            <!--begin::Logo-->
            <!--begin::Message-->
            <button class=\"btn btn-icon btn-sm btn-active-bg-accent ms-1 ms-lg-6\" id=\"kt_drawer_chat_toggle\">
                <!--begin::Svg Icon | path: icons/duotone/Communication/Chat6.svg-->
                <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                        version=\"1.1\">
                        <path opacity=\"0.3\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z\"
                            fill=\"black\" />
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z\"
                            fill=\"black\" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Message-->
            <!--end::Logo-->
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class=\"d-flex align-items-center\">
            <!--begin::User-->
            <div class=\"ms-1 ms-lg-6\">
                <!--begin::Toggle-->
                <div class=\"btn btn-icon btn-sm btn-active-bg-accent\" data-kt-menu-trigger=\"click\"
                    data-kt-menu-placement=\"bottom-end\" id=\"kt_header_user_menu_toggle\">
                    <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                    <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                            height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <polygon points=\"0 0 24 0 24 24 0 24\" />
                                <path
                                    d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\"
                                    fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
                                <path
                                    d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\"
                                    fill=\"#000000\" fill-rule=\"nonzero\" />
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--begin::Menu-->
                <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-300px\"
                    data-kt-menu=\"true\">
                    <div
                        class=\"head-notif menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top\">
                        <div class=\"symbol symbol-45px mx-5 py-5\">
                            <span class=\"symbol-label bg-primary align-items-end\">
                              ";
        // line 59
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "sexe", [], "any", false, false, false, 59), 0))) {
            // line 60
            echo "                                <img alt=\"Logo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/svg/avatars/011-boy-5.svg"), "html", null, true);
            echo "\"
                                    class=\"mh-35px\" />
                              ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "sexe", [], "any", false, false, false, 62), 1))) {
            // line 63
            echo "                                <img alt=\"Logo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/svg/avatars/003-girl-1.svg"), "html", null, true);
            echo "\"
                                    class=\"mh-35px\" />
                              ";
        }
        // line 66
        echo "                            </span>
                        </div>
                        <div class=\"\">
                            <span class=\"text-white fw-bolder fs-4\">
                                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "fullname", [], "any", false, false, false, 70), "html", null, true);
        echo "
                            </span>
                            <span class=\"text-white fw-bold fs-7 d-block\">
                                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "role", [], "any", false, false, false, 73), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>
                    <!--begin::Row-->
                    <div class=\"row row-cols-2 g-0\">
                        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_documents");
        echo "\"
                            class=\"border-bottom border-end text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"16\" height=\"16\"
                                    viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M3.994 1c-1.258.015-2.179-.029-2.932.387a1.878 1.878 0 0 0-.84.996C.058 2.821 0 3.343 0 4v8c0 .658.058 1.179.223 1.617.164.439.463.79.84.998.526.29 1.188.342 1.937.36v-1.014c-.666-.032-1.204-.085-1.453-.223-.184-.1-.29-.212-.387-.472C1.063 13.006 1 12.592 1 12V4c0-.592.063-1.006.16-1.266.098-.26.203-.371.387-.472.367-.203 1.195-.247 2.459-.262h2.53l2.02 2h3.436c1.264.015 2.092.06 2.46.262.183.1.288.212.386.472.098.26.162.674.162 1.266v6c0 .592-.063 1.006-.16 1.266-.098.26-.203.371-.387.472-.104.057-.273.093-.453.127V5H4v11h10v-1.088c.34-.053.654-.14.937-.297a1.88 1.88 0 0 0 .838-.998c.165-.438.225-.96.225-1.617V6c0-.658-.06-1.179-.225-1.617a1.88 1.88 0 0 0-.837-.998c-.753-.416-1.674-.37-2.932-.385H8.967L6.945 1H3.996zM5 6h8v9H5zm1.008 1v1h6.012V7zm0 2v1h6.012V9zM6 11v1h3v-1z\"
                                        fill=\"gray\" font-family=\"sans-serif\" font-weight=\"400\" overflow=\"visible\"
                                        style=\"line-height:normal;font-variant-ligatures:none;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;shape-padding:0;isolation:auto;mix-blend-mode:normal;marker:none\"
                                        white-space=\"normal\" color=\"#000\" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Documents
                            </span>
                        </a>
                        <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_params");
        echo "\"
                            class=\"col border-bottom text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                        <path
                                            d=\"M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z\"
                                            fill=\"#000000\" />
                                        <path
                                            d=\"M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z\"
                                            fill=\"#000000\" opacity=\"0.3\" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Paramétres
                            </span>
                        </a>
                        <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\"
                            class=\"col text-center border-end py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"16\" height=\"16\"
                                    viewBox=\"0 0 16 16\">
                                    <path fill=\"#444444\" d=\"M8.1 3.1v0 0z\"></path>
                                    <path fill=\"#444444\" d=\"M15.1 3.2v0-0.2z\"></path>
                                    <path fill=\"#444444\"
                                        d=\"M9.9 1.5c-1.3 0-2 0.4-2.4 0.8-0.4-0.4-1.1-0.8-2.4-0.8-3.5 0-5.1 2-5.1 2v0 0 10.9l6.5-0.9c0 0 0.2 0.4 0.3 0.5h1.3c0.1-0.1 0.3-0.5 0.3-0.5l6.5 0.9v-10.9c0.1 0-1.4-2-5-2zM7 12c-0.6-0.2-1.3-0.3-2.3-0.4-0.1 0-0.1 0-0.2 0-1.4 0-2.6 0.4-3.5 0.7v-8.7c0.5-0.4 1.8-1.5 4.1-1.5 1.7 0 1.9 0.9 1.9 1 0 0 0 0 0 0v8.9zM14 12.3c-1-0.4-2.1-0.7-3.5-0.7-0.1 0-0.2 0-0.2 0-1 0-1.3 0.2-2.3 0.4v-8.9c0 0 0 0 0 0 0-0.2 0.2-1 1.9-1 2.3 0 4 1 4 1.5v8.7z\">
                                    </path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Cours
                            </span>
                        </a>
                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"
                            class=\"col text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Sign-out.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                        <path
                                            d=\"M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z\"
                                            fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.5\"
                                            transform=\"translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000)\" />
                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                            transform=\"translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000)\"
                                            x=\"13\" y=\"6\" width=\"2\" height=\"12\" rx=\"1\" />
                                        <path
                                            d=\"M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z\"
                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                            transform=\"translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000)\" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Déconnexion
                            </span>
                        </a>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Menu-->
                <span class=\"text-end\">
                    ";
        // line 171
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "checking", [], "any", false, false, false, 171), 1))) {
            // line 172
            echo "                    <span class=\"fw-bolder text-primary\">
                        Présent
                    </span>
                    ";
        }
        // line 176
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "checking", [], "any", false, false, false, 176), 0))) {
            // line 177
            echo "                    <span id=\"isReadCheck\" class=\"fw-bolder text-danger\">
                        Absent
                    </span>
                    ";
        }
        // line 181
        echo "                </span>
            </div>
            <!--end::User-->
            <!--begin::Notifications-->
            <div class=\"ms-1 ms-lg-6\">
                <!--begin::Dropdown-->
                ";
        // line 187
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "notifications", [], "any", false, false, false, 187)), 0))) {
            // line 188
            echo "                <button class=\"btn btn-icon btn-sm btn-light-danger fw-bolder pulse pulse-danger\"
                    data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\" id=\"kt_activities_toggle\">
                    <span class=\"position-absolute fs-6\">
                        ";
            // line 191
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "notifications", [], "any", false, false, false, 191)), "html", null, true);
            echo "
                    </span>
                    <span class=\"pulse-ring\"></span>
                </button>
                ";
        }
        // line 196
        echo "                ";
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "notifications", [], "any", false, false, false, 196)), 0))) {
            // line 197
            echo "                <button class=\"btn btn-icon btn-sm btn-light-success fw-bolder pulse pulse-success\"
                    data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\" id=\"kt_activities_toggle\">
                    <span class=\"position-absolute fs-6\">
                        ";
            // line 200
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "notifications", [], "any", false, false, false, 200)), "html", null, true);
            echo "
                    </span>
                    <span class=\"pulse-ring\"></span>
                </button>
                ";
        }
        // line 205
        echo "                <!--begin::Menu-->
                <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded fw-bold menu-title-gray-800 menu-hover-bg menu-state-title-primary w-250px w-md-300px\"
                    data-kt-menu=\"true\">
                    <div class=\"menu-item mx-3\">
                        <div class=\"menu-content fs-6 text-dark fw-bolder py-6\">
                            ";
        // line 210
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "user", [], "any", false, false, false, 210), "notifications", [], "any", false, false, false, 210)), "html", null, true);
        echo "
                            Notifications
                        </div>
                    </div>
                    <div class=\"separator mb-3\"></div>
                    <div class=\"menu-item mx-3\">
                        <div class=\"row\">
                            ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "notifications", [], "any", false, false, false, 217)));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 218
            echo "                            <div class=\"col-md-11\">
                                <a href=\"#\" class=\"menu-link px-4 py-3\">
                                    <div class=\"symbol symbol-35px\">
                                        <span class=\"symbol-label bg-light-info\">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
                                            <span class=\"svg-icon svg-icon-3 svg-icon-info\">
                                                <img width=\"20\" src=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/notifications.png"), "html", null, true);
            echo "\"
                                                    alt=\"\"></span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class=\"ps-4\">
                                        <span class=\"menu-title fw-bold mb-1\">
                                            ";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "message", [], "any", false, false, false, 231), "html", null, true);
            echo "
                                        </span>
                                        <span class=\"text-primary fw-bold d-block fs-7\">
                                            ";
            // line 234
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "createdAt", [], "any", false, false, false, 234), "d-M-y"), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class=\"col-md-1\">
                                <a
                                    href=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_clear", ["id" => twig_get_attribute($this->env, $this->source, $context["notif"], "id", [], "any", false, false, false, 242), "redirect" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "request", [], "any", false, false, false, 242), "requestUri", [], "any", false, false, false, 242)]), "html", null, true);
            echo "\">
                                    <i class=\"mt-4 close-notif fa fa-trash\"></i>
                                </a>
                            </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                        </div>
                    </div>
                    <div class=\"separator mt-3\"></div>
                    <div class=\"menu-item mx-2\">
                        <div class=\"menu-content py-5\">
                            <a href=\"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\" class=\"btn btn-primary fw-bolder me-2 px-5\">
                                Actualisé
                            </a>
                            ";
        // line 256
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "user", [], "any", false, false, false, 256), "notifications", [], "any", false, false, false, 256)), 0))) {
            // line 257
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_clear_all");
            echo "\" class=\"btn btn-light fw-bolder px-5\">
                                Tout effacer
                            </a>
                            ";
        }
        // line 261
        echo "                        </div>
                    </div>
                </div>
                <!--end::Menu-->
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->
            <!--begin::Aside Toggler-->
            <!--end::Aside Toggler-->
            <!--begin::Sidebar Toggler-->
            <button class=\"btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6\" id=\"kt_sidebar_toggler\">
                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                        height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                            <rect fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                            <path
                                d=\"M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z\"
                                fill=\"#000000\" opacity=\"0.3\" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Sidebar Toggler-->
        </div>
        <!--end::Right-->
    </div>
    <!--end::Container-->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_main-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 261,  384 => 257,  382 => 256,  376 => 253,  369 => 248,  357 => 242,  346 => 234,  340 => 231,  330 => 224,  322 => 218,  318 => 217,  308 => 210,  301 => 205,  293 => 200,  288 => 197,  285 => 196,  277 => 191,  272 => 188,  270 => 187,  262 => 181,  256 => 177,  253 => 176,  247 => 172,  245 => 171,  210 => 139,  188 => 120,  163 => 98,  141 => 79,  132 => 73,  126 => 70,  120 => 66,  113 => 63,  111 => 62,  105 => 60,  103 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"kt_header\" class=\"header\" data-kt-sticky=\"true\" data-kt-sticky-name=\"header\"
    data-kt-sticky-offset=\"{default: '200px', lg: '300px'}\">
    <!--begin::Container-->
    <div class=\"container d-flex align-items-stretch justify-content-between\">
        <!--begin::Left-->
        <div class=\"d-flex align-items-center\">
            <!--begin::Logo-->
            <!--begin::Message-->
            <button class=\"btn btn-icon btn-sm btn-active-bg-accent ms-1 ms-lg-6\" id=\"kt_drawer_chat_toggle\">
                <!--begin::Svg Icon | path: icons/duotone/Communication/Chat6.svg-->
                <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                        version=\"1.1\">
                        <path opacity=\"0.3\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z\"
                            fill=\"black\" />
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z\"
                            fill=\"black\" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Message-->
            <!--end::Logo-->
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class=\"d-flex align-items-center\">
            <!--begin::User-->
            <div class=\"ms-1 ms-lg-6\">
                <!--begin::Toggle-->
                <div class=\"btn btn-icon btn-sm btn-active-bg-accent\" data-kt-menu-trigger=\"click\"
                    data-kt-menu-placement=\"bottom-end\" id=\"kt_header_user_menu_toggle\">
                    <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                    <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                            height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <polygon points=\"0 0 24 0 24 24 0 24\" />
                                <path
                                    d=\"M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z\"
                                    fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" />
                                <path
                                    d=\"M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z\"
                                    fill=\"#000000\" fill-rule=\"nonzero\" />
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--begin::Menu-->
                <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-300px\"
                    data-kt-menu=\"true\">
                    <div
                        class=\"head-notif menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top\">
                        <div class=\"symbol symbol-45px mx-5 py-5\">
                            <span class=\"symbol-label bg-primary align-items-end\">
                              {% if app.user.sexe == 0 %}
                                <img alt=\"Logo\" src=\"{{ asset('assets/media/svg/avatars/011-boy-5.svg') }}\"
                                    class=\"mh-35px\" />
                              {% elseif app.user.sexe == 1 %}
                                <img alt=\"Logo\" src=\"{{ asset('assets/media/svg/avatars/003-girl-1.svg') }}\"
                                    class=\"mh-35px\" />
                              {% endif %}
                            </span>
                        </div>
                        <div class=\"\">
                            <span class=\"text-white fw-bolder fs-4\">
                                {{ app.user.fullname }}
                            </span>
                            <span class=\"text-white fw-bold fs-7 d-block\">
                                {{ app.user.role }}
                            </span>
                        </div>
                    </div>
                    <!--begin::Row-->
                    <div class=\"row row-cols-2 g-0\">
                        <a href=\"{{ path('user_documents') }}\"
                            class=\"border-bottom border-end text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"16\" height=\"16\"
                                    viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M3.994 1c-1.258.015-2.179-.029-2.932.387a1.878 1.878 0 0 0-.84.996C.058 2.821 0 3.343 0 4v8c0 .658.058 1.179.223 1.617.164.439.463.79.84.998.526.29 1.188.342 1.937.36v-1.014c-.666-.032-1.204-.085-1.453-.223-.184-.1-.29-.212-.387-.472C1.063 13.006 1 12.592 1 12V4c0-.592.063-1.006.16-1.266.098-.26.203-.371.387-.472.367-.203 1.195-.247 2.459-.262h2.53l2.02 2h3.436c1.264.015 2.092.06 2.46.262.183.1.288.212.386.472.098.26.162.674.162 1.266v6c0 .592-.063 1.006-.16 1.266-.098.26-.203.371-.387.472-.104.057-.273.093-.453.127V5H4v11h10v-1.088c.34-.053.654-.14.937-.297a1.88 1.88 0 0 0 .838-.998c.165-.438.225-.96.225-1.617V6c0-.658-.06-1.179-.225-1.617a1.88 1.88 0 0 0-.837-.998c-.753-.416-1.674-.37-2.932-.385H8.967L6.945 1H3.996zM5 6h8v9H5zm1.008 1v1h6.012V7zm0 2v1h6.012V9zM6 11v1h3v-1z\"
                                        fill=\"gray\" font-family=\"sans-serif\" font-weight=\"400\" overflow=\"visible\"
                                        style=\"line-height:normal;font-variant-ligatures:none;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;shape-padding:0;isolation:auto;mix-blend-mode:normal;marker:none\"
                                        white-space=\"normal\" color=\"#000\" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Documents
                            </span>
                        </a>
                        <a href=\"{{ path('user_params') }}\"
                            class=\"col border-bottom text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                        <path
                                            d=\"M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z\"
                                            fill=\"#000000\" />
                                        <path
                                            d=\"M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z\"
                                            fill=\"#000000\" opacity=\"0.3\" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Paramétres
                            </span>
                        </a>
                        <a href=\"{{ path('course' ) }}\"
                            class=\"col text-center border-end py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"16\" height=\"16\"
                                    viewBox=\"0 0 16 16\">
                                    <path fill=\"#444444\" d=\"M8.1 3.1v0 0z\"></path>
                                    <path fill=\"#444444\" d=\"M15.1 3.2v0-0.2z\"></path>
                                    <path fill=\"#444444\"
                                        d=\"M9.9 1.5c-1.3 0-2 0.4-2.4 0.8-0.4-0.4-1.1-0.8-2.4-0.8-3.5 0-5.1 2-5.1 2v0 0 10.9l6.5-0.9c0 0 0.2 0.4 0.3 0.5h1.3c0.1-0.1 0.3-0.5 0.3-0.5l6.5 0.9v-10.9c0.1 0-1.4-2-5-2zM7 12c-0.6-0.2-1.3-0.3-2.3-0.4-0.1 0-0.1 0-0.2 0-1.4 0-2.6 0.4-3.5 0.7v-8.7c0.5-0.4 1.8-1.5 4.1-1.5 1.7 0 1.9 0.9 1.9 1 0 0 0 0 0 0v8.9zM14 12.3c-1-0.4-2.1-0.7-3.5-0.7-0.1 0-0.2 0-0.2 0-1 0-1.3 0.2-2.3 0.4v-8.9c0 0 0 0 0 0 0-0.2 0.2-1 1.9-1 2.3 0 4 1 4 1.5v8.7z\">
                                    </path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Cours
                            </span>
                        </a>
                        <a href=\"{{ path('app_logout') }}\"
                            class=\"col text-center py-10 btn btn-active-color-primary rounded-0\">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Sign-out.svg-->
                            <span class=\"svg-icon svg-icon-3x me-n1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                        <path
                                            d=\"M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z\"
                                            fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.5\"
                                            transform=\"translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000)\" />
                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                            transform=\"translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000)\"
                                            x=\"13\" y=\"6\" width=\"2\" height=\"12\" rx=\"1\" />
                                        <path
                                            d=\"M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z\"
                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                            transform=\"translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000)\" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <span class=\"fw-bolder fs-6 d-block pt-3\">
                                Déconnexion
                            </span>
                        </a>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Menu-->
                <span class=\"text-end\">
                    {% if app.user.checking == 1 %}
                    <span class=\"fw-bolder text-primary\">
                        Présent
                    </span>
                    {% endif %}
                    {% if app.user.checking == 0 %}
                    <span id=\"isReadCheck\" class=\"fw-bolder text-danger\">
                        Absent
                    </span>
                    {% endif %}
                </span>
            </div>
            <!--end::User-->
            <!--begin::Notifications-->
            <div class=\"ms-1 ms-lg-6\">
                <!--begin::Dropdown-->
                {% if app.user.notifications | length > 0 %}
                <button class=\"btn btn-icon btn-sm btn-light-danger fw-bolder pulse pulse-danger\"
                    data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\" id=\"kt_activities_toggle\">
                    <span class=\"position-absolute fs-6\">
                        {{ app.user.notifications | length }}
                    </span>
                    <span class=\"pulse-ring\"></span>
                </button>
                {% endif %}
                {% if app.user.notifications | length == 0 %}
                <button class=\"btn btn-icon btn-sm btn-light-success fw-bolder pulse pulse-success\"
                    data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\" id=\"kt_activities_toggle\">
                    <span class=\"position-absolute fs-6\">
                        {{ app.user.notifications | length }}
                    </span>
                    <span class=\"pulse-ring\"></span>
                </button>
                {% endif %}
                <!--begin::Menu-->
                <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded fw-bold menu-title-gray-800 menu-hover-bg menu-state-title-primary w-250px w-md-300px\"
                    data-kt-menu=\"true\">
                    <div class=\"menu-item mx-3\">
                        <div class=\"menu-content fs-6 text-dark fw-bolder py-6\">
                            {{ app.user.notifications | length }}
                            Notifications
                        </div>
                    </div>
                    <div class=\"separator mb-3\"></div>
                    <div class=\"menu-item mx-3\">
                        <div class=\"row\">
                            {% for notif in app.user.notifications | reverse %}
                            <div class=\"col-md-11\">
                                <a href=\"#\" class=\"menu-link px-4 py-3\">
                                    <div class=\"symbol symbol-35px\">
                                        <span class=\"symbol-label bg-light-info\">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
                                            <span class=\"svg-icon svg-icon-3 svg-icon-info\">
                                                <img width=\"20\" src=\"{{ asset('assets/img/notifications.png') }}\"
                                                    alt=\"\"></span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class=\"ps-4\">
                                        <span class=\"menu-title fw-bold mb-1\">
                                            {{ notif.message }}
                                        </span>
                                        <span class=\"text-primary fw-bold d-block fs-7\">
                                            {{ notif.createdAt | date('d-M-y') }}
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class=\"col-md-1\">
                                <a
                                    href=\"{{ path('notification_clear', { 'id':notif.id, 'redirect' : app.request.requestUri }) }}\">
                                    <i class=\"mt-4 close-notif fa fa-trash\"></i>
                                </a>
                            </div>

                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"separator mt-3\"></div>
                    <div class=\"menu-item mx-2\">
                        <div class=\"menu-content py-5\">
                            <a href=\"{{path('dashboard_home')}}\" class=\"btn btn-primary fw-bolder me-2 px-5\">
                                Actualisé
                            </a>
                            {% if app.user.notifications | length > 0 %}
                            <a href=\"{{ path('notification_clear_all') }}\" class=\"btn btn-light fw-bolder px-5\">
                                Tout effacer
                            </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <!--end::Menu-->
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->
            <!--begin::Aside Toggler-->
            <!--end::Aside Toggler-->
            <!--begin::Sidebar Toggler-->
            <button class=\"btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6\" id=\"kt_sidebar_toggler\">
                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                <span class=\"svg-icon svg-icon-1 svg-icon-dark\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                        height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                            <rect fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                            <path
                                d=\"M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z\"
                                fill=\"#000000\" opacity=\"0.3\" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Sidebar Toggler-->
        </div>
        <!--end::Right-->
    </div>
    <!--end::Container-->
</div>", "components/_main-header.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\components\\_main-header.html.twig");
    }
}
