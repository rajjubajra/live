<?php

/* themes/jks/templates/footer.twig */
class __TwigTemplate_7bd0a3ef413ede42e8ad9388c7db0501237dd4bfaee50c411ab9e67fa83f2a60 extends Twig_Template
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
        $tags = array("if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"container\">
    <footer>

        ";
        // line 5
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_one", array())) {
            // line 6
            echo "            <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "marquee_heading", array()), "html", null, true));
            echo "</h2>
            <marquee class=\"marquee\" behavior=\"scroll\" direction=\"left\">
                ";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_one", array()), "html", null, true));
            echo "
            </marquee>


        ";
        }
        // line 13
        echo "


        ";
        // line 16
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_two", array())) {
            // line 17
            echo "            <div class=\"footer\">
                ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_two", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 20
        echo "   


    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  74 => 18,  71 => 17,  69 => 16,  64 => 13,  56 => 8,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{# footer Twig template #}
<div class=\"container\">
    <footer>

        {% if page.footer_one %}
            <h2>{{ page.marquee_heading }}</h2>
            <marquee class=\"marquee\" behavior=\"scroll\" direction=\"left\">
                {{ page.footer_one }}
            </marquee>


        {% endif %}



        {% if page.footer_two %}
            <div class=\"footer\">
                {{ page.footer_two }}
            </div>
        {% endif %}   


    </footer>
</div>";
    }
}
