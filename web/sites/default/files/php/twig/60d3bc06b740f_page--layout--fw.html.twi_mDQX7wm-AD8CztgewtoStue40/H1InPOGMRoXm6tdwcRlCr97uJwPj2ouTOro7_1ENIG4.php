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

/* themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_8184a379f79e2a357da860588338a97fce88ff319abaaa92ddbd9edc6a60d55e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 8, "if" => 10];
        $filters = ["escape" => 12];
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
        echo "<div class=\"body-page gva-body-page\">
   ";
        // line 8
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig", 8)->display($context);
        // line 9
        echo "\t
\t";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 11
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 15
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 20
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "\t

\t\t";
        // line 25
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 26
            echo "\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 34
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 37
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 47
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full\">
\t\t\t\t";
        // line 52
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig", 52)->display($context);
        // line 53
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 57
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 63
        echo "
\t\t";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 65
            echo "\t\t\t<div class=\"area after-content\">
\t\t\t\t<div class=\"container\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 73
        echo "\t\t
\t</div>

</div>

";
        // line 78
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig", 78)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 78,  176 => 73,  168 => 68,  163 => 65,  161 => 64,  158 => 63,  151 => 59,  147 => 57,  145 => 56,  140 => 53,  138 => 52,  131 => 47,  122 => 41,  116 => 37,  114 => 36,  110 => 34,  102 => 29,  97 => 26,  95 => 25,  91 => 23,  85 => 21,  82 => 20,  80 => 19,  74 => 15,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/page/page-layout/page--layout--fw.html.twig");
    }
}
