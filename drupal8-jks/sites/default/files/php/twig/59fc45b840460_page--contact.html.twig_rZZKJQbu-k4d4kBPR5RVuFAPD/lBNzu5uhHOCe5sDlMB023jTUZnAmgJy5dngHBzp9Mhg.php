<?php

/* themes/jks/templates/page/page--contact.html.twig */
class __TwigTemplate_5ad2f2dcd1d55f966f1fda828b652a7e8125ebac53a39e2f805052e236c7156c extends Twig_Template
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
        $tags = array("include" => 1, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--contact.html.twig", 1)->display($context);
        // line 2
        echo "





<div class=\"container min-height\">

    <h1>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_page_heading", array()), "html", null, true));
        echo "</h1>
    <hr class=\"divider30px\">

    <div class=\"row\">

        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"address-block\">

                <div class=\"well\">
                    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_address_block_1", array()), "html", null, true));
        echo "
                </div>


                ";
        // line 23
        if ((isset($context["contact_address_block_2"]) ? $context["contact_address_block_2"] : null)) {
            // line 24
            echo "                    <div class=\"well\">
                        ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_address_block_2", array()), "html", null, true));
            echo "    
                    </div>
                ";
        }
        // line 28
        echo "


                <div class=\"well\">
                    ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_google_map", array()), "html", null, true));
        echo "
                </div> 

            </div>
        </div>     


        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"form-block\"> 

                <div class=\"well\">
                ";
        // line 44
        echo "                    
                 <strong>   ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</strong><br />
                    
                    ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo " 
                   ";
        // line 49
        echo "                </div>
            </div>    
        </div>
    </div>

</div>    






";
        // line 61
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--contact.html.twig", 61)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  117 => 49,  113 => 47,  108 => 45,  105 => 44,  91 => 32,  85 => 28,  79 => 25,  76 => 24,  74 => 23,  67 => 19,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% include 'themes/jks/templates/header.twig' %}






<div class=\"container min-height\">

    <h1>{{ page.contact_page_heading }}</h1>
    <hr class=\"divider30px\">

    <div class=\"row\">

        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"address-block\">

                <div class=\"well\">
                    {{ page.contact_address_block_1 }}
                </div>


                {% if contact_address_block_2 %}
                    <div class=\"well\">
                        {{ page.contact_address_block_2 }}    
                    </div>
                {% endif %}



                <div class=\"well\">
                    {{ page.contact_google_map }}
                </div> 

            </div>
        </div>     


        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"form-block\"> 

                <div class=\"well\">
                {#    <h1>{{ page.contact_form_title }}</h1>  #}
                    
                 <strong>   {{ page.highlighted }}</strong><br />
                    
                    {{ page.content }} 
                   {#{{ page.contact_enquiry_form }}#}
                </div>
            </div>    
        </div>
    </div>

</div>    






{% include 'themes/jks/templates/footer.twig' %}
";
    }
}
