<?php

/* modules/contrib/imagefieldzoom/templates/imagefield-zoom.html.twig */
class __TwigTemplate_7fc1d03f60b62b3cea22427946dbcb15f19866cfad283cc7e65f512d3410f116 extends Twig_Template
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
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 11
        echo "

<div class=\"image-zoom-container\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["images"]) ? $context["images"] : null), "html", null, true));
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/imagefieldzoom/templates/imagefield-zoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file imagefield-zoom.html.twig
 * Default theme implementation to present images for the imagefield_zoom
 *
 * Available variables:
 * - images: Formatted images based on the field formatter options that were set.
 *
 */
#}


<div class=\"image-zoom-container\">{{ images }}</div>

", "modules/contrib/imagefieldzoom/templates/imagefield-zoom.html.twig", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/web/modules/contrib/imagefieldzoom/templates/imagefield-zoom.html.twig");
    }
}
