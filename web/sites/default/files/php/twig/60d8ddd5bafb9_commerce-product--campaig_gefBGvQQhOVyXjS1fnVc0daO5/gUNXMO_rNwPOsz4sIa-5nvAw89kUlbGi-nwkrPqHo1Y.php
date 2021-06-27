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

/* themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig */
class __TwigTemplate_69905dca5d27bb813df905cad193b4d30031fc1c72514499cc52a8675abfff68 extends \Twig\Template
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
        // line 22
        echo "<div class=\"campaign-block\">      
   <div class=\"campaign-block-inner\">
      <div class=\"image lightGallery\">
        ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_images", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
        ";
        // line 26
        if (($context["video_link"] ?? null)) {
            // line 27
            echo "          <a class=\"video-link popup-video\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null), 27, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-video-camera\"></i></a>
        ";
        }
        // line 29
        echo "        <div class=\"funded\">
          <div class=\"progress\">
            <div class=\"progress-bar\" data-progress-animation=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 31, $this->source), "html", null, true);
        echo "%\">
            </div>
          </div>
        </div>
        <a class=\"action-donate\" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 35, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Donate now"));
        echo "</a>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-raised clearfix\">
          <div class=\"raised\">
            <span class=\"title\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current"));
        echo "</span>
            <span class=\"value\">";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["raised"] ?? null), 41, $this->source), "html", null, true);
        echo "</span>
          </div> 
          <div class=\"funded\">
            <span>";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded_label"] ?? null), 44, $this->source), "html", null, true);
        echo "%</span>
          </div>
          <div class=\"goal\">
            <span class=\"title\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Target"));
        echo "</span>
            <span class=\"value\">";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_goal", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</span>
          </div> 
        </div>

        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 53, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 53, $this->source), "html", null, true);
        echo "</a> </h4> 
          <div class=\"summary\"> ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</div> 
        </div>   
        
        <div class=\"content-action\">
          <span class=\"days\">";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 58, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days to go"));
        echo " </span> - <span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded_label"] ?? null), 58, $this->source), "html", null, true);
        echo "% ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Funded");
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
        return array (  118 => 58,  111 => 54,  105 => 53,  97 => 48,  93 => 47,  87 => 44,  81 => 41,  77 => 40,  67 => 35,  60 => 31,  56 => 29,  50 => 27,  48 => 26,  44 => 25,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/commerce-node/commerce-product--campaign--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 25, "t" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
