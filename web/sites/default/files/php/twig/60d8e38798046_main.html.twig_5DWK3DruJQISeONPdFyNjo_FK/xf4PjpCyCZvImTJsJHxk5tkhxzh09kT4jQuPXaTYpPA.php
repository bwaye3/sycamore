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

/* themes/gavias_kunco/templates/page/main.html.twig */
class __TwigTemplate_aed314a2ab96255715e417d1a2e0b22b6ea75e07cde3c2dbd4158905770ab823 extends \Twig\Template
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
        // line 1
        echo "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 5
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 5) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 5))) {
            echo "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 7
            echo "\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 7))) {
            echo "\t
\t\t\t";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 8)) {
                // line 9
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-9 sb-r ";
                // line 10
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 11)) {
                // line 12
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-9 col-md-push-3 sb-l ";
                // line 13
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 14
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null), 16, $this->source), "html", null, true);
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 20)) {
            // line 21
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "
\t\t\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 26)) {
            // line 27
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 32)) {
            // line 33
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 42)) {
            // line 43
            echo "\t\t\t";
            $context["cl_left"] = "col-md-3 col-md-pull-9 col-sm-12 col-xs-12";
            // line 44
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 44)) {
                // line 45
                echo "\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 46
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null), 48, $this->source), "html", null, true);
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 54
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t";
            $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
            // line 59
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 59)) {
                // line 60
                echo "\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 61
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null), 63, $this->source), "html", null, true);
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 69
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 69,  192 => 65,  187 => 63,  181 => 61,  178 => 60,  175 => 59,  172 => 58,  170 => 57,  165 => 54,  158 => 50,  153 => 48,  147 => 46,  144 => 45,  141 => 44,  138 => 43,  136 => 42,  129 => 37,  123 => 34,  120 => 33,  118 => 32,  115 => 31,  109 => 28,  106 => 27,  104 => 26,  101 => 25,  95 => 22,  92 => 21,  90 => 20,  83 => 16,  79 => 14,  73 => 13,  70 => 12,  68 => 11,  63 => 10,  60 => 9,  58 => 8,  53 => 7,  51 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/main.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/page/main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 5);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
