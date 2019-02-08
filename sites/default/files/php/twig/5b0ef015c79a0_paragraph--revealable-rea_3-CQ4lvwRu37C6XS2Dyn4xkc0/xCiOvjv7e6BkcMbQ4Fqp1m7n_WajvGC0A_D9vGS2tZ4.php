<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--revealable-read-more-section.html.twig */
class __TwigTemplate_2c06c31857b7dec08e42135d7db07cd5eb2469081ac2cc42d59d5d6b1aba1ef6 extends Twig_Template
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
        $tags = array("set" => 39);
        $filters = array("clean_class" => 41);
        $functions = array("include" => 53, "active_theme_path" => 53);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 39
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 41
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => ((        // line 42
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 44
        echo "<section class=\"card-section\">
    <div class=\"deep-dive js-deep-dive\">
        <div class=\"deep-dive__wrapper js-deep-dive__wrapper js-expander--is-closed\">
            ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_sections_in_card", array()), "html", null, true));
        echo "
        </div>
        <div class=\"container\">
            <button class=\"button-with-icon js-icon--read-more\" data-text-collapsed=\"";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_collapsed_button_text", array()), "value", array()), "html", null, true));
        echo "\" data-text-expanded=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_expanded_button_text", array()), "value", array()), "html", null, true));
        echo "\">
                <div class=\"button-with-icon__text\" >";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_collapsed_button_text", array()), "value", array()), "html", null, true));
        echo "</div>  
                <i class=\"js-icon-arrow--plus icon--xsmall\">
                    ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-down-sm.svg"))));
        echo "
                </i>
                <i class=\"js-icon-arrow--minus icon--xsmall\" style=\"display:none;\">
                    ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-up-sm.svg"))));
        echo "
                </i>
            </button>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--revealable-read-more-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 56,  69 => 53,  64 => 51,  58 => 50,  52 => 47,  47 => 44,  45 => 42,  44 => 41,  43 => 39,);
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
 * Custom theme implementation to display a card section paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   - id: The paragraph ID.
 *   - bundle: The type of the paragraph, for example, \"image\" or \"text\".
 *   - authorid: The user ID of the paragraph author.
 *   - createdtime: Formatted creation date. Preprocess functions can
 *     reformat it by calling format_date() with the desired parameters on
 *     \$variables['paragraph']->getCreatedTime().
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{% set classes = [
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
] %}
<section class=\"card-section\">
    <div class=\"deep-dive js-deep-dive\">
        <div class=\"deep-dive__wrapper js-deep-dive__wrapper js-expander--is-closed\">
            {{ content.field_sections_in_card }}
        </div>
        <div class=\"container\">
            <button class=\"button-with-icon js-icon--read-more\" data-text-collapsed=\"{{ paragraph.field_collapsed_button_text.value }}\" data-text-expanded=\"{{ paragraph.field_expanded_button_text.value }}\">
                <div class=\"button-with-icon__text\" >{{ paragraph.field_collapsed_button_text.value }}</div>  
                <i class=\"js-icon-arrow--plus icon--xsmall\">
                    {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-down-sm.svg')  }}
                </i>
                <i class=\"js-icon-arrow--minus icon--xsmall\" style=\"display:none;\">
                    {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-up-sm.svg')  }}
                </i>
            </button>
        </div>
    </div>
</section>
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--revealable-read-more-section.html.twig", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--revealable-read-more-section.html.twig");
    }
}
