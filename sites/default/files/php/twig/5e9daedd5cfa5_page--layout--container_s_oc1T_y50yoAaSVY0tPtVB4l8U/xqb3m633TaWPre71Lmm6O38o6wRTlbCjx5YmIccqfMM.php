<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig */
class __TwigTemplate_7edc5394a3e067c7d9f76e515cc1dccbd2a67a9f88472afe77aca4ba7ccc6706 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 9, "if" => 11];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
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
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
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
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 21
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t

\t\t";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 27
            echo "\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
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
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 38
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
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
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 58
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 64
        echo "
\t\t";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 66
            echo "\t\t\t<div class=\"area after-content\">
\t\t\t\t<div class=\"container\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
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
        return array (  183 => 78,  177 => 74,  169 => 69,  164 => 66,  162 => 65,  159 => 64,  152 => 60,  148 => 58,  146 => 57,  141 => 54,  139 => 53,  132 => 48,  123 => 42,  117 => 38,  115 => 37,  111 => 35,  103 => 30,  98 => 27,  96 => 26,  92 => 24,  86 => 22,  83 => 21,  81 => 20,  75 => 16,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/page/page-layout/page--layout--container_sidebar.html.twig");
    }
}
