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

/* components/_modal.html.twig */
class __TwigTemplate_066f0237a65e8d2ac765022050d4429c07f5f36dc41239907897605cb82f31d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"kt_modal_add_user\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Utilisateurs</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel utilisateur</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\RegisterController::register", ["request" => twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_session\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Sessions</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel session</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addSession", ["request" => twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_calendar\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Calendrier</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel date</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addCalendar", ["request" => twig_get_attribute($this->env, $this->source,         // line 121
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_techno\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Technologies</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel technologie</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addTechnoLanguage", ["request" => twig_get_attribute($this->env, $this->source,         // line 164
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"modal fade\" id=\"kt_modal_add_course\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Cours</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouveau cours</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addCourse", ["request" => twig_get_attribute($this->env, $this->source,         // line 208
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "request", [], "any", false, false, false, 208)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"kt_modal_add_remuneration\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Remuneration</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel remuneration</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addRemuneration", ["request" => twig_get_attribute($this->env, $this->source,         // line 250
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "request", [], "any", false, false, false, 250)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 250,  302 => 248,  259 => 208,  258 => 206,  213 => 164,  212 => 162,  168 => 121,  167 => 119,  123 => 78,  122 => 76,  78 => 35,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"kt_modal_add_user\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Utilisateurs</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel utilisateur</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\RegisterController::register',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_session\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Sessions</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel session</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\CourseController::addSession',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_calendar\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Calendrier</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel date</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\CourseController::addCalendar',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"kt_modal_add_techno\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Technologies</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel technologie</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\CourseController::addTechnoLanguage',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"modal fade\" id=\"kt_modal_add_course\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Cours</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouveau cours</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\CourseController::addCourse',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"kt_modal_add_remuneration\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered mw-1000px\">
        <div class=\"modal-content\">
            <div class=\"container px-10 py-10\">
                <div class=\"modal-header py-2 d-flex justify-content-end border-0\">
                    <!--begin::Close-->
                    <div class=\"btn btn-icon btn-sm btn-light-primary\" data-bs-dismiss=\"modal\">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g transform=\"translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)\"
                                    fill=\"#000000\">
                                    <rect fill=\"#000000\" x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                    <rect fill=\"#000000\" opacity=\"0.5\"
                                        transform=\"translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)\"
                                        x=\"0\" y=\"7\" width=\"16\" height=\"2\" rx=\"1\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class=\"card-header border-0 pt-5\">
                    <h3 class=\"card-title align-items-start flex-column\">
                        <span class=\"card-label fw-bolder text-dark fs-3\">Remuneration</span><br>
                        <span class=\"text-muted mt-2 fw-bold fs-6\">Nouvel remuneration</span>
                    </h3>
                </div>
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{
                    render(controller('App\\\\Controller\\\\CourseController::addRemuneration',
                    {'request':app.request})) }}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
", "components/_modal.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\components\\_modal.html.twig");
    }
}
