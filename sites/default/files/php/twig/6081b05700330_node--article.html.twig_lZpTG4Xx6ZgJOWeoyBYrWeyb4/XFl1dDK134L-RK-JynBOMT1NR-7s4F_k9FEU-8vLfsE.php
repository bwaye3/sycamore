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

/* themes/gavias_kunco/templates/node/node--article.html.twig */
class __TwigTemplate_b8c0793e02e1b46826c19b20e33e1c85278fc4cf4a6f508b5569828aadb814f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 15, "trans" => 71];
        $filters = ["clean_class" => 5, "raw" => 19, "escape" => 21, "without" => 78];
        $functions = ["drupal_block" => 84];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'raw', 'escape', 'without'],
                ['drupal_block']
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 7 => "clearfix"];
        // line 13
        echo "
<!-- Start Display article for teaser page -->
";
        // line 15
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <div class=\"post-block\">
    <div class=\"post-image\">
      ";
            // line 18
            if (((($context["post_format"] ?? null) == "video") || ((($context["post_format"] ?? null) == "audio") && ($context["gva_iframe"] ?? null)))) {
                // line 19
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null)));
                echo "
      ";
            } elseif (((            // line 20
($context["post_format"] ?? null) == "gallery") && $this->getAttribute(($context["content"] ?? null), "field_post_gallery", []))) {
                // line 21
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_gallery", [])), "html", null, true);
                echo "
      ";
            } else {
                // line 23
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
      ";
            }
            // line 24
            echo " 
    </div>
    <div class=\"post-content text-left\">
      <div class=\"post-title\"> <a href=\"";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a> </div>            
        <div class=\"post-meta\">
          <span class=\"post-categories\">";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_category", [])), "html", null, true);
            echo "</span>
          <span class=\"post-created\">";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo " </span>
        </div>
       <div class=\"post-body\">
          ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "
       </div>
    </div>
  </div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 40
            echo "<!-- Start Display article for detail page -->

<article";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["post_format"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 46
            if (((($context["post_format"] ?? null) == "video") || ((($context["post_format"] ?? null) == "audio") && ($context["gva_iframe"] ?? null)))) {
                // line 47
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null)));
                echo "
      ";
            } elseif (((            // line 48
($context["post_format"] ?? null) == "gallery") && $this->getAttribute(($context["content"] ?? null), "field_post_gallery", []))) {
                // line 49
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_gallery", [])), "html", null, true);
                echo "
      ";
            } else {
                // line 51
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
      ";
            }
            // line 52
            echo "  
    </div>

    <div class=\"post-content\">
      ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
         <h1";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
      ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "         
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_category", [])), "html", null, true);
            echo "</span> /
        <span class=\"post-created\"> ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
            echo " </span> /
        <span class=\"post-comment\"> 
          <a href=\"";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "/#comments\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null)), "html", null, true);
            echo " Comments</a>
        </span>
      </div>
      
      ";
            // line 67
            if (($context["display_submitted"] ?? null)) {
                // line 68
                echo "        <div class=\"node__meta hidden\">
          ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
                echo "
          <span";
                // line 70
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 71
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 72
                echo "          </span>
          ";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 76
            echo "
      <div";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
        ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_image", "field_post_category", "field_post_format", "field_post_type", "field_post_embed", "field_post_gallery", "comment"), "html", null, true);
            echo "
        <br>
        ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_gallery", [])), "html", null, true);
            echo "
      </div>

      <div id=\"node-single-comment\" class=\"block-donate\">
        ";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->drupalBlock("leaveareply"), "html", null, true);
            echo "
      </div>

      <div id=\"node-single-comment\">
        ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
            echo "
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/node/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 88,  242 => 84,  235 => 80,  230 => 78,  226 => 77,  223 => 76,  217 => 73,  214 => 72,  212 => 71,  208 => 70,  204 => 69,  201 => 68,  199 => 67,  190 => 63,  185 => 61,  181 => 60,  176 => 58,  170 => 57,  166 => 56,  160 => 52,  154 => 51,  148 => 49,  146 => 48,  141 => 47,  139 => 46,  135 => 45,  129 => 42,  125 => 40,  115 => 33,  109 => 30,  105 => 29,  98 => 27,  93 => 24,  87 => 23,  81 => 21,  79 => 20,  74 => 19,  72 => 18,  66 => 15,  62 => 13,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/node/node--article.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/node/node--article.html.twig");
    }
}
