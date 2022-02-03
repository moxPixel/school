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
class __TwigTemplate_314dc8d72bb8889964ca61eb4977a13303249c6123eda0758d6d39876571621a extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "security/resset-password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réinitialiser votre mot de passe";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 39));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
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
        return array (  149 => 57,  145 => 56,  135 => 48,  129 => 47,  121 => 45,  116 => 44,  113 => 43,  110 => 42,  108 => 41,  103 => 40,  95 => 39,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/resset-password.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/security/resset-password.html.twig");
    }
}
