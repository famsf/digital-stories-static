<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--image-slide.html.twig */
class __TwigTemplate_66d9e5b9f17ef4bb238bb0205af29c3c79801c989ea4840e039b0e6661ef5bcd extends Twig_Template
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
        $tags = array("set" => 39, "if" => 44);
        $filters = array("merge" => 45, "trim" => 65, "striptags" => 65, "join" => 84, "raw" => 86);
        $functions = array("file_url" => 66, "include" => 75, "active_theme_path" => 75);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('merge', 'trim', 'striptags', 'join', 'raw'),
                array('file_url', 'include', 'active_theme_path')
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
        $context["imageSlideParagraph"] = $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image_for_slide", array()), "entity", array());
        // line 40
        $context["image"] = $this->getAttribute($this->getAttribute((isset($context["imageSlideParagraph"]) ? $context["imageSlideParagraph"] : null), "field_image", array()), "entity", array());
        // line 41
        $context["photoCredits"] = $this->getAttribute($this->getAttribute((isset($context["imageSlideParagraph"]) ? $context["imageSlideParagraph"] : null), "field_photo_credits", array()), "entity", array());
        // line 42
        echo "<figure>
    ";
        // line 43
        $context["credits"] = array();
        // line 44
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_artist", array()), "value", array()))) {
            // line 45
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_artist", array()), "value", array())));
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_credits_date", array()), "value", array()))) {
            // line 48
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_credits_date", array()), "value", array())));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_medium", array()), "value", array()))) {
            // line 51
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_medium", array()), "value", array())));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_dimensions", array()), "value", array()))) {
            // line 54
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_dimensions", array()), "value", array())));
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_location", array()), "value", array()))) {
            // line 57
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_location", array()), "value", array())));
            // line 58
            echo "    ";
        }
        // line 59
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_copyright", array()), "value", array()))) {
            // line 60
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_copyright", array()), "value", array())));
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_general_credit", array()), "value", array()))) {
            // line 63
            echo "        ";
            $context["credits"] = twig_array_merge((isset($context["credits"]) ? $context["credits"] : null), array(0 => $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_general_credit", array()), "value", array())));
            // line 64
            echo "    ";
        }
        // line 65
        echo "    <div class=\"figure__wrapper ";
        if (((twig_test_empty((isset($context["credits"]) ? $context["credits"] : null)) && twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_image_title", array()), "value", array()))) && twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_flexible_wysiwyg_caption", array()), "value", array())))))) {
            echo " no-caption ";
        }
        echo "\">
        <img src=\"";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "fileuri", array()))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "alt", array()), "html", null, true));
        echo "\" />
    </div>
    ";
        // line 68
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_photo_pre_credit", array()), "value", array()))) {
            // line 69
            echo "      <div class=\"preCredit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_photo_pre_credit", array()), "value", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if ((( !twig_test_empty((isset($context["credits"]) ? $context["credits"] : null)) ||  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_image_title", array()), "value", array()))) ||  !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_flexible_wysiwyg_caption", array()), "value", array())))))) {
            // line 73
            echo "        <div class=\"figcaption__wrapper animated delay-1000\">
            <a class=\"figcaption-cta js-figcaption-cta\">
            <i class=\"icon--small \">";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caption-md.svg"))));
            echo "</i>
                <span>image credit</span>
            </a>
        </div>
        <div class=\"figure__caption-reveal js-figure__caption-reveal\">
            <figcaption>
                ";
            // line 81
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_image_title", array()), "value", array()))) {
                // line 82
                echo "                    <span class=\"title-of-art\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_image_title", array()), "value", array()), "html", null, true));
                echo " </span>
                ";
            }
            // line 84
            echo "                ";
            if ( !twig_test_empty((isset($context["credits"]) ? $context["credits"] : null))) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["credits"]) ? $context["credits"] : null), " | "), "html", null, true));
                echo " ";
            }
            echo "</span>
                ";
            // line 85
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_flexible_wysiwyg_caption", array()), "value", array()))))) {
                // line 86
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute((isset($context["photoCredits"]) ? $context["photoCredits"] : null), "field_flexible_wysiwyg_caption", array()), "value", array())));
                echo "
                ";
            }
            // line 88
            echo "            </figcaption>
        </div>
    ";
        }
        // line 91
        echo "</figure>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--image-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 91,  182 => 88,  176 => 86,  174 => 85,  165 => 84,  159 => 82,  157 => 81,  148 => 75,  144 => 73,  142 => 72,  139 => 71,  133 => 69,  131 => 68,  124 => 66,  117 => 65,  114 => 64,  111 => 63,  108 => 62,  105 => 61,  102 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  87 => 55,  84 => 54,  81 => 53,  78 => 52,  75 => 51,  72 => 50,  69 => 49,  66 => 48,  63 => 47,  60 => 46,  57 => 45,  54 => 44,  52 => 43,  49 => 42,  47 => 41,  45 => 40,  43 => 39,);
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
{% set imageSlideParagraph = paragraph.field_image_for_slide.entity %}
{% set image = imageSlideParagraph.field_image.entity %}
{% set photoCredits = imageSlideParagraph.field_photo_credits.entity %}
<figure>
    {% set credits = [] %}
    {% if photoCredits.field_artist.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_artist.value ]) %}
    {% endif %}
    {% if photoCredits.field_credits_date.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_credits_date.value ]) %}
    {% endif %}
    {% if photoCredits.field_medium.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_medium.value ]) %}
    {% endif %}
    {% if photoCredits.field_dimensions.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_dimensions.value ]) %}
    {% endif %}
    {% if photoCredits.field_location.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_location.value ]) %}
    {% endif %}
    {% if photoCredits.field_copyright.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_copyright.value ]) %}
    {% endif %}
    {% if photoCredits.field_general_credit.value is not empty %}
        {% set credits = credits|merge([photoCredits.field_general_credit.value ]) %}
    {% endif %}
    <div class=\"figure__wrapper {% if credits is empty and photoCredits.field_image_title.value is empty and photoCredits.field_flexible_wysiwyg_caption.value|striptags|trim is empty %} no-caption {% endif %}\">
        <img src=\"{{ file_url(image.fileuri)  }}\" alt=\"{{ image.alt }}\" />
    </div>
    {% if photoCredits.field_photo_pre_credit.value is not empty %}
      <div class=\"preCredit\">{{ photoCredits.field_photo_pre_credit.value }}</div>
    {% endif %}

    {% if credits is not empty or photoCredits.field_image_title.value is not empty or photoCredits.field_flexible_wysiwyg_caption.value|striptags|trim is not empty %}
        <div class=\"figcaption__wrapper animated delay-1000\">
            <a class=\"figcaption-cta js-figcaption-cta\">
            <i class=\"icon--small \">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caption-md.svg')  }}</i>
                <span>image credit</span>
            </a>
        </div>
        <div class=\"figure__caption-reveal js-figure__caption-reveal\">
            <figcaption>
                {% if photoCredits.field_image_title.value is not empty %}
                    <span class=\"title-of-art\"> {{ photoCredits.field_image_title.value }} </span>
                {% endif %}
                {% if  credits is not empty %} {{ credits|join(' | ') }} {% endif %}</span>
                {% if photoCredits.field_flexible_wysiwyg_caption.value|striptags|trim is not empty %}
                    {{ photoCredits.field_flexible_wysiwyg_caption.value|raw }}
                {% endif %}
            </figcaption>
        </div>
    {% endif %}
</figure>
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--image-slide.html.twig", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--image-slide.html.twig");
    }
}
