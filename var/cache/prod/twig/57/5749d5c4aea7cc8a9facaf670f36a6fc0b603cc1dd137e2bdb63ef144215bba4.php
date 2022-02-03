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

/* components/_checking.html.twig */
class __TwigTemplate_4fd3e4a174e0004305126d02f949437acdb495ad5a84d396c7581402723588e4 extends Template
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
        echo "<div class=\"col-lg-9 col-xl-6 d-flex align-items-center\" class=\"menu-link px-3\" data-bs-toggle=\"tooltip\" title=\"Indique votre état de présence\">
    <div class=\"form-check form-check-custom form-check-solid form-switch\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
        </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "components/_checking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_checking.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/components/_checking.html.twig");
    }
}
