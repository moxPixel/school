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

/* base.html.twig */
class __TwigTemplate_02eb4e227a1c44a8180dab7439242108967a5cff246d85287222867792f406d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'app_title' => [$this, 'block_app_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'final_stylesheets' => [$this, 'block_final_stylesheets'],
            'head_javascripts' => [$this, 'block_head_javascripts'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'final_javascripts' => [$this, 'block_final_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>


<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>
        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('final_stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 17
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>

";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        $this->displayBlock('final_javascripts', $context, $blocks);
        // line 23
        echo "
<!-- Custom styles for this template -->


</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock('page_title', $context, $blocks);
        echo " | ";
        $this->displayBlock('app_title', $context, $blocks);
    }

    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    public function block_app_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Unlock";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 15
    public function block_final_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 16
    public function block_head_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 22
    public function block_final_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 22,  143 => 21,  136 => 20,  129 => 16,  122 => 15,  115 => 14,  94 => 10,  86 => 23,  84 => 22,  82 => 21,  80 => 20,  75 => 17,  72 => 16,  69 => 15,  67 => 14,  62 => 12,  59 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/base.html.twig");
    }
}
