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

/* messenger/index.html.twig */
class __TwigTemplate_6dca7ff0bb9dfa46613455e0353c088325e4ce2367c28181162ad6cf4c50ceed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messenger/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messenger/index.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"kt_modal_message\" tabindex=\"-1\" aria-hidden=\"true\">
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
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MessengerController::sendMessage", ["request" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27)]));
        echo "
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--begin::Drawers-->
<!--begin::Chat drawer-->
<div id=\"kt_drawer_chat\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"chat\"
    data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"{default:'300px', 'md': '500px'}\"
    data-kt-drawer-direction=\"end\" data-kt-drawer-toggle=\"#kt_drawer_chat_toggle\"
    data-kt-drawer-close=\"#kt_drawer_chat_close\">
    <!--begin::Messenger-->
    <div class=\"card w-100\" id=\"kt_drawer_chat_messenger\">
        <!--begin::Card header-->
        <div class=\"card-header pe-5\" id=\"kt_drawer_chat_messenger_header\">
            <!--begin::Title-->
            <div class=\"card-title\">
                <!--begin::User-->
                <div class=\"d-flex justify-content-center flex-column me-3\">
                    <a href=\"#\"
                        class=\"fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "fullname", [], "any", false, false, false, 49), "html", null, true);
        echo "</a>
                    <!--begin::Info-->
                    <div class=\"mb-0 lh-1\">
                        <span class=\"badge badge-success badge-circle w-10px h-10px me-1\"></span>
                        <span class=\"fs-7 fw-bold text-gray-400\">Actif</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class=\"card-toolbar\">
                <!--begin::Menu-->
                <div class=\"me-2\">
                    <button class=\"btn btn-sm btn-icon btn-active-icon-primary\" data-kt-menu-trigger=\"click\"
                        data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"top-end\">
                        <i class=\"bi bi-three-dots fs-3\"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3\"
                        data-kt-menu=\"true\">
                        <!--begin::Heading-->
                        <div class=\"menu-item px-3\">
                            <div class=\"menu-content text-muted pb-2 px-3 fs-7 text-uppercase\">Plus</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_message\">Envoyer un message</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link flex-stack px-3\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_invite_friends\">Messages envoyer
                                <span class=\" bg-light-success\">";
        // line 86
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "sent", [], "any", false, false, false, 86)), "html", null, true);
        echo "</span></a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class=\"btn btn-sm btn-icon btn-active-icon-primary\" id=\"kt_drawer_chat_close\">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                    <span class=\"svg-icon svg-icon-2x\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path opacity=\"0.25\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                d=\"M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z\"
                                fill=\"#12131A\" />
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                d=\"M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z\"
                                fill=\"#12131A\" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class=\"card-body\" id=\"kt_drawer_chat_messenger_body\">
            <section>
                <div class=\" mt-2 card custom-card\">
                    <div class=\"fullmessages card-body messagescontent\">
                        <div class=\"card-header pb-0 border-bottom-0\">
                            <label class=\"main-content-label mb-2 pt-1\">Vos messages</label>
                            <p class=\"tx-12 mb-0 text-muted\">Consulter vos messages</p>
                            <br>
                            ";
        // line 122
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "received", [], "any", false, false, false, 122)), 0))) {
            // line 123
            echo "                            <h3 class=\"mt-4 text-center\">Vous n'avez aucun messages</h3>
                            ";
        }
        // line 125
        echo "                            </ul>
                        </div>
                        <ul class=\"visitor mb-0 d-block users-images list-unstyled list-unstyled-border\">
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "received", [], "any", false, false, false, 128)));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            echo "                            <a href=\"\">
                                <div class=\"card-body pb-0\">
                                    <!--begin::Header-->
                                    <div class=\"d-flex align-items-center\">
                                        <!--begin::Symbol-->
                                        <div class=\"symbol symbol-45px me-5\">
                                            ";
            // line 135
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 135), "sexe", [], "any", false, false, false, 135), 0))) {
                // line 136
                echo "                                            <span class=\"symbol-label bg-light align-items-end\">
                                                <img alt=\"Logo\" src=\"/assets/media/svg/avatars/011-boy-5.svg\" class=\"mh-40px\">
                                            </span>
                                            ";
            } else {
                // line 140
                echo "                                            <span class=\"symbol-label bg-light align-items-end\">
                                                <img alt=\"Logo\" src=\"/assets/media/svg/avatars/003-girl-1.svg\" class=\"mh-40px\">
                                            </span>
                                            ";
            }
            // line 144
            echo "                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class=\"d-flex flex-column flex-grow-1\">
                                            <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\" class=\"text-gray-800 text-hover-primary mb-1 fs-6 fw-bolder\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 148), "fullname", [], "any", false, false, false, 148), "html", null, true);
            echo "</a>
                                            <span class=\"text-muted fw-bold\">";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdat", [], "any", false, false, false, 149), "d-M-Y"), "html", null, true);
            echo "</span> 
                                             ";
            // line 150
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 150), 0))) {
                // line 151
                echo "                                             <span class=\"text-danger\">Non ouvert</span>
                                             ";
            }
            // line 153
            echo "                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Dropdown-->
                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-color-primary btn-active-light-primary\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class=\"svg-icon svg-icon-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\"></rect>
                                                        <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                        <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                        <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu-->
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px\" data-kt-menu=\"true\" style=\"\">
                                            <div class=\"menu-item px-3\">
                                                <div class=\"menu-content fs-6 text-dark fw-bolder px-3 py-4\">Plus</div>
                                            </div>
                                            <div class=\"separator mb-3 opacity-75\"></div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messenger_clear", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 177)]), "html", null, true);
            echo "\" class=\"menu-link px-3\">Supprimer ce message</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\" class=\"menu-link px-3\">Répondre à ce message</a>
                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Dropdown-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class=\"pt-5\">
                                        <!--begin::Text-->
                                        <p class=\"text-gray-800 fs-6 fw-normal mb-2\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 190), "html", null, true);
            echo "</p>
                                        <!--end::Text-->
                                        <!--begin::Action-->
                                        ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, $context["message"], "file", [], "any", false, false, false, 193)) {
                // line 194
                echo "                                        <a target=\"blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/joint/" . twig_get_attribute($this->env, $this->source, $context["message"], "file", [], "any", false, false, false, 194))), "html", null, true);
                echo "\" alt=\"Logo Profile\" ><button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"\" data-bs-original-title=\"Voir le fichier\">
                                            <i class=\"text-primary bi bi-paperclip fs-3\"></i>
                                        </button></a>
                                        ";
            }
            // line 198
            echo "                                        <div class=\"d-flex align-items-center\">
                                            <a href=\"#\" class=\"btn btn-sm btn-color-muted btn-active-light-primary fw-bolder\">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class=\"svg-icon svg-icon-3 pe-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                    <path opacity=\"0.3\" d=\"M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z\" fill=\"black\"></path>
                                                    <rect x=\"6\" y=\"12\" width=\"7\" height=\"2\" rx=\"1\" fill=\"black\"></rect>
                                                    <rect x=\"6\" y=\"7\" width=\"12\" height=\"2\" rx=\"1\" fill=\"black\"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->";
            // line 208
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "recipient", [], "any", false, false, false, 208)), "html", null, true);
            echo "</a>
                                            <a href=\"#\" class=\"btn btn-sm btn-color-muted btn-active-light-danger fw-bolder\">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                            <span class=\"svg-icon svg-icon-3 pe-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                    <path d=\"M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z\" fill=\"black\"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Separator-->
                                    <div class=\"separator pt-4\"></div>
                                    <!--end::Separator-->
                                </div>
                            </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                        </ul>
                    </div>

                </div>

            </section>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "messenger/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 227,  307 => 208,  295 => 198,  287 => 194,  285 => 193,  279 => 190,  266 => 180,  260 => 177,  234 => 153,  230 => 151,  228 => 150,  224 => 149,  218 => 148,  212 => 144,  206 => 140,  200 => 136,  198 => 135,  190 => 129,  186 => 128,  181 => 125,  177 => 123,  175 => 122,  136 => 86,  96 => 49,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"kt_modal_message\" tabindex=\"-1\" aria-hidden=\"true\">
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
                <div class=\"modal-body\">
                    <!--begin::Stepper-->
                    {{ render(controller('App\\\\Controller\\\\MessengerController::sendMessage',{'request':app.request}))}}
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--begin::Drawers-->
<!--begin::Chat drawer-->
<div id=\"kt_drawer_chat\" class=\"bg-white\" data-kt-drawer=\"true\" data-kt-drawer-name=\"chat\"
    data-kt-drawer-activate=\"true\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"{default:'300px', 'md': '500px'}\"
    data-kt-drawer-direction=\"end\" data-kt-drawer-toggle=\"#kt_drawer_chat_toggle\"
    data-kt-drawer-close=\"#kt_drawer_chat_close\">
    <!--begin::Messenger-->
    <div class=\"card w-100\" id=\"kt_drawer_chat_messenger\">
        <!--begin::Card header-->
        <div class=\"card-header pe-5\" id=\"kt_drawer_chat_messenger_header\">
            <!--begin::Title-->
            <div class=\"card-title\">
                <!--begin::User-->
                <div class=\"d-flex justify-content-center flex-column me-3\">
                    <a href=\"#\"
                        class=\"fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1\">{{app.user.fullname}}</a>
                    <!--begin::Info-->
                    <div class=\"mb-0 lh-1\">
                        <span class=\"badge badge-success badge-circle w-10px h-10px me-1\"></span>
                        <span class=\"fs-7 fw-bold text-gray-400\">Actif</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class=\"card-toolbar\">
                <!--begin::Menu-->
                <div class=\"me-2\">
                    <button class=\"btn btn-sm btn-icon btn-active-icon-primary\" data-kt-menu-trigger=\"click\"
                        data-kt-menu-placement=\"bottom-end\" data-kt-menu-flip=\"top-end\">
                        <i class=\"bi bi-three-dots fs-3\"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3\"
                        data-kt-menu=\"true\">
                        <!--begin::Heading-->
                        <div class=\"menu-item px-3\">
                            <div class=\"menu-content text-muted pb-2 px-3 fs-7 text-uppercase\">Plus</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link px-3\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_message\">Envoyer un message</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link flex-stack px-3\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_invite_friends\">Messages envoyer
                                <span class=\" bg-light-success\">{{ app.user.sent | length }}</span></a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class=\"btn btn-sm btn-icon btn-active-icon-primary\" id=\"kt_drawer_chat_close\">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/Close-Square.svg-->
                    <span class=\"svg-icon svg-icon-2x\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path opacity=\"0.25\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                d=\"M2.36899 6.54184C2.65912 4.34504 4.34504 2.65912 6.54184 2.36899C8.05208 2.16953 9.94127 2 12 2C14.0587 2 15.9479 2.16953 17.4582 2.36899C19.655 2.65912 21.3409 4.34504 21.631 6.54184C21.8305 8.05208 22 9.94127 22 12C22 14.0587 21.8305 15.9479 21.631 17.4582C21.3409 19.655 19.655 21.3409 17.4582 21.631C15.9479 21.8305 14.0587 22 12 22C9.94127 22 8.05208 21.8305 6.54184 21.631C4.34504 21.3409 2.65912 19.655 2.36899 17.4582C2.16953 15.9479 2 14.0587 2 12C2 9.94127 2.16953 8.05208 2.36899 6.54184Z\"
                                fill=\"#12131A\" />
                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                d=\"M8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L12 10.5858L14.2929 8.29289C14.6834 7.90237 15.3166 7.90237 15.7071 8.29289C16.0976 8.68342 16.0976 9.31658 15.7071 9.70711L13.4142 12L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L12 13.4142L9.70711 15.7071C9.31658 16.0976 8.68342 16.0976 8.29289 15.7071C7.90237 15.3166 7.90237 14.6834 8.29289 14.2929L10.5858 12L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289Z\"
                                fill=\"#12131A\" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class=\"card-body\" id=\"kt_drawer_chat_messenger_body\">
            <section>
                <div class=\" mt-2 card custom-card\">
                    <div class=\"fullmessages card-body messagescontent\">
                        <div class=\"card-header pb-0 border-bottom-0\">
                            <label class=\"main-content-label mb-2 pt-1\">Vos messages</label>
                            <p class=\"tx-12 mb-0 text-muted\">Consulter vos messages</p>
                            <br>
                            {% if app.user.received | length == 0 %}
                            <h3 class=\"mt-4 text-center\">Vous n'avez aucun messages</h3>
                            {% endif %}
                            </ul>
                        </div>
                        <ul class=\"visitor mb-0 d-block users-images list-unstyled list-unstyled-border\">
                            {% for message in app.user.received |reverse %}
                            <a href=\"\">
                                <div class=\"card-body pb-0\">
                                    <!--begin::Header-->
                                    <div class=\"d-flex align-items-center\">
                                        <!--begin::Symbol-->
                                        <div class=\"symbol symbol-45px me-5\">
                                            {% if message.sender.sexe == 0 %}
                                            <span class=\"symbol-label bg-light align-items-end\">
                                                <img alt=\"Logo\" src=\"/assets/media/svg/avatars/011-boy-5.svg\" class=\"mh-40px\">
                                            </span>
                                            {% else %}
                                            <span class=\"symbol-label bg-light align-items-end\">
                                                <img alt=\"Logo\" src=\"/assets/media/svg/avatars/003-girl-1.svg\" class=\"mh-40px\">
                                            </span>
                                            {% endif %}
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class=\"d-flex flex-column flex-grow-1\">
                                            <a href=\"{{path('single_message', {'id': message.id})}}\" class=\"text-gray-800 text-hover-primary mb-1 fs-6 fw-bolder\">{{message.sender.fullname }}</a>
                                            <span class=\"text-muted fw-bold\">{{message.createdat | date('d-M-Y')}}</span> 
                                             {% if message.isRead == 0 %}
                                             <span class=\"text-danger\">Non ouvert</span>
                                             {% endif %}
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Dropdown-->
                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-color-primary btn-active-light-primary\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            <span class=\"svg-icon svg-icon-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\"></rect>
                                                        <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                        <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                        <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu-->
                                        <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px\" data-kt-menu=\"true\" style=\"\">
                                            <div class=\"menu-item px-3\">
                                                <div class=\"menu-content fs-6 text-dark fw-bolder px-3 py-4\">Plus</div>
                                            </div>
                                            <div class=\"separator mb-3 opacity-75\"></div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{ path('messenger_clear', { 'id':message.id }) }}\" class=\"menu-link px-3\">Supprimer ce message</a>
                                            </div>
                                            <div class=\"menu-item px-3\">
                                                <a href=\"{{path('single_message', {'id': message.id})}}\" class=\"menu-link px-3\">Répondre à ce message</a>
                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Dropdown-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class=\"pt-5\">
                                        <!--begin::Text-->
                                        <p class=\"text-gray-800 fs-6 fw-normal mb-2\">{{message.message }}</p>
                                        <!--end::Text-->
                                        <!--begin::Action-->
                                        {% if message.file %}
                                        <a target=\"blank\" href=\"{{ asset('uploads/joint/' ~ message.file )}}\" alt=\"Logo Profile\" ><button class=\"btn btn-sm btn-icon btn-active-light-primary me-1\" type=\"button\" data-bs-toggle=\"tooltip\" title=\"\" data-bs-original-title=\"Voir le fichier\">
                                            <i class=\"text-primary bi bi-paperclip fs-3\"></i>
                                        </button></a>
                                        {% endif %}
                                        <div class=\"d-flex align-items-center\">
                                            <a href=\"#\" class=\"btn btn-sm btn-color-muted btn-active-light-primary fw-bolder\">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class=\"svg-icon svg-icon-3 pe-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                    <path opacity=\"0.3\" d=\"M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z\" fill=\"black\"></path>
                                                    <rect x=\"6\" y=\"12\" width=\"7\" height=\"2\" rx=\"1\" fill=\"black\"></rect>
                                                    <rect x=\"6\" y=\"7\" width=\"12\" height=\"2\" rx=\"1\" fill=\"black\"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->{{message.recipient | length }}</a>
                                            <a href=\"#\" class=\"btn btn-sm btn-color-muted btn-active-light-danger fw-bolder\">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                            <span class=\"svg-icon svg-icon-3 pe-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                    <path d=\"M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z\" fill=\"black\"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Separator-->
                                    <div class=\"separator pt-4\"></div>
                                    <!--end::Separator-->
                                </div>
                            </a>
                            {% endfor %}
                        </ul>
                    </div>

                </div>

            </section>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->", "messenger/index.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\messenger\\index.html.twig");
    }
}
