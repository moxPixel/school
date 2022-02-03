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

/* models/message.html.twig */
class __TwigTemplate_861970fb2b8746993fb8b2394ad65718a9c2b93b5f60150dade0ef082eef6b56 extends Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "Lastname", [], "any", false, false, false, 1), "html", null, true);
        echo ",<br/>
<u>Pour accedez a votre tableau de bord, veuillez cliquer sur le lien ci-dessous :</u>
<br/><br/>

";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "

 <br/><br/>
<a href=\"https://unlock-formation.fr\" style=\"display: inline-block; padding: 11px 30px; margin: 10px 0px 20px; font-size: 15px; color: #fff; background: #69bff8b4; border-radius: 60px; text-decoration:none;\">
Mon tableau de bord</a>

<br/><br/>
En cas de difficultés vous pouvez nous joindre par téléphone au :<b>07.67.41.59.55</b> <br/>
Bonne Réception,<br/>
L'équipe Unlock technologies<br/>";
    }

    public function getTemplateName()
    {
        return "models/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "models/message.html.twig", "/homepages/16/d846999941/htdocs/Unlock-Formation/templates/models/message.html.twig");
    }
}
