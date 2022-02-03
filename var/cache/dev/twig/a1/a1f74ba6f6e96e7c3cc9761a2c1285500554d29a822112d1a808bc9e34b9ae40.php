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

/* school/course/course.html.twig */
class __TwigTemplate_1548491fe647c178f3fc9354a1505cde39e633287db8c49e8dfb1d773a73fa8d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/course.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/course.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "school/course/course.html.twig", 1);
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
        echo "     Cours
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
        echo "\t<!-- Main Content-->
<div>
\t\t<!--begin::Main-->
\t\t<!--begin::Root-->
\t\t<div class=\"d-flex flex-column flex-root\">
\t\t\t<!--begin::Page-->
\t\t\t<div class=\"page d-flex flex-row flex-column-fluid\">
\t\t\t\t<!--begin::Wrapper-->
\t\t\t\t<div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
\t\t\t\t\t<!--begin::Header-->
\t\t\t\t     ";
        // line 26
        $this->loadTemplate("components/_main-header.html.twig", "school/course/course.html.twig", 26)->display($context);
        // line 27
        echo "\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t<!--begin::Main-->
\t\t\t\t\t<div class=\"d-flex flex-column flex-column-fluid\">
\t\t\t\t\t\t<!--begin::toolbar-->
\t\t\t\t\t\t<div class=\"toolbar\" id=\"kt_toolbar\">
\t\t\t\t\t\t\t<div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\" class=\"\" onclick=\"addi()\" class=\"text-dark fw-bolder my-1\">cours</a>
\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\" class=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Cours</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course");
        echo "\" class=\"btn btn-active-accent active fw-bolder ms-3\">Cours</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::toolbar-->
\t\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t\t<div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<!--begin::Profile Account-->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!--begin::Form-->
\t\t\t\t\t\t\t\t\t<div class=\"form d-flex flex-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body mw-800px py-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 g-xl-5 g-xxl-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"py-10 ps-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Vos<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-1 text-white\">Cours</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('/assets/media/illustrations/books.png')\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                            <section>
                                                <div class=\"row\">
                                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryLanguage"]) || array_key_exists("categoryLanguage", $context) ? $context["categoryLanguage"] : (function () { throw new RuntimeError('Variable "categoryLanguage" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 90
            echo "                                                   <div class=\" col-sm-3 col-md-4 col-xl-4 col-xxl-4\">
                                                       <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_course", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">
                                                 <div class=\"bg-light-success card custom-card  mybtn\">
                                                     <div class=\"card-body text-center hoverCours\">
                                                         <div class=\"icon-service bg-primary-transparent rounded-circle text-primary\">
                                                            <img style=\"width:60px;\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/technoPic/" . twig_get_attribute($this->env, $this->source, $context["category"], "picture", [], "any", false, false, false, 95))), "html", null, true);
            echo "\" alt=\"\">
                                                         </div>
                                                         <p class=\"mb-1 text-muted\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
                                                         <h3 class=\"mb-0\"></h3>
                                                     </div>
                                                 </div>
                                                 </a>
                                               </div>
                                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                                </div>
                                                
                                                </section>
\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021©</span>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\" class=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t<ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/support\" target=\"_blank\" class=\"menu-link px-2\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\" class=\"menu-link px-2\">Purchase</a>
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
        // line 147
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "role", [], "any", false, false, false, 147), "Administrateur"))) {
            // line 148
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "role", [], "any", false, false, false, 149), "Formateur"))) {
            // line 150
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "role", [], "any", false, false, false, 151), "Eleve"))) {
            // line 152
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
\t\t\t    ";
        }
        // line 154
        echo "\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t    ";
        // line 159
        $this->loadTemplate("messenger/index.html.twig", "school/course/course.html.twig", 159)->display($context);
        // line 160
        echo "\t\t<!--begin::Scrolltop-->
\t\t<div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<!--end::Svg Icon-->
\t\t</div>

</div>
  
    <!-- End Main Content-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "school/course/course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 160,  327 => 159,  320 => 154,  314 => 152,  312 => 151,  307 => 150,  305 => 149,  300 => 148,  298 => 147,  253 => 104,  240 => 97,  235 => 95,  228 => 91,  225 => 90,  221 => 89,  179 => 50,  167 => 41,  159 => 36,  148 => 27,  146 => 26,  134 => 16,  124 => 15,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t<!-- Main Content-->
<div>
\t\t<!--begin::Main-->
\t\t<!--begin::Root-->
\t\t<div class=\"d-flex flex-column flex-root\">
\t\t\t<!--begin::Page-->
\t\t\t<div class=\"page d-flex flex-row flex-column-fluid\">
\t\t\t\t<!--begin::Wrapper-->
\t\t\t\t<div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
\t\t\t\t\t<!--begin::Header-->
\t\t\t\t     {% include 'components/_main-header.html.twig' %}
\t\t\t\t\t<!--end::Header-->
\t\t\t\t\t<!--begin::Main-->
\t\t\t\t\t<div class=\"d-flex flex-column flex-column-fluid\">
\t\t\t\t\t\t<!--begin::toolbar-->
\t\t\t\t\t\t<div class=\"toolbar\" id=\"kt_toolbar\">
\t\t\t\t\t\t\t<div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
\t\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('course' ) }}\" class=\"\" onclick=\"addi()\" class=\"text-dark fw-bolder my-1\">cours</a>
\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard_home' ) }}\" class=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Cours</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t                    <a href=\"{{ path('course' ) }}\" class=\"btn btn-active-accent active fw-bolder ms-3\">Cours</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Nav-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::toolbar-->
\t\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t\t<div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
\t\t\t\t\t\t\t<!--begin::Container-->
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<!--begin::Profile Account-->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!--begin::Form-->
\t\t\t\t\t\t\t\t\t<div class=\"form d-flex flex-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body mw-800px py-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 g-xl-5 g-xxl-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"py-10 ps-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Vos<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-1 text-white\">Cours</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('/assets/media/illustrations/books.png')\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                            <section>
                                                <div class=\"row\">
                                                    {% for category in categoryLanguage %}
                                                   <div class=\" col-sm-3 col-md-4 col-xl-4 col-xxl-4\">
                                                       <a href=\"{{path('single_course', {'id': category.id})}}\">
                                                 <div class=\"bg-light-success card custom-card  mybtn\">
                                                     <div class=\"card-body text-center hoverCours\">
                                                         <div class=\"icon-service bg-primary-transparent rounded-circle text-primary\">
                                                            <img style=\"width:60px;\" src=\"{{ asset('uploads/technoPic/' ~ category.picture )}}\" alt=\"\">
                                                         </div>
                                                         <p class=\"mb-1 text-muted\">{{category.name}}</p>
                                                         <h3 class=\"mb-0\"></h3>
                                                     </div>
                                                 </div>
                                                 </a>
                                               </div>
                                               {% endfor %}
                                                </div>
                                                
                                                </section>
\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021©</span>
\t\t\t\t\t\t\t\t<a href=\"\" target=\"_blank\" class=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t<ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/support\" target=\"_blank\" class=\"menu-link px-2\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\" class=\"menu-link px-2\">Purchase</a>
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
\t\t\t    {% endif %}
\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t    {% include 'messenger/index.html.twig' %}
\t\t<!--begin::Scrolltop-->
\t\t<div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
\t\t\t<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
\t\t\t<span class=\"svg-icon\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t<polygon points=\"0 0 24 0 24 24 0 24\" />
\t\t\t\t\t\t<rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
\t\t\t\t\t\t<path d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" />
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<!--end::Svg Icon-->
\t\t</div>

</div>
  
    <!-- End Main Content-->


{% endblock %}



", "school/course/course.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\school\\course\\course.html.twig");
    }
}
