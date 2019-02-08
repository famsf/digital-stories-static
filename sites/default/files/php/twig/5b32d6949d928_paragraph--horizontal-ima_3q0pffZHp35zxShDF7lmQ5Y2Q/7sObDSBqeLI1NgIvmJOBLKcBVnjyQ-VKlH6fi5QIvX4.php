<?php

/* themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--horizontal-image-slider.html.twig */
class __TwigTemplate_b8fd490ab3e7cb7c564c637d55a1cefca5ef0c2b9c2635e7eb41291b7d2fb2b8 extends Twig_Template
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
        $tags = array("set" => 40);
        $filters = array("clean_class" => 44);
        $functions = array("include" => 56, "active_theme_path" => 56);

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

        // line 40
        $context["classes"] = array(0 => "paragraph", 1 => "js-horizontal-slider__wrapper", 2 => "horizontal-slider__wrapper", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 4 => ((        // line 45
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 48
        echo "<div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " >
  <ul class=\"js-horizontal-slider horizontal-slider\" data-auto=\"";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_auto_play", array()), "value", array()), "html", null, true));
        echo "\" data-maxslides=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_max_slides_in_view", array()), "value", array()), "html", null, true));
        echo "\" data-minslides=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_min_slides_in_view", array()), "value", array()), "html", null, true));
        echo "\" data-moveslides=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_number_of_slides_to_move", array()), "value", array()), "html", null, true));
        echo "\">
    ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_slide", array()), "html", null, true));
        echo "
  </ul>
  <div class=\"horizontal-slider-controls\">
    <div class=\"horizontal-slider-controls-direction\">
      <a class=\"horizontal-slider-prev\" href=\"#\">
        <span class=\"icon--med\">
        ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-left-md.svg"))));
        echo "</span>
      </a>
      <a class=\"horizontal-slider-next\" href=\"#\">
        <span class=\"icon--med\">
        ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-right-md.svg"))));
        echo "</span>
      </a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--horizontal-image-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 60,  71 => 56,  62 => 50,  52 => 49,  47 => 48,  45 => 45,  44 => 44,  43 => 40,);
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
{%
set classes = [
'paragraph',
'js-horizontal-slider__wrapper',
'horizontal-slider__wrapper',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class
]
%}
<div {{ attributes.addClass(classes) }} >
  <ul class=\"js-horizontal-slider horizontal-slider\" data-auto=\"{{ paragraph.field_auto_play.value }}\" data-maxslides=\"{{ paragraph.field_max_slides_in_view.value }}\" data-minslides=\"{{ paragraph.field_min_slides_in_view.value }}\" data-moveslides=\"{{ paragraph.field_number_of_slides_to_move.value }}\">
    {{ content.field_slide }}
  </ul>
  <div class=\"horizontal-slider-controls\">
    <div class=\"horizontal-slider-controls-direction\">
      <a class=\"horizontal-slider-prev\" href=\"#\">
        <span class=\"icon--med\">
        {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-left-md.svg') }}</span>
      </a>
      <a class=\"horizontal-slider-next\" href=\"#\">
        <span class=\"icon--med\">
        {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-right-md.svg') }}</span>
      </a>
    </div>
  </div>
</div>
", "themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--horizontal-image-slider.html.twig", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/web/themes/custom/famsf_digital_stories_theme/templates/paragraph/paragraph--horizontal-image-slider.html.twig");
    }
}
