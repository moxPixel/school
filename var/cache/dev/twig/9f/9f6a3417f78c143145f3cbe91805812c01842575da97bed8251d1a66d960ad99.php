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

/* dashboard/admins-dashboard.html.twig */
class __TwigTemplate_6a84881fe9c854ba06e54db07e959374ea9c9edc638d755ae3b3843183dec983 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/admins-dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/admins-dashboard.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/admins-dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 7
        echo "    Dashboard administrateur
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        // line 11
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

        // line 15
        echo "<script>
 \"use strict\";var KTWidgets=function(){var t=function(t,e,a,o,s){var i=document.querySelector(e),r=parseInt(KTUtil.css(i,\"height\"));if(i){var l={series:[{name:\"Total\",data:a},{name:\"Revenue\",data:o}],chart:{fontFamily:\"inherit\",type:\"bar\",height:r,toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:[\"40%\"],endingShape:\"rounded\"}},legend:{show:!1},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:[\"transparent\"]},xaxis:{categories:[";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendarByMonth"]) || array_key_exists("calendarByMonth", $context) ? $context["calendarByMonth"] : (function () { throw new RuntimeError('Variable "calendarByMonth" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 16), "start", [], "any", false, false, false, 16), "M"), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:KTUtil.getCssVariableValue(\"--bs-gray-700\"),fontSize:\"12px\"}}},yaxis:{labels:{style:{colors:KTUtil.getCssVariableValue(\"--bs-gray-700\"),fontSize:\"12px\"}}},fill:{opacity:1},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return t+\" jours\"}}},colors:[KTUtil.getCssVariableValue(\"--bs-primary\"),KTUtil.getCssVariableValue(\"--bs-light-primary\")],grid:{borderColor:KTUtil.getCssVariableValue(\"--bs-gray-200\"),strokeDashArray:4,yaxis:{lines:{show:!0}}}},n=new ApexCharts(i,l),d=!1,c=document.querySelector(t);!0===s&&(n.render(),d=!0),c.addEventListener(\"shown.bs.tab\",(function(t){0==d&&(n.render(),d=!0)}))}};return{init:function(){var e;!function(){var t=document.querySelector(\"#kt_stats_widget_1_chart\");if(t){var e=KTUtil.getCssVariableValue(\"--bs-gray-200\"),a=KTUtil.getCssVariableValue(\"--bs-gray-800\"),o={type:\"doughnut\",data:{datasets:[{data:[30,40,25],backgroundColor:[KTUtil.getCssVariableValue(\"--bs-success\"),KTUtil.getCssVariableValue(\"--bs-warning\"),KTUtil.getCssVariableValue(\"--bs-primary\")]}],labels:[\"Angular\",\"CSS\",\"HTML\"]},options:{chart:{fontFamily:\"inherit\"},cutout:\"75%\",cutoutPercentage:75,responsive:!0,maintainAspectRatio:!1,title:{display:!1,text:\"Technology\"},animation:{animateScale:!0,animateRotate:!0},tooltips:{enabled:!0,intersect:!1,mode:\"nearest\",bodySpacing:5,yPadding:10,xPadding:10,caretPadding:0,displayColors:!1,backgroundColor:e,bodyFontColor:a,cornerRadius:4,footerSpacing:0,titleSpacing:0},plugins:{legend:{display:!1}}}},s=t.getContext(\"2d\");new Chart(s,o)}}(),t(\"#kt_stats_widget_2_tab_1\",\"#kt_stats_widget_2_chart_1\",[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendarByMonth"]) || array_key_exists("calendarByMonth", $context) ? $context["calendarByMonth"] : (function () { throw new RuntimeError('Variable "calendarByMonth" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 16), 1, ".", ","), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],[],!0),t(\"#kt_stats_widget_2_tab_2\",\"#kt_stats_widget_2_chart_2\",[35,60,35,50,45,30],[65,80,50,80,75,105],!1),t(\"#kt_stats_widget_2_tab_3\",\"#kt_stats_widget_2_chart_3\",[25,40,45,50,40,60],[76,85,101,98,87,105],!1),t(\"#kt_stats_widget_2_tab_4\",\"#kt_stats_widget_2_chart_4\",[50,35,45,55,30,40],[76,85,101,98,87,105],!1),function(){var t=document.querySelector(\"#kt_mixed_widget_1_chart\"),e=parseInt(KTUtil.css(t,\"height\"));if(t){var a={series:[{name:\"Variation\",data:[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendarByMonth"]) || array_key_exists("calendarByMonth", $context) ? $context["calendarByMonth"] : (function () { throw new RuntimeError('Variable "calendarByMonth" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 16), 1, ".", ","), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]}],chart:{fontFamily:\"inherit\",type:\"area\",height:e,toolbar:{show:!1},zoom:{enabled:!1},sparkline:{enabled:!0}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:\"solid\",opacity:1},stroke:{curve:\"smooth\",show:!0,width:3,colors:[\"#20D489\",\"\"]},xaxis:{categories:[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendarByMonth"]) || array_key_exists("calendarByMonth", $context) ? $context["calendarByMonth"] : (function () { throw new RuntimeError('Variable "calendarByMonth" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 16), "start", [], "any", false, false, false, 16), "M"), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}},crosshairs:{show:!1,position:\"front\",stroke:{color:KTUtil.getCssVariableValue(\"--bs-primary\"),width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:\"12px\"}}},yaxis:{min:0,max:60,labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}}},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return t}}},fill:{type:\"gradient\",gradient:{shadeIntensity:1,opacityFrom:.7,opacityTo:.6,stops:[0,100]}},colors:[KTUtil.getCssVariableValue(\"--bs-success\")],markers:{colors:[KTUtil.getCssVariableValue(\"--bs-light-primary\")],strokeColor:[KTUtil.getCssVariableValue(\"--bs-primary\")],strokeWidth:3}};new ApexCharts(t,a).render()}}(),function(){var t=document.querySelector(\"#kt_mixed_widget_2_chart\"),e=parseInt(KTUtil.css(t,\"height\"));if(t){var a={series:[{name:\"Net Profit\",data:[30,30,43,43,34,34,26,26,47,47]}],chart:{fontFamily:\"inherit\",type:\"area\",height:e,toolbar:{show:!1},zoom:{enabled:!1},sparkline:{enabled:!0}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:\"solid\",opacity:1},stroke:{curve:\"smooth\",show:!0,width:3,colors:[KTUtil.getCssVariableValue(\"--bs-info\")]},xaxis:{categories:[\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}},crosshairs:{show:!1,position:\"front\",stroke:{color:\"#E4E6EF\",width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:\"12px\"}}},yaxis:{labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}}},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return\"\$\"+t+\" thousands\"}}},fill:{type:\"gradient\",gradient:{shadeIntensity:1,opacityFrom:.7,opacityTo:.6,stops:[0,100]}},colors:[KTUtil.getCssVariableValue(\"--bs-info\")],markers:{colors:[KTUtil.getCssVariableValue(\"--bs-light-info\")],strokeColor:[KTUtil.getCssVariableValue(\"--bs-info\")],strokeWidth:3}};new ApexCharts(t,a).render()}}(),(e=document.querySelector(\"#kt_forms_widget_1_form\"))&&e&&new Quill(\"#kt_forms_widget_1_editor\",{modules:{toolbar:{container:\"#kt_forms_widget_1_editor_toolbar\"}},placeholder:\"What is on your mind ?\",theme:\"snow\"})}}}();KTUtil.onDOMContentLoaded((function(){KTWidgets.init()}));
</script>

<script>
    ctx = document.getElementById(\"myChartBar2\");

var stars = [";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userForRoles"]) || array_key_exists("userForRoles", $context) ? $context["userForRoles"] : (function () { throw new RuntimeError('Variable "userForRoles" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 22), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
var frameworks = [";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userForRoles"]) || array_key_exists("userForRoles", $context) ? $context["userForRoles"] : (function () { throw new RuntimeError('Variable "userForRoles" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 23), "role", [], "any", false, false, false, 23), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];

var myChart = new Chart(ctx, {
 type: \"doughnut\",
 data: {
   labels: frameworks,
   datasets: [
     {
       label: \"Nombres\",
       data: stars,
       backgroundColor:[
       \"#20d489\",
       \"#00ff95\",
       \"#7bf5c2\"
       ],
       borderColor:\"#20d489\",
       borderWidth: 1
     }
   ]
 }
});

var ctx = document.getElementById(\"bar\");

var stars2 = [";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userByMonth"]) || array_key_exists("userByMonth", $context) ? $context["userByMonth"] : (function () { throw new RuntimeError('Variable "userByMonth" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 47), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
var frameworks2 = [";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userByMonth"]) || array_key_exists("userByMonth", $context) ? $context["userByMonth"] : (function () { throw new RuntimeError('Variable "userByMonth" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 48), "createdAt", [], "any", false, false, false, 48), "M"), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
var myChart = new Chart(ctx, {
  type: \"line\",
  data: {
    labels: frameworks2,
    datasets: [
      {
        label: \"Inscriptions\",
        data: stars2,
        backgroundColor: \"transparent\",
        borderColor:\"#20d489\",
        borderWidth: 1
      },
    ]
  }
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "<section class=\"admin-dashboard\">
    <!--begin::Body-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                ";
        // line 77
        $this->loadTemplate("components/_main-header.html.twig", "dashboard/admins-dashboard.html.twig", 77)->display($context);
        // line 78
        echo "                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::toolbar-->
                    <div class=\"toolbar\" id=\"kt_toolbar\">
                        <div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
                            <!--begin::Info-->
                            <div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
                                <!--begin::Title-->
                                <h3 class=\"text-dark fw-bolder my-1\">Espace administrateur</h3>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
                                    <li class=\"breadcrumb-item\">
                                        <a href=\"index.html\" class=\"text-muted text-hover-primary\">Dashboard
                                            administrateur</a>
                                    </li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Nav-->
                            <div class=\"nav-admin d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
                                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrator");
        echo "\" class=\"btn btn-active-accent active fw-bolder\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace administrateur\">Administrateur</a>
                                <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("teacher");
        echo "\" class=\"btn btn-active-accent fw-bolder ms-3\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace formateur\">Formateur</a>
                            </div>
                            <!--end::Nav-->
                        </div>
                    </div>
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--Begin::Row-->
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
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 165
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "fullname", [], "any", false, false, false, 165), "html", null, true);
        echo "</span></span>
                                            </div>
                                            <!--end::Text-->
                                            <!-- main codes start -->
                                            <div class=\"signboard outer\" style=\" right: 10%!important;\">
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
                                            style=\"background-image:url('assets/media/illustrations/admin5.png')\">
                                        </div>
                                        <!--end::Pic-->
                                    </div>
                                </div>
                            </div>

                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-12\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Infographique</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Nombres de jours de
                                                    formations calcul?? par mois</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"testi card-body pt-3 pb-0 mt-n3\">
                                            <div class=\"tab-content mt-4\" id=\"myTabTables2\">
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade show active\" id=\"kt_tab_2_1\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_2_1\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <!--Begin::Row-->
                                                        <div class=\"row d-flex justify-content-between g-5 g-xxl-8 \">
                                                            <div class=\"col-md-9 card card-stretch \">
                                                                <!--begin::Header-->
                                                                <div class=\"card-header border-0 pt-5\">
                                                                    <h3
                                                                        class=\"card-title align-items-start flex-column\">

                                                                    </h3>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class=\"card-body p-0 pb-13 mt-n3\">
                                                                    <div class=\"tab-content mt-5\" id=\"myTabTables1\">
                                                                        <!--begin::Tap pane-->
                                                                        <div class=\"tab-pane fade show active\"
                                                                            role=\"tabpanel\"
                                                                            aria-labelledby=\"kt_tab_pane_1_1\">
                                                                            <div class=\"d-flex flex-column\">
                                                                                <!--begin::Chart-->
                                                                                <div class=\"flex-grow-1\">
                                                                                    <div id=\"kt_stats_widget_2_chart_1\"
                                                                                        style=\"height: 250px\"></div>
                                                                                </div>
                                                                                <!--end::Chart-->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Tap pane-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--begin::Items-->
                                                            <div class=\"col-md-3\">
                                                                ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendarByMonth"]) || array_key_exists("calendarByMonth", $context) ? $context["calendarByMonth"] : (function () { throw new RuntimeError('Variable "calendarByMonth" does not exist.', 276, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 277
            echo "                                                                <div data-bs-toggle=\"tooltip\" title=\"Il y'a eu ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 277), "html", null, true);
            echo " dates de programmer en ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "any", false, false, false, 277), "start", [], "any", false, false, false, 277), "M"), "html", null, true);
            // line 279
            echo "\">
                                                                    <!--begin::Item-->
                                                                    <div class=\"d-flex flex-stack mb-6\">
                                                                        <!--begin::Section-->
                                                                        <div class=\"d-flex align-items-center me-2\">
                                                                            <!--begin::Symbol-->
                                                                            <div
                                                                                class=\"symbol symbol-50px symbol-light me-5\">
                                                                                <span class=\"symbol-label\">
                                                                                    <img src=\"assets/media/illustrations/process-3.png\"
                                                                                        alt=\"\" class=\"mw-75\" />
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div>
                                                                                <div
                                                                                    class=\"d-flex flex-column w-100 me-3\">
                                                                                    <div class=\"d-flex flex-stack mb-2\">
                                                                                        <span
                                                                                            class=\"text-dark me-2 fs-6 fw-bolder\">";
            // line 299
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 300
$context["data"], 0, [], "any", false, false, false, 300), "start", [], "any", false, false, false, 300), "M"), "html", null, true);
            // line 303
            echo "</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class=\"d-flex align-items-center\">
                                                                                        <div
                                                                                            class=\"progress h-6px w-100 bg-light-success\">
                                                                                            <div class=\"progress-bar bg-primary\"
                                                                                                role=\"progressbar\"
                                                                                                style=\"width: ";
            // line 311
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 311), 1, ".", ","), "html", null, true);
            echo "%;\"
                                                                                                aria-valuenow=\"50\"
                                                                                                aria-valuemin=\"0\"
                                                                                                aria-valuemax=\"100\">
                                                                                            </div>
                                                                                        </div>
                                                                                        <span style=\"width: 250px;\"
                                                                                            class=\"text-muted fs-7 fw-bold ps-3\">";
            // line 318
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 319
$context["data"], "total", [], "any", false, false, false, 319), 0, ".", ","), "html", null, true);
            // line 324
            echo "</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Label-->
                                                                        <div
                                                                            class=\"rounded badge badge-primary fw-bolder text-white-600 py-2 px-3\">
                                                                            ";
            // line 334
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 334), 0, ".", ","), "html", null, true);
            // line 336
            echo "</div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Widget Item-->
                                                                </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "                                                            </div>
                                                            <!--end::Widget Items-->
                                                        </div>
                                                        <!--End::Row-->
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
                            <!--End::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"mt-5 col-md-4\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Body-->
                                        <div class=\"card-body\">
                                            <div id=\"kt_stats_widget_9_carousel\" class=\"carousel carousel-custom slide\"
                                                data-bs-ride=\"carousel\" data-bs-interval=\"8000\">
                                                <!--begin::Top-->
                                                <div class=\"d-flex flex-stack flex-wrap\">
                                                    <!--begin::Label-->
                                                    <span class=\"text-muted fw-bolder pe-2\">Dernieres dates
                                                        programmer</span>
                                                    <!--end::Label-->
                                                    <!--begin::Carousel Indicators-->
                                                    <ol class=\"p-0 m-0 carousel-indicators carousel-indicators-dots\">
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"0\" class=\"ms-1\"></li>
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"1\" class=\"ms-1 active\"
                                                            aria-current=\"true\"></li>
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"2\" class=\"ms-1\"></li>
                                                    </ol>
                                                    <!--end::Carousel Indicators-->
                                                </div>
                                                <!--end::Top-->
                                                <!--begin::Carousel-->
                                                <div class=\"carousel-inner pt-9\">

                                                    <!--begin::Item-->
                                                    <div class=\"carousel-item active\">
                                                        <!--begin::Section-->
                                                        <div class=\"flex-grow-1\">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class=\"text-center fs-3 text-gray-800 text-hover-primary fw-bolder cursor-pointer\">
                                                                ";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 397, $this->source); })()), 0, [], "any", false, false, false, 397), "name", [], "any", false, false, false, 397), "html", null, true);
        echo "</h3>
                                                                <hr>
                                                                <h5 class=\" text-end fs-3 text-muted cursor-pointer\" style=\" z-index:0; position:absolute; right:0;\"> 
                                                                <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/technoPic/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 400, $this->source); })()), 0, [], "any", false, false, false, 400), "category", [], "any", false, false, false, 400), "picture", [], "any", false, false, false, 400))), "html", null, true);
        echo "\" alt=\"Logo Profile\" style='width:50px;height:50px;'>
                                                               </h5>
                                                            <h5 class=\"fs-3 text-muted cursor-pointer\">
                                                                ";
        // line 403
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 403, $this->source); })()), 0, [], "any", false, false, false, 403), "teacher", [], "any", false, false, false, 403), "fullname", [], "any", false, false, false, 403), "html", null, true);
        echo "</h5>
                                                            <h6 class=\"fs-3 text-warning cursor-pointer\">Session : ";
        // line 404
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 405
(isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 405, $this->source); })()), 0, [], "any", false, false, false, 405), "session", [], "any", false, false, false, 405), "name", [], "any", false, false, false, 405), "html", null, true);
        echo "</h6>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <p>
                                                                <span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">";
        // line 409
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 409, $this->source); })()), 0, [], "any", false, false, false, 409), "start", [], "any", false, false, false, 409), "d/M/Y"), "html", null, true);
        echo "  - </span><span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 409, $this->source); })()), 0, [], "any", false, false, false, 409), "end", [], "any", false, false, false, 409), "d/M/Y"), "html", null, true);
        echo "</span></p>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCalendar"]) || array_key_exists("allCalendar", $context) ? $context["allCalendar"] : (function () { throw new RuntimeError('Variable "allCalendar" does not exist.', 416, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 417
            echo "                                                    <!--begin::Item-->
                                                    <div class=\"carousel-item\">
                                                        <!--begin::Section-->
                                                        <div class=\"flex-grow-1\">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class=\"text-center fs-3 text-gray-800 text-hover-primary fw-bolder cursor-pointer\">
                                                                ";
            // line 424
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "name", [], "any", false, false, false, 424), "html", null, true);
            echo "</h3>
                                                                <hr>
                                                            <h5 class=\" text-end fs-3 text-muted cursor-pointer\" style=\" z-index:0; position:absolute; right:0;\"> 
                                                               <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/technoPic/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 427), "picture", [], "any", false, false, false, 427))), "html", null, true);
            echo "\" alt=\"Logo Profile\" style='width:50px;height:50px;'>
                                                            </h5>
                                                            <h5 class=\"fs-3 text-muted cursor-pointer\">";
            // line 429
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 430
$context["calendar"], "teacher", [], "any", false, false, false, 430), "fullname", [], "any", false, false, false, 430), "html", null, true);
            echo "</h5>
                                                            <h6 class=\"fs-3 text-warning cursor-pointer\">Session : ";
            // line 431
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 432
$context["calendar"], "session", [], "any", false, false, false, 432), "name", [], "any", false, false, false, 432), "html", null, true);
            echo "</h6>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <p>
                                                                <span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">";
            // line 436
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 436), "d/M/Y"), "html", null, true);
            echo "  - </span><span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 436), "d/M/Y"), "html", null, true);
            echo "</span></p>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "                                                </div>
                                                <!--end::Carousel-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class=\"card-footer border-0 d-flex flex-stack pt-0 pb-10\">
                                            <!--begin::Label-->
                                            <span class=\"text-muted fs-6 fw-bold pe-2\">Mise ?? jours r??guliere</span>
                                            <!--end::Label-->
                                            <a href=\"";
        // line 453
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view-calendar");
        echo "\"
                                                class=\"btn btn-sm btn-primary fw-bolder px-6\">Voir tout</a>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Utilisateurs
                                                    absent</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Total des utilisateurs absent
                                                    :
                                                    <button
                                                        class=\"btn btn-icon btn-sm btn-light-warning  pulse pulse-warning\"
                                                        data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                                        id=\"kt_activities_toggle\">
                                                        <span class=\"position-absolute fs-6\">
                                                            ";
        // line 474
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usersCheck"]) || array_key_exists("usersCheck", $context) ? $context["usersCheck"] : (function () { throw new RuntimeError('Variable "usersCheck" does not exist.', 474, $this->source); })())), "html", null, true);
        echo "
                                                        </span>
                                                        <span class=\"pulse-ring\"></span>
                                                    </button>
                                                </span>
                                            </h3>
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
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersCheck"]) || array_key_exists("usersCheck", $context) ? $context["usersCheck"] : (function () { throw new RuntimeError('Variable "usersCheck" does not exist.', 503, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 504
            echo "                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                ";
            // line 509
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 509), 0))) {
                // line 510
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 513
$context["user"], "sexe", [], "any", false, false, false, 513), 1))) {
                // line 514
                echo "                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                ";
            }
            // line 518
            echo "                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">";
            // line 523
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 523), "html", null, true);
            echo "</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">";
            // line 525
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 525), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">";
            // line 530
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 530), "html", null, true);
            echo "</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">";
            // line 532
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 532), "html", null, true);
            echo "</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        ";
            // line 535
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 535), 1))) {
                // line 536
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Pr??sent</span>
                                                                        ";
            }
            // line 538
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "checking", [], "any", false, false, false, 538), 0))) {
                // line 539
                echo "                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        ";
            }
            // line 542
            echo "                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-danger btn-sm\">
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
        // line 555
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
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-6 mt-5\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Nombres d'inscriptions</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Inscriptions mensuel</span>
                                            </h3>
                                        </div>
                                        <canvas id=\"bar\" style=\"position: relative; height:100%; width:100%\"></canvas>
                                    </div>
                                </div>
                                <div class=\"col-xl-6 mt-5\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Total utilisateurs</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Role utilisateurs</span>
                                            </h3>
                                        </div>
                                        <canvas id=\"myChartBar2\"
                                            style=\"position: relative; height:100%; width:100%\"></canvas>
                                    </div>
                                </div>
                            </div>
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
        // line 631
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdministratorController::sideBar"));
        echo "
            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    ";
        // line 637
        $this->loadTemplate("messenger/index.html.twig", "dashboard/admins-dashboard.html.twig", 637)->display($context);
        // line 638
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
    <!--end::Scrolltop-->
    <!--end::Main-->

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/admins-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  989 => 638,  987 => 637,  978 => 631,  900 => 555,  882 => 542,  877 => 539,  874 => 538,  869 => 536,  867 => 535,  861 => 532,  856 => 530,  848 => 525,  843 => 523,  836 => 518,  830 => 514,  828 => 513,  823 => 510,  821 => 509,  814 => 504,  810 => 503,  778 => 474,  754 => 453,  742 => 443,  727 => 436,  720 => 432,  719 => 431,  715 => 430,  714 => 429,  709 => 427,  703 => 424,  694 => 417,  690 => 416,  678 => 409,  671 => 405,  670 => 404,  666 => 403,  660 => 400,  654 => 397,  598 => 343,  586 => 336,  584 => 334,  572 => 324,  570 => 319,  569 => 318,  559 => 311,  549 => 303,  547 => 300,  546 => 299,  524 => 279,  519 => 277,  515 => 276,  401 => 165,  400 => 164,  337 => 104,  331 => 101,  306 => 78,  304 => 77,  292 => 67,  282 => 66,  245 => 48,  233 => 47,  197 => 23,  185 => 22,  136 => 16,  133 => 15,  123 => 14,  112 => 11,  102 => 10,  91 => 7,  81 => 6,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} Dashboard{% endblock %}


{% block page_title %}
    Dashboard administrateur
{% endblock %}

{% block final_stylesheets %}

{% endblock %}

{% block final_javascripts %}
<script>
 \"use strict\";var KTWidgets=function(){var t=function(t,e,a,o,s){var i=document.querySelector(e),r=parseInt(KTUtil.css(i,\"height\"));if(i){var l={series:[{name:\"Total\",data:a},{name:\"Revenue\",data:o}],chart:{fontFamily:\"inherit\",type:\"bar\",height:r,toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:[\"40%\"],endingShape:\"rounded\"}},legend:{show:!1},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:[\"transparent\"]},xaxis:{categories:[{% for data in calendarByMonth %}\"{{ data.0.start |date('M') }}\",{% endfor %}],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:KTUtil.getCssVariableValue(\"--bs-gray-700\"),fontSize:\"12px\"}}},yaxis:{labels:{style:{colors:KTUtil.getCssVariableValue(\"--bs-gray-700\"),fontSize:\"12px\"}}},fill:{opacity:1},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return t+\" jours\"}}},colors:[KTUtil.getCssVariableValue(\"--bs-primary\"),KTUtil.getCssVariableValue(\"--bs-light-primary\")],grid:{borderColor:KTUtil.getCssVariableValue(\"--bs-gray-200\"),strokeDashArray:4,yaxis:{lines:{show:!0}}}},n=new ApexCharts(i,l),d=!1,c=document.querySelector(t);!0===s&&(n.render(),d=!0),c.addEventListener(\"shown.bs.tab\",(function(t){0==d&&(n.render(),d=!0)}))}};return{init:function(){var e;!function(){var t=document.querySelector(\"#kt_stats_widget_1_chart\");if(t){var e=KTUtil.getCssVariableValue(\"--bs-gray-200\"),a=KTUtil.getCssVariableValue(\"--bs-gray-800\"),o={type:\"doughnut\",data:{datasets:[{data:[30,40,25],backgroundColor:[KTUtil.getCssVariableValue(\"--bs-success\"),KTUtil.getCssVariableValue(\"--bs-warning\"),KTUtil.getCssVariableValue(\"--bs-primary\")]}],labels:[\"Angular\",\"CSS\",\"HTML\"]},options:{chart:{fontFamily:\"inherit\"},cutout:\"75%\",cutoutPercentage:75,responsive:!0,maintainAspectRatio:!1,title:{display:!1,text:\"Technology\"},animation:{animateScale:!0,animateRotate:!0},tooltips:{enabled:!0,intersect:!1,mode:\"nearest\",bodySpacing:5,yPadding:10,xPadding:10,caretPadding:0,displayColors:!1,backgroundColor:e,bodyFontColor:a,cornerRadius:4,footerSpacing:0,titleSpacing:0},plugins:{legend:{display:!1}}}},s=t.getContext(\"2d\");new Chart(s,o)}}(),t(\"#kt_stats_widget_2_tab_1\",\"#kt_stats_widget_2_chart_1\",[{% for data in calendarByMonth %}{{ data.total | number_format(1, '.', ',') }},{% endfor %}],[],!0),t(\"#kt_stats_widget_2_tab_2\",\"#kt_stats_widget_2_chart_2\",[35,60,35,50,45,30],[65,80,50,80,75,105],!1),t(\"#kt_stats_widget_2_tab_3\",\"#kt_stats_widget_2_chart_3\",[25,40,45,50,40,60],[76,85,101,98,87,105],!1),t(\"#kt_stats_widget_2_tab_4\",\"#kt_stats_widget_2_chart_4\",[50,35,45,55,30,40],[76,85,101,98,87,105],!1),function(){var t=document.querySelector(\"#kt_mixed_widget_1_chart\"),e=parseInt(KTUtil.css(t,\"height\"));if(t){var a={series:[{name:\"Variation\",data:[{% for data in calendarByMonth %}{{ data.total | number_format(1, '.', ',') }},{% endfor %}]}],chart:{fontFamily:\"inherit\",type:\"area\",height:e,toolbar:{show:!1},zoom:{enabled:!1},sparkline:{enabled:!0}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:\"solid\",opacity:1},stroke:{curve:\"smooth\",show:!0,width:3,colors:[\"#20D489\",\"\"]},xaxis:{categories:[{% for data in calendarByMonth %}\"{{ data.0.start |date('M') }}\",{% endfor %}],axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}},crosshairs:{show:!1,position:\"front\",stroke:{color:KTUtil.getCssVariableValue(\"--bs-primary\"),width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:\"12px\"}}},yaxis:{min:0,max:60,labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}}},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return t}}},fill:{type:\"gradient\",gradient:{shadeIntensity:1,opacityFrom:.7,opacityTo:.6,stops:[0,100]}},colors:[KTUtil.getCssVariableValue(\"--bs-success\")],markers:{colors:[KTUtil.getCssVariableValue(\"--bs-light-primary\")],strokeColor:[KTUtil.getCssVariableValue(\"--bs-primary\")],strokeWidth:3}};new ApexCharts(t,a).render()}}(),function(){var t=document.querySelector(\"#kt_mixed_widget_2_chart\"),e=parseInt(KTUtil.css(t,\"height\"));if(t){var a={series:[{name:\"Net Profit\",data:[30,30,43,43,34,34,26,26,47,47]}],chart:{fontFamily:\"inherit\",type:\"area\",height:e,toolbar:{show:!1},zoom:{enabled:!1},sparkline:{enabled:!0}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:\"solid\",opacity:1},stroke:{curve:\"smooth\",show:!0,width:3,colors:[KTUtil.getCssVariableValue(\"--bs-info\")]},xaxis:{categories:[\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}},crosshairs:{show:!1,position:\"front\",stroke:{color:\"#E4E6EF\",width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:\"12px\"}}},yaxis:{labels:{show:!1,style:{colors:\"#A1A5B7\",fontSize:\"12px\"}}},states:{normal:{filter:{type:\"none\",value:0}},hover:{filter:{type:\"none\",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:\"none\",value:0}}},tooltip:{style:{fontSize:\"12px\"},y:{formatter:function(t){return\"\$\"+t+\" thousands\"}}},fill:{type:\"gradient\",gradient:{shadeIntensity:1,opacityFrom:.7,opacityTo:.6,stops:[0,100]}},colors:[KTUtil.getCssVariableValue(\"--bs-info\")],markers:{colors:[KTUtil.getCssVariableValue(\"--bs-light-info\")],strokeColor:[KTUtil.getCssVariableValue(\"--bs-info\")],strokeWidth:3}};new ApexCharts(t,a).render()}}(),(e=document.querySelector(\"#kt_forms_widget_1_form\"))&&e&&new Quill(\"#kt_forms_widget_1_editor\",{modules:{toolbar:{container:\"#kt_forms_widget_1_editor_toolbar\"}},placeholder:\"What is on your mind ?\",theme:\"snow\"})}}}();KTUtil.onDOMContentLoaded((function(){KTWidgets.init()}));
</script>

<script>
    ctx = document.getElementById(\"myChartBar2\");

var stars = [{% for data in userForRoles %}{{ data.total }},{% endfor %}];
var frameworks = [{% for data in userForRoles %}\"{{ data.0.role }}\",{% endfor %}];

var myChart = new Chart(ctx, {
 type: \"doughnut\",
 data: {
   labels: frameworks,
   datasets: [
     {
       label: \"Nombres\",
       data: stars,
       backgroundColor:[
       \"#20d489\",
       \"#00ff95\",
       \"#7bf5c2\"
       ],
       borderColor:\"#20d489\",
       borderWidth: 1
     }
   ]
 }
});

var ctx = document.getElementById(\"bar\");

var stars2 = [{% for data in userByMonth %}{{ data.total }},{% endfor %}];
var frameworks2 = [{% for data in userByMonth %}\"{{ data.0.createdAt | date('M') }}\",{% endfor %}];
var myChart = new Chart(ctx, {
  type: \"line\",
  data: {
    labels: frameworks2,
    datasets: [
      {
        label: \"Inscriptions\",
        data: stars2,
        backgroundColor: \"transparent\",
        borderColor:\"#20d489\",
        borderWidth: 1
      },
    ]
  }
});
</script>
{% endblock %}
{% block content %}
<section class=\"admin-dashboard\">
    <!--begin::Body-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class=\"d-flex flex-column flex-root\">
        <!--begin::Page-->
        <div class=\"page d-flex flex-row flex-column-fluid\">
            <!--begin::Wrapper-->
            <div class=\"wrapper d-flex flex-column flex-row-fluid\" id=\"kt_wrapper\">
                <!--begin::Header-->
                {% include 'components/_main-header.html.twig' %}
                <!--end::Header-->
                <!--begin::Main-->
                <div class=\"d-flex flex-column flex-column-fluid\">
                    <!--begin::toolbar-->
                    <div class=\"toolbar\" id=\"kt_toolbar\">
                        <div class=\"container d-flex flex-stack flex-wrap flex-sm-nowrap\">
                            <!--begin::Info-->
                            <div class=\"d-flex flex-column align-items-start justify-content-center flex-wrap me-1\">
                                <!--begin::Title-->
                                <h3 class=\"text-dark fw-bolder my-1\">Espace administrateur</h3>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class=\"breadcrumb breadcrumb-line bg-transparent text-muted fw-bold p-0 my-1 fs-7\">
                                    <li class=\"breadcrumb-item\">
                                        <a href=\"index.html\" class=\"text-muted text-hover-primary\">Dashboard
                                            administrateur</a>
                                    </li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Nav-->
                            <div class=\"nav-admin d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1\">
                                <a href=\"{{path('administrator')}}\" class=\"btn btn-active-accent active fw-bolder\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace administrateur\">Administrateur</a>
                                <a href=\"{{path('teacher')}}\" class=\"btn btn-active-accent fw-bolder ms-3\"
                                    class=\"menu-link px-3\" data-bs-toggle=\"tooltip\"
                                    title=\"Votre espace formateur\">Formateur</a>
                            </div>
                            <!--end::Nav-->
                        </div>
                    </div>
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <div class=\"content fs-6 d-flex flex-column-fluid\" id=\"kt_content\">
                        <!--begin::Container-->
                        <div class=\"container\">
                            <!--Begin::Row-->
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
                                                    <span class=\"fw-bolder fs-1 text-white\">{{
                                                        app.user.fullname}}</span></span>
                                            </div>
                                            <!--end::Text-->
                                            <!-- main codes start -->
                                            <div class=\"signboard outer\" style=\" right: 10%!important;\">
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
                                            style=\"background-image:url('assets/media/illustrations/admin5.png')\">
                                        </div>
                                        <!--end::Pic-->
                                    </div>
                                </div>
                            </div>

                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-12\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Infographique</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Nombres de jours de
                                                    formations calcul?? par mois</span>
                                            </h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class=\"testi card-body pt-3 pb-0 mt-n3\">
                                            <div class=\"tab-content mt-4\" id=\"myTabTables2\">
                                                <!--begin::Tap pane-->
                                                <div class=\"tab-pane fade show active\" id=\"kt_tab_2_1\" role=\"tabpanel\"
                                                    aria-labelledby=\"kt_tab_pane_2_1\">
                                                    <!--begin::Table-->
                                                    <div class=\"table-responsive\">
                                                        <!--Begin::Row-->
                                                        <div class=\"row d-flex justify-content-between g-5 g-xxl-8 \">
                                                            <div class=\"col-md-9 card card-stretch \">
                                                                <!--begin::Header-->
                                                                <div class=\"card-header border-0 pt-5\">
                                                                    <h3
                                                                        class=\"card-title align-items-start flex-column\">

                                                                    </h3>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class=\"card-body p-0 pb-13 mt-n3\">
                                                                    <div class=\"tab-content mt-5\" id=\"myTabTables1\">
                                                                        <!--begin::Tap pane-->
                                                                        <div class=\"tab-pane fade show active\"
                                                                            role=\"tabpanel\"
                                                                            aria-labelledby=\"kt_tab_pane_1_1\">
                                                                            <div class=\"d-flex flex-column\">
                                                                                <!--begin::Chart-->
                                                                                <div class=\"flex-grow-1\">
                                                                                    <div id=\"kt_stats_widget_2_chart_1\"
                                                                                        style=\"height: 250px\"></div>
                                                                                </div>
                                                                                <!--end::Chart-->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Tap pane-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--begin::Items-->
                                                            <div class=\"col-md-3\">
                                                                {% for data in calendarByMonth %}
                                                                <div data-bs-toggle=\"tooltip\" title=\"Il y'a eu {{ data.total }} dates de programmer en {{ data.0.start
                                                                            |
                                                                            date('M')}}\">
                                                                    <!--begin::Item-->
                                                                    <div class=\"d-flex flex-stack mb-6\">
                                                                        <!--begin::Section-->
                                                                        <div class=\"d-flex align-items-center me-2\">
                                                                            <!--begin::Symbol-->
                                                                            <div
                                                                                class=\"symbol symbol-50px symbol-light me-5\">
                                                                                <span class=\"symbol-label\">
                                                                                    <img src=\"assets/media/illustrations/process-3.png\"
                                                                                        alt=\"\" class=\"mw-75\" />
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div>
                                                                                <div
                                                                                    class=\"d-flex flex-column w-100 me-3\">
                                                                                    <div class=\"d-flex flex-stack mb-2\">
                                                                                        <span
                                                                                            class=\"text-dark me-2 fs-6 fw-bolder\">{{
                                                                                            data.0.start
                                                                                            |
                                                                                            date('M')
                                                                                            }}</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class=\"d-flex align-items-center\">
                                                                                        <div
                                                                                            class=\"progress h-6px w-100 bg-light-success\">
                                                                                            <div class=\"progress-bar bg-primary\"
                                                                                                role=\"progressbar\"
                                                                                                style=\"width: {{ data.total  | number_format(1, '.', ',') }}%;\"
                                                                                                aria-valuenow=\"50\"
                                                                                                aria-valuemin=\"0\"
                                                                                                aria-valuemax=\"100\">
                                                                                            </div>
                                                                                        </div>
                                                                                        <span style=\"width: 250px;\"
                                                                                            class=\"text-muted fs-7 fw-bold ps-3\">{{
                                                                                            data.total
                                                                                            |
                                                                                            number_format(0,
                                                                                            '.',
                                                                                            ',')
                                                                                            }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Label-->
                                                                        <div
                                                                            class=\"rounded badge badge-primary fw-bolder text-white-600 py-2 px-3\">
                                                                            {{ data.total |
                                                                            number_format(0,
                                                                            '.', ',') }}</div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Widget Item-->
                                                                </div>
                                                                {% endfor %}
                                                            </div>
                                                            <!--end::Widget Items-->
                                                        </div>
                                                        <!--End::Row-->
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
                            <!--End::Row-->
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"mt-5 col-md-4\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Body-->
                                        <div class=\"card-body\">
                                            <div id=\"kt_stats_widget_9_carousel\" class=\"carousel carousel-custom slide\"
                                                data-bs-ride=\"carousel\" data-bs-interval=\"8000\">
                                                <!--begin::Top-->
                                                <div class=\"d-flex flex-stack flex-wrap\">
                                                    <!--begin::Label-->
                                                    <span class=\"text-muted fw-bolder pe-2\">Dernieres dates
                                                        programmer</span>
                                                    <!--end::Label-->
                                                    <!--begin::Carousel Indicators-->
                                                    <ol class=\"p-0 m-0 carousel-indicators carousel-indicators-dots\">
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"0\" class=\"ms-1\"></li>
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"1\" class=\"ms-1 active\"
                                                            aria-current=\"true\"></li>
                                                        <li data-bs-target=\"#kt_stats_widget_9_carousel\"
                                                            data-bs-slide-to=\"2\" class=\"ms-1\"></li>
                                                    </ol>
                                                    <!--end::Carousel Indicators-->
                                                </div>
                                                <!--end::Top-->
                                                <!--begin::Carousel-->
                                                <div class=\"carousel-inner pt-9\">

                                                    <!--begin::Item-->
                                                    <div class=\"carousel-item active\">
                                                        <!--begin::Section-->
                                                        <div class=\"flex-grow-1\">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class=\"text-center fs-3 text-gray-800 text-hover-primary fw-bolder cursor-pointer\">
                                                                {{ allCalendar.0.name}}</h3>
                                                                <hr>
                                                                <h5 class=\" text-end fs-3 text-muted cursor-pointer\" style=\" z-index:0; position:absolute; right:0;\"> 
                                                                <img src=\"{{ asset('uploads/technoPic/' ~  allCalendar.0.category.picture )}}\" alt=\"Logo Profile\" style='width:50px;height:50px;'>
                                                               </h5>
                                                            <h5 class=\"fs-3 text-muted cursor-pointer\">
                                                                {{allCalendar.0.teacher.fullname}}</h5>
                                                            <h6 class=\"fs-3 text-warning cursor-pointer\">Session : {{
                                                                allCalendar.0.session.name}}</h6>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <p>
                                                                <span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">{{allCalendar.0.start | date ('d/M/Y')}}  - </span><span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">{{allCalendar.0.end | date ('d/M/Y')}}</span></p>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    {% for calendar in allCalendar %}
                                                    <!--begin::Item-->
                                                    <div class=\"carousel-item\">
                                                        <!--begin::Section-->
                                                        <div class=\"flex-grow-1\">
                                                            <!--begin::Title-->
                                                            <h3
                                                                class=\"text-center fs-3 text-gray-800 text-hover-primary fw-bolder cursor-pointer\">
                                                                {{ calendar.name}}</h3>
                                                                <hr>
                                                            <h5 class=\" text-end fs-3 text-muted cursor-pointer\" style=\" z-index:0; position:absolute; right:0;\"> 
                                                               <img src=\"{{ asset('uploads/technoPic/' ~  calendar.category.picture )}}\" alt=\"Logo Profile\" style='width:50px;height:50px;'>
                                                            </h5>
                                                            <h5 class=\"fs-3 text-muted cursor-pointer\">{{
                                                                calendar.teacher.fullname}}</h5>
                                                            <h6 class=\"fs-3 text-warning cursor-pointer\">Session : {{
                                                                calendar.session.name}}</h6>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <p>
                                                                <span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">{{calendar.start | date ('d/M/Y')}}  - </span><span class=\"text-primary fs-1 fw-bolder pt-3 mb-0\">{{calendar.end | date ('d/M/Y')}}</span></p>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->
                                                    {% endfor %}
                                                </div>
                                                <!--end::Carousel-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class=\"card-footer border-0 d-flex flex-stack pt-0 pb-10\">
                                            <!--begin::Label-->
                                            <span class=\"text-muted fs-6 fw-bold pe-2\">Mise ?? jours r??guliere</span>
                                            <!--end::Label-->
                                            <a href=\"{{path('view-calendar')}}\"
                                                class=\"btn btn-sm btn-primary fw-bolder px-6\">Voir tout</a>
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                </div>
                                <div class=\"col-xl-8\">
                                    <!--begin::Table Widget 2-->
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <!--begin::Header-->
                                        <div class=\"card-header border-0 pt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"card-label fw-bolder text-dark fs-3\">Utilisateurs
                                                    absent</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Total des utilisateurs absent
                                                    :
                                                    <button
                                                        class=\"btn btn-icon btn-sm btn-light-warning  pulse pulse-warning\"
                                                        data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\"
                                                        id=\"kt_activities_toggle\">
                                                        <span class=\"position-absolute fs-6\">
                                                            {{usersCheck | length}}
                                                        </span>
                                                        <span class=\"pulse-ring\"></span>
                                                    </button>
                                                </span>
                                            </h3>
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
                                                                {% for user in usersCheck %}
                                                                <tr>
                                                                    <td class=\"px-0 py-3\">
                                                                        <div class=\"symbol symbol-55px mt-1 me-5\">
                                                                            <span
                                                                                class=\"symbol-label bg-light-primary align-items-end\">
                                                                                {% if user.sexe == 0 %}
                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/011-boy-5.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                {% elseif user.sexe == 1 %}
                                                                                <img alt=\"Logo\"
                                                                                    src=\"assets/media/svg/avatars/003-girl-1.svg\"
                                                                                    class=\"mh-40px\" />
                                                                                {% endif %}
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class=\"px-0\">
                                                                        <a href=\"#\"
                                                                            class=\"text-gray-800 fw-bolder text-hover-primary fs-6\">{{user.fullname}}</a>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1\">{{user.role}}</span>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class=\"text-end\">
                                                                        <span
                                                                            class=\"text-gray-800 fw-bolder d-block fs-6\">{{user.email}}</span>
                                                                        <span
                                                                            class=\"text-muted fw-bold d-block mt-1 fs-7\">{{user.phone}}</span>
                                                                    </td>
                                                                    <td class=\"text-end\">
                                                                        {% if user.checking == 1 %}
                                                                        <span
                                                                            class=\"fw-bolder text-primary\">Pr??sent</span>
                                                                        {% endif %} {% if user.checking == 0 %}
                                                                        <span
                                                                            class=\"fw-bolder text-danger\">Absent</span>
                                                                        {% endif %}
                                                                    </td>
                                                                    <td class=\"text-end pe-0\">
                                                                        <a href=\"#\"
                                                                            class=\"btn btn-icon btn-bg-light btn-active-danger btn-sm\">
                                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                            <span class=\"svg-icon svg-icon-4\">
                                                                                <i class=\"fa fa-check\"></i>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                {% endfor %}
                                                            </tbody>
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
                            <div class=\"row g-0 g-xl-5 g-xxl-8\">
                                <div class=\"col-xl-6 mt-5\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Nombres d'inscriptions</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Inscriptions mensuel</span>
                                            </h3>
                                        </div>
                                        <canvas id=\"bar\" style=\"position: relative; height:100%; width:100%\"></canvas>
                                    </div>
                                </div>
                                <div class=\"col-xl-6 mt-5\">
                                    <div class=\"card card-stretch mb-5 mb-xxl-8\">
                                        <div class=\"card-header align-items-center border-0 mt-5\">
                                            <h3 class=\"card-title align-items-start flex-column\">
                                                <span class=\"fw-bolder text-dark fs-3\">Total utilisateurs</span>
                                                <span class=\"text-muted mt-2 fw-bold fs-6\">Role utilisateurs</span>
                                            </h3>
                                        </div>
                                        <canvas id=\"myChartBar2\"
                                            style=\"position: relative; height:100%; width:100%\"></canvas>
                                    </div>
                                </div>
                            </div>
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
            {{ render(controller('App\\\\Controller\\\\AdministratorController::sideBar')) }}
            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    {% include 'messenger/index.html.twig' %}
    <!--begin::Scrolltop-->
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
    <!--end::Scrolltop-->
    <!--end::Main-->

</section>

{% endblock %}", "dashboard/admins-dashboard.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\dashboard\\admins-dashboard.html.twig");
    }
}
