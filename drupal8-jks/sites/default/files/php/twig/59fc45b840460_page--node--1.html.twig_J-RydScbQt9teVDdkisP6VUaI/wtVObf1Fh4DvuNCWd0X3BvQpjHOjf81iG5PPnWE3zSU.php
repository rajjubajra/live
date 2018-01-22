<?php

/* themes/jks/templates/page/page--node--1.html.twig */
class __TwigTemplate_19ff21ef652fb87155442ff70b761994cda4612d73d9abe48bc609316c12e964 extends Twig_Template
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
        $tags = array("include" => 2);
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
        echo "
";
        // line 2
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--node--1.html.twig", 2)->display($context);
        // line 3
        echo "


<div class=\"container min-height\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

            <hr>
            <div class=\"row\">
                
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-x\">
                    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "aboutus_block_1", array()), "html", null, true));
        echo "
                </div>
            </div>
            <br />


            <div class=\"row\">

                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-12 pull-right\">
                    ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "aboutus_block_image", array()), "html", null, true));
        echo "
                </div>

                <div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-x\">
                    ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "aboutus_block_2", array()), "html", null, true));
        echo "
                </div>


            </div>

        </div>
    </div>

</div>


";
        // line 40
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--node--1.html.twig", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--node--1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  84 => 28,  77 => 24,  65 => 15,  56 => 9,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "
{% include 'themes/jks/templates/header.twig' %}



<div class=\"container min-height\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {{ page.content }}

            <hr>
            <div class=\"row\">
                
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-x\">
                    {{ page.aboutus_block_1 }}
                </div>
            </div>
            <br />


            <div class=\"row\">

                <div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-12 pull-right\">
                    {{ page.aboutus_block_image }}
                </div>

                <div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-x\">
                    {{ page.aboutus_block_2 }}
                </div>


            </div>

        </div>
    </div>

</div>


{% include'themes/jks/templates/footer.twig' %}";
    }
}
