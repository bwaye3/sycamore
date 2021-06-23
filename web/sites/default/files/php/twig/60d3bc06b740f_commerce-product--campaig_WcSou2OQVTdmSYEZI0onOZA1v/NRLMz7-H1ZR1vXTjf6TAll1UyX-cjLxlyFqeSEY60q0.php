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

/* themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig */
class __TwigTemplate_bef3eae5f4c4f534d2cd21bed925ebee85175d5625c4ec799b80d3395e8d654e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 26];
        $filters = ["escape" => 25, "t" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 22
        echo "<div class=\"campaign-block\">      
   <div class=\"campaign-block-inner\">
      <div class=\"image lightGallery\">
        ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_campaign_images", [])), "html", null, true);
        echo "
        ";
        // line 26
        if (($context["video_link"] ?? null)) {
            // line 27
            echo "          <a class=\"video-link popup-video\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-video-camera\"></i></a>
        ";
        }
        // line 29
        echo "        <div class=\"funded\">
          <div class=\"progress\">
            <div class=\"progress-bar\" data-progress-animation=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null)), "html", null, true);
        echo "%\">
            </div>
          </div>
        </div>
        <a class=\"action-donate\" href=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Donate now"));
        echo "</a>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-raised clearfix\">
          <div class=\"raised\">
            <span class=\"title\">";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current"));
        echo "</span>
            <span class=\"value\">";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["raised"] ?? null)), "html", null, true);
        echo "</span>
          </div> 
          <div class=\"funded\">
            <span>";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded_label"] ?? null)), "html", null, true);
        echo "%</span>
          </div>
          <div class=\"goal\">
            <span class=\"title\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Target"));
        echo "</span>
            <span class=\"value\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_campaign_goal", [])), "html", null, true);
        echo "</span>
          </div> 
        </div>

        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a> </h4> 
          <div class=\"summary\"> ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "</div> 
        </div>   
        
        <div class=\"content-action\">
          <span class=\"days\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Days to go"));
        echo " </span> - <span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded_label"] ?? null)), "html", null, true);
        echo "% ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Funded");
        echo "</span>
        </div> 
      </div>
   </div>
</div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 58,  127 => 54,  121 => 53,  113 => 48,  109 => 47,  103 => 44,  97 => 41,  93 => 40,  83 => 35,  76 => 31,  72 => 29,  66 => 27,  64 => 26,  60 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig");
    }
}
