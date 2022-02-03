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

/* school/course/admin/add-remuneration.html.twig */
class __TwigTemplate_3daf1dc222fd1fe5a0526908f5c0ce21969dbc7d313dd126f6869b7e553096bb extends Template
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
        // line 1
        echo "<div class=\"row\">
<div class=\"col-md-6\">
    <img style=\"width:80%;\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/illustrations/free-trial.png"), "html", null, true);
        echo "\" alt=\"\">
</div>
<div class=\"col-md-6\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
</div>

</div>
       
         ";
    }

    public function getTemplateName()
    {
        return "school/course/admin/add-remuneration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "school/course/admin/add-remuneration.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/school/course/admin/add-remuneration.html.twig");
    }
}
