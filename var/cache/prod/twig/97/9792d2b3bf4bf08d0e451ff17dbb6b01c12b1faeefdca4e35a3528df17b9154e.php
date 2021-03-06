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

/* dashboard/teachers-dashboard.html.twig */
class __TwigTemplate_ed8b072f03c8a4261ad51f5cd1106ed80e67834178c36f51f05808678ce4877a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/teachers-dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Dashboard
";
    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "Dashboard
";
    }

    // line 12
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
    }

    // line 17
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<script>
    ctx = document.getElementById(\"myChartBar2\");

var stars = [";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalRemunerationForTeacherByMonth", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 21) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "remuneration", [], "any", false, false, false, 21), "tarification", [], "any", false, false, false, 21), 1, ".", ",")), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
var frameworks = [";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalCalendarForTeacher", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 22), "start", [], "any", false, false, false, 22), "M"), "html", null, true);
            echo "\", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];

var myChart = new Chart(ctx, {
 type: \"line\",
 data: {
   labels: frameworks,
   datasets: [
     {
       label: \"Chiffre d'affaire\",
       data: stars,
       backgroundColor: \"transparent\",
       borderColor: \"#20d489\",
       
       borderWidth: 1
     }
   ]
 }
});
</script>
<script>
  

  \"use strict\";

// Class definition
var KTWidgets = function () {
    // Stats widgets
    var initStatsWidget1 = function() {
        var element = document.querySelector(\"#kt_stats_widget_1_chart\");

        if ( !element ) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var tooltipBgColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var tooltipColor = KTUtil.getCssVariableValue('--bs-gray-800');

        var color1 = KTUtil.getCssVariableValue('--bs-success');
        var color2 = KTUtil.getCssVariableValue('--bs-warning');
        var color3 = KTUtil.getCssVariableValue('--bs-primary');

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [30, 40, 25],
                    backgroundColor: [color1, color2, color3]
                }],
                labels: ['Angular', 'CSS', 'HTML']
            },
            options: {
                chart: {
                    fontFamily: 'inherit'
                },
                cutout: '75%',
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: tooltipBgColor,
                    bodyFontColor: tooltipColor,
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }

    var initStatsWidget2 = function(tabSelector, chartSelector, data1, data2, initByDefault) {
        var element = document.querySelector(chartSelector);
        var height = parseInt(KTUtil.css(element, 'height'));

        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Interventions mensuel',
                data: [";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalCalendarForTeacher", [], "any", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 130), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['40%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: [";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalCalendarForTeacher", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 159), "start", [], "any", false, false, false, 159), "M"), "html", null, true);
            echo "\", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: KTUtil.getCssVariableValue('--bs-gray-700'),
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: KTUtil.getCssVariableValue('--bs-gray-700'),
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return val + \" Interventions\"
                    }
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-primary'), KTUtil.getCssVariableValue('--bs-light-primary')],
            grid: {
                borderColor: KTUtil.getCssVariableValue('--bs-gray-200'),
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);

        var init = false;
        var tab = document.querySelector(tabSelector);
        
        if (initByDefault === true) {
            chart.render();
            init = true;
        }        

        tab.addEventListener('shown.bs.tab', function (event) {
            if (init == false) {
                chart.render();
                init = true;
            }
        })
    }    

    // Form Widgets
    var initFormWidget1 = function() {
        var formEl = document.querySelector(\"#kt_forms_widget_1_form\");
        var editorId = 'kt_forms_widget_1_editor';

        if ( !formEl ) {
            return;
        }

        // init editor
        var options = {
            modules: {
                toolbar: {
                    container: \"#kt_forms_widget_1_editor_toolbar\"
                }
            },
            placeholder: 'What is on your mind ?',
            theme: 'snow'
        };

        if (!formEl) {
            return;
        }

        // Init editor
        var editorObj = new Quill('#' + editorId, options);
    }
    
    // Mixed widgets
    var initMixedWidget1 = function() {
        var element = document.querySelector(\"#kt_mixed_widget_1_chart\");
        var height = parseInt(KTUtil.css(element, 'height'));

        if ( !element ) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: ['#20D489', '']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px',
                        
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: KTUtil.getCssVariableValue('--bs-primary'),
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px',
                        
                    }
                }
            },
            yaxis: {
                min: 0,
                max: 60,
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px',
                        
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    
                },
                y: {
                    formatter: function(val) {
                        return \"\$\" + val + \" thousands\"
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.6,
                    stops: [0, 100]
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-primary')],
            markers: {
                colors: [KTUtil.getCssVariableValue('--bs-light-primary')],
                strokeColor: [KTUtil.getCssVariableValue('--bs-primary')],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }

    var initMixedWidget2 = function() {
        var element = document.querySelector(\"#kt_mixed_widget_2_chart\");
        var height = parseInt(KTUtil.css(element, 'height'));

        if ( !element ) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [KTUtil.getCssVariableValue('--bs-info')]
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: '#E4E6EF',
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    
                },
                y: {
                    formatter: function(val) {
                        return \"\$\" + val + \" thousands\"
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.6,
                    stops: [0, 100]
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-info')],
            markers: {
                colors: [KTUtil.getCssVariableValue('--bs-light-info')],
                strokeColor: [KTUtil.getCssVariableValue('--bs-info')],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }    

    // Public methods
    return {
        init: function () {
            // Init Stats widgets
            initStatsWidget1();

            // Init Stats Widgets
            initStatsWidget2('#kt_stats_widget_2_tab_1', '#kt_stats_widget_2_chart_1', [44, 55, 57, 56, 61, 58], [76, 85, 101, 98, 87, 105], true);
            initStatsWidget2('#kt_stats_widget_2_tab_2', '#kt_stats_widget_2_chart_2', [35, 60, 35, 50, 45, 30], [65, 80, 50, 80, 75, 105], false);
            initStatsWidget2('#kt_stats_widget_2_tab_3', '#kt_stats_widget_2_chart_3', [25, 40, 45, 50, 40, 60], [76, 85, 101, 98, 87, 105], false);
            initStatsWidget2('#kt_stats_widget_2_tab_4', '#kt_stats_widget_2_chart_4', [50, 35, 45, 55, 30, 40], [76, 85, 101, 98, 87, 105], false);               

            // Init Mixed Widgets
            initMixedWidget1();
            initMixedWidget2();

            // Init Form Widgets
            initFormWidget1();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTWidgets.init();
});


</script>

";
    }

    // line 589
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 590
        echo "<section class=\"teacher-dashboard\">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                ";
        // line 599
        $this->loadTemplate("components/_main-header.html.twig", "dashboard/teachers-dashboard.html.twig", 599)->display($context);
        // line 600
        echo "                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::toolbar-->
                    <div class=\"toolbar\" id=\"kt_toolbar\">
                        <div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
                            <!--begin::Info-->
                            <div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
                                <!--begin::Title-->
                                <h3 class=\"text-dark fw-bolder my-1\">Espace formateur</h3>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
                                    <li class=\"breadcrumb-item\">
                                        <a href=\"index.html\" class=\"text-muted text-hover-primary\">Dashboard
                                            formateur</a>
                                    </li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            ";
        // line 621
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 621), "role", [], "any", false, false, false, 621), "Administrateur"))) {
            // line 622
            echo "                            <!--begin::Nav-->
                            <div class=\"nav-admin d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
                                <a href=\"";
            // line 624
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrator");
            echo "\" class=\"btn btn-active-accent fw-bolder\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace administrateur\">Administrateur</a>
                                <a href=\"";
            // line 627
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher");
            echo "\" class=\"btn btn-active-accent active fw-bolder ms-3\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace formateur\">Formateur</a>
                            </div>
                            <!--end::Nav-->
                            ";
        }
        // line 633
        echo "                        </div>
                    </div>
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--begin::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-12\">
                                    <div
                                        class=\" mb-5 d-flex bg-light-success card-rounded flex-grow-1 usersTotal prime\">
                                        <!--begin::Section-->
                                        <div class=\"py-10 ps-7\">

                                            <!--begin::Text-->
                                            <div>
                                                <svg id=\"svg\"  style=\"margin-left:8%; z-index:1; position:absolute;\">
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
                                                </svg>
                                                <span class=\"font-weight-light fs-1 text-gray-800\">Bienvenue <br>
                                                    <span class=\"fw-bolder fs-1 text-white\">";
        // line 687
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 688
($context["app"] ?? null), "user", [], "any", false, false, false, 688), "fullname", [], "any", false, false, false, 688), "html", null, true);
        echo "</span></span>

                                            </div>
                                            <!--end::Text-->
                                            <!-- main codes start -->
                                            <div class=\"signboard outer\">
                                                <div class=\"signboard front inner anim04c\">
                                                    <li class=\"year anim04c\">
                                                        <span></span>
                                                    </li>
                                                    <ul class=\"calendarMain anim04c\">
                                                        <li class=\"day anim04c\">
                                                            <span></span>
                                                        </li>

                                                        <li class=\"date anim04c\">
                                                            <span></span>
                                                        </li>
                                                        <li class=\"month anim04c\">
                                                            <span></span>
                                                        </li>
                                                    </ul>
                                                    <li class=\"clock minute anim04c\">
                                                        <span></span>
                                                    </li>
                                                    <li class=\"calendarNormal date2 anim04c\">
                                                        <span></span>
                                                    </li>
                                                </div>
                                                <div class=\"signboard left inner anim04c\">
                                                    <li class=\"clock hour anim04c\">
                                                        <span></span>
                                                    </li>
                                                    <li class=\"calendarNormal day2 anim04c\">
                                                        <span></span>
                                                    </li>
                                                </div>
                                                <div class=\"signboard right inner anim04c\">
                                                    <li class=\"clock second anim04c\">
                                                        <span></span>
                                                    </li>
                                                    <li class=\"calendarNormal month2 anim04c\">
                                                        <span></span>
                                                    </li>
                                                </div>
                                            </div>
                                            <!-- main codes end -->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Pic-->
                                        <div class=\"position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1\"
                                            style=\"background-image:url('assets/media/illustrations/teacher.png')\">
                                        </div>
                                        <!--end::Pic-->
                                    </div>
                                </div>
                            </div>

                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <!--begin::Engage Widget 5-->
                                <div class=\"col-xl-12\">
                                    <!--begin::Table Widget 1-->
                                    <div class=\"card card-stretch  mb-5 mb-xxl-12\">

                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Planning</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Calendrier variable</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body card-stretch-center pt-2 pb-0 mt-n3 \">
                                            <div class=\"tab-content mt-5\" id=\"myTabTables1\">
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade show active\" id=\"kt_tab_pane_1_1\"
                                                    role=\"tabpanel\" aria-labelledby=\"kt_tab_pane_1_1\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <table class=\"table table-borderless align-middle\">
                                                            <thead>
                                                                <tr>
                                                                    <th class=\"p-0 w-50px\"></th>
                                                                    <th class=\"p-0 min-w-200px\"></th>
                                                                    <th class=\"p-0 min-w-100px\"></th>
                                                                    <th class=\"p-0 min-w-40px\"></th>
                                                                </tr>
                                                            </thead>
                                                            ";
        // line 777
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::calendar"));
        // line 779
        echo "
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table Widget 1-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-4\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">R??munerations</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">R??munerations mensuel</span>
                                            </h3>
                                        </div>
                                        <canvas id=\"myChartBar2\"
                                            style=\"position: relative; height:100%; width:100%\"></canvas>
                                    </div>
                                </div>
                                <div class=\"col-xl-8\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Interventions</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Interventions mensuel</span>
                                            </h3>
                                        </div>
                                        <div id=\"kt_stats_widget_2_chart_1\" style=\"height: 250px\"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-4\">
                                    <!--begin::Stats Widget 1-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8 \">
                                        <!--begin::Header-->
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Notes rapide</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Attribu?? une note a vos
                                                    etudiants</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body pt-12\">

                                            <!--begin::Items-->
                                            ";
        // line 837
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::addNote", ["request" => twig_get_attribute($this->env, $this->source,         // line 838
($context["app"] ?? null), "request", [], "any", false, false, false, 838)]));
        echo "
                                            <!--end::Items-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Stats Widget 1-->
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Salle de
                                                    classe</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">N?? session:
                                                    ";
        // line 854
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 854), "session", [], "any", false, false, false, 854), "name", [], "any", false, false, false, 854), "html", null, true);
        echo "</span>
                                                <div class=\"btn-cours text-center pt-7\">
                                                    <a href=\"#\" class=\"btn btn-success fw-bolder fs-6 px-7 py-3 mb-2\"
                                                        data-bs-toggle=\"modal\" data-bs-target=\"#\">Acces zoom</a>
                                                </div>
                                            </h3>
                                            <div class=\"card-toolbar\">
                                                <ul class=\"nav nav-pills nav-pills-sm nav-light\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_2_1\">Etudiant</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_2_2\">Formateur</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder\"
                                                            data-bs-toggle=\"tab\"
                                                            href=\"#kt_tab_pane_2_3\">Administration</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body pt-3 pb-0 mt-n3\">
                                            <div class=\"tab-content mt-4\" id=\"myTabTables2\">
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade show active\" id=\"kt_tab_pane_2_1\"
                                                    role=\"tabpanel\" aria-labelledby=\"kt_tab_pane_2_1\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <table id=\"example2\"
                                                            class=\"table table-striped table-bordered text-nowrap\">
                                                            <thead>
                                                                <tr>
                                                                    <th class=\"p-0 w-50px\"></th>
                                                                    <th class=\"p-0 min-w-150px\"></th>
                                                                    <th class=\"p-0 min-w-120px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-50px\"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                ";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 901
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 906
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 906), 0))) {
                // line 907
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 910
$context["user"], "sexe", [], "any", false, false, false, 910), 1))) {
                // line 911
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 915
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 920
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 920), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 922
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 922), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 927
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 927), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 929
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 929), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 932
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 932), 1))) {
                // line 933
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Pr??sent</span>
                                                                        ";
            }
            // line 935
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 935), 0))) {
                // line 936
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 939
            echo "                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-primary btn-sm\">
                                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                            <span class=\"svg-icon svg-icon-4\">
                                                                                <i class=\"fa fa-check\"></i>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 952
        echo "
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade\" id=\"kt_tab_pane_2_2\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_2_2\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <table id=\"example4\"
                                                            class=\"table table-striped table-bordered text-nowrap\">
                                                            <thead>
                                                                <tr>
                                                                    <th class=\"p-0 w-50px\"></th>
                                                                    <th class=\"p-0 min-w-150px\"></th>
                                                                    <th class=\"p-0 min-w-120px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-50px\"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 978
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 983
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 983), 0))) {
                // line 984
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 987
$context["user"], "sexe", [], "any", false, false, false, 987), 1))) {
                // line 988
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 992
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 997
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 997), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 999
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 999), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 1004
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 1004), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 1006
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 1006), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 1009
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 1009), 1))) {
                // line 1010
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Pr??sent</span>
                                                                        ";
            }
            // line 1012
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 1012), 0))) {
                // line 1013
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 1016
            echo "                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-primary btn-sm\">
                                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                            <span class=\"svg-icon svg-icon-4\">
                                                                                <i class=\"fa fa-check\"></i>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1029
        echo "                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade\" id=\"kt_tab_pane_2_3\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_2_3\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <table id=\"example1\"
                                                            class=\"table table-striped table-bordered text-nowrap\">
                                                            <thead>
                                                                <tr>
                                                                    <th class=\"p-0 w-50px\"></th>
                                                                    <th class=\"p-0 min-w-150px\"></th>
                                                                    <th class=\"p-0 min-w-120px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-70px\"></th>
                                                                    <th class=\"p-0 min-w-50px\"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                ";
        // line 1053
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 1054
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 1059
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 1059), 0))) {
                // line 1060
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 1063
$context["user"], "sexe", [], "any", false, false, false, 1063), 1))) {
                // line 1064
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 1068
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 1073
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 1073), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 1075
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 1075), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 1080
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 1080), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 1082
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 1082), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 1085
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 1085), 1))) {
                // line 1086
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Pr??sent</span>
                                                                        ";
            }
            // line 1088
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 1088), 0))) {
                // line 1089
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 1092
            echo "                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-primary btn-sm\">
                                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                            <span class=\"svg-icon svg-icon-4\">
                                                                                <i class=\"fa fa-check\"></i>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1105
        echo "                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Table Widget 2-->
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Main-->
                <!--begin::Footer-->
                <div class=\"footer py-4 d-flex flex-lg-column\" id=\"kt_footer\">
                    <!--begin::Container-->
                    <div class=\"container d-flex flex-column flex-md-row flex-stack\">
                        <!--begin::Copyright-->
                        <div class=\"text-dark order-2 order-md-1\">
                            <span class=\"text-muted fw-bold me-2\">2021??</span>
                            <a href=\"\" target=\"_blank\" class=\"text-gray-800 text-hover-primary\">Unlock-technologies</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class=\"menu menu-gray-600 menu-hover-primary fw-bold order-1\">
                            <li class=\"menu-item\">
                                <a href=\"https://keenthemes.com\" target=\"_blank\" class=\"menu-link px-2\">About</a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"https://keenthemes.com/support\" target=\"_blank\"
                                    class=\"menu-link px-2\">Support</a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"https://keenthemes.com/products/start-html-pro\" target=\"_blank\"
                                    class=\"menu-link px-2\">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Sidebar-->
            ";
        // line 1157
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1157), "role", [], "any", false, false, false, 1157), "Administrateur"))) {
            // line 1158
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1159
($context["app"] ?? null), "user", [], "any", false, false, false, 1159), "role", [], "any", false, false, false, 1159), "Formateur"))) {
            // line 1160
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1161
($context["app"] ?? null), "user", [], "any", false, false, false, 1161), "role", [], "any", false, false, false, 1161), "Eleve"))) {
            // line 1162
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
            ";
        }
        // line 1164
        echo "            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    ";
        // line 1169
        $this->loadTemplate("messenger/index.html.twig", "dashboard/teachers-dashboard.html.twig", 1169)->display($context);
        // line 1170
        echo "    <!--begin::Scrolltop-->
    <div id=\"kt_scrolltop\" class=\"scrolltop\" data-kt-scrolltop=\"true\">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class=\"svg-icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\"
                height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <polygon points=\"0 0 24 0 24 24 0 24\" />
                    <rect fill=\"#000000\" opacity=\"0.5\" x=\"11\" y=\"10\" width=\"2\" height=\"10\" rx=\"1\" />
                    <path
                        d=\"M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z\"
                        fill=\"#000000\" fill-rule=\"nonzero\" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "dashboard/teachers-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1449 => 1170,  1447 => 1169,  1440 => 1164,  1434 => 1162,  1432 => 1161,  1427 => 1160,  1425 => 1159,  1420 => 1158,  1418 => 1157,  1364 => 1105,  1346 => 1092,  1341 => 1089,  1338 => 1088,  1333 => 1086,  1331 => 1085,  1325 => 1082,  1320 => 1080,  1312 => 1075,  1307 => 1073,  1300 => 1068,  1294 => 1064,  1292 => 1063,  1287 => 1060,  1285 => 1059,  1278 => 1054,  1274 => 1053,  1248 => 1029,  1230 => 1016,  1225 => 1013,  1222 => 1012,  1217 => 1010,  1215 => 1009,  1209 => 1006,  1204 => 1004,  1196 => 999,  1191 => 997,  1184 => 992,  1178 => 988,  1176 => 987,  1171 => 984,  1169 => 983,  1162 => 978,  1158 => 977,  1131 => 952,  1113 => 939,  1108 => 936,  1105 => 935,  1100 => 933,  1098 => 932,  1092 => 929,  1087 => 927,  1079 => 922,  1074 => 920,  1067 => 915,  1061 => 911,  1059 => 910,  1054 => 907,  1052 => 906,  1045 => 901,  1041 => 900,  992 => 854,  973 => 838,  972 => 837,  912 => 779,  910 => 777,  818 => 688,  817 => 687,  761 => 633,  752 => 627,  746 => 624,  742 => 622,  740 => 621,  717 => 600,  715 => 599,  704 => 590,  700 => 589,  258 => 159,  218 => 130,  98 => 22,  86 => 21,  81 => 18,  77 => 17,  72 => 13,  68 => 12,  63 => 8,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/teachers-dashboard.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/dashboard/teachers-dashboard.html.twig");
    }
}
