<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--card-section.html.twig */
class __TwigTemplate_79c75711ab3d77896b7b8ec3798f3539436d18194ad1a646f2f5cc330010fa48 extends Twig_Template
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
        $tags = array("set" => 39, "if" => 65);
        $filters = array("striptags" => 42, "render" => 42, "clean_class" => 44, "clean_id" => 47, "trim" => 47, "join" => 74);
        $functions = array("file_url" => 94, "include" => 119, "active_theme_path" => 119, "url" => 124);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('striptags', 'render', 'clean_class', 'clean_id', 'trim', 'join'),
                array('file_url', 'include', 'active_theme_path', 'url')
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
        $context["boldTitle"] = (($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_style", array()), "value", array()) == "has-backdrop") || ($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_style", array()), "value", array()) == "has-bold-outlined"));
        // line 40
        $context["classes"] = array(0 => "js-section", 1 => (((strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 42
(isset($context["content"]) ? $context["content"] : null), "field_scrollable", array()))) == 1)) ? ("pp-scrollable") : ("")), 2 => "paragraph", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 4 => ((        // line 45
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 47
        $context["containerId"] = \Drupal\Component\Utility\Html::getId(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_card_section_title", array()), "value", array())));
        // line 48
        $context["wrapperClasses"] = array(0 => "section-hero__wrapper", 1 => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 50
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_background_image", array()), "entity", array()), "fileuri", array())) ? ("") : ("pattern")));
        // line 52
        $context["sectionTitleWrapperClasses"] = array(0 => ((        // line 53
(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) ? ("section-hero__title--bold animated") : ("section-hero__title")), 1 => $this->getAttribute($this->getAttribute(        // line 54
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_position", array()), "value", array()), 2 => $this->getAttribute($this->getAttribute(        // line 55
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_style", array()), "value", array()), 3 => ((($this->getAttribute($this->getAttribute(        // line 56
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_style", array()), "value", array()) == "has-backdrop")) ? ("delay-1250") : ("")));
        // line 58
        $context["sectionTitleClasses"] = array(0 => "animated", 1 => ((        // line 60
(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) ? ("delay-1250") : ("delay-1500")), 2 => "js-section-hero--get_height");
        // line 63
        echo "
<section";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["containerId"]) ? $context["containerId"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_display_hero_section", array()), "value", array()) == 1)) {
            // line 66
            echo "
        ";
            // line 67
            if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video_source_paragraph", array())))) {
                // line 68
                echo "        <div class=\"section-hero\">
            <div class=\"section-hero__video-wrapper ";
                // line 69
                if (twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_photo_credits", array())))) {
                    // line 70
                    echo "                no-caption
                ";
                }
                // line 71
                echo "\">
                ";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video_source_paragraph", array()), "html", null, true));
                echo "
                <div class=\"section-hero__wrapper has-video\">
                    <div class=\"";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleWrapperClasses"]) ? $context["sectionTitleWrapperClasses"] : null), " "), "html", null, true));
                echo "\">
                        ";
                // line 75
                if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
                    // line 76
                    echo "                        <div class=\"delay-2500 animated animated-border--top\"></div>
                        ";
                }
                // line 78
                echo "                        <h1 class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleClasses"]) ? $context["sectionTitleClasses"] : null), " "), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_card_section_title", array()), "value", array()), "html", null, true));
                echo "</h1>
                        ";
                // line 79
                if (($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_section_title_style", array()), "value", array()) != "has-dotted-border")) {
                    // line 80
                    echo "                        <div class=\"section-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                        <div class=\"section-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                        ";
                }
                // line 83
                echo "                        ";
                if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
                    // line 84
                    echo "                            <div class=\"delay-2500 animated animated-border--bottom\"></div>
                        ";
                }
                // line 86
                echo "                    </div>
                </div>
            </div>
            ";
                // line 89
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_photo_credits", array()), "html", null, true));
                echo "
        </div>

        ";
            } else {
                // line 93
                echo "        <div class=\"section-hero\">
            <div class=\"";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["wrapperClasses"]) ? $context["wrapperClasses"] : null), " "), "html", null, true));
                echo "\" ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_background_image", array()), "entity", array()), "fileuri", array()))) {
                    echo "data-bg=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_background_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
                    echo "\" style=\"background-position-y: ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_background_image_position", array()), "value", array()), "html", null, true));
                    echo ";\"";
                }
                echo ">
                <div class=\"";
                // line 95
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleWrapperClasses"]) ? $context["sectionTitleWrapperClasses"] : null), " "), "html", null, true));
                echo "\">
                    ";
                // line 96
                if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
                    // line 97
                    echo "                    <div class=\"delay-2500 animated animated-border--top\"></div>
                    ";
                }
                // line 99
                echo "                    <h1 class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleClasses"]) ? $context["sectionTitleClasses"] : null), " "), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_card_section_title", array()), "value", array()), "html", null, true));
                echo "</h1>
                    ";
                // line 100
                if ( !(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
                    // line 101
                    echo "                    <div class=\"section-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                    <div class=\"section-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                    ";
                }
                // line 104
                echo "                    ";
                if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
                    // line 105
                    echo "                        <div class=\"delay-2500 animated animated-border--bottom\"></div>
                    ";
                }
                // line 107
                echo "                </div>
            </div>
            ";
                // line 109
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_photo_credits", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 112
            echo "    ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_sections_in_card", array()), "html", null, true));
        echo "

    ";
        // line 116
        if (($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_display_share_widget", array()), "value", array()) == 1)) {
            // line 117
            echo "        <div class=\"js-share\">
            <button class=\"share-button js-share-button button-with-icon animated delay-500\">
                <i class=\"icon--small\">";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-share-sm.svg"))));
            echo "
                </i>
                <div>share</div>
            </button>
            <div class=\"share-expander js-share-expander js-share-expander--is-closed\">
                <div class=\"addthis_inline_share_toolbox\" data-url=\"";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "#";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["containerId"]) ? $context["containerId"] : null), "html", null, true));
            echo "\"></div>
            </div>
        </div>
    ";
        }
        // line 128
        echo "    <button class=\"js-next-page next-page animated delay-100\">
        <div class=\"icon--xsmall\">";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-down-sm.svg"))));
        echo "</div>
        next page
    </button>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--card-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 129,  228 => 128,  219 => 124,  211 => 119,  207 => 117,  205 => 116,  200 => 114,  197 => 113,  194 => 112,  188 => 109,  184 => 107,  180 => 105,  177 => 104,  172 => 101,  170 => 100,  163 => 99,  159 => 97,  157 => 96,  153 => 95,  141 => 94,  138 => 93,  131 => 89,  126 => 86,  122 => 84,  119 => 83,  114 => 80,  112 => 79,  105 => 78,  101 => 76,  99 => 75,  95 => 74,  90 => 72,  87 => 71,  83 => 70,  81 => 69,  78 => 68,  76 => 67,  73 => 66,  71 => 65,  67 => 64,  64 => 63,  62 => 60,  61 => 58,  59 => 56,  58 => 55,  57 => 54,  56 => 53,  55 => 52,  53 => 50,  52 => 48,  50 => 47,  48 => 45,  47 => 44,  46 => 42,  45 => 40,  43 => 39,);
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
{% set boldTitle = (paragraph.field_section_title_style.value == 'has-backdrop' or paragraph.field_section_title_style.value == 'has-bold-outlined') %}
{% set classes = [
'js-section',
content.field_scrollable|render|striptags==1 ? 'pp-scrollable',
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
] %}
{% set containerId = paragraph.field_card_section_title.value|trim|clean_id %}
{% set wrapperClasses = [
'section-hero__wrapper',
paragraph.field_background_image.entity.fileuri?'':'pattern',
] %}
{% set sectionTitleWrapperClasses = [
boldTitle?'section-hero__title--bold animated':'section-hero__title',
paragraph.field_section_title_position.value,
paragraph.field_section_title_style.value,
paragraph.field_section_title_style.value == 'has-backdrop'?'delay-1250':'',
] %}
{% set sectionTitleClasses = [
'animated',
boldTitle?'delay-1250':'delay-1500',
'js-section-hero--get_height'
] %}

<section{{ attributes.addClass(classes).setAttribute('id', containerId) }}>
    {% if paragraph.field_display_hero_section.value == 1 %}

        {% if content.field_video_source_paragraph|render is not empty %}
        <div class=\"section-hero\">
            <div class=\"section-hero__video-wrapper {% if content.field_photo_credits|render is empty %}
                no-caption
                {% endif %}\">
                {{ content.field_video_source_paragraph }}
                <div class=\"section-hero__wrapper has-video\">
                    <div class=\"{{ sectionTitleWrapperClasses|join(' ') }}\">
                        {% if boldTitle %}
                        <div class=\"delay-2500 animated animated-border--top\"></div>
                        {% endif %}
                        <h1 class=\"{{ sectionTitleClasses|join(' ') }}\">{{ paragraph.field_card_section_title.value }}</h1>
                        {% if paragraph.field_section_title_style.value != 'has-dotted-border' %}
                        <div class=\"section-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                        <div class=\"section-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                        {% endif %}
                        {% if boldTitle %}
                            <div class=\"delay-2500 animated animated-border--bottom\"></div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {{ content.field_photo_credits }}
        </div>

        {% else %}
        <div class=\"section-hero\">
            <div class=\"{{ wrapperClasses|join(' ') }}\" {% if paragraph.field_background_image.entity.fileuri is not empty %}data-bg=\"{{ file_url(paragraph.field_background_image.entity.fileuri) }}\" style=\"background-position-y: {{ paragraph.field_background_image_position.value }};\"{% endif %}>
                <div class=\"{{ sectionTitleWrapperClasses|join(' ') }}\">
                    {% if boldTitle %}
                    <div class=\"delay-2500 animated animated-border--top\"></div>
                    {% endif %}
                    <h1 class=\"{{ sectionTitleClasses|join(' ') }}\">{{ paragraph.field_card_section_title.value }}</h1>
                    {% if not boldTitle %}
                    <div class=\"section-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                    <div class=\"section-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                    {% endif %}
                    {% if boldTitle %}
                        <div class=\"delay-2500 animated animated-border--bottom\"></div>
                    {% endif %}
                </div>
            </div>
            {{ content.field_photo_credits }}
        </div>
        {% endif %}
    {% endif %}

    {{ content.field_sections_in_card }}

    {% if paragraph.field_display_share_widget.value == 1 %}
        <div class=\"js-share\">
            <button class=\"share-button js-share-button button-with-icon animated delay-500\">
                <i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-share-sm.svg') }}
                </i>
                <div>share</div>
            </button>
            <div class=\"share-expander js-share-expander js-share-expander--is-closed\">
                <div class=\"addthis_inline_share_toolbox\" data-url=\"{{ url('<current>') }}#{{ containerId }}\"></div>
            </div>
        </div>
    {% endif %}
    <button class=\"js-next-page next-page animated delay-100\">
        <div class=\"icon--xsmall\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-down-sm.svg') }}</div>
        next page
    </button>
</section>
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--card-section.html.twig", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--card-section.html.twig");
    }
}
