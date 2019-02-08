<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--overlay-image.html.twig */
class __TwigTemplate_4d3aa98aceed62820d622e4328c1b1efa4720f40cc2b1c78e9235edea40b7b8e extends Twig_Template
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
        $functions = array("file_url" => 41, "include" => 46, "active_theme_path" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<figure class=\"js-overlay-container\">
    <div class=\"figure__wrapper\">
        <img data-src=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_image", array()), "alt", array()), "html", null, true));
        echo "\" />
        <img class=\"figure__overlay js-overlay-image js-overlay-image--hidden\" src=\"";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_overlay_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_overlay_image", array()), "alt", array()), "html", null, true));
        echo "\" />
    </div>
   ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_photo_credits", array()), "html", null, true));
        echo "
    <button class=\"button-with-icon js-overlay-button figure__overlay-cta\" data-text-collapsed=\"";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_overlay_button_text", array()), "value", array()), "html", null, true));
        echo "\" data-text-expanded=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_overlay_button_expanded", array()), "value", array()), "html", null, true));
        echo "\">
        <i class=\"icon--small\">";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-eye-sm.svg"))));
        echo "</i>
        <div class=\"button-with-icon__text\">";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_overlay_button_text", array()), "value", array()), "html", null, true));
        echo "</div>
    </button>
</figure>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--overlay-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 47,  70 => 46,  64 => 45,  60 => 44,  53 => 42,  47 => 41,  43 => 39,);
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
<figure class=\"js-overlay-container\">
    <div class=\"figure__wrapper\">
        <img data-src=\"{{ file_url(paragraph.field_image.entity.fileuri) }}\" alt=\"{{ paragraph.field_image.alt }}\" />
        <img class=\"figure__overlay js-overlay-image js-overlay-image--hidden\" src=\"{{ file_url(paragraph.field_overlay_image.entity.fileuri) }}\" alt=\"{{ paragraph.field_overlay_image.alt }}\" />
    </div>
   {{ content.field_photo_credits }}
    <button class=\"button-with-icon js-overlay-button figure__overlay-cta\" data-text-collapsed=\"{{ paragraph.field_overlay_button_text.value }}\" data-text-expanded=\"{{ paragraph.field_overlay_button_expanded.value }}\">
        <i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-eye-sm.svg') }}</i>
        <div class=\"button-with-icon__text\">{{ paragraph.field_overlay_button_text.value }}</div>
    </button>
</figure>
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--overlay-image.html.twig", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--overlay-image.html.twig");
    }
}
