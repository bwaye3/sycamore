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

/* themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig */
class __TwigTemplate_a586f7be2a82cdd0d0fe89ae995d07f28445df10cd2dfa8b3cff6be3d99fa8d5 extends \Twig\Template
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
        // line 7
        echo "
<div class=\"body-page gva-body-page\">
   ";
        // line 9
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 9)->display($context);
        // line 10
        echo "\t
   ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 11)) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "\t
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 20)) {
            // line 21
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t

\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 26)) {
            // line 27
            echo "\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 37)) {
            // line 38
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 48
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 53
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 64
        echo "
\t\t";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 65)) {
            // line 66
            echo "\t\t\t<div class=\"area after-content\">
\t\t\t\t<div class=\"container\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 74
        echo "\t\t
\t</div>
</div>

";
        // line 78
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 78)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 78,  161 => 74,  153 => 69,  148 => 66,  146 => 65,  143 => 64,  136 => 60,  132 => 58,  130 => 57,  125 => 54,  123 => 53,  116 => 48,  107 => 42,  101 => 38,  99 => 37,  95 => 35,  87 => 30,  82 => 27,  80 => 26,  76 => 24,  70 => 22,  67 => 21,  65 => 20,  59 => 16,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9, "if" => 11);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
