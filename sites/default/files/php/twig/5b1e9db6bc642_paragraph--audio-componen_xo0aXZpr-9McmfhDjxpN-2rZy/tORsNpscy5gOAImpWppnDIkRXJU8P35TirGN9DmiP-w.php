<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--audio-component.html.twig */
class __TwigTemplate_91515f469391d87ed0f4784fc9cfc57bfd5d932f21107f7f6a3ca44bb1461a0b extends Twig_Template
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
        $tags = array("if" => 55);
        $filters = array();
        $functions = array("file_url" => 41, "include" => 47, "active_theme_path" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "<div class=\"js-audio__wrapper audio__wrapper\">
    <audio class=\"js-audio__source\">
        <source src=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_audio_file", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" type=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_audio_file", array()), "entity", array()), "getMimeType", array(), "method"), "html", null, true));
        echo "\">
        Your browser does not support the audio element.
    </audio>

    <button class=\"js-audio__button button-with-icon\">
        <i class=\"js-icon--play icon--small\">
            ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-audio-play-sm.svg"))));
        echo "
        </i>
        <i class=\"js-icon--pause icon--small\" style=\"display:none;\">
            ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-pause-sm.svg"))));
        echo "
        </i>
        ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_play_button_text", array()), "html", null, true));
        echo "
    </button>
</div>
";
        // line 55
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_audio_transcript", array()), "value", array()))) {
            // line 56
            echo "<div class=\"audio-transcript\">
    <button class=\"audio-transcript--trigger js-audio-transcript--trigger\">Audio Transcript</button>
    <div class=\"audio-transcript__drawer js-audio-transcript--hidden\" aria-hidden=\"true\">
        <p>";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_audio_transcript", array()), "value", array()), "html", null, true));
            echo "</p>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--audio-component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 59,  77 => 56,  75 => 55,  69 => 52,  64 => 50,  58 => 47,  47 => 41,  43 => 39,);
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
 * Custom theme implementation to display a paragraph.
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
<div class=\"js-audio__wrapper audio__wrapper\">
    <audio class=\"js-audio__source\">
        <source src=\"{{ file_url(paragraph.field_audio_file.entity.fileuri) }}\" type=\"{{ paragraph.field_audio_file.entity.getMimeType() }}\">
        Your browser does not support the audio element.
    </audio>

    <button class=\"js-audio__button button-with-icon\">
        <i class=\"js-icon--play icon--small\">
            {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-audio-play-sm.svg')  }}
        </i>
        <i class=\"js-icon--pause icon--small\" style=\"display:none;\">
            {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-pause-sm.svg')  }}
        </i>
        {{ content.field_play_button_text }}
    </button>
</div>
{% if paragraph.field_audio_transcript.value is not empty %}
<div class=\"audio-transcript\">
    <button class=\"audio-transcript--trigger js-audio-transcript--trigger\">Audio Transcript</button>
    <div class=\"audio-transcript__drawer js-audio-transcript--hidden\" aria-hidden=\"true\">
        <p>{{ paragraph.field_audio_transcript.value }}</p>
    </div>
</div>
{% endif %}
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--audio-component.html.twig", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--audio-component.html.twig");
    }
}
