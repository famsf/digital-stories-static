<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--footer-feature.html.twig */
class __TwigTemplate_14eb1a2f4fe7206be5c96f61d57ccd49fe84bb309e8d1a441791abc22a7c0352 extends Twig_Template
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
        $tags = array("if" => 44);
        $filters = array();
        $functions = array("file_url" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('file_url')
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
        echo "<article class=\"footer-section\">
    <a href=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_footer_feature_main_link", array()), "uri", array()), "html", null, true));
        echo "\">
        <img data-src=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_footer_feature_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_footer_feature_image", array()), "alt", array()), "html", null, true));
        echo "\" />
    </a>
    <h3 class=\"footer-section__title\">";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_footer_feature_main_link", array()), "html", null, true));
        echo "</h3>
    ";
        // line 44
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_footer_feature_blurb", array()))) {
            // line 45
            echo "    <div class=\"footer-section__text\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_footer_feature_blurb", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 47
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_extended_blurb", array()))) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_extended_blurb", array()), "html", null, true));
            echo "
    ";
        }
        // line 50
        echo "</article>
";
        // line 51
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_related_events_link", array()), "uri", array()))) {
            // line 52
            echo "<article class=\"footer-section\">
    <h3 class=\"footer-section__title\">";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_related_events_link", array()), "html", null, true));
            echo "</h3>
</article>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--footer-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 53,  83 => 52,  81 => 51,  78 => 50,  72 => 48,  69 => 47,  63 => 45,  61 => 44,  57 => 43,  50 => 41,  46 => 40,  43 => 39,);
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
<article class=\"footer-section\">
    <a href=\"{{ paragraph.field_footer_feature_main_link.uri }}\">
        <img data-src=\"{{ file_url(paragraph.field_footer_feature_image.entity.fileuri) }}\" alt=\"{{ paragraph.field_footer_feature_image.alt }}\" />
    </a>
    <h3 class=\"footer-section__title\">{{ content.field_footer_feature_main_link }}</h3>
    {% if content.field_footer_feature_blurb is not empty %}
    <div class=\"footer-section__text\">{{ content.field_footer_feature_blurb }}</div>
    {% endif %}
    {% if content.field_extended_blurb is not empty %}
    {{ content.field_extended_blurb }}
    {% endif %}
</article>
{% if paragraph.field_related_events_link.uri is not empty %}
<article class=\"footer-section\">
    <h3 class=\"footer-section__title\">{{ content.field_related_events_link }}</h3>
</article>
{% endif %}
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--footer-feature.html.twig", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--footer-feature.html.twig");
    }
}
