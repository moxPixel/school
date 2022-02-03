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
class __TwigTemplate_01c46c2c3284c49bf29a687f00b4722e0a020f121e5feee8e0a6806c642bc323 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/message.html.twig"));

        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "firstname", [], "any", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "Lastname", [], "any", false, false, false, 1), "html", null, true);
        echo ",<br/>
<u>Pour accedez a votre tableau de bord, veuillez cliquer sur le lien ci-dessous :</u>
<br/><br/>

";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "

 <br/><br/>
<a href=\"https://unlock-formation.fr\" style=\"display: inline-block; padding: 11px 30px; margin: 10px 0px 20px; font-size: 15px; color: #fff; background: #69bff8b4; border-radius: 60px; text-decoration:none;\">
Mon tableau de bord</a>

<br/><br/>
En cas de difficultés vous pouvez nous joindre par téléphone au :<b>07.67.41.59.55</b> <br/>
Bonne Réception,<br/>
L'équipe Unlock technologies<br/>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  53 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Bonjour {{ user.firstname }} {{ user.Lastname }},<br/>
<u>Pour accedez a votre tableau de bord, veuillez cliquer sur le lien ci-dessous :</u>
<br/><br/>

{{ message }}

 <br/><br/>
<a href=\"https://unlock-formation.fr\" style=\"display: inline-block; padding: 11px 30px; margin: 10px 0px 20px; font-size: 15px; color: #fff; background: #69bff8b4; border-radius: 60px; text-decoration:none;\">
Mon tableau de bord</a>

<br/><br/>
En cas de difficultés vous pouvez nous joindre par téléphone au :<b>07.67.41.59.55</b> <br/>
Bonne Réception,<br/>
L'équipe Unlock technologies<br/>", "models/message.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\models\\message.html.twig");
    }
}
