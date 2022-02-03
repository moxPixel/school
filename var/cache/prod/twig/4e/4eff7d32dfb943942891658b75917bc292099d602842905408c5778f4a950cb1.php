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

/* user_profile/parameters.html.twig */
class __TwigTemplate_3644486fb1802b3ef8ea4a490061f3df31514dc7345c15b1f2a5e0983c529832 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "user_profile/parameters.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Parametres
";
    }

    // line 7
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
    }

    // line 11
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        // line 26
        $this->loadTemplate("components/_main-header.html.twig", "user_profile/parameters.html.twig", 26)->display($context);
        // line 27
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
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_params");
        echo "\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Parametres</a>
\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-muted text-hover-primary\">Dashboard</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Parametres</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_documents");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent fw-bolder ms-3\">Documents</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_params");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Parametres</a>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Vos<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fw-bolder fs-1 text-white\">paramétres</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('assets/media/illustrations/params.png')\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 97), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 98), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 99), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 100), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 101), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "picture", [], "any", false, false, false, 102), 'row');
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
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Validation</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 136), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAprès modification, des informations supplémentaires vous seront
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdemandées pour confirmer votre identité et protéger votre compte
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontre la compromission
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-bold\">En savoir plus</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form row-->
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Suppression de compte</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-custom form-check-solid me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"customCheck5\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"option1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label fw-bold\" for=\"customCheck5\">Je suis
\t\t\t\t\t\t\t\t\t\t\t\t\t\td'accord.</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-text py-2\">Pour des raisons de securité la suppression
\t\t\t\t\t\t\t\t\t\t\t\t\tet effectif apres verification de l'equipe Unlock, un email de
\t\t\t\t\t\t\t\t\t\t\t\t\tconfirmation vous sera envoyer. <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-light-danger fw-bold btn-sm\">Supprimer mon compte
\t\t\t\t\t\t\t\t\t\t\t\t\t\t?</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Form row-->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 164
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        // line 210
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 210), "role", [], "any", false, false, false, 210), "Administrateur"))) {
            // line 211
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 212
($context["app"] ?? null), "user", [], "any", false, false, false, 212), "role", [], "any", false, false, false, 212), "Formateur"))) {
            // line 213
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 214
($context["app"] ?? null), "user", [], "any", false, false, false, 214), "role", [], "any", false, false, false, 214), "Eleve"))) {
            // line 215
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t\t";
        // line 222
        $this->loadTemplate("messenger/index.html.twig", "user_profile/parameters.html.twig", 222)->display($context);
        // line 223
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
    }

    public function getTemplateName()
    {
        return "user_profile/parameters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 223,  347 => 222,  340 => 217,  334 => 215,  332 => 214,  327 => 213,  325 => 212,  320 => 211,  318 => 210,  269 => 164,  238 => 136,  201 => 102,  197 => 101,  193 => 100,  189 => 99,  185 => 98,  181 => 97,  177 => 96,  132 => 54,  127 => 52,  114 => 42,  105 => 36,  94 => 27,  92 => 26,  80 => 16,  76 => 15,  71 => 12,  67 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_profile/parameters.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/user_profile/parameters.html.twig");
    }
}
