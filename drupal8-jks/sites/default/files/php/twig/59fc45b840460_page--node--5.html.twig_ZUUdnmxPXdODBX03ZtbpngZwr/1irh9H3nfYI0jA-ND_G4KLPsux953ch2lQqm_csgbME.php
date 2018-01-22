<?php

/* themes/jks/templates/page/page--node--5.html.twig */
class __TwigTemplate_8e5e9f3dda38976661af8f03c9aa056ce4884d994017e5cd08adccb128b4b747 extends Twig_Template
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
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--node--5.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"container min-height\">
    

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accreditation_heading", array()), "html", null, true));
        echo "</h1>
            <hr>
                ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accreditation_content", array()), "html", null, true));
        echo "
        </div>
    </div>
    <br>
    <hr>
    
<div class=\"row accr-block-adjust\">
    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accrediation", array()), "html", null, true));
        echo "
</div>    
    
</div>



";
        // line 25
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--node--5.html.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--node--5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  69 => 18,  59 => 11,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% include 'themes/jks/templates/header.twig' %}


<div class=\"container min-height\">
    

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>{{ page.accreditation_heading }}</h1>
            <hr>
                {{ page.accreditation_content }}
        </div>
    </div>
    <br>
    <hr>
    
<div class=\"row accr-block-adjust\">
    {{ page.accrediation }}
</div>    
    
</div>



{% include 'themes/jks/templates/footer.twig' %}
";
    }
}
