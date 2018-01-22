<?php

/* {# inline_template_start #}<div class="row accrediation">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
{{ field_image }}
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">
{{ body }}
</div>
</div> */
class __TwigTemplate_c868dd69bd7202cc575950919cfa1a77fcbcd78a6cca443cb846df8d03749d47 extends Twig_Template
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

        // line 1
        echo "<div class=\"row accrediation\">
<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\">
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
</div>
<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-6\">
";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row accrediation\">
<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\">
{{ field_image }}
</div>
<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-6\">
{{ body }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 3,  50 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"row accrediation\">
<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\">
{{ field_image }}
</div>
<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-6\">
{{ body }}
</div>
</div>";
    }
}
