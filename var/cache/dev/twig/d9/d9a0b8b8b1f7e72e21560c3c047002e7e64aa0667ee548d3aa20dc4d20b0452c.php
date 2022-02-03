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

/* security/resset-password.html.twig */
class __TwigTemplate_b009cac127511c8a305ed817857e75045e7b2e47b73fd4234c22a4e012d9e928 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resset-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/resset-password.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/resset-password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Réinitialiser votre mot de passe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!--begin::Main-->
<div class=\"d-flex flex-column flex-root\">

    <!--begin::Login-->
    <div class=\"d-flex flex-column flex-lg-row flex-column-fluid hero-section-video\" id=\"kt_login\">
        <!--begin::Aside-->
        <div class=\"d-flex flex-column flex-lg-row-auto w-lg-600px pt-15 pt-lg-0 prime \">
            <!--begin::Aside Top-->
            <!--begin::Aside-->
            <div class=\"d-flex flex-column flex-lg-row-auto w-lg-600px pt-15 pt-lg-0 login\">
                <!--begin::Aside Top-->
                <div class=\"d-flex flex-column-auto flex-column pt-lg-40 pt-15 text-center\">
                    <div class=\"hero-logo\">
                        <img class=\"logo\" src=\"assets/images/bricolage_logo_blanc.png\" alt=\"logo\">
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- /.row -->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class=\"d-flex flex-row-fluid bgi-size-contain bgi-no-repeat bgi-position-y-bottom bgi-position-x-center min-h-350px\"
                    style=\"background-image: url(assets/media/illustrations/lock.png)\"></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div
            class=\"login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-20 px-10 p-lg-7 mx-auto mw-450px w-100\">
            <!--begin::Wrapper-->
            <div class=\"d-flex flex-column-fluid flex-center py-10\">
                <!--begin::Password Reset Form-->
                <div class=\"form w-100\" id=\"kt_login_password_reset_form\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 40
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 41
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 42
                    echo "                        <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-up\"></i></span> ";
                } else {
                    // line 43
                    echo "                        <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-down\"></i></span> ";
                }
                // line 44
                echo "                        <span class=\"alert-inner--text\"><strong>";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["label"]), "html", null, true);
                echo " : </strong> ";
                echo $context["message"];
                // line 45
                echo "</span>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <!--begin::Title-->
                    <div class=\"pb-5 pb-lg-10\">
                        <h3 class=\"fw-bolder display-6\">Réinitialisé mon mot de passe ?</h3>
                        <p class=\"text-muted fw-bold fs-3\">Entrer votre email pour réinisialisé le mot de passe</p>
                    </div>
                    <!--end::Title-->
                    <!--begin::Form group-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fs-6 fw-bolder  pt-5\">Email</label> ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form');
        echo "
                        <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" type=\"button\" id=\"kt_login_password_reset_form_cancel_button\"
                            class=\"btn btn-light-primary fw-bolder fs-6 px-8 py-4 my-3\">Annuler</a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Password Reset Form-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Footer-->
            <div class=\"d-flex justify-content-lg-start justify-content-center align-items-center py-7 py-lg-0\">
                <a href=\"https://unlock-technologies.fr\" target=\"_blank\" class=\"text-primary fw-bolder fs-4\">Site
                    officiel</a>
                <a href=\"#\" class=\"text-primary ms-10 fw-bolder fs-4\">Contact</a>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/resset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 57,  175 => 56,  165 => 48,  159 => 47,  151 => 45,  146 => 44,  143 => 43,  140 => 42,  138 => 41,  133 => 40,  125 => 39,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
 {% block page_title %}Réinitialiser votre mot de passe{% endblock %} 
 {% block body %}

<!--begin::Main-->
<div class=\"d-flex flex-column flex-root\">

    <!--begin::Login-->
    <div class=\"d-flex flex-column flex-lg-row flex-column-fluid hero-section-video\" id=\"kt_login\">
        <!--begin::Aside-->
        <div class=\"d-flex flex-column flex-lg-row-auto w-lg-600px pt-15 pt-lg-0 prime \">
            <!--begin::Aside Top-->
            <!--begin::Aside-->
            <div class=\"d-flex flex-column flex-lg-row-auto w-lg-600px pt-15 pt-lg-0 login\">
                <!--begin::Aside Top-->
                <div class=\"d-flex flex-column-auto flex-column pt-lg-40 pt-15 text-center\">
                    <div class=\"hero-logo\">
                        <img class=\"logo\" src=\"assets/images/bricolage_logo_blanc.png\" alt=\"logo\">
                    </div>
                    <!-- /.col-lg-12 -->
                    <!-- /.row -->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class=\"d-flex flex-row-fluid bgi-size-contain bgi-no-repeat bgi-position-y-bottom bgi-position-x-center min-h-350px\"
                    style=\"background-image: url(assets/media/illustrations/lock.png)\"></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div
            class=\"login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-20 px-10 p-lg-7 mx-auto mw-450px w-100\">
            <!--begin::Wrapper-->
            <div class=\"d-flex flex-column-fluid flex-center py-10\">
                <!--begin::Password Reset Form-->
                <div class=\"form w-100\" id=\"kt_login_password_reset_form\">
                    {% for label, messages in app.flashes %} {% for message in messages %}
                    <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                        {% if label == 'success' %}
                        <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-up\"></i></span> {% else %}
                        <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-down\"></i></span> {% endif %}
                        <span class=\"alert-inner--text\"><strong>{{ label | title }} : </strong> {{ message | raw
                            }}</span>
                    </div>
                    {% endfor %} {% endfor %}
                    <!--begin::Title-->
                    <div class=\"pb-5 pb-lg-10\">
                        <h3 class=\"fw-bolder display-6\">Réinitialisé mon mot de passe ?</h3>
                        <p class=\"text-muted fw-bold fs-3\">Entrer votre email pour réinisialisé le mot de passe</p>
                    </div>
                    <!--end::Title-->
                    <!--begin::Form group-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fs-6 fw-bolder  pt-5\">Email</label> {{form(form)}}
                        <a href=\"{{path('app_login')}}\" type=\"button\" id=\"kt_login_password_reset_form_cancel_button\"
                            class=\"btn btn-light-primary fw-bolder fs-6 px-8 py-4 my-3\">Annuler</a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Password Reset Form-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Footer-->
            <div class=\"d-flex justify-content-lg-start justify-content-center align-items-center py-7 py-lg-0\">
                <a href=\"https://unlock-technologies.fr\" target=\"_blank\" class=\"text-primary fw-bolder fs-4\">Site
                    officiel</a>
                <a href=\"#\" class=\"text-primary ms-10 fw-bolder fs-4\">Contact</a>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

{% endblock %}", "security/resset-password.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\security\\resset-password.html.twig");
    }
}
