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

/* themes/gavias_kunco/templates/page/html.html.twig */
class __TwigTemplate_641f544b25f2de4e837b506fcf251fdc29ee9c9357855664430725ad6d73da3a extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    <title>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 35, $this->source), "html", null, true);
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 36, $this->source), "html", null, true);
        echo "/css/update.css\" media=\"screen\" />

    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 38, $this->source));
        echo "

    ";
        // line 40
        if (($context["customize_css"] ?? null)) {
            // line 41
            echo "      <style type=\"text/css\">
        ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 42, $this->source));
            echo "
      </style>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (($context["customize_styles"] ?? null)) {
            // line 47
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 47, $this->source));
            echo "
    ";
        }
        // line 49
        echo "
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
      <link rel=\"manifest\" href=\"/site.webmanifest\">
      <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#5bbad5\">
      <meta name=\"msapplication-TileColor\" content=\"#da532c\">
      <meta name=\"theme-color\" content=\"#ffffff\">

  </head>

  ";
        // line 60
        $context["body_classes"] = [0 => ((        // line 61
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 62
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 62, $this->source))))), 2 => ((        // line 63
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 63, $this->source)))) : ("")), 3 => ((        // line 64
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 64, $this->source)))) : (""))];
        // line 67
        echo "
  <body";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 74
        if (($context["preloader"] ?? null)) {
            // line 75
            echo "      <div id=\"jpreContent\" >
        <div id=\"jprecontent-inner\">
          <div class=\"preloader-wrapper active\">
            <img src=\"";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 78, $this->source), "html", null, true);
            echo "/images/preloader/preloader-12.gif\" alt=\"\" />
          </div>
        </div>
      </div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 84, $this->source), "html", null, true);
        echo "
    ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 85, $this->source), "html", null, true);
        echo "
    ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 86, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 87, $this->source));
        echo "\">

    ";
        // line 89
        if (($context["addon_template"] ?? null)) {
            // line 90
            echo "      <div class=\"permission-save-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 90, $this->source), "html", null, true);
            echo "\">
        ";
            // line 91
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_kunco/templates/page/html.html.twig", 91)->display($context);
            // line 92
            echo "      </div>
    ";
        }
        // line 94
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 94,  179 => 92,  177 => 91,  172 => 90,  170 => 89,  165 => 87,  161 => 86,  157 => 85,  153 => 84,  150 => 83,  142 => 78,  137 => 75,  135 => 74,  129 => 71,  123 => 68,  120 => 67,  118 => 64,  117 => 63,  116 => 62,  115 => 61,  114 => 60,  101 => 49,  95 => 47,  93 => 46,  90 => 45,  84 => 42,  81 => 41,  79 => 40,  74 => 38,  69 => 36,  65 => 35,  60 => 33,  55 => 31,  51 => 30,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/html.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/page/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "set" => 60, "include" => 91);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 62, "t" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
