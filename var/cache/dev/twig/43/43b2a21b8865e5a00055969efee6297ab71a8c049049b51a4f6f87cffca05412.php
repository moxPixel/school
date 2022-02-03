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

/* school/course/course-details.html.twig */
class __TwigTemplate_5d549fde4ec29fbdd87200dd00944c0d3f7a639558647815127ada9560741291 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'final_stylesheets' => [$this, 'block_final_stylesheets'],
            'final_javascripts' => [$this, 'block_final_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/course-details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/course-details.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "school/course/course-details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "Cours
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        // line 8
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

        // line 12
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "<!-- Main Content-->
<div>


    <!--begin::Main-->
    <!--begin::Root-->

    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                ";
        // line 29
        $this->loadTemplate("components/_main-header.html.twig", "school/course/course-details.html.twig", 29)->display($context);
        // line 30
        echo "                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::toolbar-->
                    <div class=\"toolbar\" id=\"kt_toolbar\">
                        <div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
                            <!--begin::Info-->
                            <div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
                                <!--begin::Title-->
                                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\" class=\"\" onclick=\"addi()\"
                                    class=\"text-dark fw-bolder my-1\">Cours</a>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
                                    <li class=\"breadcrumb-item\">
                                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\"
                                            class=\"text-muted text-hover-primary\">Dashboard</a>
                                    </li>
                                    <li class=\"breadcrumb-item text-dark\">Cours</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Nav-->
                            <div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
                                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\"
                                    class=\"btn btn-active-accent active fw-bolder ms-3\">Cours</a>
                            </div>
                            <!--end::Nav-->
                        </div>
                    </div>
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--begin::Profile Account-->
                            <div class=\"card\">
                                <!--begin::Form-->
                                <div class=\"form d-flex flex-center\">
                                    <div class=\"card-body mw-800px py-20\">
                                        <div class=\"content-admin\">

                                            <div class=\"container\">
                                                <section>
                                                    <div class=\"row\">
                                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 77
            echo "                                                        <div class=\"col-sm-3 col-md-4 col-xl-4 col-xxl-4\">
                                                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/course/" . twig_get_attribute($this->env, $this->source, $context["course"], "link", [], "any", false, false, false, 78))), "html", null, true);
            echo "\"
                                                                download=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
                                                                <div class=\"bg-light-success card custom-card  mybtn\">
                                                                    <div class=\"card-body text-center hoverCours\">
                                                                        <div
                                                                            class=\"icon-service bg-primary-transparent rounded-circle text-primary\">
                                                                            <i class=\"fe fe-copy\"></i>
                                                                        </div>
                                                                        <img style=\"width:60px;\"
                                                                            src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/technoPic/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "category", [], "any", false, false, false, 87), "picture", [], "any", false, false, false, 87))), "html", null, true);
            echo "\"
                                                                            alt=\"\">
                                                                        <p class=\"mb-1 text-muted\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</p>
                                                                        <h3 class=\"mb-0\"></h3>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                                    </div>

                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Profile Account-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Main-->
                    <!--begin::Footer-->
                    <div class=\"footer py-4 d-flex flex-lg-column\" id=\"kt_footer\">
                        <!--begin::Container-->
                        <div class=\"container d-flex flex-column flex-md-row flex-stack\">
                            <!--begin::Copyright-->
                            <div class=\"text-dark order-2 order-md-1\">
                                <span class=\"text-muted fw-bold me-2\">2021©</span>
                                <a href=\"\" target=\"_blank\"
                                    class=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com/support\" target=\"_blank\"
                                        class=\"menu-link px-2\">Support</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\"
                                        class=\"menu-link px-2\">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Sidebar-->
                ";
        // line 145
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "role", [], "any", false, false, false, 145), "Administrateur"))) {
            // line 146
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 147
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "role", [], "any", false, false, false, 147), "Formateur"))) {
            // line 148
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "role", [], "any", false, false, false, 149), "Eleve"))) {
            // line 150
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
                ";
        }
        // line 152
        echo "                <!--end::Sidebar-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        ";
        // line 157
        $this->loadTemplate("messenger/index.html.twig", "school/course/course-details.html.twig", 157)->display($context);
        // line 158
        echo "        <!--begin::Scrolltop-->
        <div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
            <span class=\"svg-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                        <rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
                        <path
                            d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
                            fill=\"#000000\" fill-rule=\"nonzero\" />
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>


    </div>

    <!-- End Main Content-->


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "school/course/course-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 158,  328 => 157,  321 => 152,  315 => 150,  313 => 149,  308 => 148,  306 => 147,  301 => 146,  299 => 145,  248 => 96,  235 => 89,  230 => 87,  219 => 79,  215 => 78,  212 => 77,  208 => 76,  184 => 55,  171 => 45,  162 => 39,  151 => 30,  149 => 29,  134 => 16,  124 => 15,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}
Cours
{% endblock %}

{% block final_stylesheets %}

{% endblock %}

{% block final_javascripts %}

{% endblock %}

{% block content %}
<!-- Main Content-->
<div>


    <!--begin::Main-->
    <!--begin::Root-->

    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                {% include 'components/_main-header.html.twig' %}
                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::toolbar-->
                    <div class=\"toolbar\" id=\"kt_toolbar\">
                        <div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
                            <!--begin::Info-->
                            <div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
                                <!--begin::Title-->
                                <a href=\"{{ path('course') }}\" class=\"\" onclick=\"addi()\"
                                    class=\"text-dark fw-bolder my-1\">Cours</a>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
                                    <li class=\"breadcrumb-item\">
                                        <a href=\"{{ path('dashboard_home' ) }}\"
                                            class=\"text-muted text-hover-primary\">Dashboard</a>
                                    </li>
                                    <li class=\"breadcrumb-item text-dark\">Cours</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Nav-->
                            <div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
                                <a href=\"{{ path('course')}}\"
                                    class=\"btn btn-active-accent active fw-bolder ms-3\">Cours</a>
                            </div>
                            <!--end::Nav-->
                        </div>
                    </div>
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--begin::Profile Account-->
                            <div class=\"card\">
                                <!--begin::Form-->
                                <div class=\"form d-flex flex-center\">
                                    <div class=\"card-body mw-800px py-20\">
                                        <div class=\"content-admin\">

                                            <div class=\"container\">
                                                <section>
                                                    <div class=\"row\">
                                                        {% for course in courses %}
                                                        <div class=\"col-sm-3 col-md-4 col-xl-4 col-xxl-4\">
                                                            <a href=\"{{ asset('uploads/course/' ~ course.link )}}\"
                                                                download=\"{{ course.name }}\">
                                                                <div class=\"bg-light-success card custom-card  mybtn\">
                                                                    <div class=\"card-body text-center hoverCours\">
                                                                        <div
                                                                            class=\"icon-service bg-primary-transparent rounded-circle text-primary\">
                                                                            <i class=\"fe fe-copy\"></i>
                                                                        </div>
                                                                        <img style=\"width:60px;\"
                                                                            src=\"{{ asset('uploads/technoPic/' ~ course.category.picture )}}\"
                                                                            alt=\"\">
                                                                        <p class=\"mb-1 text-muted\">{{course.name}}</p>
                                                                        <h3 class=\"mb-0\"></h3>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        {% endfor %}
                                                    </div>

                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Profile Account-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Main-->
                    <!--begin::Footer-->
                    <div class=\"footer py-4 d-flex flex-lg-column\" id=\"kt_footer\">
                        <!--begin::Container-->
                        <div class=\"container d-flex flex-column flex-md-row flex-stack\">
                            <!--begin::Copyright-->
                            <div class=\"text-dark order-2 order-md-1\">
                                <span class=\"text-muted fw-bold me-2\">2021©</span>
                                <a href=\"\" target=\"_blank\"
                                    class=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com/support\" target=\"_blank\"
                                        class=\"menu-link px-2\">Support</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\"
                                        class=\"menu-link px-2\">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Sidebar-->
                {% if app.user.role == \"Administrateur\" %}
                {{ render(controller('App\\\\Controller\\\\AdministratorController::sideBar')) }}
                {% elseif app.user.role == \"Formateur\" %}
                {{ render(controller('App\\\\Controller\\\\TeacherController::sideBar')) }}
                {% elseif app.user.role == \"Eleve\" %}
                {{ render(controller('App\\\\Controller\\\\StudentController::sideBar')) }}
                {% endif %}
                <!--end::Sidebar-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        {% include 'messenger/index.html.twig' %}
        <!--begin::Scrolltop-->
        <div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
            <span class=\"svg-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                        <rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
                        <path
                            d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
                            fill=\"#000000\" fill-rule=\"nonzero\" />
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>


    </div>

    <!-- End Main Content-->


    {% endblock %}", "school/course/course-details.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\school\\course\\course-details.html.twig");
    }
}
