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

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_df6e646b7de7aff8390963d4f01b0d4f304a1e8a8bfc27d885d1f688674b7a91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'final_stylesheets' => [$this, 'block_final_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error403.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error403.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "@Twig/Exception/error403.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_stylesheets"));

        // line 4
        echo "<style>
        
    /*======================
        404 page
    =======================*/
    
    .page_404 *{margin:0 auto;}
    .page_404{ padding:40px 0; background:#fff;height: 100%;
    }
    
    .page_404  img{ width:100%;
    }
    
    .four_zero_four_bg{
     
     background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-repeat: no-repeat;
        background-position: center;
     }
     
     
     .four_zero_four_bg h1{
     font-size:80px;
     }
     
      .four_zero_four_bg h3{
                 font-size:80px;
                 }
                 
                 .link_404{\t\t\t 
        color: #fff!important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;}
        .contant_box_404{ margin-top:-50px;}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "<body>
   
        <section class=\"page_404\">
            <div class=\"container\">
                <div class=\"row\">\t
                <div class=\"col-sm-12 \">
                <div class=\"col-sm-10 col-sm-offset-1  text-center\">
                <div class=\"four_zero_four_bg\">
                    <h1 class=\"text-center \">403</h1>
                
                
                </div>
                
                <div class=\"contant_box_404\">
                <h3 class=\"h2\">
                Il semblerait que tu soit perdu 
                </h3>
                
                <p>La page demander est indisponible!</p>
                
                <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\" class=\" btn btn-primary link_404\">Page d'accueil</a>
            </div>
                </div>
                </div>
                </div>
            </div>
        </section>
        
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  127 => 45,  117 => 44,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block final_stylesheets %}
<style>
        
    /*======================
        404 page
    =======================*/
    
    .page_404 *{margin:0 auto;}
    .page_404{ padding:40px 0; background:#fff;height: 100%;
    }
    
    .page_404  img{ width:100%;
    }
    
    .four_zero_four_bg{
     
     background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-repeat: no-repeat;
        background-position: center;
     }
     
     
     .four_zero_four_bg h1{
     font-size:80px;
     }
     
      .four_zero_four_bg h3{
                 font-size:80px;
                 }
                 
                 .link_404{\t\t\t 
        color: #fff!important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;}
        .contant_box_404{ margin-top:-50px;}
    </style>
{% endblock %}

{% block content %}
<body>
   
        <section class=\"page_404\">
            <div class=\"container\">
                <div class=\"row\">\t
                <div class=\"col-sm-12 \">
                <div class=\"col-sm-10 col-sm-offset-1  text-center\">
                <div class=\"four_zero_four_bg\">
                    <h1 class=\"text-center \">403</h1>
                
                
                </div>
                
                <div class=\"contant_box_404\">
                <h3 class=\"h2\">
                Il semblerait que tu soit perdu 
                </h3>
                
                <p>La page demander est indisponible!</p>
                
                <a href=\"{{path('dashboard_home')}}\" class=\" btn btn-primary link_404\">Page d'accueil</a>
            </div>
                </div>
                </div>
                </div>
            </div>
        </section>
        
    </body>

{% endblock %}", "@Twig/Exception/error403.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\bundles\\TwigBundle\\Exception\\error403.html.twig");
    }
}
