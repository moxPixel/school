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

/* school/course/calendar.html.twig */
class __TwigTemplate_6490045282f23a4317ca9e1b609b3fead16082fe2426f016dc104af8fce84b90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'final_stylesheets' => [$this, 'block_final_stylesheets'],
            'final_javascripts' => [$this, 'block_final_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('final_stylesheets', $context, $blocks);
        // line 5
        echo "

";
        // line 7
        $this->displayBlock('final_javascripts', $context, $blocks);
        // line 58
        echo "

              <div id=\"calendar\" style=\"background-color:none;\"></div>


";
    }

    // line 2
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fullcalendar/lib/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fullcalendar/lib/main.js"), "html", null, true);
        echo "\"></script>
    <script>
 
    document.addEventListener('DOMContentLoaded', function() {  
    var calendarEl = document.getElementById('calendar');
    var initialLocaleCode = 'fr';
    var calendar = new FullCalendar.Calendar(calendarEl, {
      dayMaxEventRows: true, // for all non-TimeGrid views
      views: {
          timeGrid: {
              dayMaxEventRows: 6 // adjust to 6 only for timeGridWeek/timeGridDay
          }
      },
      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale: initialLocaleCode,
      initialDate: new Date(),
      events: [
        ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "role", [], "any", false, false, false, 29), "Eleve"))) {
            // line 30
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["calendar"]);
            foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
                // line 31
                echo "      {
          title:'";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo " avec ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "teacher", [], "any", false, false, false, 32), "fullname", [], "any", false, false, false, 32), "html", null, true);
                echo "',
          start: '";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true);
                echo "',
          end: '";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true);
                echo "'
        
      }, 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      ";
        }
        // line 39
        echo "        ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "role", [], "any", false, false, false, 39), "Formateur")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "role", [], "any", false, false, false, 39), "Administrateur")))) {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["calendarTeacher"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
                // line 41
                echo "        {
            title:'";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo " avec ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["calendar"], "teacher", [], "any", false, false, false, 42), "fullname", [], "any", false, false, false, 42), "html", null, true);
                echo "',
            start: '";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 43), "Y-m-d H:i:s"), "html", null, true);
                echo "',
            end: '";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true);
                echo "'
          
        }, 
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        echo "]
    });

    calendar.render();
    calendar.setOption('locale','fr');
    
  });

        </script>
";
    }

    public function getTemplateName()
    {
        return "school/course/calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  153 => 44,  149 => 43,  143 => 42,  140 => 41,  135 => 40,  132 => 39,  129 => 38,  119 => 34,  115 => 33,  109 => 32,  106 => 31,  101 => 30,  99 => 29,  74 => 8,  70 => 7,  63 => 3,  59 => 2,  50 => 58,  48 => 7,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "school/course/calendar.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/school/course/calendar.html.twig");
    }
}
