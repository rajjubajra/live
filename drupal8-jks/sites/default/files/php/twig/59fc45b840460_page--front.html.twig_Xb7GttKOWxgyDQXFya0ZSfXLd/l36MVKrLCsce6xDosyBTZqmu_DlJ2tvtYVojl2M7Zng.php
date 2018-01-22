<?php

/* themes/jks/templates/page/page--front.html.twig */
class __TwigTemplate_d8f6d1e1a7dfcf6bf953867ac5bd7faa9805bbb2d421cd0d6ed89d5ffa374764 extends Twig_Template
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
        $this->loadTemplate("themes/jks/templates/header.twig", "themes/jks/templates/page/page--front.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"container min-height\">  


    <!-- Carousel ================================================== -->
    <div class=\"row\">

        <section class=\"section-white\">


            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\" class=\"\"></li>

                </ol>

                <!-- Wrapper for slides -->
                ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "carousel", array()), "html", null, true));
        echo "


                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"fa fa-angle-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"fa fa-angle-right\"></span>
                </a>
            </div>


        </section>

    </div>

    <br />

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">    
            ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "jks_brief", array()), "html", null, true));
        echo "
        </div>    
    </div>


    <!-- Services front page ======================================= -->
    <div class=\"row\">

        ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services_frontpage", array()), "html", null, true));
        echo "

    </div>    


    <hr class=\"divider30px\">

    <div class=\"row\">
        <div class=\"col-md-6\">   
            ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "column_left", array()), "html", null, true));
        echo " 
        </div>
        <div class=\"col-md-6\">
            <div class=\"charity\">
                ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "column_right", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>

    <hr class=\"divider30px\">


    <div class=\"row\">
        ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image_row_at_buttom", array()), "html", null, true));
        echo "
    </div>    






    <hr class=\"divider30px\">




</div><!-- container min-height -->        





";
        // line 96
        $this->loadTemplate("themes/jks/templates/footer.twig", "themes/jks/templates/page/page--front.html.twig", 96)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 96,  137 => 77,  125 => 68,  118 => 64,  106 => 55,  95 => 47,  71 => 26,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% include 'themes/jks/templates/header.twig' %}


<div class=\"container min-height\">  


    <!-- Carousel ================================================== -->
    <div class=\"row\">

        <section class=\"section-white\">


            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\" class=\"\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\" class=\"\"></li>

                </ol>

                <!-- Wrapper for slides -->
                {{ page.carousel }}


                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"fa fa-angle-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"fa fa-angle-right\"></span>
                </a>
            </div>


        </section>

    </div>

    <br />

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">    
            {{ page.jks_brief }}
        </div>    
    </div>


    <!-- Services front page ======================================= -->
    <div class=\"row\">

        {{ page.services_frontpage }}

    </div>    


    <hr class=\"divider30px\">

    <div class=\"row\">
        <div class=\"col-md-6\">   
            {{ page.column_left }} 
        </div>
        <div class=\"col-md-6\">
            <div class=\"charity\">
                {{ page.column_right }}
            </div>
        </div>
    </div>

    <hr class=\"divider30px\">


    <div class=\"row\">
        {{ page.image_row_at_buttom }}
    </div>    






    <hr class=\"divider30px\">




</div><!-- container min-height -->        





{% include 'themes/jks/templates/footer.twig' %}";
    }
}
