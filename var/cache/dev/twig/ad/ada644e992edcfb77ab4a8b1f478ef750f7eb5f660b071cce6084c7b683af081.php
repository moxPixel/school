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

/* components/_vertical-menu-student.html.twig */
class __TwigTemplate_33465753422c6ca201db3fe8d86d2ea9183ce9eaeadb2aa95bcfcf48e596a353 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_vertical-menu-student.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_vertical-menu-student.html.twig"));

        // line 1
        echo "<div id=\"kt_sidebar\" class=\"prime sidebar\" data-kt-drawer=\"true\" data-kt-drawer-name=\"sidebar\"
    data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\"
    data-kt-drawer-width=\"{default:'200px', '350px': '300px'}\" data-kt-drawer-direction=\"end\"
    data-kt-drawer-toggle=\"#kt_sidebar_toggler\">
    <a class=\"logo-sidBar m-3\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\">
        <img alt=\"Logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/unlockW.png"), "html", null, true);
        echo "\" class=\"h-30px\" />
    </a>
    <!--begin::Sidebar Content-->
    <div class=\"d-flex flex-column sidebar-body\">
        <!--begin::Sidebar Content-->
        <div id=\"kt_sidebar_content\" class=\"py-10 px-2 px-lg-8\">
            <div class=\"boxHover me-lg-n5 pe-lg-4\" data-kt-scroll=\"true\" data-kt-scroll-height=\"auto\"
                data-kt-scroll-offset=\"0px\" data-kt-scroll-wrappers=\"#kt_sidebar_content\">
                <!--begin::Card-->
                <div class=\"card bg-transparent\">
                    <!--begin::Body-->
                    <div class=\"card-body px-0\">
                        <div class=\"pt-0\">
                            <!--begin::Chart-->
                            <div class=\"d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center\"
                                style=\"background-image:url('";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/svg/illustrations/bg-2.svg"), "html", null, true);
        echo "')\">
                                <div class=\"position-absolute mb-7\">
                                    <div
                                        class=\"symbol symbol-circle symbol-100px overflow-hidden d-flex flex-center z-index-1\">
                                        ";
        // line 25
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "sexe", [], "any", false, false, false, 25), 0))) {
            // line 26
            echo "
                                        <span class=\"symbol-label bg-warning align-items-end\">
                                            <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
                                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                                xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                viewBox=\"0 0 464.001 464.001\"
                                                style=\"enable-background:new 0 0 464.001 464.001;\" xml:space=\"preserve\">
                                                <g>
                                                    <path style=\"fill:#F6B47B;\"
                                                        d=\"M391.863,422.878l-0.726-6.536c-0.287-2.586-2.616-4.449-5.201-4.162l-0.407,0.045l-7.027-56.214
                                           c-1.529-12.228-9.943-22.491-21.633-26.389l-51.75-17.25c-1.039,2.343-2.19,4.629-3.44,6.854l-10.738-3.579
                                           c-6.534-2.178-10.94-8.292-10.94-15.179v-25.802l34.461-14.359C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
                                           s-10.745-24-24-24v-16c0-22.091-17.909-40-40-40H160c-22.092,0-40,17.909-40,40v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
                                           c0,19.377,11.651,36.854,29.538,44.308L184,274.668v25.801c0,6.887-4.407,13.001-10.94,15.179l-10.738,3.579
                                           c-1.25-2.225-2.401-4.51-3.44-6.854l-51.75,17.25c-11.691,3.897-20.105,14.161-21.633,26.389l-7.027,56.214l-0.407-0.045
                                           c-2.585-0.287-4.914,1.576-5.201,4.162l-0.726,6.536c-0.287,2.585,1.576,4.914,4.161,5.201l11.702,1.3v18.621
                                           c0,8.837,7.164,16,16,16h40h176h40c8.837,0,16-7.163,16-16V429.38l11.702-1.3C390.287,427.792,392.151,425.463,391.863,422.878z\" />
                                                    <path style=\"fill:#734A3E;\"
                                                        d=\"M343.979,56.209c0-0.071,0.021-0.137,0.021-0.208c0-22.091-17.909-40-40-40
                                           c-6.219,0-12.033,1.541-17.282,4.073C280.127,12.717,270.655,8,260,8c-5.583,0-10.804,1.379-15.52,3.647
                                           C240.277,4.695,232.718,0,224,0c-9.605,0-17.829,5.68-21.665,13.831C197.137,10.181,190.835,8,184,8
                                           c-13.396,0-24.836,8.247-29.605,19.928C151.593,25.513,147.99,24,144,24c-8.836,0-16,7.163-16,16c0,0-40-0.333-40,48
                                           c0,22.526,16,88,16,88h256c0,0,8-37,8-88C368,74.142,355.123,63.141,343.979,56.209z\" />
                                                    <path style=\"fill:#5E342E;\"
                                                        d=\"M219.297,127.526C199.449,125.172,184,108.481,184,88c0-20.59,15.616-37.348,35.617-39.558
                                           C217.34,43.415,216,37.877,216,32c0-12.542,5.855-23.605,14.906-30.897C228.713,0.432,226.419,0,224,0
                                           c-9.605,0-17.829,5.68-21.665,13.831C197.137,10.181,190.835,8,184,8c-13.396,0-24.836,8.247-29.605,19.928
                                           C151.593,25.513,147.99,24,144,24c-8.836,0-16,7.163-16,16c0,0-40-0.333-40,48c0,22.526,16,88,16,88h115L219.297,127.526z\" />
                                                    <path style=\"fill:#E2A071;\" d=\"M280,274.001h-96v26.468c0,5.759-3.186,10.831-8.017,13.659
                                           C243.077,325.871,280,274.001,280,274.001z\" />
                                                    <path style=\"fill:#FDC88E;\" d=\"M344,160v-16c0-22.091-17.909-40-40-40H160c-22.092,0-40,17.909-40,40v16c-13.255,0-24,10.745-24,24
                                           s10.745,24,24,24v8c0,19.377,11.651,36.854,29.538,44.308l51.691,21.538c9.75,4.063,20.208,6.154,30.77,6.154l0,0
                                           c10.562,0,21.019-2.091,30.769-6.154l51.694-21.539C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
                                           S357.255,160,344,160z\" />
                                                    <path style=\"fill:#623F33;\" d=\"M176,192L176,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
                                           C184,188.4,180.4,192,176,192z\" />
                                                    <path style=\"fill:#623F33;\" d=\"M288,192L288,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
                                           C296,188.4,292.4,192,288,192z\" />
                                                    <g>
                                                        <path style=\"fill:#E2A071;\"
                                                            d=\"M232,248.219c-14.223,0-27.527-3.5-36.5-9.605c-3.652-2.484-4.602-7.461-2.113-11.113
                                               c2.48-3.648,7.461-4.598,11.113-2.113c6.289,4.277,16.57,6.832,27.5,6.832s21.211-2.555,27.5-6.832
                                               c3.66-2.492,8.629-1.539,11.113,2.113c2.488,3.652,1.539,8.629-2.113,11.113C259.528,244.719,246.223,248.219,232,248.219z\" />
                                                    </g>
                                                    <path style=\"fill:#F6B47B;\"
                                                        d=\"M161.996,243.723c-6.482-6.95-9.995-16.121-9.995-25.625V104.806c-18.257,3.707-32,19.843-32,39.194
                                           v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8c0,19.378,11.651,36.855,29.538,44.308l51.69,21.538
                                           c2.53,1.054,5.112,1.962,7.727,2.749C186.111,267.883,170.905,253.275,161.996,243.723z\" />
                                                    <path style=\"fill:#43A0C5;\" d=\"M378.502,356.012c-1.529-12.228-9.943-22.491-21.633-26.389l-51.75-17.25L256,344l-16,16
                                           c-3.25,0-12.167,0-16,0l-16-16l-49.119-31.628l-51.75,17.25c-11.691,3.897-20.105,14.161-21.633,26.389l-7.609,60.872l66.11,7.117
                                           v40h176v-40h67L378.502,356.012z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M144,430.04v-18.106c0-7.697-2.774-15.135-7.813-20.953l-44.019-50.813
                                           c-3.552,4.497-5.93,9.93-6.669,15.843l-8.356,66.847C89.867,423.622,123.711,427.587,144,430.04z\" />
                                                    <path style=\"fill:#1179A2;\" d=\"M144,419.507l-65.936-7.326c-2.586-0.287-4.914,1.576-5.202,4.161l-0.726,6.536
                                           c-0.287,2.585,1.576,4.914,4.161,5.201L144,435.602V419.507z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M320,430.04v-18.106c0-7.697,2.774-15.135,7.813-20.953l44.019-50.813
                                           c3.552,4.497,5.93,9.93,6.669,15.843l8.356,66.847C374.134,423.622,340.289,427.587,320,430.04z\" />
                                                    <path style=\"fill:#1179A2;\" d=\"M320,419.507l65.936-7.326c2.586-0.287,4.914,1.576,5.202,4.161l0.726,6.536
                                           c0.287,2.585-1.576,4.914-4.161,5.201L320,435.602V419.507z\" />
                                                    <path style=\"fill:#2C8CB3;\" d=\"M180.438,302.657L208,344l-24,32l-32-64l17.344-11.562
                                           C173.02,297.987,177.987,298.98,180.438,302.657z\" />
                                                    <path style=\"fill:#2C8CB3;\" d=\"M283.563,302.657L256,344l24,32l32-64l-17.344-11.562
                                           C290.98,297.987,286.014,298.98,283.563,302.657z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M232,424L232,424c-4.418,0-8-3.582-8-8v-56h16v56C240,420.419,236.419,424,232,424z\" />
                                                    <path style=\"fill:#734A3E;\"
                                                        d=\"M332,72c-4.516,0-8.72,1.169-12.497,3.068C317.048,55.331,300.402,40,280,40
                                           c-13.996,0-26.273,7.215-33.421,18.101C243.312,56.765,239.749,56,236,56s-7.312,0.765-10.579,2.101
                                           C218.274,47.215,205.996,40,192,40c-22.091,0-40,17.909-40,40s17.909,40,40,40c11.4,0,21.625-4.824,28.911-12.475
                                           c4.361,2.803,9.52,4.475,15.089,4.475s10.729-1.672,15.089-4.475C258.376,115.176,268.6,120,280,120
                                           c9.97,0,18.975-3.78,25.979-9.814C310.06,120.599,320.141,128,332,128c15.464,0,28-12.536,28-28S347.464,72,332,72z\" />
                                                    <circle style=\"fill:#5E342E;\" cx=\"159\" cy=\"83.001\" r=\"38\" />
                                                </g>
                                            </svg>

                                        </span>

                                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 106
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "sexe", [], "any", false, false, false, 106), 1))) {
            // line 107
            echo "                                        <span class=\"symbol-label bg-warning align-items-end\">
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                                xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                viewBox=\"0 0 464 464\" style=\"enable-background:new 0 0 464 464;\"
                                                xml:space=\"preserve\">
                                                <g>
                                                    <g>
                                                        <path style=\"fill:#E69F5F;\" d=\"M400,400c0,0-58.904,24-168,24S63.999,400,63.999,400l21.157-264.465
       C91.28,58.994,155.182,0,231.967,0h0.064c76.786,0,140.688,58.994,146.811,135.535L400,400z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#E09156;\" d=\"M274.813,6.378C261.245,2.26,246.891,0,232.031,0h-0.063C155.182,0,91.279,58.994,85.156,135.535
       L63.999,400c0,0,28.876,11.71,83.467,18.769L274.813,6.378z\" />
                                                    </g>
                                                    <path style=\"fill:#FFD7A3;\" d=\"M383.388,413.991l-1.526-5.227c-0.737-2.525-3.197-4.073-5.727-3.751l-5.334-40.002
   c-1.752-13.142-9.902-24.561-21.76-30.49l-17.232-8.616c-2.567-1.284-5.51-0.145-6.766,2.29l-34.103-12.548
   c-6.534-2.178-10.94-8.292-10.94-15.179v-25.802l34.461-14.359C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
   s-10.745-24-24-24v-16c0-22.091-17.909-56-40-56h-144c-22.091,0-40,33.909-40,56v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
   c0,19.378,11.651,36.855,29.538,44.308l34.462,14.36v25.801c0,6.887-4.407,13.001-10.94,15.179l-34.101,12.547
   c-1.242-2.438-4.179-3.583-6.742-2.302l-15.714,7.857c-13.41,6.705-21.552,18.121-23.304,31.262l-5.334,40.002
   c-2.53-0.322-4.989,1.226-5.727,3.751l-1.526,5.227c-0.817,2.799,0.79,5.729,3.588,6.546l11.8,3.441V448c0,8.836,7.164,16,16,16h32
   h176h32c8.836,0,16-7.164,16-16v-24.021l11.799-3.442C382.597,419.721,384.204,416.79,383.388,413.991z\" />
                                                    <path style=\"fill:#FDC88E;\" d=\"M280,274.667l-96,0.001v25.801c0,5.693-3.017,10.852-7.752,13.701
   C243.173,325.733,280,274.667,280,274.667z\" />
                                                    <path style=\"fill:#FFE1B2;\" d=\"M344,160v-16c0-22.091-17.909-56-40-56h-144c-22.091,0-40,33.909-40,56v16
   c-13.255,0-24,10.745-24,24s10.745,24,24,24v8c0,19.378,11.651,36.855,29.538,44.308l51.691,21.538
   c9.75,4.063,20.208,6.154,30.77,6.154l0,0c10.562,0,21.019-2.092,30.769-6.154l51.694-21.539C332.349,252.855,344,235.378,344,216
   v-8c13.255,0,24-10.745,24-24S357.255,160,344,160z\" />
                                                    <g>
                                                        <path style=\"fill:#623F33;\" d=\"M288,192L288,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
       C296,188.4,292.399,192,288,192z\" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path style=\"fill:#E4B07B;\"
                                                                d=\"M231.999,248.219c-14.223,0-27.527-3.5-36.5-9.605c-3.652-2.484-4.602-7.461-2.113-11.113
           c2.48-3.648,7.461-4.598,11.113-2.113c6.289,4.277,16.57,6.832,27.5,6.832s21.211-2.555,27.5-6.832
           c3.66-2.492,8.629-1.539,11.113,2.113c2.488,3.652,1.539,8.629-2.113,11.113C259.528,244.719,246.223,248.219,231.999,248.219z\" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#FFD7A3;\" d=\"M161.995,243.723c-6.482-6.949-9.995-16.121-9.995-25.625v-34.422
       c43.629-3.305,102.53-32.204,137.824-59.856L280,113.996c0,0-71,46-160,46l0,0V160c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
       c0,19.378,11.651,36.855,29.538,44.308l51.69,21.538c2.53,1.054,5.112,1.962,7.727,2.749
       C186.11,267.883,170.904,253.275,161.995,243.723z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#FF6473;\" d=\"M377.191,412.936l-6.39-47.925c-1.752-13.142-9.902-24.561-21.76-30.49l-17.232-8.616
       c-2.919-1.46-6.327,0.212-7.184,3.362c-11.09,40.761-48.352,70.736-92.627,70.736c-44.285,0-81.555-29.99-92.635-70.767
       c-0.852-3.134-4.242-4.797-7.146-3.345l-15.714,7.857c-13.41,6.705-21.552,18.121-23.304,31.262l-6.512,48.836
       C107.821,421.124,143.999,432,143.999,432v32h176v-32L377.191,412.936z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#F05467;\" d=\"M143.801,429.556c-0.489-9.513-3.665-18.705-9.402-26.355l-37.557-50.076
       c-1.813,3.734-3.087,7.708-3.645,11.887l-6.341,47.561L143.801,429.556z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#D4445A;\" d=\"M80.612,413.991c-0.817,2.799,0.79,5.73,3.588,6.546l59.799,17.444V432
       c0-3.779-0.594-7.481-1.461-11.113l-53.856-15.71c-2.798-0.816-5.728,0.79-6.544,3.588L80.612,413.991z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#F05467;\" d=\"M320.198,429.556c0.489-9.513,3.665-18.705,9.402-26.355l37.557-50.076
       c1.813,3.734,3.087,7.708,3.645,11.887l6.341,47.561L320.198,429.556z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#D4445A;\" d=\"M383.388,413.991c0.817,2.799-0.79,5.73-3.588,6.546L320,437.981V432
       c0-3.779,0.594-7.481,1.461-11.113l53.856-15.71c2.798-0.816,5.728,0.79,6.544,3.588L383.388,413.991z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#623F33;\" d=\"M175.999,192L175.999,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
       C183.999,188.4,180.399,192,175.999,192z\" />
                                                    </g>
                                                    <path style=\"fill:#E69F5F;\" d=\"M103.73,112.976l0.27,53.078c75.501,0,138.099-23.591,179.168-44.834
   c-12.761,13.843-31.957,32.686-59.169,54.78c0,0,71.23-28.324,111.132-63.501v-0.003c0-52.191-42.309-94.5-94.5-94.5h-42.403
   C145.85,17.996,103.463,60.599,103.73,112.976z\" />
                                                    <path style=\"fill:#E09156;\" d=\"M269.789,22.588c-9.184-2.977-18.981-4.591-29.157-4.591h-42.403
   c-52.379,0-94.765,42.602-94.499,94.98l0.27,53.079c22.016,0,42.926-2.016,62.534-5.385
   C238.805,105.325,269.672,22.902,269.789,22.588z\" />
                                                </g>
                                            </svg>
                                        </span>

                                        ";
        }
        // line 190
        echo "                                    </div>
                                </div>
                                <div id=\"kt_user_chart\" style=\"height: 200px\"></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class=\"pt-4\">
                                <!--begin::Title-->
                                <div class=\"text-center pb-12\">
                                    <!--begin::Username-->
                                    <h3 class=\"fw-bolder text-white fs-2 pb-4\">
                                        ";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "fullname", [], "any", false, false, false, 201), "html", null, true);
        echo "
                                    </h3>
                                    <!--end::Username-->
                                    <!--end::Action-->
                                    <span class=\"fw-bolder fs-6 text-primary px-4 py-2 rounded bg-white bg-opacity-10\">
                                        ";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "role", [], "any", false, false, false, 206), "html", null, true);
        echo "
                                    </span>
                                    <!--begin::Action-->
                                </div>
                                <!--begin::Cheacking-->
                                ";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DashboardController::sideBarChecking"));
        echo "
                                <!--end::Cheacking-->
                                <!--end::Title-->
                                <!--begin::Row-->
                                <div class=\"row row-cols-2 px-xl-12 sidebar-toolbar\">
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\"text-white fw-bolder fs-1 d-block pb-1\">
                                                ";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "session", [], "any", false, false, false, 220), "name", [], "any", false, false, false, 220), "html", null, true);
        echo "
                                            </span>
                                            <span class=\"fw-bold\">
                                                N° session
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Votre identifiant\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\"text-white fw-bolder fs-1 d-block pb-1\">
                                                ";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231), "html", null, true);
        echo "
                                            </span>
                                            <span class=\"fw-bold\">
                                                Identifiant
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Démarrage de votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\" text-white  fw-bolder fs-1 d-block pb-1 startsession\">
                                                ";
        // line 242
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "user", [], "any", false, false, false, 242), "session", [], "any", false, false, false, 242), "startSession", [], "any", false, false, false, 242), "d/m/y"), "html", null, true);
        echo "
                                            </span>
                                            <span class=\"fw-bold\">
                                                Debut session
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Cloture de votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\" text-white  fw-bolder fs-1 d-block pb-1 endsession\">
                                                ";
        // line 253
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "user", [], "any", false, false, false, 253), "session", [], "any", false, false, false, 253), "endSession", [], "any", false, false, false, 253), "d/m/y"), "html", null, true);
        echo "
                                            </span>
                                            <span class=\"fw-bold\">
                                                Fin session
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Items-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class=\"card-toolbar btnBox\">
                    <!--begin::Dropdown-->
                    <button type=\"button\" class=\"btn btn-md btn-icon btn-icon-white btn-info\"
                        data-kt-menu-trigger=\"click\" data-kt-menu-overflow=\"true\" data-kt-menu-placement=\"bottom-end\"
                        data-kt-menu-flip=\"top-end\">
                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                        <span class=\"svg-icon svg-icon-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" />
                                    <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                    <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                    <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu-->
                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px\"
                        data-kt-menu=\"true\">
                        <div class=\"menu-item px-3\">
                            <div class=\"menu-content fs-6 text-dark fw-bolder px-3 py-4\">
                                Manager
                            </div>
                        </div>
                        <div class=\"separator mb-3 opacity-75\"></div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_create_app\">Demandez un cours</a>
                        </div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_add_user\">Signaler une absence</a>
                        </div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_add_session\">Signaler un litige</a>
                        </div>
                    </div>
                    <!--end::Menu-->
                    <!--end::Dropdown-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Sidebar Content-->
    </div>
    <!--end::Sidebar Content-->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_vertical-menu-student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 253,  318 => 242,  304 => 231,  290 => 220,  278 => 211,  270 => 206,  262 => 201,  249 => 190,  164 => 107,  162 => 106,  80 => 26,  78 => 25,  71 => 21,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"kt_sidebar\" class=\"prime sidebar\" data-kt-drawer=\"true\" data-kt-drawer-name=\"sidebar\"
    data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\"
    data-kt-drawer-width=\"{default:'200px', '350px': '300px'}\" data-kt-drawer-direction=\"end\"
    data-kt-drawer-toggle=\"#kt_sidebar_toggler\">
    <a class=\"logo-sidBar m-3\" href=\"{{ path('dashboard_home' ) }}\">
        <img alt=\"Logo\" src=\"{{ asset('assets/img/unlockW.png') }}\" class=\"h-30px\" />
    </a>
    <!--begin::Sidebar Content-->
    <div class=\"d-flex flex-column sidebar-body\">
        <!--begin::Sidebar Content-->
        <div id=\"kt_sidebar_content\" class=\"py-10 px-2 px-lg-8\">
            <div class=\"boxHover me-lg-n5 pe-lg-4\" data-kt-scroll=\"true\" data-kt-scroll-height=\"auto\"
                data-kt-scroll-offset=\"0px\" data-kt-scroll-wrappers=\"#kt_sidebar_content\">
                <!--begin::Card-->
                <div class=\"card bg-transparent\">
                    <!--begin::Body-->
                    <div class=\"card-body px-0\">
                        <div class=\"pt-0\">
                            <!--begin::Chart-->
                            <div class=\"d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center\"
                                style=\"background-image:url('{{asset('assets/media/svg/illustrations/bg-2.svg')}}')\">
                                <div class=\"position-absolute mb-7\">
                                    <div
                                        class=\"symbol symbol-circle symbol-100px overflow-hidden d-flex flex-center z-index-1\">
                                        {% if app.user.sexe == 0 %}

                                        <span class=\"symbol-label bg-warning align-items-end\">
                                            <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
                                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                                xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                viewBox=\"0 0 464.001 464.001\"
                                                style=\"enable-background:new 0 0 464.001 464.001;\" xml:space=\"preserve\">
                                                <g>
                                                    <path style=\"fill:#F6B47B;\"
                                                        d=\"M391.863,422.878l-0.726-6.536c-0.287-2.586-2.616-4.449-5.201-4.162l-0.407,0.045l-7.027-56.214
                                           c-1.529-12.228-9.943-22.491-21.633-26.389l-51.75-17.25c-1.039,2.343-2.19,4.629-3.44,6.854l-10.738-3.579
                                           c-6.534-2.178-10.94-8.292-10.94-15.179v-25.802l34.461-14.359C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
                                           s-10.745-24-24-24v-16c0-22.091-17.909-40-40-40H160c-22.092,0-40,17.909-40,40v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
                                           c0,19.377,11.651,36.854,29.538,44.308L184,274.668v25.801c0,6.887-4.407,13.001-10.94,15.179l-10.738,3.579
                                           c-1.25-2.225-2.401-4.51-3.44-6.854l-51.75,17.25c-11.691,3.897-20.105,14.161-21.633,26.389l-7.027,56.214l-0.407-0.045
                                           c-2.585-0.287-4.914,1.576-5.201,4.162l-0.726,6.536c-0.287,2.585,1.576,4.914,4.161,5.201l11.702,1.3v18.621
                                           c0,8.837,7.164,16,16,16h40h176h40c8.837,0,16-7.163,16-16V429.38l11.702-1.3C390.287,427.792,392.151,425.463,391.863,422.878z\" />
                                                    <path style=\"fill:#734A3E;\"
                                                        d=\"M343.979,56.209c0-0.071,0.021-0.137,0.021-0.208c0-22.091-17.909-40-40-40
                                           c-6.219,0-12.033,1.541-17.282,4.073C280.127,12.717,270.655,8,260,8c-5.583,0-10.804,1.379-15.52,3.647
                                           C240.277,4.695,232.718,0,224,0c-9.605,0-17.829,5.68-21.665,13.831C197.137,10.181,190.835,8,184,8
                                           c-13.396,0-24.836,8.247-29.605,19.928C151.593,25.513,147.99,24,144,24c-8.836,0-16,7.163-16,16c0,0-40-0.333-40,48
                                           c0,22.526,16,88,16,88h256c0,0,8-37,8-88C368,74.142,355.123,63.141,343.979,56.209z\" />
                                                    <path style=\"fill:#5E342E;\"
                                                        d=\"M219.297,127.526C199.449,125.172,184,108.481,184,88c0-20.59,15.616-37.348,35.617-39.558
                                           C217.34,43.415,216,37.877,216,32c0-12.542,5.855-23.605,14.906-30.897C228.713,0.432,226.419,0,224,0
                                           c-9.605,0-17.829,5.68-21.665,13.831C197.137,10.181,190.835,8,184,8c-13.396,0-24.836,8.247-29.605,19.928
                                           C151.593,25.513,147.99,24,144,24c-8.836,0-16,7.163-16,16c0,0-40-0.333-40,48c0,22.526,16,88,16,88h115L219.297,127.526z\" />
                                                    <path style=\"fill:#E2A071;\" d=\"M280,274.001h-96v26.468c0,5.759-3.186,10.831-8.017,13.659
                                           C243.077,325.871,280,274.001,280,274.001z\" />
                                                    <path style=\"fill:#FDC88E;\" d=\"M344,160v-16c0-22.091-17.909-40-40-40H160c-22.092,0-40,17.909-40,40v16c-13.255,0-24,10.745-24,24
                                           s10.745,24,24,24v8c0,19.377,11.651,36.854,29.538,44.308l51.691,21.538c9.75,4.063,20.208,6.154,30.77,6.154l0,0
                                           c10.562,0,21.019-2.091,30.769-6.154l51.694-21.539C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
                                           S357.255,160,344,160z\" />
                                                    <path style=\"fill:#623F33;\" d=\"M176,192L176,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
                                           C184,188.4,180.4,192,176,192z\" />
                                                    <path style=\"fill:#623F33;\" d=\"M288,192L288,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
                                           C296,188.4,292.4,192,288,192z\" />
                                                    <g>
                                                        <path style=\"fill:#E2A071;\"
                                                            d=\"M232,248.219c-14.223,0-27.527-3.5-36.5-9.605c-3.652-2.484-4.602-7.461-2.113-11.113
                                               c2.48-3.648,7.461-4.598,11.113-2.113c6.289,4.277,16.57,6.832,27.5,6.832s21.211-2.555,27.5-6.832
                                               c3.66-2.492,8.629-1.539,11.113,2.113c2.488,3.652,1.539,8.629-2.113,11.113C259.528,244.719,246.223,248.219,232,248.219z\" />
                                                    </g>
                                                    <path style=\"fill:#F6B47B;\"
                                                        d=\"M161.996,243.723c-6.482-6.95-9.995-16.121-9.995-25.625V104.806c-18.257,3.707-32,19.843-32,39.194
                                           v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8c0,19.378,11.651,36.855,29.538,44.308l51.69,21.538
                                           c2.53,1.054,5.112,1.962,7.727,2.749C186.111,267.883,170.905,253.275,161.996,243.723z\" />
                                                    <path style=\"fill:#43A0C5;\" d=\"M378.502,356.012c-1.529-12.228-9.943-22.491-21.633-26.389l-51.75-17.25L256,344l-16,16
                                           c-3.25,0-12.167,0-16,0l-16-16l-49.119-31.628l-51.75,17.25c-11.691,3.897-20.105,14.161-21.633,26.389l-7.609,60.872l66.11,7.117
                                           v40h176v-40h67L378.502,356.012z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M144,430.04v-18.106c0-7.697-2.774-15.135-7.813-20.953l-44.019-50.813
                                           c-3.552,4.497-5.93,9.93-6.669,15.843l-8.356,66.847C89.867,423.622,123.711,427.587,144,430.04z\" />
                                                    <path style=\"fill:#1179A2;\" d=\"M144,419.507l-65.936-7.326c-2.586-0.287-4.914,1.576-5.202,4.161l-0.726,6.536
                                           c-0.287,2.585,1.576,4.914,4.161,5.201L144,435.602V419.507z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M320,430.04v-18.106c0-7.697,2.774-15.135,7.813-20.953l44.019-50.813
                                           c3.552,4.497,5.93,9.93,6.669,15.843l8.356,66.847C374.134,423.622,340.289,427.587,320,430.04z\" />
                                                    <path style=\"fill:#1179A2;\" d=\"M320,419.507l65.936-7.326c2.586-0.287,4.914,1.576,5.202,4.161l0.726,6.536
                                           c0.287,2.585-1.576,4.914-4.161,5.201L320,435.602V419.507z\" />
                                                    <path style=\"fill:#2C8CB3;\" d=\"M180.438,302.657L208,344l-24,32l-32-64l17.344-11.562
                                           C173.02,297.987,177.987,298.98,180.438,302.657z\" />
                                                    <path style=\"fill:#2C8CB3;\" d=\"M283.563,302.657L256,344l24,32l32-64l-17.344-11.562
                                           C290.98,297.987,286.014,298.98,283.563,302.657z\" />
                                                    <path style=\"fill:#2C8CB3;\"
                                                        d=\"M232,424L232,424c-4.418,0-8-3.582-8-8v-56h16v56C240,420.419,236.419,424,232,424z\" />
                                                    <path style=\"fill:#734A3E;\"
                                                        d=\"M332,72c-4.516,0-8.72,1.169-12.497,3.068C317.048,55.331,300.402,40,280,40
                                           c-13.996,0-26.273,7.215-33.421,18.101C243.312,56.765,239.749,56,236,56s-7.312,0.765-10.579,2.101
                                           C218.274,47.215,205.996,40,192,40c-22.091,0-40,17.909-40,40s17.909,40,40,40c11.4,0,21.625-4.824,28.911-12.475
                                           c4.361,2.803,9.52,4.475,15.089,4.475s10.729-1.672,15.089-4.475C258.376,115.176,268.6,120,280,120
                                           c9.97,0,18.975-3.78,25.979-9.814C310.06,120.599,320.141,128,332,128c15.464,0,28-12.536,28-28S347.464,72,332,72z\" />
                                                    <circle style=\"fill:#5E342E;\" cx=\"159\" cy=\"83.001\" r=\"38\" />
                                                </g>
                                            </svg>

                                        </span>

                                        {% elseif app.user.sexe == 1 %}
                                        <span class=\"symbol-label bg-warning align-items-end\">
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                                xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                viewBox=\"0 0 464 464\" style=\"enable-background:new 0 0 464 464;\"
                                                xml:space=\"preserve\">
                                                <g>
                                                    <g>
                                                        <path style=\"fill:#E69F5F;\" d=\"M400,400c0,0-58.904,24-168,24S63.999,400,63.999,400l21.157-264.465
       C91.28,58.994,155.182,0,231.967,0h0.064c76.786,0,140.688,58.994,146.811,135.535L400,400z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#E09156;\" d=\"M274.813,6.378C261.245,2.26,246.891,0,232.031,0h-0.063C155.182,0,91.279,58.994,85.156,135.535
       L63.999,400c0,0,28.876,11.71,83.467,18.769L274.813,6.378z\" />
                                                    </g>
                                                    <path style=\"fill:#FFD7A3;\" d=\"M383.388,413.991l-1.526-5.227c-0.737-2.525-3.197-4.073-5.727-3.751l-5.334-40.002
   c-1.752-13.142-9.902-24.561-21.76-30.49l-17.232-8.616c-2.567-1.284-5.51-0.145-6.766,2.29l-34.103-12.548
   c-6.534-2.178-10.94-8.292-10.94-15.179v-25.802l34.461-14.359C332.349,252.855,344,235.378,344,216v-8c13.255,0,24-10.745,24-24
   s-10.745-24-24-24v-16c0-22.091-17.909-56-40-56h-144c-22.091,0-40,33.909-40,56v16c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
   c0,19.378,11.651,36.855,29.538,44.308l34.462,14.36v25.801c0,6.887-4.407,13.001-10.94,15.179l-34.101,12.547
   c-1.242-2.438-4.179-3.583-6.742-2.302l-15.714,7.857c-13.41,6.705-21.552,18.121-23.304,31.262l-5.334,40.002
   c-2.53-0.322-4.989,1.226-5.727,3.751l-1.526,5.227c-0.817,2.799,0.79,5.729,3.588,6.546l11.8,3.441V448c0,8.836,7.164,16,16,16h32
   h176h32c8.836,0,16-7.164,16-16v-24.021l11.799-3.442C382.597,419.721,384.204,416.79,383.388,413.991z\" />
                                                    <path style=\"fill:#FDC88E;\" d=\"M280,274.667l-96,0.001v25.801c0,5.693-3.017,10.852-7.752,13.701
   C243.173,325.733,280,274.667,280,274.667z\" />
                                                    <path style=\"fill:#FFE1B2;\" d=\"M344,160v-16c0-22.091-17.909-56-40-56h-144c-22.091,0-40,33.909-40,56v16
   c-13.255,0-24,10.745-24,24s10.745,24,24,24v8c0,19.378,11.651,36.855,29.538,44.308l51.691,21.538
   c9.75,4.063,20.208,6.154,30.77,6.154l0,0c10.562,0,21.019-2.092,30.769-6.154l51.694-21.539C332.349,252.855,344,235.378,344,216
   v-8c13.255,0,24-10.745,24-24S357.255,160,344,160z\" />
                                                    <g>
                                                        <path style=\"fill:#623F33;\" d=\"M288,192L288,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
       C296,188.4,292.399,192,288,192z\" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path style=\"fill:#E4B07B;\"
                                                                d=\"M231.999,248.219c-14.223,0-27.527-3.5-36.5-9.605c-3.652-2.484-4.602-7.461-2.113-11.113
           c2.48-3.648,7.461-4.598,11.113-2.113c6.289,4.277,16.57,6.832,27.5,6.832s21.211-2.555,27.5-6.832
           c3.66-2.492,8.629-1.539,11.113,2.113c2.488,3.652,1.539,8.629-2.113,11.113C259.528,244.719,246.223,248.219,231.999,248.219z\" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#FFD7A3;\" d=\"M161.995,243.723c-6.482-6.949-9.995-16.121-9.995-25.625v-34.422
       c43.629-3.305,102.53-32.204,137.824-59.856L280,113.996c0,0-71,46-160,46l0,0V160c-13.255,0-24,10.745-24,24s10.745,24,24,24v8
       c0,19.378,11.651,36.855,29.538,44.308l51.69,21.538c2.53,1.054,5.112,1.962,7.727,2.749
       C186.11,267.883,170.904,253.275,161.995,243.723z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#FF6473;\" d=\"M377.191,412.936l-6.39-47.925c-1.752-13.142-9.902-24.561-21.76-30.49l-17.232-8.616
       c-2.919-1.46-6.327,0.212-7.184,3.362c-11.09,40.761-48.352,70.736-92.627,70.736c-44.285,0-81.555-29.99-92.635-70.767
       c-0.852-3.134-4.242-4.797-7.146-3.345l-15.714,7.857c-13.41,6.705-21.552,18.121-23.304,31.262l-6.512,48.836
       C107.821,421.124,143.999,432,143.999,432v32h176v-32L377.191,412.936z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#F05467;\" d=\"M143.801,429.556c-0.489-9.513-3.665-18.705-9.402-26.355l-37.557-50.076
       c-1.813,3.734-3.087,7.708-3.645,11.887l-6.341,47.561L143.801,429.556z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#D4445A;\" d=\"M80.612,413.991c-0.817,2.799,0.79,5.73,3.588,6.546l59.799,17.444V432
       c0-3.779-0.594-7.481-1.461-11.113l-53.856-15.71c-2.798-0.816-5.728,0.79-6.544,3.588L80.612,413.991z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#F05467;\" d=\"M320.198,429.556c0.489-9.513,3.665-18.705,9.402-26.355l37.557-50.076
       c1.813,3.734,3.087,7.708,3.645,11.887l6.341,47.561L320.198,429.556z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#D4445A;\" d=\"M383.388,413.991c0.817,2.799-0.79,5.73-3.588,6.546L320,437.981V432
       c0-3.779,0.594-7.481,1.461-11.113l53.856-15.71c2.798-0.816,5.728,0.79,6.544,3.588L383.388,413.991z\" />
                                                    </g>
                                                    <g>
                                                        <path style=\"fill:#623F33;\" d=\"M175.999,192L175.999,192c-4.4,0-8-3.6-8-8v-8c0-4.4,3.6-8,8-8l0,0c4.4,0,8,3.6,8,8v8
       C183.999,188.4,180.399,192,175.999,192z\" />
                                                    </g>
                                                    <path style=\"fill:#E69F5F;\" d=\"M103.73,112.976l0.27,53.078c75.501,0,138.099-23.591,179.168-44.834
   c-12.761,13.843-31.957,32.686-59.169,54.78c0,0,71.23-28.324,111.132-63.501v-0.003c0-52.191-42.309-94.5-94.5-94.5h-42.403
   C145.85,17.996,103.463,60.599,103.73,112.976z\" />
                                                    <path style=\"fill:#E09156;\" d=\"M269.789,22.588c-9.184-2.977-18.981-4.591-29.157-4.591h-42.403
   c-52.379,0-94.765,42.602-94.499,94.98l0.27,53.079c22.016,0,42.926-2.016,62.534-5.385
   C238.805,105.325,269.672,22.902,269.789,22.588z\" />
                                                </g>
                                            </svg>
                                        </span>

                                        {% endif %}
                                    </div>
                                </div>
                                <div id=\"kt_user_chart\" style=\"height: 200px\"></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class=\"pt-4\">
                                <!--begin::Title-->
                                <div class=\"text-center pb-12\">
                                    <!--begin::Username-->
                                    <h3 class=\"fw-bolder text-white fs-2 pb-4\">
                                        {{ app.user.fullname }}
                                    </h3>
                                    <!--end::Username-->
                                    <!--end::Action-->
                                    <span class=\"fw-bolder fs-6 text-primary px-4 py-2 rounded bg-white bg-opacity-10\">
                                        {{ app.user.role }}
                                    </span>
                                    <!--begin::Action-->
                                </div>
                                <!--begin::Cheacking-->
                                {{ render(controller('App\\\\Controller\\\\DashboardController::sideBarChecking')) }}
                                <!--end::Cheacking-->
                                <!--end::Title-->
                                <!--begin::Row-->
                                <div class=\"row row-cols-2 px-xl-12 sidebar-toolbar\">
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\"text-white fw-bolder fs-1 d-block pb-1\">
                                                {{ app.user.session.name }}
                                            </span>
                                            <span class=\"fw-bold\">
                                                N° session
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Votre identifiant\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\"text-white fw-bolder fs-1 d-block pb-1\">
                                                {{ app.user.id }}
                                            </span>
                                            <span class=\"fw-bold\">
                                                Identifiant
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Démarrage de votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\" text-white  fw-bolder fs-1 d-block pb-1 startsession\">
                                                {{ app.user.session.startSession | date('d/m/y') }}
                                            </span>
                                            <span class=\"fw-bold\">
                                                Debut session
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"col p-3\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                        title=\"Cloture de votre session\">
                                        <a href=\"#\" class=\"btn p-5 w-100 text-start btn-active-primary\">
                                            <span class=\" text-white  fw-bolder fs-1 d-block pb-1 endsession\">
                                                {{ app.user.session.endSession | date('d/m/y') }}
                                            </span>
                                            <span class=\"fw-bold\">
                                                Fin session
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Items-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class=\"card-toolbar btnBox\">
                    <!--begin::Dropdown-->
                    <button type=\"button\" class=\"btn btn-md btn-icon btn-icon-white btn-info\"
                        data-kt-menu-trigger=\"click\" data-kt-menu-overflow=\"true\" data-kt-menu-placement=\"bottom-end\"
                        data-kt-menu-flip=\"top-end\">
                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                        <span class=\"svg-icon svg-icon-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" />
                                    <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                    <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                    <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\" fill=\"#000000\" opacity=\"0.3\" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu-->
                    <div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px\"
                        data-kt-menu=\"true\">
                        <div class=\"menu-item px-3\">
                            <div class=\"menu-content fs-6 text-dark fw-bolder px-3 py-4\">
                                Manager
                            </div>
                        </div>
                        <div class=\"separator mb-3 opacity-75\"></div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_create_app\">Demandez un cours</a>
                        </div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_add_user\">Signaler une absence</a>
                        </div>
                        <div class=\"menu-item px-3\">
                            <a href=\"#\" class=\"menu-link\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#kt_modal_add_session\">Signaler un litige</a>
                        </div>
                    </div>
                    <!--end::Menu-->
                    <!--end::Dropdown-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Sidebar Content-->
    </div>
    <!--end::Sidebar Content-->
</div>", "components/_vertical-menu-student.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\components\\_vertical-menu-student.html.twig");
    }
}
