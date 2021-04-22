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

/* themes/gavias_kunco/templates/comment.html.twig */
class __TwigTemplate_2681c6e845fa2a5fb6e27a7ca9882b9ee717352b95605b4a2c56dd08838284c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67, "set" => 71];
        $filters = ["escape" => 68, "without" => 81];
        $functions = ["attach_library" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'without'],
                ['attach_library']
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
        // line 67
        if (($context["threaded"] ?? null)) {
            // line 68
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/drupal.comment.threaded"), "html", null, true);
            echo "
";
        }
        // line 71
        $context["classes"] = [0 => "comment-wrapper", 1 => "comment", 2 => "js-comment", 3 => (((        // line 75
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null)))) : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 76
($context["comment"] ?? null), "owner", []), "anonymous", [])) ? ("by-anonymous") : ("")), 5 => (((        // line 77
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == $this->getAttribute(($context["commented_entity"] ?? null), "getOwnerId", [], "method")))) ? ((("by-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["commented_entity"] ?? null), "getEntityTypeId", [], "method"))) . "-author")) : ("")), 6 => "clearfix"];
        // line 81
        echo "<article role=\"article\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role"), "html", null, true);
        echo ">
  ";
        // line 87
        echo "  <span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null)), "html", null, true);
        echo "\"></span>

  <footer class=\"comment__meta\">
    ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
        echo "
    <p class=\"comment__author\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true);
        echo "</p>
    <p class=\"comment__time\">";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo "</p>
    <p class=\"comment__permalink\">";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null)), "html", null, true);
        echo "</p>
    ";
        // line 99
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 100
            echo "      <p class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null)), "html", null, true);
            echo "</p>
    ";
        }
        // line 102
        echo "  </footer>

  <div";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method")), "html", null, true);
        echo ">
    ";
        // line 105
        if (($context["title"] ?? null)) {
            // line 106
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
      <h3";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
      ";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 110
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "links"), "html", null, true);
        echo "
    ";
        // line 111
        if ($this->getAttribute(($context["content"] ?? null), "links", [])) {
            // line 112
            echo "      <nav>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
            echo "</nav>
    ";
        }
        // line 114
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 114,  138 => 112,  136 => 111,  131 => 110,  126 => 108,  120 => 107,  115 => 106,  113 => 105,  109 => 104,  105 => 102,  99 => 100,  96 => 99,  92 => 93,  88 => 92,  84 => 91,  80 => 90,  73 => 87,  68 => 81,  66 => 77,  65 => 76,  64 => 75,  63 => 71,  57 => 68,  55 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/comment.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/comment.html.twig");
    }
}
