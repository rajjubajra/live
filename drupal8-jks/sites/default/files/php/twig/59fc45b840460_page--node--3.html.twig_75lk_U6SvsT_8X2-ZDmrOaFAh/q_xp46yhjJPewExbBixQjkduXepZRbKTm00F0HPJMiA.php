<?php

/* themes/jks/templates/page/page--node--3.html.twig */
class __TwigTemplate_6109e32c575e26144164fffd7d138b0876a9b85fe248711b1da1e979a280121f extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 1
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--node--3.html.twig", 1)->display($context);
        // line 2
        echo "



<div class=\"container min-height\">

    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

            <hr>
            
           
            <div class=\"row\">
                
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "client_block_1", array()), "html", null, true));
        echo "
                </div>
            </div>
            <br />

            <div class=\"row\">

                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "client_block_2", array()), "html", null, true));
        echo "
                </div>


            </div>
            
                

            <div class=\"row\"> 
                ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "client_logo", array()), "html", null, true));
        echo "
            </div>

        </div>
    </div>   
                
<hr class=\"featurette-divider\">

</div>    




";
        // line 48
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--node--3.html.twig", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--node--3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  89 => 35,  77 => 26,  66 => 18,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% include 'themes/jks/templates/header.twig' %}




<div class=\"container min-height\">

    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {{ page.content }}

            <hr>
            
           
            <div class=\"row\">
                
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {{ page.client_block_1 }}
                </div>
            </div>
            <br />

            <div class=\"row\">

                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {{ page.client_block_2 }}
                </div>


            </div>
            
                

            <div class=\"row\"> 
                {{ page.client_logo }}
            </div>

        </div>
    </div>   
                
<hr class=\"featurette-divider\">

</div>    




{% include 'themes/jks/templates/footer.twig' %}";
    }
}
