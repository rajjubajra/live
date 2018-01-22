<?php

/* themes/jks/templates/menu--main.html.twig */
class __TwigTemplate_a14c2b0ff7c83ef7f99d85b90e1030acf589244b25443a37abe718f593c84c81 extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "if" => 35, "for" => 47);
        $filters = array();
        $functions = array("link" => 51);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        // line 64
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    
  ";
            // line 33
            $context["menus"] = $this;
            // line 34
            echo "
  ";
            // line 35
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 36
                echo "      
    ";
                // line 37
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 38
                    echo "        
      <ul";
                    // line 39
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "nav navbar-nav"), "method"), "html", null, true));
                    echo ">
          
    ";
                } else {
                    // line 42
                    echo "        
      <ul class=\"dropdown-content\">
          
    ";
                }
                // line 46
                echo "    
    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "        
      <li";
                    // line 49
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "dropdown"), "method"), "html", null, true));
                    echo ">
          
        ";
                    // line 51
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        
        ";
                    // line 53
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 54
                        echo "            
          ";
                        // line 55
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
          
        ";
                    }
                    // line 58
                    echo "        
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/jks/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  134 => 58,  128 => 55,  125 => 54,  123 => 53,  118 => 51,  113 => 49,  110 => 48,  106 => 47,  103 => 46,  97 => 42,  91 => 39,  88 => 38,  86 => 37,  83 => 36,  81 => 35,  78 => 34,  76 => 33,  73 => 32,  59 => 31,  53 => 64,  48 => 29,  45 => 24,  43 => 23,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
    
  {% import _self as menus %}

  {% if items %}
      
    {% if menu_level == 0 %}
        
      <ul{{ attributes.addClass('nav navbar-nav') }}>
          
    {% else %}
        
      <ul class=\"dropdown-content\">
          
    {% endif %}
    
    {% for item in items %}
        
      <li{{ item.attributes.addClass('dropdown') }}>
          
        {{ link(item.title, item.url) }}
        
        {% if item.below %}
            
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          
        {% endif %}
        
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}


{#    
            <ul class=\"nav navbar-nav\">
                <li><a href=\"index.php?page=index\">Home</a></li>
                <li><a href=\"index.php?page=aboutus\">About us</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropbtn\" href=\"index.php?page=services\">Services</a>
                    <ul class=\"dropdown-content\">
                         <li><a href=\"index.php?page=airportcompliance\">Airport Compliance</a></li>
                         <li><a href=\"index.php?page=electricaltesting\">Electrical Testing</a></li>
                         <li><a href=\"index.php?page=installation\">Installation</a></li>
                         <li><a href=\"index.php?page=maintenance\">Maintenance</a></li>
                         <li><a href=\"index.php?page=ups\">UPS</a></li>
                         <li><a href=\"index.php?page=refurbishment\">Refurbishment</a></li>
                </ul>
               </li>
               <li class=\"dropdown\"><a class=\"dropbtn\" href=\"index.php?page=clients\">Clients</a>
                   <ul class=\"dropdown-content\"><li><a href=\"index.php?page=airports\">Airports</a></li>
                       <li><a href=\"index.php?page=office-business\">Office - Business</a></li><li><a href=\"index.php?page=restaurant-retails\">Restaurant - Retails</a></li></ul></li><li><a href=\"index.php?page=team\">Meet the Team</a></li><li><a href=\"index.php?page=accreditation\">Accrediation</a></li><li><a href=\"index.php?page=contact\">Contact</a></li>
            </ul>
        #}";
    }
}
