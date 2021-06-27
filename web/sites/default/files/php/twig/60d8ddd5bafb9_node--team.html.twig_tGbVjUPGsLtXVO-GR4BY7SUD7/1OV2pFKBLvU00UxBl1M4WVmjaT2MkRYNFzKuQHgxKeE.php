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

/* themes/gavias_kunco/templates/node/node--team.html.twig */
class __TwigTemplate_4073fa2523d2cc156c32f720e39078dccabe5a16f2d5e46ea0a9c37bd17f1704 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 6 => "clearfix"];
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
<div";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo ">
  <div class=\"team-block\">
    <div class=\"team-image\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 19, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source));
            echo "</div>
      <div class=\"socials-team\">
        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22)) {
                // line 23
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a>
        ";
            }
            // line 24
            echo " 
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_linkedin", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25)) {
                // line 26
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_linkedin", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
        ";
            }
            // line 27
            echo " 
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28)) {
                // line 29
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-pinterest\"></i></a>
        ";
            }
            // line 30
            echo " 
        ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31)) {
                // line 32
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a>
        ";
            }
            // line 33
            echo " 
      </div>
    </div>
  </div>
</div>  

<!-- End Display article for teaser page -->
";
        } else {
            // line 41
            echo "<!-- Start Display article for detail page -->

<article";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), "addClass", [0 => "node-detail"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_name", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source));
            echo "</div>
      <div class=\"job\">";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_position", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_description", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_image", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Info"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_contact", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</div>
            <div class=\"socials\">
              ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62)) {
                // line 63
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_facebook", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a>
              ";
            }
            // line 64
            echo " 
              ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_linkedin", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65)) {
                // line 66
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_linkedin", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
              ";
            }
            // line 67
            echo " 
              ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68)) {
                // line 69
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_pinterest", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-pinterest\"></i></a>
              ";
            }
            // line 70
            echo " 
              ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71)) {
                // line 72
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_team_twitter", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a>
              ";
            }
            // line 73
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Education"));
            echo "</div>
            <div class=\"content-inner\">";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_education", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 85, $this->source), "field_team_name", "field_team_contact", "field_team_skills", "field_team_image", "field_team_contact", "field_team_quote", "field_team_facebook", "field_team_linkedin", "field_team_pinterest", "field_team_twitter", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_team_quote", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo " </div>

    ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 90)) {
                // line 91
                echo "      <div id=\"node-single-comment\">
        ";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 94
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 101
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 101,  256 => 94,  250 => 92,  247 => 91,  245 => 90,  240 => 88,  234 => 85,  230 => 84,  221 => 78,  217 => 77,  211 => 73,  205 => 72,  203 => 71,  200 => 70,  194 => 69,  192 => 68,  189 => 67,  183 => 66,  181 => 65,  178 => 64,  172 => 63,  170 => 62,  165 => 60,  161 => 59,  154 => 55,  147 => 51,  141 => 48,  137 => 47,  130 => 43,  126 => 41,  116 => 33,  110 => 32,  108 => 31,  105 => 30,  99 => 29,  97 => 28,  94 => 27,  88 => 26,  86 => 25,  83 => 24,  77 => 23,  75 => 22,  70 => 20,  64 => 19,  59 => 17,  54 => 15,  50 => 14,  46 => 12,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/node/node--team.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/node/node--team.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 14);
        static $filters = array("clean_class" => 4, "escape" => 15, "e" => 19, "t" => 59, "without" => 85);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'e', 't', 'without'],
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
