<?php

/* {# inline_template_start #}{{ field_image }}
          <div class="carousel-caption">
            <h2>{{ field_slide_title }}</h2>
          </div> */
class __TwigTemplate_0a26e495b814a2eb90ffa28d39c631cf9e45eebab34f1dc1ab9089ed054f4d09 extends Twig_Template
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
          <div class=\"carousel-caption\">
            <h2>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_slide_title"]) ? $context["field_slide_title"] : null), "html", null, true));
        echo "</h2>
          </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_image }}
          <div class=\"carousel-caption\">
            <h2>{{ field_slide_title }}</h2>
          </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{{ field_image }}
          <div class=\"carousel-caption\">
            <h2>{{ field_slide_title }}</h2>
          </div>";
    }
}
