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

/* themes/gavias_kunco/templates/page/footer.html.twig */
class __TwigTemplate_160f514e4e3e055d001018d714fe08d58d37fe408166ca08db06c336b7c8fc91 extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 4)) {
            // line 5
            echo "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 17
        echo "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 21)) {
            // line 22
            echo "                <div class=\"footer-first col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 22, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 22, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 26
        echo "
              ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 27)) {
            // line 28
            echo "               <div class=\"footer-second col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 28, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 28, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 32
        echo "
              ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 33)) {
            // line 34
            echo "                <div class=\"footer-third col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 34, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 34, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 38
        echo "
              ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 39)) {
            // line 40
            echo "                 <div class=\"footer-four col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 40, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 40, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 44
        echo "           </div>   
        </div>
    </div>  
  </div>   

  ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 49)) {
            // line 50
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 58
        echo " 
</footer>

";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, true, 61)) {
            // line 62
            echo "  <div class=\"quick-cart\">
    <div class=\"title\"><a><span class=\"icon gv-icon-912\"></span>";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cart"));
            echo "</a></div>
    <div class=\"content-inner\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 64,  170 => 63,  167 => 62,  165 => 61,  160 => 58,  152 => 53,  147 => 50,  145 => 49,  138 => 44,  132 => 41,  125 => 40,  123 => 39,  120 => 38,  114 => 35,  107 => 34,  105 => 33,  102 => 32,  96 => 29,  89 => 28,  87 => 27,  84 => 26,  78 => 23,  71 => 22,  69 => 21,  63 => 17,  53 => 10,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/footer.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/themes/gavias_kunco/templates/page/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 10, "t" => 63);
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
