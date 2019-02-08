<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--photo-credits--section.html.twig */
class __TwigTemplate_093d121fb02b871fe460a8725074c7f28c3589fbc30aa0caafc4834eda55345f extends Twig_Template
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
        $tags = array("set" => 39, "if" => 40);
        $filters = array("merge" => 41, "trim" => 62, "striptags" => 62, "join" => 75, "raw" => 77);
        $functions = array("include" => 68, "active_theme_path" => 68);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('merge', 'trim', 'striptags', 'join', 'raw'),
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
        $context["credits"] = array();
        // line 40
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_artist", array()), "value", array()))) {
            // line 41
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_artist", array()), "value", array())));
        }
        // line 43
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_credits_date", array()), "value", array()))) {
            // line 44
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_credits_date", array()), "value", array())));
        }
        // line 46
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_medium", array()), "value", array()))) {
            // line 47
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_medium", array()), "value", array())));
        }
        // line 49
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_dimensions", array()), "value", array()))) {
            // line 50
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_dimensions", array()), "value", array())));
        }
        // line 52
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_location", array()), "value", array()))) {
            // line 53
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_location", array()), "value", array())));
        }
        // line 55
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_copyright", array()), "value", array()))) {
            // line 56
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_copyright", array()), "value", array())));
        }
        // line 58
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_general_credit", array()), "value", array()))) {
            // line 59
            echo "    ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_general_credit", array()), "value", array())));
        }
        // line 61
        echo "
";
        // line 62
        if ((( !twig_test_empty((isset($context["credits"]) ? $context["credits"] : null)) ||  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image_title", array()), "value", array()))) ||  !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_flexible_wysiwyg_caption", array()), "value", array())))))) {
            // line 63
            echo "    ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_photo_pre_credit", array()), "value", array()))) {
                // line 64
                echo "    <div class=\"preCredit\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_photo_pre_credit", array()), "value", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 66
            echo "    <div class=\"section-hero__figcaption animated delay-600\">
        <a class=\"figcaption-cta js-section-hero__figcaption-cta\">
            <i class=\"icon--small \">";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caption-md.svg"))));
            echo "</i>
            <span>image credit</span>
        </a>
    <div class=\"figcaption js-figcaption--hidden\">
        ";
            // line 72
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image_title", array()), "value", array()))) {
                // line 73
                echo "            <span class=\"title-of-art\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image_title", array()), "value", array()), "html", null, true));
                echo " </span>
        ";
            }
            // line 75
            echo "        ";
            if ( !twig_test_empty((isset($context["credits"]) ? $context["credits"] : null))) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["credits"]) ? $context["credits"] : null), " | "), "html", null, true));
                echo " ";
            }
            // line 76
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_flexible_wysiwyg_caption", array()), "value", array()))))) {
                // line 77
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_flexible_wysiwyg_caption", array()), "value", array())));
                echo "
        ";
            }
            // line 79
            echo "    </div>



    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--photo-credits--section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 79,  130 => 77,  127 => 76,  120 => 75,  114 => 73,  112 => 72,  105 => 68,  101 => 66,  95 => 64,  92 => 63,  90 => 62,  87 => 61,  83 => 59,  81 => 58,  77 => 56,  75 => 55,  71 => 53,  69 => 52,  65 => 50,  63 => 49,  59 => 47,  57 => 46,  53 => 44,  51 => 43,  47 => 41,  45 => 40,  43 => 39,);
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
{% set credits = [] %}
{% if paragraph.field_artist.value is not empty %}
    {% set credits = credits|merge([paragraph.field_artist.value ]) %}
{% endif %}
{% if paragraph.field_credits_date.value is not empty %}
    {% set credits = credits|merge([paragraph.field_credits_date.value ]) %}
{% endif %}
{% if paragraph.field_medium.value is not empty %}
    {% set credits = credits|merge([paragraph.field_medium.value ]) %}
{% endif %}
{% if paragraph.field_dimensions.value is not empty %}
    {% set credits = credits|merge([paragraph.field_dimensions.value ]) %}
{% endif %}
{% if paragraph.field_location.value is not empty %}
    {% set credits = credits|merge([paragraph.field_location.value ]) %}
{% endif %}
{% if paragraph.field_copyright.value is not empty %}
    {% set credits = credits|merge([paragraph.field_copyright.value ]) %}
{% endif %}
{% if paragraph.field_general_credit.value is not empty %}
    {% set credits = credits|merge([paragraph.field_general_credit.value ]) %}
{% endif %}

{% if credits is not empty or paragraph.field_image_title.value is not empty or paragraph.field_flexible_wysiwyg_caption.value|striptags|trim is not empty %}
    {% if paragraph.field_photo_pre_credit.value is not empty %}
    <div class=\"preCredit\">{{ paragraph.field_photo_pre_credit.value }}</div>
    {% endif %}
    <div class=\"section-hero__figcaption animated delay-600\">
        <a class=\"figcaption-cta js-section-hero__figcaption-cta\">
            <i class=\"icon--small \">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caption-md.svg')  }}</i>
            <span>image credit</span>
        </a>
    <div class=\"figcaption js-figcaption--hidden\">
        {% if paragraph.field_image_title.value is not empty %}
            <span class=\"title-of-art\"> {{ paragraph.field_image_title.value }} </span>
        {% endif %}
        {% if  credits is not empty %} {{ credits|join(' | ') }} {% endif %}
        {% if paragraph.field_flexible_wysiwyg_caption.value|striptags|trim is not empty %}
            {{ paragraph.field_flexible_wysiwyg_caption.value|raw }}
        {% endif %}
    </div>



    </div>
{% endif %}
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--photo-credits--section.html.twig", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--photo-credits--section.html.twig");
    }
}
