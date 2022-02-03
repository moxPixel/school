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
class __TwigTemplate_d1fa844302bcae34f7ef6c41303532773a78269862a15a5837756d784a7ee9d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "school/course/calendar.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fullcalendar/lib/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_javascripts"));

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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "role", [], "any", false, false, false, 29), "Eleve"))) {
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
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "role", [], "any", false, false, false, 39), "Formateur")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "role", [], "any", false, false, false, 39), "Administrateur")))) {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["calendarTeacher"]) || array_key_exists("calendarTeacher", $context) ? $context["calendarTeacher"] : (function () { throw new RuntimeError('Variable "calendarTeacher" does not exist.', 40, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "school/course/calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 48,  183 => 44,  179 => 43,  173 => 42,  170 => 41,  165 => 40,  162 => 39,  159 => 38,  149 => 34,  145 => 33,  139 => 32,  136 => 31,  131 => 30,  129 => 29,  104 => 8,  94 => 7,  81 => 3,  71 => 2,  56 => 58,  54 => 7,  50 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block final_stylesheets %}
    <link href=\"{{ asset('assets/fullcalendar/lib/main.css') }}\" rel=\"stylesheet\">
{% endblock %}


{% block final_javascripts %}
    <script src=\"{{ asset('assets/fullcalendar/lib/main.js') }}\"></script>
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
        {% if app.user.role == 'Eleve' %}
      {% for calendar in calendar %}
      {
          title:'{{calendar.category.name}} avec {{calendar.teacher.fullname}}',
          start: '{{calendar.start |date('Y-m-d H:i:s')}}',
          end: '{{calendar.end |date('Y-m-d H:i:s')}}'
        
      }, 
        {% endfor %}
      {% endif %}
        {% if (app.user.role == 'Formateur') or (app.user.role == 'Administrateur') %}
        {% for calendar in calendarTeacher %}
        {
            title:'{{calendar.category.name}} avec {{calendar.teacher.fullname}}',
            start: '{{calendar.start |date('Y-m-d H:i:s')}}',
            end: '{{calendar.end |date('Y-m-d H:i:s')}}'
          
        }, 
          {% endfor %}
        {% endif %}]
    });

    calendar.render();
    calendar.setOption('locale','fr');
    
  });

        </script>
{% endblock %}


              <div id=\"calendar\" style=\"background-color:none;\"></div>


", "school/course/calendar.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\school\\course\\calendar.html.twig");
    }
}
