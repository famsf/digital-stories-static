<?php

/* core/themes/classy/templates/form/textarea.html.twig */
class __TwigTemplate_41a5e271165085f618f4e4dad5b5c32d4d039d5051a3a9a3dd1d0d963b055077 extends Twig_Template
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
        $tags = array("set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 17
        $context["classes"] = array(0 => "form-textarea", 1 => ((        // line 19
(isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 2 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 23
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true));
        echo ">
  <textarea";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "</textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  47 => 23,  45 => 20,  44 => 19,  43 => 17,);
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
 * @file
 * Theme override for a 'textarea' #type form element.
 *
 * Available variables
 * - wrapper_attributes: A list of HTML attributes for the wrapper element.
 * - attributes: A list of HTML attributes for the <textarea> element.
 * - resizable: An indicator for whether the textarea is resizable.
 * - required: An indicator for whether the textarea is required.
 * - value: The textarea content.
 *
 * @see template_preprocess_textarea()
 */
#}
{%
  set classes = [
    'form-textarea',
    resizable ? 'resize-' ~ resizable,
    required ? 'required',
  ]
%}
<div{{ wrapper_attributes.addClass('form-textarea-wrapper') }}>
  <textarea{{ attributes.addClass(classes) }}>{{ value }}</textarea>
</div>
", "core/themes/classy/templates/form/textarea.html.twig", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/web/core/themes/classy/templates/form/textarea.html.twig");
    }
}
