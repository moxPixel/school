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
class __TwigTemplate_72caa2b5c08d5e9cb11e9f6d217552e2d6013f319bfc48b13d71c847bde6d8ff extends Template
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
($context["app"] ?? null), "request", [], "any", false, false, false, 35)]));
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
($context["app"] ?? null), "request", [], "any", false, false, false, 78)]));
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
($context["app"] ?? null), "request", [], "any", false, false, false, 121)]));
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
($context["app"] ?? null), "request", [], "any", false, false, false, 164)]));
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
($context["app"] ?? null), "request", [], "any", false, false, false, 208)]));
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
($context["app"] ?? null), "request", [], "any", false, false, false, 250)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
";
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
        return array (  297 => 250,  296 => 248,  253 => 208,  252 => 206,  207 => 164,  206 => 162,  162 => 121,  161 => 119,  117 => 78,  116 => 76,  72 => 35,  71 => 33,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_modal.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/components/_modal.html.twig");
    }
}
