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

/* security/login.html.twig */
class __TwigTemplate_d90de82c8725f6b742d9be23af4ea00939d868957395263673437cb773336d6c extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<!--begin::Main-->
<div class=\" d-flex flex-column flex-root\">
    <!--begin::Login-->
    <div class=\"d-flex flex-column flex-lg-row flex-column-fluid hero-section-video  \" id=\"kt_login\">
        <!--begin::Aside-->
        <div class=\"d-flex flex-column flex-lg-row-auto w-lg-600px pt-15 pt-lg-0 prime login \">
            <!--begin::Aside Top-->
            <div class=\"d-flex flex-column-auto flex-column pt-lg-40 pt-15 text-center\">
                <div class=\"hero-logo\">
                    <img class=\"logo\" src=\"assets/img/un_blanc.png\" alt=\"logo\">
                </div>
                <!-- /.col-lg-12 -->

                <!-- /.row -->
            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
            <div class=\"d-flex flex-row-fluid bgi-size-contain bgi-no-repeat bgi-position-y-bottom bgi-position-x-center min-h-350px\"
                style=\"background-image: url(assets/media/illustrations/students2.png)\">
                <svg id=\"svg\"  style=\"margin-left:0%; z-index:0; position:relative;\">
                    <g id=\"linegroup\" style=\"stroke-opacity: 0.7; stroke: rgb(26, 26, 131); stroke-width: 2;\" >
                      <line id=\"line\"  x1=\"120\" y1=\"80\" x2=\"116\" y2=\"115\" />
                      <line id=\"line1\" x1=\"200\" y1=\"65\" x2=\"196\" y2=\"100\"/>
                      <line id=\"line2\" x1=\"160\" y1=\"50\" x2=\"156\" y2=\"85\"/>
                      </g>
                      <g id=\"str\" fill=\"white\"  >
                     <circle cx=\"160\" cy=\"70\" r=\"46\"  />
                        <circle cx=\"120\" cy=\"90\" r=\"40\"  />
                        <circle cx=\"210\" cy=\"93\" r=\"37\"  />
                        <rect x=\"120\" y=\"100\" width=\"90\" height=\"30\" />
                      </g>
                      <polygon id=\"lightning\" points=\" 140,130 80,200 120,180 30,300 160,160 130,167 160,130\" fill=\"yellow\" style=\"opacity:0;\"/>
                      
                      
                      <animate xlink:href=\"#str\" attributeName=\"fill\" dur=\"1300ms\" to=\"grey\" begin=\"click\" fill=\"freeze\"  id=\"el\" />
                        <animate xlink:href=\"#str\" attributeName=\"fill\" dur=\"1200ms\" to=\"white\" begin=\"el.begin + 2950ms\" fill=\"freeze\" id=\"elo\" />
                      
                      <animate xlink:href=\"#line\" attributeName=\"y1\" dur=\"1200ms\" to=\"465\" begin=\"el.begin+1300ms\" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line1\" attributeName=\"y1\" dur=\"1200ms\" to=\"465\" begin=\"el.begin+1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line2\" attributeName=\"y1\" dur=\"1200ms\" to=\"465\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line\" attributeName=\"y2\" dur=\"1200ms\" to=\"500\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line1\" attributeName=\"y2\" dur=\"1200ms\" to=\"500\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line2\" attributeName=\"y2\" dur=\"1200ms\" to=\"500\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line\" attributeName=\"x1\" dur=\"1200ms\" to=\"100\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line\" attributeName=\"x2\" dur=\"1200ms\" to=\"96\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line1\" attributeName=\"x1\" dur=\"1200ms\" to=\"180\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line1\" attributeName=\"x2\" dur=\"1200ms\" to=\"176\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line2\" attributeName=\"x1\" dur=\"1200ms\" to=\"140\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      <animate xlink:href=\"#line2\" attributeName=\"x2\" dur=\"1200ms\" to=\"136\" begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"li\" />
                      
                      <animate xlink:href=\"#linegroup\" attributeName=\"opacity\" attributeType=\"CSS\" from=\"1\" to=\"0\" dur=\"1200ms\"  begin=\"el.begin + 1300ms \" fill=\"freeze\" id=\"\" />
                      
                      <animate xlink:href=\"#lightning\" attributeName=\"opacity\" attributeType=\"CSS\" from=\"0\" to=\"1\" dur=\"100ms\"  begin=\"el.begin + 1000ms \" fill=\"freeze\" id=\"light\" />
                      <animate xlink:href=\"#lightning\" attributeName=\"opacity\" attributeType=\"CSS\"  to=\"0\" dur=\"100ms\"  begin=\"light.begin + 100ms \" fill=\"freeze\" id=\"ligh\" />
                    </svg></div>
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div
            class=\"login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-20 px-10 p-lg-7 mx-auto mw-450px w-100\">
            <!--begin::Wrapper-->
            <div class=\"d-flex flex-column-fluid flex-center py-10\">
                <!--begin::Signin Form-->
                <form method=\"post\" class=\"form w-100\" novalidate=\"novalidate\" id=\"kt_login_signin_form\"
                    data-after-login-url=\"index.html\">

                    ";
        // line 72
        if (($context["error"] ?? null)) {
            // line 73
            echo "                    <div class=\"alert alert-danger mg-b-0 mb-2\" role=\"alert\">
                        <strong>Oops!</strong> ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 74), "security"), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 76
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 77
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                        <span class=\"alert-inner--text\"><strong>";
                // line 78
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["label"]), "html", null, true);
                echo " : </strong> ";
                echo $context["message"];
                // line 79
                echo "</span>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    <!--begin::Title-->
                    <div class=\"pb-5 pb-lg-15\">
                        <h3 class=\"fw-bolder display-6\">Bienvenue chez Unlock formation</h3>
                        <div class=\"text-muted fw-bold fs-3\">Ouvrir un compte ?
                            <a href=\"#\" class=\"text-primary fw-bolder\" id=\"kt_login_signin_form_singup_button\">Fair une
                                demande</a>
                        </div>
                    </div>
                    <!--begin::Title-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fs-6  fw-bolder pt-5\" for=\"email\">Email</label>
                        <input type=\"text\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"email\"
                            class=\"form-control form-control-lg form-control-solid\" placeholder=\"Entrez votre email\">
                    </div>
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label  fs-6 fw-bolder pt-5\" for=\"password\">Mot de passe</label>
                        <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset-password");
        echo "\" class=\"text-primary fs-6 fw-bolder text-hover-primary pt-5\"
                            id=\"kt_login_signin_form_password_reset_button\">Mot de passe oublier</a>
                        <input type=\"password\" name=\"password\" id=\"password\"
                            class=\"form-control form-control-lg form-control-solid\"
                            placeholder=\"Entrez votre mot de passe\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    </div>
                    <!--begin::Action-->
                    <div class=\"pb-lg-0 pb-5\">
                        <button type=\"submit\" id=\"kt_login_signin_form_submit_button\"
                            class=\"btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-3\">Connexion</button>
                        <button type=\"button\" class=\"btn btn-light-primary fw-bolder px-8 py-4 my-3 fs-6\">
                            <img src=\"assets/media/svg/brand-logos/google-icon.svg\" class=\"w-20px h-20px me-3\"
                                alt=\"\" />Se connecter avec Google</button>
                    </div>
                    <!--end::Action-->
                </form>
                <!--End form-->
                <!--end::Signin Form-->

                <!--begin::Password Reset Form-->
                <form class=\"form d-none w-100\" novalidate=\"novalidate\" id=\"kt_login_password_reset_form\">
                    <!--begin::Title-->
                    <div class=\"pb-5 pb-lg-10\">
                        <h3 class=\"fw-bolder text-dark display-6\">Forgotten Password ?</h3>
                        <p class=\"text-muted fw-bold fs-3\">Enter your email to reset your password</p>
                    </div>
                    <!--end::Title-->
                    <!--begin::Form group-->
                    <div class=\"fv-row mb-10\">
                        <label class=\"form-label fs-6 fw-bolder text-dark pt-5\">Email</label>
                        <input class=\"form-control form-control-lg form-control-solid\" type=\"email\" placeholder=\"\"
                            name=\"email\" autocomplete=\"off\" />
                    </div>
                    <!--end::Form group-->
                    <!--begin::Form group-->
                    <div class=\"d-flex flex-wrap pb-lg-0\">
                        <button type=\"button\" id=\"kt_login_password_reset_form_submit_button\"
                            class=\"btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-4\">Submit</button>
                        <button type=\"button\" id=\"kt_login_password_reset_form_cancel_button\"
                            class=\"btn btn-light-primary fw-bolder fs-6 px-8 py-4 my-3\">Cancel</button>
                    </div>
                    <!--end::Form group-->
                </form>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 103,  192 => 98,  184 => 93,  171 => 82,  165 => 81,  157 => 79,  153 => 78,  148 => 77,  139 => 76,  133 => 74,  130 => 73,  128 => 72,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/security/login.html.twig");
    }
}
