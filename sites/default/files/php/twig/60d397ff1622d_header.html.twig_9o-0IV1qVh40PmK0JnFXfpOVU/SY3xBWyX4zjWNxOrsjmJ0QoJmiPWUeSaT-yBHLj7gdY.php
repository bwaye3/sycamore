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

/* themes/gavias_kunco/templates/page/header.html.twig */
class __TwigTemplate_42842258f3f395c6f2e104d5d3d6cdef1a4cea1602dbab02a10cbe09f8ff212c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 20];
        $filters = ["escape" => 9, "t" => 72];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        // line 1
        echo "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-11\">
              <div class=\"topbar-content\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "</div> 
            </div>
            <div class=\"col-lg-1\">
              <div class=\"language-box\">";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language", [])), "html", null, true);
            echo "</div>
            </div> 
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 22
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        if ( !twig_test_empty(($context["link_donation"] ?? null))) {
            echo " has-link-donate";
        }
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 32
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                  ";
        }
        // line 34
        echo "                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"gv-icon-8\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 43
            echo "                              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                            ";
        }
        // line 45
        echo "                          </div>

                          ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "quick_menu", [])) {
            // line 48
            echo "                            <div class=\"quick-menu\">
                              <div class=\"icon\"><a><span class=\"gv-icon-52\"></span></a></div>
                              <div class=\"content-inner\">
                                ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "quick_menu", [])), "html", null, true);
            echo "
                              </div>  
                            </div>
                          ";
        }
        // line 55
        echo "
                          ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 57
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                            </div>
                          ";
        }
        // line 61
        echo "                         
                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>

                        ";
        // line 70
        if ( !twig_test_empty(($context["link_donation"] ?? null))) {
            // line 71
            echo "                          <div class=\"header-action\">
                            <a href=\"";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_donation"] ?? null)), "html", null, true);
            echo "\" class=\"btn-theme\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Donate Now"));
            echo "</a>
                          </div>
                        ";
        }
        // line 75
        echo "
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 75,  187 => 72,  184 => 71,  182 => 70,  171 => 61,  165 => 58,  162 => 57,  160 => 56,  157 => 55,  150 => 51,  145 => 48,  143 => 47,  139 => 45,  133 => 43,  131 => 42,  121 => 34,  115 => 32,  113 => 31,  101 => 25,  95 => 23,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  74 => 12,  68 => 9,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/header.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/page/header.html.twig");
    }
}
