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

/* components/_modal-student.html.twig */
class __TwigTemplate_a35a409c9a893ed48867f92e04617703ec77558ff10ff12e2795f9814e2d94f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal-student.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal-student.html.twig"));

        // line 1
        echo "<!--begin::Modals-->
<!--begin::Modal - Create App-->
<div class=\"modal fade\" id=\"kt_modal_create_app\" tabindex=\"-1\" aria-hidden=\"true\">
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
                    <div class=\"stepper stepper-1 d-flex flex-column flex-xl-row flex-row-fluid\"
                        id=\"kt_modal_create_app_stepper\">
                        <!--begin::Aside-->
                        <div
                            class=\"d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px\">
                            <!--begin::Nav-->
                            <div class=\"stepper-nav d-flex flex-column pt-5\">
                                <!--begin::Step 1-->
                                <div class=\"stepper-item current\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">1</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Basics</h3>
                                            <div class=\"stepper-desc\">Name your App</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">2</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Framework</h3>
                                            <div class=\"stepper-desc\">Define your app
                                                framework
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">3</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Database</h3>
                                            <div class=\"stepper-desc\">Select the app
                                                database type</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">4</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Storage</h3>
                                            <div class=\"stepper-desc\">Select the app storage
                                                type
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">5</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">Completed!</h3>
                                            <div class=\"stepper-desc\">Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class=\"d-flex flex-row-fluid justify-content-center\">
                            <!--begin::Form-->
                            <form class=\"pb-5 w-100 w-md-400px w-xl-500px\" novalidate=\"novalidate\"
                                id=\"kt_modal_create_app_form\">
                                <!--begin::Step 1-->
                                <div class=\"pb-5 current\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5 pb-lg-10\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Basics
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row mb-12\">
                                            <label class=\"fs-6 fw-bolder text-dark form-label\">Your
                                                App Name</label>
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                name=\"appname\" placeholder=\"\" value=\"\" />
                                        </div>
                                        <!--end::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-primary\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                    version=\"1.1\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                        fill-rule=\"evenodd\">
                                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                        <path
                                                                            d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\"
                                                                            fill=\"#000000\" fill-rule=\"nonzero\" />
                                                                        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\"
                                                                            cy=\"10\" r=\"6\" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Quick
                                                            Online Courses</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure is just
                                                            one SEO</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_1\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-danger\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                    version=\"1.1\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                        fill-rule=\"evenodd\">
                                                                        <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" />
                                                                        <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                        <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                        <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Face to
                                                            Face Discussions</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure is just
                                                            one aspect</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_1\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Devices/Watch1.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-success\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                    <path
                                                                        d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z\"
                                                                        fill=\"#000000\" fill-rule=\"nonzero\" />
                                                                    <path
                                                                        d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                    <path
                                                                        d=\"M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                    <path
                                                                        d=\"M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Full
                                                            Intro Training</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure
                                                            copywriting</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_1\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Framework
                                            </h3>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app framework</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-html5 text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">HTML5</span>
                                                        <span class=\"fs-7 text-muted\">Base
                                                            Web Projec</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_2\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fab fa-react text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">ReactJS</span>
                                                        <span class=\"fs-7 text-muted\">Robust
                                                            and flexible app
                                                            framework</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <i class=\"fab fa-angular text-danger fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Angular</span>
                                                        <span class=\"fs-7 text-muted\">Powerful
                                                            data mangement</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <i class=\"fab fa-vuejs text-primary fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Vue</span>
                                                        <span class=\"fs-7 text-muted\">Lightweight
                                                            and responsive framework</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Database
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row mb-12\">
                                            <label class=\"fs-6 fw-bolder text-dark form-label\">App
                                                Databse Name Name</label>
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                name=\"dbname\" placeholder=\"\" value=\"db_name\" />
                                        </div>
                                        <!--end::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app database solution</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fas fa-database text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">MySQL</span>
                                                        <span class=\"fs-7 text-muted\">Basic
                                                            MySQL database</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        checked=\"checked\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <i class=\"fab fa-google text-danger fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Firebase</span>
                                                        <span class=\"fs-7 text-muted\">Google
                                                            based app data management</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-amazon text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">DynamoDB</span>
                                                        <span class=\"fs-7 text-muted\">Amazon
                                                            Fast NoSQL Database</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Storage
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app storage solution</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <i class=\"fab fa-linux text-primary fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Basic
                                                            Server</span>
                                                        <span class=\"fs-7 text-muted\">Linux
                                                            based server storage</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_4\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-aws text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">AWS</span>
                                                        <span class=\"fs-7 text-muted\">Amazon
                                                            Web Services</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_4\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fab fa-google text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Google</span>
                                                        <span class=\"fs-7 text-muted\">Google
                                                            Cloud Storage</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_4\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">
                                                Complete</h3>
                                            <div class=\"text-muted fw-bold fs-3\">Review your
                                                setup to kickstart your app!</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Basics</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>App Name</div>
                                            <div>Face to Face Discussions</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Framework</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>HTML5</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Database</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>dn_name</div>
                                            <div>Firebase</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Storage</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>Basic Server</div>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class=\"d-flex justify-content-between pt-10\">
                                    <div class=\"mr-2\">
                                        <button type=\"button\"
                                            class=\"btn btn-lg btn-light-primary fw-bolder py-4 pe-8 me-3\"
                                            data-kt-stepper-action=\"previous\">
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 me-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.3\"
                                                            transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)\"
                                                            x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\" />
                                                        <path
                                                            d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Previous
                                        </button>
                                    </div>
                                    <div>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary fw-bolder py-4 ps-8 me-3\"
                                            data-kt-stepper-action=\"submit\">Submit
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                                            transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                            x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\" />
                                                        <path
                                                            d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary fw-bolder py-4 ps-8 me-3\"
                                            data-kt-stepper-action=\"next\">Next Step
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                                            transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                            x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\" />
                                                        <path
                                                            d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - Select Location-->
<div class=\"modal fade\" id=\"kt_modal_select_location\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Select Location</h5>
                <!--begin::Close-->
                <div class=\"btn btn-icon btn-sm btn-active-light-primary ms-2\" data-bs-dismiss=\"modal\">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                    <span class=\"svg-icon svg-icon-2x\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                            height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
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
                <div id=\"kt_modal_select_location_map\" class=\"map h-450px\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-light-primary\" data-bs-dismiss=\"modal\">Cancel</button>
                <button id=\"submit\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Apply</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Select Location-->
<!--end::Modals-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_modal-student.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--begin::Modals-->
<!--begin::Modal - Create App-->
<div class=\"modal fade\" id=\"kt_modal_create_app\" tabindex=\"-1\" aria-hidden=\"true\">
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
                    <div class=\"stepper stepper-1 d-flex flex-column flex-xl-row flex-row-fluid\"
                        id=\"kt_modal_create_app_stepper\">
                        <!--begin::Aside-->
                        <div
                            class=\"d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px\">
                            <!--begin::Nav-->
                            <div class=\"stepper-nav d-flex flex-column pt-5\">
                                <!--begin::Step 1-->
                                <div class=\"stepper-item current\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">1</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Basics</h3>
                                            <div class=\"stepper-desc\">Name your App</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">2</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Framework</h3>
                                            <div class=\"stepper-desc\">Define your app
                                                framework
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">3</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Database</h3>
                                            <div class=\"stepper-desc\">Select the app
                                                database type</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">4</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">App Storage</h3>
                                            <div class=\"stepper-desc\">Select the app storage
                                                type
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"stepper-item\" data-kt-stepper-element=\"nav\">
                                    <div class=\"stepper-wrapper\">
                                        <div class=\"stepper-icon\">
                                            <i class=\"stepper-check fas fa-check\"></i>
                                            <span class=\"stepper-number\">5</span>
                                        </div>
                                        <div class=\"stepper-label\">
                                            <h3 class=\"stepper-title\">Completed!</h3>
                                            <div class=\"stepper-desc\">Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class=\"d-flex flex-row-fluid justify-content-center\">
                            <!--begin::Form-->
                            <form class=\"pb-5 w-100 w-md-400px w-xl-500px\" novalidate=\"novalidate\"
                                id=\"kt_modal_create_app_form\">
                                <!--begin::Step 1-->
                                <div class=\"pb-5 current\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-5 pb-lg-10\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Basics
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row mb-12\">
                                            <label class=\"fs-6 fw-bolder text-dark form-label\">Your
                                                App Name</label>
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                name=\"appname\" placeholder=\"\" value=\"\" />
                                        </div>
                                        <!--end::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-primary\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                    version=\"1.1\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                        fill-rule=\"evenodd\">
                                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                        <path
                                                                            d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\"
                                                                            fill=\"#000000\" fill-rule=\"nonzero\" />
                                                                        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\"
                                                                            cy=\"10\" r=\"6\" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Quick
                                                            Online Courses</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure is just
                                                            one SEO</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_1\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-danger\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                                                    width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\"
                                                                    version=\"1.1\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\"
                                                                        fill-rule=\"evenodd\">
                                                                        <rect x=\"5\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" />
                                                                        <rect x=\"14\" y=\"5\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                        <rect x=\"5\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                        <rect x=\"14\" y=\"14\" width=\"5\" height=\"5\" rx=\"1\"
                                                                            fill=\"#000000\" opacity=\"0.3\" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Face to
                                                            Face Discussions</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure is just
                                                            one aspect</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_1\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack mb-6 cursor-pointer\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <!--begin::Svg Icon | path: icons/duotone/Devices/Watch1.svg-->
                                                            <span class=\"svg-icon svg-icon-1 svg-icon-success\">
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\"
                                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                    <path
                                                                        d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z\"
                                                                        fill=\"#000000\" fill-rule=\"nonzero\" />
                                                                    <path
                                                                        d=\"M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                    <path
                                                                        d=\"M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                    <path
                                                                        d=\"M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z\"
                                                                        fill=\"#000000\" opacity=\"0.3\" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Full
                                                            Intro Training</span>
                                                        <span class=\"fs-7 text-muted\">Creating
                                                            a clear text structure
                                                            copywriting</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_1\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Framework
                                            </h3>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app framework</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-html5 text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">HTML5</span>
                                                        <span class=\"fs-7 text-muted\">Base
                                                            Web Projec</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_2\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fab fa-react text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">ReactJS</span>
                                                        <span class=\"fs-7 text-muted\">Robust
                                                            and flexible app
                                                            framework</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <i class=\"fab fa-angular text-danger fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Angular</span>
                                                        <span class=\"fs-7 text-muted\">Powerful
                                                            data mangement</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <i class=\"fab fa-vuejs text-primary fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Vue</span>
                                                        <span class=\"fs-7 text-muted\">Lightweight
                                                            and responsive framework</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_2\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Database
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row mb-12\">
                                            <label class=\"fs-6 fw-bolder text-dark form-label\">App
                                                Databse Name Name</label>
                                            <input type=\"text\" class=\"form-control form-control-lg form-control-solid\"
                                                name=\"dbname\" placeholder=\"\" value=\"db_name\" />
                                        </div>
                                        <!--end::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app database solution</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fas fa-database text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">MySQL</span>
                                                        <span class=\"fs-7 text-muted\">Basic
                                                            MySQL database</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        checked=\"checked\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-danger\">
                                                            <i class=\"fab fa-google text-danger fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Firebase</span>
                                                        <span class=\"fs-7 text-muted\">Google
                                                            based app data management</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-amazon text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">DynamoDB</span>
                                                        <span class=\"fs-7 text-muted\">Amazon
                                                            Fast NoSQL Database</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_3\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">App
                                                Storage
                                            </h3>
                                        </div>
                                        <!--begin::Heading-->
                                        <!--begin::Form Group-->
                                        <div class=\"fv-row\">
                                            <label class=\"fs-6 fw-bolder text-dark mb-7\">Select
                                                your app storage solution</label>
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-primary\">
                                                            <i class=\"fab fa-linux text-primary fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Basic
                                                            Server</span>
                                                        <span class=\"fs-7 text-muted\">Linux
                                                            based server storage</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" checked=\"checked\"
                                                        name=\"app_option_4\" value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-warning\">
                                                            <i class=\"fab fa-aws text-warning fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">AWS</span>
                                                        <span class=\"fs-7 text-muted\">Amazon
                                                            Web Services</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_4\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class=\"d-flex flex-stack cursor-pointer mb-6\">
                                                <span class=\"d-flex align-items-center me-2\">
                                                    <span class=\"symbol symbol-50px me-6\">
                                                        <span class=\"symbol-label bg-light-success\">
                                                            <i class=\"fab fa-google text-success fs-2x\"></i>
                                                        </span>
                                                    </span>
                                                    <span class=\"d-flex flex-column\">
                                                        <span class=\"fw-bolder fs-6\">Google</span>
                                                        <span class=\"fs-7 text-muted\">Google
                                                            Cloud Storage</span>
                                                    </span>
                                                </span>
                                                <span class=\"form-check form-check-custom form-check-solid\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"app_option_4\"
                                                        value=\"1\" />
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class=\"pb-5\" data-kt-stepper-element=\"content\">
                                    <div class=\"w-100\">
                                        <!--begin::Heading-->
                                        <div class=\"pb-10 pb-lg-15\">
                                            <h3 class=\"fw-bolder text-dark display-6\">
                                                Complete</h3>
                                            <div class=\"text-muted fw-bold fs-3\">Review your
                                                setup to kickstart your app!</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Basics</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>App Name</div>
                                            <div>Face to Face Discussions</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Framework</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>HTML5</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Database</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>dn_name</div>
                                            <div>Firebase</div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class=\"fw-bolder mb-3\">App Storage</h4>
                                        <div class=\"text-gray-600 fw-bold lh-lg mb-8\">
                                            <div>Basic Server</div>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class=\"d-flex justify-content-between pt-10\">
                                    <div class=\"mr-2\">
                                        <button type=\"button\"
                                            class=\"btn btn-lg btn-light-primary fw-bolder py-4 pe-8 me-3\"
                                            data-kt-stepper-action=\"previous\">
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 me-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.3\"
                                                            transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)\"
                                                            x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\" />
                                                        <path
                                                            d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Previous
                                        </button>
                                    </div>
                                    <div>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary fw-bolder py-4 ps-8 me-3\"
                                            data-kt-stepper-action=\"submit\">Submit
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-2\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                                            transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                            x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\" />
                                                        <path
                                                            d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <button type=\"button\" class=\"btn btn-lg btn-primary fw-bolder py-4 ps-8 me-3\"
                                            data-kt-stepper-action=\"next\">Next Step
                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                                            <span class=\"svg-icon svg-icon-3 ms-1\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                                                    height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <polygon points=\"0 0 24 0 24 24 0 24\" />
                                                        <rect fill=\"#000000\" opacity=\"0.5\"
                                                            transform=\"translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)\"
                                                            x=\"7.5\" y=\"7.5\" width=\"2\" height=\"9\" rx=\"1\" />
                                                        <path
                                                            d=\"M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z\"
                                                            fill=\"#000000\" fill-rule=\"nonzero\"
                                                            transform=\"translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)\" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - Select Location-->
<div class=\"modal fade\" id=\"kt_modal_select_location\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Select Location</h5>
                <!--begin::Close-->
                <div class=\"btn btn-icon btn-sm btn-active-light-primary ms-2\" data-bs-dismiss=\"modal\">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                    <span class=\"svg-icon svg-icon-2x\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                            height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
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
                <div id=\"kt_modal_select_location_map\" class=\"map h-450px\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-light-primary\" data-bs-dismiss=\"modal\">Cancel</button>
                <button id=\"submit\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Apply</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Select Location-->
<!--end::Modals-->", "components/_modal-student.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\components\\_modal-student.html.twig");
    }
}
