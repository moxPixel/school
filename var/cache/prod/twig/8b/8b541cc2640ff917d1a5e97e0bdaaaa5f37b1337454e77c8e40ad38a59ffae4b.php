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

/* dashboard/students-dashboard.html.twig */
class __TwigTemplate_27c5d4548d4740be6d14487ee074f06034f39fe7f04a15f6e1d278204e6c2bf8 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/students-dashboard.html.twig", 1);
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
        echo "
<script>
    \$(function () {
        var ctx = document.getElementById('chartLine');

        var stars = [";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByMonth", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 23), 1, ".", ","), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
    var frameworks = [";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByMonth", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 24), "createdAt", [], "any", false, false, false, 24), "M"), "html", null, true);
            echo "\", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: frameworks,
            datasets: [{
                label: 'Moyenne par mois',
                data: stars,
                backgroundColor: 'rgba(32, 212, 137, 0.596)',
                borderColor: 'rgba(0, 0, 255, 0.431)',
            }]
        },
    })
    });

    var data = {
        labels: [";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 41), "category", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
    datasets: [
        {
            label: \"Niveaux\",
            backgroundColor: \"#20d489\",
            borderColor: \"#20d489\",
            pointBackgroundColor: \"#f1bd00c0\",
            pointBorderColor: \"#f1bd00c0\",
            pointHoverBackgroundColor: \"#fff\",
            pointHoverBorderColor: \"#f1bd00c0\",
            data: [";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 51), 1, ".", ","), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
           }
       ]
   };
    var ctx = document.getElementById(\"radarChart\");

    var myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
            scale: {
                ticks: {
                    display: false,
                    beginAtZero: true,
                }
            },
        }
    });
    var KTWidgets = function () { var t = function (t, e, a, o, s) { var i = document.querySelector(e), r = parseInt(KTUtil.css(i, \"height\")); if (i) { var l = { series: [{ name: \"Moyenne\", data: [";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 69), 1, ".", ","), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "] }, { name: \"Moyenne classe\", data: [";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByClassRoom", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 69), 1, ".", ","), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "] } ], chart: { fontFamily: \"inherit\", type: \"bar\", height: r, toolbar: { show: !1 } }, plotOptions: { bar: { horizontal: !1, columnWidth: [\"40%\"], endingShape: \"rounded\" } }, legend: { show: !1 }, dataLabels: { enabled: !1 }, stroke: { show: !0, width: 2, colors: [\"transparent\"] }, xaxis: { categories: [";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo " \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 69), "category", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "\", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "], axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { style: { colors: KTUtil.getCssVariableValue(\"--bs-gray-700\"), fontSize: \"12px\" } } }, yaxis: { labels: { style: { colors: KTUtil.getCssVariableValue(\"--bs-gray-700\"), fontSize: \"12px\" } } }, fill: { opacity: 1 }, states: { normal: { filter: { type: \"none\", value: 0 } }, hover: { filter: { type: \"none\", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: \"none\", value: 0 } } }, tooltip: { style: { fontSize: \"12px\" }, y: { formatter: function (t) { return t } } }, colors: [KTUtil.getCssVariableValue(\"--bs-primary\"), KTUtil.getCssVariableValue(\"--bs-light-primary\")], grid: { borderColor: KTUtil.getCssVariableValue(\"--bs-gray-200\"), strokeDashArray: 4, yaxis: { lines: { show: !0 } } } }, n = new ApexCharts(i, l), d = !1, c = document.querySelector(t); !0 === s && (n.render(), d = !0), c.addEventListener(\"shown.bs.tab\", (function (t) { 0 == d && (n.render(), d = !0) })) } }; return { init: function () { var e; !function () { var t = document.querySelector(\"#kt_stats_widget_1_chart\"); if (t) { var e = KTUtil.getCssVariableValue(\"--bs-gray-200\"), a = KTUtil.getCssVariableValue(\"--bs-gray-800\"), o = { type: \"pie\", data: { datasets: [{ data: [";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 69), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "], backgroundColor: [KTUtil.getCssVariableValue(\"--bs-success\"), KTUtil.getCssVariableValue(\"--bs-warning\"), KTUtil.getCssVariableValue(\"--bs-primary\")] }], labels: false }, options: { chart: { fontFamily: \"inherit\" }, cutout: \"85%\", cutoutPercentage: 75, responsive: !0, maintainAspectRatio: !1, title: { display: !1, text: \"Technology\" }, animation: { animateScale: !0, animateRotate: !0 }, tooltips: { enabled: !0, intersect: !1, mode: \"nearest\", bodySpacing: 5, yPadding: 10, xPadding: 10, caretPadding: 0, displayColors: !1, backgroundColor: e, bodyFontColor: a, cornerRadius: 4, footerSpacing: 0, titleSpacing: 0 }, plugins: { legend: { display: !1 } } } }, s = t.getContext(\"2d\"); new Chart(s, o) } }(), t(\"#kt_stats_widget_2_tab_1\", \"#kt_stats_widget_2_chart_1\", [44, 55, 57, 56, 61, 58], [76, 85, 101, 98, 87, 105], !0), t(\"#kt_stats_widget_2_tab_2\", \"#kt_stats_widget_2_chart_2\", [35, 60, 35, 50, 45, 30], [65, 80, 50, 80, 75, 105], !1), t(\"#kt_stats_widget_2_tab_3\", \"#kt_stats_widget_2_chart_3\", [25, 40, 45, 50, 40, 60], [76, 85, 101, 98, 87, 105], !1), t(\"#kt_stats_widget_2_tab_4\", \"#kt_stats_widget_2_chart_4\", [50, 35, 45, 55, 30, 40], [76, 85, 101, 98, 87, 105], !1), function () { var t = document.querySelector(\"#kt_mixed_widget_1_chart\"), e = parseInt(KTUtil.css(t, \"height\")); if (t) { var a = { series: [{ name: \"Net Profit\", data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47] }], chart: { fontFamily: \"inherit\", type: \"area\", height: e, toolbar: { show: !1 }, zoom: { enabled: !1 }, sparkline: { enabled: !0 } }, plotOptions: {}, legend: { show: !1 }, dataLabels: { enabled: !1 }, fill: { type: \"solid\", opacity: 1 }, stroke: { curve: \"smooth\", show: !0, width: 3, colors: [\"#20D489\", \"\"] }, xaxis: { categories: [\"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\"], axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { show: !1, style: { colors: \"#A1A5B7\", fontSize: \"12px\" } }, crosshairs: { show: !1, position: \"front\", stroke: { color: KTUtil.getCssVariableValue(\"--bs-primary\"), width: 1, dashArray: 3 } }, tooltip: { enabled: !0, formatter: void 0, offsetY: 0, style: { fontSize: \"12px\" } } }, yaxis: { min: 0, max: 60, labels: { show: !1, style: { colors: \"#A1A5B7\", fontSize: \"12px\" } } }, states: { normal: { filter: { type: \"none\", value: 0 } }, hover: { filter: { type: \"none\", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: \"none\", value: 0 } } }, tooltip: { style: { fontSize: \"12px\" }, y: { formatter: function (t) { return \"\$\" + t + \" thousands\" } } }, fill: { type: \"gradient\", gradient: { shadeIntensity: 1, opacityFrom: .7, opacityTo: .6, stops: [0, 100] } }, colors: [KTUtil.getCssVariableValue(\"--bs-primary\")], markers: { colors: [KTUtil.getCssVariableValue(\"--bs-light-primary\")], strokeColor: [KTUtil.getCssVariableValue(\"--bs-primary\")], strokeWidth: 3 } }; new ApexCharts(t, a).render() } }(), function () { var t = document.querySelector(\"#kt_mixed_widget_2_chart\"), e = parseInt(KTUtil.css(t, \"height\")); if (t) { var a = { series: [{ name: \"Net Profit\", data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47] }], chart: { fontFamily: \"inherit\", type: \"area\", height: e, toolbar: { show: !1 }, zoom: { enabled: !1 }, sparkline: { enabled: !0 } }, plotOptions: {}, legend: { show: !1 }, dataLabels: { enabled: !1 }, fill: { type: \"solid\", opacity: 1 }, stroke: { curve: \"smooth\", show: !0, width: 3, colors: [KTUtil.getCssVariableValue(\"--bs-info\")] }, xaxis: { categories: [\"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\"], axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { show: !1, style: { colors: \"#A1A5B7\", fontSize: \"12px\" } }, crosshairs: { show: !1, position: \"front\", stroke: { color: \"#E4E6EF\", width: 1, dashArray: 3 } }, tooltip: { enabled: !0, formatter: void 0, offsetY: 0, style: { fontSize: \"12px\" } } }, yaxis: { labels: { show: !1, style: { colors: \"#A1A5B7\", fontSize: \"12px\" } } }, states: { normal: { filter: { type: \"none\", value: 0 } }, hover: { filter: { type: \"none\", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: \"none\", value: 0 } } }, tooltip: { style: { fontSize: \"12px\" }, y: { formatter: function (t) { return \"\$\" + t + \" thousands\" } } }, fill: { type: \"gradient\", gradient: { shadeIntensity: 1, opacityFrom: .7, opacityTo: .6, stops: [0, 100] } }, colors: [KTUtil.getCssVariableValue(\"--bs-info\")], markers: { colors: [KTUtil.getCssVariableValue(\"--bs-light-info\")], strokeColor: [KTUtil.getCssVariableValue(\"--bs-info\")], strokeWidth: 3 } }; new ApexCharts(t, a).render() } }(), (e = document.querySelector(\"#kt_forms_widget_1_form\")) && e && new Quill(\"#kt_forms_widget_1_editor\", { modules: { toolbar: { container: \"#kt_forms_widget_1_editor_toolbar\" } }, placeholder: \"What is on your mind ?\", theme: \"snow\" }) } } }(); KTUtil.onDOMContentLoaded((function () { KTWidgets.init() }));
</script>

";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "
<section class=\"student-dashboard\">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                ";
        // line 85
        $this->loadTemplate("components/_main-header.html.twig", "dashboard/students-dashboard.html.twig", 85)->display($context);
        // line 86
        echo "                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--begin::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-4\">
                                    <!--begin::Engage Widget 5-->
                                    <div class=\"card card-stretch card-stretch-head  mb-5 mb-xxl-8\">
                                        <!--begin::Body-->
                                        <div class=\"card-body pb-0 prime\">
                                            <svg id=\"svg2\"  style=\"margin-left:0%; margin-top:40%; z-index:0; position:absolute;\">
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
                                            <!--begin::Wrapper-->
                                            <div class=\"d-flex flex-column h-100\">
                                               
                                                <!--begin::Text-->
                                                <h3 class=\"text-dark text-center fs-1 fw-bolder pt-15 lh-lg\">Hello !
                                                    <br />";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 141), "fullname", [], "any", false, false, false, 141), "html", null, true);
        echo "
                                                </h3>
                                                <!--end::Text-->
                                                <!--begin::Image-->
                                                <!-- main codes start -->
                                                <div class=\"signboard outer calendarStudent\"
                                                    style=\"top: -23%; \">
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
                                                <div class=\"flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-200px\"
                                                    style=\"background-image:url('assets/media/illustrations/teacher3.png')\">
                                                </div>
                                                <!--end::Image-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage Widget 5-->
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Table Widget 1-->
                                    <div class=\"card card-stretch  mb-5 mb-xxl-8\">

                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Planning et
                                                    competences</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Graphiques variable</span>
                                            </h3>
                                            <div class=\"card-toolbar\">
                                                <ul class=\"nav nav-pills nav-pills-sm nav-light\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_1_1\">Planning</a>
                                                    </li>
                                                    <li class=\"nav-item\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                                        title=\"Représentation de votre niveau selon les différentes matières\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_1_2\">Radar de
                                                            compétences</a>
                                                    </li>
                                                    <li class=\"nav-item\" class=\"nav-item\" class=\"menu-link px-3\"
                                                        data-bs-toggle=\"tooltip\"
                                                        title=\"Moyenne selon les différentes matières\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_1_4\"> Bar de
                                                            compétences</a>
                                                    </li>
                                                    <li class=\"nav-item\" class=\"nav-item\" class=\"menu-link px-3\"
                                                        data-bs-toggle=\"tooltip\"
                                                        title=\"Représentation de votre moyenne general par mois\">
                                                        <a class=\"nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder\"
                                                            data-bs-toggle=\"tab\" href=\"#kt_tab_pane_1_3\">Courbe
                                                            mensuel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-info card-body card-stretch-center pt-2 pb-0 mt-n3 \">
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
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CourseController::calendar"));
        // line 260
        echo "
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade\" id=\"kt_tab_pane_1_2\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_1_2\">
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
                                                            <tbody>
                                                                <div class=\" mt-5 col-md-7 mx-auto\">
                                                                    <canvas id=\"radarChart\" height=\"350\"></canvas>
                                                                </div>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade\" id=\"kt_tab_pane_1_3\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_1_3\">
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
                                                            <tbody>

                                                                <div>
                                                                    <canvas id=\"chartLine\"
                                                                        class=\"chart-dropshadow2 ht-350\"></canvas>
                                                                </div>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade\" id=\"kt_tab_pane_1_4\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_1_4\">
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
                                                            <tbody>
                                                                ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageByCategory", [], "any", false, false, false, 332));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 333
            echo "                                                                <tr>
                                                                    <th class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-65px me-5\">
                                                                            <span class=\"symbol-label bg-light-success\">
                                                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                                                                                <span
                                                                                    class=\"svg-icon svg-icon-1 svg-icon-primary\">
                                                                                    <img style=\"width:40px;\"
                                                                                        src=\" ";
            // line 341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/technoPic/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rating"], 0, [], "any", false, false, false, 341), "category", [], "any", false, false, false, 341), "picture", [], "any", false, false, false, 341))), "html", null, true);
            echo "\"
                                                                                        alt=\"\">
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </div>
                                                                    </th>
                                                                    <td class=\"ps-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 350
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 351
$context["rating"], "total", [], "any", false, false, false, 351), 1, ".", ","), "html", null, true);
            // line 352
            echo " /20</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rating"], 0, [], "any", false, false, false, 354), "category", [], "any", false, false, false, 354), "name", [], "any", false, false, false, 354), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex flex-column w-100 me-3\">
                                                                            <div class=\"d-flex flex-stack mb-2\">
                                                                                <span
                                                                                    class=\"text-dark me-2 fs-6 fw-bolder\">Progress</span>
                                                                            </div>
                                                                            <div class=\"d-flex align-items-center\">
                                                                                <div
                                                                                    class=\"progress h-6px w-100 bg-light-primary\">
                                                                                    <div class=\"progress-bar bg-primary\"
                                                                                        role=\"progressbar\"
                                                                                        style=\"width:";
            // line 367
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["rating"], "total", [], "any", false, false, false, 367) * twig_number_format_filter($this->env, 5, 1, ".", ",")), "html", null, true);
            echo "%;\"
                                                                                        aria-valuenow=\"50\"
                                                                                        aria-valuemin=\"0\"
                                                                                        aria-valuemax=\"100\"></div>
                                                                                </div>
                                                                                <span
                                                                                    class=\"text-muted fs-7 fw-bold ps-3\">";
            // line 373
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source,             // line 374
$context["rating"], "total", [], "any", false, false, false, 374) * twig_number_format_filter($this->env, 5, 1, ".", ",")), "html", null, true);
            // line 375
            echo "%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-primary btn-sm\">
                                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                            <span class=\"svg-icon svg-icon-4\">
                                                                                ";
            // line 384
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rating"], "total", [], "any", false, false, false, 384), twig_number_format_filter($this->env, 10, 1, ".", ",")))) {
                // line 386
                echo "                                                                                <i
                                                                                    class=\" notemax fa fa-arrow-circle-up\"></i>
                                                                                ";
            }
            // line 389
            echo "                                                                                ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rating"], "total", [], "any", false, false, false, 389), twig_number_format_filter($this->env, 10, 1, ".", ",")))) {
                // line 390
                echo " <i
                                                                                    class=\" notemin fa fa-arrow-circle-down\">
                                                                                    </i>
                                                                                    ";
            }
            // line 394
            echo "                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "                                                            </tbody>
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
                            <div class=\"row g-0 g-xl-5 g-xxl-8 pr\">
                                <div class=\"col-xl-4\">
                                    <!--begin::Stats Widget 1-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8 \">
                                        <!--begin::Header-->
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Pronostic</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Prétention au passage du
                                                    titre professionel</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body pt-12\">
                                            <!--begin::Chart-->
                                            <div class=\"d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center h-175px\"
                                                style=\"background-image:url('assets/media/svg/illustrations/bg-1.svg')\">
                                                ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageAll", [], "any", false, false, false, 432));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 433
            echo "                                                <div class=\"fw-bolder fs-1 text-gray-800 position-absolute\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source,             // line 434
$context["data"], "total", [], "any", false, false, false, 434) * twig_number_format_filter($this->env, 5, 0, ".", ",")), "html", null, true);
            echo "%</div>
                                                <canvas id=\"kt_stats_widget_1_chart\"></canvas> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                                            </div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class=\"d-flex justify-content-around pt-18\">
                                                <!--begin::Item-->
                                                <div class=\"\">
                                                    <span class=\"fw-bolder text-gray-800\">Front end</span>
                                                    <span class=\"bg-success w-25px h-5px d-block rounded mt-1\"></span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class=\"\">
                                                    <span class=\"fw-bolder text-gray-800\">Back end</span>
                                                    <span class=\"bg-primary w-25px h-5px d-block rounded mt-1\"></span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class=\"\">
                                                    <span class=\"fw-bolder text-gray-800\">Culture</span>
                                                    <span class=\"bg-warning w-25px h-5px d-block rounded mt-1\"></span>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Stats Widget 1-->
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Stats Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8 \">

                                        <!--begin::Header-->
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Mon evolution</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Moyenne selon matiéres</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body pt-0\">
                                            <div
                                                class=\"d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4\">
                                                <!--begin::Tab Content-->
                                                <div class=\"tab-content flex-grow-1\">
                                                    <!--begin::Tab Pane 1-->
                                                    <div class=\"tab-pane fade show active\"
                                                        id=\"kt_stats_widget_2_tab_1_content\">
                                                        <!--begin::Content-->
                                                        <div class=\"d-flex justify-content-center mb-10\">
                                                            <!--begin::Item-->
                                                            <div class=\"px-10\">
                                                                <span class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                                                    title=\"Votre moyenne general\"
                                                                    class=\"text-muted fw-bold fs-7\">Moyenne
                                                                    general</span>
                                                                <span class=\"text-gray-800 fw-bolder fs-3 d-block\">";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageAll", [], "any", false, false, false, 495));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 495), 1, ".", ","), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        echo "</span>
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class=\"px-10\">
                                                                <span class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                                                    title=\"Moyenne general de la session\"
                                                                    class=\"text-muted fw-bold fs-7\">Moyenne
                                                                    session</span>
                                                                <span class=\"text-gray-800 fw-bolder fs-3 d-block\">";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "totalAverageAllByClassRoom", [], "any", false, false, false, 506));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 507
$context["data"], "total", [], "any", false, false, false, 507), 1, ".", ","), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "</span>
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class=\"px-10\">
                                                                <span class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                                                    title=\"Total des evaluations\"
                                                                    class=\"text-muted fw-bold fs-7\">Total
                                                                    evaluations</span>
                                                                <span class=\"text-gray-800 fw-bolder fs-3 d-block\">";
        // line 517
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 518
($context["stats"] ?? null), "totalEval", [], "any", false, false, false, 518)), "html", null, true);
        echo "</span>
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Chart-->
                                                        <div id=\"kt_stats_widget_2_chart_1\" style=\"height: 250px\"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tab Pane 1-->
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Stats Widget 2-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-4\">
                                    <!--begin::List Widget 1-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Evaluations</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Evaluations et
                                                    remarques</span>
                                            </h3>
                                            <img class=\"mx-auto\" style=\"width:250px;\"
                                                src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/remark.png"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"card-body pt-3\">
                                            <!--begin::Timeline-->
                                            <div class=\"timeline-label\">
                                                ";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 558), "ratings", [], "any", false, false, false, 558));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 559
            echo "                                                <!--begin::Item-->
                                                <div class=\"timeline-item\">
                                                    <!--begin::Label-->
                                                    <div class=\"timeline-label fw-bolder text-gray-800 fs-7\">
                                                        ";
            // line 563
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "createdAt", [], "any", false, false, false, 563), " d/M"), "html", null, true);
            echo "</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class=\"timeline-badge\">
                                                        <i class=\"fa fa-genderless text-warning fs-1\"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Text-->

                                                    <div class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                                        title=\" ";
            // line 573
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "remark", [], "any", false, false, false, 573), "html", null, true);
            echo "\"
                                                        class=\"timeline-content fw-mormal text-muted ps-3\">
                                                        ";
            // line 575
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "name", [], "any", false, false, false, 575), "html", null, true);
            echo " </div><span
                                                        class=\"text-bold\">";
            // line 576
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rating"], "note", [], "any", false, false, false, 576), "html", null, true);
            echo "/20</span>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 581
        echo "                                            </div>
                                            <!--end::Timeline-->
                                        </div>
                                        ";
        // line 584
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 584), "ratings", [], "any", false, false, false, 584)), 0))) {
            // line 585
            echo "                                        <span class=\" mx-auto fw-bolder text-muted\">Aucune evaluation disponible.</span>
                                        ";
        }
        // line 587
        echo "                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::List Widget 1-->
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Salle de
                                                    classe</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">N° session:
                                                    ";
        // line 600
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 600), "session", [], "any", false, false, false, 600), "name", [], "any", false, false, false, 600), "html", null, true);
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
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 648
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 653
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 653), 0))) {
                // line 654
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 657
$context["user"], "sexe", [], "any", false, false, false, 657), 1))) {
                // line 658
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 662
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 667
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 667), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 669
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 669), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 674
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 674), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 676
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 676), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 679
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 679), 1))) {
                // line 680
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Présent</span>
                                                                        ";
            }
            // line 682
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 682), 0))) {
                // line 683
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 686
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
        // line 699
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
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 725
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 730
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 730), 0))) {
                // line 731
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 734
$context["user"], "sexe", [], "any", false, false, false, 734), 1))) {
                // line 735
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 739
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 744
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 744), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 746
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 746), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 751
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 751), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 753
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 753), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 756
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 756), 1))) {
                // line 757
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Présent</span>
                                                                        ";
            }
            // line 759
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 759), 0))) {
                // line 760
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 763
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
        // line 776
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
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 801
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 806
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 806), 0))) {
                // line 807
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 810
$context["user"], "sexe", [], "any", false, false, false, 810), 1))) {
                // line 811
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 815
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 820
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 820), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 822
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 822), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 827
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 827), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 829
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 829), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 832
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 832), 1))) {
                // line 833
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Présent</span>
                                                                        ";
            }
            // line 835
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 835), 0))) {
                // line 836
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 839
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
        // line 852
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
                            <span class=\"text-muted fw-bold me-2\">2021©</span>
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
        // line 904
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 904), "role", [], "any", false, false, false, 904), "Administrateur"))) {
            // line 905
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
            echo "
            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 906
($context["app"] ?? null), "user", [], "any", false, false, false, 906), "role", [], "any", false, false, false, 906), "Formateur"))) {
            // line 907
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TeacherController::sideBar"));
            echo "
            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 908
($context["app"] ?? null), "user", [], "any", false, false, false, 908), "role", [], "any", false, false, false, 908), "Eleve"))) {
            // line 909
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\StudentController::sideBar"));
            echo "
            ";
        }
        // line 911
        echo "            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    ";
        // line 916
        $this->loadTemplate("messenger/index.html.twig", "dashboard/students-dashboard.html.twig", 916)->display($context);
        // line 917
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
        return "dashboard/students-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1320 => 917,  1318 => 916,  1311 => 911,  1305 => 909,  1303 => 908,  1298 => 907,  1296 => 906,  1291 => 905,  1289 => 904,  1235 => 852,  1217 => 839,  1212 => 836,  1209 => 835,  1204 => 833,  1202 => 832,  1196 => 829,  1191 => 827,  1183 => 822,  1178 => 820,  1171 => 815,  1165 => 811,  1163 => 810,  1158 => 807,  1156 => 806,  1149 => 801,  1145 => 800,  1119 => 776,  1101 => 763,  1096 => 760,  1093 => 759,  1088 => 757,  1086 => 756,  1080 => 753,  1075 => 751,  1067 => 746,  1062 => 744,  1055 => 739,  1049 => 735,  1047 => 734,  1042 => 731,  1040 => 730,  1033 => 725,  1029 => 724,  1002 => 699,  984 => 686,  979 => 683,  976 => 682,  971 => 680,  969 => 679,  963 => 676,  958 => 674,  950 => 669,  945 => 667,  938 => 662,  932 => 658,  930 => 657,  925 => 654,  923 => 653,  916 => 648,  912 => 647,  862 => 600,  847 => 587,  843 => 585,  841 => 584,  836 => 581,  825 => 576,  821 => 575,  816 => 573,  803 => 563,  797 => 559,  793 => 558,  783 => 551,  747 => 518,  746 => 517,  735 => 508,  729 => 507,  725 => 506,  714 => 496,  705 => 495,  645 => 436,  637 => 434,  635 => 433,  631 => 432,  597 => 400,  586 => 394,  580 => 390,  577 => 389,  572 => 386,  570 => 384,  559 => 375,  557 => 374,  556 => 373,  547 => 367,  531 => 354,  527 => 352,  525 => 351,  524 => 350,  512 => 341,  502 => 333,  498 => 332,  424 => 260,  422 => 258,  302 => 141,  245 => 86,  243 => 85,  231 => 75,  227 => 74,  180 => 69,  151 => 51,  129 => 41,  100 => 24,  88 => 23,  81 => 18,  77 => 17,  72 => 13,  68 => 12,  63 => 8,  59 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/students-dashboard.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/dashboard/students-dashboard.html.twig");
    }
}
