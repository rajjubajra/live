<?php

/* themes/jks/templates/page/page--node--4.html.twig */
class __TwigTemplate_ff8d833ddede093e5009efebecf41d0f4e2f3145ce86fafe1852033d81b3bbf5 extends Twig_Template
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
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--node--4.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"container min-height jksteam\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            <hr />
            ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "team", array()), "html", null, true));
        echo "


        </div>    

        <br />
        <hr />

        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            
            <div class=\"img-teamall\">
                <h2 class=\"jks-teamall\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "team_all_heading", array()), "html", null, true));
        echo "</h2>
                
                ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "team_all", array()), "html", null, true));
        echo "

            </div>     
        </div>

    </div>
</div>    


";
        // line 31
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--node--4.html.twig", 31)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--node--4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  76 => 22,  71 => 20,  57 => 9,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% include 'themes/jks/templates/header.twig' %}


<div class=\"container min-height jksteam\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {{ page.content }}
            <hr />
            {{ page.team }}


        </div>    

        <br />
        <hr />

        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            
            <div class=\"img-teamall\">
                <h2 class=\"jks-teamall\">{{ page.team_all_heading }}</h2>
                
                {{ page.team_all }}

            </div>     
        </div>

    </div>
</div>    


{% include 'themes/jks/templates/footer.twig' %}";
    }
}
