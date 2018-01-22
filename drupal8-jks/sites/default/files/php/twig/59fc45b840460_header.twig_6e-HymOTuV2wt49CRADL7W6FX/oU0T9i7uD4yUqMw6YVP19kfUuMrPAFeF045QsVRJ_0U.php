<?php

/* themes/jks/templates/header.twig */
class __TwigTemplate_0e2e0cb2ab827a40541de5d5b861fde9f6be1406390a3376e59efad2c04088a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "
<div class=\"container bg-white\">
    <div class=\"row header-height\">
            
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                <div class=\"row\">
                ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "company_logo_at_top", array()), "html", null, true));
        echo "
                </div>
            </div>
            <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                <div class=\"row wave-image\">
                   ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_middle_block", array()), "html", null, true));
        echo "
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                <div class=\"row\">
                    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address_top_right", array()), "html", null, true));
        echo "
                </div>
            </div>
        
    </div>
</div>            

<video id=\"vidbg\" autoplay=\"\" loop=\"\">
    <source src=\"themes/jks/video/jks_bg_720p_1mbps.mp4\" type=\"video/mp4\">
    <!-- <source src=\"video/jks_bg_720p.webm\" type=\"video/webm\"> -->
</video>

<div class=\"container\">  
    <div class=\"row\">
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"></a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
            </div><!--/.nav-collapse -->
        </nav>
    </div>
</div>    






";
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  67 => 18,  59 => 13,  51 => 8,  43 => 2,);
    }

    public function getSource()
    {
        return "{# header Twig template #}

<div class=\"container bg-white\">
    <div class=\"row header-height\">
            
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2\">
                <div class=\"row\">
                {{ page.company_logo_at_top }}
                </div>
            </div>
            <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                <div class=\"row wave-image\">
                   {{ page.header_middle_block }}
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3\">
                <div class=\"row\">
                    {{ page.address_top_right }}
                </div>
            </div>
        
    </div>
</div>            

<video id=\"vidbg\" autoplay=\"\" loop=\"\">
    <source src=\"themes/jks/video/jks_bg_720p_1mbps.mp4\" type=\"video/mp4\">
    <!-- <source src=\"video/jks_bg_720p.webm\" type=\"video/webm\"> -->
</video>

<div class=\"container\">  
    <div class=\"row\">
        <nav class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"></a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                {{ page.primary_menu }}
            </div><!--/.nav-collapse -->
        </nav>
    </div>
</div>    






";
    }
}
