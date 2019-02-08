<?php

/* themes/custom/famsf_digital_stories_theme/templates/field/field--paragraph--field-zoomable-area.html.twig */
class __TwigTemplate_4eff13cfe7f9f729a73f5dbc1cf0b1dcc396a1076eb6efe910a2ebed025a769e extends Twig_Template
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
        $tags = array("for" => 24);
        $filters = array("without" => 30);
        $functions = array("include" => 27, "active_theme_path" => 27);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('without'),
                array('include', 'active_theme_path')
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

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "    <div class=\"zoom-group js-zoom-group\">
        <div class=\"zoom-marker-outer js-zoom-marker-outer\" style=\"position: absolute; left: ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_left_position", array()), "value", array()), "html", null, true));
            echo "%; top: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_top_position", array()), "value", array()), "html", null, true));
            echo "%;\">
            <a class=\"zoom-marker-inner animated fadeInDownShort delay-";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#paragraph", array(), "array"), "field_marker_delay", array()), "value", array()), "html", null, true));
            echo " js-zoom-marker-inner\" href=\"#\" title=\"Click to zoom\"><span class=\"icon--small\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-plus-sm.svg"))));
            echo "</span> <div class=\"zoom-marker__text\">Click to zoom</div></a>
        </div>
        <div class=\"zoom-detail-view js-zoom-detail-view\" style=\"display:none;\">
            ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "content", array()), "field_left_position", "field_top_position", "field_marker_delay"), "html", null, true));
            echo "
        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/field/field--paragraph--field-zoomable-area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  69 => 27,  63 => 26,  60 => 25,  43 => 24,);
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
 * Custom override for field section
 *
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}
{% for item in items %}
    <div class=\"zoom-group js-zoom-group\">
        <div class=\"zoom-marker-outer js-zoom-marker-outer\" style=\"position: absolute; left: {{ item.content['#paragraph'].field_left_position.value }}%; top: {{ item.content['#paragraph'].field_top_position.value }}%;\">
            <a class=\"zoom-marker-inner animated fadeInDownShort delay-{{ item.content['#paragraph'].field_marker_delay.value }} js-zoom-marker-inner\" href=\"#\" title=\"Click to zoom\"><span class=\"icon--small\">{{  include(active_theme_path() ~ '/svg/famsf-plus-sm.svg') }}</span> <div class=\"zoom-marker__text\">Click to zoom</div></a>
        </div>
        <div class=\"zoom-detail-view js-zoom-detail-view\" style=\"display:none;\">
            {{ item.content|without('field_left_position', 'field_top_position', 'field_marker_delay') }}
        </div>
    </div>
{% endfor %}
", "themes/custom/famsf_digital_stories_theme/templates/field/field--paragraph--field-zoomable-area.html.twig", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/web/themes/custom/famsf_digital_stories_theme/templates/field/field--paragraph--field-zoomable-area.html.twig");
    }
}
