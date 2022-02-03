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

/* school/course/admin/edit-user.html.twig */
class __TwigTemplate_5cebd6582102d2bb9fbfa735096f7c174261a44574b1952de97b86859ea6f067 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/admin/edit-user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/admin/edit-user.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "school/course/admin/edit-user.html.twig", 1);
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
        echo "Edition utilisateur
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
        echo "<!-- Modal HTML -->
<div id=\"myModal\" class=\"modal fade\">
\t<div class=\"modal-dialog modal-confirm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header flex-column\">
\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t<i class=\"material-icons\">&#xE5CD;</i>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t<h4 class=\"modal-title w-100\">En êtes vous sur ?</h4>\t
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>Les données relatif à cette utilisateur seront perdu. <span class=\"bold text-danger\">la suppression sera irreversible</span>.</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer justify-content-center\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_clear", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>     
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
\t\t\t\t";
        // line 46
        $this->loadTemplate("components/_main-header.html.twig", "school/course/admin/edit-user.html.twig", 46)->display($context);
        // line 47
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
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Edition utilisateur</a>
\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Edition utilisateur</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Edition utilisateur</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-users");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent fw-bolder ms-3\">Utilisateurs</a>
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
\t\t\t\t\t\t\t\t\t<div class=\"card-body mw-800px py-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 g-xl-5 g-xxl-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"py-10 ps-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Données de<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fw-bolder fs-1 text-white\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "fullname", [], "any", false, false, false, 100), "html", null, true);
        echo "</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('/assets/media/illustrations/params.png')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "lastname", [], "any", false, false, false, 116), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "firstname", [], "any", false, false, false, 117), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "remuneration", [], "any", false, false, false, 119), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "session", [], "any", false, false, false, 120), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "picture", [], "any", false, false, false, 121), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"separator separator-dashed my-10\"></div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Communication</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\" id=\"inlineCheckbox1\" value=\"option1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox1\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"inlineCheckbox2\" value=\"option2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox2\">SMS</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"inlineCheckbox3\" value=\"option3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox3\">Phone</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-13\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Modification</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "submit", [], "any", false, false, false, 155), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAprès validation, les informations seront modifier
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold\">En savoir plus</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Suppression</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myModal\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" class=\"btn btn-light-danger fw-bold btn-sm\">Supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\tutilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 174
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021©</span>
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
        // line 220
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "role", [], "any", false, false, false, 220), "Administrateur"))) {
            // line 221
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 222
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "user", [], "any", false, false, false, 222), "role", [], "any", false, false, false, 222), "Formateur"))) {
            // line 223
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 224
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224), "role", [], "any", false, false, false, 224), "Eleve"))) {
            // line 225
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t\t";
        // line 232
        $this->loadTemplate("messenger/index.html.twig", "school/course/admin/edit-user.html.twig", 232)->display($context);
        // line 233
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
        return "school/course/admin/edit-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 233,  420 => 232,  413 => 227,  407 => 225,  405 => 224,  400 => 223,  398 => 222,  393 => 221,  391 => 220,  342 => 174,  320 => 155,  283 => 121,  279 => 120,  275 => 119,  271 => 118,  267 => 117,  263 => 116,  259 => 115,  255 => 114,  238 => 100,  209 => 74,  204 => 72,  191 => 62,  182 => 56,  171 => 47,  169 => 46,  151 => 31,  134 => 16,  124 => 15,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}
Edition utilisateur
{% endblock %}

{% block final_stylesheets %}

{% endblock %}

{% block final_javascripts %}

{% endblock %}

{% block content %}
<!-- Modal HTML -->
<div id=\"myModal\" class=\"modal fade\">
\t<div class=\"modal-dialog modal-confirm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header flex-column\">
\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t<i class=\"material-icons\">&#xE5CD;</i>
\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t<h4 class=\"modal-title w-100\">En êtes vous sur ?</h4>\t
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>Les données relatif à cette utilisateur seront perdu. <span class=\"bold text-danger\">la suppression sera irreversible</span>.</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer justify-content-center\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t<a href=\"{{path('user_clear', {'id':user.id})}}\" type=\"button\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>     
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
\t\t\t\t\t\t\t\t<a href=\"{{path('admin_user_edit', {'id':user.id})}}\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Edition utilisateur</a>
\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard_home' ) }}\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Edition utilisateur</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"{{path('admin_user_edit', {'id':user.id})}}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Edition utilisateur</a>
\t\t\t\t\t\t\t\t<a href=\"{{path('view-users')}}\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent fw-bolder ms-3\">Utilisateurs</a>
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
\t\t\t\t\t\t\t\t\t<div class=\"card-body mw-800px py-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 g-xl-5 g-xxl-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"py-10 ps-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Données de<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fw-bolder fs-1 text-white\">{{user.fullname}}</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('/assets/media/illustrations/params.png')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t{{form_start(form) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.lastname) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.firstname) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.phone) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.remuneration) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.session) }}
\t\t\t\t\t\t\t\t\t\t{{form_row(form.picture) }}
\t\t\t\t\t\t\t\t\t\t<div class=\"separator separator-dashed my-10\"></div>
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Communication</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\" id=\"inlineCheckbox1\" value=\"option1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox1\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"inlineCheckbox2\" value=\"option2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox2\">SMS</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"inlineCheckbox3\" value=\"option3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor=\"inlineCheckbox3\">Phone</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-13\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Modification</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{form_row(form.submit) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAprès validation, les informations seront modifier
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold\">En savoir plus</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Suppression</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myModal\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t data-toggle=\"modal\" class=\"btn btn-light-danger fw-bold btn-sm\">Supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\tutilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t{{form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold me-2\">2021©</span>
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


\t{% endblock %}", "school/course/admin/edit-user.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\school\\course\\admin\\edit-user.html.twig");
    }
}
