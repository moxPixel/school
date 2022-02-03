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

/* school/course/admin/view-calendar.html.twig */
class __TwigTemplate_f2926ff9dcd86b157da3166a603ceded2aef08fe9efa5a663ae12a00db4cd81d extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "school/course/admin/view-calendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Calendrier
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
        // line 29
        $this->loadTemplate("components/_main-header.html.twig", "school/course/admin/view-calendar.html.twig", 29)->display($context);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-users");
        echo "\" class=\"\" onclick=\"addi()\"
\t\t\t\t\t\t\t\t\tclass=\"text-dark fw-bolder my-1\">Calendrier</a>
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
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-dark\">Calendrier</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t<!--begin::Nav-->
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-users");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent  fw-bolder ms-3\">Utilisateurs</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-sessions");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent  fw-bolder ms-3\">Sessions</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-calendar");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent active fw-bolder ms-3\">Calendrier</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-technologies");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent fw-bolder ms-3\">Technologies</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-course");
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn btn-active-accent  fw-bolder ms-3\">Cours</a>

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
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row g-0 g-xl-5 g-xxl-8\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->
\t\t\t\t\t\t\t\t\t\t<div class=\"py-10 ps-7\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-light fs-1 text-gray-800\">Vos<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bolder fs-1 text-white\">Dates</span></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Section-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Pic-->
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url('/assets/media/illustrations/todo.png')\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Pic-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
\t\t\t\t\t\t\t\t\t\tdata-bs-target=\"#kt_modal_add_calendar\">Ajouter une date
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"example3\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"table tableadmin table-striped table-bordered text-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Technologies</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Session</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Formateur</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Debut</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Cloture</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Creation</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"wd-25p\">Options</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "session", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "teacher", [], "any", false, false, false, 125), "fullname", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 126), "d/M/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 127), "d/M/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "createdAt", [], "any", false, false, false, 128), "d/M/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex justify-content-between text-white pills badge badge-pill \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_clear", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Table-->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Form-->

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
        // line 186
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 186), "role", [], "any", false, false, false, 186), "Administrateur"))) {
            // line 187
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 188
($context["app"] ?? null), "user", [], "any", false, false, false, 188), "role", [], "any", false, false, false, 188), "Formateur"))) {
            // line 189
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
\t\t\t\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 190
($context["app"] ?? null), "user", [], "any", false, false, false, 190), "role", [], "any", false, false, false, 190), "Eleve"))) {
            // line 191
            echo "\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t<!--end::Sidebar-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>
\t\t<!--end::Root-->
\t\t";
        // line 198
        $this->loadTemplate("messenger/index.html.twig", "school/course/admin/view-calendar.html.twig", 198)->display($context);
        // line 199
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
        return "school/course/admin/view-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 199,  342 => 198,  335 => 193,  329 => 191,  327 => 190,  322 => 189,  320 => 188,  315 => 187,  313 => 186,  263 => 138,  252 => 133,  248 => 132,  241 => 128,  237 => 127,  233 => 126,  229 => 125,  225 => 124,  221 => 123,  217 => 122,  214 => 121,  210 => 120,  150 => 63,  145 => 61,  140 => 59,  135 => 57,  130 => 55,  117 => 45,  108 => 39,  97 => 30,  95 => 29,  80 => 16,  76 => 15,  71 => 12,  67 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "school/course/admin/view-calendar.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/school/course/admin/view-calendar.html.twig");
    }
}
