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

/* layout.html.twig */
class __TwigTemplate_e8bdafed6bf70fdaa6bc5526a5cbb959bbd036c574c57f406c50e5cebc18caef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "

<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"canonical\" href=\"Https://preview.keenthemes.com/start\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/media/logos/favicon.ico"), "html", null, true);
        echo "\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/global/plugins.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/myStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/responsivebootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/responsivebootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css\"
    integrity=\"sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==\"
    crossorigin=\"anonymous\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "<!--begin::Loader-->
<div id=\"global-loader\" style=\"background-color:rgb(255, 255, 255)!important;\">
    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/programmer.gif"), "html", null, true);
        echo "\" class=\"loader-img\" alt=\"Loader\" style=\"width:300px;\">
</div>
<!-- End Loader -->

<!--begin::Body-->

<body id=\"kt_body\" data-sidebar=\"on\" class=\"header-fixed header-tablet-and-mobile-fixed sidebar-enabled\">
    <div style=\"position: relative; z-index: 55;\" class=\"col-sm-12 col-lg-12 col-xl-12\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
            ";
                // line 39
                if ((0 === twig_compare($context["label"], "success"))) {
                    // line 40
                    echo "            <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-up\"></i></span>
            ";
                } else {
                    // line 42
                    echo "            <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-down\"></i></span>
            ";
                }
                // line 44
                echo "            <span class=\"alert-inner--text\"><strong>";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["label"]), "html", null, true);
                echo " : </strong> ";
                echo $context["message"];
                echo "</span>
            <button type=\"button\" class=\"btn btn-primary close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "role", [], "any", false, false, false, 53), "Administrateur"))) {
            // line 54
            echo "    ";
            $this->loadTemplate("components/_modal.html.twig", "layout.html.twig", 54)->display($context);
            // line 55
            echo "    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "role", [], "any", false, false, false, 55), "Eleve"))) {
            // line 56
            echo "    ";
            $this->loadTemplate("components/_modal-student.html.twig", "layout.html.twig", 56)->display($context);
            // line 57
            echo "    ";
        }
        // line 58
        echo "</body>
<!-- End Body -->

<!-- Back-to-top -->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fe fe-arrow-up\"></i></a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/global/plugins.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/widgets.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/modals/create-app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/modals/select-location.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/modals/users-search.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/apps/chat/chat.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libraries/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libraries/particles.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libraries/jquery-2.2.4.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libraries/typed.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libraries/jquery.counterup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom/particle-theme-light.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/table-data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/fileexport/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatable/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js\"
    integrity=\"sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==\"
    crossorigin=\"anonymous\"></script>

<script>
    \$('.dropify').dropify({
        messages: {
            default: 'Glissez-d&eacute;posez un fichier ici ou cliquez',
            replace: 'Glissez-d&eacute;posez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'D&eacute;sol&eacute;, le fichier est trop volumineux'
        }
    });
</script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('.select2').select2({
        dropdownParent: \$('#kt_modal_message'),
        width: '100%',
    });
</script>
<script>
    \$(document).ready(function () {
    function addi() {
        // la tu detecte ton dernier id mais tu sais aussi qu'il pars tjrs de 1 donc...
        // data n'est plus un objet, mais un tableau d'objet
        var \$data = \$('.selectCheck').val();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chekingSwitch");
        echo "\",
            data: \$data,
            success: function () {
                // console.log(\$data);
            }
        });

    }
    \$('.selectCheck').on('click', function () {
        addi()
    })



        var monthNames = [\"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\"];
        var dayNames = [\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\"];

        var newDate = new Date();
        newDate.setDate(newDate.getDate());

        setInterval(function () {
            var hours = new Date().getHours();
            \$(\".hour\").html((hours < 10 ? \"0\" : \"\") + hours);
            var seconds = new Date().getSeconds();
            \$(\".second\").html((seconds < 10 ? \"0\" : \"\") + seconds);
            var minutes = new Date().getMinutes();
            \$(\".minute\").html((minutes < 10 ? \"0\" : \"\") + minutes);

            \$(\".month span,.month2 span\").text(monthNames[newDate.getMonth()]);
            \$(\".date span,.date2 span\").text(newDate.getDate());
            \$(\".day span,.day2 span\").text(dayNames[newDate.getDay()]);
            \$(\".year span\").html(newDate.getFullYear());
        }, 200);

    });


  setInterval(function() {
    \$(\"#svg\").animate({
      marginLeft: \"550px\"
    }, 10000);
    \$(\"#svg\").animate({
     marginLeft: \"200px\"
    }, 10000);
  });

  setInterval(function() {
    \$(\"#svg2\").animate({
      marginLeft: \"80px\"
    }, 10000);
    \$(\"#svg2\").animate({
     marginLeft: \"-70px\"
    }, 10000);
  });


</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 122,  374 => 107,  355 => 91,  350 => 89,  346 => 88,  342 => 87,  338 => 86,  334 => 85,  330 => 84,  326 => 83,  322 => 82,  318 => 81,  314 => 80,  310 => 79,  306 => 78,  302 => 77,  298 => 76,  294 => 75,  290 => 74,  286 => 73,  282 => 72,  278 => 71,  274 => 70,  270 => 69,  265 => 68,  255 => 67,  236 => 52,  220 => 58,  217 => 57,  214 => 56,  211 => 55,  208 => 54,  205 => 53,  203 => 52,  200 => 51,  194 => 50,  179 => 44,  175 => 42,  171 => 40,  169 => 39,  164 => 38,  159 => 37,  155 => 36,  144 => 28,  140 => 26,  130 => 25,  115 => 19,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  75 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}


<link href=\"{{ asset('assets/plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\">
<link rel=\"canonical\" href=\"Https://preview.keenthemes.com/start\" />
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
<link href=\"{{ asset('assets/media/logos/favicon.ico') }}\">
<link href=\"{{ asset('assets/plugins/global/plugins.bundle.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/css/style.bundle.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/css/myStyle.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('assets/css/custom/theme.css') }}\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css\"
    integrity=\"sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==\"
    crossorigin=\"anonymous\" />
{% endblock %}

{% block body %}
<!--begin::Loader-->
<div id=\"global-loader\" style=\"background-color:rgb(255, 255, 255)!important;\">
    <img src=\"{{ asset('assets/img/programmer.gif') }}\" class=\"loader-img\" alt=\"Loader\" style=\"width:300px;\">
</div>
<!-- End Loader -->

<!--begin::Body-->

<body id=\"kt_body\" data-sidebar=\"on\" class=\"header-fixed header-tablet-and-mobile-fixed sidebar-enabled\">
    <div style=\"position: relative; z-index: 55;\" class=\"col-sm-12 col-lg-12 col-xl-12\">
        {% for label, messages in app.flashes %}
        {% for message in messages %}
        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
            {% if label == 'success' %}
            <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-up\"></i></span>
            {% else %}
            <span class=\"alert-inner--icon\"><i class=\"fe fe-thumbs-down\"></i></span>
            {% endif %}
            <span class=\"alert-inner--text\"><strong>{{ label | title }} : </strong> {{ message | raw }}</span>
            <button type=\"button\" class=\"btn btn-primary close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
            </button>
        </div>
        {% endfor %}
        {% endfor %}
    </div>
    {% block content '' %}
    {% if app.user.role == 'Administrateur' %}
    {% include 'components/_modal.html.twig' %}
    {% elseif app.user.role == 'Eleve' %}
    {% include 'components/_modal-student.html.twig' %}
    {% endif %}
</body>
<!-- End Body -->

<!-- Back-to-top -->
<a href=\"#top\" id=\"back-to-top\"><i class=\"fe fe-arrow-up\"></i></a>

{% endblock %}


{% block javascripts %}
<script src=\"{{ asset('assets/plugins/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/global/plugins.bundle.js') }}\"></script>
<script src=\"{{ asset('assets/js/scripts.bundle.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/widgets.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/modals/create-app.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/modals/select-location.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/modals/users-search.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/apps/chat/chat.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>
<script src=\"{{ asset('assets/js/libraries/wow.js') }}\"></script>
<script src=\"{{ asset('assets/js/libraries/particles.js') }}\"></script>
<script src=\"{{ asset('assets/js/libraries/jquery-2.2.4.js') }}\"></script>
<script src=\"{{ asset('assets/js/libraries/typed.js') }}\"></script>
<script src=\"{{ asset('assets/js/libraries/jquery.counterup.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom/particle-theme-light.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/table-data.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js\"></script>
<script src=\"{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js\"
    integrity=\"sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==\"
    crossorigin=\"anonymous\"></script>

<script>
    \$('.dropify').dropify({
        messages: {
            default: 'Glissez-d&eacute;posez un fichier ici ou cliquez',
            replace: 'Glissez-d&eacute;posez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'D&eacute;sol&eacute;, le fichier est trop volumineux'
        }
    });
</script>
<script src=\"{{ asset('assets/plugins/select2/js/select2.min.js') }}\"></script>
<script>
    \$('.select2').select2({
        dropdownParent: \$('#kt_modal_message'),
        width: '100%',
    });
</script>
<script>
    \$(document).ready(function () {
    function addi() {
        // la tu detecte ton dernier id mais tu sais aussi qu'il pars tjrs de 1 donc...
        // data n'est plus un objet, mais un tableau d'objet
        var \$data = \$('.selectCheck').val();
        \$.ajax({
            type: \"POST\",
            url: \"{{path('chekingSwitch')}}\",
            data: \$data,
            success: function () {
                // console.log(\$data);
            }
        });

    }
    \$('.selectCheck').on('click', function () {
        addi()
    })



        var monthNames = [\"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\"];
        var dayNames = [\"Dimanche\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\"];

        var newDate = new Date();
        newDate.setDate(newDate.getDate());

        setInterval(function () {
            var hours = new Date().getHours();
            \$(\".hour\").html((hours < 10 ? \"0\" : \"\") + hours);
            var seconds = new Date().getSeconds();
            \$(\".second\").html((seconds < 10 ? \"0\" : \"\") + seconds);
            var minutes = new Date().getMinutes();
            \$(\".minute\").html((minutes < 10 ? \"0\" : \"\") + minutes);

            \$(\".month span,.month2 span\").text(monthNames[newDate.getMonth()]);
            \$(\".date span,.date2 span\").text(newDate.getDate());
            \$(\".day span,.day2 span\").text(dayNames[newDate.getDay()]);
            \$(\".year span\").html(newDate.getFullYear());
        }, 200);

    });


  setInterval(function() {
    \$(\"#svg\").animate({
      marginLeft: \"550px\"
    }, 10000);
    \$(\"#svg\").animate({
     marginLeft: \"200px\"
    }, 10000);
  });

  setInterval(function() {
    \$(\"#svg2\").animate({
      marginLeft: \"80px\"
    }, 10000);
    \$(\"#svg2\").animate({
     marginLeft: \"-70px\"
    }, 10000);
  });


</script>
{% endblock %}", "layout.html.twig", "C:\\wamp64\\www\\Unlock-Formation\\templates\\layout.html.twig");
    }
}
