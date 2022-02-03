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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_925ba0f4fe5a1acee6e514bd898132f03f168a2d3f9dd8d6bc97fd4a1056b194 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "@Twig/Exception/error500.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<body>
   
        <section class=\"page_404\">
            <div class=\"container\">
                <div class=\"row\">\t
                <div class=\"col-sm-12 \">
                <div class=\"col-sm-10 col-sm-offset-1  text-center\">
                <div class=\"four_zero_four_bg\">
                    <h1 class=\"text-center \">500</h1>
                
                
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
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 65,  97 => 45,  93 => 44,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error500.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/bundles/TwigBundle/Exception/error500.html.twig");
    }
}
