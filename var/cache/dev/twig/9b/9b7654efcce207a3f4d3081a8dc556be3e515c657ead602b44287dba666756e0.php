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

/* user_profile/documents.html.twig */
class __TwigTemplate_b13f1f2f5e68c0489de61245d4392d3bea8e738c72808e0ac6dc4c93ee244232 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/documents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/documents.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user_profile/documents.html.twig", 1);
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
        echo "Documents
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


\t<!--begin::Main-->
\t<!--begin::Root-->

\t<div class=\"d-flex flex-column flex-root\">
\t\t<!--begin::Page-->
\t\t<div class=\"page d-flex flex-row flex-column-fluid\">
\t\t\t<!--begin::Wrapper-->
\t\t\t<div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
\t\t\t\t<!--begin::Header-->
\t\t\t\t";
        // line 29
        $this->loadTemplate("components/_main-header.html.twig", "user_profile/documents.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t<!--end::Header-->
\t\t\t\t<!--begin::Main-->
\t\t\t\t<div class=\"d-flex flex-column flex-column-fluid\">
\t\t\t\t\t<!--begin::toolbar-->
\t\t\t\t\t<div class=\"toolbar\" id=\"kt_toolbar\">
\t\t\t\t\t\t<div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_documents");
        echo "\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Documents</a>
\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Documents</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_documents");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Documents</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_params");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent  fw-bolder ms-3\">Paremetres</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::toolbar-->
\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t<div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<!--begin::Profile Account-->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<!--begin::Form-->
\t\t\t\t\t\t\t\t<div class=\"form d-flex flex-center\">
\t\t\t\t\t\t\t\t\t<div class=\" text-center card-body mw-800px py-20\">

\t\t\t\t\t\t\t\t\t\t<span class=\"  text-muted\">Aucun document disponible.</span>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Form-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Profile Account-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Content-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Main-->
\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t<div class=\"footer py-4 d-flex flex-lg-column\" id=\"kt_footer\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container d-flex flex-column flex-md-row flex-stack\">
\t\t\t\t\t\t\t<!--begin::Copyright-->
\t\t\t\t\t\t\t<div class=\"text-dark order-2 order-md-1\">
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021??</span>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\"
\t\t\t\t\t\t\t\t\tclass=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t<ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/support\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\tclass=\"menu-link px-2\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\tclass=\"menu-link px-2\">Purchase</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Footer-->
\t\t\t\t</div>
\t\t\t\t<!--end::Wrapper-->
\t\t\t\t<!--begin::Sidebar-->
\t\t\t\t";
        // line 120
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "role", [], "any", false, false, false, 120), "Administrateur"))) {
            // line 121
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 122
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "role", [], "any", false, false, false, 122), "Formateur"))) {
            // line 123
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "role", [], "any", false, false, false, 124), "Eleve"))) {
            // line 125
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t\t";
        // line 132
        $this->loadTemplate("messenger/index.html.twig", "user_profile/documents.html.twig", 132)->display($context);
        // line 133
        echo "\t\t<!--begin::Scrolltop-->
\t\t<div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
\t\t\t\t\theight=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path
\t\t\t\t\t\t\td=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
\t\t\t\t\t\t\tfill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<!--end::Svg Icon-->
\t\t</div>


\t</div>

\t<!-- End Main Content-->


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_profile/documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 133,  284 => 132,  277 => 127,  271 => 125,  269 => 124,  264 => 123,  262 => 122,  257 => 121,  255 => 120,  189 => 57,  184 => 55,  171 => 45,  162 => 39,  151 => 30,  149 => 29,  134 => 16,  124 => 15,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}
Documents
{% endblock %}

{% block final_stylesheets %}

{% endblock %}

{% block final_javascripts %}

{% endblock %}

{% block content %}
<!-- Main Content-->
<div>


\t<!--begin::Main-->
\t<!--begin::Root-->

\t<div class=\"d-flex flex-column flex-root\">
\t\t<!--begin::Page-->
\t\t<div class=\"page d-flex flex-row flex-column-fluid\">
\t\t\t<!--begin::Wrapper-->
\t\t\t<div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
\t\t\t\t<!--begin::Header-->
\t\t\t\t{% include 'components/_main-header.html.twig' %}
\t\t\t\t<!--end::Header-->
\t\t\t\t<!--begin::Main-->
\t\t\t\t<div class=\"d-flex flex-column flex-column-fluid\">
\t\t\t\t\t<!--begin::toolbar-->
\t\t\t\t\t<div class=\"toolbar\" id=\"kt_toolbar\">
\t\t\t\t\t\t<div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_documents') }}\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Documents</a>
\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard_home' ) }}\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Documents</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_documents') }}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Documents</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_params') }}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent  fw-bolder ms-3\">Paremetres</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::toolbar-->
\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t<div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<!--begin::Profile Account-->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<!--begin::Form-->
\t\t\t\t\t\t\t\t<div class=\"form d-flex flex-center\">
\t\t\t\t\t\t\t\t\t<div class=\" text-center card-body mw-800px py-20\">

\t\t\t\t\t\t\t\t\t\t<span class=\"  text-muted\">Aucun document disponible.</span>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Form-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Profile Account-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Content-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Main-->
\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t<div class=\"footer py-4 d-flex flex-lg-column\" id=\"kt_footer\">
\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t<div class=\"container d-flex flex-column flex-md-row flex-stack\">
\t\t\t\t\t\t\t<!--begin::Copyright-->
\t\t\t\t\t\t\t<div class=\"text-dark order-2 order-md-1\">
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021??</span>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\"
\t\t\t\t\t\t\t\t\tclass=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t<ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/support\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\tclass=\"menu-link px-2\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\tclass=\"menu-link px-2\">Purchase</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Container-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Footer-->
\t\t\t\t</div>
\t\t\t\t<!--end::Wrapper-->
\t\t\t\t<!--begin::Sidebar-->
\t\t\t\t{% if app.user.role == \"Administrateur\" %}
\t\t\t\t{{ render(controller('App\\\\Controller\\\\AdministratorController::sideBar')) }}
\t\t\t\t{% elseif app.user.role == \"Formateur\" %}
\t\t\t\t{{ render(controller('App\\\\Controller\\\\TeacherController::sideBar')) }}
\t\t\t\t{% elseif app.user.role == \"Eleve\" %}
\t\t\t\t{{ render(controller('App\\\\Controller\\\\StudentController::sideBar')) }}
\t\t\t\t{% endif %}
\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t\t{% include 'messenger/index.html.twig' %}
\t\t<!--begin::Scrolltop-->
\t\t<div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
\t\t\t\t\theight=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path
\t\t\t\t\t\t\td=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
\t\t\t\t\t\t\tfill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<!--end::Svg Icon-->
\t\t</div>


\t</div>

\t<!-- End Main Content-->


\t{% endblock %}", "user_profile/documents.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\user_profile\\documents.html.twig");
    }
}
